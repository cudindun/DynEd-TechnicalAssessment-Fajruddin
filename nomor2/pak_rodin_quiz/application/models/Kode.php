<?php
  Class Kode extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private $id;
    private $kode;

    public function enter_code($data) {
        $this->db->where('kode', $data);
        return $this->db->get('kode')->row();
    }
 
    function __destruct() {
        $this->db->close();
    }

    public function getSoal($code){
        $this->db->from('kode');
        $this->db->where('kode', $code);
        $this->db->join('soal', 'kode.id = soal.kode_soal');

        return $this->db->get()->result();
    }

}
