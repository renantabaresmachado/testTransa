<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserOperacoesController extends Controller
{
    public function edit($id){
        $user = User::where('id' , $id)->first();
        return view('auth/edit')->with('user' , $user);
    }
    public function editar (Request $request){
    	$user = User::where('id' , $request->input('idUser'))->first();
    	if($user->name != $request->input('name')){
    		$user->name = $request->input('name');
    	}
    	if($user->email != $request->input('email')	){
    		$user->email = $request->input('email');
    	}
    	if($request->input('password')){
    		$user->password = bcrypt($request->input('password'));

    	}

    	\Session::flash('message', [
            'msg' => 'OK Usuário modificado com sucesso!',
            'class' => "alert alert-success"
        ]);
    	$user->save();
    	return redirect()->route('home');

    }
    public function delete($id){
    	User::where('id' , $id)->delete();
    	\Session::flash('message', [
            'msg' => 'OK Usuário excluído!',
            'class' => "alert alert-danger"
        ]);
    	
    	return redirect()->route('home');

    }
}
