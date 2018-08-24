<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <div class="searchContainer">
        <span class="searchicon"><i class="fa fa-search"></i></span>
        <input type="search" class="searchbox1" placeholder="Search" value="<?php echo get_search_query() ?>" name="s"
               title="Search"/>
    </div>
</form>