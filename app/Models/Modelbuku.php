<?php
namespace App\Models;

use CodeIgniter\Model;

class Modelbuku extends Model
{
        protected $table      = 'tb_buku';
        protected $primaryKey = 'id';
        protected $allowedFields = ['judul_buku','penerbit','pdf'];
        
        public function getBuku($id=false)
        {
                if($id==false){
                        return $this->findAll();
                }
                return $this->where(['id'=>$id])->first();
            }

            public function namabuku($pdf = false)
        {
                if ($pdf == false) {
                        return $this->findAll();
                }
                return $this->where(['pdf' => $pdf])->first();
        }
}
?>