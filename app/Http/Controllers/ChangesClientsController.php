<?php

namespace App\Http\Controllers;

use App\Models\changes_clients;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class ChangesClientsController extends Controller
{
    public function index()
    {
        $changes_clients = changes_clients::latest()->paginate(10);
        return view('changes_clients.index', ['changes_clients' => $changes_clients]);
    
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new ChangesClientsController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0 or empty($dato[0])){
                        continue;
                    }
                    if (count($dato) === 2) {
                        changes_clients::create([
                            'short_name'=>$dato[0],
                            'old_name'=>$dato[1],
                        ]);

                    }else{
                        return redirect()->route('changes-clients.index')->with('CargaFallida', '¡Ups, parece que has subido un archivo incorrecto!!');
                    }
            
                 }
            
            }

            return redirect()->route('changes-clients.index')->with('Cargado', 'Se ha cargado el archivo con exito');
        
        }
        else
        {
            return redirect()->route('changes-clients.index')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo!!');
        } 
    }

    public function create()
    {
        return view ('changes_clients.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'short_name' => 'required',
            'old_name' => 'required',
        ]);

        changes_clients::create($request->all());
        return redirect()->route('changes-clients.index')->with('Completado','Se ha creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(changes_clients $changes_client)
    {
        return view ('changes_clients.edit', ['changes_client' => $changes_client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, changes_clients $changes_client): RedirectResponse
    {
        $request->validate([
            'short_name' => 'required',
            'old_name' => 'required',
        ]);

        $changes_client->update($request->all());
        return redirect()->route('changes-clients.index')->with('Completado', 'La informacion ha sido actualizada con exito');
    }


    public function destroy(changes_clients $changes_client)
    {
        $changes_client->delete();
        return redirect()->route('changes-clients.index')->with('Completado', 'Se ha eliminado el registro correctamente');
    }


    

}
