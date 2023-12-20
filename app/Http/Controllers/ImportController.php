<?php

namespace App\Http\Controllers;

use App\Exports\Exports;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\task;
use App\Models\changesclients;
use Illuminate\Support\Facades\DB;


class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = task::all();
        return view('layouts.index');
    }
  

    public function importar(Request $request)
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new ImportController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $dato) {
                    if (count($dato) >= 30) {
                        Task::create([
                            'guide' => $dato[0], // Asegúrate de que el índice coincida con la estructura de tus datos
                            'conveyor' => $dato[1],
                            'client' => $dato[2],
                            'elaboration_date' => $dato[3],
                            'origin' => $dato[4],
                            'client_documentation' => $dato[5],
                            'viv' => $dato[6],
                            'addressee' => $dato[7],
                            'address' => $dato[8],
                            'phone' => $dato[9],
                            'destination_city' => $dato[10],
                            'declared_value' => $dato[11],
                            'parts' => $dato[12],
                            'shipment_type' => $dato[13],
                            'type_route' => $dato[14],
                            'delivery_days' => $dato[15],
                            'scheduled_date' => $dato[16],
                            'presentation_date' => $dato[17],
                            'delivery_appointments' => $dato[18],
                            'delivery_status' => $dato[19],
                            'causal_description' => $dato[20],
                            'causal_amplification' => $dato[21],
                            'causal_amplification2' => $dato[22],
                            'responsible' => $dato[23],
                            'time' => $dato[24],
                            'return_status_fulfilled' => $dato[25],
                            'return_date_fulfilled' => $dato[26],
                            'department_of_origin' => $dato[27],
                            'destination_department' => $dato[28],
                            'weight' => $dato[29],
                        ]);

                    } 
            
            }
            
        }
        
    }
        
        return "Datos actualizados correctamente";
        
    }




    public function collection()
    {
        return Task::all();
    }


    public function exportar()
    {
    return Excel::download(new Exports, 'tasks.xlsx');
    } 

    public function actualizarTabla()
    {
        $datosActualizar = DB::table('tasks')
            ->select('client')
            ->whereIn('client', function ($query) {
                $query->select('old_name')->from('changesclients');
            })
            ->get();

        foreach ($datosActualizar as $dato) {
            $shortName = DB::table('changesclients')
                ->where('old_name', $dato->client)
                ->value('short_name'); 

            DB::table('tasks')
                ->where('client', $dato->client)
                ->update(['client' => $shortName]); 
        }

        return back();
    }
}