<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_Controller {

	function __construct(){
		session_start();
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
	} 
  
	function index(){
        $this->load->view('login');
	}
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('login_model');
		if ($this->login_model->check_user($username, $password) == TRUE){
			$user = $this->login_model->check_user($username, $password);
			foreach ($user as $u):
			$_SESSION['username'] = $u->username; 
			$_SESSION['id'] = $u->id; 
			$_SESSION['userakses'] = $u->userakses; 
			$this->load->view('header');
			$this->load->view('body');
			endforeach;
		}
		else{
			redirect('controller/index');
		}
	}
	function signup(){
		$this->load->view('signup');
	}
	function proses_signup(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$this->load->model('signup_model');
		if ($this->signup_model->signup($username, $password, $email) == TRUE)
			{
				redirect('controller/index');
			}
		else
			{
				redirect('controller/signup');
			}
	}
	function home(){
		if(!isset($_SESSION["id"])){
			redirect('controller/index');
		}
		$this->load->view('header');
		$this->load->view('body');		
	}
	function forum(){
		$this->load->model('forum_model');
		$data['posting'] = $this->forum_model->list_posting();
		$this->load->view('header');
		$this->load->view('forum',$data);
	}
	function klasemen(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('klasemen');		
	}
	function profil(){
		$this->load->model('profil_model');
		$data['profil'] = $this->profil_model->tampil_profil();
		$this->load->view('header');
		$this->load->view('profil',$data);
	}
	function updateprofil()
	{
		$param=array('id'=>$_GET['id']);
		$this->load->model('profil_model');
		$data['profil']=$this->profil_model->get_profil($param);
		$this->load->view('header');
		$this->load->view('profil_u',$data);
	}
	function proses_updateprofil()
	{
		$data=array(
		'id'=>$_POST['id'],
		'username'=>$_POST['username'],
		'email'=>$_POST['email']
		);
		$this->load->model('profil_model');
		$res=$this->profil_model->edit($data);
		//echo json_encode($res);
		if($res){
			redirect('controller/profil');
		}else{
			echo "Pengubahan Data Gagal <br>";
			echo '<a href="'.'controller/index'.'">Kembali</a>';
		}
	}
	
	function do_upload(){
		$this->load->model('profil_model','profil');
		
		$config['upload_path'] = "./upload/"; //lokasi folder yang akan digunakan untuk menyimpan file
		$config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		$config['file_name'] = url_title($this->input->post('file_upload'));
		$this->load->library('upload',$config);
		$this->upload->initialize($config); //meng set config yang sudah di atur
		if( !$this->upload->do_upload('file_upload')){
			echo $this->upload->display_errors();
		}
		else{
			$data = array('name'=>$this->upload->file_name);
			$this->profil->insert($data,'image');
			redirect('controller/view');
		}
	}
	public function view(){
		$this->load->model('profil_model','profil');
		$data['image'] = $this->profil->show('image');
		$this->load->view('profil',$data);
	}
		
	function member(){
		$this->load->model('member_model');
		$data['member'] = $this->member_model->list_member();
		$this->load->view('header');
		$this->load->view('member',$data);
	}
	function deletemember($id){
		$this->load->model('member_model');
		$data['member'] = $this->member_model->delete_member($id);
		$data['member'] = $this->member_model->list_member();
		$this->load->view('header');
		$this->load->view('member',$data);
	}
	function message(){
		$this->load->helper('date');
		$this->load->view('header');
		$this->load->view('message');
	}
	function proses_message(){
		$email1 = $this->input->post('email1');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$this->load->model('newmessage_model');
		if ($this->newmessage_model->newmessage($email1, $subject, $message) == TRUE)
			{
				redirect('controller/outbox');
			}
		else
			{
				redirect('controller/message');
			}
	}
	function inbox(){
		$this->load->model('message_model');
		$data['message'] = $this->message_model->list_inbox();
		$this->load->view('header');
		$this->load->view('inbox',$data);
	}
	function outbox(){
		$this->load->model('message_model');
		$data['message'] = $this->message_model->list_outbox();
		$this->load->view('header');
		$this->load->view('outbox',$data);
	}
	function logout(){
		session_destroy();
		redirect('controller/index');
	}
	function newpost(){
		$this->load->helper('date');
		$this->load->view('header');
		$this->load->view('new-post');
	}
	function proses_post(){
		$judul = $this->input->post('judul');
		$content = $this->input->post('content');
		$this->load->model('newpost_model');
		if ($this->newpost_model->newpost($judul, $content) == TRUE)
			{
				redirect('controller/forum');
			}
		else
			{
				redirect('controller/new-post');
			}
	}
	
	function score()
	{
		$this->load->model('score_model');
		$data['score']=$this->score_model->get_score();
		$this->load->view('header');
		$this->load->view('livescore',$data);
	}

	function addscore()
	{
		$this->load->view('header');
		$this->load->view('livescore_a');
	}
	function updatescore()
	{
		$param=array('s_id'=>$_GET['s_id']);
		$this->load->model('score_model');
		$data['score']=$this->score_model->get_scores($param);
		$this->load->view('header');
		$this->load->view('livescore_u',$data);
	}
	
	function proses_addscore()
	{
		$data=array(
		'negara1'=>$_POST['negara1'],
		'negara2'=>$_POST['negara2'],
		'gol1'=>$_POST['gol1'],
		'gol2'=>$_POST['gol2'],
		'tanggal'=>$_POST['tanggal']
		);
		$this->load->model('score_model');
		$res=$this->score_model->add($data);
		//echo json_encode($res);
		if($res){
			redirect('controller/score');
		}else{
			echo "Penambahan Data Gagal <br>";
			echo '<a href="'.site_url('controller/addscore').'">Kembali</a>';
		}
	}
	function proses_updatescore()
	{
		$data=array(
		's_id'=>$_POST['s_id'],
		'negara1'=>$_POST['negara1'],
		'negara2'=>$_POST['negara2'],
		'gol1'=>$_POST['gol1'],
		'gol2'=>$_POST['gol2'],
		'tanggal'=>$_POST['tanggal']
		);
		$this->load->model('score_model');
		$res=$this->score_model->edit($data);
		//echo json_encode($res);
		if($res){
			redirect('controller/score');
		}else{
			echo "Pengubahan Data Gagal <br>";
			echo '<a href="'.'controller/addscore'.'">Kembali</a>';
		}
	}
	
	function deletescore()
	{
		$data=array(
			's_id'=>$_GET['s_id']
		);
		$this->load->model('score_model');
		$res=$this->score_model->delete($data);
		if($res){
			redirect('controller/score');
		}else{
			echo "Hapus Data Gagal <br>";
			echo '<a href="'.site_url().'">Kembali</a>';
		}
	}
	
	function badword()
	{
		$this->load->model('badword_model');
		$data['word']=$this->badword_model->get_badword();
		$this->load->view('header');
		$this->load->view('badwords',$data);
	}

	function addword()
	{
		$this->load->view('header');
		$this->load->view('badwords_a');
	}
	function updateword()
	{
		$param=array('wordid'=>$_GET['wordid']);
		$this->load->model('badword_model');
		$data['word']=$this->badword_model->getbadword($param);
		$this->load->view('header');
		$this->load->view('badwords_u',$data);
	}
	
	function proses_addword()
	{
		$data=array(
		'bad'=>$_POST['word'],
		'sensor'=>$_POST['sensor']
		);
		$this->load->model('badword_model');
		$res=$this->badword_model->add($data);
		//echo json_encode($res);
		if($res){
			redirect('controller/badword');
		}else{
			echo "Penambahan Data Gagal <br>";
			echo '<a href="'.site_url('controller/addword').'">Kembali</a>';
		}
	}
	function proses_updateword()
	{
		$data=array(
		'wordid'=>$_POST['wordid'],
		'bad'=>$_POST['word'],
		'sensor'=>$_POST['sensor']
		);
		$this->load->model('badword_model');
		$res=$this->badword_model->edit($data);
		//echo json_encode($res);
		if($res){
			redirect('controller/badword');
		}else{
			echo "Pengubahan Data Gagal <br>";
			echo '<a href="'.'controller/addword'.'">Kembali</a>';
		}
	}
	
	function deleteword()
	{
		$data=array(
			'wordid'=>$_GET['wordid']
		);
		$this->load->model('badword_model');
		$res=$this->badword_model->delete($data);
		if($res){
			redirect('controller/badword');
		}else{
			echo "Hapus Data Gagal <br>";
			echo '<a href="'.site_url().'">Kembali</a>';
		}
	}
}