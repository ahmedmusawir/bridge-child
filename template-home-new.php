<?php 
/**
 *
 * Template Name: Home Page New
 *
 */
global $wp_query;
$id = $wp_query->get_queried_object_id();
$sidebar = get_post_meta($id, "qode_show-sidebar", true);  

$enable_page_comments = false;
if(get_post_meta($id, "qode_enable-page-comments", true) == 'yes') {
	$enable_page_comments = true;
}

if(get_post_meta($id, "qode_page_background_color", true) != ""){
	$background_color = get_post_meta($id, "qode_page_background_color", true);
}else{
	$background_color = "";
}

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

?>
<!-- MOOSE CALLING THE CUSTOM HEADER HERE  -->

  <?php get_header(); ?>
  
<!-- SECTION 1: SLICK CAROUSEL BLOCK -->

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- SECTION 1: TOP CAROUSEL BLOCK -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
<!-- Add the new slick-theme.css if you want the default styling -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>

<main id="new-home-page">
  <section class="top-carousel-block">
    <h2 class="headline text-center">
      SHOP OUR <strong>EXCLUSIVE</strong> PRODUCTS
    </h2>
      
    <div class="container">
    <!-- PREP FOR PRODUCT CATEGORY QUERY -->
    <?php

      $term_args = array(
        'taxonomy'   => 'product_cat', // Swap in your custom taxonomy name
        'hide_empty' => true, 
        'cache_images' => true,
      );
      
      $terms = apply_filters( 'taxonomy-images-get-terms', '', $term_args );
      // $terms = get_terms( $term_args );
      // $terms = get_categories( $term_args );
      // echo '<pre>';
      // print_r($terms);
      // echo '</pre>';
      // die('showing the terms obj');
    ?>

      <div class="moose-slick-carousel">

      <?php
				if ($terms) : /* Start the Loop */
				// TERM LOOP STARTS
				foreach( $terms as $term ) :	

          $featured_img_url = wp_get_attachment_image_src($term->image_id, 'full'); 

      ?>
      

        <a href="<?php echo esc_url( get_term_link( $term, $term->taxonomy ) ) ?> ">  
          <div><img src="<?php echo $featured_img_url[0]; ?>" alt="product-category"></div>
        </a>

      <?php
					endforeach;
				else :
					get_template_part('template-parts/content', 'none');
				endif;
      ?>
      
      </div>
    
    </div>  
  </section>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script>
  jQuery(document).ready(function($){
    $('.moose-slick-carousel').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });

    // $('.moose-slick-carousel').slick({
    //   slidesToShow: 5,
    //   slidesToScroll: 1,
    //   autoplay: true,
    //   autoplaySpeed: 2000,
    // });
    
    
  });
  </script>


<!-- TEST BLOCK END -->
<!--     
    <h2 class="headline text-center">
			SHOP OUR <strong>EXCLUSIVE</strong> PRODUCTS
    </h2>
    
		<div class="container">
			
      <div class="moose-slick-carousel">
        <a href="https://google.com">  
          <div><img src="https://i.picsum.photos/id/1015/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1016/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1018/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1021/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1019/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1022/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1023/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1024/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1025/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1026/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1027/400/400.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1028/400/400.jpg" alt="product-category"></div>
        </a>
      </div>
			
    </div>
    
  </section> -->



<!-- SECTION 2: FEATURED BLOCK -->

	<section class="featured-block">

		<h2 class="headline text-center">
			FEATURED PRODUCTS
		</h2>

		<div class="container">

		<article class="products pb-3">
      <div class="row">

        <ul class="products">
          <div class="row">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'product_cat' => 'featured',
                    'posts_per_page' => 8
                );
                $loop = new WP_Query( $args );

                // echo '<pre>';
                // print_r($loop->post);
                // echo '</pre>';
                // die('showing the loop obj');
                
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );

                ?>
             
              <div class="product-item col-sm-6 col-md-3 mt-5 text-center">

                <a href="<?php echo get_permalink( $loop->post->ID ) ?>">

                  <div class="product-img-box">                  
                    <?php the_post_thumbnail( 'medium', ['class' => 'img-fluid'] ); ?>
                    <!-- <img  src="<?php  //echo $image[0]; ?>" data-id="<?php //echo $loop->post->ID; ?>" alt="granola" class="img-fluid"> -->
                  
                    <h4 class="product-title text-center mt-3 font-weight-bold text-uppercase">
                      <?php the_title(); ?>
                      <?php // echo $loop->post->post_title; ?>
                    </h4>
                    <h3 class="product-price text-center mt-5 font-weight-bold text-danger">
                      <!-- $54.00 -->
                      <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                      <?php echo wc_price( $price ); ?>
                    </h3>
                  </div>

                </a>

              </div>
                

            <?php        

                endwhile;

            } else {
                echo __( 'No products found' );
            }
            wp_reset_postdata();

            ?>
          </div> <!-- end row -->
        </ul><!--/.products-->


      </div>
    </article>
			
		</div>
	</section>				

