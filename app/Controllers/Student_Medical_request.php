<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\Student_MedicalReq_model;



class Student_Medical_request extends BaseController
{

public function index() {

    echo view("Student/Request/Medical_request.php");
}

public function medical(){
    
    			
    $special = new Student_MedicalReq_model();
        $data = [
            'student_id' => $this->request->getPost('student_id'),
            'room_no' => $this->request->getPost('room_no'),
            'med_issue' => $this->request->getPost('med_issue'),
            'blood_grp' => $this->request->getPost('blood_grp'),
            'contact' => $this->request->getPost('contact'),
            'date' => date('Y-m-d'),
            'time' =>date('H:i:s') 
            


        ];
        $special->save($data);
        echo view("Student/Request/Medical_request.php");

}
}