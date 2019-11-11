<?php
  /**
   *
   */
  class Pages extends Controller{

    public function __construct(){

    }

    public function index(){
      $this->view('pages/index',['lakshan costa','Tallinn','Estonia']);
    }
  }

?>
