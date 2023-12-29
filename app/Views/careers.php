<style type="text/css">
  
  .wrapper {
  display: block;
  margin-top: 100px;
  margin-left: 100px;
  width: 435px;
  height: 260px;
  position: relative;
  padding: 10px;
}

.orange-border {
  background-color: #FF8D00;
  background-image: linear-gradient(130deg, #bf925b, #fbf000);
  position: absolute;
}

.orange-top {
  width: 100px;
  height: 10px;
  top: 0;
  left: 0;
}

.orange-left {
  width: 10px;
  height: 100px;
  top: 0;
  left: 0;
}

@keyframes leftgrow {
  0% { 
    height: 100px; 
    width: 10px;
  }
  40% { 
    height: 100%; 
    width: 10px;
  }
  100% { 
    width: 100%; 
    height: 100%;
  }
}

@keyframes leftshrink {
  0% { 
    width: 100%; 
    height: 100%;
  }
  60% { 
    height: 100%; 
    width: 10px;
  }
  100% { 
    height: 100px; 
    width: 10px;
  }
}

@keyframes topgrow {
  0% { 
    width: 100px;
    height: 10px;
  }
  60% { 
    width: 100%; 
    height: 10px;
  }
  100% { 
    width: 100%; 
    height: 100%;
  }
}

@keyframes topshrink {
  0% { 
    width: 100%;
    height: 100%;
  }
  40% { 
    width: 100%; 
    height: 10px;
  }
  100% { 
    width: 100px; 
    height: 10px;
  }
}

.orange-left.grow { animation: leftgrow .5s forwards; }
.orange-left.shrink { animation: leftshrink .5s forwards; }
.orange-top.grow { animation: topgrow .5s forwards; }
.orange-top.shrink { animation: topshrink .5s forwards; }

.white-card {
  display: block;
  text-decoration: none;
  position: absolute;
  background-color: white;
  left: 10px;
  top: 10px;
  width: calc(100% - 20px);
  height: calc(100% - 20px);
  text-align: center;
  box-shadow: 0 10px 40px 0 rgba(0,0,0,.2);
}

.white-card img {
  width: 64px;
  margin-top: 20px;
}

.category {
  font-size: 18px;
  color: #222;
  font-weight: 700;
  margin: 20px 0 30px;
}

.CTA {
  text-decoration: none;
  text-transform: uppercase;
  padding: 11px 40px 13px;
  color: #BF925B;
  font-size: 14px;
  line-height: 16px;
  letter-spacing: 1px;
  font-weight: 600;
  border: 2px solid #BF925B;
  display: inline-block;
  transition: all .5s;
}


.CTA.active {
  background-color: #bf925b;
  color: white;
}


</style>

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/banner-1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center">
<h2 class="mb-0 bread">Careers</h2>
<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Join Rooom Mobile Salon Professionals</span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section">
  <div class="container">
<div class="row justify-content-center pb-3">
<div class="col-md-10 heading-section text-center ftco-animate">
<span class="subheading">Careers</span>
<h2 class="mb-4">Rooom Mobile Salon Careers</h2>
<p>Join Our Mobile Salon Specialists</p>
</div>
</div>

<!--  -->

<div class="row no-gutters d-flex">
<div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
<div class="wrapper">
    <div class="orange-top orange-border"></div>
    <div class="orange-left orange-border"></div>
    <a id="job" class="white-card" href="#job-application">
      <img src="assets/images/hairdresser.png" alt="Hairdresser"/>
      <p class="category">Hairdresser</p>
      <span class="CTA">Apply</span>
    </a>
  </div>
</div>
<div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
 <div class="wrapper">
    <div class="orange-top orange-border"></div>
    <div class="orange-left orange-border"></div>
    <a id="nail" class="white-card" href="#job-application">
      <img src="assets/images/nail-polish.png" alt="Design"/>
      <p class="category">Nail Technician</p>
      <span class="CTA">Apply</span>
    </a>
  </div>
</div>


</div>
<!-- ./ -->

 
  <!--  -->
  
  <!--  -->
  </div>
</section>
<?php include "job_application.php"; ?>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#job-application').hide();
    });
    $('#job').click(function(){
       $('#speciality').html('Apply As A Hairdresser');
       $('#job-application').show();

    });
    $('#nail').click(function(){
       $('#speciality').html('Apply As A Nail Technician');
       $('#job-application').show();
    });
    $('.white-card').mouseenter(function(){
      $('.orange-border').removeClass('shrink');
      $('.orange-border').addClass('grow');
      $('.CTA').addClass('active');
    });

    $('.white-card').mouseleave(function(){
      $('.orange-border').removeClass('grow');
      $('.orange-border').addClass('shrink');
      $('.CTA').removeClass('active');
    });

</script>