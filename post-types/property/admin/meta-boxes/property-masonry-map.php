<?php
if(!function_exists('qodef_re_map_property_masonry_meta')) {
    function qodef_re_map_property_masonry_meta($meta_box) {

        $property_masonry_container = eiddo_qodef_add_admin_container(array(
            'type'            => 'container',
            'name'            => 'property_masonry_container',
            'parent'          => $meta_box
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('List Shortcode', 'select-real-estate'),
            'name'            => 'property_masonry_container_title',
            'parent'          => $property_masonry_container
        ));

        eiddo_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_property_featured_image_meta',
                'type'        => 'image',
                'label'       => esc_html__( 'Featured Image', 'select-real-estate' ),
                'description' => esc_html__( 'Choose an image for Property Lists shortcodes', 'select-real-estate' ),
                'parent'      => $property_masonry_container
            )
        );

        eiddo_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_property_masonry_fixed_dimensions_meta',
                'type'          => 'select',
                'label'         => esc_html__( 'Dimensions for Masonry - Image Fixed Proportion', 'select-real-estate' ),
                'description'   => esc_html__( 'Choose image layout when it appears in Masonry type property lists where image proportion is fixed', 'select-real-estate' ),
                'default_value' => 'default',
                'parent'        => $property_masonry_container,
                'options'       => array(
                    'default'            => esc_html__( 'Default', 'select-real-estate' ),
                    'large-width'        => esc_html__( 'Large Width', 'select-real-estate' ),
                    'large-height'       => esc_html__( 'Large Height', 'select-real-estate' ),
                    'large-width-height' => esc_html__( 'Large Width/Height', 'select-real-estate' )
                )
            )
        );

        eiddo_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_property_masonry_original_dimensions_meta',
                'type'          => 'select',
                'label'         => esc_html__( 'Dimensions for Masonry - Image Original Proportion', 'select-real-estate' ),
                'description'   => esc_html__( 'Choose image layout when it appears in Masonry type property lists where image proportion is original', 'select-real-estate' ),
                'default_value' => 'default',
                'parent'        => $property_masonry_container,
                'options'       => array(
                    'default'     => esc_html__( 'Default', 'select-real-estate' ),
                    'large-width' => esc_html__( 'Large Width', 'select-real-estate' )
                )
            )
        );        
    }

    add_action('qodef_re_action_property_meta_fields', 'qodef_re_map_property_masonry_meta', 17, 1);
}