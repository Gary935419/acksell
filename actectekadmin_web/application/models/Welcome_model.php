<?php


class Welcome_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->date = time();
        $this->load->database();
    }

	public function getnum1()
	{
		$sqlw = " where 1=1 ";
		$sql = "SELECT count(1) as number FROM `contact` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return $number;
	}

	public function getnum2()
	{
		$sqlw = " where 1=1 ";
		$sql = "SELECT count(1) as number FROM `questions` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return $number;
	}

	public function getnum3()
	{
		$sqlw = " where 1=1 and yflg=1 ";
		$sql = "SELECT count(1) as number FROM `goods` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return $number;
	}

	public function getnum4()
	{
		$sqlw = " where 1=1 and yflg!=1 ";
		$sql = "SELECT count(1) as number FROM `goods` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return $number;
	}
}
