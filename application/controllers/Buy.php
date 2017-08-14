<?php
class Buy extends CI_Controller{
    public function index()
    {
        $this->load->view('buynow');
    }
    public function delivery()
    {
        $hidd = $this->session->userdata('Email'); 
        
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Address_1', 'Address_1', 'required');
        $this->form_validation->set_rules('Address_2', 'Address_2', 'required');
        $this->form_validation->set_rules('Dist', 'Dist', 'required');
        $this->form_validation->set_rules('State', 'State', 'required');
        $this->form_validation->set_rules('Pin', 'Pin', 'required|max_length[6]');
        $this->form_validation->set_rules('Mobile_Number', 'Mobile_Number|max_length[10]', 'required');
        if($this->form_validation->run() == TRUE)
        {
              $data = $this->input->post();
              unset($data['submit']);
              $data['Email']= $hidd;
//            $data = array(
//                'Name'=>$_POST['Name'],
//                'Address_1'=>$_POST['Address_1'],
//                'Address_2'=>$_POST['Address_2'],
//                'Dist'=>$_POST['Dist'],
//                'state'=>$_POST['State'],
//                'pin'=>$_POST['Pin'],
//                'phone'=>$_POST['Mobile_Number']           
//            );
            $this->load->model('Users');
            $this->Users->delivary_de($data);
            redirect('Water');
        }
        
    }
    
    public function abc()
    {
        echo"kasjdhfkd";
    }
}