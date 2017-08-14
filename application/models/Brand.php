<?php

class Brand extends CI_model
{
    public function Brand_view()
    {
        $bname = $this->db->select('*')
                        ->get('brand');

        return $bname->result();
    }
    public function Pincode($pin)
    {
        $this->db->where('pin',$pin);
        $query = $this->db->get('pincode');
        print_r($query->num_rows());
        if($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function Size_Brand($Bname)
    {
        $this->db->select('Bsize.size');
        $this->db->from('Bsize');
        
        $this->db->join('brand', 'Bsize.Bname = brand.Bname', 'left outer');
        $this->db->where(['Bsize.Bname'=>$Bname]);
        $sql = $this->db->get();
        return $sql->result();
    }
    
    public function price($size)
    {
        echo"aaaa";
        $this->db->select('Bsize.price');
        $this->db->from('Bsize');
        
        $this->db->join('brand', 'Bsize.Bname = brand.Bname', 'left outer');
        $this->db->where(['Bsize.size'=>$size]);
        $sql = $this->db->get();
        print_r($sql->result());exit;
    }
    
}