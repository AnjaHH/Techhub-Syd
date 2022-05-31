<meta
  name="description"
  content="Mary's simple recipe for maple bacon donuts
           makes a sticky, sweet treat with just a hint
           of salt that you'll keep coming back for.">

           
<?php get_header () ?>

<section>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
<div class="container" style="margin: 0px; padding:0px;">

        <div class="row">
                <div class="startup-hero">
                        <img class="hero_startup_img" src="<?php the_field("startup_img") ?>" alt="">
                        <div class="startup-info">
                                <h2 class="startupheading"><?php the_field("startup_title") ?></h2>
                                <h3><?php the_field("startup_p") ?></h3>
                        </div>
                 </div>
        </div>

        <div id="startup-text" class="row">
                <h4 style="font-size:40px ; padding:100px;">
                        <?php the_field("startup_text") ?>
                </h4>
        </div>

        <h2 style="display:flex ; justify-content:center; background-color: #f4f1f1 ; color:#414440;" >How to get the perfect pitch?</h2>
        <div class="tips-video">
                        
                <video controls id="myVideo">
                        <source src="<?php the_field("tips_video") ?>" type="video/mp4">
                </video>        
        </div>

        <div id="get-started" class="row">
                <h2 style="margin:10px;" class=" d-flex justify-content-center">Ready to get started? Sign up as a TECH STARTUP</h2>
                <h3 style="padding-top:0px;" class=" d-flex justify-content-center">Dont miss out</h3>
                <div>
                         <?php echo do_shortcode( '[contact-form-7 id="200" title="get started"]' ); ?>
                </div>
        </div>

       
</div>


    <?php endwhile; ?>
    <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
    <?php endif; ?>
    </section>

    <?php get_footer () ?>