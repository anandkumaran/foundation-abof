<!DOCTYPE html> 
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/custom-styles.css">
	<title>Sass</title>
</head>
<body>
<header>
<nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Display FlexBox</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
</header>

<div class="content-panel">
	<div class="row">
        <div class="col-sm-8"> 
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="display-row thead">
                <div class="display-cell no">#</div>    
                <div class="display-cell fn">First Name</div>    
                <div class="display-cell ln">Last Name</div>    
                <div class="display-cell company">Company</div>    
                <div class="display-cell address">Address</div>    
                <div class="display-cell location">Location</div>    
             </div>
            </div>
            <div class="panel-body">
             <div class="display-row tbody">
                <div class="display-cell no">1</div>    
                <div class="display-cell fn">Anand</div>    
                <div class="display-cell ln">Vijay</div>    
                <div class="display-cell company">Neev Tech</div>    
                <div class="display-cell address">no 6. vivekananda street, 4th main road, 5th cross</div>    
                <div class="display-cell location">United state of america</div>    
             </div>
             
             <div class="display-row tbody">
                <div class="display-cell no">2</div>    
                <div class="display-cell fn">Rajesh</div>    
                <div class="display-cell ln">Gowda</div>    
                <div class="display-cell company">razorfish private limited</div>    
                <div class="display-cell address">no 6. vivekananda street, 4th main road, 5th cross</div>    
                <div class="display-cell location">Bengaluru</div>    
             </div>

             <div class="display-row tbody">
                <div class="display-cell no">3</div>    
                <div class="display-cell fn">Anand</div>    
                <div class="display-cell ln">Vijay</div>    
                <div class="display-cell company">Neev Tech</div>    
                <div class="display-cell address">no 6. vivekananda street, 4th main road, 5th cross</div>    
                <div class="display-cell location">United state of america</div>    
             </div>
             
             <div class="display-row tbody">
                <div class="display-cell no">4</div>    
                <div class="display-cell fn">Rajesh</div>    
                <div class="display-cell ln">Gowda</div>    
                <div class="display-cell company">razorfish private limited</div>    
                <div class="display-cell address">no 6. vivekananda street, 4th main road, 5th cross</div>    
                <div class="display-cell location">Bengaluru</div>    
             </div>


             <div class="display-row tbody">
                <div class="display-cell no">5</div>    
                <div class="display-cell fn">Anand</div>    
                <div class="display-cell ln">Vijay</div>    
                <div class="display-cell company">Neev Tech</div>    
                <div class="display-cell address">no 6. vivekananda street, 4th main road, 5th cross</div>    
                <div class="display-cell location">United state of america</div>    
             </div>
             
             <div class="display-row tbody">
                <div class="display-cell no">6</div>    
                <div class="display-cell fn">Rajesh</div>    
                <div class="display-cell ln">Gowda</div>    
                <div class="display-cell company">razorfish private limited</div>    
                <div class="display-cell address"> ssssssssssssssssssssssssssssssdddddddddddddddddddaaaaaaaaaaaaaaaaaaaaaaajjjjjjjjjjjjjjjjjjjjjjjjjlllllllllllllkkkkkkkkkkkkkkkkkkkkkzzzzzzzzzzzzzzzzzzzzzyyyyyyyyyyyyyyyyyyyyytttttttttttttttttttttttt</div>    
                <div class="display-cell location">Bengaluru</div>    
             </div>

            </div>
          </div>
        </div>  
    </div>
</div>
	 <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<script src="//localhost:35729/livereload.js"></script> 

</body>
</html>
 