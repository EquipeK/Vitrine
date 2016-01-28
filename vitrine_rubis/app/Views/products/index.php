<link href="http://127.0.0.1/wds_rubis/vitrine_rubis/web/css/masonry/responsive.css" rel="stylesheet">
        <!-- stylesheets -->
        <link rel="stylesheet" href="http://127.0.0.1/wds_rubis/vitrine_rubis/web/css/masonry/grid.css" />
        <link rel="stylesheet" href="http://127.0.0.1/wds_rubis/vitrine_rubis/web/css/masonry/style.css" />   
        <link rel="stylesheet" href="http://127.0.0.1/wds_rubis/vitrine_rubis/web/css/masonry/darkgreen.css" />
        <link rel="stylesheet" href="http://127.0.0.1/wds_rubis/vitrine_rubis/web/css/masonry/prettyPhoto.css" media="screen" />
        <link rel="stylesheet" href="http://127.0.0.1/wds_rubis/vitrine_rubis/web/css/masonry/responsive.css" />

        <!-- google web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- Icons -->
        <link rel="stylesheet" href="pixons/style.css" />
        <link rel="stylesheet" href="iconsfont/iconsfont.css" />
        
        <link rel="stylesheet" href="style-switcher/styleSwitcher.css"/>


<div class="row portfolioitems-holder">
                        <ul id="portfolioitems" class="grid_12 isotope masonry gallery">
 						<?php foreach ($products as $product): ?>

							<!--<h2><?= $product->name; ?></a></h2>
						    <p><?= $product->reference; ?></p>-->
                            <li class="isotope-item design wh<?= rand(1, 3) ?>">

                                <figure class="portfolio-style-2">

                                    <div class="portfolio-img">
                                        <a href="portfoliosingle.html">
                                                  <img src="<?php echo $product->path; ?>" alt="portofolio-image" />

                                        </a>

                                        <div class="portfolio-img-hover">
                                            <div class="mask"></div>

                                            <ul>
                                                <li class="portfolio-zoom">
                                                    <a href="img/portfolio/large/portfolio-1.jpg" 
                                                       data-gal="prettyPhoto[pp_gallery]" class="icon-search"></a>
                                                </li>
                                            </ul>
                                        </div><!-- .portfolio-img-hover end -->
                                    </div><!-- .portfolio-img end -->
                                </figure><!-- .portfolio-style-1 end -->  

                            </li><!-- .isotope-item.design end -->
						<?php endforeach; ?>


 <script  src="js/jquery-1.9.1.js"></script> <!-- jQuery library -->  
        <script  src="js/masonry/jquery-migrate-1.2.1.js"></script> <!-- jQuery library --> 
        <script  src="js/masonry/jquery.placeholder.min.js"></script><!-- jQuery placeholder fix for old browsers -->
        <script  src="js/masonry/jquery.tweetscroll.js"></script> <!-- jQuery tweetscroll plugin -->      
        <script  src="js/masonry/jquery.isotope.min.js"></script> <!-- jQuery isotope -->
        <script  src="js/masonry/portfolio.js"></script> <!-- jQuery portfolio options -->
        <script  src="js/masonry/jquery.prettyPhoto.js"></script> <!-- prettyPhoto lightbox -->
        <script  src="js/masonry/modernizr.custom.js"></script> <!-- jQuery custom options -->
        <script  src="js/masonry/jquery.dlmenu.js"></script><!-- responsive navigation -->
        <script  src="style-switcher/styleSwitcher.js"></script>
        <script  src="js/masonry/include.js"></script> <!-- jQuery custom options -->

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
