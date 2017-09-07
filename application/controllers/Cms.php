<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->load->model('cmsdata');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
	
	public function category()
	{


		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}


		else
		{
			// set the flash data error message if there is one + + okay this is just a testing in multiple files


			$this->data['category']	= $this->cmsdata->getallcategory();
			$this->data['pagename']	= "category.php";

			$this->load->view('auth/index', $this->data);
		}
	}

	public function subcat($form = '')
	{


		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}

		else
		{
			
			if ($form == 'form' && isset($_POST['subcategory'])) {
				
				$catergory 			= $this->input->post('sel-cat');
				$subcategory 		= $this->input->post('subcategory');
				$uploadedimg	 	= $this->uploadcatimg();

				$subcategoryimg 		= $uploadedimg['file_name'];

				if (empty($subcategoryimg)) {

				$subcategoryimg 		= 'no-image.jpg';
				
				}

				$this->cmsdata->insertsubcatname($catergory,$subcategory,$subcategoryimg);
				redirect('Cms/subcat','refresh');
				}

			elseif ($form == 'form-edit') {
				

				$subcatid 			= $this->input->post('editsubcatid');
				$category 			= $this->input->post('sel-cat');
				$subcategory 		= $this->input->post('edtsubcatname');
				$oldimg 			= $this->input->post('oldimg');

				$uploadedimg	 	= $this->uploadcatimg();

				$subcatimg 	= $uploadedimg['file_name'];

				if (empty($subcatimg)) {

				$subcatimg 	= $oldimg;
				
				}

				else {				

				$this->deletesubcatimg($oldimg);
				
				}

				$this->cmsdata->editsubcatname($subcatid,$category,$subcategory,$subcatimg);

				redirect('Cms/subcat','refresh');

				}	

			else {

			$this->data['category']		= $this->cmsdata->getallcategory();
			$this->data['subcategory']	= $this->cmsdata->subcatdetail();
			$this->data['pagename']		= "subcat.php"; 

			$this->load->view('auth/index', $this->data);

			}
		}
	}


	public function uploadproductimg(){

		$config['upload_path']   =   "./assets/images/uploads/category/subcategory/products/";

		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 

		$config['max_size']      =   "5000";

		$config['max_width']     =   "1907";

		$config['max_height']    =   "1280";



		if(is_file($config['upload_path']))
		{
		chmod($config['upload_path'], 777); 
		}
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('productimg'))

		{

		 $this->upload->display_errors();

		}
		else {

		return $this->upload->data();
		
		}	
}

	public function delsubcat($delsub,$delPic) {

		$this->cmsdata->delsubCatRow($delsub);
		$this->deletesubcatimg($delPic);
		redirect('Cms/subcat','refresh');
		

	}


	public function uploadcatimg(){

		$config['upload_path']   =   "./assets/images/uploads/category/subcategory/";

		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 

		$config['max_size']      =   "5000";

		$config['max_width']     =   "1907";

		$config['max_height']    =   "1280";



		if(is_file($config['upload_path']))
		{
		chmod($config['upload_path'], 777); 
		}
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('subcategoryimg'))

		{

		 $this->upload->display_errors();

		}
		else {

		return $this->upload->data();
		
		}	
}

	public function products($form = '',$picname = '')
	{

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}


		else
		{


				if ($form == 'add-product' && isset($_POST['pname'])) {
				
		 	 	$feature	 	= (isset($_POST['is-featured'])) ? 1 : 0;
		 	 	$uploadedimg 	= $this->uploadproductimg();

				$productimg  	= $uploadedimg['file_name'];

				if (empty($productimg)) {

				$productimg  	= 'no-image.jpg';
				
				}

				$data = array(
				'p_name' 		=> $this->input->post('pname'),
				'cat_id'		=> $this->input->post('cat-name'),
				'subcat_id' 	=> $this->input->post('sub-cat'),
				'p_price' 		=> $this->input->post('pprice'),
				'p_isfeature' 	=> $feature,
				'p_date' 		=> date('Y-m-d'),
				'p_main_image' 	=> $productimg );

				$insertproduct = $this->cmsdata->insertproduct($data);
				
				}

				if ($form == 'edit-product') {
				
				$feature	 	= (isset($_POST['is-featured'])) ? 1 : 0;
				$id 			= $this->input->post('productid');
				$oldimg		 	= $this->input->post('productoldpic');
				

				$uploadedimg 	= $this->uploadproductimg();

				$productimg  	= $uploadedimg['file_name'];

				if (empty($productimg)) {

				$productimg  	= $oldimg;
				
				}
				else {

				$this->deleteoldproductpic($oldimg);
				
				}

				$data = array(
				'p_name' 		=> $this->input->post('peditname'),
				'cat_id'		=> $this->input->post('pcatname'),
				'subcat_id' 	=> $this->input->post('psubcatname'),
				'p_price' 		=> $this->input->post('edtprice'),
				'p_isfeature' 	=> $feature,
				'p_date' 		=> date('Y-m-d'),
				'p_main_image' 	=> $productimg );
		 	 	
				$update 		= $this->cmsdata->updateproduct($data,$id);

				if ($update == false) {
					echo "Problem Occured while updating record";
				}

				
				}

				if (is_numeric($form)) {
					$this->cmsdata->deleteproduct($form);
					$this->deleteoldproductpic($picname);

				}



			$this->data['products'] 	= $this->cmsdata->getallproducts();
			$this->data['category'] 	= $this->cmsdata->getallcategory();
			$this->data['subcategory']	= $this->cmsdata->subcatdetail();
			$this->data['pagename']		= "products.php";

			$this->load->view('auth/index', $this->data);
		}
	}


	public function deleteoldproductpic($oldimg){
		$path = $_SERVER['DOCUMENT_ROOT'].'/assets/images/uploads/category/subcategory/products/';
		$comb = $path.$oldimg;
		unlink($comb);
	}

	public function banner($form = '',$oldbanimg = '')
	{

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}


		else
		{


		if ($form == 'add-banner') {

			$uploadedimg	= $this->bannerimg();

			$bannerimage 	= $uploadedimg['file_name'];

			$this->cmsdata->addbanner($bannerimage);


		}

		if ($form == 'edit-banner') {

			$id 	= $this->input->post('banid');
			$oldimg = $this->input->post('oldbanimg');

			$uploadedimg	= $this->bannerimg();

			$bannerimage 	= $uploadedimg['file_name'];

			$updated = $this->cmsdata->updatebanner($bannerimage,$id);

			if ($updated == true) {

			$this->deleteoldbanner($oldimg);

			}


		}

		if (is_numeric($form)) {


			$deleted = $this->cmsdata->deletebanner($form);
			
			if ($deleted == true && !empty($oldbanimg)) {

			$this->deleteoldbanner($oldbanimg);

			}


		}

			// set the flash data error message if there is one
			$this->data['banners'] = $this->cmsdata->getallbanner();
			$this->data['pagename']	= "banner.php";

			$this->load->view('auth/index', $this->data);
		}
	}

	public function deleteoldbanner($oldimg){ //just need the file name to delete in catergory

		$path = $_SERVER['DOCUMENT_ROOT'].'/assets/images/uploads/banners/';
		$comb = $path.$oldimg;
		unlink($comb);
		  
	}

	public function bannerimg(){

		$config['upload_path']   =   "./assets/images/uploads/banners/";

		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 

		$config['max_size']      =   "5000";

		$config['max_width']     =   "1907";

		$config['max_height']    =   "1280";



		if(is_file($config['upload_path']))
		{
		chmod($config['upload_path'], 777); 
		}
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('bannerimg'))

		{

		 $this->upload->display_errors();

		}
		else {

		return $this->upload->data();
		
		}	
    }
	public function orders($delorder = '')
	{

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}


		else
		{

			if (is_numeric($delorder)) {
				
				$this->cmsdata->deleteorder($delorder);
			
			}
			// set the flash data error message if there is one
			$this->data['orders']	= $this->cmsdata->getallorders();
			$this->data['pagename']	= "orders.php";

			$this->load->view('auth/index', $this->data);
		}
	}

	public function questions($delquestion = '')
	{

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}


		else
		{
			// set the flash data error message if there is one

			if (is_numeric($delquestion)) {

			$deletedquestion = $this->cmsdata->deletequestion($delquestion);

			}

			$this->data['questions']	= $this->cmsdata->getallquestions();
			$this->data['pagename']		= "questions.php";

			$this->load->view('auth/index', $this->data);
		}
	}
	public function delcat($del,$delPic) {

		$this->cmsdata->delCatRow($del);
		$this->deletePic($delPic);	
		redirect('Cms/category','refresh');
		

	}

	public function edit(){
	
		$id = $this->input->post('id');
		$name = $this->input->post('edtname');
		$categoryimg = "";
		$delPic = $this->input->post('delPic');
	 

		if(!empty($_FILES['categoryimg']['name'])){
		
		$uploadedimg	 = $this->uploadimg();
		$categoryimg = $uploadedimg['file_name'];
		$this->deletePic($delPic);
		
		
		}

		$this->cmsdata->update($id,$name,$categoryimg);
		 
		redirect('Cms/category','refresh');

	}

	public function deletePic($delPic){ //just need the file name to delete in catergory

		$path = $_SERVER['DOCUMENT_ROOT'].'/assets/images/uploads/category/';
		$comb = $path.$delPic;
		unlink($comb);
		  
	}
	public function deletesubcatimg($delPic){ //just need the file name to delete in catergory

		$path = $_SERVER['DOCUMENT_ROOT'].'/assets/images/uploads/category/subcategory/';
		$comb = $path.$delPic;
		unlink($comb);
		  
	}
	public function addcat()
	{

		$category 		 = $this->input->post('category');
		$uploadedimg	 = $this->uploadimg();
		
		$categoryimg = $uploadedimg['file_name'];

		if (empty($categoryimg)) {
		
		$categoryimg = 'no-image.jpg';
		}
		
		$this->cmsdata->insertcatname($category,$categoryimg);
		redirect('Cms/category','refresh');

	}
	function productsdescription(){

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}


		else
		{ 
							
		}

			$this->data['pagename']		= "productsdescription.php";
			$this->load->view('auth/index', $this->data);
	}

	public function uploadimg(){

		$config['upload_path']   =   "./assets/images/uploads/category/";

		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 

		$config['max_size']      =   "5000";

		$config['max_width']     =   "1907";

		$config['max_height']    =   "1280";



		if(is_file($config['upload_path']))
		{
		chmod($config['upload_path'], 777); 
		}
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('categoryimg'))

		{

		 $this->upload->display_errors();

		}
		else {

		return $this->upload->data();
		
		}	
    }
}
 





?>