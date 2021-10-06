<form action="<?php echo home_url( '/' ); ?>" method="get">
    <input type="text" name="s" id="search" placeholder="Rechercher" value="<?php the_search_query(); ?>"  class="search" />
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/search.png" class="logo" />
</form>