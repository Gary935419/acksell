<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * **********************************************************************
 * サブシステム名  ： ADMIN
 * 機能名         ：首页
 * 作成者        ： Gary
 * **********************************************************************
 */
class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['user_name'])) {
			header("Location:" . RUN . '/login/logout');
		}
		$this->load->model('Welcome_model', 'welcome');
		header("Content-type:text/html;charset=utf-8");
	}
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['num1']=$this->welcome->getnum1();
        $data['num2']=$this->welcome->getnum2();
        $data['num3']=$this->welcome->getnum3();
		$data['num4']=$this->welcome->getnum4();
        $this->load->view('welcome_message',$data);
    }
}
