<?php namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa2 extends Model
{
	
	
	public function getMahasiswa4()
{
	$query = "SELECT mahasiswa_umb.jenis_kelamin, count(*) as jumlah,matkul_smt4.nama_matkul,mahasiswa_UMB.status FROM mahasiswa_umb LEFT JOIN matkul_smt4 ON mahasiswa_umb.id_matkul = matkul_smt4.id_matkul
	GROUP BY mahasiswa_umb.jenis_kelamin,matkul_smt4.nama_matkul,mahasiswa_umb.status 
	ORDER BY mahasiswa_umb.jenis_kelamin ASC,mahasiswa_umb.status ASC,matkul_smt4.nama_matkul DESC; ";   
	$query=$this->db->query($query);
	return $query->getResultArray();
}



}

?>