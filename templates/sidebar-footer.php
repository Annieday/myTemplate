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

// If we get this far, we have widgets. Let do this.
    if (is_active_sidebar('sidebar-footer')):
        ?>
        <div class="site-footer-widget-area">
            <div class="site-footer-widget" id="site-footer-widget-1">
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php
    for ($col = 2; $col <= 3; $col++) {
        if (is_active_sidebar('sidebar-footer-' . $col)) :
            ?>
            <div class="site-footer-widget-area">
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