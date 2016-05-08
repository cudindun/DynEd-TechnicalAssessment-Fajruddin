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
	   $this->load->model('Kode');
	   //$this->session->unset_userdata($data);
	 }

	public function index()
	{
		$this->load->view('home');
	}

	public function enter_with_code(){
		$code = $_POST['code'];
		$result = $this->Kode->enter_code($code);

        if(!empty($result)) {
            $data = [
                'id' => $result->id,
                'code' => $result->kode,
            ];
 
            $this->session->set_userdata($data);

            $data['soal'] = $this->Kode->getSoal($data['code']);

            $getSoal = $this->load->view('soal', $data);

            return $getSoal;
        }else{
        	return 0;
        }

		
	}

	public function submit(){
		$answer = json_decode($_POST['newAnswer'],true);
		$code = $_POST['code'];
		$i = 0;
		$nilai = 100/24;
		$data['totalNilai'] = 0;

		$getAnswer = $this->Kode->getSoal($code);

		$getArr = array();

		foreach($getAnswer as $getAnswer){
			$getArr[] = $getAnswer->jawaban;
		}

		foreach($answer as $answer){
			if($answer == $getArr[$i]){
				$data['totalNilai'] += $nilai;
			}
			$i++;
		}

		$result = $this->load->view('result', $data);
	}

	public function logout(){
		$data = ['id', 'code'];
        $this->session->unset_userdata($data);

        redirect('/');
	}
}