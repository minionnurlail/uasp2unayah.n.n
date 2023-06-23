<?php namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa1 extends Model
{
	
	
	public function getMahasiswa2()
{
	$query = "SELECT sks, nama_matkul FROM matkul_smt4 ORDER BY sks ASC";   
	$query=$this->db->query($query);
	return $query->getResultArray();
}



}

?>