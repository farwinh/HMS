<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Complaints_Model extends Model{
        protected $table="complaints";
        //protected $primaryKey="comp_id";

        protected $allowedFields=['rec','date','time','subject','complaint'];
    }
?>