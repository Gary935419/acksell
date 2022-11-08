<?php
/**
 * **********************************************************************
 * サブシステム名  ： ADMIN
 * 機能名         ：管理员
 * 作成者        ： Gary
 * **********************************************************************
 */
class Seting extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['user_name'])) {
			header("Location:" . RUN . '/login/logout');
		}
		$this->load->model('Seting_model', 'seting');
		header("Content-type:text/html;charset=utf-8");
	}

	/**-----------------------------------信息管理-----------------------------------------------------*/
	/**
	 * 信息列表页
	 */
	public function seting_edit()
	{
		$list = $this->seting->getSetingAll();
		$data['list']=$list;
		$this->display("seting/seting_edit", $data);
	}


	/**
	 * 信息修改提交
	 */
	public function seting_save()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法修改数据"));
			return;
		}

		$indexbuynow = isset($_POST["indexbuynow"]) ? $_POST["indexbuynow"] : '';
		$companyemail = isset($_POST["companyemail"]) ? $_POST["companyemail"] : '';
		$onlinestore = isset($_POST["onlinestore"]) ? $_POST["onlinestore"] : '';
		$companyname = isset($_POST["companyname"]) ? $_POST["companyname"] : '';
		$companyaddress = isset($_POST["companyaddress"]) ? $_POST["companyaddress"] : '';
		$companytel = isset($_POST["companytel"]) ? $_POST["companytel"] : '';
		$companyfax = isset($_POST["companyfax"]) ? $_POST["companyfax"] : '';
		$companytechnical = isset($_POST["companytechnical"]) ? $_POST["companytechnical"] : '';
		$companyinquiries = isset($_POST["companyinquiries"]) ? $_POST["companyinquiries"] : '';
		$companyskype = isset($_POST["companyskype"]) ? $_POST["companyskype"] : '';
		$companydistributor = isset($_POST["companydistributor"]) ? $_POST["companydistributor"] : '';
		$privacyinfo = isset($_POST["privacyinfo"]) ? $_POST["privacyinfo"] : '';
		$privacydate = isset($_POST["privacydate"]) ? $_POST["privacydate"] : '';

		$result = $this->seting->seting_save_edit($indexbuynow,$companyemail,$onlinestore,$companyname,$companyaddress,$companytel,$companyfax,$companytechnical,$companyinquiries,$companyskype,$companydistributor,$privacyinfo,$privacydate);
		if ($result) {
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}

	public function contact_list()
	{
		$email = isset($_GET['email']) ? $_GET['email'] : '';
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$allpage = $this->seting->getContactAllPage($email);
		$page = $allpage > $page ? $page : $allpage;
		$data["pagehtml"] = $this->getpage($page, $allpage, $_GET);
		$data["page"] = $page;
		$data["allpage"] = $allpage;
		$data["list"] = $this->seting->getContactAll($page, $email);
		$data["email"] = $email;
		$this->display("seting/contact_list", $data);
	}

	public function faq_list()
	{
		$question = isset($_GET['question']) ? $_GET['question'] : '';
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$allpage = $this->seting->getFaqAllPage($question);
		$page = $allpage > $page ? $page : $allpage;
		$data["pagehtml"] = $this->getpage($page, $allpage, $_GET);
		$data["page"] = $page;
		$data["allpage"] = $allpage;
		$data["list"] = $this->seting->getFaqAll($page,$question);
		$data["question"] = $question;
		$this->display("seting/faq_list", $data);
	}
	public function faq_add()
	{
		$data = array();
		$ridlist = $this->seting->getRole();
		$data['ridlist'] = $ridlist;
		$this->display("seting/faq_add", $data);
	}
	public function faq_save()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法添加数据"));
			return;
		}

		$lname = isset($_POST["lname"]) ? $_POST["lname"] : '';
		$question = isset($_POST["question"]) ? $_POST["question"] : '';
		$answer = isset($_POST["answer"]) ? $_POST["answer"] : '';
		$add_time = time();

		$result = $this->seting->faq_save($lname,$question,$answer,$add_time);
		if ($result) {
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}
	public function faq_delete()
	{
		$id = isset($_POST['id']) ? $_POST['id'] : 0;
		if ($this->seting->faq_delete($id)) {
			echo json_encode(array('success' => true, 'msg' => "删除成功"));
		} else {
			echo json_encode(array('success' => false, 'msg' => "删除失败"));
		}
	}

	public function questions_list()
	{
		$email = isset($_GET['email']) ? $_GET['email'] : '';
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$allpage = $this->seting->getQuestionsAllPage($email);
		$page = $allpage > $page ? $page : $allpage;
		$data["pagehtml"] = $this->getpage($page, $allpage, $_GET);
		$data["page"] = $page;
		$data["allpage"] = $allpage;
		$data["list"] = $this->seting->getQuestionsAll($page, $email);
		$data["email"] = $email;
		$this->display("seting/questions_list", $data);
	}

	public function classone_list()
	{
		$classname = isset($_GET['classname']) ? $_GET['classname'] : '';
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$allpage = $this->seting->getclassoneAllPage($classname);
		$page = $allpage > $page ? $page : $allpage;
		$data["pagehtml"] = $this->getpage($page, $allpage, $_GET);
		$data["page"] = $page;
		$data["allpage"] = $allpage;
		$data["list"] = $this->seting->getclassoneAll($page,$classname);
		$data["classname"] = $classname;
		$this->display("seting/classone_list", $data);
	}

	public function classone_delete()
	{
		$id = isset($_POST['id']) ? $_POST['id'] : 0;
		if ($this->seting->classone_delete($id)) {
			echo json_encode(array('success' => true, 'msg' => "删除成功"));
		} else {
			echo json_encode(array('success' => false, 'msg' => "删除失败"));
		}
	}

	public function classone_add()
	{
		$data = array();
		$this->display("seting/classone_add", $data);
	}

	public function classtwo_add()
	{
		$data = array();
		$classonelist = $this->seting->getclassone();
		$data['classonelist'] = $classonelist;
		$this->display("seting/classtwo_add", $data);
	}

	public function classone_save()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法添加数据"));
			return;
		}

		$classname = isset($_POST["classname"]) ? $_POST["classname"] : '';
		$classimg = isset($_POST["classimg"]) ? $_POST["classimg"] : '';
		$classtitle = isset($_POST["classtitle"]) ? $_POST["classtitle"] : '';
		$classcontent = isset($_POST["classcontent"]) ? $_POST["classcontent"] : '';
		$classstatus = isset($_POST["classstatus"]) ? $_POST["classstatus"] : '1';
		$addtime = time();

		$result = $this->seting->classone_save($classname,$classimg,$classtitle,$classcontent,$classstatus,$addtime);
		if ($result) {
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}

	public function classone_edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$data = array();
		$classone_info = $this->seting->getclassoneid($id);
		$data['id'] = $id;
		$data['classname'] = $classone_info['classname'];
		$data['classimg'] = $classone_info['classimg'];
		$data['classtitle'] = $classone_info['classtitle'];
		$data['classcontent'] = $classone_info['classcontent'];
		$this->display("seting/classone_edit", $data);
	}

	public function classone_save_edit()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法修改数据"));
			return;
		}
		$id = isset($_POST["id"]) ? $_POST["id"] : '';
		$classname = isset($_POST["classname"]) ? $_POST["classname"] : '';
		$classimg = isset($_POST["classimg"]) ? $_POST["classimg"] : '';
		$classtitle = isset($_POST["classtitle"]) ? $_POST["classtitle"] : '';
		$classcontent = isset($_POST["classcontent"]) ? $_POST["classcontent"] : '';

		$result = $this->seting->classone_save_edit($id,$classname,$classimg,$classtitle,$classcontent);
		if ($result) {
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}


	public function classtwo_list()
	{
		$classtname = isset($_GET['classtname']) ? $_GET['classtname'] : '';
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$allpage = $this->seting->getclasstwoAllPage($classtname);
		$page = $allpage > $page ? $page : $allpage;
		$data["pagehtml"] = $this->getpage($page, $allpage, $_GET);
		$data["page"] = $page;
		$data["allpage"] = $allpage;
		$data["list"] = $this->seting->getclasstwoAll($page,$classtname);
		$data["classtname"] = $classtname;
		$this->display("seting/classtwo_list", $data);
	}

	public function classtwo_delete()
	{
		$id = isset($_POST['id']) ? $_POST['id'] : 0;
		if ($this->seting->classtwo_delete($id)) {
			echo json_encode(array('success' => true, 'msg' => "删除成功"));
		} else {
			echo json_encode(array('success' => false, 'msg' => "删除失败"));
		}
	}

	public function classtwo_save()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法添加数据"));
			return;
		}

		$classtname = isset($_POST["classtname"]) ? $_POST["classtname"] : '';
		$classtimg = isset($_POST["classtimg"]) ? $_POST["classtimg"] : '';
		$classdatasheet = isset($_POST["classdatasheet"]) ? $_POST["classdatasheet"] : '';
		$classdescription = isset($_POST["classdescription"]) ? $_POST["classdescription"] : '';
		$classbuynow = isset($_POST["classbuynow"]) ? $_POST["classbuynow"] : '';
		$classbreakout = isset($_POST["classbreakout"]) ? $_POST["classbreakout"] : '';
		$classlearnmore = isset($_POST["classlearnmore"]) ? $_POST["classlearnmore"] : '';
		$classonename = isset($_POST["classonename"]) ? $_POST["classonename"] : '';
		$addtime = time();

		$result = $this->seting->classtwo_save($classtname,$classtimg,$classdatasheet,$classdescription,$classbuynow,$classbreakout,$classlearnmore,$classonename,$addtime);
		if ($result) {
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}

	public function classtwo_edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$data = array();
		$classone_info = $this->seting->getclasstwoid($id);
		$classonelist = $this->seting->getclassone();
		$data['classonelist'] = $classonelist;
		$data['id'] = $id;
		$data['classtname'] = $classone_info['classtname'];
		$data['classtimg'] = $classone_info['classtimg'];
		$data['classdatasheet'] = $classone_info['classdatasheet'];
		$data['classdescription'] = $classone_info['classdescription'];
		$data['classbuynow'] = $classone_info['classbuynow'];
		$data['classbreakout'] = $classone_info['classbreakout'];
		$data['classlearnmore'] = $classone_info['classlearnmore'];
		$data['classonename'] = $classone_info['classonename'];
		$this->display("seting/classtwo_edit", $data);
	}

	public function classtwo_save_edit()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法修改数据"));
			return;
		}
		$id = isset($_POST["id"]) ? $_POST["id"] : '';
		$classtname = isset($_POST["classtname"]) ? $_POST["classtname"] : '';
		$classtimg = isset($_POST["classtimg"]) ? $_POST["classtimg"] : '';
		$classdatasheet = isset($_POST["classdatasheet"]) ? $_POST["classdatasheet"] : '';
		$classdescription = isset($_POST["classdescription"]) ? $_POST["classdescription"] : '';

		$classbuynow = isset($_POST["classbuynow"]) ? $_POST["classbuynow"] : '';
		$classbreakout = isset($_POST["classbreakout"]) ? $_POST["classbreakout"] : '';
		$classlearnmore = isset($_POST["classlearnmore"]) ? $_POST["classlearnmore"] : '';
		$classonename = isset($_POST["classonename"]) ? $_POST["classonename"] : '';
		$result = $this->seting->classtwo_save_edit($id,$classtname,$classtimg,$classdatasheet,$classdescription,$classbuynow,$classbreakout,$classlearnmore,$classonename);
		if ($result) {
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}








	public function goods_list()
	{
		$searchtext = isset($_GET['searchtext']) ? $_GET['searchtext'] : '';
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$allpage = $this->seting->getgoodsAllPage($searchtext);
		$page = $allpage > $page ? $page : $allpage;
		$data["pagehtml"] = $this->getpage($page, $allpage, $_GET);
		$data["page"] = $page;
		$data["allpage"] = $allpage;
		$data["list"] = $this->seting->getgoodsAll($page,$searchtext);
		$data["searchtext"] = $searchtext;
		$this->display("seting/goods_list", $data);
	}

	public function goods_delete()
	{
		$id = isset($_POST['id']) ? $_POST['id'] : 0;
		if ($this->seting->goods_delete($id)) {
			echo json_encode(array('success' => true, 'msg' => "删除成功"));
		} else {
			echo json_encode(array('success' => false, 'msg' => "删除失败"));
		}
	}

	public function goods_add()
	{
		$data = array();
		$classonelist = $this->seting->getclassone();
		$data['classonelist'] = $classonelist;
		$classtwolist = $this->seting->getclasstwo();
		$data['classtwolist'] = $classtwolist;
		$this->display("seting/goods_add", $data);
	}

	public function goods_save()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法添加数据"));
			return;
		}

		$part = isset($_POST["part"]) ? $_POST["part"] : '';
		$fibertype = isset($_POST["fibertype"]) ? $_POST["fibertype"] : '';
		$fibercount = isset($_POST["fibercount"]) ? $_POST["fibercount"] : '';
		$connectortype = isset($_POST["connectortype"]) ? $_POST["connectortype"] : '';
		$polish = isset($_POST["polish"]) ? $_POST["polish"] : '';
		$cablelength = isset($_POST["cablelength"]) ? $_POST["cablelength"] : '';
		$cablediameter = isset($_POST["cablediameter"]) ? $_POST["cablediameter"] : '';
		$insertionloss = isset($_POST["insertionloss"]) ? $_POST["insertionloss"] : '';
		$returnloss = isset($_POST["returnloss"]) ? $_POST["returnloss"] : '';
		$polarity = isset($_POST["polarity"]) ? $_POST["polarity"] : '';
		$durability = isset($_POST["durability"]) ? $_POST["durability"] : '';
		$jacketmaterial = isset($_POST["jacketmaterial"]) ? $_POST["jacketmaterial"] : '';
		$buynow = isset($_POST["buynow"]) ? $_POST["buynow"] : '';
		$catalognumber = isset($_POST["catalognumber"]) ? $_POST["catalognumber"] : '';
		$type = isset($_POST["type"]) ? $_POST["type"] : '';
		$series = isset($_POST["series"]) ? $_POST["series"] : '';
		$imaxa = isset($_POST["imaxa"]) ? $_POST["imaxa"] : '';
		$umaxv = isset($_POST["umaxv"]) ? $_POST["umaxv"] : '';
		$qmaxw = isset($_POST["qmaxw"]) ? $_POST["qmaxw"] : '';
		$tmaxk = isset($_POST["tmaxk"]) ? $_POST["tmaxk"] : '';
		$ac = isset($_POST["ac"]) ? $_POST["ac"] : '';
		$lengtham = isset($_POST["lengtham"]) ? $_POST["lengtham"] : '';
		$witdhbm = isset($_POST["witdhbm"]) ? $_POST["witdhbm"] : '';
		$heighthm = isset($_POST["heighthm"]) ? $_POST["heighthm"] : '';

		$classtwoname = isset($_POST["classtwoname"]) ? $_POST["classtwoname"] : '';
		$addtime = time();
		$fid = '';
		$yflg = 1;

		$classtwoinfo =  $this->seting->classtwoinfobyname($classtwoname);
		$classonename = $classtwoinfo['classonename'];
		$result_id = $this->seting->goods_save($part,$fibertype,$fibercount,$connectortype,$polish,$cablelength,$cablediameter,$insertionloss,$returnloss,$polarity,$durability,$jacketmaterial,$buynow,$catalognumber,$type,$series,$imaxa,$umaxv,$qmaxw,$tmaxk,$ac,$lengtham,$witdhbm,$heighthm,$classonename,$classtwoname,$addtime,$fid,$yflg);
		if ($result_id) {
			$fid = $result_id;
			$yflg = 0;
			$this->seting->goods_savez($classonename,$classtwoname,$fid,$yflg,$addtime);
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}

	public function goods_edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$data = array();
		$goods_info = $this->seting->getgoodsid($id);

		$classonelist = $this->seting->getclassone();
		$data['classonelist'] = $classonelist;
		$classtwolist = $this->seting->getclasstwo();
		$data['classtwolist'] = $classtwolist;

		$data['id'] = $id;
		$data['part'] = $goods_info['part'];
		$data['fibertype'] = $goods_info['fibertype'];
		$data['fibercount'] = $goods_info['fibercount'];
		$data['connectortype'] = $goods_info['connectortype'];
		$data['polish'] = $goods_info['polish'];
		$data['cablelength'] = $goods_info['cablelength'];
		$data['cablediameter'] = $goods_info['cablediameter'];
		$data['insertionloss'] = $goods_info['insertionloss'];
		$data['returnloss'] = $goods_info['returnloss'];
		$data['polarity'] = $goods_info['polarity'];
		$data['durability'] = $goods_info['durability'];
		$data['jacketmaterial'] = $goods_info['jacketmaterial'];
		$data['buynow'] = $goods_info['buynow'];
		$data['catalognumber'] = $goods_info['catalognumber'];
		$data['type'] = $goods_info['type'];
		$data['series'] = $goods_info['series'];
		$data['imaxa'] = $goods_info['imaxa'];
		$data['umaxv'] = $goods_info['umaxv'];
		$data['qmaxw'] = $goods_info['qmaxw'];
		$data['tmaxk'] = $goods_info['tmaxk'];
		$data['ac'] = $goods_info['ac'];
		$data['lengtham'] = $goods_info['lengtham'];
		$data['witdhbm'] = $goods_info['witdhbm'];
		$data['heighthm'] = $goods_info['heighthm'];
		$data['classonename'] = $goods_info['classonename'];
		$data['classtwoname'] = $goods_info['classtwoname'];
		$this->display("seting/goods_edit", $data);
	}

	public function goods_save_edit()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法修改数据"));
			return;
		}
		$id = isset($_POST["id"]) ? $_POST["id"] : '';
		$part = isset($_POST["part"]) ? $_POST["part"] : '';
		$fibertype = isset($_POST["fibertype"]) ? $_POST["fibertype"] : '';
		$fibercount = isset($_POST["fibercount"]) ? $_POST["fibercount"] : '';
		$connectortype = isset($_POST["connectortype"]) ? $_POST["connectortype"] : '';
		$polish = isset($_POST["polish"]) ? $_POST["polish"] : '';
		$cablelength = isset($_POST["cablelength"]) ? $_POST["cablelength"] : '';
		$cablediameter = isset($_POST["cablediameter"]) ? $_POST["cablediameter"] : '';
		$insertionloss = isset($_POST["insertionloss"]) ? $_POST["insertionloss"] : '';
		$returnloss = isset($_POST["returnloss"]) ? $_POST["returnloss"] : '';
		$polarity = isset($_POST["polarity"]) ? $_POST["polarity"] : '';
		$durability = isset($_POST["durability"]) ? $_POST["durability"] : '';
		$jacketmaterial = isset($_POST["jacketmaterial"]) ? $_POST["jacketmaterial"] : '';
		$buynow = isset($_POST["buynow"]) ? $_POST["buynow"] : '';
		$catalognumber = isset($_POST["catalognumber"]) ? $_POST["catalognumber"] : '';
		$type = isset($_POST["type"]) ? $_POST["type"] : '';
		$series = isset($_POST["series"]) ? $_POST["series"] : '';
		$imaxa = isset($_POST["imaxa"]) ? $_POST["imaxa"] : '';
		$umaxv = isset($_POST["umaxv"]) ? $_POST["umaxv"] : '';
		$qmaxw = isset($_POST["qmaxw"]) ? $_POST["qmaxw"] : '';
		$tmaxk = isset($_POST["tmaxk"]) ? $_POST["tmaxk"] : '';
		$ac = isset($_POST["ac"]) ? $_POST["ac"] : '';
		$lengtham = isset($_POST["lengtham"]) ? $_POST["lengtham"] : '';
		$witdhbm = isset($_POST["witdhbm"]) ? $_POST["witdhbm"] : '';
		$heighthm = isset($_POST["heighthm"]) ? $_POST["heighthm"] : '';
