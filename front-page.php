<?php
/**
 * Front Page template file
 *
 * @package WordPress
 * @subpackage _themename
 * @since 1.0.0
 */

 get_header();
 ?>

 <main id="primary" class="site-main container text-white overflow-hidden">
   <div class="tini-slider">

     <?php for ( $i = 1; $i <= 3; $i++ ): ?>

     <?php $group = get_field( 'group_' . $i ); ?>

     <div class="slide-container">

       <?php $image = wp_get_attachment_image_src( $group['image'] )[0]; ?>

       <div class="single-post-header-container">

         <img class="cropped h-100 overflow-hidden" src="<?php echo esc_attr( $image ); ?>" style="
           filter: brightness(65%);
           width: 100%;
           height: 100%;
           object-fit: cover;
           position: absolute;
           top: 0;
           left: 0;">

         <div class="container-fluid d-flex align-items-center" style="min-height: calc(100vh - 150px)">

           <div class="row h-100 p-md-4">
             <div class="col-md-7 h-100 col-lg-6 col-xl-5">

               <article class="py-4">
                 <p class="small my-0"><?php echo esc_html( $group['small_text'] ); ?></p>
                 <h1 class="font-weight-bold my-0"><?php echo esc_html( $group['big_text'] ); ?></h1>
                 <div class="my-2 border-top">
                   <p>
                     <?php echo esc_html( $group['text_1'] ); ?>
                   </p>
                 </div>

                 <?php if ( ! $group['button_text'] == '' ): ?>
                   <a href="<?php echo get_permalink( get_page_by_path( $group['button_url'] ) ); ?>" class="btn font-weight-bold btn-light text-decoration-none" type="button" name="button">
                     <?php echo esc_html( $group['button_text'] ); ?><i class="fas fa-long-arrow-alt-right ml-2"></i>
                   </a>
                 <?php endif; ?>
               </article>

             </div><!-- .col-md-7 -->
           </div>

         </div><!-- .container -->

       </div>

     </div><!-- .slide-container -->

    <?php endfor; ?>

  </div><!-- .tini-slider -->
 </main>

<?php
get_footer();
