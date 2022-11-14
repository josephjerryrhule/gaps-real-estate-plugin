<?php
    $virtual_tour = get_post_meta(get_the_ID(), 'qodef_property_virtual_tour_meta', true);
?>
<div class="qodef-property-virtual-tour qodef-property-label-items-holder">
    <div class="qodef-property-virtual-tour-label qodef-property-label-style">
        <h5>
            <?php esc_html_e('Virtual Tour', 'select-real-estate'); ?>
        </h5>
    </div>
    <div class="qodef-property-virtual-tour-items qodef-property-items-style clearfix">
        <?php print eiddo_qodef_get_module_part($virtual_tour); ?>
    </div>
</div>