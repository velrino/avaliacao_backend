<?php

class userController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$avalicao_backend = User::orderBy('id', 'DESC')->get();

		return View::make('users.index')->with('avalicao_backend',$avalicao_backend);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$avalicao_backend = new User;

		$avalicao_backend->titulo = Input::get('titulo');
		$avalicao_backend->tamanho = Input::get('tamanho');

		if($avalicao_backend->save()){
			Session::flash('message','Salvo Corretamente');
			Session::flash('class', 'success');
			echo "Par";
		} else{
			Session::flash('message','Ocorreu algum erro');
			Session::flash('class', 'danger');
		}
		return Redirect::to('users/create');

	}	


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id = null)
	{
		$user = User::find($id);

		return View::make('users.show')->with('users', $user);
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$user = User::find($id);

		return View::make('users.edit')->with('users', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	
		$user = User::find($id);

		$user->titulo = Input::get('titulo');
		$user->tamanho = Input::get('tamanho');

		if($user->save()) {
			Session::flash('message','Atualizado');
			Session::flash('class', 'success');
		} else{
			Session::flash('message','Ocorreu algum erro');
			Session::flash('class', 'danger');
		}

		return Redirect::to('users/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);

		if($user->delete()) {
			Session::flash('message','Excluído');
			Session::flash('class', 'success');
		} else{
			Session::flash('message','Ocorreu algum erro ao tentar deletar');
			Session::flash('class', 'danger');
		}

		return Redirect::to('users');
	}


}
