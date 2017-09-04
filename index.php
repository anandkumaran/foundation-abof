<!DOCTYPE html> 
<html>
<head> 
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="css/custom-styles.css">
	<title>Sass - foundation</title>
</head>
<body>
  
<nav class="top-bar" data-topbar role="navigation"> 

  <ul class="title-area"> 
    <li class="name"> <h1><a href="#">My Site</a></h1> </li>
   <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone --> 
   <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li> 
  </ul> 

  <section class="top-bar-section"> <!-- Right Nav Section --> 
   <ul class="right"> 
     <li class="active">  <a href="#" data-reveal-id="myModal">Click Me For A Modal</a> </li> 
     <li class="has-dropdown"> <a href="#">Right Button Dropdown</a>
      <ul class="dropdown"> <li><a href="#">First link in dropdown</a></li> 
      <li class="active"><a href="#">Active link in dropdown</a></li> 
      </ul> 
    </li> 
  </ul> <!-- Left Nav Section --> 

    <ul class="left"> <li><a href="contactus.php">Contact Form demo</a></li> 
    </ul> 
  </section> 
  
</nav>

<div class="row">
 <div class="large-6 medium-8 small-12 column small-centered">
  <div class="icon-bar five-up">
      <a class="item">
        <i class="fi-home"></i>
      </a>
      <a class="item">
        <i class="fi-bookmark"></i>
      </a>
      <a class="item">
        <i class="fi-info"></i>
      </a>
      <a class="item">
        <i class="fi-mail"></i>
      </a>
      <a class="item">
        <i class="fi-like"></i>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="large-8">
    <ul class="accordion" data-accordion="myAccordionGroup" id="myAccordionGroup">
      <li class="accordion-navigation">
        <a href="#panel1a">Accordion 1</a>
        <div id="panel1a" class="content active">
          Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </li>
      <li class="accordion-navigation">
        <a href="#panel2a">Accordion 2</a>
        <div id="panel2a" class="content">
          Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </li>
      <li class="accordion-navigation">
        <a href="#panel3a">Accordion 3</a>
        <div id="panel3a" class="content">
          Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </li>
</ul>
</div>
</div>

<br><br>

  <div id="myModal" class="reveal-modal" data-reveal> 
     <h2>Awesome. I have it.</h2> 
     <p class="lead">Your couch. It is mine.</p>
      <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p> 
      <a class="close-reveal-modal">&#215;</a> 
  </div>

<br><br>
<div class="row">
  <div class="large-4 columns">
      <div class="row collapse">
        <div class="large-2 small-3 columns">
        <span class="prefix white" style="background-color: rgb(43, 166, 203); border-color: rgb(39, 150, 183); color: rgb(51, 51, 51);">#</span>
        </div>
      <div class="large-10 small-9 columns">
        <input type="text" class="color-picker" maxlength="7" name="scss_settings[primary-color]" id="primary-color" placeholder="Hex" value="2ba6cb">
      </div>
    </div>  
  </div>
</div>

     <div class="row">
       <div class="large-12 columns">
        <div class="panel">
          <h3>We're stoked you want to try Foundation! </h3>
         <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
 
          <div class="row">
          <div class="large-12 columns">
            <div class="callout panel">
              <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="large-6 medium-6 columns">
            <div class="callout panel">
              <p>Six columns</p>
            </div>
          </div>
          <div class="large-6 medium-6 columns">
            <div class="callout panel">
              <p>Six columns</p>
            </div>
          </div>
        </div>

         </div>
       </div>
     </div>
    
    <div class="row">
      <div class="large-8 columns">
        <form>
          <div class="row">
            <div class="large-4 columns">
              <label>First name</label>
              <input type="text">
            </div>
            <div class="large-4 columns">
              <label>Last name</label>
              <input type="text">
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <a href="#" class="small button">Button</a>
              <a href="#" class="small button radius">Button</a>
              <a class="medium success button" href="#">Success Btn</a>
            </div>
          </div>

        </form>
      </div>
    </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/foundation.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
  <script>
 
      $(document).foundation({
          accordion: { 
            callback : function (accordion) {
              // console.log(accordion);
            }
          }
      });
    </script>

<script src="//localhost:35729/livereload.js"></script> 

</body>
</html>
 