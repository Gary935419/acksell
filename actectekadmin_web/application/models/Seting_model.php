<?php


class Seting_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->date = time();
        $this->load->database();
    }

    //查询信息
    public function getSetingAll()
    {
        $sqlw = " where 1=1 ";
        $sql = "SELECT * FROM `setting` " . $sqlw;
		return $this->db->query($sql)->row_array();
    }
 
    //角色save_edit
    public function seting_save_edit($indexbuynow,$companyemail,$onlinestore,$companyname,$companyaddress,$companytel,$companyfax,$companytechnical,$companyinquiries,$companyskype,$companydistributor,$privacyinfo,$privacydate)
    {
		$indexbuynow = $this->db->escape($indexbuynow);
		$companyemail = $this->db->escape($companyemail);
		$onlinestore = $this->db->escape($onlinestore);
		$companyname = $this->db->escape($companyname);
		$companyaddress = $this->db->escape($companyaddress);
		$companytel = $this->db->escape($companytel);
		$companyfax = $this->db->escape($companyfax);
		$companytechnical = $this->db->escape($companytechnical);
		$companyinquiries = $this->db->escape($companyinquiries);
		$companyskype = $this->db->escape($companyskype);
		$companydistributor = $this->db->escape($companydistributor);
		$privacyinfo = $this->db->escape($privacyinfo);
		$privacydate = $this->db->escape($privacydate);

        $sql = "UPDATE `setting` SET indexbuynow=$indexbuynow,companyemail=$companyemail,onlinestore=$onlinestore,companyname=$companyname,companyaddress=$companyaddress,companytel=$companytel,companyfax=$companyfax,companytechnical=$companytechnical,companyinquiries=$companyinquiries,companyskype=$companyskype,companydistributor=$companydistributor,privacyinfo=$privacyinfo,privacydate=$privacydate WHERE id = 1";
        return $this->db->query($sql);
    }

	//获取管理员信息
	public function getContactAllPage($email)
	{
		$sqlw = " where 1=1 ";
		if (!empty($email)) {
			$sqlw .= " and ( youremail like '%" . $email . "%' ) ";
		}
		$sql = "SELECT count(1) as number FROM `contact` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return ceil($number / 10) == 0 ? 1 : ceil($number / 10);
	}
	//获取管理员信息
	public function getContactAll($pg,$email)
	{
		$sqlw = " where 1=1 ";
		if (!empty($email)) {
			$sqlw .= " and ( youremail like '%" . $email . "%' ) ";
		}
		$start = ($pg - 1) * 10;
		$stop = 10;
		$sql = "SELECT * FROM `contact` " . $sqlw . " order by id desc LIMIT $start, $stop";
		return $this->db->query($sql)->result_array();
	}

	//获取管理员信息
	public function getFaqAllPage($question)
	{
		$sqlw = " where 1=1 ";
		if (!empty($question)) {
			$sqlw .= " and ( question like '%" . $question . "%' ) ";
		}
		$sql = "SELECT count(1) as number FROM `faqs` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return ceil($number / 10) == 0 ? 1 : ceil($number / 10);
	}
	//获取管理员信息
	public function getFaqAll($pg,$question)
	{
		$sqlw = " where 1=1 ";
		if (!empty($question)) {
			$sqlw .= " and ( question like '%" . $question . "%' ) ";
		}
		$start = ($pg - 1) * 10;
		$stop = 10;
		$sql = "SELECT * FROM `faqs` " . $sqlw . " order by id desc LIMIT $start, $stop";
		return $this->db->query($sql)->result_array();
	}
	//获取角色列表
	public function getRole()
	{
		$sql = "SELECT * FROM `label` order by id desc";
		return $this->db->query($sql)->result_array();
	}

	//会員save
	public function faq_save($lname,$question,$answer,$add_time)
	{
		$lname = $this->db->escape($lname);
		$question = $this->db->escape($question);
		$answer = $this->db->escape($answer);
		$add_time = $this->db->escape($add_time);
		$sql = "INSERT INTO `faqs` (lname,question,answer,addtime) VALUES ($lname,$question,$answer,$add_time)";
		return $this->db->query($sql);
	}
	//会員delete
	public function faq_delete($id)
	{
		$id = $this->db->escape($id);
		$sql = "DELETE FROM faqs WHERE id = $id";
		return $this->db->query($sql);
	}

	//获取管理员信息
	public function getQuestionsAllPage($email)
	{
		$sqlw = " where 1=1 ";
		if (!empty($email)) {
			$sqlw .= " and ( email like '%" . $email . "%' ) ";
		}
		$sql = "SELECT count(1) as number FROM `questions` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return ceil($number / 10) == 0 ? 1 : ceil($number / 10);
	}
	//获取管理员信息
	public function getQuestionsAll($pg,$email)
	{
		$sqlw = " where 1=1 ";
		if (!empty($email)) {
			$sqlw .= " and ( email like '%" . $email . "%' ) ";
		}
		$start = ($pg - 1) * 10;
		$stop = 10;
		$sql = "SELECT * FROM `questions` " . $sqlw . " order by id desc LIMIT $start, $stop";
		return $this->db->query($sql)->result_array();
	}



	public function getclassoneAllPage($classname)
	{
		$sqlw = " where 1=1 ";
		if (!empty($classname)) {
			$sqlw .= " and ( classname like '%" . $classname . "%' ) ";
		}
		$sql = "SELECT count(1) as number FROM `class_one` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return ceil($number / 10) == 0 ? 1 : ceil($number / 10);
	}

	public function getclassoneAll($pg,$classname)
	{
		$sqlw = " where 1=1";
		if (!empty($classname)) {
			$sqlw .= " and ( classname like '%" . $classname . "%' ) ";
		}
		$start = ($pg - 1) * 10;
		$stop = 10;
		$sql = "SELECT * FROM `class_one` " . $sqlw . " order by id desc LIMIT $start, $stop";
		return $this->db->query($sql)->result_array();
	}

	public function classone_delete($id)
	{
		$id = $this->db->escape($id);
		$sql = "DELETE FROM class_one WHERE id = $id";
		return $this->db->query($sql);
	}

	public function classone_save($classname,$classimg,$classtitle,$classcontent,$classstatus,$addtime)
	{
		$classname = $this->db->escape($classname);
		$classimg = $this->db->escape($classimg);
		$classtitle = $this->db->escape($classtitle);
		$classcontent = $this->db->escape($classcontent);
		$classstatus = $this->db->escape($classstatus);
		$addtime = $this->db->escape($addtime);

		$sql = "INSERT INTO `class_one` (classname,classimg,classtitle,classcontent,classstatus,addtime) VALUES ($classname,$classimg,$classtitle,$classcontent,$classstatus,$addtime)";
		return $this->db->query($sql);
	}

	public function getclassoneid($id)
	{
		$id = $this->db->escape($id);
		$sql = "SELECT * FROM `class_one` where id=$id ";
		return $this->db->query($sql)->row_array();
	}

	public function classone_save_edit($id,$classname,$classimg,$classtitle,$classcontent)
	{
		$id = $this->db->escape($id);
		$classname = $this->db->escape($classname);
		$classimg = $this->db->escape($classimg);
		$classtitle = $this->db->escape($classtitle);
		$classcontent = $this->db->escape($classcontent);

		$sql = "UPDATE `class_one` SET classname=$classname,classimg=$classimg,classtitle=$classtitle,classcontent=$classcontent WHERE id = $id";
		return $this->db->query($sql);
	}

	public function getclassone()
	{
		$sql = "SELECT * FROM `class_one`";
		return $this->db->query($sql)->result_array();
	}

	public function getclasstwo()
	{
		$sql = "SELECT * FROM `class_two`";
		return $this->db->query($sql)->result_array();
	}

	public function getclasstwoAllPage($classtname)
	{
		$sqlw = " where 1=1 ";
		if (!empty($classtname)) {
			$sqlw .= " and ( classtname like '%" . $classtname . "%' ) ";
		}
		$sql = "SELECT count(1) as number FROM `class_two` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return ceil($number / 10) == 0 ? 1 : ceil($number / 10);
	}

	public function getclasstwoAll($pg,$classtname)
	{
		$sqlw = " where 1=1 ";
		if (!empty($classtname)) {
			$sqlw .= " and ( classtname like '%" . $classtname . "%' ) ";
		}
		$start = ($pg - 1) * 10;
		$stop = 10;
		$sql = "SELECT * FROM `class_two` " . $sqlw . " order by id desc LIMIT $start, $stop";
		return $this->db->query($sql)->result_array();
	}

	public function classtwo_delete($id)
	{
		$id = $this->db->escape($id);
		$sql = "DELETE FROM class_two WHERE id = $id";
		return $this->db->query($sql);
	}

	public function classtwo_save($classtname,$classtimg,$classdatasheet,$classdescription,$classbuynow,$classbreakout,$classlearnmore,$classonename,$addtime)
	{
		$classtname = $this->db->escape($classtname);
		$classtimg = $this->db->escape($classtimg);
		$classdatasheet = $this->db->escape($classdatasheet);
		$classdescription = $this->db->escape($classdescription);
		$classbuynow = $this->db->escape($classbuynow);
		$classbreakout = $this->db->escape($classbreakout);
		$classlearnmore = $this->db->escape($classlearnmore);
		$classonename = $this->db->escape($classonename);
		$addtime = $this->db->escape($addtime);

		$sql = "INSERT INTO `class_two` (classtname,classtimg,classdatasheet,classdescription,classbuynow,classbreakout,classlearnmore,classonename,addtime) VALUES ($classtname,$classtimg,$classdatasheet,$classdescription,$classbuynow,$classbreakout,$classlearnmore,$classonename,$addtime)";
		return $this->db->query($sql);
	}

	public function getclasstwoid($id)
	{
		$id = $this->db->escape($id);
		$sql = "SELECT * FROM `class_two` where id=$id ";
		return $this->db->query($sql)->row_array();
	}

	public function classtwo_save_edit($id,$classtname,$classtimg,$classdatasheet,$classdescription,$classbuynow,$classbreakout,$classlearnmore,$classonename)
	{
		$id = $this->db->escape($id);
		$classtname = $this->db->escape($classtname);
		$classtimg = $this->db->escape($classtimg);
		$classdatasheet = $this->db->escape($classdatasheet);
		$classdescription = $this->db->escape($classdescription);
		$classbuynow = $this->db->escape($classbuynow);
		$classbreakout = $this->db->escape($classbreakout);
		$classlearnmore = $this->db->escape($classlearnmore);
		$classonename = $this->db->escape($classonename);

		$sql = "UPDATE `class_two` SET classtname=$classtname,classtimg=$classtimg,classdatasheet=$classdatasheet,classdescription=$classdescription,classbuynow=$classbuynow,classbreakout=$classbreakout,classlearnmore=$classlearnmore,classonename=$classonename WHERE id = $id";
		return $this->db->query($sql);
	}




	public function getgoodsAllPage($searchtext)
	{
		$sqlw = " where 1=1 and fid='' ";
		if (!empty($searchtext)) {
			$sqlw .= " and ( catalognumber like '%" . $searchtext . "%' or part like '%" . $searchtext . "%' ) ";
		}
		$sql = "SELECT count(1) as number FROM `goods` " . $sqlw;
		$number = $this->db->query($sql)->row()->number;
		return ceil($number / 10) == 0 ? 1 : ceil($number / 10);
	}

	public function getgoodsAll($pg,$searchtext)
	{
		$sqlw = " where 1=1 and fid='' ";
		if (!empty($searchtext)) {
			$sqlw .= " and ( catalognumber like '%" . $searchtext . "%' or part like '%" . $searchtext . "%' ) ";
		}
		$start = ($pg - 1) * 10;
		$stop = 10;
		$sql = "SELECT * FROM `goods` " . $sqlw . " order by id desc LIMIT $start, $stop";
		return $this->db->query($sql)->result_array();
	}

	public function goods_delete($id)
	{
		$id = $this->db->escape($id);
		$sql = "DELETE FROM goods WHERE id = $id";
		$this->db->query($sql);
		$sql1 = "DELETE FROM goods WHERE fid = $id";
		return $this->db->query($sql1);
	}

	public function goods_save($part,$fibertype,$fibercount,$connectortype,$polish,$cablelength,$cablediameter,$insertionloss,
							   $returnloss,$polarity,$durability,$jacketmaterial,$buynow,$catalognumber,$type,$series,$imaxa,
							   $umaxv,$qmaxw,$tmaxk,$ac,$lengtham,$witdhbm,$heighthm,$classonename,$classtwoname,$addtime,$fid,$yflg)
	{
		$part = $this->db->escape($part);
		$fibertype = $this->db->escape($fibertype);
		$fibercount = $this->db->escape($fibercount);
		$connectortype = $this->db->escape($connectortype);
		$polish = $this->db->escape($polish);
		$cablelength = $this->db->escape($cablelength);
		$cablediameter = $this->db->escape($cablediameter);
		$insertionloss = $this->db->escape($insertionloss);
		$returnloss = $this->db->escape($returnloss);
		$polarity = $this->db->escape($polarity);
		$durability = $this->db->escape($durability);
		$jacketmaterial = $this->db->escape($jacketmaterial);
		$buynow = $this->db->escape($buynow);
		$catalognumber = $this->db->escape($catalognumber);
		$type = $this->db->escape($type);
		$series = $this->db->escape($series);
		$imaxa = $this->db->escape($imaxa);
		$umaxv = $this->db->escape($umaxv);
		$qmaxw = $this->db->escape($qmaxw);
		$tmaxk = $this->db->escape($tmaxk);
		$ac = $this->db->escape($ac);
		$lengtham = $this->db->escape($lengtham);
		$witdhbm = $this->db->escape($witdhbm);
		$heighthm = $this->db->escape($heighthm);
		$classonename = $this->db->escape($classonename);
		$classtwoname = $this->db->escape($classtwoname);
		$addtime = $this->db->escape($addtime);
		$fid = $this->db->escape($fid);
		$yflg = $this->db->escape($yflg);

		$sql = "INSERT INTO `goods` (part,fibertype,fibercount,connectortype,polish,cablelength,cablediameter,insertionloss,returnloss,polarity,durability,jacketmaterial,buynow,catalognumber,type,series,imaxa,umaxv,qmaxw,tmaxk,ac,lengtham,witdhbm,heighthm,classonename,classtwoname,addtime,fid,yflg) VALUES ($part,$fibertype,$fibercount,$connectortype,$polish,$cablelength,$cablediameter,$insertionloss,$returnloss,$polarity,$durability,$jacketmaterial,$buynow,$catalognumber,$type,$series,$imaxa,$umaxv,$qmaxw,$tmaxk,$ac,$lengtham,$witdhbm,$heighthm,$classonename,$classtwoname,$addtime,$fid,$yflg)";
		$this->db->query($sql);
		return $this->db->insert_id();
	}

	public function getgoodsid($id)
	{
		$id = $this->db->escape($id);
		$sql = "SELECT * FROM `goods` where id=$id ";
		return $this->db->query($sql)->row_array();
	}
	public function getgoodsidz($id)
	{
		$id = $this->db->escape($id);
		$sql = "SELECT * FROM `goods` where fid=$id ";
		return $this->db->query($sql)->row_array();
	}

	public function goods_save_edit($id,$part,$fibertype,$fibercount,$connectortype,$polish,$cablelength,$cablediameter,$insertionloss,$returnloss,$polarity,$durability,$jacketmaterial,$buynow,$catalognumber,$type,$series,$imaxa,$umaxv,$qmaxw,$tmaxk,$ac,$lengtham,$witdhbm,$heighthm,$classonename,$classtwoname)
	{
		$id = $this->db->escape($id);
		$part = $this->db->escape($part);
		$fibertype = $this->db->escape($fibertype);
		$fibercount = $this->db->escape($fibercount);
		$connectortype = $this->db->escape($connectortype);
		$polish = $this->db->escape($polish);
		$cablelength = $this->db->escape($cablelength);
		$cablediameter = $this->db->escape($cablediameter);
		$insertionloss = $this->db->escape($insertionloss);
		$returnloss = $this->db->escape($returnloss);
		$polarity = $this->db->escape($polarity);
		$durability = $this->db->escape($durability);
		$jacketmaterial = $this->db->escape($jacketmaterial);
		$buynow = $this->db->escape($buynow);
		$catalognumber = $this->db->escape($catalognumber);
		$type = $this->db->escape($type);
		$series = $this->db->escape($series);
		$imaxa = $this->db->escape($imaxa);
		$umaxv = $this->db->escape($umaxv);
		$qmaxw = $this->db->escape($qmaxw);
		$tmaxk = $this->db->escape($tmaxk);
		$ac = $this->db->escape($ac);
		$lengtham = $this->db->escape($lengtham);
		$witdhbm = $this->db->escape($witdhbm);
		$heighthm = $this->db->escape($heighthm);
		$classonename = $this->db->escape($classonename);
		$classtwoname = $this->db->escape($classtwoname);

		$sql = "UPDATE `goods` SET part=$part,fibertype=$fibertype,fibercount=$fibercount,connectortype=$connectortype,polish=$polish,cablelength=$cablelength,cablediameter=$cablediameter,
                   insertionloss=$insertionloss,returnloss=$returnloss,polarity=$polarity,durability=$durability,jacketmaterial=$jacketmaterial
,buynow=$buynow,catalognumber=$catalognumber,type=$type,series=$series,imaxa=$imaxa,umaxv=$umaxv,qmaxw=$qmaxw,tmaxk=$tmaxk,ac=$ac
 ,lengtham=$lengtham,witdhbm=$witdhbm,heighthm=$heighthm,classonename=$classonename,classtwoname=$classtwoname where id = $id";
		return $this->db->query($sql);
	}

	public function classtwoinfobyname($classtwoname)
	{
		$classtwoname = $this->db->escape($classtwoname);
		$sql = "SELECT * FROM `class_two` where classtname=$classtwoname ";
		return $this->db->query($sql)->row_array();
	}

	public function goods_save_editz($id,$part,$fibertype,$fibercount,$connectortype,$polish,$cablelength,$cablediameter,$insertionloss,$returnloss,$polarity,$durability,$jacketmaterial,$buynow,$catalognumber,$type,$series,$imaxa,$umaxv,$qmaxw,$tmaxk,$ac,$lengtham,$witdhbm,$heighthm,$classonename,$classtwoname)
	{
		$id = $this->db->escape($id);
		$part = $this->db->escape($part);
		$fibertype = $this->db->escape($fibertype);
		$fibercount = $this->db->escape($fibercount);
		$connectortype = $this->db->escape($connectortype);
		$polish = $this->db->escape($polish);
		$cablelength = $this->db->escape($cablelength);
		$cablediameter = $this->db->escape($cablediameter);
		$insertionloss = $this->db->escape($insertionloss);
		$returnloss = $this->db->escape($returnloss);
		$polarity = $this->db->escape($polarity);
		$durability = $this->db->escape($durability);
		$jacketmaterial = $this->db->escape($jacketmaterial);
		$buynow = $this->db->escape($buynow);
		$catalognumber = $this->db->escape($catalognumber);
		$type = $this->db->escape($type);
		$series = $this->db->escape($series);
		$imaxa = $this->db->escape($imaxa);
		$umaxv = $this->db->escape($umaxv);
		$qmaxw = $this->db->escape($qmaxw);
		$tmaxk = $this->db->escape($tmaxk);
		$ac = $this->db->escape($ac);
		$lengtham = $this->db->escape($lengtham);
		$witdhbm = $this->db->escape($witdhbm);
		$heighthm = $this->db->escape($heighthm);
		$classonename = $this->db->escape($classonename);
		$classtwoname = $this->db->escape($classtwoname);

		$sql = "UPDATE `goods` SET part=$part,fibertype=$fibertype,fibercount=$fibercount,connectortype=$connectortype,polish=$polish,cablelength=$cablelength,cablediameter=$cablediameter,
                   insertionloss=$insertionloss,returnloss=$returnloss,polarity=$polarity,durability=$durability,jacketmaterial=$jacketmaterial
,buynow=$buynow,catalognumber=$catalognumber,type=$type,series=$series,imaxa=$imaxa,umaxv=$umaxv,qmaxw=$qmaxw,tmaxk=$tmaxk,ac=$ac
 ,lengtham=$lengtham,witdhbm=$witdhbm,heighthm=$heighthm,classonename=$classonename,classtwoname=$classtwoname where fid = $id";
		return $this->db->query($sql);
	}

	public function goods_savez($classonename,$classtwoname,$fid,$yflg,$addtime)
	{;
		$classonename = $this->db->escape($classonename);
		$classtwoname = $this->db->escape($classtwoname);
		$addtime = $this->db->escape($addtime);
		$fid = $this->db->escape($fid);
		$yflg = $this->db->escape($yflg);

		$sql = "INSERT INTO `goods` (classonename,classtwoname,addtime,fid,yflg) VALUES ($classonename,$classtwoname,$addtime,$fid,$yflg)";
		$this->db->query($sql);
	}
}
