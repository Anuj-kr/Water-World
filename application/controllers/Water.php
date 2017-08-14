<?php


class Water extends CI_Controller{
    
    public function index()
    {
        
        
        $this->load->model('Brand');
        $Binfo = $this->Brand->Brand_view();
        $this->load->view('main', ['details'=>$Binfo]);
    }    

    public function Login()
    {
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('pwd', 'pwd', 'required');
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if( $this->form_validation->run() )
        {
            $Email = $this->input->post('Email');
            $pwd = $this->input->post('pwd');
            $this->load->model('Users');
            if($this->Users->Login($Email, $pwd))
            {
                
                $this->session->set_userdata('Email', $Email);
                if(!empty($_SERVER['HTTP_REFERER'])){
                    redirect($_SERVER['HTTP_REFERER']);//for current page after logging
                }
                else
                {
                    redirect("Water");
                }
            }
        }
        else{
            echo "not validate";
        }
    }
    public function signup()
    {
        if(isset($_POST['signup']))
        {
            $this->form_validation->set_rules('first', 'first', 'required');
            $this->form_validation->set_rules('last', 'last', 'required');
            $this->form_validation->set_rules('Email', 'Email', 'required|valid_email|is_unique[user.Email]');
            $this->form_validation->set_rules('pwd', 'pwd', 'required|min_length[8]');
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            if($this->form_validation->run() == TRUE)
            {
                $data = array(
                    'first'=>$_POST['first'],
                    'last'=>$_POST['last'],
                    'Email'=>$_POST['Email'],
                    'pwd'=>$_POST['pwd']                
                );
                $this->load->model('Users');
                $this->Users->Sign($data);
                
            }
            else{
                
            }
        }
        redirect('Water');
    }
    public function logout()
    {
        $this->session->unset_userdata('Email');
         return redirect('Water');
    }
    
}