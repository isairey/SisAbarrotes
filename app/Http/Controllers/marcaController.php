<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Models\Caracteristica;
use App\Models\Marca;
use Illuminate\Support\Facades\DB;

class marcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $marcas = Marca::with("caracteristica")->latest()->get();
        return view("marcas.index", ['marcas' => $marcas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarcaRequest $request)
    {
        // dd($request);
        try {
            DB::beginTransaction();
            $caracteristica = Caracteristica::create($request->validated());
            $caracteristica->marca()->create([
                'caracteristica' => $caracteristica->id
            ]);
            // Permite registrar la caracteristica_id de la tabla característica a la tabla de categorias
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            // En caso de existir alguna excepción no se va a hacer el registro 
            //en la base de datos
        }
        // try {
        //     DB::beginTransaction();
        //     $caracteristica = Caracteristica::create($request->validated());
        //     $caracteristica->marca()->create([
        //         'caracteristica' => $caracteristica->id
        //     ]);
        //     DB::commit();
        // } catch (\Exception $e) {
        //     DB::rollBack();
        // }

        return redirect()->route('marcas.index')->with('success', 'Marca Registrada');
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
    public function edit(Marca $marca)
    {
        return view('marcas.edit', ['marca' => $marca]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarcaRequest $request, Marca $marca)
    {
        //
        Caracteristica::where('id', $marca->caracteristica->id)->update($request->validated());
        return redirect()->route('marcas.index')->with('success', 'Marca Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $message = '';
        $marca = Marca::find($id);
        if ($marca->caracteristica->estado == 1) {
            Caracteristica::where('id', $marca->caracteristica->id)
                ->update([
                    'estado' => 0
                ]);
            $message = 'Marca Desactivada';
        } else {
            Caracteristica::where('id', $marca->caracteristica->id)
                ->update([
                    'estado' => 1
                ]);
            $message = 'Marca Restaurada';
        }
        return redirect()->route('marcas.index')->with('success', $message);
    }
}
