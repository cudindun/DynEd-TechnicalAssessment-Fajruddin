<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('Model_member');
	 }

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('main');
		$this->load->view('layouts/footer');
	}

	// mengambil semua member yang berhubungan dengan institusi member yang login
	public function member(){

		$data['member'] = $this->Model_member->getMember($this->session->userdata('institusi'), $this->session->userdata('parent'));
		$this->load->view('layouts/header');
		$this->load->view('member', $data);
		$this->load->view('layouts/footer');
	}

	//login dengan mengambil nama_member dari tabel member
	public function login(){
		if($_POST) {
            $result = $this->Model_member->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'id_member' => $result->id,
                    'nama_member' => $result->nama_member,
                    'institusi' => $result->institusi,
                    'parent' => $result->parent
                ];
 
                $this->session->set_userdata($data);
                //$this->session->set_flashdata('flash_data', 'Sukses');
                redirect('home/member');
            } else {
                $this->session->set_flashdata('flash_data', 'Member Not Found');
                redirect('/');
            }
        }else{
        	redirect('/');
        }
	}

	public function logout() {
		if(empty($this->session->userdata('id_member'))){
            redirect('home');
	    }

        $data = ['id_member', 'nama_member'];
        $this->session->unset_userdata($data);
 
        redirect('home');
    }
}
