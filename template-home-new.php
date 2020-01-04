<?php 
/**
 *
 * Template Name: Home Page
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
			
      <div class="moose-slick-carousel">
        <a href="https://google.com">  
          <div><img src="https://i.picsum.photos/id/1015/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1016/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1018/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1021/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1019/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1022/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1023/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1024/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1025/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1026/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1027/200/200.jpg" alt="product-category"></div>
        </a>
        <a href="https://google.com">
          <div><img src="https://i.picsum.photos/id/1028/200/200.jpg" alt="product-category"></div>
        </a>
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
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
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

<!-- SECTION 2: FEATURED BLOCK -->

	<section class="featured-block">

		<h2 class="headline text-center">
			FEATURED PRODUCTS
		</h2>

		<div class="container">

		<article class="products pb-3">
				<div class="row">
          <div class="product-item col-sm-6 col-md-3 mt-5">
            <a href="#" class="product-img-box">
              <img src="https://picsum.photos/300/300?image=10" alt="" class="img-fluid">
            
              <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
            </a>
            <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

          </div>
          <div class="product-item col-sm-6 col-md-3 mt-5">
            <a href="#" class="product-img-box">
              <img src="https://picsum.photos/300/300?image=20" alt="" class="img-fluid">
            
              <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
            </a>
            <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

          </div>
          <div class="product-item col-sm-6 col-md-3 mt-5">
            <a href="#" class="product-img-box">
              <img src="https://picsum.photos/300/300?image=30" alt="" class="img-fluid">
            
              <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
            </a>
            <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

          </div>
          <div class="product-item col-sm-6 col-md-3 mt-5">
            <a href="#" class="product-img-box">
              <img src="https://picsum.photos/300/300?image=30" alt="" class="img-fluid">
            
              <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
            </a>
            <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

          </div>
          <div class="product-item col-sm-6 col-md-3 mt-5">
            <a href="#" class="product-img-box">
              <img src="https://picsum.photos/300/300?image=10" alt="" class="img-fluid">
            
              <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
            </a>
            <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

          </div>
          <div class="product-item col-sm-6 col-md-3 mt-5">
            <a href="#" class="product-img-box">
              <img src="https://picsum.photos/300/300?image=20" alt="" class="img-fluid">
            
              <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
            </a>
            <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

          </div>
          <div class="product-item col-sm-6 col-md-3 mt-5">
            <a href="#" class="product-img-box">
              <img src="https://picsum.photos/300/300?image=30" alt="" class="img-fluid">
            
              <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
            </a>
            <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

          </div>
          <div class="product-item col-sm-6 col-md-3 mt-5">
            <a href="#" class="product-img-box">
              <img src="https://picsum.photos/300/300?image=30" alt="" class="img-fluid">
            
              <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
            </a>
            <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

          </div>
				</div>
			</article>
			
		</div>
	</section>				

<!-- SECTION 3: BANNER BLOCK -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<section class="banner-block">

		<!-- <div class="container"> -->

			<article class="banner-content text-center wow bounceIn" data-wow-duration="2s" data-wow-delay=".5s">
        <h1 class="banner-text">TRUST US TO MAKE YOUR</h1>
        <h1 class="banner-text font-weight-bold">HOLIDAY SPECIAL</h1>
        <a href="#" class="btn btn-danger btn-lg">Find a Gift Now!</a>
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

    <article class="products pb-3">
      <div class="row">
        <div class="product-item col-sm-6 col-md-3 mt-5">
          <a href="#" class="product-img-box">
            <img src="https://picsum.photos/300/300?image=10" alt="" class="img-fluid">
          
            <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
          </a>
          <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

        </div>
        <div class="product-item col-sm-6 col-md-3 mt-5">
          <a href="#" class="product-img-box">
            <img src="https://picsum.photos/300/300?image=20" alt="" class="img-fluid">
          
            <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
          </a>
          <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

        </div>
        <div class="product-item col-sm-6 col-md-3 mt-5">
          <a href="#" class="product-img-box">
            <img src="https://picsum.photos/300/300?image=30" alt="" class="img-fluid">
          
            <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
          </a>
          <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

        </div>
        <div class="product-item col-sm-6 col-md-3 mt-5">
          <a href="#" class="product-img-box">
            <img src="https://picsum.photos/300/300?image=30" alt="" class="img-fluid">
          
            <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
          </a>
          <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

        </div>
        <div class="product-item col-sm-6 col-md-3 mt-5">
          <a href="#" class="product-img-box">
            <img src="https://picsum.photos/300/300?image=10" alt="" class="img-fluid">
          
            <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
          </a>
          <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

        </div>
        <div class="product-item col-sm-6 col-md-3 mt-5">
          <a href="#" class="product-img-box">
            <img src="https://picsum.photos/300/300?image=20" alt="" class="img-fluid">
          
            <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
          </a>
          <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

        </div>
        <div class="product-item col-sm-6 col-md-3 mt-5">
          <a href="#" class="product-img-box">
            <img src="https://picsum.photos/300/300?image=30" alt="" class="img-fluid">
          
            <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
          </a>
          <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

        </div>
        <div class="product-item col-sm-6 col-md-3 mt-5">
          <a href="#" class="product-img-box">
            <img src="https://picsum.photos/300/300?image=30" alt="" class="img-fluid">
          
            <h4 class="product-title text-center mt-3 font-weight-bold">MY GRANOLA IS NUTS! DR. GRANOLA® SIMPLE & EASY BAKE IT YOURSELF GRANOLA GIFT KIT! *FREE SHIPPING! **FREE COFFEE!</h4>
          </a>
          <h3 class="product-price text-center mt-5 font-weight-bold text-danger">$54.00</h3>

        </div>
      </div>
    </article>
    
  </div>
    
</section>	

<!-- SECTION 4: LAST CTA BLOCK -->

  <section class="last-cta-block">

    <h2 class="headline text-center p-5">
      LAST CTA BLOCK
    </h2>

    <div class="container">

      <article class="products pt-3">
        <div class="row">
          <a href="#" class="product-img-box col-md-4">
            <img src="https://picsum.photos/400/300?image=1" alt="" class="img-fluid">
          </a>
          <a href="#" class="product-img-box col-md-4">
            <img src="https://picsum.photos/400/300?image=2" alt="" class="img-fluid">
          </a>
          <a href="#" class="product-img-box col-md-4">
            <img src="https://picsum.photos/400/300?image=3" alt="" class="img-fluid">
          </a>
        </div>
      </article>
      
    </div>

  </section>

</main>
		
	<?php get_footer(); ?>