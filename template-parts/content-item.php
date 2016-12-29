<?php
/**
* content-item.php
* Template for displaying items (i.e. post or page) within a page or post.
* i.e. showing all posts on the index page.
*/
?>

<div class="hovereffect">
<?php
  if( has_post_thumbnail() ){
    $tb_size = array();
    // TODO: Add an option for listing tb as a circle "img-circle"
    $tb_attr = array("class"=>"img-responsive img-thumbnail", "title"=>get_the_title() );
    echo get_the_post_thumbnail( null, $tb_size, $tb_attr);
  } else {
    ?>
    <div class="img-responsive img-thumbnail" style="width:100%; height:300px;"/>
    <?php
  }
?>
<div class="overlay">
   <h2><?php the_title(); ?></h2>
   <a class="info" href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i></a>
</div><!--.overlay-->
</div><!--.hovereffect-->
