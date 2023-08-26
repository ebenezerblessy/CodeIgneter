<?php
class Demo extends CI_Controller
{
    public function myproject() 
    {
        $mes['msg']='Your Registration Form';
        $this->load->view('sign',$mes);
    }
}
public function edit($id){
    echo $id;
}
public function update(){
    extract($_POST)
    $id=$stid;
    $data=[
           'student_name'=>$stname,
          'student_email'=>$stemail,
          'student_name'=>$stmobile
        ];
}

public function saveData() {
     extract ($_POST);
     $data =[
            'student_name'=>$stname,
            'student_email'=>$stmail,
            'student_mobile'=>$stmobile
];
$this->load->model('RegModel');
$result=$this->RegModel->insertData($data);
if($result){
    $res['status']= 'successfully inserted';
    $res['test']=200;
    $this->load->view('sign',$res);
    //redirect(base_url('sign'),$res);
} else{
    $res['status']= 'Error while inserting data';
    $this->load->view('sign',$res);
}
public function fetchdata(){
    $this->load->model('RegModel');
    $result['table']=$this->RegModel->getRecord();
    $this->load->view('display-records',$result);
}
}



    