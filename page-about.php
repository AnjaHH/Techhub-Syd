<?php get_header () ?>

<section>
<div class="aboutpage">
<div class="container">
        <div class="row " >
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                <div id="hero-about">
                        <h2></h2>
                        <h2></h2>
                 </div>
        </div>
        <div id="aboutus" class="row" >
                
                        <h2 class=" d-flex justify-content-center"><?php the_field("about_us_title") ?></h2>
                        <div class="aboutusinfo row col-12">
                                <div class="col-12 col-sm-6" >
                                        <p class="d-flex  align-items-center"><?php the_field("about_us_text") ?></p>
                                </div>
                                <div class="col-12 col-sm-6 d-flex justify-content-center">
                                         <img class="aboutimg " src="<?php the_field("about_us_img") ?>" alt="">
                                </div>
                        </div>
                
        </div>
        
        <div id="team" class="row " >
        <h2 class=" d-flex justify-content-center">Meet the team</h2>
                <?php $loop = new WP_Query(array("post_type" => "members", "posts_per_page" => -1)) ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>
                        <div class="member flex-column col-sm-4 col-12 ">
                        <img src="<?php the_field("profileimg") ?>" alt="">
                        <h3 ><?php the_field("name") ?></h3>
                        <li><a href="<?php echo the_field('linkedin'); ?>"><i class="bi bi-linkedin" style=" font-size: 2rem; color: cornflowerblue;" ></i></a></li>
                
                </div>
                        <?php endwhile ?>
                <?php wp_reset_postdata() ?>
        
        </div>
                
                <?php endwhile; ?>
                <?php else: ?>
                        <p>Sorry, we did not find any content to share here.</p>
                <?php endif; ?>
    </div>
    </div>
    </section>

    <?php get_footer () ?>