//		$classonename = isset($_POST["classonename"]) ? $_POST["classonename"] : '';
		$classtwoname = isset($_POST["classtwoname"]) ? $_POST["classtwoname"] : '';

		$classtwoinfo =  $this->seting->classtwoinfobyname($classtwoname);
		$classonename = $classtwoinfo['classonename'];
		$result = $this->seting->goods_save_edit($id,$part,$fibertype,$fibercount,$connectortype,$polish,$cablelength,$cablediameter,$insertionloss,$returnloss,$polarity,$durability,$jacketmaterial,$buynow,$catalognumber,$type,$series,$imaxa,$umaxv,$qmaxw,$tmaxk,$ac,$lengtham,$witdhbm,$heighthm,$classonename,$classtwoname);
		if ($result) {
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}

	public function goods_editz()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$data = array();
		$goods_info = $this->seting->getgoodsidz($id);

		$classonelist = $this->seting->getclassone();
		$data['classonelist'] = $classonelist;
		$classtwolist = $this->seting->getclasstwo();
		$data['classtwolist'] = $classtwolist;

		$data['id'] = $id;
		$data['part'] = $goods_info['part'];
		$data['fibertype'] = $goods_info['fibertype'];
		$data['fibercount'] = $goods_info['fibercount'];
		$data['connectortype'] = $goods_info['connectortype'];
		$data['polish'] = $goods_info['polish'];
		$data['cablelength'] = $goods_info['cablelength'];
		$data['cablediameter'] = $goods_info['cablediameter'];
		$data['insertionloss'] = $goods_info['insertionloss'];
		$data['returnloss'] = $goods_info['returnloss'];
		$data['polarity'] = $goods_info['polarity'];
		$data['durability'] = $goods_info['durability'];
		$data['jacketmaterial'] = $goods_info['jacketmaterial'];
		$data['buynow'] = $goods_info['buynow'];
		$data['catalognumber'] = $goods_info['catalognumber'];
		$data['type'] = $goods_info['type'];
		$data['series'] = $goods_info['series'];
		$data['imaxa'] = $goods_info['imaxa'];
		$data['umaxv'] = $goods_info['umaxv'];
		$data['qmaxw'] = $goods_info['qmaxw'];
		$data['tmaxk'] = $goods_info['tmaxk'];
		$data['ac'] = $goods_info['ac'];
		$data['lengtham'] = $goods_info['lengtham'];
		$data['witdhbm'] = $goods_info['witdhbm'];
		$data['heighthm'] = $goods_info['heighthm'];
		$data['classonename'] = $goods_info['classonename'];
		$data['classtwoname'] = $goods_info['classtwoname'];
		$this->display("seting/goods_editz", $data);
	}

	public function goods_save_editz()
	{
		if (empty($_SESSION['user_name'])) {
			echo json_encode(array('error' => false, 'msg' => "无法修改数据"));
			return;
		}
		$id = isset($_POST["id"]) ? $_POST["id"] : '';
		$part = isset($_POST["part"]) ? $_POST["part"] : '';
		$fibertype = isset($_POST["fibertype"]) ? $_POST["fibertype"] : '';
		$fibercount = isset($_POST["fibercount"]) ? $_POST["fibercount"] : '';
		$connectortype = isset($_POST["connectortype"]) ? $_POST["connectortype"] : '';
		$polish = isset($_POST["polish"]) ? $_POST["polish"] : '';
		$cablelength = isset($_POST["cablelength"]) ? $_POST["cablelength"] : '';
		$cablediameter = isset($_POST["cablediameter"]) ? $_POST["cablediameter"] : '';
		$insertionloss = isset($_POST["insertionloss"]) ? $_POST["insertionloss"] : '';
		$returnloss = isset($_POST["returnloss"]) ? $_POST["returnloss"] : '';
		$polarity = isset($_POST["polarity"]) ? $_POST["polarity"] : '';
		$durability = isset($_POST["durability"]) ? $_POST["durability"] : '';
		$jacketmaterial = isset($_POST["jacketmaterial"]) ? $_POST["jacketmaterial"] : '';
		$buynow = isset($_POST["buynow"]) ? $_POST["buynow"] : '';
		$catalognumber = isset($_POST["catalognumber"]) ? $_POST["catalognumber"] : '';
		$type = isset($_POST["type"]) ? $_POST["type"] : '';
		$series = isset($_POST["series"]) ? $_POST["series"] : '';
		$imaxa = isset($_POST["imaxa"]) ? $_POST["imaxa"] : '';
		$umaxv = isset($_POST["umaxv"]) ? $_POST["umaxv"] : '';
		$qmaxw = isset($_POST["qmaxw"]) ? $_POST["qmaxw"] : '';
		$tmaxk = isset($_POST["tmaxk"]) ? $_POST["tmaxk"] : '';
		$ac = isset($_POST["ac"]) ? $_POST["ac"] : '';
		$lengtham = isset($_POST["lengtham"]) ? $_POST["lengtham"] : '';
		$witdhbm = isset($_POST["witdhbm"]) ? $_POST["witdhbm"] : '';
		$heighthm = isset($_POST["heighthm"]) ? $_POST["heighthm"] : '';
//		$classonename = isset($_POST["classonename"]) ? $_POST["classonename"] : '';
		$classtwoname = isset($_POST["classtwoname"]) ? $_POST["classtwoname"] : '';

		$classtwoinfo =  $this->seting->classtwoinfobyname($classtwoname);
		$classonename = $classtwoinfo['classonename'];
		$result = $this->seting->goods_save_editz($id,$part,$fibertype,$fibercount,$connectortype,$polish,$cablelength,$cablediameter,$insertionloss,$returnloss,$polarity,$durability,$jacketmaterial,$buynow,$catalognumber,$type,$series,$imaxa,$umaxv,$qmaxw,$tmaxk,$ac,$lengtham,$witdhbm,$heighthm,$classonename,$classtwoname);
		if ($result) {
			echo json_encode(array('success' => true, 'msg' => "操作成功。"));
		} else {
			echo json_encode(array('error' => false, 'msg' => "操作失败"));
		}
	}
}
