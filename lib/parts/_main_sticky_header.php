<?php
namespace Roots\myTemplate\StickyHeader;
function sticky_header_patch(){
?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";
                    $(window).scroll(function () {
                        if ($(window).scrollTop() > 30) {
                            $('#header').addClass('sticky-header');
                        } else {
                            $('#header').removeClass('sticky-header');
                        }
                    });
        });
     </script>
<?php
}
add_action('__after_footer', __NAMESPACE__ . '\\sticky_header_patch');