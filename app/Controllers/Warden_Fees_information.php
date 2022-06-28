<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\Warden_Fees_information_model;
use App\Models\Warden_Fine_model;
use App\Models\student_model;



class Warden_Fees_information extends BaseController
{

public function war_hos_fees(){
    
    echo view("Warden/Fees/hostelfee_Detail.php");
}


public function notPaid(){
    $output='';
    $fYr='600';
    $tYr='2400';
    $yr=$this->request->getVar("year");
    $obj_student=new student_model();
    $re=$obj_student->findAll();
    $obj_paid=new Warden_Fees_information_model();
    $result= $obj_paid->where('academic_year',$yr)->findAll();
    foreach($re as $r){
        foreach($result as $row){
            $fee='';
            switch($yr){
                case '1':
                    $fee=$fYr;
                break;
                case '2':
                    $fee=$tYr;
                break;
                case '3':
                    $fee=$tYr;
                break;
                case '4':
                    $fee=$fYr;
                break;
            }
            if($r['student_id']!=$row['student_id']){
                $output .='
                <tr>
                    <td>'.$r['student_id'].'</td>
                    <td>'.
                    $fee
                    .'</td>
                    <td><button class="btn btn-success">NOTIFY</button>
                
                </tr>
                '
                
                ;
            }
        }
        
    }
    return $output;
}
public function getData(){
    $output='';
    $type=$this->request->getVar("type");
    switch($type){
        case 'fees_paid':
          
            $output .='
            <thead>
            <tr>
                <th>Registration Number</th>
                <th>Paid amount</th>
                <th>Paid Date</th>
                <th>Branch</th>
                <th>image</th>
                
            
            </tr>  
        </thead>
            ';
                        $obj_paid=new Warden_Fees_information_model();
                        $result= $obj_paid->findAll();
                        foreach($result as $row){
                                 $output.='
                            <tbody>     
                                <tr>
                                    <td>'.$row['student_id'].'</td>
                                    <td>'.$row['paid_amount'].'</td>
                                    <td>'.$row['paid_date'].'</td>
                                    <td>'.$row['branch'].'</td>
                                    <td>'.$row['receipt'].'</td>
                                    <td><button class="btn btn-danger" id='.$row['student_id'].' onclick="sendSms(this.id)">SEND</button></td>
                                </tr>
                            </tbody>
                        
                            
                            ';
                            
                        }
                        return $output;
            break;
     

    }
   

}

public function fees_info(){
   
    //student_id,gender,room_no,floor_no,reason,date,time
    $special = new Warden_Fees_information_model();
        $data = [
            'student_id' => $this->request->getPost('student_id'),
            'paid_amount' => $this->request->getPost('paid_amount'),
            'paid_date' => $this->request->getPost('paid_date'),
            
            'branch' => $this->request->getPost('branch'),
            'image' => $this->request->getPost('image')
            
        ];
        $special->save($data);
        
        
    echo view("Warden/Fees/hostelfee_Detail.php");

}

public function fine_info(){
   
    
    $special1 = new Warden_Fees_information_model();
        $data1 = [
            'student_id' => $this->request->getPost('student_id'),
            'fur_type' => $this->request->getPost('fur_type'),
            'fine_amount' => $this->request->getPost('fine_amount')
            
            
            
            
 
            
        ];
        $special1->save($data1);
        
        
    echo view("Warden/Fees/hostelfee_Detail.php");
 
 }





}

