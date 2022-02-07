<?php
namespace App\Models;

use CodeIgniter\Model;

class Modeltransaksi extends Model
{
        protected $table      = 'tb_transaksi';
        protected $primaryKey = 'id';
        protected $useTimestamps = true;
        protected $allowedFields = ['judul_buku','id_anggota','tanggal_pinjam','tanggal_kembali','status'];

        public function search($keyword){
                $builder =$this->table("tb_transaksi");
                $builder->like('id_anggota', $keyword);
                $builder->orLike('judul_buku', $keyword);
                $builder->orLike('status', $keyword);
                return $builder;
        }
}
?>