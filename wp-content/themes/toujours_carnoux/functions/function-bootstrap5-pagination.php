<?php
function pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo '<nav aria-label="Posts navigation"><ul class="pagination">';

        // Bouton "Première page" (désactivé si on est déjà sur la première page)
        echo '<li class="page-item ' . ($paged == 1 ? 'disabled' : '') . '">';
        echo '<a class="btn btn-nav btn-prev" href="' . ($paged == 1 ? '#' : get_pagenum_link($paged - 1)) . '" data-toggle="tooltip" data-placement="top" data-tooltip-class="tooltip-primary" title="Première page" aria-disabled="' . ($paged == 1 ? 'true' : 'false') . '">';
        echo '</a></li>';

       // Numéros de page
       for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? '<li class="page-item active"><span aria-current="page" class="page-link current" data-toggle="tooltip" data-placement="top" data-tooltip-class="tooltip-primary" title="Page actuelle">' . $i . '</span></li>' : '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
            }
        }

        // Bouton "Page suivante" (désactivé si on est sur la dernière page)
        if ($paged < $pages) {
            echo '<li class="page-item"><a class="btn btn-nav btn-next" href="' . get_pagenum_link($paged + 1) . '" data-toggle="tooltip" data-placement="top" data-tooltip-class="tooltip-primary" title="Page suivante"><i class="bi bi-arrow-right-short"></i></a></li>';
        } else {
            echo '<li class="page-item disabled"><span class="btn btn-nav btn-next" aria-disabled="true"></span></li>';
        }

        echo '</ul></nav>';
    }
}