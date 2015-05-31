<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="This is the personal blog of Tim, who sometimes calls himself Cranberry Thunderfunk. Here, Tim writes on anything he has enough inspiration to finish a post on. That usually ends up being matters of science, pop culture, technology, religion, and philosophy." />
    <meta name="keywords" content="tim froehlich, oftim, salandarin, cranberry thunderfunk, and the lack thereof, blog, religion, culture, philosophy, technology, science" />
    <link rel ="stylesheet" type = "text/css" href = "http://thelackthereof.com/wp/wp-content/themes/simplest/style.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title>And the Lack Thereof</title>
    <script type="text/javascript" src="http://thelackthereof.com/stats.js"></script>    <script type="text/javascript" src="http://thelackthereof.com/jquery.js"></script>    <script type="text/javascript">        function togglePost(obj) {            $(obj).toggle(500);            $(obj).next(".body").toggle(500);        }        $(document).ready(function() {            $(".body").first().toggle(0);            $(".instruct").first().toggle(0);        });    </script>
    <?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="bg">
        <div class="landA1 orange bottom right"></div>
        <div class="landA2 black bottom right"></div>
        <div class="water orange bottom left"></div>
        <div class="fish1 orange"></div>
        <div class="fish2 orange"></div>
        <div class="fish3 black"></div>
        <div class="fish4 orange"></div>
        <div class="fish5 orange"></div>
        <div class="eddy1 orange"></div>
        <div class="eddy2 orange"></div>
        <div class="eddy3 orange"></div>
        <div class="eddy4 orange"></div>
        <div class="eddy5 orange"></div>
        <div class="wave2 black"></div>
        <div class="wave3 black"></div>
        <div class="wave4 black"></div>
        <div class="wave5 black"></div>
        <div class="wave6 black"></div>
        <div class="wave7 black"></div>
        <div class="wave8 black"></div>
        <div class="wave9 black"></div>
        <div class="wave10 black"></div>
        <div class="wave11 black"></div>
        <div class="lWingA orange"></div>
        <div class="lWingB black"></div>
        <div class="rWingA orange"></div>
        <div class="rWingB black"></div>
        <div class="bigLWingA orange"></div>
        <div class="bigLWingB black"></div>
        <div class="bigRWingA orange"></div>
        <div class="bigRWingB black"></div>
        <div class="bfly1 orange"></div>
        <div class="bfly3 orange"></div>
        <div class="bfly2 orange"></div>
        <div class="grass1a orange bottom"></div>
        <div class="grass1b black bottom"></div>
        <div class="grass2a orange bottom"></div>
        <div class="grass2b black bottom"></div>
        <div class="grass3a orange bottom"></div>
        <div class="grass3b black bottom"></div>
        <div class="grass4a orange bottom"></div>
        <div class="grass4b black bottom"></div>
        <div class="sun1a orange top right"></div>
        <div class="sun1a1 black top right"></div>
        <div class="sun1a2 black top right"></div>
        <div class="sun1b black top right"></div>
        <div class="sun2a orange top right"></div>
        <div class="sun2b black top right"></div>
        <div class="sun3 orange top right"></div>
    </div>
    <div id="all">
        <div id="top">
		
            <div class="transparency"></div>
            <p class="title"><a href="http://www.thelackthereof.com">A<span style="font-size: .8em;">ND THE</span> L<span style="font-size: .8em;">ACK</span> T<span style="font-size: .8em;">HEREOF</span><span style="font-size: .5em; opacity: .2; filter: alpha(opacity=20);"><sup>*</sup></span></a></p>
            <p class="subtitle"><span style="font-size: .8em;">*</span>we put the "mmm" in communism</p>
        </div>
        <div id="menu">
            <?php if ( has_nav_menu( 'menu' ) ) : wp_nav_menu(); else : ?>
                <ul><?php wp_list_pages( 'title_li=&depth=-1' ); ?></ul>
            <?php endif; ?>
        </div>
        <div id="side">
            <?php if ( is_active_sidebar( 'widgets' ) ) : ?>
                <?php dynamic_sidebar( 'widgets' ); ?>
            <?php endif; ?>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <div class="content">
                    <div class="transparency"></div>
                    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>                    <div class="instruct" onclick="togglePost(this)";>click to show this post</div>
                    <div class="body">
                        <?php the_content(); ?>
                        <?php if ( !is_singular() && get_the_title() == '' ) : ?>
                            <a href="<?php the_permalink(); ?>">(more...)</a>
                        <?php endif; ?>
                        <?php if ( is_singular() ) : ?>
                          <div class="pagination"><?php wp_link_pages(); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="meta">
                        posted on <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a> with <a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a><br />
                        filed under <?php the_category( ', ' ); ?><?php the_tags( ', ' ); ?>
                    </div>
                </div>
            </div>
            <?php comments_template(); ?>
        <?php endwhile; else: ?>        
            <div class="post">
                <div class="content">
                    <div class="transparency"></div>
                    <div class="body">
                        <p style="text-align: center;"><b>Sorry, the page you requested cannot be found</b></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div id="navFooter">
            <?php if ( is_singular() || is_404() ) : ?>
                <a href="<?php bloginfo( 'url' ); ?>">&laquo; Home page</a>
            <?php else : ?>
                <?php next_posts_link( '&laquo; older' ); ?>&nbsp;&nbsp;<?php previous_posts_link( 'newer &raquo;' ); ?>
            <?php endif; ?>
        </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>