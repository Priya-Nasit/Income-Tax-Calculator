<?php

class Auth_model extends CI_Model
{
	public function __construct()
	{
      parent::__construct();
	}

	/*function delete($data)
	{
      $this->db->delete('income',array('id' => $data));
      return;
	}*/

	public function login_form()
	{
		$this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required|min_length[5]');
          
          if($this->form_validation->run()==TRUE)
          {
          	 $username=$_POST['username'];
          	 $password=md5($_POST['password']);
          	// $this->db->select('*');
          	 //$this->db->from('users');
          	 //$this->db->where(array('username'=>$username,'password'=>$password));
          	 //$query=$this->db->get();
          	 //$user=$query->row();

          	/* if($user->email){
               
               $_SESSION['user_logged']=TRUE;
               $_SESSION['username']=$user->username;
               $this->session->set_flashdata("success",$_SESSION['username']);

               redirect("auth/dashboard","refresh");
          	 }
          	 else
          	 {
          	 	$this->session->set_flashdata("error","No such account exists");
          	 	//redirect("auth/login_form","refresh");
          	 }

          }*/

  $this->db->select('*');
  $this->db->from('users');
  $this->db->where(array('username'=>$username,'password'=>$password));
  $query=$this->db->get();
  $user=$query->row();        
  //$select="select * from users where username='$username' AND password='$password'";
  //$con=mysqli_connect("localhost","root","","project");
  //$result=mysqli_query($con,$select);
  //if(mysqli_affected_rows($query) > 0)
   //{
     //while($row = $result->fetch_assoc())
     //{

  if($user->email)
  {
   $_SESSION['username']=$user->username;
   $_SESSION['lastname']=$user->lastname;
   $_SESSION['email']=$user->email;
   $_SESSION['phone']=$user->phone;

   echo "<script>
        alert('Login successfully!! Welcome $user->username');
        </script>";
   $this->load->view('dashboard');   
          //$_SESSION['username']=$row['username'];
           //$_SESSION['user_id']=$row["user_id"];
          
             //$_SESSION['userid'];
             //echo "login successfully "; 
             //header('Location:index.php');
            
    //  }
    }
    else
    {
      /*echo "<script>
        alert('Login Failed!!Please Try Again!!');
        </script>";*/ 
      redirect("auth/login_form");
        //$this->load->view('dashboard');
    }
    //}
  }
   if(!isset($_SESSION['username']))
   {
    $this->load->view('login_form'); 
    //'username'=>$username,'password'=>$password 
 }
}

	function value_tax_form()
{
		$data = $this->db->query("select * from income");
			return $data->result_array();
	}


  function credit_card()
  {
    $data = $this->db->query("select * from credit_card");
      return $data->result_array();
  }

  function debit_card()
  {
    $data = $this->db->query("select * from debit_card");
      return $data->result_array();
  }

  function personal_loan()
  {
    $data = $this->db->query("select * from personal_loan");
      return $data->result_array();
  }

  function home_loan()
  {
    $data = $this->db->query("select * from home_loan");
      return $data->result_array();
  }

  function car_loan()
  {
    $data = $this->db->query("select * from car_loan");
      return $data->result_array();
  }

   function car_ins()
  {
    $data = $this->db->query("select * from ca_ins");
      return $data->result_array();
  }
  function health_ins()
  {
    $data = $this->db->query("select * from health_ins");
      return $data->result_array();
  }
  function life_ins()
  {
    $data = $this->db->query("select * from life_ins");
      return $data->result_array();
  }

	function admin_feedback()
	{
		$data = $this->db->query("select * from feedback");
			return $data->result_array();
	}

 /* function education_loan()
  {
    $data = $this->db->query("select * from education_loan");
      return $data->result_array();
  }*/

	function admin_contact()
	{
		$data = $this->db->query("select * from contact");
			return $data->result_array();
	}

	function admin_userdata()
	{
		$data = $this->db->query("select * from users");
			return $data->result_array();
	}

	/*function calculation()
	{
	  $data = $this->db->query("select * from income");
	    return $data->result_array();
	 }*/

	function getdata_delete()
	{
		$this->load->database();
		$data=$this->db->get('users');
		return $data->result();
	}
   function admin_delete($id)
	{
      $this->load->database();
      $this->db->where('user_id',$id);
        $this->db->delete('users');
	  return true;
	} 


  function contact_getdata_delete()
  {
    $this->load->database();
    $data=$this->db->get('contact');
    return $data->result();
  }
   function admin_contact_delete($id)
  {
      $this->load->database();
      $this->db->where('id',$id);
        $this->db->delete('contact');
    return true;
  } 

  function feedback_getdata_delete()
  {
    $this->load->database();
    $data=$this->db->get('feedback');
    return $data->result();
  }
   function admin_feedback_delete($id)
  {
      $this->load->database();
      $this->db->where('id',$id);
        $this->db->delete('feedback');
    return true;
  } 

