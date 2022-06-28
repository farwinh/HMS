<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Se_student_model extends Model{
        protected $table="student";
        //protected $primaryKey="";

        protected $allowedFields=['student_id','deparment','batch','nic_number','first_name','last_name','gender','address','DOB','contact_no'];
    }
?>