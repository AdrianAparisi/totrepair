<?php

namespace App\Http\Controllers;

use App\Models\Replacement;
use Illuminate\Http\Request;

class ReplacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $offset = $request->input('offset', 0);
        $repuestos = Replacement::with('images')->skip($offset)->take(12)->get();
        $totalRepuestos = Replacement::count();
        return view('repuestos.index', compact('repuestos', 'totalRepuestos', 'offset'));
    }

    public function getRepuestos(Request $request)
    {
        $offset = $request->input('offset', 0);
        $repuestos = Replacement::with('images')->skip($offset)->take(12)->get();
        $totalRepuestos = Replacement::count();
        return response()->json([
            'repuestos' => $repuestos,
            'totalRepuestos' => $totalRepuestos,
            'offset' => $offset
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Replacement  $replacement
     * @return \Illuminate\Http\Response
     */
    public function show(Replacement $replacement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Replacement  $replacement
     * @return \Illuminate\Http\Response
     */
    public function edit(Replacement $replacement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Replacement  $replacement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Replacement $replacement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Replacement  $replacement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Replacement $replacement)
    {
        //
    }
}
