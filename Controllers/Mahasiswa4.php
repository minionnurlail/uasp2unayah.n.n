<?php
    namespace App\Controllers;
    use App\Models\ModelMahasiswa2;

    class Mahasiswa4 extends BaseController
    {
         function __construct(){
            $this ->ModelMahasiswa2 = new ModelMahasiswa2();
		}
		public function index()
		{
			$data['Mahasiswa4'] = $this->ModelMahasiswa2->getMahasiswa4();
			
		return view('mahasiswa2', $data);	   
        }
    }
?>