
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BPR Danamas Belu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://bprdanamasbelu.com/simulation" />

    <meta name="title" content="BPR Danamas Belu" />
    <meta name="description" content="Official Website of BPR Danamas Belu" />
    <meta name="keywords" content="bprdanamasbelu" />

    <meta name="google-site-verification" content="" />

    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="revisit-after" content="2 days" />
    <meta name="author" content="4 Vision Media">
    <meta name="expires" content="never" />

    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="BPR Danamas Belu" name="title"/>
    <meta property="og:description" name="description" content="Official Website of BPR Danamas Belu" />
    <meta property="og:url" name="url" content="https://bprdanamasbelu.com/simulation" />
    <meta property="og:site_name" content="BPR Danamas Belu" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Official Website of BPR Danamas Belu" />
    <meta name="twitter:title" content="BPR Danamas Belu" />

    <meta name="keywords" content="bprdanamasbelu" />

    <link rel="icon" href="img/favicon.ico" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="css/socicons.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">  
    <link rel="stylesheet" type="text/css" href="css/lightgallery.css">    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://bprdanamasbelu.com/tmplts/danamas/assets/js/jQuery.scrollSpeed.js"></script> -->



</head>

<body>

    <div id="main">

        <?php  
        include 'header.php';
        ?> 

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <nav class="breadcrumb-nav">
                    <ul class="breadcrumb">
                        <li><a href="https://bprdanamasbelu.com/">Beranda</a></li>
                        <li>Layanan</li>
                    </ul>
                </nav>
                <div class="main-title">
                    <h1 class="title">Simulasi Kredit</h1>
                </div>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<section class="content-wrap calc-simulation">
    <div class="container" id="flat">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5">
                <div class="form-simulation">
                    <div class="main-title">
                        <div class="subtitle">Kalkulator</div>
                        <h3 class="title">Simulasi<br>Kredit</h3>
                    </div>
                    <form method="POST" class="clearfix needs-validation" novalidate="" action="">
                        <div class="form-group">
                            <label class="text-label">Plafon</label>
                            <input id="plafon" class="form-control" type="text" placeholder="Contoh 5.000.000" onkeyup="splitInDots(this)" required name="plafon">
                        </div>
                        <div class="form-group">
                            <label class="text-label" for="bunga">Bunga /Bulan (%)</label>
                            <input id="bunga" class="form-control" type="text" placeholder="Contoh 1.25" required name="interest">
                        </div>
                        <div class="form-group">
                            <label class="text-label" for="tenor">Jangka Waktu (Bulan)</label>
                            <input id="tenor" class="form-control" type="text" placeholder="Contoh 12" required name="tenor">
                        </div>
                        <button class="btn btn-submit" type="submit">Simulasi Kredit</button>
                    </form>
                </div><!-- form-simulation -->
            </div><!-- col -->
            <div class="simulasi-result col-lg-6 col-lg-offset-2 col-md-6 col-md-offset-2 col-sm-7">
                <div class="main-title">
                    <div class="subtitle">Kalkulator</div>
                    <h3 class="title">Hasil<br>Simulasi Kredit</h3>
                </div>
                <ul class="simulation-data">
                    <li>
                        <span class="text-label">Angsuran Detail</span>
                        <div class="data-value"><span>Rp</span><span class="value">xxx.xxx.xxx</span></div>
                    </li>
                    <li>
                        <span class="text-label">Bunga /Bulan (%)</span>
                        <div class="data-value"><span class="value">x.xx</span><span>%</span></div>
                    </li>
                    <li>
                        <span class="text-label">Angsuran /Bulan</span>
                        <div class="data-value"><span>Rp</span><span class="value">xx.xxx</span></div>
                    </li>
                </ul>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<script>
    $("div#flat form button").click(function(e) {
       e.preventDefault();
	    //var $div = $("div#flat");
	    var plafon = $("div#flat input[name=plafon]").val();//alert($plafon);
	    var interest = $("div#flat input[name=interest]").val();//alert($plafon);
	    var tenor = $("div#flat input[name=tenor]").val();//alert($plafon);
	    if (plafon != '' && interest != '' && tenor !='') {

          $.ajax({
              type    : "POST",
              url     : "https://bprdanamasbelu.com/simulation/process",
              data    : "answer=1&id=flat&plafon="+plafon+"&interest="+interest+"&tenor="+tenor,
              success : function(data) {
				    $(".loading").fadeOut(1000);       // loading to server done

				    //if (data == '1') {//alert($expl[0]);
				    	$("#flat .simulasi-result").html(data)
				    /*}
				    else 
                        alert('Error occured, please contact the webmaster');*/
                }
            })
      }
  })


		//VALIDATION FORM
		(function() {
            'use strict';
            window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
               form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
              }
              form.classList.add('was-validated');
          }, false);
           });
        }, false);
        })();

    //split dots
    function reverseNumber(input) {
        return [].map.call(input, function(x) {
            return x;
        }).reverse().join(''); 
    }
    function plainNumber(number) {
        return number.split('.').join('');
    }
    function splitInDots(input) {
        var value = input.value,
        plain = plainNumber(value),
        reversed = reverseNumber(plain),
        reversedWithDots = reversed.match(/.{1,3}/g).join('.'),
        normal = reverseNumber(reversedWithDots);
        //console.log(plain,reversed, reversedWithDots, normal);
        input.value = normal;
    }
    
</script>
<?php  
include 'footer.php';
?>

</div><!-- main -->

<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/classiee.js"></script>
<script src="js/AnimOnScroll.js"></script>
<script src="js/lightgallery.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>

<script src="js/fill.box.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/main.js"></script>
<script>

//latest article
$(".latest-article .swiper-container").each(function(){
    new Swiper($(this), {
        speed: 600,
        slidesPerView: 4,
        spaceBetween: 2,
        autoplayDisableOnInteraction: false,
        nextButton: $(this).parents().eq(2).find(".swiper-button-next"),
        prevButton: $(this).parents().eq(2).find(".swiper-button-prev"),
        preloadImages: true,
        loop: true,
        simulateTouch: false,
        breakpoints:{
            1280:{
                slidesPerView: 3
            },
            991:{
                slidesPerView: 2
            },
            768:{
                slidesPerView: "auto"
            }
        }
    });
});

</script>
<script>

    //animscroll
    new AnimOnScroll( document.getElementById("masonry"), {
        minDuration : 0,
        maxDuration : 0,
        viewportFactor : 0
    });
    
    //gallery
    $(".gallery").lightGallery({
        selector: ".gallery-item",
        zoom: true,
        cssEasing : "cubic-bezier(.4, 0, .2, 1)",
        speed: 400
    });
    
</script>
</body>
</html>
