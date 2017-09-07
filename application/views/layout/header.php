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

                        <img src="<?php echo base_url();?>assets/images/logo1.jpg" class="stickyLogo">

                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <span class="headerrr">
                        <?php foreach ($category as $cat){ ?>
    

               <a class="btn btn-secondary" href="#" role="button"><?php echo $cat['cat_name']; ?></a> 
             
                    <?php } ?>
             
                    </div>

                </div>

            </div>
        </div>



        <div class="container">

            <div class="row ">
                <!-- header er  -->


                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">

                            <img src="<?php echo base_url();?>assets/images/logo1.jpg" class="logo">

                        </div>

                        <div class="col-md-8 col-sm-8 col-xs-12 ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <i class="fa fa-car fa-2x" aria-hidden="true"> <span class="icoo"> </span> </i>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <i class="fa fa-money fa-2x" aria-hidden="true">
                  <span class="icoo"> </span>
                </i>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <i class="fa fa-check-square-o fa-2x" aria-hidden="true"> <span class="icoo"> </span></i>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <i class="fa fa-phone-square fa-2x" aria-hidden="true"></i>
                                        <span class="icoo">  </span>
                                    </div>

                                </div>
                            </div>


                        </div>



                    </div>




                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">



                    <div class="row">


                        <div class="col-md-3 col-sm-3 col-xs-12  text-right">
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>

                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>

                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>

                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12 text-left">
                            <i class="fa fa-google-plus-official fa-2x" aria-hidden="true"></i>

                        </div>




                    </div>




                </div>




            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">



                </div>



                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->

                            <div id="custom-search-input">
                                <div class="input-group col-md-12 col-xs-6">
                                    <input type="text" class="form-control input-lg" placeholder="Search" />
                                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
              <i class="fa fa-search" aria-hidden="true"></i>          </button>
                    </span>
                                </div>
                            </div>



                        </div>





                    </div>

                </div>





            </div>

            <br>

    </header>



    <div class="container">

        <div class="row row-offcanvas row-offcanvas-left">
        <?php if(isset($pagename) && $pagename == 'main') { ?>
            <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebarHome">
            <?php } else { ?>
             <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebarAllPgs">

            <?php } ?>
                <div class="list-group">
                    <ul class="menu">

                        <li>

                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Categories </label>
                            <a>Categories</a>
                            <input type="checkbox" id="drop-2" />
                            <ul id="pp">

                                    <?php foreach($category as $key => $cat) { ?>
                                <li>

                                    <!-- Second Tier Drop Down -->
                                    <label for="drop-3" class="toggle">Works </label>
                                    <a><?php echo $cat['cat_name'];?></a>
                                    <input type="checkbox" id="drop-3" />
                                    <ul>
            <?php $subcatname = $this->db->get_where('subcategory',array('cat_id' =>  $cat['cat_id']))->result_array(); ?>
                <?php foreach($subcatname as $subcat){ ?>
                                        <li><a href=""><?php echo $subcat['subcat_name'];?></a>
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