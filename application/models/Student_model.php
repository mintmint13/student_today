<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Student_model extends CI_Model{
		
		public function set_student_profile($input){
			$this->db->insert('student_profile',$input);
		}
	
		public function get_student_profile(){
			$result = $this->db->get('student_profile')->result_array();
			return $result;
		}

		public function delete_student_profile($id){
			$this->db->delete('student_profile', array('id' => $id));
		}


}