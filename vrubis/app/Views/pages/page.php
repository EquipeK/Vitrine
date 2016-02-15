    <?= App::setTitle('Rubis|Accueil du site vitrine'); ?>
    <!-- masonry css -->    
    <link href="http://127.0.0.1/vrubis/web/css/masonry/responsive.css" rel="stylesheet">
    <!-- massonry stylesheets -->
    <link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/grid.css" />
    <link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/style.css" />   
    <link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/darkgreen.css" />
    <link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/prettyPhoto.css" media="screen" />
    <link rel="stylesheet" href="http://127.0.0.1/vrubis/web/css/masonry/responsive.css" />
    <!-- Icons -->
    <link rel="stylesheet" href="pixons/style.css" />
    <link rel="stylesheet" href="iconsfont/iconsfont.css" />
    <link rel="stylesheet" href="style-switcher/styleSwitcher.css"/>
    <!-- .row start -->
    <div class="row portfolio-filters">
        <section class="grid_12">
            <ul id='filters'>
                <li class="active"><a href="#" data-filter="*">all</a></li>
                <li><a href="#" data-filter=".Homme">Homme</a></li>
                <li><a href="#" data-filter=".Femme">Femme</a></li>
                <li><a href="#" data-filter=".Enfant">Enfant</a></li>
            </ul><!-- #filers end -->
        </section><!-- .grid_12 end -->
    </div><!-- .row end -->
    <!-- .row.portfolioitems-holder start -->
    <div id="posts" class="row portfolioitems-holder">
        <ul id="portfolioitems" class="isotope masonry">
            <?php foreach ($products as $product): ?>
                <li id="post" class="isotope-item design wh2">
                    <figure class="portfolio-style-1">
                        <div class="portfolio-img">
                            <a href="portfoliosingle.html">
                                <img src="<?php echo $product->path; ?>" alt="portfolio image"/>
                            </a>
                            <div class="portfolio-img-hover">
                                <div class="mask"></div>
                                <ul>
                                    <li class="portfolio-zoom">
                                        <a href="img/portfolio/large/portfolio-1.jpg" 
                                           data-gal="prettyPhoto[pp_gallery]" class="fa fa-search-plus fa-1x ">Afficher les détails</a>

                                    </li>
                                </ul>
                            </div><!-- .portfolio-img-hover end -->
                        </div><!-- .portfolio-img end -->
                        <!--<figcaption>
                            <a class="title" href="portfoliosingle.html">Portfolio Project Title</a>
                            <span class="subtitle">Design</span>
                        </figcaption>-->
                    </figure><!-- .portfolio-style-1 end -->  
                </li><!-- .isotope-item.design end -->
            <?php endforeach; ?>
        </ul><!-- #portfolioitems .isotope end -->
    </div><!-- .row.portfolioitems-holder end -->
    <!-- .row start -->
    <div class="row">
        <div id="pagination" class="grid_12 text-center">   

            <a <a href="pages/page/2" class="next">Afficher les produits suivants</a>                     
        </div><!-- .grid_12 end -->
    </div><!-- .row end -->
    