<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class entry_leave_Model extends Model{
        protected $table="entry_leave";
        protected $primaryKey="student_ID";

      
        protected $allowedFields=['student_ID','enter_date','enter_time	','exit_date','exit_time'];
    }
?>