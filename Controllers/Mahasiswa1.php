<?php
    namespace App\Controllers;
    use App\Models\ModelMahasiswa;

    class Mahasiswa1 extends BaseController
    {
         function __construct(){
            $this ->ModelMahasiswa = new ModelMahasiswa();
		}
		public function index()
		{
			$data['mahasiswa'] = $this->ModelMahasiswa->getData();
			
		return view('mahasiswa', $data);	   
        }
    }
?>