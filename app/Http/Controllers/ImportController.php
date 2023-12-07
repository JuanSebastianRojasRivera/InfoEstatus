<?php

namespace App\Http\Controllers;

use App\Exports\Exports;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\task;


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
    
            $datos = Excel::toArray([], $path);
    
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];

                foreach ($datosImportar as $dato) {
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

                    Task::where('guide', 'Prueba1')->update(['guide' => 'Prueba2']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', '" PIEDRAHITA ESTEBAN"')->update(['client' => '" PIEDRAHITA ESTEBAN"']);
                    Task::where('client', 'NESTLE DE COLOMBIA')->update(['client' => 'NESTLE DE COLOMBIA']);
                    Task::where('client', '115-DISTRIKIA- J')->update(['client' => 'DISTRIKIA']);
                    Task::where('client', '1243612515953-01-CAMILA USAQUEN / CAMILA ANDREA USAQUEN')->update(['client' => 'PEPE GANGA - TOBERIN']);
                    Task::where('client', '136351977 G.L.E-LOGISTICA 361 - COPACABANA')->update(['client' => 'LOGISTICA 361']);
                    Task::where('client', '14 SUPERTIENDAS CAAVERAL S.A CANAMOR')->update(['client' => 'CANAMOR']);
                    Task::where('client', '16 MAKRO SUPERMAYORISTA S.A')->update(['client' => 'CANAMOR']);
                    Task::where('client', '185338021-SANCHEZ CAMACHO ANDRES FERNANDO')->update(['client' => 'NU SKIN']);
                    Task::where('client', '186347833-JULIAN  RAMIREZ')->update(['client' => 'NU SKIN,']);
                    Task::where('client', 'Recuperando datos. Espere unos segundos e intente cortar o copiar de nuevo.')->update(['client' => 'CANAMOR']);
                    Task::where('client', '3+SECURITY')->update(['client' => '3+ SECURITY']);
                    Task::where('client', '361 LOGISTICA')->update(['client' => 'LOGISTICA 361']);
                    Task::where('client', '3PL LSC S.A.S.')->update(['client' => '3PL LOGISTICS SOLUTIONS']); 
                    Task::where('client', '453000066 GARCIA GARCIA LUZ MARY')->update(['client' => 'OVALL COSMETICS']); 
                    Task::where('client', '456517734 SAVAKE COLOMBIA')->update(['client' => 'SAVAKE COLOMBIA']);    
                    Task::where('client', '456518960 04 SUPERTIENDAS CAAVERAL S.A CANAMOR')->update(['client' => 'CANAMOR']); 
                    Task::where('client', '456761228 GRICOL')->update(['client' => 'GRICOL']); 
                    Task::where('client', '456777395 02 ALMACENES EXITO S.A CANAMOR')->update(['client' => 'CANAMOR']); 
                    Task::where('client', '457026311 G.L.E-LOGISTICA 361 - COPACABANA')->update(['client' => 'LOGISTICA 361']); 
                    Task::where('client', 'A TIEMPO CARGO')->update(['client' => 'A TIEMPO CARGO - PRINCIPAL']); 
                    Task::where('client', 'A TIEMPO CARGO S.A.S')->update(['client' => 'A TIEMPO CARGO - PRINCIPAL']); 
                    Task::where('client', 'A TIEMPO CARGO S.A.S. - PRINCIPAL')->update(['client' => 'A TIEMPO CARGO - PRINCIPAL']); 
                    Task::where('client', 'ABC GOTUPLAS')->update(['client' => 'ABC GOTUPLAS']); 
                    Task::where('client', 'ABC MAQUINA Y RESPUESTOS')->update(['client' => 'ABC MAQUINAS Y REPUESTOS - BARRANQUILLA']); 
                    Task::where('client', 'ABC MAQUINAS Y REPUESTOS')->update(['client' => 'ABC MAQUINAS Y REPUESTOS - BUCARAMANGA']);
                    Task::where('client', 'ACME GAMES ENTERTAINMENT - PAQUETEO')->update(['client' => 'ACME - PAQUETEO']);
                    Task::where('client', 'ADN LOGISTICA')->update(['client' => 'ADN LOGISTICA']); 
                    Task::where('client', 'ADN LOGISTICA S.A.S.')->update(['client' => 'ADN LOGISTICA']);
                    Task::where('client', 'NESTLE DE COLOMBIA')->update(['client' => 'ADRIANA FRANCO']);
                    Task::where('client', 'AEROPOST')->update(['client' => 'AEROPOST']);
                    Task::where('client', 'AGF')->update(['client' => 'ALLIANCE GLOBAL FREIGTH - MOSQUERA']);
                    Task::where('client', 'AGF S.A.S')->update(['client' => 'ALLIANCE GLOBAL FREIGTH - MOSQUERA']);
                    Task::where('client', 'AGF SAS')->update(['client' => 'ALLIANCE GLOBAL FREIGTH - MOSQUERA']);
                    Task::where('client', 'AGRO COMERCIAL')->update(['client' => 'PROVEEDORA AGRO COMERCIAL PAC - PRINCIPAL']);
                    Task::where('client', 'AIR CARRIER LOGISTICS')->update(['client' => 'AIR CARRIER LOGISTICS']);
                    Task::where('client', 'AIR CARRIER LOGISTICS')->update(['client' => 'AIR CARRIER LOGISTICS S.A.S.']);
                    Task::where('client', 'ALBERTINI')->update(['client' => 'ALBERTINI']);
                    Task::where('client', 'ALIANZA COMERCIAL')->update(['client' => 'METROKIA - ALIANZA COMERCIAL DE SEGUROS']);
                    Task::where('client', 'alianza conmercial de seguros')->update(['client' => 'METROKIA - ALIANZA COMERCIAL DE SEGUROS']);
                    Task::where('client', 'ALTATEX')->update(['client' => 'ALTATEX']);
                    Task::where('client', 'AMARTEX')->update(['client' => 'AMARTEX']);
                    Task::where('client', 'ANA VARGAS / BOUTIQUE VIVA BARRANQUILLA')->update(['client' => 'NESTLE DE COLOMBIA']);
                    Task::where('client', 'ANC AUTOS')->update(['client' => 'KIA PLAZA - PRINCIPAL']);
                    Task::where('client', 'ANDES CABLES')->update(['client' => 'ANDES CABLES']);
                    Task::where('client', 'ANDES CABLES SAS MELISSA CORREA')->update(['client' => 'ANDES CABLES']);
                    Task::where('client', 'ANULADA')->update(['client' => 'GLE - ANULADAS']);
                    Task::where('client', 'ARANI')->update(['client' => 'ARANI']);
                    Task::where('client', 'ARBORIT')->update(['client' => 'ARBORIT']);
                    Task::where('client', 'ASER ASEO')->update(['client' => 'ASER ASEO']);
                    Task::where('client', 'ASOCIACION PROFAMILIA- PERSONAL CASALIMPIA')->update(['client' => 'CASALIMPIA - BOGOTA']);
                    Task::where('client', 'ASTURIAS Y ARAGON')->update(['client' => 'PEPE GANGA - ASTURIAS Y ARAGON']);
                    Task::where('client', 'AT TECNOLOGIA')->update(['client' => 'AT TECNOLOGIA - BOGOTA']);
                    Task::where('client', 'AT TECNOLOGIA - BOGOTA')->update(['client' => 'AT TECNOLOGIA - BOGOTA']);
                    Task::where('client', 'AUTOCOM')->update(['client' => 'AUTOCOM - COTA']);
                    Task::where('client', 'AUTOCOM - AV 1')->update(['client' => 'AUTOCOM - AV 1']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);
                    Task::where('client', 'PROARCA')->update(['client' => 'PROARCA']);




                return "Datos actualizados correctamente";
                // Aquí podrías realizar acciones con los datos obtenidos del archivo Excel
                // Por ejemplo, insertar en la base de datos, procesar los datos, etc.
            }
            task::insert($datosImportar);
        }

        return back();
    }
    
 }

 public function collection()
 {
     return Task::all();
 }


 public function exportar()
{
 return Excel::download(new Exports, 'tasks.xlsx');
} 

public function EquiNom()
{

    DB::table('tasks')
    ->where('title', 'Prueba1')
    ->update(['title' => 'Prueba2']);
    
return "Datos actualizados correctamente";
} 


    // ...otros métodos de tu controlador
}
