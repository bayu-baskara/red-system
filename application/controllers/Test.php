<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('d_client');
	}
	public function index()
	{	
		$queryDataClient=$this->d_client->getDataClient();
		$data=array('queryClient'=>$queryDataClient);
		$this->load->view('test/data_client', $data);
	}
	public function det_client($id_client)
	{	
		$queryClientDetail=$this->d_client->getDataClientDetail($id_client);
		$data=array('queryView'=>$queryClientDetail);
		$this->load->view('test/detail_client', $data);
	}
	public function edit_client($id_client)
	{	
		$queryClientDetail=$this->d_client->getDataClientDetail($id_client);
		$data=array('queryDetail'=>$queryClientDetail);
		$this->load->view('test/ubah_client', $data);
	}
	
	public function tambah_client()
	{	
		$this->load->view('test/input_client');
	}
	public function tambahClient()
	{
		$kategori=$this->input->post('kat_client');
		$nama=$this->input->post('nama_client');
		$alamat=$this->input->post('alamat_client');
		$jn_usaha=$this->input->post('jenis_usaha');
		$telp=$this->input->post('telp_client');
		$data=$this->input->post('sm_data');
		$ket=$this->input->post('keterangan');
		$pic=$this->input->post('pic_client');
		$kinerja=$this->input->post('thp_kinerja');

		$ArrInsert = array (
			'kat_client' => $kategori,
			'nama_client' => $nama,
			'alamat_client' => $alamat,
			'jenis_usaha' => $jn_usaha,
			'telp_client' => $telp,
			'sm_data' => $data,
			'keterangan' => $ket,
			'pic_client' => $pic,
			'thp_kinerja' => $kinerja
		);
		
		$this->d_client->insertDataClient($ArrInsert);
		redirect(base_url(''));
	}

	public function editClient()
	{
		$kategori=$this->input->post('kat_client');
		$nama=$this->input->post('nama_client');
		$alamat=$this->input->post('alamat_client');
		$jn_usaha=$this->input->post('jenis_usaha');
		$telp=$this->input->post('telp_client');
		$data=$this->input->post('sm_data');
		$ket=$this->input->post('keterangan');
		$pic=$this->input->post('pic_client');
		$kinerja=$this->input->post('thp_kinerja');

		$ArrUpdate = array (
			'kat_client' => $kategori,
			'nama_client' => $nama,
			'alamat_client' => $alamat,
			'jenis_usaha' => $jn_usaha,
			'telp_client' => $telp,
			'sm_data' => $data,
			'keterangan' => $ket,
			'pic_client' => $pic,
			'thp_kinerja' => $kinerja
		);

		
		$this->d_client->updateDataClient($id_client, $ArrUpdate);
		redirect(base_url(''));
		
		//echo "<pre>";
		//print_r($ArrUpdate);
		//echo "</pre>";
	}

}
