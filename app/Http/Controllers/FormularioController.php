<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Inertia\Inertia;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
{
    return Inertia::render('Formulario', [
        'proyectos' => Proyecto::with('bloques')->get()
    ]);
}
}
