<?php 
    //start a session - users browser
    session_start();
    //setting a cookie
    $sessionID = session_id(); //storing session id
    setcookie("session_id",$sessionID,time()+3600,"/","localhost",false,true); //cookie terminates after 1 hour - HTTP only flag
    
?>

<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script type="text/javascript" src="configuration.js"> </script>
    </head>
    <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cross-Site Request forgery protection using Syncronizer Token</a>
        </div>
       
      </div>
    </nav>
    <div class="container-fluid main">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-6 col-sm-4 col-xs-12 form-container">
               <div class="panel panel-info ">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Log In Form </h3>
                    </div>

                    <div class ="panel-body">
                        <div class="col-md-5">
                            <img src="giphy.gif" width="200" heigt="100"/>
                        </div>
                        <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
                            <form class="form-horizontal" method="POST" action="projectFunctions.php" >
                                <input name="user_name" type="text" placeholder="Enter User Name" class="form-control input-md"><br/>
                                <input name="user_pswd" type="password" placeholder="Enter your password" class="form-control input-md">
                                <div class="spacing"><input type="hidden" id="csToken" name="CSR"/></div>
                                <input type="submit" name="sbmt" value="Log In" class="btn btn-info btn-sm pull-right">
                            </form>
                        </div>
                    </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>    
        </div>
        
        <?php 

         if(isset($_COOKIE['session_id']))
         { 
             echo ' <script type="text/javascript" src="configuration.js"> loadDOC("POST","projectFunctions.php","csToken")  </script> ';   

          }
        ?>
        
        
        
        
      <hr>

      <footer>
        <p>&copy; Secure Software Systems</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
