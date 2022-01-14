<?php

class AdminPersonalia extends Controller {
  public function index($nama = "Ahmed", $umur = 20){
    $data = [
      "nama"=>$nama,
      "umur"=>$umur,
      "judul"=>"Admin Personalia",
      "dataUser"=>$this->model("User_model")->getAllUser()
    ];
    
    $this->view("templates/header", $data);
    $this->view("adminPersonalia/index", $data);
    $this->view("templates/footer");
  }

  public function tambah(){
    var_dump($_POST);
  }
}
