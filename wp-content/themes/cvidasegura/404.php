<?php get_header(); ?>
<article id="post-0" class="post not-found" itemscope itemprop="articleBody">
<header class="header">
<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Not Found', 'blankslate' ); ?></h1>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<p itemprop="articleBody"><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
<?php get_footer(); ?>