  /*function admin_getdata_delete()
  {
    $this->load->database();
    $data=$this->db->get('users');
    return $data->result();
  }
   function admin_delete($id)
  {
      $this->load->database();
      $this->db->where('id',$id);
        $this->db->delete('users');
    return true;
  } */
	

	function getdata_calculation()
	{
		$this->load->database();
		$data=$this->db->get('income');
		return $data->result();
	}
   function calculation($id)
	{
      $this->load->database();
      $this->db->where('id',$id);
        //$this->db->delete('income');
     $this->db->query("select * from income");
	  // return $item->result_array();
	  return true;
	} 
   
   public function tax_calc_form()
     {
       $this->form_validation->set_rules('username','Username','required');
       $this->form_validation->set_rules('lastname','LastName','required');
         $this->form_validation->set_rules('email','Email','required');
           $this->form_validation->set_rules('phone','Phone','required'); 
           $this->form_validation->set_rules('category','Category','required'); 
          $this->form_validation->set_rules('salary','salary','required');
          $this->form_validation->set_rules('extra_income','extra income','required');
          $this->form_validation->set_rules('professional_tax','professional tax','required');
           $this->form_validation->set_rules('house_loan_interest','house loan interest','required');
          $this->form_validation->set_rules('education_loan_interest','education loan interest','required');
          $this->form_validation->set_rules('mediclaim','mediclaim','required');
          $this->form_validation->set_rules('provident_fund','provident fund','required');
          $this->form_validation->set_rules('insurance_premium','insurance premium','required');
          $this->form_validation->set_rules('child_tution_fees','child tution fees','required');

          $this->form_validation->set_rules('housing_loan_principle_amount','housing loan principle amount','required');
          
          $this->form_validation->set_rules('insurance_pre_paid','insurance pre paid','required');
          $this->form_validation->set_rules('public_provident_fund','public provident fund','required');
          $this->form_validation->set_rules('national_saving_certificate','national saving certificate','required');
          $this->form_validation->set_rules('united_link_insurance_plan','united link insurance plan','required');
          $this->form_validation->set_rules('mutual_funds','mutual funds','required');
            $this->form_validation->set_rules('national_pension_scheme','national pension scheme','required');
          
           date_default_timezone_set("Asia/kolkata");
          $date=date('Y-m-d H:i:sa');
         $time=date('H:i:sa');

          if($this->form_validation->run() == TRUE)
          {

               $data=array(
                    'username'=>$_POST['username'],
                    'lastname'=>$_POST['lastname'],
                    'email'=>$_POST['email'],
                    'phone'=>$_POST['phone'],
                    'category'=>$_POST['category'],

                    'salary'=>$_POST['salary'],
                    'extra_income'=>$_POST['extra_income'],
                    'professional_tax'=>$_POST['professional_tax'],
                    'house_loan_interest'=>$_POST['house_loan_interest'],

                    'education_loan_interest'=>$_POST['education_loan_interest'],
                    'mediclaim'=>$_POST['mediclaim'],
                    'provident_fund'=>$_POST['provident_fund'],
                    'insurance_premium'=>$_POST['insurance_premium'],

                    'child_tution_fees'=>$_POST['child_tution_fees'],
                    ' housing_loan_principle_amount'=>$_POST['housing_loan_principle_amount'],
                     'insurance_pre_paid'=>$_POST['insurance_pre_paid'],
                    
                    'public_provident_fund'=>$_POST['public_provident_fund'],
                    
                    'national_saving_certificate'=>$_POST['national_saving_certificate'],
                    'united_link_insurance_plan'=>$_POST['united_link_insurance_plan'],
                    'mutual_funds'=>$_POST['mutual_funds'],
                    'national_pension_scheme'=>$_POST['national_pension_scheme'],

                    'date'=>$date,
                    'time'=>$time

                    
               );

               $this->db->insert('income',$data);
               $this->session->set_flashdata("success","");
               redirect("auth/value_tax_form");
          }
        
          $this->load->view('tax_calc_form');
     }

  /*public function getdata_update()
	{
		$this->load->database();
		$data=$this->db->get('income');
		return $data->result();
	}
     public function update($id)
     {
          $data=array(
                    'gross_AI'=>$_POST['gross_AI'],
                    'other_sources_AI'=>$_POST['other_sources_AI'],
                    'income_AI'=>$_POST['income_AI'],
                    'rental_income'=>$_POST['rental_income'],
                    'home_loan_AI_self'=>$_POST['home_loan_AI_self'],
                    'basic_deduction'=>$_POST['basic_deduction'],
                    'SA_deposit_interest'=>$_POST['SA_deposit_interest'],

                    'charity_donation'=>$_POST['charity_donation'],
                    'medical_ins'=>$_POST['medical_ins'],
                    'interest_edu_loan'=>$_POST['interest_edu_loan'],
                    'annum_basic_salary'=>$_POST['annum_basic_salary'],
                    'annum_DA'=>$_POST['annum_DA'],
                    'annum_HRA'=>$_POST['annum_HRA'],
                    'annum_total_rent'=>$_POST['annum_total_rent']
                    
               );

            $this->load->database(); 
         	$this->db->set($data);
			$this->db->where('id',$id);
			return $this->db->update('income',$data);
               redirect("auth/value_tax_form","refresh");
          $this->load->view('update');
     }*/
    function getuserid($id)
  {
    $this->load->database();
    $this->db->where('id',$id);
    $data=$this->db->get('income');
    return $data->result_array();
  }

