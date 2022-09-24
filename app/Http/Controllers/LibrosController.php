<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;
class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $libros = Libros::all();
            return response()->json([
                'libros:' => $libros
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libros= Libros::create($request->all());
        
        return response()->json(
          [
            'message' => "Informacion de libro guardada!",
            'libro' => $libros
          ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libros = libros::find($id);

        return response()->json(
            [
                'libros' => $libros
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libros $libros)
    {
        $libros->update($request->all());
        return response()->json([
            'message' => "Libro actualizado",
            'libro' => $libros
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libros $libros)
    {
        $libros->delete();
        return response()->json([
            'message' => "Libro eliminado",
        ],200);
    }
}
