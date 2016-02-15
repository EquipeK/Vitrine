
    <!-- .row start -->
    <div class="row portfolio-filters">
        <section class="grid_12">
            <ul id='filters'>
                <?php foreach ($navProducts1 as $navProduct): ?>
                    <li><a href="<?= strtolower($navProduct->name); ?>" data-filter=".<?= $navProduct->name; ?>"><?= $navProduct->name; ?></a></li>
                <?php endforeach; ?>
                <?php foreach ($navProducts2 as $navProduct): ?>
                    <li><a href="<?= strtolower($navProduct->name); ?>" data-filter=".<?= $navProduct->name; ?>"><?= $navProduct->name; ?></a></li>
                <?php endforeach; ?>
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
                            <a href="products/show/<?= $product->id_product; ?>">
                                <img src="<?= $product->path; ?>" alt="portfolio image"/>
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
    