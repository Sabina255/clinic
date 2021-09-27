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
        <img src="public/images/immunization.jpg" alt=""  style="width:100%; height:50%;">
        <div class="carousel-caption">
          <h2 style="color:black;">Welcome To Loco Health Center Child Welfare Clinic</h2>
          <h3 style="color:black;">MEDICAL CARE</h3>
          <p style="color:black;">You Can Trust Us Because We Care For Your Childs Wellness</p>
          
        </div>
      </div>
    
      <div class="item">
        <img src="public/images/kids-hospital-revealed.jpg" alt="" style="width:100%;height:50%;">
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

    <h2>Our Philosophy</h2>
		

      <p>Loco Health center CWC is committed to providing the highest quality patient care. Our dedication to excellence, compassion and innovation is rooted in our devotion to the art and science of healing, which supports every aspect of our mission and to the care we give to your child.
      Care at CWC on diagnosing and treating children aged (0-58)months, while emphasizing preventative medicine and the overall health and wellness of its patients. The clinic features state of the art equipment and trained staff that will optimize the care of each patient. We understand that there are many factors that can affect health, including non immunized children, diet, environment and heredity.
      Where appropriate, patients will be referred to specialists and/or hospitals for tests, further treatment and therapy.</p>



        <h2>Our mission</h2>

       <p>The mission of CWC in Loco health center is to promote health and wellbeing of all our patients by providing accessible, high-quality medical care for children.Our child welfare clinic is committed to providing services that will exceed the expectations of our patients.
        We believe that optimal health and performance can be attained through the proper balance of care, exercise, nutrition and education. Our goal is to educate our patients as well as treat them. Therefore, our services will also provide group classes for mothers and teaching sessions for the whole family. Topics include nutrition, importance of immunization,exclusive breast feeding for the first 6 months of a childs life, hygiene and much more.
        Our doctors focus on each individual case. After each procedure and where appropriate. Our goal is to create the most well rounded experience for each patient in order to optimize their health.
        CWC in Loco health center maintain privacy according to government regulations and rules. All patients will be welcome.</p>

       <h2>Our Core values</h2>
        <p>
          <ol>
          <li style="font-size: 22px;">&#9745;Integrity</li>
          <li style="font-size: 22px;">&#9745;Excellence</li>
          <li style="font-size: 22px;">&#9745;Teamwork & Collaboration</li>
          <li style="font-size: 22px;">&#9745;Respect</li>
          <li style="font-size: 22px;">&#9745;Compassion</li>
          <li style="font-size: 22px;">&#9745;Innovation</li>
        </ol>
        </p>
</div><br

<div class="col-md-9 col-md-offset-1" style="margin-top: 10px!important;">

        
<?php
require_once("footer.php");
?>




    
