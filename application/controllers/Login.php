<?php

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

	public function index()
	{
		$this->load->view('Welcome_message');
	}

    public function login()
	{
		$this->load->view('admin/v_login');
	}
	
    public function loginn()
	{
		$username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
		
        $cek_login = $this->M_login->cek_login($username , $password);

        if($cek_login->num_rows() > 0)
        {
            $data = $cek_login->row_array();
            $user = $data['username'];
            $id_user = $data['no'];
            $sesdata = array(
                'username' => $user,
                'no' => $id_user
        );
            $this->session->set_userdata($sesdata);
			
            redirect('Backend');
        }else{
			
            $msg = "Username dan Password Salah";
			$this->session->set_flashdata('error', $msg);
            redirect('Login/login');
        }
        
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login/login','refresh');
	}
}