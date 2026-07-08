<?php

get_header();

?>
<?php
if(have_posts()):
    while(have_posts()): the_post(); ?>
    <div class="item">
        <h2><?php
        if( is_category() ){
            single_cat_title();
        }
        elseif(is_tag()){
            echo "This is a tag";
        }
        elseif(is_author()){
            echo "This is an author";
        }
        elseif(is_day()){
            echo "This is a day";
        }
        elseif(is_month()){
            echo "This is a month";
        }
        ?></h2>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <h4>Posted in:
        <?php
        $categories = get_the_category();
        $separator =  ", ";
        $output = '';
        if($categories){
            foreach($categories as $category){
                $output .= $category->cat_name . $separator;
            }
            echo trim($output, $separator);
        }
        ?>
        </h4>
    </div>
 <?php   endwhile;
else:
    echo '<p>No content found.</p>';
endif;


get_footer();


?>