<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Page Title -->
  <title>Mudra</title>
  <!-- / -->

  <!---Font Icon-->
  <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" tppabs="http://adhyasoft.com/themeforest/dome/static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="static/plugin/themify-icons/themify-icons.css" tppabs="http://adhyasoft.com/themeforest/dome/static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
  <!-- / -->

  <!-- Plugin CSS -->
  <link href="static/plugin/bootstrap/css/bootstrap.min.css" tppabs="http://adhyasoft.com/themeforest/dome/static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" tppabs="http://adhyasoft.com/themeforest/dome/static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="static/plugin/magnific/magnific-popup.css" tppabs="http://adhyasoft.com/themeforest/dome/static/plugin/magnific/magnific-popup.css" rel="stylesheet">

  <!-- / -->

  <!-- Theme Style -->
  <link href="static/css/styles.css" tppabs="http://adhyasoft.com/themeforest/dome/static/css/styles.css" rel="stylesheet">
  <link href="static/css/color/default.css" tppabs="http://adhyasoft.com/themeforest/dome/static/css/color/default.css" rel="stylesheet" id="color_theme">
  <!-- / -->
<script src="https://kit.fontawesome.com/bb4960f35e.js"></script>
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" />
  <!-- / -->
  <style type="text/css">
        
.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<!-- Body Start -->
<body data-spy="scroll" data-target="#navbar" data-offset="98">

  
  <!-- Header -->
  <header>
    <nav class="navbar header-nav fixed-top navbar-expand-lg">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php">
          Mudra <span>Deco Grill</span>
        </a>
        <!-- / -->
        <!-- Top Menu -->
        
         

        <!-- / -->

      </div><!-- Container -->
    </nav> <!-- Navbar -->
  </header>
  <!-- Header End -->
<main>
  <section>
  <div class="container"><br/><br/><br/><br/><br/>
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Gallery</h1>
        </div>

        
        <br/>


            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="static/img/photo/img78.jpg" class="img-responsive" height="365" width="365">
                <center><h4>Model:SG01</h4></center>
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="static/img/photo/img80.jpg" class="img-responsive" height="365" width="365">
                <center><h4>Model:SG02</h4></center>
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="static/img/photo/img81.jpg" class="img-responsive" height="365" width="365">
                <center><h4>Model:SG03</h4></center>
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="static/img/photo/img85.jpg" class="img-responsive" height="365" width="365">
                <center><h4>Model:SG04</h4></center>
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="static/img/photo/img61.jpg" class="img-responsive" height="365" width="365">
                <center><h4>Model:SG05</h4></center>
            </div>
            
        </div>
    </div>


<script type="text/javascript">
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>
</section>
</main>
</html>