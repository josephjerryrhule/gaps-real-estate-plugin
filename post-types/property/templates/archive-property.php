<?php
$qodef_re_archive_holder_params = qodef_re_get_holder_params_archive();
get_header();
$gapscityobject = get_queried_object();
$qodef_taxonomy_id = get_queried_object_id();
$taxonomy_image_id = get_term_meta($qodef_taxonomy_id, 'property_city_featured_image', true);

$image_original = wp_get_attachment_image_src($taxonomy_image_id, 'full');
$type_image = $image_original[0];
$qodef_taxonomy_name = '';

?>

<style>
    .gaps-header-image {
        width: 100%;
        height: 600px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .gaps-header-overlay {
        width: 100%;
        height: 600px;
        display: flex;
        align-items: end;
        background-color: #00000080;
    }

    .gapslocation-title {
        padding-left: 4rem;
        padding-bottom: 4rem;
        width: 600px;
    }

    .gapstitle {
        color: #fff;
        font-family: 'Raleway';
        font-size: 4rem;
        line-height: 4rem;
        font-weight: 600;
        border-bottom: 1px solid #fff;
    }

    .gapslocationdescription {
        font-size: 18px;
        color: #fff;
        font-weight: 500;
    }
</style>
<div class="gaps-header-image" style="background-image:url('<?php echo esc_url($type_image); ?>');">
    <div class="gaps-header-overlay">
        <div class="gapslocation-title">
            <h3 class="gapstitle">
                <?php
                echo $gapscityobject->name;
                ?>
            </h3>
            <span class="gapslocationdescription">
                <?php echo $gapscityobject->description; ?>
            </span>
        </div>
    </div>
</div>
<?php do_action('eiddo_qodef_before_main_content'); ?>
<div class="<?php echo esc_attr($qodef_re_archive_holder_params['holder']); ?>">
    <?php do_action('eiddo_qodef_after_container_open'); ?>
    <div class="<?php echo esc_attr($qodef_re_archive_holder_params['inner']); ?>">
        <?php
        $qodef_taxonomy_name = '';
        $qodef_taxonomy_id = get_queried_object_id();
        if (is_tax('property-type')) {
            $qodef_taxonomy_name = 'property-type';
        } else if (is_tax('property-status')) {
            $qodef_taxonomy_name = 'property-status';
        } else if (is_tax('property-city')) {
            $qodef_taxonomy_name = 'property-city';
        } else if (is_tax('property-feature')) {
            $qodef_taxonomy_name = 'property-feature';
        } else if (is_tax('property-county')) {
            $qodef_taxonomy_name = 'property-county';
        } else if (is_tax('property-neighborhood')) {
            $qodef_taxonomy_name = 'property-neighborhood';
        } else if (is_tax('property-tag')) {
            $qodef_taxonomy_name = 'property-tag';
        }
        qodef_re_get_archive_property_list($qodef_taxonomy_id, $qodef_taxonomy_name);
        ?>
    </div>
    <?php do_action('eiddo_qodef_before_container_close'); ?>
</div>
<?php get_footer(); ?>