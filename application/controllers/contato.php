<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
    }

	public function index(){
            
            $this->load->view('Meta');
            $this->load->view('Menu');
            $this->load->view('contact/contato');
            $this->load->view('Banner'); // Banner com as redes sociais
            $this->load->view('Footer'); // Menu e nome da empresa
            $this->load->view('Js');
            $this->load->view('End');
        }
        
        /*
        
         Terminar esse metodo de envio usando o SMTP.
        
        */
        public function enviar(){
            
            $nome = $this->input('nome',TRUE);
            $sobrenome = $this->input('sobrenome',TRUE);
            $email = $this->input('email',TRUE);
            $mensagem = $this->input('mensagem',TRUE);
            
            //Validações
            if(strlen($nome)<4){
                $this->session->set_flashdata('erro','O nome de ser maior que 4 caracteres.');
            }
            elseif(!valid_email($email)){
                $this->session->set_flashdata('erro','E-mail invalido.');
            }
            elseif(strlen($mensagem)<10) {
                $this->session->set_flashdata('erro','A mensagem deve conter mas de 10 caracteres.');
       }
       else{
           $this->session->set_flashdata('ok','E-mail enviado. Em breve o responderemos.');
           
           // De:
           //$this->
       }// Else
       
        }// Function Enviar
} // Class Contato

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */