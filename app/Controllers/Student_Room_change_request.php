<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\Student_RoomChange_model;



class Student_Room_change_request extends BaseController
{

public function index(){
    
    echo view("Student/Request/Room_change_request.php");
}

public function change(){
   
    //student_id,gender,room_no,floor_no,reason,date,time
    $special = new Student_RoomChange_model();
        $data = [
            'student_id' => $this->request->getPost('student_id'),
            'gender' => $this->request->getPost('gender'),
            'room_no' => $this->request->getPost('room_no'),
            
            'floor_no' => $this->request->getPost('floor_no'),
            
            'reason' => $this->request->getPost('reason'),
            'date' => date('Y-m-d'),
            'time' =>date('H:i:s') 
            //need to put current time and date which is in the PC's current date and time


        ];
        $special->save($data);
        
        echo view("Student/Request/Room_change_request.php");

}
}