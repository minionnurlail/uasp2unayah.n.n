<?php namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
	
	
	public function getData()
{
	$query = "SELECT mahasiswa_umb.jenis_kelamin, count(*) as jumlah, matkul_smt4.nama_matkul FROM mahasiswa_umb LEFT JOIN matkul_smt4 on matkul_smt4.id_matkul = mahasiswa_umb.id_matkul 
	GROUP BY mahasiswa_umb.jenis_kelamin,matkul_smt4.nama_matkul 
	ORDER BY mahasiswa_umb.jenis_kelamin Asc, matkul_smt4.nama_matkul desc"; 
	$query=$this->db->query($query);
	return $query->getResultArray();
}



}

?>