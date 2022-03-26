<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    
    public function FormularioCriacao()
   {
    return view('produtos.formulario_criacao');
    }

    
    public function RegistrarProduto(Request $request)
   {
   $produto= Produto::create([
        'nome'=> $request->nome,
        'custo'=> $request->custo,
        'preço'=> $request->preço,
        'quantidade'=> $request->quantidade
    ]);
    return "produto $produto->nome criado com sucesso!";
    }


    public function VerProduto($id)
    {
        $produto= Produto::findOrFail($id);
        return view('produtos.visualizacao',['produto'=>$produto]);
    }


    public function EditarProduto($id)
    {
        $produto= Produto::findOrFail($id);
        return view('produtos.editar',['produto'=>$produto]);
    }


    public function SalvarEdição(Request $request, $id)
    {
        $produto= Produto::findOrFail($id);
        $produto->update([
            'nome'=> $request->nome,
            'custo'=> $request->custo,
            'preço'=> $request->preço,
            'quantidade'=> $request->quantidade]);
    return "produto $produto->nome atualizado com sucesso!";        
    }    

    public function ExcluirProduto($id)
    {
        $produto= Produto::findOrFail($id);
        return view('produtos.excluir',['produto'=>$produto]);
    }

    
    public function ConfirmarExclusão($id)
    {
        $produto= Produto::findOrFail($id);
        $produto->delete();
        return "produto $produto->nome excluido!";
    }
}
