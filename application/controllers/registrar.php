<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once "AbstractController.php";
class Registrar extends AbstractController {
    public function index()
    {
         $this->load->view('registrar/index');
    }
}