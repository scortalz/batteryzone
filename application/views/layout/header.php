<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <title>Battery Zone</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/slick/slick-theme.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>

<link href='https://fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Cormorant Unicase' rel='stylesheet'><link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Englebert' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Finger Paint' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Fondamento' rel='stylesheet'>
        


    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>  

    <style>
        /* for testing purposes */


    </style>
</head>

<body>
    <header class="headerrr">

        <!--
  <div class="row">   header er   
    <div class="col-md-12">
     <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <h1 class="jumbotron text-center">Hellow</h1>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        
        <ul class="navbar-nav mr-auto">

     
           
        </ul>
         
      </div>
    </nav>


</div>
</div>
 -->


        <div class="container">
            <div class="headerr">
                <div class="row">


                    <div class="col-lg-1  col-md-1 ">


                    </div>

                    <div class="col-lg-2 col-md-2">

                       <a href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>assets/images/logo1.png" class="stickyLogo"></a>

                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <span class="headerrr">
                        <?php foreach ($category as $cat){ ?>
     
               <a class="btn btn-dangerr" href="<?php echo base_url().'Home/subcat/'.$cat['cat_id'];?>" role="button"><?php echo $cat['cat_name']; ?></a> 
             
                    <?php } ?>
             


                    </div>

                </div>

            </div>
        </div>



        <div class="container">

            <div class="row ">
                <!-- header er  -->


                <div class="col-md-9 col-sm-8 col-xs-3">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-1">

                            <a href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>assets/images/logo1.png" class="logo"></a>

                        </div>

                        
                                
                        <i class=" tip fa fa-car fa-2x fapad " aria-hidden="true" >  </i>
                                        
                         <span class="tip icoo " >  <b>Fast</b> <br><b class="topFaTxt">Delivery</b>  <span>Delivery FAST Shipping with door step delivery all over Pakistan</span></span>  
                                      
                                  

                                  
                                        <i class="fa fa-money fa-2x fapad2" aria-hidden="true">
                  
                </i>  
                <span class="tip icoo" >  <b>Pay</b> <br><b class="topFaTxt">Cash</b>  <span>We offer to pay Cash on Delivery for a
WORRY-FREE shopping experience</span></span>  
                                    
                                   
               <i class="fa fa-check-square-o fa-2x fapad2 fapad3" aria-hidden="true"> </i>
                <span class="tip icoo" >  <b>7 </b> <br><b class="topFaTxt">Days</b>  <span>FREE 7-Day replacement policy on all products from the day of delivery (Applicable in Pakistan only)</span></span>                     

                                    
              <i class="fa fa-phone-square fa-2x fapad2 fapad4" aria-hidden="true"></i>   <span class="tip icoo" >  <b>Call Us</b> <br><b class="topFaTxt topFaTxt2">0123-4567890</b>  <span>We offer to pay Cash on Delivery for a
WORRY-FREE shopping experience</span></span>                                   
                                  
                      

                    </div>

 
                </div>

                <div class="col-md-3 col-sm-4 col-xs-3">
 
                    <div class="row">
 
                            <i class=" fapadSocial fSocial fa fa-facebook-square fa-2x" aria-hidden="true"></i>

                            <i class=" fapadSocial fa fa-twitter-square fa-2x" aria-hidden="true"></i>

                            <i class=" fapadSocial fa fa-linkedin-square fa-2x" aria-hidden="true"></i>

                            <i class=" fapadSocial fa fa-google-plus-official fa-2x" aria-hidden="true"></i>

                    </div>




                </div>




            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">



                </div>



                <div class="col-md-9 col-sm-9 col-xs-3">
                    <div class="row">
                        <div class="col-md-9 col-xs-3 searchUp">
                            <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->

                            <div id="custom-search-input">
                                <form action="<?php echo base_url();?>Home/getmanualsearchdata" method="post">
                                <div class="input-group col-md-12 ">
                                    <input type="text" name="sear-inp" class="search-pro form-control input-lg" placeholder="Search" value="" onkeyup="getdata(this.value)"/>
                                    <select name="sear-sel">
                                    <option value="" > Select Categories</option>
                                     <?php foreach ($category as $cat){ ?>
                                    <option value="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></option>
                                      
                                    <?php } ?>
                                    </select>
                                    <span class="input-group-btn">
                        <button type="submit" style="cursor:pointer;" class="btn btn-info btn-lg">
              <i class="fa fa-search" aria-hidden="true"></i>          </button>
</form>
                    </span>
                                </div>
                            </div>
<span class="sugest" style="display:none;">Suggestions: <span id="txtHint" style="cursor:pointer;"></span></span><span style="display:none;" id="pro-id"></span>


                        </div>





                    </div>

                </div>





            </div>

            <br><br><br>

    </header>



    <div class="container">

        <div class="row row-offcanvas row-offcanvas-left">
        <?php if(isset($pagename) && $pagename == 'main') { ?>
            <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebarHome">
            <?php } else { ?>
             <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebarAllPgs">

            <?php } ?>
                <div class="btn-group show-on-hover">
          <button type="button" class="btn btn-default dropdown-toggle menubb  " data-toggle="dropdown">
            All Categories <span class="caret"></span>
          </button>
           <ul class="dropdown-menu main-menu-box  " role="menu">
          

                                    <?php foreach($category as $key => $cat) { ?>
                                <li class="dropdown-submenu  ">

                                   
                                    
                                    <a  tabindex="-1" ><?php echo $cat['cat_name'];?></a>
                                    
                                <ul  class="dropdown-menu  ">
            <?php $subcatname = $this->db->get_where('subcategory',array('cat_id' =>  $cat['cat_id']))->result_array(); ?>
            
                <?php foreach($subcatname as $subcat){ ?>
                <li class=" "><a tabindex="-1" href="<?php echo base_url().'Home/subcat/'.$cat['cat_id'];?>"><?php echo $subcat['subcat_name'];?></a>
                                </li>
                            <?php } ?>
                                    </ul>

                                </li>

                                <?php } ?>

                            </ul>
                        </li>



                    </ul>
                </div>

            </div>