  function update_data($id)
  {
    $data=array(
        //$id = $this->input->post('id'),
        'salary' => $this->input->post('salary'),
        'extra_income' => $this->input->post('extra_income'),
        'professional_tax' => $this->input->post('professional_tax'),
        'house_loan_interest' => $this->input->post('house_loan_interest'),
        'education_loan_interest' => $this->input->post('education_loan_interest'),
        'mediclaim' => $this->input->post('mediclaim'),
        'provident_fund' => $this->input->post('provident_fund'),
        'insurance_premium' => $this->input->post('insurance_premium'),
        'child_tution_fees' => $this->input->post('child_tution_fees'),
        'insurance_pre_paid'  => $this->input->post('insurance_pre_paid'),
        'housing_loan_principle_amount' => $this->input->post('housing_loan_principle_amount'),
        'public_provident_fund' => $this->input->post('public_provident_fund'),
        'national_saving_certificate' => $this->input->post('national_saving_certificate'),
        'united_link_insurance_plan' => $this->input->post('united_link_insurance_plan'),
        'mutual_funds' => $this->input->post('mutual_funds'),
        'national_pension_scheme' => $this->input->post('national_pension_scheme')
        
  );

    $this->db->set($data);
    $this->db->where('id',$id);
    return $this->db->update('income',$data);
  }




     public function contactus(){
      
          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('message','Message','required');
          date_default_timezone_set("Asia/kolkata");
          $date=date('Y-m-d H:i:sa');
         $time=date('H:i:sa');

          if($this->form_validation->run() == TRUE)
          {
            $data=array(
              'username'=>$_POST['username'],
              'email'=>$_POST['email'],
              'message'=>$_POST['message'],
              'date'=>$date,
              'time'=>$time
              );

               $this->db->insert('contact',$data);            
              redirect("auth/dashboard","refresh");
          }

          $this->load->view('contactus');
     }

 public function register_form()
	{
		
          $this->form_validation->set_rules('username','Username','required');
           $this->form_validation->set_rules('lastname','LastName','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('password','Password','required|min_length[5]');
          $this->form_validation->set_rules('password','Confirm Password','required|min_length[5]|matches[password]');
           $this->form_validation->set_rules('phone','Phone','required|min_length[5]');
         date_default_timezone_set("Asia/kolkata");
         $date=date('Y-m-d H:i:sa');
         $time=date('H:i:sa');
          if($this->form_validation->run() == TRUE)
          {
          	echo "form validate successfully";

          	$data=array(
          		'username'=>$_POST['username'],
              'lastname'=>$_POST['lastname'],
          		'email'=>$_POST['email'],
          		'password'=>md5($_POST['password']),
          		'gender'=>$_POST['gender'],
          		'created_date'=>$date,
              'time'=>$time,
          		'phone'=>$_POST['phone']
          	);

          	$this->db->insert('users',$data);
          	//$this->session->set_flashdata("success","Your account has been registered.you can login now");
            //$this->session->set_data();
          	redirect("auth/register_form");
          }
		
		$this->load->view('register_form');
	}

	public function feedback()
       {   
          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('lastname','LastName','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('phone','Phone','required');
          $this->form_validation->set_rules('message','Message','required');
           date_default_timezone_set("Asia/kolkata");
          $date=date('Y-m-d H:i:sa');
         $time=date('H:i:sa');
          if($this->form_validation->run() == TRUE)
          {
            $data=array(
              'username'=>$_POST['username'],
              'lastname'=>$_POST['lastname'],
              'email'=>$_POST['email'],
              'phone'=>$_POST['phone'],
              'message'=>$_POST['message'],
               'date'=>$date,
               'time'=>$time,
              );

              $email=$_POST['email'];
              $this->db->select('*');
             $this->db->from('users');
             $this->db->where(array('email'=>$email));
             $query=$this->db->get();
             $user=$query->row();

             if($user->email){
               $this->session->set_flashdata("success","Your message has been submited ");
               
               
               $this->db->insert('feedback',$data);            
              
                redirect("auth/dashboard","refresh");
              }

              else
             {
              $this->session->set_flashdata("error","No such account exists");
             }
      
    }
          $this->load->view('feedback');
     }


}
?>