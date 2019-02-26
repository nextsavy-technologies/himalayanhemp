<?php
//Template Name:Blogs
$currentPage = "blogs";
get_header();
?>

    <div class="container-fluid content">

        <div class="col-md-4 col-xs-12 col-sm-12 ">
            <div class="margin-col hide-add">
                <div class="text main">the blog</div>
                <div class="text sub add-margin">
                    All content under Blog is created by Himalayan Hemp and associated partners. You are free to share but not to alter / change
                    the content in any degree.
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xs-12 col-sm-12 menu-right">
            <div class="text main">
                <a class="tablink" onclick="openPage('latest', this, 'black')">Latest</a>
                <a class="tablink" onclick="openPage('featured', this, 'black')">Featured</a>
                <a class="tablink" onclick="openPage('all', this, 'black')" id="defaultOpen">All</a>
                <a class="tablink search-form-container " onclick="openPage('searched', this, 'black')"><?php get_search_form(); ?></a>
                
                <!-- <div class="search-form-container"> -->
                    <!-- <?php get_search_form(); ?> -->
                    <!-- <form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search" class="search-text">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form> -->
                  <!-- </div>                 -->
            </div>
            <?php
$showposts = 4;            
$args= array(
    'post_type' => 'post',
    'post_per_page' => '4',
    'showposts'=> $showposts, 
);
$mypost = get_posts($args);
?>
            <div id="latest" class="text sub add-margin add-spacing tabcontent">The objectives of the organisation are,
<?php foreach($mypost as $post) : setup_postdata($post);
                $id = get_the_ID(); 
                ?>
                <br>● <a href="blog-details/?postid=<?php echo $id; ?>"><?php the_title(); ?></a>
                <?php
endforeach;
?>
</div>
                <?php 
        $reviewArgs = array( 
            'category' => '7', 
            'posts_per_page' => 5
        );
        $reviews = get_posts( $reviewArgs );
?>                
            <div id="featured" class="text sub add-margin add-spacing tabcontent">The objectives of the organisation are,
<?php         foreach ($reviews as $post) :  setup_postdata($post); 
?>
                <br>● <a href="blog-details/?postid=<?php echo $id; ?>"><?php the_title(); ?></a>
<?php
endforeach;             
?>
                </div>

<?php
$showposts = '20';
$args= array(
    'post_type' => 'post',
    'post_per_page' => '10',
    'showposts'=> $showposts, 
);
$mypost = get_posts($args);
?>
            <div id="all" class="text sub add-margin add-spacing tabcontent">The objectives of the organisation are,
<?php foreach($mypost as $post) : setup_postdata($post);
                $id = get_the_ID(); 
                ?>
                <br>● <a href="blog-details/?postid=<?php echo $id; ?>"><?php the_title(); ?></a>
                <?php
endforeach;
?>
</div>

        </div>

    </div>

</body>

<script>
    function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.color = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.color = color;
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</html>