<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return response()->json(Event::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'organizador' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $event = Event::create([
            'nombre'      => $request->nombre,
            'descripcion' => $request->descripcion,
            'organizador' => $request->organizador,
            'category_id' => $request->category_id,
        ]);

        return response()->json($event, 201);
    }
}
