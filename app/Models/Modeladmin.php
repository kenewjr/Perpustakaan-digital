<?php
namespace App\Models;

use CodeIgniter\Model;

class Modeladmin extends Model
{
        protected $table      = 'tb_pengguna';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nama_pengguna','username','password'];

    public function getpengguna($id=false)
    {
            if($id==false){
                    return $this->findAll();
            }
            return $this->where(['id'=>$id])->first();
        }
        
}
?>