<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Caracteristica;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Antes de retornar la vista recuperamos la información, para ello ponemos el with 
        // para poder recuperar dos tablas, con la el nombre de la relación establecida en el modelo categoria
        $categorias = Categoria::with('caracteristica')->latest()->get();
        // dd($categorias);
        //Cada vez que llamemos al index nos retorne la vista categoria.index
        //Se envia además la vista asignandole a la variable categorias la variable categorias con la información
        return view('categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request) //Se usa el store categoria request
    {
        //Se usa para guardar la información que viene desde el formulario
        // dd($request); sirve para ver los parametros de la información que se esta pasando en el formulario del categoria_create
        try {
            DB::beginTransaction();
            $caracteristica = Caracteristica::create($request->validated());
            $caracteristica->categoria()->create([
                'caracteristica' => $caracteristica->id
            ]);
            // Permite registrar la caracteristica_id de la tabla característica a la tabla de categorias
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // En caso de existir alguna excepción no se va a hacer el registro 
            //en la base de datos
        }
        return redirect()->route('categorias.index')->with('success', 'Categoria Registrada');
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
    public function edit(Categoria $categoria)
    {
        // dd($categoria);
        return view('categorias.edit', ['categoria' => $categoria]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        //Se hace uso de una actualización masiva
        Caracteristica::where('id', $categoria->caracteristica->id)->update($request->validated());
        return redirect()->route('categorias.index')->with('success', 'Categoría Eliminada');
    }

    /** 
     * Remove the specified resource from storage. v
     */
    public function destroy(string $id)
    {
        //
        // dd($id);
        $message = '';
        $categoria = Categoria::find($id);
        if ($categoria->caracteristica->estado == 1) {
            Caracteristica::where('id', $categoria->caracteristica->id)
                ->update([
                    'estado' => 0
                ]);
            $message = 'Categoria desactivada';
        } else {
            Caracteristica::where('id', $categoria->caracteristica->id)
                ->update([
                    'estado' => 1
                ]);
            $message = 'Categoria restaurada';
        }
        return redirect()->route('categorias.index')->with('success', $message);
    }
}