<?php
class admin extends CI_Controller
{

	public function admin_login()
	{
		$this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('password','Password','required|min_length[5]');
          
          if($this->form_validation->run()==TRUE)
          {
          	 $username=$_POST['username'];
          	 $password=md5($_POST['password']);
          	 $this->db->select('*');
          	 $this->db->from('admin');
          	 $this->db->where(array('username'=>$username,'password'=>$password));
          	 $query=$this->db->get();
          	 $user=$query->row();

          	 if($user->id)
          	 {
               $this->session->set_flashdata("admin_success",$user->username);
               $_SESSION['user_logged']=TRUE;
               $_SESSION['admin']=$user->username;
               redirect("admin/admin_userdata");
          	 }
          	 else
          	 {
          	 	$this->session->set_flashdata("error","No such account exists");
          	 	//redirect("auth/login_form","refresh");
          	 }

          }
          $this->load->view('admin_login');
	  
	}


	public function admin_dashboard()
	 {
          $this->load->view('admin_dashboard');
     }
     public function redirect_admin_dashboard()
     {
          redirect("admin/admin_dashboard","refresh");

     }

      public function admin_contact()
    {
       $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->admin_contact();

       $this->load->view('admin_contact',$fetch);

    }
     public function redirect_admin_contact()
     {
          redirect("admin/admin_contact","refresh");

     }
     

    /* public function admin_delete()
    {
      $this->load->model('Auth_model');
      $id=$this->input->get('id');
      if($this->Auth_model->admin_delete($id))
      {
        $data['item']=$this->Auth_model->admin_getdata_delete();

      }

      redirect('admin/admin_delete','refresh');
    }

    public function redirect_admin_delete(){
           redirect("admin/admin_delete","refresh");

     }*/

     public function admin_feedback()
    {
       $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->admin_feedback();

       $this->load->view('admin_feedback',$fetch);

    }
     public function redirect_admin_feedback()
     {
          redirect("admin/admin_feedback","refresh");

     }

     
    public function admin_userdata()
    {
       $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->admin_userdata();
       $this->load->view('admin_userdata',$fetch);

    }
     
     public function redirect_admin_userdata()
     {
          redirect("admin/admin_userdata","refresh");
     }

     public function admin_logout()
	 {
          $this->load->view('admin_logout');
     }
     public function redirect_admin_logout()
     {
          redirect("admin/admin_logout","refresh");

     }

     public function redirect_delete(){
           redirect("admin/admin_userdata","refresh");

     }

     public function admin_delete()
    {
      $this->load->model('Auth_model');
      $id=$this->input->get('user_id');
      if($this->Auth_model->admin_delete($id))
      {
        $data['item']=$this->Auth_model->getdata_delete();

      }

      redirect('admin/admin_userdata','refresh');
    }

    public function admin_contact_delete()
    {
      $this->load->model('Auth_model');
      $id=$this->input->get('id');
      if($this->Auth_model->admin_contact_delete($id))
      {
        $data['item']=$this->Auth_model->contact_getdata_delete();

      }

      redirect('admin/admin_contact','refresh');
    }


     public function admin_feedback_delete()
    {
      $this->load->model('Auth_model');
      $id=$this->input->get('id');
      if($this->Auth_model->admin_feedback_delete($id))
      {
        $data['item']=$this->Auth_model->feedback_getdata_delete();

      }

      redirect('admin/admin_feedback');
    }
}
?>