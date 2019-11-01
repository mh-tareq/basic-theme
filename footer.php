 <!-- END Introduction Menu -->
 </div>

 <!-- END GRID -->
 </div><br>

 <!-- END w3-content -->
 </div>

 <!-- Footer -->
 <?php
    $prev = get_previous_post();
    $next = get_next_post();
    ?>
 <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
     <?php if (is_single()) { ?>
         <button class="w3-button w3-black w3-padding-large w3-margin-bottom prev-posts">
             <a href="<?php the_permalink($prev->ID) ?>">
                 « <?php echo get_the_title($prev->ID) ?>
             </a>

         </button>
         <button class="w3-button w3-black w3-padding-large w3-margin-bottom next-posts">
             <a href="<a href= <?php the_permalink($next->ID) ?>">
                 <?php echo get_the_title($next->ID) ?> »
             </a>
         </button>
     <?php } else { ?>
         <button class="w3-button w3-black w3-padding-large w3-margin-bottom prev-posts">
             <a href="<?php echo get_previous_posts_page_link(); ?>">« Previous</a>

         </button>
         <button class="w3-button w3-black w3-padding-large w3-margin-bottom next-posts"><a href="<?php echo get_next_posts_page_link(); ?>">Next »</a> </button>
     <?php } ?>
     <div class="dev-info">
         <p>Designed by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a> <span>| Developed by
                 <a href="https://github.com/dev-mht">Tareq</a> </span> </p>
     </div>

     <?php wp_footer() ?>
 </footer>

 </body>

 </html>