<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index(Request $request)
    {
        $nota = Nota::all();
        return $nota;
        //Esta función nos devolvera todas las notas que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        $nota = new Nota();
        $nota->nombre = $request->nombre;
        $nota->contenido = $request->contenido;

        $nota->save();
        //Esta función guardará las notas que enviaremos mediante vuejs
    }
    public function show(Request $request)
    {
        $nota = Nota::findOrFail($request->id);
        return $nota;
        //Esta función devolverá los datos de una nota que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $nota = Nota::findOrFail($request->id);

        $nota->nombre = $request->nombre;
        $nota->contenido = $request->contenido;

        $nota->save();

        return $nota;
        //Esta función actualizará la nota que hayamos seleccionado

    }

    public function destroy(Request $request)
    {
        $nota = Nota::destroy($request->id);
        return $nota;
        //Esta función obtendra el id de la nota que hayamos seleccionado y la borrará de nuestra BD
    }
}
