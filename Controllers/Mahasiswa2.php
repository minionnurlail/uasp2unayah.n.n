<?php
    namespace App\Controllers;
    use App\Models\ModelMahasiswa1;

    class Mahasiswa2 extends BaseController
    {
         function __construct(){
            $this ->ModelMahasiswa1 = new ModelMahasiswa1();
		}
		public function index()
		{
			$data['Mahasiswa2'] = $this->ModelMahasiswa1->getMahasiswa2();
			
		return view('mahasiswa1', $data);	   
        }
    }
?>