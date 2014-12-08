<?php
  //Verbind database
 // require 'php/db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body
        {
          background-color: Black;
        }
		.plusje{
			color: red;
			margin-top: 10px;
		}
        .container
        {
          width:500px ;
          background-color: transparent;
        }
        .knop
        {
          margin: 5px;
          height: 125px;
          width: 100%;
          font-size: 25px;
          background-color: red;
        }
        .navbar
        {
          background-color: transparent;
          border: none;
        }
		.container-fluid{
		max-height;
  }
        .top
        {
		  
          background-color: grey;
        }
        .mid
        {
           background-color: black;
        }
        .bot 
        {
            background-color: grey;
        }
              #footer {
  /*              position: fixed;*/
        height: 60px;
      }
      #footer {
        background-color: grey;
      }
      #navbar-brand{
        color:red;
      }
      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }
	  #search {

}

#search input[type="text"] {
    background: url(search-white.png) no-repeat 10px 6px #fcfcfc;
    border: 1px solid #d1d1d1;
    font: bold 12px Arial,Helvetica,Sans-serif;
    color: #bebebe;
    width: 150px;
    padding: 6px 15px 6px 35px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
    }

#search input[type="text"]:focus {
    width: 200px;
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <br>
    <br>
      <div class="container">
        <div class="top">
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" Style="color:white; margin-top:10px; font-size:30px">Babysafer</a>
  <span style="color:red; margin-top:7px; margin-left:50px; font-size:50px;" class="glyphicon glyphicon-plus"> </span>
  </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">       
        <li class="">
          <a href="tel:112" style="color:white;" class=""><img src="naamloos.png" height="50px" ></a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>
      <div class-"mid">
<div class="row">
        <div class="col-md-6">
           <button type="button" class="btn btn-danger knop">  </button></a>
          </div>
		          <div class="col-md-6">
          <button type="button" class="btn btn-danger knop">  </button></a>
          </div></div>
		  <div class="row">
		          <div class="col-md-6">
          <button type="button" class="btn btn-danger knop">  </button></a>
          </div>
		          <div class="col-md-6">
            <button type="button" class="btn btn-danger knop">  </button></a>
          </div></div>
		  <div class="row">
		            <div class="col-md-12">
             <button type="button" class="btn btn-danger knop"> </button></a>
           </div>
		   </div>
      </div> <!-- Einde mid -->
      <div class="bot">
    <div id="footer">
      <div class="container" >
        <center>
      <form id="searchbox" action="">
    <input id="search" type="text" placeholder="Type here">
    <input id="submit" type="submit" value="Search">
</form>

            <!--<button type="submit" class="glyphicon glyphicon-search" style='height: 35px; margin-top:2px;'></button>-->
          </form>
        </center>
      </div>
    </div>

     
      </div> <!-- Einde bot -->

      </div> <!-- Einde container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>