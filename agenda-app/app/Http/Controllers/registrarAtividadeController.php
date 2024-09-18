<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrarEvento;

class registrarAtividadeController extends Controller
{
    public function index()
    {
        $dados = registrarEvento::all();  //Pegar todos os dados do banco
        return view('paginas.cadastrar')->With('dados',$dados);  //With - palavra dados representa algo do banco de dados por meio do método all
    }

    public function store(Request $request){//pegando os dados na input
        $data = $request->input('dataEvento'); //Coletando um dado do campo name dataEvento
        $descricao = $request->input('descricao');
    
        $model = new registrarEvento();
        $model->dataEvento = $data; //Colocando no campo dataEvento
        $model->descricao = $descricao;

        $model->save();//Salvo na BD
        return redirect('/cadastrar');
    }

    public function consultar()
    {
        $ids = registrarEvento::all(); //todos os dados do banco na variavel ids

        return view('paginas.consultar', compact('ids'));
    }

    public function editar($id)
    {
        $dado = registrarEvento::findOrFail($id); //vai buscar o id e se achar mostra linha do dado
        return view('paginas.editar', compact('dado')); //view pega um valor, enquanto a redirect so redireciona
    }

    public function atualizar(Request $request, $id){
        registrarEvento::where('id', $id)->update($request->all());
        return redirect('/consultar');
    }

    public function excluir(Request $request, $id){
        registrarEvento::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }
}//Fim da classe
