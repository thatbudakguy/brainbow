<?php
/*
 * Template Name: Viewer
 * The template for displaying a mirador viewer
 *
 *
 */

get_header();
global $post;
$image_title = $post->post_name;
?>

<div class="uv"
     data-locale="en-GB:English (GB),cy-GB:Cymraeg"
     data-config="/config.json"
     data-uri="<?php the_title(); ?>"
     data-collectionindex="0"
     data-manifestindex="0"
     data-sequenceindex="0"
     data-canvasindex="0"
     data-zoom="-1.0064,0,3.0128,1.3791"
     data-rotation="0"
     style="height:777px; background-color: #000">
 </div>
<script type="text/javascript" id="embedUV" src="https://universalviewer.io/uv/lib/embed.js"></script>
<script type="text/javascript">/* wordpress fix */</script>

<?php get_footer(); ?>
