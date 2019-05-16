     <div class="owl-carousel owl-theme home-slider">
                <div>
                  <a href="blog-single.php" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php has_post_thumbnail(the_content()); ?>'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5"><?php the_excerpt(); ?></span>
                      <div class="post-meta">
                        
                        <span class="author mr-2"><img src="<?php bloginfo('template_directory');?>/images/person_1.jpg" alt="Colorlib"> <?php the_author(); ?></span>&bullet;
                        <span class="mr-2"><?php the_date('Y-m-d'); ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                          
                        
                      </div>
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </a>
                </div>