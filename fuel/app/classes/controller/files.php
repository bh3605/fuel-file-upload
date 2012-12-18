<?php

class Controller_Files extends Controller
{
	public function action_index()
	{
		$data['name'] = "Files Controller";
		return Response::forge(View::forge('welcome/hello', $data));
	}

	public function action_create()
	{
		return Response::forge(View::forge('files/create'));
	}
}

?>
