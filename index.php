<?php


get_header();
?>

<?php

while(have_posts()){
the_post();?>
<div style="display:flex; flex-direction:column; justify-content:center;">
<h2 style="font-weight:600;font-size:2rem;margin-top:20px;"><a href="<?php the_permalink();?>"></a><?php the_title();?></h2>
<div>
    <p style="font-weight:400;font-size:1rem;margin-top:10px;"><?php the_excerpt(); ?></p>
</div>
<div>
   <p style="font-weight:600;font-size:1.4rem;margin-top:10px;"><a href="<?php the_permalink();?>">Continue reading</a></p>  
</div>
</div>
<?php
}
?>
<?php
get_footer();
?>