<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModuloRequest;
use App\Http\Requests\UpdateModuloRequest;
use App\Models\Curso;
use App\Models\Modulo;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modulos = Modulo::with('curso')->get();
        return view('modulos.index', compact('modulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('modulos.create', compact("cursos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuloRequest $request)
    {
        $modulo = Modulo::create($request->validated());
        return redirect()->route('modulos.edit', compact('modulo'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Modulo $modulo)
    {
        return redirect()->route('modulos.edit', $modulo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modulo $modulo)
    {
        $cursos = Curso::all();
        return view('modulos.edit', compact('cursos', 'modulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModuloRequest $request, Modulo $modulo)
    {
        $modulo->update($request->validated());
        return redirect()->route('modulos.edit', $modulo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modulo $modulo)
    {
        $modulo->delete();
        return redirect()
            ->route('modulos.index')
            ->with('success', 'Módulo removido com sucesso.');
    }
}
