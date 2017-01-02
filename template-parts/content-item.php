<?php
/**
* content-item.php
* Template for displaying items (i.e. post or page) within a page or post.
* i.e. showing all posts on the index page.
*/
?>

<div class="hovereffect">
<?php
  $options = nateserk_tinycup_get_theme_options();
  $div_value = "";
  switch ( $options['nateserk_tinycup-tb-div'] )
  {
    case "circle":
      $div_value = "img-circle";
    break;
    case "rounded":
      $div_value = "img-rounded";
    break;
    default:
      $div_value = "img-thumbnail";
    break;
  }

  $class_value = "img-responsive " .$div_value;

  if( has_post_thumbnail() ){
    $tb_size = array();
    // TODO: Add an option for listing tb as a circle "img-circle"
    $tb_attr = array("class"=>$class_value, "title"=>get_the_title() );
    echo get_the_post_thumbnail( null, $tb_size, $tb_attr);
  } else {
    ?>
    <div class="<?php echo $class_value;?>" style="width:100%; height:300px;"/>
    <?php
  }
?>
<?php
  $overlay_value = "overlay";
  if ($div_value != "img-thumbnail") {
    $overlay_value = "overlay " .$div_value;
  }
?>
<div class="<?php echo $overlay_value; ?>">
   <h2><?php the_title(); ?></h2>
   <a class="info" href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i></a>
</div><!--.overlay-->
</div><!--.hovereffect-->
