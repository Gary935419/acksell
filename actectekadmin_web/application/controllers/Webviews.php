<?php

class Webviews extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Web_model", 'web');
		$this->load->model('Seting_model', 'seting');
        header("Content-type:text/html;charset=utf-8");
    }

	public function header()
	{
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();
		$this->view_display("web/header",$data);
	}

	public function footer()
	{
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();
		$this->view_display("web/footer",$data);
	}

    public function index()
    {
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();
		$this->view_display("web/index",$data);
    }

	public function privacy()
	{
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();
		$this->view_display("web/privacy",$data);
	}

	public function contact()
	{
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();
		$this->view_display("web/contact",$data);
	}

	public function insertcontact()
	{
		if ($_POST["yourname"] == "" || $_POST["yourcompanyname"] == "" || $_POST["youremail"] == "" || $_POST["yourtel"] == "" ||
			$_POST["yourcountry"] == "" || $_POST["yourproduct"] == "" || $_POST["yoursubject"] == "" || $_POST["yourtag"] == "") {
			$msg = "请确认录入信息完整度";
			echo json_encode(array('error' => true, 'msg' => $msg));
			return false;
		}
		$yourname = isset($_POST["yourname"]) ? $_POST["yourname"] : '';
		$yourcompanyname = isset($_POST["yourcompanyname"]) ? $_POST["yourcompanyname"] : '';
		$youremail = isset($_POST["youremail"]) ? $_POST["youremail"] : '';
		$yourtel = isset($_POST["yourtel"]) ? $_POST["yourtel"] : '';
		$yourcountry = isset($_POST["yourcountry"]) ? $_POST["yourcountry"] : '';
		$yourproduct = isset($_POST["yourproduct"]) ? $_POST["yourproduct"] : '';
		$yoursubject = isset($_POST["yoursubject"]) ? $_POST["yoursubject"] : '';
		$yourtag = isset($_POST["yourtag"]) ? $_POST["yourtag"] : '';
		$addtime = time();

		$this->web->insertcontact($yourname,$yourcompanyname,$youremail,$yourtel,$yourcountry,$yourproduct,$yoursubject,$yourtag,$addtime);

		$msg = "操作成功！";
		echo json_encode(array('result' => 1, 'msg' => $msg));
		return false;
	}

	public function question()
	{
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();
		$this->view_display("web/question",$data);
	}

	public function insertquestion()
	{
		if ($_POST["title"] == "" || $_POST["contents"] == "" || $_POST["categroy"] == "" || $_POST["email"] == "" || $_POST["yname"] == "") {
			$msg = "请确认录入信息完整度";
			echo json_encode(array('error' => true, 'msg' => $msg));
			return false;
		}
		$title = isset($_POST["title"]) ? $_POST["title"] : '';
		$contents = isset($_POST["contents"]) ? $_POST["contents"] : '';
		$categroy = isset($_POST["categroy"]) ? $_POST["categroy"] : '';
		$email = isset($_POST["email"]) ? $_POST["email"] : '';
		$yname = isset($_POST["yname"]) ? $_POST["yname"] : '';
		$addtime = time();

		$this->web->insertquestion($title,$contents,$categroy,$email,$yname,$addtime);

		$msg = "操作成功！";
		echo json_encode(array('result' => 1, 'msg' => $msg));
		return false;
	}

	public function faq()
	{
		$data = array();
		$data["classonelist"] = $this->web->geclassownall();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["faqlist1"] = $this->web->gefaqlist('General');
		$data["faqlist2"] = $this->web->gefaqlist('Glossary');
		$data["faqlist3"] = $this->web->gefaqlist('Optical Transceiver');
		$data["faqlist4"] = $this->web->gefaqlist('Media Converter');
		$data["faqlist5"] = $this->web->gefaqlist('Passive Product');
		$data["faqlist6"] = $this->web->gefaqlist('Data Center');
		$this->view_display("web/faq",$data);
	}

	public function productinfo()
	{
		$classname = isset($_GET['classname']) ? $_GET['classname'] : '';
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();

		$classlist = $data["classonelist"];
		foreach ($classlist as $k=>$v){
			$classonename = $v['classname'];
			$classtwolistone = $this->web->classtwolistone($classonename);
			$classlist[$k]['classtwolistnow'] = $classtwolistone;
		}
		$data['classlist']=$classlist;

		$classtwolistonenew = $this->web->classtwolistonenew(!empty($classname)?$classname:$classlist[0]['classname']);

		$data['classtwolistonenew']=$classtwolistonenew;
		$classonetal = $this->web->classonetal(!empty($classname)?$classname:$classlist[0]['classname']);
		$data['classonetal']=$classonetal;
		$this->view_display("web/productinfo",$data);
	}

	public function productinfo_details()
	{
		$classname = isset($_GET['classname']) ? $_GET['classname'] : '';
		$classtname = isset($_GET['classtname']) ? $_GET['classtname'] : '';
		$yflg = isset($_GET['yflg']) ? $_GET['yflg'] : 1;
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();

		$classlist = $data["classonelist"];
		foreach ($classlist as $k=>$v){
			$classonename = $v['classname'];
			$classtwolistone = $this->web->classtwolistone($classonename);
			$classlist[$k]['classtwolistnow'] = $classtwolistone;
		}
		$data['classlist']=$classlist;

		$classtwolistonenew = $this->web->classtwolistonenew($classname);

		$data['classtwolistonenew']=$classtwolistonenew;
		$classonetal = $this->web->classonetal(!empty($classname)?$classname:$classtwolistonenew[0]['classonename']);
		$data['classonetal']=$classonetal;

		$data['classname']=$classname;
		$data['classtname']=$classtname;
		$data['yflg'] = $yflg!=1 ? 2 : 1;
		if ($yflg == 1){
			$goodslist = $this->web->getgoodslist($classtname,1);
		}else{
			$goodslist = $this->web->getgoodslist($classtname,0);
		}
		$data['goodslist']=$goodslist;

		$classtwodeta = $this->web->classtwodeta($classtname);
		$data['fileurl']=$classtwodeta['classbreakout'];
		$this->view_display("web/productinfo_details",$data);
	}

	public function search()
	{
		$classonename = isset($_GET['classonename']) ? $_GET['classonename'] : '';
		$searhtext = isset($_GET['searhtext']) ? $_GET['searhtext'] : '';
		$data = array();
		$SET = $this->seting->getSetingAll();
		$data['setinfo']=$SET;
		$data["classonelist"] = $this->web->geclassownall();

		if (empty($classonename) && empty($searhtext)){
			$goodslist = array();
			$goodslistcount = 0;
		}else{
			$goodslist = $this->web->getgoodslistsearch($classonename,$searhtext);
			$goodslistcount = $this->web->getgoodslistsearchcount($classonename,$searhtext);
		}

		$data['goodslist']=$goodslist;
		$data['classonename']=$classonename;
		$data['searchtext']=$searhtext;
		$data['goodslistcount']=$goodslistcount;
		$this->view_display("web/search",$data);
	}
}
