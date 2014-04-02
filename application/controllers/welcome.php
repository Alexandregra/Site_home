<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Meta'); //Tag meta e indexadores, css,fonts.
                $this->load->view('Menu'); //Menu de cima do site
                $this->load->view('Header'); // Primeiro painel com Git,twitter
                $this->load->view('Selection_a'); // Segundo painel
                $this->load->view('Selection_b'); // Terceiro painel
                $this->load->view('Selection_c'); // Quarto painel
                $this->load->view('Banner'); // Banner com as redes sociais
                $this->load->view('Footer'); // Menu e nome da empresa
                $this->load->view('Js'); // Arquivos Js
                $this->load->view('End'); // Finalizando o codigo 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */