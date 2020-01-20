<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Primercontroller extends CI_Controller {

function __construct(){
parent:: __construct();
$this->load->helper('form');
$this->load->model('base');

} 
function index () {
$this->load->libraries('menu', array('Inicio','Contacto','Cursos'));
$data['mi_menu'] = $this->menu->construirMenu();
$this->load->view('prueba/segundo', $data);
//$this->load->view('prueba/primero');

}

 function formulario(){
 
 $this->load->view('prueba/formulario');

 }
function recibir(){

$data = array (
'nombre'=> $this->input->post('nombre'),
'video'=> $this->input->post('video'),
);
$this->base->crear($data);
$this->load->view('prueba/segundo');


}
  function mostrar(){
$data['registro'] = $this->base->mostrar();
 $this->load->view('prueba/resultado', $data);

 }

}
?>