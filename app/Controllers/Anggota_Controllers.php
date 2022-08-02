<?php

namespace App\Controllers;

use App\Models\Anggota_Model;

class Anggota_controllers extends BaseController
{
    // view index file
	public function index()
    {	
		return view('index');
    }
	
	// create new student records
	public function CreateStudent()
    {
        $StudentModel = new Anggota_Model();

        $data = [
            'firstname' => $this->request->getPost("student_firstname"),
			'lastname' => $this->request->getPost("student_lastname"),
        ];

		$StudentModel->save($data);

		$output = array('status' => 'Student Inserted Successfully', 'data' => $data);
				
		return $this->response->setJSON($output);
	
    }

	//fetch all students records 
	public function ReadStudent()
	{
	}
	
	//edit or get specific student record id
	public function EditStudent()
	{	
	}
	// update existing student records
    public function UpdateStudent()
    {
    }

	// delete existing student records
    public function DeleteStudent()
    {
    }
}