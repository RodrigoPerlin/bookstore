<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosControle extends Controller
{
    public function VerFotos()
    {
        $variable = Produto::all();
         return $variable;
        //return var_dump(json_decode($variable));

    }

    public function registrarProduto()
    {   
    return 'produto cadastrado';
    }

    public function Deletar($id)
    {   
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return 'Produto deletado com sucesso'; 
    }

    
}
