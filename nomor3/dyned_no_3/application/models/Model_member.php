<?php
  Class Model_member extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private $id;
    private $member;
    private $institusi;

    public function validate_user($data) {
        $this->db->where('nama_member', $data['member']);
        return $this->db->get('member')->row();
    }
 
    function __destruct() {
        $this->db->close();
    }

    public function getMember($institusi, $parent){
        $this->db->from('institusi');
        $this->db->join('member', 'member.institusi = institusi.id');

        if($parent == 0){
        }else{
          $this->db->where('institusi', $institusi);
          $this->db->or_where('institusi', $parent);
        }

        return $this->db->get()->result();
    }

}
