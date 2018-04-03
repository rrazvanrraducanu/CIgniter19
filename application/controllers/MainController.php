<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('MainModel');
    }
    public function index()
	{
               $this->load->helper('url');
           $this->data['imgs'] = $this->MainModel->getImages(); 
           $this->load->view('view', $this->data);
         
	}
public function upload()
	{
            $this->load->helper('form');
		$this->load->view('upload');
         
	}
        
        public function save()
        {
            $url=$this->do_upload();
            $title=$_POST["title"];
            $this->MainModel->save($title, $url);
            redirect('MainController/index');
        }
 private function do_upload()
        {
            $type=explode('.',$_FILES["poza"]["name"]);
            $type=$type[count($type)-1];
            $url="./images/".uniqid(rand()).'.'.$type;
            if(in_array($type,array("jpg","jpeg","gif","png")))
                if(is_uploaded_file($_FILES["poza"]["tmp_name"]))
                    if(move_uploaded_file($_FILES["poza"]["tmp_name"], $url))
                        return $url;
            return "";
        }
}

