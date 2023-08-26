<?php
class RegModel extends CI_Model{
    public function updareData($data,$id){
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->update($data, 'studentreg');
    }
    public function editData($id){
    
        $this->load->model('RegModel');
        $result['data']=$this->RegModel->editData('$id');
        $this->load->view('display-records',$result);
    }
    public function insertData($data){
        $this->load->database();
        //insert into studentreg(student_name,student_mail,student_mobile) values($variable)l
        return $this->db->insert('studentreg',$data);
        
    }
    public function receiveSegment($data){
        foreach($data as $p){
            echo $p.'<br>';
        }
    }
    public function getRecord() {
        $this->load->database();
        $result=$this->db->get('studentreg')->result();
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
}