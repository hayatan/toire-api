<?php

class Controller_Test extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Test &raquo; Index';
		$this->template->content = View::forge('test/index', $data);
	}

    public function  action_push($name)
    {
        $data = new Model_Toiresample(array("name" => $name));
        $data->save();
        var_dump($data);
    }
    public function  action_pull($key)
    {
        $data = Model_Toiresample::find($key);
        var_dump($data);
    }

}
