<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo base_url(); ?>assets/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    <script src='<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!--// Validation Script -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("slow");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("slow");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.html">Income tax</a>
                </h1>
                <?php if(isset($_SESSION['username']))
                      {
                    ?>
                     <div style="text-align: center;font-size: 22px"><u><?php echo $_SESSION['username']; ?></u></div>
                    <?php

                      }
                    ?>
                     
                <span>I-Tax</span>
            </div>
            <div class="profile-bg"></div>

            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>

                 <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        
                        <!--<li>
                            <a href="login_form">login</a>
                        </li>-->
                        
                         
                        <li>
                            <a href="register_form">Register</a>
                        </li>
                        

                         <?php if(isset($_SESSION['username']))
                         {
                         ?>
                        <li>
                            <a href="forgot_password">Forgot password</a>
                        </li>
                        <?php
                         }
                        ?>
                    </ul>
                </li>
                
                
                <li>
                    <a href="tax_calc_form">
                        <i class="far fa-window-restore"></i>
                        Tax Calculation
                    </a>
                </li>

               <?php if(isset($_SESSION['username']))
               {
               ?>
                <li>
                    <a href="value_tax_form">
                        <i class="fas fa-table"></i>
                        Calculation Data
                    </a>
                </li>
                <?php
                }
                ?>

                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="far fa-file"></i>
                        Loan
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="personal_loan">Personal Loan</a>
                        </li>
                        <li>
                            <a href="home_loan">Home Loan</a>
                        </li>
                        <li>
                            <a href="car_loan">Car Loan</a>
                        </li>
                       <!--  <li>
                            <a href="education_loan">Education Loan</a>
                        </li>-->
                    </ul>
                </li>

                <li class="active">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Cards
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="debit_card">Debit Card</a>
                        </li>
                        <li>
                            <a href="credit_card">Credit Card</a>
                        </li>
                        
                    </ul>
                </li>

                 <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Insurance
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="car_ins">Car Insurance</a>
                        </li>
                        <li>
                            <a href="health_ins">Health Insurance</a>
                        </li>
                       <!-- <li>
                            <a href="home_ins">Home Insurance</a>
                        </li>
                        <li>
                            <a href="travel_ins">Travel Insurance</a>
                        </li>-->
                        <li>
                            <a href="life_ins">Life Insurance</a>
                        </li>
                    </ul>
                </li>



              <!--  <li>
                    <a href="mailbox.html">
                        <i class="far fa-envelope"></i>
                        Mailbox
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
                    </a>
                </li>-->
                
               
               
                <li>
                    <a href="aboutus">
                        <i class="far fa-user"></i>
                        About Us
                    </a>
                </li>

                 <li>
                    <a href="contactus">
                        <i class="far fa fa-phone"></i>
                        Contact Us
                    </a>
                </li>

               <?php if(isset($_SESSION['username'])){ ?>
                 <li>
                    <a href="feedback">
                        <i class="far fa-comment"></i>
                        Feedback
                    </a>
                </li>
                <?php 
                  }
                ?>
            </ul>
        </nav>
       
        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    
                     <?php if(!isset($_SESSION['username']))
                        {
                      ?>
                         <div class="alert alert-primary">
                            <a href="login_form">login</a>
                        </div>
                       <?php
                        }
                    ?>

                      <?php if(isset($_SESSION['username']))
                        {
                      ?>
                         <div class="alert alert-primary">
                            <a href="logout">logout</a>
                        </div>
                       <?php
                        }
                    ?>
                    
                    <!--// Search-from -->
                    
                </div>

            </nav>
                
            <!--// top-bar -->
<!--// top-bar -->

           
            <!-- Copyright -->
            <!--<div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
       


    <!-- Required common Js -->
    
    <!-- //Js for bootstrap working -->

