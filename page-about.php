
<meta
  name="description"
  content="Mary's simple recipe for maple bacon donuts
           makes a sticky, sweet treat with just a hint
           of salt that you'll keep coming back for.">

<!DOCTYPE html>
<html lang="en">
<?php get_header () ?>

<section>
<div class="aboutpage">
<div class="container">
<?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
        <div class="row " >
                
                <div class="hero-about">
                        <img class="hero_about_img" style=" rgba(0, 0, 0, 0.5); " src="<?php the_field("hero_about_img") ?>" alt="">
                        <div class="mission-vission">
                                <h2>Our mission is to support the technology evolvement in the southern region and push forward on renewables, energy end green digitization. </h2>
                                <h3>Our goal is to strengthen the startup and tech eco-system through a powerful community to fuel the next generation of tech winner companies. </h3>
                             </div>
                </div>
        </div>
        <div id="aboutus" class="row" >
                
                        <h2 class=" d-flex justify-content-center"><?php the_field("about_us_title") ?></h2>
                        <div class="aboutusinfo row col-12">
                                <div class="col-12 col-sm-6" >
                                        <p class="d-flex  align-items-center"><?php the_field("about_us_text") ?></p>
                                        <p class="d-flex  align-items-center"><?php the_field("about_us_text_2") ?></p>
                                        <p class="d-flex  align-items-center"><?php the_field("about_us_text_3") ?></p>
                                </div>
                                <div class="col-12 col-sm-6 d-flex justify-content-center">
                                         <img class="aboutimg " src="<?php the_field("about_us_img") ?>" alt="">
                                </div>
                        </div>
                
        </div>

        <div id="focus" class="row">
                <?php $loop = new WP_Query(array("post_type" => "focus", "posts_per_page" => -1)) ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>
                <div class="col-12 col-sm-3 d-flex flex-column">
                        <div >
                                <h3 style=" color: #ffffff; display:flex; padding:0px 50px 0px 50px; justify-content:center ;"><?php the_field("focus_title") ?></h3>
                                <p style=" color: #ffffff; margin:0px; display:flex; justify-content:center ;"><?php the_field("focus_text") ?></p>
                        </div>
                </div>
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
                
        </div>
        
        <div id="team" class="row " >
        <h2 class=" d-flex justify-content-center">Meet the team</h2>
                <?php $loop = new WP_Query(array("post_type" => "members", "posts_per_page" => -1)) ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>
                        <div class="member col-sm-4 col-12 ">
                                <div  style="margin:40px ; padding:30px; background-color:#ffffff;display:flex; flex-direction:column; align-items: center; justify-content:center;">
                                        <img src="<?php the_field("profileimg") ?>" alt="">
                                        <h3 ><?php the_field("name") ?></h3>
                                        <li><a href="<?php echo the_field('linkedin'); ?>"><i class="bi bi-linkedin" style=" font-size: 2rem; color: cornflowerblue;" ></i></a></li>
                                </div>
                        </div>
                        <?php endwhile ?>
                <?php wp_reset_postdata() ?>
        
        </div>

        <div class="questions">
        <h2 class=" d-flex justify-content-center">We would love to hear from you!</h2>
        <h3 style="padding-top:0px;" class=" d-flex justify-content-center">Ask away</h3>
                                   
                <div>
                         <?php echo do_shortcode( '[contact-form-7 id="194" title="Contact Form"]' ); ?>
                </div>
        </div>
                
                <?php endwhile; ?>
                <?php else: ?>
                        <p>Sorry, we did not find any content to share here.</p>
                <?php endif; ?>
    </div>
    </div>
    </section>

    <?php get_footer () ?>