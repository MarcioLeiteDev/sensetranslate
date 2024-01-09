<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            // Obtém o ID do usuário
            $id = Auth::id();
        
            // Pesquisa o usuário na tabela de usuários
            $usuario = User::find($id);
        
            // Obtém o nome do usuário
            $nome = $usuario->name;
        
            // Exibe o nome do usuário
            return view('office.home', compact('nome'));
          }
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
                // Destruir todas as sessões
              //  Auth::logout();

              Auth::guard('web')->logout();

                // Redirecionar para a rota principal
                return redirect('./../');
        // return "ESTOU SAINDO";
    }
}
