<?php 
function get_blog_category_list() {
    $categories = get_categories(array(
        'orderby'       => 'name',
        'order'         => 'ASC',
        'hide_empty'    => false,
        'exclude'       => array(1),
    ));
    if ($categories) {
        $output =
            '<div class="blog-category-list">
                <div class="title">'.__('Nos autres catégories', 'festival_f5c').'</div>
                <div class="cats-container">
                    <ul class="nav nav-tabs">';
                        foreach($categories as $category) :
                            $output .= '<li class="nav-item"><a href="'.get_category_link($category->cat_ID).'" class="nav-link" title="'.__('Voir les ressources classées dans le sujet').' '.$category->cat_name.'">'.$category->cat_name.'</a></li>';
                        endforeach;
        $output .=
                    '</ul>
                </div>
            </div>';
    }
    return $output;
}