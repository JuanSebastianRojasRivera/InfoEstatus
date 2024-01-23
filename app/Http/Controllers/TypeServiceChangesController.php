<?php

namespace App\Http\Controllers;

use App\Models\type_service_changes;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class TypeServiceChangesController extends Controller
{
    public function index()
    {
        $type_services = type_service_changes::latest()->paginate(10);
        return view('type_service_changes.index', ['type_services' => $type_services]);
    
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new TypeServiceChangesController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0 or empty($dato[0])){
                        continue;
                    }
                    if (count($dato) === 3) {
                        type_service_changes::create([
                            'typeofservice'=>$dato[0],
                            'servicegle'=>$dato[1],
                            'agile'=>$dato[2]
                        ]);

                    }
                    else
                    {
                        return redirect()->route('type-service.index')->with('CargaFallida', 'Archivo no valido');
                    }
            
                 }
            
            }

            return redirect()->route('type-service.index')->with('Completado','Se ha cargado correctamente');
        
        }
        else
        {
            return redirect()->route('type-service.index')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo!!');
        } 
    }

    public function create(){
        return view('type_service_changes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'typeofservice' => 'required',
            'servicegle' => 'required',
        ]);

        type_service_changes::create($request->all());
        return redirect()->route('type-service.index')->with('Completado','Se ha creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type_service_changes $type_service)
    {
        return view ('type_service_changes.edit', ['type_service' => $type_service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, type_service_changes $type_service): RedirectResponse
    {
        $request->validate([
            'typeofservice' => 'required',
            'servicegle' => 'required',
        ]);

        $type_service->update($request->all());
        return redirect()->route('type-service.index')->with('Completado', 'La informacion ha sido actualizada con exito');
    }


    public function destroy(type_service_changes $type_service)
    {
        $type_service->delete();
        return redirect()->route('type-service.index')->with('Completado', 'Se ha eliminado el registro correctamente');
    }


    

}
