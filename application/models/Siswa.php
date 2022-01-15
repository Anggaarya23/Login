<?php

class Siswa extends CI_Model
{
	public function semua()
	{
		return $this->db->get('siswa')->result();
	}
	public function simpan_ke_database($data_input)
	{
		$this->db->insert('siswa', $data_input);
	}

	public function hapus_data($No)
	{
		$this->db->delete('siswa', ['No' => $No]);
	}

	public function getId($No)
    {
        return $this->db->get_where('siswa', ["No" => $No])->row();
    }


	public function saveUpdate($data, $No)
	{
	return $this->db->update('siswa', $data, array('No' => $No));
	}

}