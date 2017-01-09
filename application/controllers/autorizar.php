<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once "AbstractController.php";
class Autorizar extends AbstractController {

	public function index()
	{
	    if(!$this->session->userdata('login') || !$this->input->post('email')) {
            $this->load->view('autorizar/index');
        }
        else {
            if($this->input->post('email')){


                $data = array(
                        'usuario' => 'johndoe',
                        'email' => 'johndoe@some-site.com',
                        'nombre' => 'johndoe@some-site.com',
                        'login' => TRUE
                    );

                    $this->session->set_userdata($data);
                }
            else{
                $this->load->view('autorizar/index');
            }
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */