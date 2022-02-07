<?php

namespace App\Controllers;

use App\Models\Modelbuku;

class Buku extends BaseController
{
    protected $buku; 
    public function __construct()
    {
        $this->buku = new Modelbuku();
        
    }
    public function index()
    {
        $data = [
            'tampildata' => $this->buku->findAll()
        ];
        return view('buku/tampilan',$data);
    }

    public function create()
    {
        $data = [
            'tampildata' => $this->buku->findAll()
        ];
        // dd($data);
        return view('buku/create',$data);
    }

    public function detail($id)
    {
        
        $data = [
            'title'=> 'detail buku',          
            'id'=>$this->buku->getBuku($id)  
        ];
        //  dd($data);
        return view('buku/detail', $data);
     
    }
    
    public function edit($id)
    {
        $data = [
            'id' =>$this->buku->getBuku($id)
        ]; 
        return view('buku/edit',$data);
    }

    public function delete($id)
    {
        $this->buku->delete($id);

        session()->setFlashdata('pesan', 'data berhasil dihapus.');
        return redirect()->to('/buku');
    }

    public function update($id)
    {
        $file=$this->request->getFile('pdf');
        //ambil nama
         $namafile=$file->getRandomName();  
          //pindahin file ke folder
         $file->move('pdf',$namafile);
         // $this->request->getVar();
         
        $this->mhs->save([
            'id' => $id,
            'judul_buku' => $this->request->getVar('judul_buku'),
            'penerbit' => $this->request->getVar('penerbit'),
            'pdf' => $namafile     
            
        ]);
        // $this->request->getVar();
        session()->setFlashdata('pesan', 'data berhasil diubah.');
         return redirect()->to('/buku');
    }
    
    public function save()
    {  
        $file=$this->request->getFile('pdf');
       //ambil nama
        $namafile=$file->getRandomName();  
         //pindahin file ke folder
        $file->move('pdf',$namafile);
        // $this->request->getVar();
        
        $this->buku->insert([
            'judul_buku' => $this->request->getVar('judul_buku'),
            'penerbit' => $this->request->getVar('penerbit'),
            'pdf' => $namafile     
        ]);
       
        session()->setFlashdata('pesan', 'data berhasil ditambahkan.');
         return redirect()->to('/buku');
    }
}
