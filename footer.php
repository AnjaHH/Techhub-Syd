
 <div id="footer" >
      <div id="container" style="display:flex ; justify-content:center; align-items:center; flex-direction:column;" >
      <div>
        <ul>
        <li>
          <a href="<?php echo the_field('linkedintechhub'); ?>"><i class="bi bi-linkedin" style=" font-size: 2rem; color: #98a893;" ></i></a>
          <a href="<?php echo the_field('instagramtechhub'); ?>"><i class="bi bi-instagram" style=" font-size: 2rem; color: #98a893;" ></i></a>
          <a href="<?php echo the_field('facebooktechhub'); ?>"><i class="bi bi-facebook" style=" font-size: 2rem; color: #98a893;" ></i></a>
        </li>

        </ul>
      </div>
        <p>© Copyright Techhub Syd 2022</p>
        <p>By signing up to our community and newsletter you agree to receive updates on TECHHUB SYD events and news about relevant tech in the region.</p>
      </div>
    </div>
<?php wp_footer()?>

<script>
    var typed = new Typed(".auto-type", {
      strings: ["We support tech startups, students and investors to grow the tech eco-system in southern Denmark."],
      typeSpeed:75, 
    
     
        })
</script>

</body>
</html>