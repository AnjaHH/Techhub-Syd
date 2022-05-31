
<meta
  name="description"
  content="Mary's simple recipe for maple bacon donuts
           makes a sticky, sweet treat with just a hint
           of salt that you'll keep coming back for.">
           
           <!DOCTYPE html>
<html lang="en">

<?php get_header () ?>

<section>
<div class="frontpage">
        <div class="container">
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                        <div class="hero-front">
                               
                                <video autoplay muted loop id="myVideo">
                                         <source src="<?php the_field("hero_video") ?>" type="video/mp4">
                                </video>
                                <div class="videotext">
                                <h1><span style="color:#ffffff; font-size:50px; font-family: 'Abel', sans-serif;" class="auto-type"></span></h1>
                                </div>
                                
                        </div>
                        
                        <div id="whatcanwedo" class="row">
                                <h2 class=" d-flex justify-content-center"><?php the_field("about_us_title") ?></h2>
                                <div class="aboutusinfo row col-12">
                                        <div style="padding-bottom:30px ;" class="col-12 col-sm-6 d-flex flex-column align-items-center" >
                                                <p class="d-flex  align-items-center"><?php the_field("about_us_text") ?></p>
                                                <p class="d-flex  align-items-center"><?php the_field("about_us_text_2") ?></p>
                                                <p style="font-weight:bold ; padding-bottom:30px; " class="d-flex  align-items-center"><?php the_field("about_us_text_3") ?></p>
                                                <li><a  class="slide" href="<?php echo the_field("about_button") ?>">Discover more</a></li>

                                                
                                        </div>
                                        <div class="col-12 col-sm-6 d-flex justify-content-center">
                                                <img class="aboutimg " src="<?php the_field("about_us_img") ?>" alt="">
                                        </div>
                                </div>
                        </div>

                        <div id="steps" class="row"> 
                        <?php $loop = new WP_Query(array("post_type" => "step", "posts_per_page" => -1)) ?>
                        <?php while($loop->have_posts()): $loop->the_post() ?>                                
                                        <div class="col-12 col-sm-3">
                                                
                                                <div class="stepbox">
                                                        <img src="<?php the_field("step_img") ?>" alt="">
                                                       <li> <a href="<?php the_field("step_text") ?>"><p><?php the_field("step_text") ?></p></a></li>
                                                </div>
                                                
                                        </div>
                
                                <?php endwhile ?>
                                <?php wp_reset_postdata() ?>
                        </div>


                        <div id="joinevents" class="row">
                                <div class="join-img col-12 col-sm-6">
                                         <img class="joinimg " src="<?php the_field("join_events_img") ?>" alt="">
                                </div>
                                <div class="join-text col-12 col-sm-6">
                                        <h2 >Come join an event</h2>
                                        <p ><?php the_field("join_events_text") ?></p>
                                        <li><a class="slide" href="<?php echo the_field("event_button") ?>">Upcomming events</a></li>
                                       

                                </div>

                        </div>

                        <div class="heading-partners">
                                <h2 class=" d-flex justify-content-center">In great company of</h2>
                        </div>
                        <div id="partners" class="row">
                
                                <?php $loop = new WP_Query(array("post_type" => "partners", "posts_per_page" => -1)) ?>
                                <?php while($loop->have_posts()): $loop->the_post() ?>
                                        <div id="partnerholder" class="col-12 col-sm-3" >  
                                                <div style="margin:20px; background-color:#ffffff; height:250px; padding:20px; display:flex; align-items: center; justify-content:center;">
                                                        <img id="partner-img" src="<?php the_field("partner_img") ?>" alt="">   
                                                </div>          
                                        </div>

                                <?php endwhile ?>
                                <?php wp_reset_postdata() ?>
                        </div>

                        <div class="heading-recomendations">
                                 <h2 style="padding-bottom:0px ;" class=" d-flex justify-content-center">What the community say</h2>
                        </div>
                        <div id="recommendations" class="row">
                                <?php $loop = new WP_Query(array("post_type" => "recommendation", "posts_per_page" => -1)) ?>
                                <?php while($loop->have_posts()): $loop->the_post() ?>
                                        <div id="recholder" class="col-12 col-sm-6 flex-column" style="background-color:#ffffff; display:flex; align-items: center; justify-content:center; padding: 40px 75px;">
                                                <p style="font-size:150px; height:75px; margin-bottom:60px; font-family: 'Orbitron', sans-serif;">"</p>
                                                <p><?php the_field("rec_text") ?></p>
                                                <h5><?php the_field("rec_name") ?></h5>
                                                <h6><?php the_field("rec_title") ?></h6>
                                        </div>
                                <?php endwhile ?>
                                <?php wp_reset_postdata() ?>

                        </div>


                        <div id="newsletter" class="row">
                                <h2 class=" d-flex justify-content-center">Interrested in hearing more?</h2>
                                <h3 style="padding-top:0px;" class=" d-flex justify-content-center">Join us - Subscribe to our newsletter</h3>
                                <div>
                                        <?php echo do_shortcode( '[contact-form-7 id="201" title="subscribe"]' ); ?>
                                </div>
                        </div>
                <?php the_content() ?>
                <?php endwhile; ?>
                <?php else: ?>
                        <p>Sorry, we did not find any content to share here.</p>
                <?php endif; ?>
        </div>
</div>
</section>

   

    <?php get_footer () ?>


