<?php

namespace App\Http\Controllers;

use App\Models\ItensPedido;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class produtoController extends Controller
{
    public function index(Request $request)
    {
        $data = produto::all();
        return view("home", compact('data'));
    }
    public function carrinho()
    {
        $data = ItensPedido::all();
        $total = 0;

        foreach($data as $chave => $valor){
            $total = $total + ($data[$chave]['quantidade'] * $data[$chave]->produto->valor);
        }
        return view("carrinho", compact('data', 'total'));
    }
    public function store($produto_id, Request $request)
    {
        //dd($request->all());
        ItensPedido::create([
            "quantidade" => $request['quantidade'],
            "produto_id" => $produto_id
        ]);
        return redirect()->route("home")->with('success' , "Item adicionado com sucesso!");
    }
    public function confirmar()
    {
        return view('confirmar');
    }
    public function postmon($cep){
        $url = "https://api.postmon.com.br/v1/cep/" . $cep;
        return Http::get($url)->json();
    }
    public function delete($produto_id)
    {
        ItensPedido::findOrFail($produto_id)->delete();
        return redirect()->route("carrinho")->with('success' , "Item removido com sucesso!");
    }
}
