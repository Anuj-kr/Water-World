<?php
class Detail extends CI_Controller{
    public function in($Bname)
    {
        $name = $this->input->post();
        $this->load->model('Brand');
        $r = $this->Brand->Size_Brand($Bname);
        $this->load->view('detail', ['name'=> $name,'size'=>$r]);
    }
    public function pincode()
    {
        $pin = $this->input->post('pincode');
        $this->load->model('Brand');
        $check = $this->Brand->Pincode($pin);
        if($check)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    public function price()
    {
        echo"bbbb";
        $price = $this->input->post('size');
        $this->load->model('Brand');
        $p = $this->Brand->price($price);
        print_r($p);
        echo"price";
    }
}