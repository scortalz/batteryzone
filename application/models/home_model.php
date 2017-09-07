 <?php
Class home_model extends CI_Model
{

		function insertorder($data){
		$this->db->insert('o_order', $data);
      	return TRUE;
	}
		
		function insertquestion($data){
        $this->db->insert('question', $data);
        return TRUE;
      }
}
?>