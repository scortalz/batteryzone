 <?php
Class cmsdata extends CI_Model
{
      function getallcategory()
           { 
            
            $this->db->select('*');
            $this->db->from('category');
            $data=$this->db->get();
            return $data->result_array();
           
           } 

      function subcatdetail(){
            $this->db->select('*');
            $this->db->from('subcategory');
            $data=$this->db->get();
            return $data->result_array();
        }

      function getallproducts(){
            $this->db->select('*');
            $this->db->from('products');
            $data=$this->db->get();
            return $data->result_array();
        }
       function getallquestions() {
            $this->db->select('*');
            $this->db->from('question');
            $data=$this->db->get();
            return $data->result_array();
       }

      function getallbanner(){
            $this->db->select('*');
            $this->db->from('banners');
            $data=$this->db->get();
            return $data->result_array();
        }
    function addbanner($bannerimage){
          $data = array('b_img' => $bannerimage,
                      'b_date' => date('Y-m-d'));
            $this->db->insert('banners', $data);
        }

     function updatebanner($bannerimage,$id){
        $data = array('b_img' => $bannerimage,
                      'b_date' => date('Y-m-d'));
          $this->db->where('b_id', $id);
          $this->db->update('banners',$data);
          return true;
        
        }

       function deletebanner($form){ 
          $this->db->where('b_id', $form);
          $this->db->delete('banners');
          return true;
       } 
       function insertproduct($data){
       $this->db->insert('products', $data);
       return true;
       }

       function updateproduct($data,$id){

          $this->db->where('p_id', $id);
          $this->db->update('products',$data);
          return TRUE;
       }

       function deleteproduct($form){

            $this->db->where('p_id', $form);
            $this->db->delete('products');  
            return TRUE;

       }

      function insertsubcatname($catergory,$subcategory,$subcategoryimg) {

         $data = array(
          'cat_id' => $catergory,
          'subcat_name' => $subcategory,
          'subcat_img' => $subcategoryimg
          );

          $this->db->insert('subcategory', $data);
          return TRUE;

      }

      function getallorders(){
          $this->db->select('*');
          $this->db->from('o_order');
          $data = $this->db->get();
          return $data->result_array();
      }
      

      function deleteorder($delorder){
          $this->db->where('o_id', $delorder);
          $this->db->delete('o_order');  
          return TRUE; 
      }

       function deletequestion($delquestion){
          $this->db->where('q_id', $delquestion);
          $this->db->delete('question');  
          return TRUE; 
      }
      function editsubcatname($subcatid,$category,$subcategory,$subcatimg){
      
         $data = array(
          'subcat_name' => $subcategory,
          'cat_id' => $category,
          'subcat_img' => $subcatimg
          );

          $this->db->where('subcat_id', $subcatid);
          $this->db->update('subcategory',$data);
          return TRUE;

      }

        function delCatRow($del){

            $this->db->where('cat_id', $del);
            $this->db->delete(array('category','subcategory','products')); 	
            return TRUE;
       }


      function delsubCatRow($delsub){

            $this->db->where('subcat_id', $delsub);
            $this->db->delete('subcategory');  
            return TRUE;
       }

      function update($id,$name,$categoryimg){ 	
    	
      if (empty($categoryimg)) {

				$data = array(
					'cat_name' => $name,
				);
       	
       		}
       	else {
	
				$data = array(
						'cat_name' => $name,
						'cat_img' => $categoryimg
					);

       	}

          $this->db->where('cat_id', $id);
          $this->db->update('category',$data);
          return true;
       }


      function insertcatname($category,$categoryimg)
       { 

          $data = array(
          'cat_name' => $category,
          'cat_img' => $categoryimg
          );

          $this->db->insert('category', $data);
          return TRUE;
          } 

 }
?>