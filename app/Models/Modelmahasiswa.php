<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
        protected $table      = 'tb_anggota';
        protected $primaryKey = 'id';
        protected $allowedFields = ['id', 'id_anggota', 'nama', 'password', 'email', 'pdf','status','tgl_pinjam','tgl_kembali'];

        public function getAnggota($id = false)
        {
                if ($id == false) {
                        return $this->findAll();
                }
                return $this->where(['id' => $id])->first();
        }

        

}
