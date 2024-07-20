<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smallsmall extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $data['title'] = "SmallSmall Home";
	    
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			
	
			$data['fname'] = $this->session->userdata('fname');			
	
			$data['lname'] = $this->session->userdata('lname');	
	
			$data['user_type'] = $this->session->userdata('user_type');	
	
			$data['loggedIn'] = $this->session->userdata('loggedIn');
		}
		$data['articles'] = $this->smallsmall_model->get_blog_snippets();

		//$data['rss_properties'] = $this->smallsmall_model->get_rss_properties();

		//$data['bss_properties'] = $this->smallsmall_model->get_bss_properties();
		
		//$data['sss_properties'] = $this->smallsmall_model->get_sss_properties();
		
		//$data['notifications'] = $this->smallsmall_model->fetchNotification();

		$this->load->view('templates/header', $data);

		$this->load->view('index', $data);

		$this->load->view('templates/blog', $data);

		$this->load->view('templates/footer', $data);
	}

	public function about()
	{
	    $data['title'] = "SmallSmall About Us";
	    
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			
	
			$data['fname'] = $this->session->userdata('fname');			
	
			$data['lname'] = $this->session->userdata('lname');	
	
			$data['user_type'] = $this->session->userdata('user_type');	
	
			$data['loggedIn'] = $this->session->userdata('loggedIn');
		}

		$this->load->view('templates/header', $data);

		$this->load->view('about', $data);

		$this->load->view('templates/blog', $data);

		$this->load->view('templates/footer', $data);
	}

	public function about_us()
	{
	    $data['title'] = "SmallSmall About Us";
	    
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			
	
			$data['fname'] = $this->session->userdata('fname');			
	
			$data['lname'] = $this->session->userdata('lname');	
	
			$data['user_type'] = $this->session->userdata('user_type');	
	
			$data['loggedIn'] = $this->session->userdata('loggedIn');
		}


		$this->load->view('templates/navless-header', $data);

		$this->load->view('about', $data);

		//$this->load->view('templates/footer', $data);
	}

	public function privacy_policy()
	{
	    $data['title'] = "SmallSmall Privacy Policy";
	    
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			
	
			$data['fname'] = $this->session->userdata('fname');			
	
			$data['lname'] = $this->session->userdata('lname');	
	
			$data['user_type'] = $this->session->userdata('user_type');	
	
			$data['loggedIn'] = $this->session->userdata('loggedIn');
		}

		$this->load->view('templates/header', $data);

		$this->load->view('privacy-policy', $data);

		$this->load->view('templates/footer', $data);
	}

	public function faq()
	{
	    $data['title'] = "SmallSmall FAQ";
	    
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			
	
			$data['fname'] = $this->session->userdata('fname');			
	
			$data['lname'] = $this->session->userdata('lname');	
	
			$data['user_type'] = $this->session->userdata('user_type');	
	
			$data['loggedIn'] = $this->session->userdata('loggedIn');
		}

		$this->load->view('templates/header', $data);

		$this->load->view('faq', $data);

		$this->load->view('templates/footer', $data);
	}

	public function terms_and_conditions()
	{
	    $data['title'] = "SmallSmall Terms and Conditions";
	    
		if($this->session->has_userdata('loggedIn')){

			$data['userID'] = $this->session->userdata('userID');			
	
			$data['fname'] = $this->session->userdata('fname');			
	
			$data['lname'] = $this->session->userdata('lname');	
	
			$data['user_type'] = $this->session->userdata('user_type');	
	
			$data['loggedIn'] = $this->session->userdata('loggedIn');
		}

		$this->load->view('templates/header', $data);

		$this->load->view('terms-and-conditions', $data);

		$this->load->view('templates/footer', $data);
	}

	public function login_page()
	{
		$data['page'] = 'login';

	    $data['title'] = "SmallSmall Home";
	    
		if(!$this->session->has_userdata('loggedIn')){

			$this->load->view('templates/navless-header', $data);

			$this->load->view('login', $data);

			$this->load->view('templates/flat-footer', $data);
		}else{
			redirect(base_url(), 'refresh');
		}
		
	}

	public function register_page()
	{
		$data['page'] = 'register';

	    $data['title'] = "SmallSmall Home";
	    
		if(!$this->session->has_userdata('loggedIn')){

			$this->load->view('templates/navless-header', $data);

			$this->load->view('register', $data);

			$this->load->view('templates/flat-footer', $data);
		}else{

			redirect(base_url(), 'refresh');
		}
		
	}

	public function registration_success()
	{
	    $data['title'] = "SmallSmall Home";
	    
		if(!$this->session->has_userdata('loggedIn') && $this->session->has_userdata('email')){		
	
			$data['name'] = $this->session->userdata('name');			
	
			$data['email'] = $this->session->userdata('email');	

			$this->load->view('templates/navless-header', $data);

			$this->load->view('registration-success', $data);

			$this->load->view('templates/flat-footer', $data);
		}else{
			redirect(base_url(). 'register', 'refresh');
		}
		
	}

	public function login(){

		$username = $this->input->post("username");

		$raw_password = $this->input->post("password");

		$check_email = $this->smallsmall_model->check_email($username);

		if(!empty($check_email)){

			$result = $this->login_user($username, $raw_password, $check_email['password'], $check_email['userID']);

			if ($result) {

				$user = $this->smallsmall_model->get_user_details($check_email['userID']);

				$userdata = array('userID' => $user['userID'], 'loggedIn' => 'yes', 'fname' => $user['firstName'], 'lname' => $user['lastName'], 'email' => $user['email'], 'verified' => $user['verified'], 'phone' => $user['phone'], 'user_type' => $user['user_type'], 'referral_code' => $user['referral_code'], 'rss_points' => $user['points']);
				//Set session
				
				$this->session->set_userdata($userdata);
				
				echo 1;

			} else {

				echo 'User details does not exist';
			}

		}else{

			echo 'Email does not exist';

		}
	}

	public function register_user(){

		$fname = $this->input->post('fname');

		$lname = $this->input->post('lname');

		$email = strtolower($this->input->post('username'));

		$password = md5($this->input->post('password'));

		$phone = $this->input->post('phone');

		$income = 0;
				
		$gender = '';

		$referral = '';
		
		$ua = $_SERVER['HTTP_USER_AGENT'];

		$user_type = $this->input->post('userType');
		
		$user_agent = $this->browserName($ua);

		//$referred_by = strtoupper($this->input->post('referred_by'));

		$interest = '';
		
		$confirmationCode = md5(date('d-m-Y h:i:s'));
		
		$code = substr($confirmationCode, -5);
				
		$rc = strtoupper(substr($lname, 0, 3).$code);

		//Check to see if email exists already

		$check_email = $this->smallsmall_model->check_email($email);

		if(!empty($check_email)){

			echo "Email already exists in our database!";
			
			exit;

		}else{			

			$registration = $this->smallsmall_model->register($fname, $lname, $email, $password, $phone, $income, $confirmationCode, $referral, $user_type, $interest, $rc, $gender, $user_agent['userAgent']);		

			if($registration){				

				$data['confirmationLink'] = 'https://dev-rent.smallsmall.com/confirm/'.$confirmationCode;

				$data['name'] = $fname;	
				
				$data['email'] = $email;

				$user = array('name' => $fname, 'email' => $email);

				$this->email->from('donotreply@smallsmall.com', 'SmallSmall');

				$this->email->to($email);

				$this->email->subject("Email Confirmation SmallSmall");	
				
				$this->email->set_mailtype("html");

				$message = $this->load->view('email/header.php', $data, TRUE);

				$message .= $this->load->view('email/confirmationemail.php', $data, TRUE);

				$message .= $this->load->view('email/footer.php', $data, TRUE);

				$this->email->message($message);

				$emailRes = $this->email->send();
				
				if($emailRes){

					$this->session->set_userdata($user);
					
					echo 1; 
						
				}else{
					
					echo "Error sending comfirmation email";
					
				}

			}

		}
	}
	
	public function browserName($u_agent){
		
		  $bname = 'Unknown';
		  $platform = 'Unknown';
		  $version= "";
		  $ub = "";

		  //First get the platform?
		  if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		  }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		  }elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		  }

		  // Next get the name of the useragent yes seperately and for good reason
		  if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		  }elseif(preg_match('/Firefox/i',$u_agent)){
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		  }elseif(preg_match('/OPR/i',$u_agent)){
			$bname = 'Opera';
			$ub = "Opera";
		  }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
			$bname = 'Google Chrome';
			$ub = "Chrome";
		  }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
			$bname = 'Apple Safari';
			$ub = "Safari";
		  }elseif(preg_match('/Netscape/i',$u_agent)){
			$bname = 'Netscape';
			$ub = "Netscape";
		  }elseif(preg_match('/Edge/i',$u_agent)){
			$bname = 'Edge';
			$ub = "Edge";
		  }elseif(preg_match('/Trident/i',$u_agent)){
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		  }

		  // finally get the correct version number
		  $known = array('Version', @$ub, 'other');
		  $pattern = '#(?<browser>' . join('|', $known) .
		')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		  if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		  }
		  // see how many we have
		  $i = count($matches['browser']);
		  if ($i != 1) {
			//we will have two since we are not using 'other' argument yet
			//see if version is before or after the name
			if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
				$version= $matches['version'][0];
			}else {
				$version= $matches['version'][1];
			}
		  }else {
			$version= $matches['version'][0];
		  }

		  // check if we have a number
		  if ($version==null || $version=="") {$version="?";}

		  return array(
			'userAgent' => $u_agent,
			'name'      => $bname,
			'version'   => $version,
			'platform'  => $platform,
			'pattern'    => $pattern
		  );
		 
	} 

	public function login_user($username, $password, $dbpassword, $userID)
	{

		$login_limit = 5;

		$user = 0;

		$md5_password = md5($password);

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		if ($md5_password == $dbpassword) {

			$this->smallsmall_model->update_password_to_hash($userID, $hashed_password);

			$user = 1;

		} else if (password_verify($password, $dbpassword)) {

			$user = 1;
		} else {

			if (!$this->session->has_userdata('attempt')) {

				$this->session->set_userdata(array('attempt' => 1));
			} else {

				$new_val = $this->session->userdata('attempt') + 1;

				$this->session->set_userdata('attempt', $new_val);
			}
		}

		return $user;
	}

}
