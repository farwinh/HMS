<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\model_warden;


//home pages
class Security_Dashboard extends BaseController
{
    public function index()
    {
        echo view('security/dashboard/index.php');
    }

    public function Send_sms_student()
    {
        echo view('Security/dashboard/Send_sms_student.php'); 
    }

    
}


?>