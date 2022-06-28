<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Student_MedicalReq_model  extends Model{
        protected $table="stu_medical";
        //protected $primaryKey="";

        protected $allowedFields=['student_id','room_no','medical_issue','blood_grp','emergency_num','date','time'];
    }
?>