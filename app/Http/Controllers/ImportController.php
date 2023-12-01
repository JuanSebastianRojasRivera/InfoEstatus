<?php

namespace App\Http\Controllers;

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
                        'title' => $dato[0], // Asegúrate de que el índice coincida con la estructura de tus datos
                        'description' => $dato[1],
                        'status' => $dato[2],
                    ]);
    
                // Aquí podrías realizar acciones con los datos obtenidos del archivo Excel
                // Por ejemplo, insertar en la base de datos, procesar los datos, etc.
            }
            task::insert($datosImportar);
        }

        return back();
    }
    
 }

     public function exportar(){

        $tasks = Task::all();

        Excel::create('tasks', function ($excel) use ($tasks){
            $excel->sheet('Exportar', function($sheet) use ($tasks) {
                $sheet->fromArray($tasks);
            });              
        })->export('xls');
    }

    // ...otros métodos de tu controlador
}
 