<!-- SECTION 3: BANNER BLOCK -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<section class="banner-block">

		<!-- <div class="container"> -->

			<article class="banner-content text-center wow bounceIn" data-wow-duration="2s" data-wow-delay=".5s">
        <h1 class="banner-text"><?php the_field('holiday_banner_text_1'); ?></h1>
        <h1 class="banner-text font-weight-bold"><?php the_field('holiday_banner_text_2'); ?></h1>
        <a href="<?php the_field('holiday_banner_button_url'); ?>" class="btn btn-danger btn-lg"><?php the_field('holiday_banner_button_text'); ?></a>
			</article>
			
    <!-- </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>  
	</section>

<!-- SECTION 4: ACF BLOCK -->

<section class="acf-block">

  <div class="container">

    <article class="acf-items pb-3">
      <div class="row">

        <div class="acf-item col-sm-6 col-md-6 mt-5  text-center">
          <article class="product-img-box">
            <a href="<?php the_field('image_box_button_url_1'); ?>">
              <img src="<?php the_field('image_box_image_1'); ?>" alt="" class="img-fluid">
              <!-- <img src="https://picsum.photos/800/800?image=16" alt="" class="img-fluid"> -->
            
              <div class="dark-text-box">
                <div class="row">
                  <div class="col-sm-8">
                    <h4 class="product-title mt-3 pl-2 font-weight-bold text-left">
                      <?php the_field('image_box_title_1'); ?>
                    </h4>
                  </div>
                  <div class="col-sm-4">
                    <span class="btn btn-danger btn-block btn-lg mt-1"><?php the_field('image_box_button_text_1'); ?></span>
                  </div>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="acf-item col-sm-6 col-md-6 mt-5  text-center">
          <article class="product-img-box">
            <a href="<?php the_field('image_box_button_url_2'); ?>">
              <img src="<?php the_field('image_box_image_2'); ?>" alt="" class="img-fluid">
              <!-- <img src="https://picsum.photos/800/800?image=15" alt="" class="img-fluid"> -->
            
              <div class="dark-text-box">
                <div class="row">
                  <div class="col-sm-8">
                    <h4 class="product-title mt-3 pl-2 font-weight-bold text-left">
                      <?php the_field('image_box_title_2'); ?>
                    </h4>
                  </div>
                  <div class="col-sm-4">
                    <div class="btn btn-danger btn-block btn-lg mt-1"><?php the_field('image_box_button_text_2'); ?></div>
                  </div>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="acf-item col-sm-6 col-md-6 mt-5  text-center">
          <article class="product-img-box">
            <a href="<?php the_field('image_box_button_url_3'); ?>">
              <img src="<?php the_field('image_box_image_3'); ?>" alt="" class="img-fluid">
              <!-- <img src="https://picsum.photos/800/800?image=18" alt="" class="img-fluid"> -->
            
              <div class="dark-text-box">
                <div class="row">
                  <div class="col-sm-8">
                    <h4 class="product-title mt-3 pl-2 font-weight-bold text-left">
                      <?php the_field('image_box_title_3'); ?>
                    </h4>
                  </div>
                  <div class="col-sm-4">
                    <span class="btn btn-danger btn-block btn-lg mt-1"><?php the_field('image_box_button_text_3'); ?></span>
                  </div>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="acf-item col-sm-6 col-md-6 mt-5  text-center">
          <article class="product-img-box">
            <a href="<?php the_field('image_box_button_url_4'); ?>">
              <img src="<?php the_field('image_box_image_4'); ?>" alt="" class="img-fluid">
              <!-- <img src="https://picsum.photos/800/800?image=19" alt="" class="img-fluid"> -->
            
              <div class="dark-text-box">
                <div class="row">
                  <div class="col-sm-8">
                    <h4 class="product-title mt-3 pl-2 font-weight-bold text-left">
                      <?php the_field('image_box_title_4'); ?>
                    </h4>
                  </div>
                  <div class="col-sm-4">
                    <span class="btn btn-danger btn-block btn-lg mt-1"><?php the_field('image_box_button_text_4'); ?></span>
                  </div>
                </div>
              </div>
            </a>
          </article>
        </div>
      
      </div>
    </article>
    
  </div>
    
</section>	

<!-- SECTION 4: LAST CTA BLOCK -->

  <section class="last-cta-block">

    <div class="container">

      <article class="last-cta pt-3">
        <div class="row">
          
          <div class="cta-box col-sm-6 col-md-8 text-center ">
            
            <h2 class="headline">
              <?php the_field('cta_title'); ?>
            </h2>
            <a href="<?php the_field('cta_button_url'); ?>" class="btn btn-danger btn-lg mb-3">
              <?php the_field('cta_button_text'); ?>
            </a>

          </div>
          
          <div class="cta-img-box col-sm-6 col-md-4">

            <img src="<?php the_field('cta_image'); ?>" alt="" class="img-fluid img-dr-granola">
            <h3 class="txt-dr-granola font-weight-bold"><?php the_field('cta_image_text'); ?></h3>

          </div>

        </div>
      </article>
      
    </div>

  </section>

</main>
		
	<?php get_footer(); ?>