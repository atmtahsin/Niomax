<?php get_header() ?>
        <div id="hero-main">
        <div id="hero-inner" class="splide">
            <div class="splide__track" id="splide-slide">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="<?php echo get_theme_file_uri('/assets/images/hero-1.jpeg');?>" alt="" srcset=""></li>
                    <li class="splide__slide"><img src="<?php echo get_theme_file_uri('/assets/images/hero-2.jpeg');?>" alt="" srcset=""></li>
                    <li class="splide__slide"><img src="<?php echo get_theme_file_uri('/assets/images/hero-3.jpeg');?>" alt="" srcset=""></li>
                </ul>
                <div id="hero-inner-text">
                    <h1>Plan to Create a <br> Business Website.</h1>
                    <p>We are exclusive solution agency.</p>
                    <button id="hero-button">Discover More</button>
                </div>
          </div>

        </div>
        <div id="hero-outer-box">
            <?php 
            $featuredSection = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'Features'
            ));
            while($featuredSection->have_posts()){
                $featuredSection->the_post();?>
                   <div id="hero-outer-box1">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Icon.png');?>" alt="" srcset="">
                    <h5><a style="text-decoration:none;" href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 20);?></p>
                </div>

                <?php }
            ?>
                <!-- <div id="hero-outer-box1">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Icon.png');?>" alt="" srcset="">
                    <h5>Audit & Evaluation</h5>
                    <p>Get help from Alex Moore, a professional <br>business coach with advanced experience on <br> growth and business scaling.</p>
                </div> -->
        
                <!-- <div id="hero-outer-box2">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Icon (4).png');?>" alt="" srcset="">
                    <h5><?php the_title(); ?><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 20);?></p>
                </div>
            
         
                <div id="hero-outer-box3">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Icon (3).png');?>" alt="" srcset="">
                    <h5><?php the_title(); ?><a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 20);?></p>
                </div> -->
           
        </div>
    </div>
    </section>
    <section id="about">
        <div id="about-text">
            <h4><span><img src="<?php echo get_theme_file_uri('/assets/images/Rectangle 4708.png');?>" alt=""></span>Who We Are</h4>
            <h3>About our Consuting <br>Agency Team</h3>
            <h5>We create experiences and build products that make business grow</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare non sed est cursus. <br> Vel hac convallis ipsum, facilisi odio pellentesque bibendum viverra tempus.</p>
            <h6><span><img src="<?php echo get_theme_file_uri('/assets/images/check-circle.png');?>" alt=""></span>Business Strategy & Marketing </h6>
            <h6><span><img src="<?php echo get_theme_file_uri('/assets/images/check-circle.png');?>" alt=""></span>Excellence in Everything</h6>
            <div id="about-text-bottom">
                <div id="about-text-bottom1">
                    <h5><span><img src="<?php echo get_theme_file_uri('/assets/images/Vector.png');?>" alt="" srcset=""></span>Awards Winner</h5>
                    <p>Leaders in the market with <br>creative & successful.</p>
                </div>
                <div id="about-text-bottom2">
                    <h5><span><img src="<?php echo get_theme_file_uri('/assets/images/Vector (1).png');?>" alt="" srcset=""></span>Experience</h5>
                    <p>Best performed Company in <br>the past years.</p>
                </div>
                
                
            </div>
        </div>
        <div id="about-image">
            <img src="<?php echo get_theme_file_uri('/assets/images/about-image.jpeg');?>" alt="" srcset="">
            <img id="about-image2" src="<?php echo get_theme_file_uri('/assets/images/Background Pattern.png');?>" alt="" srcset="">
            <img id="about-image3" src="<?php echo get_theme_file_uri('/assets/images/Market Place.png');?>" alt="" >
        </div>
    </section>
    <section id="cta" style="background-image: url(<?php echo get_theme_file_uri("/assets/images/cta-image.jpeg") ?>);">
        <div id="cta-text">
            <h2>Make your business prosper with our advisory and <br>consulting services!</h2>
            <button id="cta-button">Discover More</button>
        </div>
    </section>
    <section id="history">
        <div id="history-text">
            <h6><span><img src="<?php echo get_theme_file_uri('/assets/images/Rectangle 4708.png');?>" alt=""></span>Our History</h6>
            <h2>Better Website Means A <br>User Experience</h2>
            <p>Ippsum is the result of synergy between our teams and our customers. Our company culture is <br>focused on excellent productivity, customer satisfaction</p>
        </div>
        <div id="history-video">
         <img src="<?php echo get_theme_file_uri('/assets/images/history-image.png');?>" alt="" srcset="">
         <img id="history-img2" src="<?php echo get_theme_file_uri('/assets/images/Background Pattern.png');?>" alt="" srcset="">
         <img id="history-img3" src="<?php echo get_theme_file_uri('/assets/images/Background (1).png');?>" alt="" srcset="">
        </div>
    </section>
    <section id="blog">
        <div id="blog-text">
            <h6><span><img src="<?php echo get_theme_file_uri('/assets/images/Rectangle 4708.png');?>" alt=""></span>Our Blog</h6>
            <h2>Browse our latest news</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mauris vulputate dui <br>vitae commodo magna vitae nunc diam urna quis Turpis non nulla pulvinar arcu elementum pretium viverra.</p>
        </div>
        <div id="blog-list">

            <div id="blog-list1">
                <img src="<?php echo get_theme_file_uri('/assets/images/blog-1.jpeg');?>" alt="" srcset="">
                <p>January 19, 2024</p>
                <h5>Achieving Small Business Success</h5>
            </div>
            <div id="blog-list2">
                <img src="<?php echo get_theme_file_uri('/assets/images/blog-2.jpeg');?>" alt="" srcset="">
                <p>January 19, 2024</p>
                <h5>Achieving Small Business Success</h5>
            </div>
            <div id="blog-list3">
                <img src="<?php echo get_theme_file_uri('/assets/images/blog-3.jpeg');?>" alt="" srcset="">
                <p>January 19, 2024</p>
                <h5>Achieving Small Business Success</h5>
            </div>
        </div>
    </section>
   <?php get_footer() ?>