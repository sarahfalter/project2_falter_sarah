<style type="text/css">
* {
	margin: 0;
	padding: 0;
	border: 0;
}

body{
  font-family: 'Lato', sans-serif;
	color: #E0E0E0;
  background:  #08161c;
  flex: 1 0 auto;
  margin-top: -13px;
  position: relative;
  z-index: 1;
}
a {
	text-decoration: none;
  color: #fff;
}

.desktop-right {
  float: right;
  margin-top: 1%;
  width: 33%;
}

.desktop-menu li {
  display: inline;
}

.desktop-menu li a {
  text-decoration: none;
  color: white;
  font-weight: lighter;
  padding: 5px 4%;
}

.desktop-menu li a:hover {
background: white;
color: black;
}
.desktop-menu li a:active {
border-bottom: 1px solid white;
color: #C6CAFF;
}

.container {
  margin: 0 auto;
  text-align: center;
}

footer {
	flex-shrink: 0;
}
</style>


<div class="desktop-right">
  <nav class="desktop-menu">
    <ul>
     <li><a href="index.html">Home</a></li>
     <li><a href="portfolio.html">Portfolio</a></li>
     <li><a href="about.html">About</a></li>
     <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
 </div>

<div class="container">
 <h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

</div>

<footer>
 <ul>
   <li><a href="https://instagram.com/artbysarahkate" class="fab fa-instagram"></a><li>
   <li><a href="https://www.linkedin.com/in/sarah-falter" class="fab fa-linkedin-in"></a></li>
   <li><a href="mailto:sarah.falter@ufl.edu" class="fas fa-envelope"></a><li>
  </ul>
 <p>&copy; Sarah Falter 2021 All Rights Reserved</p>

</footer>
