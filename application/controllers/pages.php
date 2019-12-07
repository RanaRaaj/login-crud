<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class Pages extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();

		$this->load->model('main');

	}


	public function dashboard(){

		if($this->session->userdata('name') != ''){

			$data['fetch'] = $this->main->get();

			$data['index'] = $this->load->view('pages/index',$data,true);

			$this->load->view('inner',$data);
		}else{

			redirect(base_url().'login');

		}

	}

	public function sign(){

		$data['fetch'] = $this->main->get();

		$data['index'] = $this->load->view('pages/signup',$data,true);

		$this->load->view('login',$data);

	}

	public function signup(){

		$rec = array(

			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')

		);

		$this->main->add($rec);

		$this->session->set_flashdata('success','This User Register Successfully');

		redirect('/');

	}

	public function login(){

		$data['fetch'] = $this->main->get();

		$data['index'] = $this->load->view('pages/login',$data,true);

		$this->load->view('login',$data);

	}

	public function load(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'name', 'required');

		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run()){

			$name = $this->input->post('name');
			$password = $this->input->post('password');

			if($this->main->chk($name,$password)){

				$session_data = array(
					'name' => $name
				);

				$this->session->set_userdata($session_data);

				redirect('dashboard');

			}else{

				$this->session->set_flashdata('error','Invalid Username Or Password');

				redirect('login');

			}

		}else{

			$this->login();

		}

	}
	public function logout(){

		$this->session->unset_userdata('name');

		redirect(base_url().'login');

	}

	public function del($id){

		$this->main->delet($id);

		$this->session->set_flashdata('success','Record Deleted Successfully');

        redirect('dashboard');

	}

	public function upd($id){

        if($this->session->userdata('name') != ''){

			$data['feth'] = $this->main->upget($id);

			$data['index'] = $this->load->view('pages/update',$data,true);

			$this->load->view('inner',$data);
		}else{

			redirect(base_url().'login');

		}

    }

    public function updatee(){

        $id = $this->input->post('id');

        $que = array(

            'eid' => $this->input->post('eid'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name')

        );

        $this->main->upd($id,$que);

        $this->session->set_flashdata('success','Record Updated Successfully');

        redirect('dashboard');

    }

    public function insert(){

    	if($this->session->userdata('name') != ''){

			$data['feth'] = $this->main->get();

			$data['index'] = $this->load->view('pages/insert',$data,true);

			$this->load->view('inner',$data);
		}else{

			redirect(base_url().'login');

		}

    }

    public function add(){

    	$this->load->library('form_validation');

		$this->form_validation->set_rules('eid', 'eid', 'required');

		$this->form_validation->set_rules('first_name', 'first_name', 'required');

		$this->form_validation->set_rules('last_name', 'last_name', 'required');

		if($this->form_validation->run()){

    	$que = array(

            'eid' => $this->input->post('eid'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name')

        );

        $this->main->inst($que);

        $this->session->set_flashdata('success','Record Inserted Successfully');

        redirect('dashboard');

    	}else{

    		$this->insert();

    	}

    }

}