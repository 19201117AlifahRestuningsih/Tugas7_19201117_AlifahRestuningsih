<?php

class Sepatu extends CI_Controller {
    
    public function index() {
        $this->load->helper('url');
        $this->load->view('view-form-sepatu');
    }

    public function cetak() {
        $this->load->helper('url');
		$data = [
            'nama' => $this->input->post('nama'),
            'nohp' => $this->input->post('nohp'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
			'harga' => $this->input->post('harga')
			];
			
         if ($this->input->post('merk') == "Nike"){
			$data['harga'] = 375000;
		}elseif ($this->input->post('merk') == "Adidas"){
			$data['harga'] = 300000;
		}elseif ($this->input->post('merk') == "Kickers"){
			$data['harga'] = 250000;
  		}elseif ($this->input->post('merk') == "Eigers"){
			$data['harga'] = 275000;
        }elseif ($this->input->post('merk') == "Bucherri"){
			$data['harga'] = 400000;			
		}
		
        $this->load->view('view-data-sepatu', $data);
    }
}

?>