<?php


class Web_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->date = time();
        $this->load->database();
    }

	public function geclassownall()
	{
		$sql = "SELECT * FROM `class_one` order by id desc";
		return $this->db->query($sql)->result_array();
	}

	public function insertcontact($yourname,$yourcompanyname,$youremail,$yourtel,$yourcountry,$yourproduct,$yoursubject,$yourtag,$addtime)
	{
		$yourname = $this->db->escape($yourname);
		$yourcompanyname = $this->db->escape($yourcompanyname);
		$youremail = $this->db->escape($youremail);
		$yourtel = $this->db->escape($yourtel);
		$yourcountry = $this->db->escape($yourcountry);
		$yourproduct = $this->db->escape($yourproduct);
		$yoursubject = $this->db->escape($yoursubject);
		$yourtag = $this->db->escape($yourtag);
		$addtime = $this->db->escape($addtime);

		$sql = "INSERT INTO `contact` (yourname,yourcompanyname,youremail,yourtel,yourcountry,yourproduct,yoursubject,yourtag,addtime) VALUES ($yourname,$yourcompanyname,$youremail,$yourtel,$yourcountry,$yourproduct,$yoursubject,$yourtag,$addtime)";
		$this->db->query($sql);
	}

	public function insertquestion($title,$contents,$categroy,$email,$yname,$addtime)
	{
		$title = $this->db->escape($title);
		$contents = $this->db->escape($contents);
		$categroy = $this->db->escape($categroy);
		$email = $this->db->escape($email);
		$yname = $this->db->escape($yname);
		$addtime = $this->db->escape($addtime);

		$sql = "INSERT INTO `questions` (title,contents,categroy,email,yname,addtime) VALUES ($title,$contents,$categroy,$email,$yname,$addtime)";
		$this->db->query($sql);
	}
	public function gefaqlist($lname)
	{
		$lname = $this->db->escape($lname);
		$sql = "SELECT * FROM `faqs` WHERE lname = $lname";
		return $this->db->query($sql)->result_array();
	}

	public function classtwolistone($classonename)
	{
		$classonename = $this->db->escape($classonename);
		$sql = "SELECT * FROM `class_two` WHERE classonename = $classonename";
		return $this->db->query($sql)->result_array();
	}

	public function classtwolistonenew($classonename)
	{
		if (!empty($classonename)){
			$classonename = $this->db->escape($classonename);
			$sql = "SELECT * FROM `class_two` WHERE classonename = $classonename order by id desc";
			return $this->db->query($sql)->result_array();
		}
		$sql = "SELECT * FROM `class_two` order by id desc limit 1";
		return $this->db->query($sql)->result_array();
	}

	public function classonetal($classname)
	{
		if (!empty($classname)){
			$classname = $this->db->escape($classname);
			$sql = "SELECT * FROM `class_one`  WHERE classname = $classname";
			return $this->db->query($sql)->row_array();
		}
		return array();
	}

	public function getgoodslist($classtwoname,$yflg)
	{
		$classtwoname = $this->db->escape($classtwoname);
		$yflg = $this->db->escape($yflg);
		$sql = "SELECT * FROM `goods` WHERE classtwoname = $classtwoname and yflg = $yflg";
		return $this->db->query($sql)->result_array();
	}

	public function classtwodeta($classtname)
	{
		$classtname = $this->db->escape($classtname);
		$sql = "SELECT * FROM `class_two`  WHERE classtname = $classtname";
		return $this->db->query($sql)->row_array();
	}

	public function getgoodslistsearch($classonename,$searhtext)
	{
		$sqlw = " where 1=1 ";
		if (!empty($classonename)) {
			$classonename = $this->db->escape($classonename);
			$sqlw .= " and classonename = $classonename";
		}
		if (!empty($searhtext)) {
			$sqlw .= " and ( catalognumber like '%" . $searhtext . "%' or part like '%" . $searhtext . "%' ) ";
		}
		$sql = "SELECT * FROM `goods` " . $sqlw . " order by id desc ";
		return $this->db->query($sql)->result_array();
	}

	public function getgoodslistsearchcount($classonename,$searhtext)
	{
		$sqlw = " where 1=1 ";
		if (!empty($classonename)) {
			$classonename = $this->db->escape($classonename);
			$sqlw .= " and classonename = $classonename";
		}
		if (!empty($searhtext)) {
			$sqlw .= " and ( catalognumber like '%" . $searhtext . "%' or part like '%" . $searhtext . "%' ) ";
		}
		$sql = "SELECT count(1) as number FROM `goods` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return $number;
	}
}
