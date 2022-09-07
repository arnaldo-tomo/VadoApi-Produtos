<?php

namespace App\Http\Controllers;

use App\Models\produto;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ProdutoController extends Controller
{
    public function getProduto()
    {
        return response()->json(produto::all());
    }

    public function getProdutoById($id)
    {
        $produto = produto::find($id);

        if (is_null($produto)) {
            return response()->json(['message' => 'Produtos nao encontrado'], 404);
        }
        return response()->json($produto = produto::find($id), 200);
    }

    public function addProduto(Request $request)
    {
        $produto = produto::create($request->all());
        return response()->json($produto, 201);
    }

    public function updateProduto(Request $request, $id)
    {
        $produto = produto::find($id);

        if (is_null($produto)) {
            return response()->json(['message' => 'Produtos nao encontrado'], 404);
        }

        $produto->update($request->all());
        return response()->json($produto, 200);
    }

    public function deleteProduto(Request $request, $id)
    {
        $produto = produto::find($id);

        if (is_null($produto)) {
            return response()->json(['message' => 'Produtos nao encontrado'], 404);
        }

        $produto->delete();
        return response()->json($produto, 200);
    }
}
