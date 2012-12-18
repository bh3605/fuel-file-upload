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
		$data['refresh_interval'] = null;

		if(Input::method() == 'POST')
		{
			Upload::process();
			if(Upload::get_files('content'))
			{
				$data['alerts'] = array(array('success', 'File uploaded successfully.'));
			}
		}

		return Response::forge(View::forge('files/create', $data));
	}
}

?>
