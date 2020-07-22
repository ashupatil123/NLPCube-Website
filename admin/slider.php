
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NLPCube</title> 
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css'>
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
  <style>
    #search1{
        display:none;
    }
    .navbar .navbar-nav li > a {
        font-size: 16px;
        font-weight: bold;
        padding: 10px 10px;
    }
    .navbar .navbar-brand img {
        margin-top: 10px;
    }
    .navbar .navbar-nav > .active > a{
        color: #ffffff!important;
    }
    
    @media screen and (max-width: 480px) and (min-width: 320px)
    {
        .navbar .navbar-brand img {
            max-width: 88px;
            margin-top: 0px;
        }
        .navbar .navbar-nav li > a {
            font-size: 14px;
        }
    }
  </style>
</head>


<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.svg" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo.svg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"></li>
                    <!-- <h3 class="menu-title">UI elements</h3>  -->
                    <li class="menu-item-has-children dropdown">
                        <!-- <li><a href="slider.php"></a> -->
                        <li class=" <?php if($page=='dash'){ echo 'active'; } ?>" >
                            <a href="dashboard.php"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class=" <?php if($page=='enquiry'){ echo 'active'; } ?>" >
                            <a href="enquiry.php"><i class='fa fa-edit'></i> Enquiry</a>
                        </li>
                        <li class=" <?php if($page=='contact'){ echo 'active'; } ?>">
                            <a href="contact_form.php"><i class='fa fa-phone'></i> Contacted</a>
                        </li>
                        <li class=" <?php if($page=='quote'){ echo 'active'; } ?>">
                            <a href="quotation_details.php"><i class='fa fa-money'></i> Quotation</a>
                        </li>
                        <li class=" <?php if($page=='testimonial'){ echo 'active'; } ?>">
                            <a href="testimonial.php"><i class='fa fa-comments'></i> Testimonials</a>
                        </li>

                        <li class=" <?php if($page=='career'){ echo 'active'; } ?>" >
                            <a href="tables-data.php"><i class='fa fa-bullhorn'></i> Our Jobs</a>
                        </li>
                        <li class=" <?php if($page=='job'){ echo 'active'; } ?>">
                            <a href="jobportal.php"><i class="fa fa-user"></i> Applicants</a>
                        </li>
                        
                        
                        
                        
                        
                    </li>

                </ul>
            </div>
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                
                    <div class="header-left">
                        <div class="input-group input-group-rounded input-group-merge" id="search1">
                            <input type="search" id="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                            <div class="input-group-prepend">
                                
                            </div>
                        </div>

                        <!-- <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button> -->
                            <!-- <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div> 
                        </div>-->
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i></a>
                            
                        </a>

                        <div class="user-menu dropdown-menu">
                         <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i></a>
                        </div>
                    </div>
 
        <!-- Header-->
        </header>


    <!-- Right Panel -->
<script>

$(document).ready(function(){
    $("#search").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $("#mytable tr").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
    });
});


</script>
        
    

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <!-- <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
