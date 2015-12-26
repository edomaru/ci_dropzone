<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Controller {

	public function index()
	{
		$this->load->view("index");
	}

	public function upload()
	{
		if ( ! empty($_FILES)) 
		{
			$config["upload_path"]   = "./uploads";
			$config["allowed_types"] = "gif|jpg|png";
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload("file")) {
				echo "failed to upload file(s)";
			}
		}
	}

}