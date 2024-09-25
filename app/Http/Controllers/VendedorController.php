<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function criar(Request $request) {
        $vendedor = new Vendedor;
        $vendedor->nome = $request->nome;
        $vendedor->matricula = $request->matricula;
        $vendedor->comisao = $request->comisao;
       

        $vendedor->save();
        return redirect('/listar_vendedors');
    }

    public function listar() {
        $vendedors = Vendedor::all();

        return view("vendedors", ["vendedors"=>$vendedors]);
    }

    public function formCriarVendedor() {
        return view("cadastro_vendedor");
    }
}
