<?php
/**
 * The footer sidebar template
 *
 *
 * @package AnewMedia
 * @since AnewMedia 3.1.0
 */
?>
<?php
/*
 * The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */

if (is_active_sidebar('sidebar-footer') ||
        is_active_sidebar('sidebar-footer-2') ||
        is_active_sidebar('sidebar-footer-3')
):
$sidebar_col_class = get_sidebar_col_class();
// If we get this far, we have widgets. Let do this.
    if (is_active_sidebar('sidebar-footer')):
        ?>
        <div class="site-footer-widget-area <?php echo $sidebar_col_class ?>">
            <div class="site-footer-widget" id="site-footer-widget-1">
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php
    for ($col = 2; $col <= 3; $col++) {
        if (is_active_sidebar('sidebar-footer-' . $col)) :
            ?>
            <div class="site-footer-widget-area <?php echo $sidebar_col_class ?>">
                <div class="site-footer-widget" id="site-footer-widget-<?php echo $col?>">
                    <?php dynamic_sidebar('sidebar-footer-' . $col);
                    ?>
                </div>
            </div>
            <?php
        endif;
    }
    ?>
<?php endif; ?>
<?php
    function get_sidebar_col_class(){
        $sidebar_col_class = "";
        $activate_sidebar_number = 0;
        if (is_active_sidebar('sidebar-footer'))
            $activate_sidebar_number += 1;
        if (is_active_sidebar('sidebar-footer-2'))
            $activate_sidebar_number += 1;
        if (is_active_sidebar('sidebar-footer-3'))
            $activate_sidebar_number += 1;
        
        switch($activate_sidebar_number) {
            case 1:
                $sidebar_col_class = "one-widget";
                break;
            case 2:
                $sidebar_col_class = "two-widget";
                break;
            case 3:
                $sidebar_col_class = "three-widget";
                break;
        }
        return $sidebar_col_class;
    }
?>