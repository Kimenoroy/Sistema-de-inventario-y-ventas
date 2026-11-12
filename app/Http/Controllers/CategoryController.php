<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function index(): JsonResponse{
        $categories = Category::all();
        return responde()->json($categories);
    }

    public function store(Request $request):jsonResponse{
        $category = Category::create($request->all());
        return response()->json(['message' => 'Categoria creada correctamente'], 201);
    }

    public function show($id):JsonResponse{
        $category = Category::find($id);
        return response()->json($category);
    }

    public function update($id, Request $request):JsonResponse{
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json(['message' => 'Categoria actualizada correctamente']);
    }

    public function destroy($id):JsonResponse{
        $category = Category::find($id);
        $category->delete();
        return response()->json(['message' => 'Categoria eliminada correctamente']);
    }
}
