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

      function getallselectedprosearch($searsel){

        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('cat_id',$searsel);
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



    function getdatafromdbsearch($name){

        $this->db->like('p_name', $name, 'both');
        $data=$this->db->get('products');
        return $data->result_array();
    }
    function getsrcselectedpro($srcinpt,$searsel){
        $this->db->like('p_name', $srcinpt, 'both');
        $this->db->like('cat_id', $searsel, 'both');
        $data=$this->db->get('products');
        return $data->result_array();
    }
}

?>