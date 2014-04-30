<?php

class LoginController extends \BaseController {


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

    public function postIndex()
    {
        $regras = array(
            'username' => 'required|min:3',
            'password' => 'required|min:3'
        );

        $validacao = Validator::make(Input::all(), $regras);

        if($validacao->fails()){
            return Redirect::to('login')->withErrors($validacao);
        }
        if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'), 'status' => 1))){
            return 'logado com sucesso';
        }else{
            $msg = 'User: '. Input::get('username') . ' Pass: ' . Input::get('password');
            return Redirect::to('login')->withErrors('Usuário ou senha inválidos: <br /><b>' . $msg . '</b>');
        }
    }

}
