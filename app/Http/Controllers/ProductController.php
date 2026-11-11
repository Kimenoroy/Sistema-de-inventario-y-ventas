<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): JsonResponse{
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request): JsonResponse{
        $product = Product::create($request->all());
        return response()->json(['message' => 'Producto creado correctamente'], 201);
    }

    public function show($id):JsonResponse{
        $product = Product::find($id);
        return response()->json($product);
    }

    public function update($id, Request $request): JsonResponse{
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json(['message' => 'Producto actualizado correctamente']);
    }

    public function destroy($id): JsonResponse{
        $product = Product::find($id);
        
        $product->delete();
        return response()->json(['message' => 'Producto eliminado correctamente']);

    }
}
