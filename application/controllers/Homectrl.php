<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homectrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomeMod');
	}

	public function index()
	{
		$this->load->view('homepage');
	}

	public function service()
	{
		$this->load->view('service');
	}

	public function defence_aerospace()
	{
		$this->load->view('plm_implementation');
	}

	public function automotives()
	{
		$this->load->view('automotives');
	}

	public function healthcare()
	{
		$this->load->view('healthcare');
	}

	public function consumer_electronics()
	{
		$this->load->view('consumer_electronics');
	}

	public function industrial_products()
	{
		$this->load->view('industrial_products');
	}
	public function energy()
	{
		$this->load->view('energy');
	}

	public function about_us()
	{
		$this->load->view('aboutus');
	}

	public function careers()
	{
		$this->load->view('siemens');
	}

	public function single_doc()
	{
		$this->load->view('singledoc');
	}

	public function plm_cad1()
	{
		$this->load->view('plm_cad1');
	}
	public function plm_cad2()
	{
		$this->load->view('plm_cad2');
	}

	public function engineering_case_study()
	{
		$this->load->view('engineering_case_study');
	}

	public function iot_case_study()
	{
		$this->load->view('iot_case_study');
	}
	public function industrial_manufacturing_case_study()
	{
		$this->load->view('industrial_manufacturing_case_study');
	}
	public function recruitment_case_study()
	{
		$this->load->view('recruitment_case_study');
	}
	
	public function request_quote()
	{
		$this->load->view('quote');
	}

	public function plm_solutions()
	{
		$this->load->view('plmsolutions');
	}

	public function erd_solutions()
	{
		$this->load->view('erd_solution');
	}

	public function iot_solutions()
	{
		$this->load->view('iot_solutions');
	}

	public function industrial_manufacturing_solutions()
	{
		$this->load->view('industrial_manufacturing_solutions');
	}

	public function engineering_service()
	{
		$this->load->view('engineering_service');
	}

	public function iot_service()
	{
		$this->load->view('iot_service');
	}

	public function industrial_service()
	{
		$this->load->view('industrial_service');
	}

	public function recruitment_service()
	{
		$this->load->view('recruitment_service');
	}
	public function recruitment_solutions()
	{
		$this->load->view('recruitment_solutions');
	}

	public function contact_us()
	{
		$this->load->view('contact');
	}

	public function sendmail()
	{
		//echo "<pre>";print_r($_SESSION);exit;
		
		$this->load->library('email');

		//SMTP & mail configuration
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'smtp.gmail.com',
		    'smtp_crypto' => 'tls',
		    'smtp_port' => 587,
		    'smtp_user' => 'pkssharma66@gmail.com',
		    'smtp_pass' => 'ywcfugxexccvntxi',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$data = $this->input->post();
		//echo "<pre>";print_r($data);exit;
		$username = $data['name'];
		$email = $data['email'];
		$phone = $data['phone'];
		$subject = $data['subject'];
		$message = $data['message'];
		//Email content
		$htmlContent = '<h1>Contact Us Details</h1>';
		$htmlContent .= '<p><h2> Name :'.$username.'</h2></p>
			<p><h2>Mobile No :<a href="https://wa.me/+91'.$phone.'">'.$phone.'</a></h2></p>
			<p><h2>Email : '.$email.'</h2></p>
			<p><h2>Subject: '.$subject.'</h2></p>
			<p><h2>Message: '.$message.'</h2></p></p>';

		$this->email->to('sharma.k@eloiconsulting.com');
		$this->email->bcc('pkssharma66@gmail.com');
		$this->email->from($email);
		$this->email->subject('Contact Query Info');
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();

		echo json_encode($data);
		
	}

	//job apply function
	public function jobapply()
	{
		//echo "<pre>";print_r($_FILES);exit;
		//echo "<pre>";print_r($_POST);exit;
		// $config['upload_path']="./uploads";
		// $uploads_dir = "./assets/uploads";
	        // $config['allowed_types']='*';
	        // $config['encrypt_name'] = TRUE;
	        // $name = basename($_FILES["profiel_foto"]["name"]);
         	//  $tmp_name = $_FILES["profiel_foto"]["tmp_name"];
		//         $this->load->library('upload',$config);
		//         if($this->upload->do_upload("profiel_foto")){
		//             $data = array('upload_data' => $this->upload->data());
		//  		move_uploaded_file($tmp_name, "$uploads_dir/$name");

		//             $title= $this->input->post('title');
		//             $image= $data['upload_data']['file_name']; 
		             
		//             $result= $this->upload_model->save_upload($title,$image);
		//             echo json_decode($result);
		//         } 
		$data = $this->input->post();
		//echo "<pre>";print_r($data);exit;
       		$insert = array(
			'applied_fname' => $data['fname'],
			'applied_lname' => $data['lname'],
			'applied_email' => $data['email'],
			'applied_phone' => $data['phone'],
			'applied_post' => $data['aplliedpost'],
			'applied_experience' => $data['exp'],
			'applied_cover' => $data['cvrltr'],
			'applied_resume' => $data['resume'],
			'created_date' => date('Y-m-d H:i:s'),
			'updated_date' => ''
		);
		$this->db->insert('eloi_career',$insert);
		$this->load->library('email');

		//SMTP & mail configuration
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'smtp.gmail.com',
		    'smtp_crypto' => 'tls',
		    'smtp_port' => 587,
		    'smtp_user' => 'pkssharma66@gmail.com',
		    'smtp_pass' => 'ywcfugxexccvntxi',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$data = $this->input->post();
		//echo "<pre>";print_r($data);exit;
		$fname = $data['fname'];
		$lname = $data['lname'];
		$email = $data['email'];
		$phone = $data['phone'];
		$aplliedpost = $data['aplliedpost'];
		$exp = $data['exp'];
		$cvrltr = $data['cvrltr'];
		$resume = $data['resume'];
		//Email content
		$htmlContent = '<h1>Contact Us Details</h1>';
		$htmlContent .= '<p><h2> FirstName :'.$fname.'</h2></p>
			<p><h2>lastName : '.$lname.'</h2></p>
			<p><h2>Mobile No :<a href="https://wa.me/+91'.$phone.'">'.$phone.'</a></h2></p>
			<p><h2>Email : '.$email.'</h2></p>
			<p><h2>Applied Post For: '.$aplliedpost.'</h2></p>
			<p><h2>Years Of Experience: '.$exp.'</h2></p></p>
			<p><h2>Cover Letter: '.$cvrltr.'</h2></p></p>';
		$this->email->to('sharma.k@eloiconsulting.com');
		$this->email->bcc('pkssharma66@gmail.com');
		$this->email->from($email);
		$this->email->subject('Career Apply');
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();

		echo json_encode($data);
		
	}

}
