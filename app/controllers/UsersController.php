<?php

class UsersController extends BaseController {


    protected $layout = 'layouts.main';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
        $this->layout->content = View::make('users.login');
    }

    public function postSignin()
    {
        $regras = array(
            'usuario' => 'required|min:3',
            'senha' => 'required'
        );

        $validacao = Validator::make(Input::all(), $regras);

        if($validacao->fails()){
            return Redirect::to('users')->withErrors($validacao);
        }

        if(Auth::attempt(array('usuario' => Input::get('usuario'), 'senha' => Input::get('senha')))){
            return 'logado com sucesso';
        }else{
            return Redirect::to('users')->withErrors('Usuário ou senha inválidos!');
        }
    }


}
