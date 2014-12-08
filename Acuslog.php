<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Acus</title>   
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">   
    <link href="Login.css" rel="stylesheet"> 
	<link href="Acus.css" rel="stylesheet">	
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	<script src="Functies.js"></script>
 
  </head>

  <body>
  
	<?php
	// Connect met php bestand
	require "Sql.php";
	?>




          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  modal 1
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

       

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default " role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/Acus/Acus.php"></span><span class="glyphicon glyphicon-random"> Acus</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

            	<!-- Welkom -->
<li class="dropdown">
                <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Welkom <span class="caret"></span></span></a>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->


    </div> <!-- /container -->
	
	            <div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-1">
				</div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-print"></br>Printers</button>
                </div>

      
                <div class="col-md-2">
                    <button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-list-alt"></br>Roosters</button>
                </div>
				<div class="col-md-2">
                    <button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-th-large"></br>Office</button>
                </div>
								<div class="col-md-2">
				</div>


            </div>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-1">
				</div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></br>Ziekmelden</button>
                </div>
                
                <div class="col-md-2">
                    <button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-folder-open"></br>Programma's</button>
                </div>
				<div class="col-md-2">
                    <button type="button" class="btn btn-info btn-lg knop" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></br>Docenten</button>
                </div>
								<div class="col-md-2">
				</div>


            </div>

			<!-- De Plus button Voor als je ingelogd bent -->
				
				<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-1">
				</div>
                <div class="col-md-2">//
				<button type="button" class="btn btn-success btn-lg add "><span class="glyphicon glyphicon-plus"></br></button>
                </div>
				</div>     
            
            
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="Bootstrapjs/bootstrap.min.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>