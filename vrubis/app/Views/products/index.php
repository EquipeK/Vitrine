<?= App::setTitle('Rubis|Catalogue des produits'); ?>
<link href="http://127.0.0.1/vrubis/web/css/masonry/responsive.css" rel="stylesheet">
<!-- stylesheets -->
<link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/grid.css" />
<link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/style.css" />   
<link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/darkgreen.css" />
<link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/prettyPhoto.css" media="screen" />
<link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/responsive.css" />
<!-- google web fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!-- Icons -->
<link rel="stylesheet" href="pixons/style.css" />
<link rel="stylesheet" href="iconsfont/iconsfont.css" />
<link rel="stylesheet" href="style-switcher/styleSwitcher.css"/>
<!-- .container start -->
<section class="container">
    <!-- .row start -->
    <div class="row portfolio-filters">
        <section class="grid_12">
            <ul id='filters'>
                <li class="active"><a href="index#" data-filter="*">Tous les produits</a></li>
                <li><a href="#" data-filter=".Homme">Homme</a></li>
                <li><a href="#" data-filter=".Femme">Femme</a></li>
                <li><a href="#" data-filter=".Enfant">Enfant</a></li>
            </ul><!-- #filers end -->
        </section><!-- .grid_12 end -->
    </div><!-- .row end -->
    <!-- .row.portfolioitems-holder start -->
    <div class="row portfolioitems-holder">
        <ul id="portfolioitems" class="isotope masonry">
            <?php foreach ($products as $product): ?>
                <li class="isotope-item design wh<?= rand(1, 3) ?>">
                    <figure class="portfolio-style-2">
                        <div class="portfolio-img">
                            <a href="portfoliosingle.html">
                                <img src="<?php echo $product->path; ?>" alt="portfolio image"/>
                            </a>
                            <div class="portfolio-img-hover">
                                <div class="mask"></div>
                                <ul>
                                    <li class="portfolio-zoom">
                                        <a href="img/portfolio/large/portfolio-1.jpg" 
                                           data-gal="prettyPhoto[pp_gallery]" class="icon-search"></a>
                                    </li>
                                    <li class="portfolio-single">
                                        <a href="portfoliosingle.html" class="icon-link"></a>
                                    </li>
                                </ul>
                            </div><!-- .portfolio-img-hover end -->
                        </div><!-- .portfolio-img end -->
                        <figcaption>
                            <a class="title" href="portfoliosingle.html">Portfolio Project Title</a>
                            <span class="subtitle">Design</span>
                        </figcaption>
                    </figure><!-- .portfolio-style-1 end -->  
                </li><!-- .isotope-item.design end -->
            <?php endforeach; ?>
        </ul><!-- #portfolioitems .isotope end -->
    </div><!-- .row.portfolioitems-holder end -->
    <!-- pagination products start -->
    <div class="container-fluid">
        <!-- .row start -->
        <div class="row">
            <!-- ..col_12 start -->
            <div class="col-xs-12 col-sm-12 col-md-12 pagin-products">
                <ul class="pagination">
                <li><a href="#">3</a></li>
                <li class="next"><a href="#">next</a></li>
            </ul><!-- pagination end --> 
            </div><!-- ..col_12 end -->
        </div><!-- .row end -->   
    </div><!-- .container-fluid header-title end -->
    <!-- .row start -->
    <div class="row">
        <div class="grid_1">                   
            <!-- .pagination start -->
            <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next"><a href="#">next</a></li>
            </ul><!-- pagination end -->                        
        </div><!-- .grid_12 end -->
    </div><!-- .row end -->
</section><!-- #container end -->                
<!-- scripts -->
<script  src="js/jquery-1.9.1.js"></script> <!-- jQuery library -->  
<script  src="js/jquery-migrate-1.2.1.js"></script> <!-- jQuery library -->
<script  src="js/jquery.placeholder.min.js"></script><!-- jQuery placeholder fix for old browsers -->
<script  src="js/jquery.tweetscroll.js"></script> <!-- jQuery tweetscroll plugin -->      
<script  src="js/jquery.isotope.min.js"></script> <!-- jQuery isotope -->
<script  src="js/portfolio.js"></script> <!-- jQuery portfolio options -->
<script  src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto lightbox -->
<script  src="js/modernizr.custom.js"></script> <!-- jQuery custom options -->
<script  src="js/jquery.dlmenu.js"></script><!-- responsive navigation -->
<script  src="style-switcher/styleSwitcher.js"></script>
<script  src="js/include.js"></script> <!-- jQuery custom options -->
<script>
    /* <![CDATA[ */
    jQuery(document).ready(function($) {
        'use strict';

        // PRETTYPHOTO LIGHTBOX START
        if (jQuery().prettyPhoto) {
            piPrettyphoto();
        }

        function piPrettyphoto() {
            $("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools: false});
        }// PRETTYPHOTO LIGHTBOX END

        // NEWSLETTER FORM AJAX SUBMIT
        $('.newsletter .submit').on('click', function(event) {
            event.preventDefault();
            var email = $('.email').val();
            var form_data = new Array({'Email': email});
            $.ajax({
                type: 'POST',
                url: "contact.php",
                data: ({'action': 'newsletter', 'form_data': form_data})
            }).done(function(data) {
                alert(data);
            });
        });
        
    });
    /* ]]> */
</script>
