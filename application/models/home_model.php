 <?php
Class Home_model extends CI_Model
{

		function insertorder($data){
		$this->db->insert('o_order', $data);
      	return TRUE;
	}
		
		function insertquestion($data){
        $this->db->insert('question', $data);
        return TRUE;
      }

      function getallselectedpro($subcatid){

        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('subcat_id',$subcatid);
        $data=$this->db->get();
        return $data->result_array();

      }

      function getallpro(){
	 
	    $this->db->select('*');
        $this->db->from('products');
        $data=$this->db->get();
        return $data->result_array();
      }
      
	  function getproduct($form){

	  	$this->db->select('*');
        $this->db->from('products');
        $this->db->where('p_id',$form);
        $data=$this->db->get();
        return $data->result_array();
	  }
}

?>