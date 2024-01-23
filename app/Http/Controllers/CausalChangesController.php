<?php

namespace App\Http\Controllers;

use App\Models\causal_changes;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class CausalChangesController extends Controller
{
    public function index()
    {
        $causal_changes = causal_changes::latest()->paginate(10);
        return view('causal_changes.index', ['causal_changes' => $causal_changes]);
    
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new CausalChangesController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0 or empty($dato[0])){
                        continue;
                    }
                    if (count($dato) >= 4) {
                        causal_changes::create([
                            'causal_operators'=>$dato[0],
                            'causal_status'=>$dato[1],
                            'responsible'=>$dato[2],
                            'operator'=>$dato[3],
                        ]);

                    } 
            
                 }
            
            }

            return redirect()->route('causal-changes.index')->with('Completado','Se ha cargado correctamente');
        
        }
        else
        {
            return redirect()->route('causal-changes.index')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo!!');
        } 
    }

    public function create(){
        return view('causal_changes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'causal_operators' => 'required',
            'causal_status' => 'required',
            'operator' => 'required',
        ]);

        causal_changes::create($request->all());
        return redirect()->route('causal-changes.index')->with('Completado','Se ha creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(causal_changes $causal_change)
    {
        return view ('causal_changes.edit', ['causal_change' => $causal_change]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, causal_changes $causal_change): RedirectResponse
    {
        $request->validate([
            'causal_operators' => 'required',
            'causal_status' => 'required',
            'operator' => 'required',
        ]);
        $causal_change->update($request->all());
        return redirect()->route('causal-changes.index')->with('Completado', 'La informacion ha sido actualizada con exito');
    }


    public function destroy(causal_changes $causal_change)
    {
        $causal_change->delete();
        return redirect()->route('causal-changes.index')->with('Completado', 'Se ha eliminado el registro correctamente');
    }


    

}
