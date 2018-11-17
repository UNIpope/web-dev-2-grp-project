<!--trying to fix the navbar-->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




  <style type="text/css">
    


    body
    {
        font-family: "Courier New";
    }
    .navbar
    {
        /*set the background colour pink*/
        background-color: pink;
        margin-bottom: 0; 
        border: 0;
        font-size: 16px !important;
        letter-spacing: 4px;
    }
    .navbar li a, .navbar .navbar-brand
    {
        /*change colour of the text*/
        color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a
    {
        /*hovering = letters change to pink*/
        color: pink !important;
        /*when hovering over  background turns white*/
        background-color: #fff !important;
    }
    .navbar-default .navbar-toggle
    {
        border-color: transparent;
        color: #fff !important;
    }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">CONEction</a>
      </div>


      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#scoop">SCOOP</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="IceCreamCart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>

                <li>
                  <form class="navbar-form navbar-right " action="#">
                    
                      <div class="input-group" >
                      <input type="text" class="form-control" placeholder="Search" >
                      <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </div>
                  
                    
                    </div>
                    
                  </form>
                </li>
        </ul>
      </div>
    </div>
  </nav>
   
</body>
</html>
