<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();

        return view('index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // valida o formulário
     $request->validate([
        'nome' => 'required',
        'email' => 'required|unique:pessoas,email',
        'cpf' => 'required|unique:pessoas,cpf',
        'cep' => 'required',
        'bairro' => 'required',
        'endereco' => 'required',
        'estado' => 'required',
        'cidade' => 'required']);
      // obtém os valores do form
      Pessoa::create($request->all());
        
      // direciona para página index novamente,
      // com uma mensagem de sucesso
      return redirect()->route('pessoas.index')
        ->with('mensagem', 'Cadastro salvo com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        return view('show', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        return view('edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'cep' => 'required',
            'bairro' => 'required',
            'endereco' => 'required',
            'estado' => 'required',
            'cidade' => 'required']);
            
          // obtém os valores do form
          $pessoa->update($request->all());
            
          // direciona para página index novamente,
          // com uma mensagem de sucesso
          return redirect()->route('pessoas.index')
            ->with('mensagem', 'Cadastro atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
     
        // vamos chamar a view com uma mensagem de
        // de sucesso.
        return redirect()->route('pessoas.index')
          ->with('mensagem','Cadastro excluído com sucesso.');
    }
    public function changePessoaStatus(Request $request) 
    {
        $peoples = Pessoa::find($request->pessoa_id);
        $peoples->status = $request->status;
        $peoples->save();
    }
    public function changePessoaPagamentos(Request $request) 
    {
        $pagamentos = Pessoa::find($request->pessoa_id);
        $pagamentos->pagamentos = $request->pagamentos;
        $pagamentos->save();
    }
}
