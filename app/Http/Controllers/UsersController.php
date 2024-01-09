<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendWelcome;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate(10);

        return view('office.usuarios.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('office.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $email = $request['email'];
        $senha = $request['password'];
        $request['password'] = bcrypt($request['password']);

        $cad = User::create($request->all());

        $enviar = Mail::to($request->email)->queue(new SendWelcome( $email , $senha ));

        if (  $cad ){
            return back()->with('mensagem' , 'Usuario cadastrado com sucesso');          
        }else{
            return back()->with('mensagem' , 'Não foi possivel cadastrar');
        }

        

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $result = User::paginate(10);

        return view('office.usuarios.show' , compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $result = User::find($id);

        return view('office.usuarios.edit' , compact('result'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        if(! $user ){
            return back()->with('mensagem' , 'Erro ao atualizar usuario');
        }
        return back()->with('mensagem' , 'Atualizado com sucesso.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $user = User::find($id);
        $user->delete();
    

        if(! $user ){
            return back()->with('mensagem' , 'Erro ao remover usuario');
        }
        return back()->with('mensagem' , 'Removido com sucesso.');
    }
}
