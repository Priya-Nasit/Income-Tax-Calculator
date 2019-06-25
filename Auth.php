<?php
class Auth extends CI_Controller
{

      public function redirect_login(){
          redirect("auth/login_form","refresh"); }	

     public function redirect_register(){
          redirect("auth/register_form","refresh"); }

     public function forms(){
          $this->load->view('forms');
     }

     public function redirect_forgot_password(){
           redirect("auth/forgot_password","refresh");
     }

     public function forgot_password(){
          $this->load->view('forgot_password');
     }

     public function redirect_aboutus(){
           redirect("auth/aboutus","refresh");
     }

     public function aboutus(){
          $this->load->view('aboutus');
     }

     public function redirect_contactus(){
           redirect("auth/contactus","refresh");
     }

     public function redirect_feedback(){
           redirect("auth/feedback","refresh");
     }

    public function redirect_personal_loan(){
           redirect("auth/personal_loan","refresh");
     }

     public function personal_loan(){
      $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->personal_loan();

       $this->load->view('personal_loan',$fetch);
          
     }

    public function redirect_dashboard()
  {
           redirect("auth/dashboard","refresh");
     }

      public function dashboard(){
          $this->load->view('dashboard');
     }

     public function redirect_tax_calc(){
           redirect("auth/tax_calc_form","refresh");
     }

     public function redirect_home_loan(){
           redirect("auth/home_loan","refresh");
     }

     public function home_loan(){
           $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->home_loan();

       $this->load->view('home_loan',$fetch);
     }

     public function redirect_car_loan(){
           redirect("auth/car_loan","refresh");
     }

     public function car_loan(){
          $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->car_loan();

       $this->load->view('car_loan',$fetch);
     }

   /*  public function redirect_education_loan(){
           redirect("auth/education_loan","refresh");
     }

     public function education_loan(){
          $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->education_loan();

       $this->load->view('education_loan',$fetch);
     }*/

     public function redirect_credit_card(){
           redirect("auth/credit_card","refresh");
     }

     public function redirect_debit_card(){
           redirect("auth/debit_card","refresh");
     }

     public function debit_card(){
      $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->debit_card();

       $this->load->view('debit_card',$fetch);
          
     }

      public function redirect_car_ins(){
           redirect("auth/car_ins","refresh");
     }

     public function car_ins(){
        $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->car_ins();

       $this->load->view('car_ins',$fetch);
     }

      public function redirect_health_ins(){
           redirect("auth/health_ins","refresh");
     }

     public function health_ins(){
        $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->health_ins();

       $this->load->view('health_ins',$fetch);
     }

      /*public function redirect_home_ins(){
           redirect("auth/home_ins","refresh");
     }

     public function home_ins(){
          $this->load->view('home_ins');
     }*/

      public function redirect_life_ins(){
           redirect("auth/life_ins","refresh");
     }

     public function life_ins(){
         $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->life_ins();

       $this->load->view('life_ins',$fetch);
     }

     /* public function redirect_travel_ins(){
           redirect("auth/travel_ins","refresh");
     }

     public function travel_ins(){
          $this->load->view('travel_ins');
     } */ 

     public function redirect_update(){
           redirect("auth/update","refresh");
    }

      public function redirect_logout(){
           redirect("auth/logout","refresh");
     }

     public function un_tax_calc_form(){
          $this->load->view('un_tax_calc_form');
     }

     public function redirect_un_tax_calc_form(){
           redirect("auth/un_tax_calc_form","refresh");
     }

     public function un_value_tax_form(){
          $this->load->view('un_value_tax_form');
     }

     public function redirect_un_value_tax_form(){
           redirect("auth/un_value_tax_form","refresh");
     }

     

     public function redirect_calculation(){
           redirect("auth/calculation","refresh"); 
        }

     public function logout()
     {
      $this->load->view('logout');
     /* if($this->session->has_userdata($_SESSION['username']))
      {
        $this->session->sess_destroy($_SESSION['username']);
      }
      redirect('auth/forms');*/
    }


   public function redirect_value_tax_form()
      {
           redirect("auth/value_tax_form","refresh");
     }

     public function value_tax_form()
     {
         $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->value_tax_form();

       $this->load->view('value_tax_form',$fetch);
     }

     public function credit_card()
     {
         $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->credit_card();

       $this->load->view('credit_card',$fetch);
     }

     public function tax_calc_form()
     {
       $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->tax_calc_form();
       //$this->load->view('tax_calc_form',$fetch);
     }

     public function login_form()
     {
       $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->login_form();
  }

     public function contactus()
     {
       $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->contactus();
     }
     public function register_form()
     {
       $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->register_form();
     }

     public function feedback()
     {
       $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->feedback();
     }

     public function calculation()
     {
      $id=$this->input->get('id');
      $this->load->model('Auth_model');
      $data['item']=$this->Auth_model->getuserid($id);
      $this->load->view('calculation',$data);
    }


    
   
    /*public function calculation()
    {
      $this->load->model('Auth_model');
      $id=$this->input->get('id');
      if($this->Auth_model->calculation($id))
      {
        $data['item']=$this->Auth_model->getdata_calculation();
      }

      redirect('auth/calculation','refresh');
    }*/

