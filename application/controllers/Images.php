<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Controller {

	private $upload_path = "./uploads";

	public function index()
	{
		$this->load->view("index");
	}

	public function upload()
	{
		if ( ! empty($_FILES)) 
		{
			$config["upload_path"]   = $this->upload_path;
			$config["allowed_types"] = "gif|jpg|png";
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload("file")) {
				echo "failed to upload file(s)";
			}
		}
	}

	public function remove()
	{
		$file = $this->input->post("file");
		if ($file && file_exists($this->upload_path . "/" . $file)) {
			unlink($this->upload_path . "/" . $file);
		}
	}

}