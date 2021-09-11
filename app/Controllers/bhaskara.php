<?php

namespace App\Controllers;

use App\Models;


class Bhaskara extends BaseController
{
	
	//Exibe o Formulário do Bhaskara
	public function insert()
    {
		//index
		echo view('bhaskara_insert');
		
    }

	//Altera o Formulário do Bhaskara
	public function update()
	{
			//index
			echo view('bhaskara_update');
			
	}

	public function inserir()
    {
		if(isset($this->request->getPost()['id'])){
			$id = $this->request->getPost()['id'];
		}else{
			$id = FALSE;
		}
		$a = $this->request->getPost()['a'];
		$b = $this->request->getPost()['b'];
		$c = $this->request->getPost()['c'];

		$delta = ($b * $b) - (4 * $a * $c);
		$x1 = (- $b + sqrt($delta)) / (2 * $a);
		$x2 = (- $b - sqrt($delta)) / (2 * $a);

		$bhasModel = new \App\Models\BhaskaraModel();

		$data = [
		'a' => $a,
		'b' => $b,
		'c' => $c,
		'delta' => $delta,
		'x1' => $x1,
		'x2' => $x2,
		];

		if($id != FALSE) { 
		$data['id'] = $id;
		}

		$result = $bhasModel->save($data);
		var_dump($result);
		
    }
	
	public function tabela_view()
	{
		$bhasModel = new \App\Models\BhaskaraModel();
		
		$todos = $bhasModel->findAll();
		$data['tabela'] = $todos;

		return view('bhaskara_view', $data);

		
	}
	
	public function excluir($id)
	{
		$bhasModel = new \App\Models\BhaskaraModel();
		
		$result = $bhasModel->delete($id);
		
		var_dump($result);
		
	}
	

	
}