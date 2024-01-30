<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Excel;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->paginate(10);
        return view('layouts.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([

            'Guide' => 'required',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('Completado', 'Guia creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        
        return view ('edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task): RedirectResponse
    {
        $request->validate([

            'Guide' => 'required',
        ]);
        
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('Completado', 'Guia actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('Completado', 'Guia Eliminada exitosamente');
    }




}
