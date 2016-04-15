<?php
namespace Roots\myTemplate\StickyHeader;

function sticky_header_patch(){
?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";
                    $(window).scroll(function () {
                        if ($(window).scrollTop() > 1) {
                            $('body').addClass('sticky-header');
                        } else {
                            $('body').removeClass('sticky-header');
                        }
                    });
        });
     </script>
<?php
}
add_action('__after_footer', __NAMESPACE__ . '\\sticky_header_patch');
