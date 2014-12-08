<?php
  //Verbind database
  require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        body
        {
          background-color: white;
        }
        .container
        {
          width: 500px;
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

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
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
              <a class="navbar-brand" href="#">Babysafer</a>   
            </div>
            <span style="height" class="glyphicon glyphicon-plus"></span>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="tel: 112">Bel 112</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div><!--  Einde Top -->
      <div class-"mid">



      	<?php


      	if(isset($_GET['type']))
      	{
      		if(isset($_GET['id']))
      		{
      			$id = $_GET['id'];

      			echo $_GET['type'] . "<br>" . $_GET['id'];

      			if($_GET['type'] == "cat")
      			{
      				$tabel = "cat";
      				$type_id = "cat_id";


              include 'type/cat.php';

      			}
      			else if($_GET['type'] == "pro")
      			{
      				$tabel = "probleem";
      				$type_id = "probleem_id";
              include 'type/pro.php';
            
      			}
      			else if($_GET['type'] == "sub")
      			{
      				$tabel = "subcat";
      				$type_id = "subcat_id";
              include 'type/sub.php';

      			}

          }
        }


      	?>














      </div> <!-- Einde mid -->
      <div class="bot">
    <div id="footer">
      <div class="container">
         <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
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