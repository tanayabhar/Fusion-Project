<div class="team">
        <div class="team-wrapper">
          <div class="heading-5">
            <div class="line-6"></div>
            <p class="team-text">Our Team</p>
            <p class="team-subtext">Our Amazing Team</p>
          </div>
          <!-- <div class="profiles">
            <p class="profile-designation">VP of Business</p>
            <p class="profile-name">Armando Ángeles</p>
            <p class="profile-designation">VP of Product</p>
            <p class="profile-name">Donna Watson</p>
            <p class="profile-designation">VP of Business</p>
            <p class="profile-name">Armando Ángeles</p>
            <p class="profile-designation">Developer</p>
            <p class="profile-name">Nguyễn Thanh</p>
            <p class="profile-designation">Developer</p>
            <p class="profile-name">Nguyễn Thanh</p>
            <p class="profile-designation">Developer</p>
            <p class="profile-name">Nguyễn Thanh</p>
            <p class="profile-designation">Developer</p>
            <p class="profile-name">Nguyễn Thanh</p>
            <div class="row-3 group">
              <div class="name-title group">
                <img class="text-28" src="<?php echo get_template_directory_uri() ; ?>/images/founder_ceo.png" alt="Founder &amp; CEO" width="11" height="91" title="Founder &amp; CEO">
                <img class="text-29" src="<?php echo get_template_directory_uri() ; ?>/images/vincent_gardner.png" alt="Vincent Gardner" width="11" height="130" title="Vincent Gardner">
              </div>
              <div class="col-6 group">
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="row-4 group">
                  <div class="image-4"></div>
                  <div class="image-5"></div>
                </div>
              </div>
              <div class="col-7 group">
                <div class="single-profile-copy-2">
                  <div class="image-6"></div>
                  <div class="name-title-3">
                    <p class="text-32">Armando Ángeles</p>
                    <p class="text-33">VP of Business</p>
                  </div>
                </div>
                <div class="image-7"></div>
              </div>
              <div class="col-8">
                <div class="single-profile-copy-3">
                  <img class="image-8" src="<?php echo get_template_directory_uri() ; ?>/images/image_6.png" alt="">
                  <div class="name-title-4">
                    <p class="text-34">Nguyễn Thanh</p>
                    <p class="developer-2">Developer</p>
                  </div>
                </div>
                <div class="image-9"></div>
              </div>
            </div>
            <div class="image-10"></div>
            <div class="line-7"></div>
            <div class="line-8"></div>
            <p class="text-35">Vincent is the Founder &amp; CEO of Fusion. He is leading &nbsp;the company to success with his experience &amp; skill. Leader piverate paradigm cortado ship it integrate Space Team parallax persons grok. Parallax food truck fund 360 campaign venture capital pitch deck actionable insight innovate.</p>
          </div> -->
          <?php
          $team_args = array(
            'post_type'=>'team', 
            'posts_per_page' => -1,
          );
          $team_query = new WP_Query( $team_args );
          if( $team_query->have_posts() ) {
          ?>
          <div class = "profiles">
          <div class="col-6 group">
          <?php
        while( $team_query->have_posts() ):
          $team_query->the_post();
          ?>
                <div class="single-profile-copy">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <div class="image-3"><img src="" /></div>
                <?php endif; ?>
                  <div class="name-title-2">
                    <p class="text-30"><?php the_title(); ?></p>
                    <?php
              $designation = get_post_meta( $post->ID, 'designation', true );
              ?>
                    <p class="text-31"><?php echo $designation; ?></p>
                  </div>
                </div>
        <?php endwhile; ?>
              <!-- </div>
              <div class="col-6 group"> -->
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
                <div class="single-profile-copy">
                  <div class="image-3"></div>
                  <div class="name-title-2">
                    <p class="text-30">Donna Watson</p>
                    <p class="text-31">VP of Product</p>
                  </div>
                </div>
              </div>
          </div>
          <?php } ?>
        </div>
	  </div>