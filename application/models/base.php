<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
function crear($data){
$this->db->insert('registro', array ('nombre_video'=>$data['nombre'], 'cantidad_video'=>$data['video'])); 

function mostrar(){
	$query = $this->db->get('registro');
if ($query -> num_row() >0) return $query;
else return false;
}
 
}

}

?>