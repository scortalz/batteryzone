<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=echodge,chrome=1" />

	<title>Battery Zone Cms</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     isko dekhna hay bad main -->

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?php echo base_url();?>assets/css/family-Roboto.css' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css" rel="stylesheet"> 
     
     <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>  
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>  
<!-- <style type="text/css" media="screen">
    body {
  margin: 0;
  background: linear-gradient(60deg, #ff2400, #e81d1d, #e8b71d, #e3e81d, #1de840, #1ddde8, #2b1de8, #dd00f3, #dd00f3);
  background-size: 1800% 1800%;
  animation: rainbow 30s ease infinite;
  
  display: flex;
  justify-content: center;
}

.overlay {
  width: 100%;
  height: 750px;
  margin: auto, auto, auto, auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

@-webkit-keyframes rainbow {
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
  }

.bar{
  height: 10px;
  width: 10px;
  border: 3px solid white;
  content: '';
  top: 10%;
  margin 10px, 5px, 10px, 5px;
  border-radius: 100%;
  animation: ball 2s infinite linear;
  
}

.bar:nth-child(2n) {
  animation-delay: 0.2s;
}
.bar:nth-child(3n) {
  animation-delay: 0.4s;
}

@keyframes ball {
    0%   { 
    transform: scale(0.5);
    background: white;
  }
  50%   { 
    transform: scale(1);
    background: transparent;
  }
  100% { 
    transform: scale(0.5);
    background: white;
  }
}
</style> -->
</head>
<body>    
<div class="overlay">
  <div class="bar"> </div>
  <div class="bar"> </div>
  <div class="bar"> </div>
</div>
</div>

    <div class="sidebar" data-color="purple" data-image="<?php echo base_url();?>assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url();?>" class="simple-text">
                    Battery Zone
                </a>
            </div>

            <ul class="nav">
        <!-- <li <?php if($pagename == "dashboard.php") { echo "class='active'"; } ?>>
                    <a href="<?php echo base_url();?>Auth/index">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?php if($pagename == "userprofile.php") { echo "class='active'"; } ?>>
                    <a href="<?php echo base_url();?>Auth/usersdata">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li> -->
                 <li <?php if($pagename == "category.php") { echo "class='active'"; } ?>>
                    <a href="<?php echo base_url();?>Cms/category">
                        <i class="pe-7s-note2"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li <?php if($pagename == "subcat.php") { echo "class='active'"; } ?>>
                     <a href="<?php echo base_url();?>Cms/subcat">
                        <i class="pe-7s-news-paper"></i>
                        <p>Sub-Category</p>
                    </a>
                </li>
               <li <?php if($pagename == "products.php") { echo "class='active'"; } ?>>
                    <a href="<?php echo base_url();?>Cms/products">
                        <i class="pe-7s-science"></i>
                        <p>Products</p>
                    </a>
                    <ul>
 <!--                        <li <?php if($pagename == "productsdescription.php") { echo "class='active'"; } ?>>
                        <a href="<?php echo base_url();?>Cms/productsdescription">Products Descriptions</a></li> -->
                         <!-- <li><a href="">Products Images</a></li> -->
                    </ul>
                </li>
               <li <?php if($pagename == "banner.php") { echo "class='active'"; } ?>>
                    <a href="<?php echo base_url();?>Cms/banner">
                        <i class="pe-7s-map-marker"></i>
                        <p>Banner</p>
                    </a>
                </li>
                 <li <?php if($pagename == "orders.php") { echo "class='active'"; } ?>>
                    <a href="<?php echo base_url();?>Cms/orders">
                        <i class="pe-7s-bell"></i>
                        <p>Orders</p>
                    </a>
                </li>
				<li <?php if($pagename == "questions.php") { echo "class='active'"; } ?>>
                    <a href="<?php echo base_url();?>Cms/questions">
                         <i class="pe-7s-rocket"></i>
                        <p>Questions</p>
                    </a>
                </li>
                <!-- <li <?php if($pagename == "settings.php") { echo "class='active'"; } ?>>
                    <a href="<?php echo base_url();?>Auth/index/settings.php">
                         <i class="pe-7s-rocket"></i>
                        <p>Settings</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>Cms/category">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
<!--                     <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>#">Notification 1</a></li>
                                <li><a href="<?php echo base_url();?>#">Notification 2</a></li>
                                <li><a href="<?php echo base_url();?>#">Notification 3</a></li>
                                <li><a href="<?php echo base_url();?>#">Notification 4</a></li>
                                <li><a href="<?php echo base_url();?>#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="<?php echo base_url();?>">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul> -->

                    <ul class="nav navbar-nav navbar-right">
<!--                         <li>
                           <a href="<?php echo base_url();?>">
                               Account
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>#">Action</a></li>
                                <li><a href="<?php echo base_url();?>#">Another action</a></li>
                                <li><a href="<?php echo base_url();?>#">Something</a></li>
                                <li><a href="<?php echo base_url();?>#">Another action</a></li>
                                <li><a href="<?php echo base_url();?>#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url();?>#">Separated link</a></li>
                              </ul>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url();?>/auth/logout">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>




<?php 
    $url = realpath(dirname(__FILE__));
include_once $url."/../cmspages/".$pagename; ?>

        <footer class="footer">
<!--             <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="<?php echo base_url();?>#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2017 <a href="http://incisivesoft.com/">Incisive</a>, You Think It, We Build It!
                </p>
            </div> -->
        </footer>

    </div>
</div>
  
 
<?php 

    $url = realpath(dirname(__FILE__));    
include_once $url."/../layout/cmsmodal.php"; ?>

</body>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!--   Core JS Files   -->
    <!-- <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url();?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url();?>assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>

	<script type="text/javascript">


$('.uploadnewimg').click(function(){
    $('.newimg').toggle('500');
});
    
$('.edit-cat').click(function(){
    
    $('#id').html('');
    $('#edtname').html('');
    $('#delPic').html('');

    var id      = $(this).closest('tr').find('input:eq(0)').val();
    var name    = $(this).closest('tr').find('td:eq(1)').text();
    var img     = $(this).closest('tr').find('td:eq(2)').text();


    $('#id').val(id);
    $('#edtname').val(name);
    $('#delPic').val(img);
    


});


$('.edit-banner').click(function(){
    
    $('#id').html('');
    $('#oldbanimg').html('');

    var id     = $(this).closest('tr').find('input:eq(0)').val();
    var img    = $(this).closest('tr').find('td:eq(1)').text();

    var idbanner = parseInt(id);
    $('#banid').val(idbanner);
    $('#oldbanimg').val(img);

});


$('.edit-sub-cat').click(function(){
    
    $('#editsubcatid').html('');
    $('#edtsubcatname').html('');
    $('#oldimg').html('');
    $('.sel-cat').val();

    var catid               = $(this).closest('tr').find('input:eq(0)').val();
    var subcatid            = $(this).closest('tr').find('input:eq(1)').val();

    var subcatname          = $(this).closest('tr').find('td:eq(1)').text();
    var subcatimg           = $(this).closest('tr').find('td:eq(3)').text();

    var currentcat = parseInt(catid);
    $('#editsubcatid').val(subcatid);
    $('#edtsubcatname').val(subcatname);
    $('.sel-cat').val(currentcat);
    $('#oldimg').val(subcatimg);
    


});

$('.edit-product').click(function(){
    
    $('#pname').html('');
    $('#pprice').html('');

    var product               = $(this).closest('tr').find('td:eq(1)').text(); 
    var pic                   = $(this).closest('tr').find('td:eq(4)').text();
    var price                 = $(this).closest('tr').find('td:eq(5)').text();
    var feature               = $(this).closest('tr').find('td:eq(6)').text();
    var id                    = $(this).closest('tr').find('input:eq(0)').val(); 
    var catid                 = $(this).closest('tr').find('input:eq(1)').val();
    var subcatid              = $(this).closest('tr').find('input:eq(2)').val();


            var p_id          = parseInt(id);
            var featured      = parseInt(feature);
            var edtcatid      = parseInt(catid);
            var edtsubcatid   = parseInt(subcatid);

    $('#productid').val(p_id);
    $('#peditname').val(product);
    $('#productoldpic').val(pic);
    $('#edtprice').val(price);
    $('.pcatname').val(edtcatid);
    $('.psubcatname').val(edtsubcatid);

        if (featured == 1) {
    $('.is-featured').attr('checked', true).triggerHandler('click');
        }
        else {
    $('.is-featured').attr('checked', false).triggerHandler('click');
    }

});




$(document).ready(function() {

        $("#edit-data").validate({
            rules: {
                edtname: {
                    required: true,
                    minlength: 2
                },
                },

            messages: {
                edtname: {
                    required: "Please enter Name",
                    minlength: "Name must contain atleast 2 alphabets"
                },
            }
        });
});


$(document).ready(function() {

        $("#add-data").validate({
            rules: {
                category: {
                    required: true,
                    minlength: 2
                },
                },

            messages: {
                category: {
                    required: "Please enter your Name",
                    minlength: "Name must contain atleast 2 alphabets"
                },
            }
        });
});


$(document).ready(function() {

        $("#editproductmodal").validate({
            rules: {
                peditname: {
                    required: true,
                    minlength: 2
                },
                edtprice: {
                    required: true,
                    minlength: 2
                },
                },

            messages: {
                peditname: {
                    required: "Please enter your product name",
                    minlength: "Name must contain atleast 2 alphabets"
                },
                edtprice: {
                    required: "Please enter your product price",
                    minlength: "must be greater than 10"
                },
            }
        });
});

$(document).ready(function() {

        $("#add-cat-data").validate({
            rules: {
                subcategory: {
                    required: true,
                    minlength: 2
                },
                },

            messages: {
                subcategory: {
                    required: "Please Enter Sub Category",
                    minlength: "Name must contain atleast 2 alphabets"
                },
            }
        });
         $("#edit-sub-data").validate({
            rules: {
                edtsubcatname: {
                    required: true,
                    minlength: 2
                },
                },

            messages: {
                edtsubcatname: {
                    required: "Please Enter Sub Category",
                    minlength: "Name must contain atleast 2 alphabets"
                },
            }
        });


         $("#addproductmodal").validate({
            rules: {
                pname: {
                    required: true,
                    minlength: 2
                },
                 pprice: {
                    required: true,
                    minlength: 2
                },

                },

            messages: {
                pname: {
                    required: "Please Enter Product Name",
                    minlength: "Name must contain atleast 2 alphabets"
                },
                pprice: {
                    required: "Please Enter Product Price",
                    minlength: "Price must contain atleast 2 digits"
                },

            }
        });


     $("#add-banner").validate({
        rules: {
            bannerimg: {
                required: true,
            },
            },

        messages: {
            bannerimg: {
                required: "Please select img",
            },
        }
    });

      $("#edit-banner").validate({
        rules: {
            bannerimg: {
                required: true,
            },
            },

        messages: {
            bannerimg: {
                required: "Please select img",
            },
        }
    });

});










	$(document).ready(function(){
        
        $('#myTable').DataTable(
    	{
    		  "searching": true,
    		  "processing": true

    	});
		

 		$('#catTable').DataTable(
    	{
    		  "searching": true,
    		  "processing": true

    	});


        $('#subCatTable').DataTable(
        {
              "searching": true,
              "processing": true

        });

        $('#productsTable').DataTable(
        {
              "searching": true,
              "processing": true

        });
        
	    $('#bannerstable').DataTable(
        {
              "searching": true,
              "processing": true

        });
        $('#ordersTable').DataTable(
        {
              "searching": true,
              "processing": true

        });
        $('#questionsTable').DataTable(
        {
              "searching": true,
              "processing": true

        });

        
        $('#productdesTable').DataTable(
        {
              "searching": true,
              "processing": true

        });

});
    

    	/*$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});*/
	</script>

</html>
