<?php

class Backend extends CI_controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa');
	}

	public function index()
	{
	
		$data['isi'] = $this->Siswa->semua();

		return $this->load->view('admin/v_index', $data);
	}

	public function tambah()
	{
		return $this->load->view('admin/v_tambah');
	}

	public function proses_tambah()
	{

		$data_input = array(
			'Nis' => $this->input->post('txtnis'),
			'Nama' => $this->input->post('txtnama'),
			'Alamat' => $this->input->post('txtalamat'),
		);

		$this->Siswa->simpan_ke_database($data_input);
		redirect(site_url('Backend/index'));
	}

	public function hapus ($No)
	{
		$this->Siswa->hapus_data($No);
		redirect(site_url('Backend/index'));
	}

	public function edit($No)
	{
        $data['edit'] = $this->Siswa->getId($No);
		$data['isi'] = $this->Siswa->semua();
		$this->load->view('admin/v_edit', $data);
	}

	public function update()
	{
	$No = $this->input->post('No');
		$data = array(
			'No' => $No,
			'Nis' => $this->input->post('Nis'),
			'Nama' => $this->input->post('Nama'),
			'Alamat' => $this->input->post('Alamat')
		
		);
		$this->Siswa->saveUpdate($data, $No);
		redirect('Backend/index' ,'refresh' );
	}

}