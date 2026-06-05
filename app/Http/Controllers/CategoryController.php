<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'icono_id'    => 'nullable|integer',
        ]);

        $category = Category::create([
            'name'        => $request->name,
            'description' => $request->description,
            'icono_id'    => $request->icono_id ?? 0,
        ]);

        return response()->json($category, 201);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }
        $category->delete();
        return response()->json(['message' => 'Categoría eliminada'], 200);
    }
}