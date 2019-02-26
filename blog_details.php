<?php
//Template Name:blog-details
$currentPage = "blogs";
get_header();
?>

<?php
    $post = $_GET['postid'];  //Fetching value of postid from url
    //To show post's content
    $include = get_posts("include=$post");
    $title = apply_filters('the_title',$include[0]->post_title);
    $content = apply_filters('the_content',$include[0]->post_content);
    ?>    

    <div class="container-fluid content">

        <div class="col-md-4 col-xs-12 col-sm-12 ">
            <div class="margin-col hide-add">
                <div class="text main"><?php the_time('j F Y'); ?></div>
                <div class="text sub add-margin">
                    premise premise premise 
                </div>
                <div class="text sub add-margin">
                <?php the_tags( '',', ' ); ?>
                </div>
                <div class="text main">
                    <a class="tablink">Prev</a>
                    <a class="tablink">Next</a>
                </div>
            </div>
        </div>

    
        <div class="col-md-8 col-xs-12 col-sm-12 menu-right">
            <div class="text main">
                <?php echo $title; ?>
                <div class="search-container">
                    <a class="tablink" style="padding-right: 0px;">Share</a>
                </div>
            </div>
            <div id="latest" class="text sub add-margin add-spacing">
                <!-- <img src="imgs/blog-detail-image.png" width="100%"> -->
                <?php echo get_the_post_thumbnail( null, $size, $attr ); ?>
            </div>
            <div id="latest" class="text sub add-margin add-spacing">
            <?php echo $content; ?>
            </div>

<?php previous_post_link( '%link','Previous Post' ) ?>
<?php next_post_link( '%link','Next Post' ) ?>

                <div class="temp-col">
                        <div class="text sub add-margin">tag, tag, tag, tag</div>
                        <div class="text main">
                            <a class="tablink">Prev</a>
                            <a class="tablink">Next</a>
                        </div>
                    </div>

                    <div class="text main" style="margin-top:50px;">
                            Further readings
                            </div>
<?php
while( have_posts() ) : the_post();
$showposts = "3";
$args = array(
    'category__in' => wp_get_post_categories($post->ID),
    'numberpost' => '2',
    'showposts'=> $showposts, 
);
$relatedpost = get_posts($args);
if($relatedpost){
    setup_postdata($post);
    foreach ($relatedpost as $post){ 
        $id = get_the_ID(); ?>
<div class="col-md-4 col-xs-4 col-sm-4 blog-further">

    <a href="blog-details/?postid=<?php echo $id; ?>">
    <?php the_post_thumbnail(array()) ?>    
    <div class="text main"><?php the_title(); ?></div>
    </a>
    </div>
<?php
    }
}
endwhile;
?>             
        </div>
        <!-- <div class="text main" style="margin-top:50px;">
                            Further readings
                            </div>
                <div class="col-md-4 col-xs-4 col-sm-4 blog-further">
                        <img src="imgs/blog-detail-further-reading1.png" width="100%">
                        <div class="text main">27 SEPT 2018</div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4 blog-further">
                        <img src="imgs/blog-detail-further-reading2.png" width="100%">
                        <div class="text main">27 SEPT 2018</div>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 blog-further">
                            <img src="imgs/blog-detail-further-reading3.png" width="100%">
                            <div class="text main">27 SEPT 2018</div>
                        </div>                     -->
        </div>

    </div>

</body>

</html>