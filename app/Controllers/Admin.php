<?php

namespace App\Controllers;

use App\Models\Modeladmin;
use App\Models\Modelbuku;
use App\Models\Modelmahasiswa;
use App\Models\Modeltransaksi;

class Admin extends BaseController
{
    protected $admin;
    protected $mhs;
    protected $buku;
    protected $trf;
    public function __construct()
    
    {
        $this->buku = new Modelbuku();
        $this->admin = new Modeladmin();
        $this->mhs = new Modelmahasiswa();
        $this->trf = new Modeltransaksi();
    }
    public function index()
    {  
         $data = [
             'tampildata' => $this->admin->findAll()
         ]; 
        return view('admin/viewtampildata',$data);
    }
    public function login()
    {
        return view('admin/login');
    }
    public function auth()
    {
        $post = $this->request->getPost();
        $query = $this->admin->getWhere(['username' => $post['username']]);   
        $admin = $query->getRow();
        // dd($post);
        if($admin){
        if(($post['password']==$admin->password)){
        $params = ['id' => $admin->id];   
        session()->set($params);
        return redirect()->to('/admin');
        }else{
            // dd($post['id_anggota'],$post['password'],$mahasiswa);
            session()->setFlashdata('pesan', 'Password salah');
           return redirect()->to('/');
        }
        }else{
           session()->setFlashdata('pesan', 'Anggota Tidak DItemukan');
           return redirect()->to('/');
        }
    }

    public function detail_mahasiswa($id)
    {
        
        $data = [
            'title'=> 'detail anggota',          
            'id'=>$this->mhs->getAnggota($id)  
        ];
        //  dd($data);
        return view('admin/detail_mahasiswa', $data);
     
    }

    public function detail_admin($id)
    {
        
        $data = [
            'title'=> 'detail admin',          
            'id'=>$this->admin->getpengguna($id)  
        ];
        //  dd($data);
        return view('admin/detail_admin', $data);
     
    }

    public function detail_buku($id)
    {
        
        $data = [
            'title'=> 'detail buku',          
            'id'=>$this->admin->getBuku($id)  
        ];
        //  dd($data);
        return view('admin/detail_buku', $data);
     
    }

    public function create()
    {
        $data = [
            'tampildata' => $this->admin->findAll()
        ]; 
        return view('admin/create');
    }

    public function mahasiswa()
    {
        $data = [
            'tampildata' => $this->mhs->findAll()
        ]; 
        return view('admin/mahasiswa', $data);
    }

    public function tambah_mahasiswa()
    {  
        $this->mhs->insert([
            'id_anggota' => $this->request->getVar('id_anggota'),
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),   
            'email' => $this->request->getVar('email')   
        ]);
       
        session()->setFlashdata('pesan', 'data berhasil ditambahkan.');
         return redirect()->to('/admin/mahasiswa');
    }

    public function tambah_admin()
    {  
        
            $this->admin->insert([
            'nama_pengguna' => $this->request->getVar('nama_pengguna'),
            'username' => $this->request->getVar('username'),         
            'password' => $this->request->getVar('password')   
            ]);
         // $this->request->getVar();
         session()->setFlashdata('pesan', 'data berhasil diubah.');
         return redirect()->to('/admin');
        
    }

    public function add_admin()
    {  
        return view('admin/add_admin');
    }

    public function delete_mahasiswa($id)
    {
        $this->mhs->delete($id);
        return redirect()->to('/admin/mahasiswa');
    }

    public function delete_admin($id)
    {
        $this->admin->delete($id);
        return redirect()->to('/admin');
    }

    public function edit_mahasiswa($id)
    {
        $data = [
            'tampildata' => $this->buku->findAll(),
            'id' =>$this->mhs->getAnggota($id)
        ]; 
        return view('admin/edit_mahasiswa',$data);
    }

    public function update_mahasiswa($id)
    {
        $status= "Pinjam";
            $this->mhs->save([
            'id' => $id,
            'id_anggota' => $this->request->getVar('id_anggota'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),   
            'pdf' => $this->request->getVar('pdf'),   
            'status' => $status,   
            'tgl_pinjam' => $this->request->getVar('tgl_pinjam'),   
            'tgl_kembali' => $this->request->getVar('tgl_kembali')   
            ]);
         // $this->request->getVar();
         session()->setFlashdata('pesan', 'data berhasil diubah.');
         return redirect()->to('/admin/mahasiswa');
    }

    public function edit_admin($id)
    {
        $data = [
            'id' =>$this->admin->getpengguna($id)
        ]; 
        return view('admin/edit_admin',$data);
    }

    public function update_admin($id)
    {
            $this->admin->save([
            'id' => $id,
            'nama_pengguna' => $this->request->getVar('nama_pengguna'),
            'username' => $this->request->getVar('username'),         
            'password' => $this->request->getVar('password')   
            ]);
         // $this->request->getVar();
         session()->setFlashdata('pesan', 'data berhasil diubah.');
         return redirect()->to('/admin');
    }

    public function kembali($id)
    {
        $status="kembali";
        $kosong= " ";
        $this->mhs->save([
            'id' => $id,
            'status' => $status,  
            'tgl_pinjam' => $kosong,   
            'tgl_kembali' => $kosong   
            ]);
         // $this->request->getVar();
         session()->setFlashdata('pesan', 'data berhasil diubah.');
         return redirect()->to('/admin/mahasiswa');
    }

   
}
