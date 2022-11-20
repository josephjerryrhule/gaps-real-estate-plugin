<?php
echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/slider', 'property', $params['item_layout'], $params);
echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/title', 'property', '', $params);

?>
<div class="qodef-container">
    <div class="qodef-container-inner clearfix">
        <div class="qodef-grid-row qodef-grid-medium-gutter">
            <div <?php echo eiddo_qodef_get_content_sidebar_class(); ?>>
                <div class="qodef-property-single-outer">
                    <div class="tab">
                        <button class="tablinks" onclick="openProperty(event, 'Overview')">Property Details</button>
                        <button class="tablinks" onclick="openProperty(event, 'PropertyDetails')">Property Overview</button>
                    </div>

                    <!-- Tab content -->
                    <div id="Overview" class="tabcontent">
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/specification', 'property', '', $params); ?>
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/leasing-terms', 'property', '', $params); ?>
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/costs', 'property', '', $params); ?>
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/features', 'property', '', $params); ?>
                    </div>
                    <div id="PropertyDetails" class="tabcontent">
                        <!-- <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/map', 'property', '', $params); ?> -->
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/video', 'property', '', $params); ?>
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/description', 'property', '', $params); ?>
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/virtual-tour', 'property', '', $params); ?>
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/multi-unit', 'property', '', $params); ?>
                        <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/floor-plans', 'property', '', $params); ?>

                    </div>
                    <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/tags', 'property', '', $params); ?>
                    <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/related-properties', 'property', '', $params); ?>
                    <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/reviews-list', 'property', '', $params); ?>
                </div>
            </div>
            <?php if ($sidebar_layout !== 'no-sidebar') { ?>
                <div <?php echo eiddo_qodef_get_sidebar_holder_class(); ?>>
                    <?php get_sidebar(); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        /* border: 1px solid #ccc; */
        /* background-color: #f1f1f1; */
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
        color: #fff;
        background-color: #053D30;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        /* border: 1px solid #ccc; */
        border-top: none;
    }
</style>


<script>
    function openProperty(evt, propertyName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(propertyName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>