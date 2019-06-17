<?php
/* Template Name: Example Template */ 



get_header(); ?>

<div class="container">
  <div class="sc_innerpage_wrap">
         <section class="sc_innerpage_contentbx">               
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        <div class="entry-content">
<script id="CookieDeclaration" src="https://consent.cookiebot.com/3dd00984-c5a8-4f6c-b4c3-e24baca3775c/cd.js" type="text/javascript" async></script>
                       
        </div><!-- .entry-content -->
        <?php edit_post_link( __( 'Edit', 'social-care-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->

                     
        </section><!-- section-->   
 <?php get_sidebar();?>      
<div class="clear"></div>
</div><!-- .sc_innerpage_wrap --> 
</div><!-- .container --> 
<?php get_footer(); ?>
