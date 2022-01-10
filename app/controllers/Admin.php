<?php

class Admin extends Controller {
  public function index($nama = "Ahmed", $umur = 20){
    $data = [
      "nama"=>$nama,
      "umur"=>$umur,
      "posisi"=>"Admin",
      "dataUser"=>$this->model("User_model")->getAllUser()
    ];
    
    $this->view("templates/header", $data);
    $this->view("admin/index", $data);
    $this->view("templates/footer");
  }
}
