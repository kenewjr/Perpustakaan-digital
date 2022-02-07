<?php

namespace App\Controllers;

use App\Models\Modelbuku;
use App\Models\Modelmahasiswa;
use App\Models\Modeltransaksi;

class Mahasiswa extends BaseController
{
    protected $mhs;
    protected $buku;
    protected $trf;
   
    public function __construct()
    
    {
        $this->buku = new Modelbuku();
        $this->mhs = new Modelmahasiswa();
        $this->trf = new Modeltransaksi();
        
    }
    public function index()
    {
        $session =session(); 
        if($session->get('id'))
        {             
        $ses = $session->get('id');
        $query = $this->mhs->getWhere(['id' => $ses]);   
        $mahasiswa = $query->getRow();
        $params = ['id' => $mahasiswa->pdf];  
            $data = [
                'title'=> 'anggota',      
                'id'=> $this->mhs->getAnggota($ses),
                'pdf'=>$this->buku->namabuku($params)    
                
            ];
        }else{
            echo "<h1>session tidak ditemukan</h1>";
        }
        //    dd($data);
        return view('mahasiswa/viewtampildata',$data);
    }

    public function beranda()
    {
        $session =session(); 
        if($session->get('id'))
        {             
        $ses = $session->get('id');
        $query = $this->mhs->getWhere(['id' => $ses]);        
            $data = [
                'title'=> 'anggota',      
                'id'=> $this->mhs->getAnggota($ses)   
                
            ];
        }else{
            echo "<h1>session tidak ditemukan</h1>";
        }
        //    dd($data);
        return view('mahasiswa/beranda',$data);
    }
    

    public function login()
    {
        return view('mahasiswa/login');
    }
    
    public function auth()
    {
        $post = $this->request->getPost();
        $query = $this->mhs->getWhere(['id_anggota' => $post['id_anggota']]);   
        $mahasiswa = $query->getRow();
        // dd($post);
        if($mahasiswa){
        if(($post['password']==$mahasiswa->password)){
         $params = ['id' => $mahasiswa->id];   
        session()->set($params);
        // dd(session()->id);
        return redirect()->to('/mahasiswa');
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
    
    public function save()
    {  
        $this->mhs->insert([
            'id_anggota' => $this->request->getVar('id_anggota'),
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),   
            'email' => $this->request->getVar('email')   
        ]);
         return redirect()->to('/');
    }

    public function register()
    {
        return view('mahasiswa/register');
    }

    public function detail()
    {
        $session =session(); 
        $ses = $session->get('id');
        $query = $this->mhs->getWhere(['id' => $ses]);   
        $mahasiswa = $query->getRow();
        $params = ['id' => $mahasiswa->pdf];       
        $data = [
            'title'=> 'detail buku',         
            'id'=> $this->mhs->getAnggota($ses),   
            'pdf'=>$this->buku->namabuku($params)    
        ]; 
        return view('mahasiswa/detail', $data);
     
    }



}
