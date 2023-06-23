<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    
	
	 public function getMahasiswa()
    {
		$query = "SELECT mahasiswa.jk, count(*) as jumlah, matkul.mata_kuliah FROM mahasiswa LEFT JOIN matkul on matkul.id_matkul = mahasiswa.id_matkul 
GROUP BY mahasiswa.jk, matkul.mata_kuliah
ORDER BY mahasiswa.jk Asc, matkul.mata_kuliah desc";
		$query=$this->db->query($query);
        return $query->getResultArray();
    }


   
}

?>