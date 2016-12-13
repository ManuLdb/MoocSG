<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div class="input-group has-error">
        <input type="text" class="form-control" required placeholder="Rechercher..." value="<?php the_search_query(); ?>" name="s" id="s">
    </div>
</form>