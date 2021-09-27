<?php
require_once("header.php");
$con = new connect();
$query = "SELECT * FROM users where role_id!=1";
$doctors= $con->getData($query);

?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 40px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="public/images/fwc-main.jpg" alt=""  style="width:100%; height:50%;">
        <div class="carousel-caption">
          <h2 style="color:black;"></h2>
          <h3 style="color:black;"></h3>
          <p style="color:black;"></p>
          
        </div>
      </div>
    
      <div class="item">
        <img src="public/images/nurse1.jpg" alt="" style="width:100%;height:50%;">
        <div class="carousel-caption">
         <h3 style="float:left;color:black;">QUALIFIED DOCTORS</h3><br>
         <p style="color:cyan;"></p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="jumbotron" style="margin-top: 80px; ">
	<center>
    <h2>Our Contact Details</h2>
		<p style="font-size: 20px;"><b>Phone:</b>  0746682524</p>
    <p style="font-size: 20px;"><b>Email:</b>  info@childwelfareclinic.com</p>
		<p style="font-size: 20px;"><b>Website:</b> www.childwelfareclinic.com </p>
	</center>

</div><br

<div class="row service-v1 margin-bottom-40">
            
<?php
require_once("footer.php");
?>