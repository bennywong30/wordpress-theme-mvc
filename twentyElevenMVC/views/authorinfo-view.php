<div id="author-info">
        <div id="author-avatar">
                <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 60 ) ); ?>
        </div><!-- #author-avatar -->
        <div id="author-description">
                <h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
                <?php the_author_meta( 'description' ); ?>
        </div><!-- #author-description	-->
</div><!-- #author-info -->