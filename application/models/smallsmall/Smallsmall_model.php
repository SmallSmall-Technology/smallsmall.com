<?php

class Smallsmall_model extends CI_Model {

	public function __construct()
	{

		parent::__construct();

		$this->load->database();

	}

    private $_limit;

	private $_pageNumber;

	private $_offset;

	// setter getter functionf

	public function setLimit($limit) {

		$this->_limit = $limit;

	}

	public function setPageNumber($pageNumber) {

		$this->_pageNumber = $pageNumber;

	}

	public function setOffset($offset) {

		$this->_offset = $offset;

	}

	public function login_user($username, $password){

        $this->db->select('*');

        $this->db->from('user_tbl');

        $this->db->where('email', $username);

        $this->db->where('password', $password);

        $query = $this->db->get();

        return $query->row_array();

    }
    
    public function check_email($email){

		$this->db->select('email');

		$this->db->from('user_tbl');

		$this->db->where('email', $email);

		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() > 0){

			return 1;

		}else{

			return 0;
			
		}

	}


	public function register($fname, $lname, $email, $password, $phone, $income, $confirmationCode, $referral, $user_type, $interest, $rc, $gender, $user_agent){

        $digits = 12;

        $randomNumber = '';

        $count = 0;

        while($count < $digits){

            $randomDigit = mt_rand(0, 9);

            $randomNumber .= $randomDigit;

            $count++;

        }

        $id = $randomNumber;

        $this->userID = $id;

        $this->firstName = $fname; // please read the below note

        $this->lastName = $lname;

        $this->email = $email;

        $this->password = $password;

        $this->phone = $phone;

        $this->income = $income;

        $this->referral = $referral;
        
        $this->gender = $gender;
        
        //$this->referred_by = $referred_by;
        
        $this->referral_code = $rc;

        $this->user_type = $user_type;

        $this->interest = $interest;

        $this->verified = 'no';

        $this->points = 0;

        $this->status = 'Active';
		
		$this->platform = 'Web';
		
		$this->user_agent = $user_agent;

        $this->regDate = date('Y-m-d H:i:s');

        if($this->db->insert('user_tbl', $this)){

            $lastlog = date('Y-m-d H:i:s');

            return $this->db->insert('login_tbl', array('email' => $email, 'password' => $password, 'userID' => $id, 'lastLogin' => $lastlog, 'confirmation' => $confirmationCode));
            
        }else{
            
            return 0;
        }

    }

    public function get_blog_snippets(){

        $this->db->select('*');

        $this->db->from('blog_tbl');

        $this->db->limit(3);

        $this->db->order_by('articleID', 'DESC');

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_rss_properties(){

        $today = date('Y-m-d');
        
        $this->db->select('*');

        $this->db->from('property_tbl');

        $this->db->where('featured_property', 'yes');

        $this->db->where('available_date >=', $today);

        $this->db->limit(8);

        $this->db->order_by('rand()');

        $query = $this->db->get();

        return $query->result_array();
    }
    public function get_sss_properties(){

        $this->db->select('*');

        $this->db->from('stayone_apartments');

        $this->db->limit(8);

        $this->db->order_by('rand()');

        $query = $this->db->get();

        return $query->result_array();
        
    }
    public function get_bss_properties(){

        $this->db->select('a.*, b.id, b.type, b.slug');

		$this->db->from('buytolet_property as a');

		$this->db->where('a.status', 'New');
		
		$this->db->where('a.active', 1);
		
		$this->db->where('a.availability !=', 'Sold');
		
	    $this->db->where('a.featured', 1);

		$this->db->join('apt_type_tbl as b', 'b.id = a.apartment_type', 'LEFT');

		$this->db->limit(8);
		
		$this->db->order_by('a.date_of_entry', 'DESC');
		
		$query = $this->db->get();

		return $query->result_array();
    }
    
    public function fetchNotification(){
	    
	    $today = date('Y-m-d');
	    
	    $this->db->select('*');
	    
	    $this->db->from('notification_tbl');
	    
	    $this->db->where('start_date <=', $today);
	    
	    $this->db->where('end_date >=', $today);
	    
	    $this->db->order_by('end_date', 'DESC');

		$this->db->limit(1);
	    
	    $query = $this->db->get();
	    
	    return $query->row_array();
	}

}