   /* public function update()
    {
      $validate = array(
        array(
          'field' => 'gross_AI',
          'label' => 'gross_AI',
          'rules' => 'required'
        ),
        array(
          'field' => 'other_sources_AI',
          'label' => 'other_sources_AI',
          'rules' => 'required'
        ),
        array(
          'field' => 'income_AI',
          'label' => 'income_AI',
          'rules' => 'required'
        ),
        array(
          'field' => 'rental_income',
          'label' => 'rental_income',
          'rules' => 'required'
        ),
        array(
          'field' => 'home_loan_AI_self',
          'label' => 'home_loan_AI_self',
          'rules' => 'required'
        ),
        array(
          'field' => 'basic_deduction',
          'label' => 'basic_deduction',
          'rules' => 'required'
        ),
        array(
          'field' => 'SA_deposit_interest',
          'label' => 'SA_deposit_interest',
          'rules' => 'required'
        ),
        array(
          'field' => 'charity_donation',
          'label' => 'charity_donation',
          'rules' => 'required'
        ),
        array(
          'field' => 'interest_edu_loan',
          'label' => 'interest_edu_loan',
          'rules' => 'required'
        ),
        array(
          'field' => 'annum_basic_salary',
          'label' => 'annum_basic_salary',
          'rules' => 'required'
        ),
        array(
          'field' => 'annum_DA',
          'label' => 'annum_DA',
          'rules' => 'required'
        ),
        array(
          'field' => 'annum_HRA',
          'label' => 'annum_HRA',
          'rules' => 'required'
        ),
        array(
          'field' => 'annum_total_rent',
          'label' => 'annum_total_rent',
          'rules' => 'required'
        ),
      );
     /* $this->load->model('Auth_model');
      $id=$this->input->get('id');
     /* if($this->Auth_model->update($id))
      {
      //  $data['item']=$this->Auth_model->getdata_update();
      }*/
      //$this->load->view('update');
    //}
     
      /*$this->form_validation->set_rules($validate);
     if($this->form_validation->run()==FALSE)
      {
        $this->load->model('Auth_model');
        $data['item'] = $this->Auth_model->getdata_update();
        $this->load->view('update');
      }
    }*/

     /* else
      {
        $this->load->model('invoice/customer_model');
        if($this->customer_model->cust_update($id))
          {
              $this->session->set_userdata('success','true');
            }
            else
            {
              $this->session->set_userdata('error','true');
            }
        redirect('invoice/customer/cust_list');
      }*/
  

     /*  public function pdf_data(){
          $this->load->view('pdf_data');
     }

     public function redirect_pdf_data(){
           redirect("auth/pdf_data","refresh");
      }
       
       public function pdf_read(){
          $this->load->view('pdf_read');
     }

     public function redirect_pdf_read(){
           redirect("auth/pdf_read","refresh"); 
           }*/

      /*public function calculation()
      {
      $this->load->model('Auth_model');
       $fetch['item'] =$this->Auth_model->calculation();
       $this->load->view('calculation',$fetch);
     }*/

     /*public function delete(){
          $this->load->view('delete');
     }*/
     /* public function delete()
    {
      $de=$this->uri->segment(2);
      $this->Auth_model->delete($de);
      redirect('auth/delete','refresh');
    }*/
   
   public function update_data($id){
          $this->form_validation->set_rules('salary','Salary','required');
          $this->form_validation->set_rules('extra_income','Extra Income','required');
          $this->form_validation->set_rules('professional_tax','Professional Tax','required');
          $this->form_validation->set_rules('house_loan_interest','House Loan Interest','required');
          $this->form_validation->set_rules('education_loan_interest','Education Loan Interest','required');
          $this->form_validation->set_rules('mediclaim','Mediclaim','required');
          $this->form_validation->set_rules('provident_fund','Provident Fund','required');
          $this->form_validation->set_rules('insurance_premium','Insurance Premium','required');
          $this->form_validation->set_rules('child_tution_fees','Child Tution Fees','required');
          $this->form_validation->set_rules('housing_loan_principle_amount','Housing Loan Principal Amount','required');
          $this->form_validation->set_rules('insurance_pre_paid','Insurance Pre Paid','required');
          $this->form_validation->set_rules('public_provident_fund','Public Provident Fund','required');
           $this->form_validation->set_rules('national_saving_certificate','National Saving Certificate','required');
          $this->form_validation->set_rules('united_link_insurance_plan','United Link Insurance Plan','required');
          $this->form_validation->set_rules('mutual_funds','Mutual Funds','required');
          $this->form_validation->set_rules('national_pension_scheme','National Pension Scheme','required');
          

          if($this->form_validation->run()==TRUE){
            $this->load->model('Auth_model');
              if($this->Auth_model->update_data($id)){
                  $this->session->set_userdata('success','true');
            }
            else{
              $this->session->set_userdata('error','true');
            }
        redirect('auth/value_tax_form','refresh');
     }
}

public function update(){
      $id=$this->input->get('id');
      $this->load->model('Auth_model');
      $data['item']=$this->Auth_model->getuserid($id);
      $this->load->view('update',$data);
    }

}
?>