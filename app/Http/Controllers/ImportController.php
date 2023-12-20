<?php

namespace App\Http\Controllers;

use App\Exports\Exports;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\task;
use App\Models\changesclients;
use App\Models\guideofclients;
use App\Models\guide_status;
use App\Models\causal_changes;
use App\Models\typeofservice_changes;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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

//DADASDASDADADADAD

    $datosActualizar = DB::table('tasks')
    ->select('client', 'guide') 
    ->whereIn('guide', function ($query) {
        $query->select('guide1')->from('guideofclients');
    })
    ->get();

foreach ($datosActualizar as $dato) {
    $guideofcl = DB::table('guideofclients')
        ->where('guide1', $dato->guide)
        ->value('client1'); 

    
    if ($guideofcl !== null) {
        DB::table('tasks')
            ->where('client', $dato->client)
            ->update(['client' => $guideofcl]);
    }
}
//DADASDASDADADADAD

    $datosActualizar = DB::table('tasks')
    ->select('shipment_type') 
    ->whereIn('shipment_type', function ($query) {
        $query->select('typeofservice')->from('typeofservice_changes');
    })
    ->get();

foreach ($datosActualizar as $dato) {
    $guideofcl = DB::table('typeofservice_changes')
        ->where('typeofservice', $dato->shipment_type)
        ->value('servicegle'); 

    
    if ($guideofcl !== null) {
        DB::table('tasks')
            ->where('shipment_type', $dato->shipment_type)
            ->update(['shipment_type' => $guideofcl]);
    }
}
    //DADASDASDADADADAD

    $datosActualizar = DB::table('tasks')
    ->select('delivery_status') 
    ->whereIn('delivery_status', function ($query) {
        $query->select('state_guide')->from('guide_status');
    })
    ->get();

foreach ($datosActualizar as $dato) {
    $guideofcl = DB::table('guide_status')
        ->where('state_guide', $dato->delivery_status)
        ->value('state_gle'); 

    
    if ($guideofcl !== null) {
        DB::table('tasks')
            ->where('delivery_status', $dato->delivery_status)
            ->update(['delivery_status' => $guideofcl]);
            }   
        }       

            //DADASDASDADADADAD

    $datosActualizar = DB::table('tasks')
    ->select('causal_amplification') 
    ->whereIn('causal_amplification', function ($query) {
        $query->select('causal_operators')->from('causal_changes');
    })
    ->get();

foreach ($datosActualizar as $dato) {
    $guideofcl = DB::table('causal_changes')
        ->where('causal_operators', $dato->causal_amplification)
        ->value('causal_status'); 

    
    if ($guideofcl !== null) {
        DB::table('tasks')
            ->where('causal_amplification', $dato->causal_amplification)
            ->update(['causal_amplification' => $guideofcl]);
            }   
        }     
   
                    //DADASDASDADADADAD

    $datosActualizar = DB::table('tasks')
    ->select('causal_amplification') 
    ->whereIn('causal_amplification', function ($query) {
        $query->select('causal_operators')->from('causal_changes');
    })
    ->get();

foreach ($datosActualizar as $dato) {
    $guideofcl = DB::table('causal_changes')
        ->where('causal_operators', $dato->causal_amplification)
        ->value('causal_status'); 

    
    if ($guideofcl !== null) {
        DB::table('tasks')
            ->where('causal_amplification', $dato->causal_amplification)
            ->update(['causal_amplification' => $guideofcl]);
            }    
        } 
        
        
        return back();  
    } 
}