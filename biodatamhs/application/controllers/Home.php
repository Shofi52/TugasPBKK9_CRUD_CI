<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
        $data['biodata_mhs'] = $this->db->get('biodata_mhs')->result();
        $this->load->view('master/header');
        $this->load->view('home', $data);
        $this->load->view('master/footer');
    }
    
    public function create(){
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            $data = $this->input->post();

            $this->db->insert('biodata_mhs', $data);

            redirect('home');
        }
        else{
            $this->load->view('master/header');
            $this->load->view('create');
            $this->load->view('master/footer');
        }
    }

    public function update($id){
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            $data = $$this->input->post();

            $this->db->where('id', $id);
            $this->db->update('biodata_mhs', $data);

            redirect('home')
        }
        else{

        }
        $data['item'] = $this->db->get_where('biodata_mhs', ['id'=>$id])->row();

        $this->load->view('master/header');
        $this->load->view('update', $data);
        $this->load->view('master/footer');
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('biodata_mhs');

        redirect('home');
    }
}
