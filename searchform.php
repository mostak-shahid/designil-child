<form action="/search" class="search-results-form w-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="input search-resuls-input w-input" autofocus="true" maxlength="256" name="s" id="search" value="search" placeholder="<?php if(get_search_query()) echo 'Search result for ' . get_search_query(); else echo 'Search for...' ?>">
    <input type="submit" value="Search" class="button w-button">
</form>