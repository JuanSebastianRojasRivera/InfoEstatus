<?php

namespace App\Http\Controllers;

use App\Models\guide_statuses;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class GuideStatusController extends Controller
{
    public function index()
    {
        $guide_statuses = guide_statuses::latest()->paginate(10);
        return view('guide_status.index', ['guide_statuses' => $guide_statuses]);
    
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new GuideStatusController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0 or empty($dato[0])){
                        continue;
                    }
                    if (count($dato) === 3) {
                        guide_statuses::create([
                            'state_guide'=>$dato[0],
                            'state_gle'=>$dato[1],
                            'agile1'=>$dato[2]
                        ]);

                    }
                    else
                    {
                        return redirect()->route('guide-status.index')->with('CargaFallida', 'Archivo no valido');
                    }
            
                 }
            
            }

            return redirect()->route('guide-status.index')->with('Completado','Se ha cargado correctamente');
        
        }
        else
        {
            return redirect()->route('guide-status.index')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo!!');
        } 
    }

    public function create(){
        return view('guide_status.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'state_guide' => 'required',
            'state_gle' => 'required',
            'agile1' => 'required',
        ]);

        guide_statuses::create($request->all());
        return redirect()->route('guide-status.index')->with('Completado','Se ha creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guide_statuses $guide_status)
    {
        return view ('guide_status.edit', ['guide_status' => $guide_status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, guide_statuses $guide_status): RedirectResponse
    {
        $request->validate([
            'state_guide' => 'required',
            'state_gle' => 'required',
            'agile1' => 'required',
        ]);

        $guide_status->update($request->all());
        return redirect()->route('guide-status.index')->with('Completado', 'La informacion ha sido actualizada con exito');
    }


    public function destroy(guide_statuses $guide_status)
    {
        $guide_status->delete();
        return redirect()->route('guide-status.index')->with('Completado', 'Se ha eliminado el registro correctamente');
    }


    

}
