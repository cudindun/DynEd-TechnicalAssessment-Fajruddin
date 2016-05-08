<?php
  Class Model_institusi extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    private $id;
    private $nama;

  // =========== Mutator / Set ===============

  public function set_id($value)
  {
    $this->id = $value;
  }

  public function set_nama($value)
  {
    $this->member = $value;
  }


  // =========== Accesor / Get ===============

  public function get_id()
  {
    return $this->id;
  }

  public function get_nama()
  {
    return $this->member;
  }

}
