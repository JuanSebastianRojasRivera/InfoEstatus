<?php

namespace App\Http\Controllers;

use App\Models\guide_clients;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class GuideClientsController extends Controller
{
    public function index()
    {
        $guide_clients = guide_clients::latest()->paginate(10);
        return view('guide_clients.index', ['guide_clients' => $guide_clients]);
    
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new GuideClientsController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0 or empty($dato[0])){
                        continue;
                    }
                    if (count($dato) === 2) {
                        guide_clients::create([
                            'guide1'=>$dato[0],
                            'client1'=>$dato[1],
                        ]);

                    }
                    else
                    {
                        return redirect()->route('guide-clients.index')->with('CargaFallida', 'Archivo no valido');
                    }
            
                 }
            
            }

            return redirect()->route('guide-clients.index')->with('Completado','Se ha cargado correctamente');
        
        }
        else
        {
            return redirect()->route('guide-clients.index')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo!!');
        } 
    }

    public function create(){
        return view('guide_clients.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'guide1' => 'required',
            'client1' => 'required',
        ]);

        guide_clients::create($request->all());
        return redirect()->route('guide-clients.index')->with('Completado','Se ha creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guide_clients $guide_client)
    {
        return view ('guide_clients.edit', ['guide_client' => $guide_client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, guide_clients $guide_client): RedirectResponse
    {
        $request->validate([
            'guide1' => 'required',
            'client1' => 'required',
        ]);

        $guide_client->update($request->all());
        return redirect()->route('guide-clients.index')->with('Completado', 'La informacion ha sido actualizada con exito');
    }


    public function destroy(guide_clients $guide_client)
    {
        $guide_client->delete();
        return redirect()->route('guide-clients.index')->with('Completado', 'Se ha eliminado el registro correctamente');
    }


    

}
