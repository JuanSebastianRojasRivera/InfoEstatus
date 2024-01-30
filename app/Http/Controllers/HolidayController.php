<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

/**
 * Class HolidayController
 * @package App\Http\Controllers
 */
class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holiday::paginate();

        return view('holiday.index', compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $holiday = new Holiday();
        return view('holiday.create', compact('holiday'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Holiday::$rules);

        $holiday = Holiday::create($request->all());

        return redirect()->route('holidays.index')
            ->with('Completado', 'Se ha agregado el festivo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $holiday = Holiday::find($id);

        return view('holiday.show', compact('holiday'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $holiday = Holiday::find($id);

        return view('holiday.edit', compact('holiday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Holiday $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Holiday $holiday)
    {
        request()->validate(Holiday::$rules);

        $holiday->update($request->all());

        return redirect()->route('holidays.index')
            ->with('Completado', 'El festivo se ha actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $holiday = Holiday::find($id)->delete();

        return redirect()->route('holidays.index')
            ->with('Completado', 'El festivo ha sido eliminado');
    }
}
