
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lelang | BPR Danamas Belu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://bprdanamasbelu.com/page/view/14--lelang" />

    <meta name="title" content="Lelang | BPR Danamas Belu" />
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
    <meta property="og:title" content="Lelang | BPR Danamas Belu" name="title"/>
    <meta property="og:description" name="description" content="Official Website of BPR Danamas Belu" />
    <meta property="og:url" name="url" content="https://bprdanamasbelu.com/page/view/14--lelang" />
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
                                <li>Informasi</li>
                            </ul>
                        </nav>
                        <div class="main-title">
                            <h1 class="title">Lelang</h1>
                        </div>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <section class="content-wrap">
            <div class="container">
                <div class="row">
                    <?php  
                    include 'informasi_aside.php';
                    ?>
                    <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12">
                        <article class="single-post">
                            <p>Content Lelang</p>                    
                        </article>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </section>
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
