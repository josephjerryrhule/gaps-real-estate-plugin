<?php
if(!function_exists('qodef_re_map_property_specifictation_meta')) {
    function qodef_re_map_property_specifictation_meta($meta_box) {

        $property_specification_container = eiddo_qodef_add_admin_container(array(
            'type'            => 'container',
            'name'            => 'property_specification_container',
            'parent'          => $meta_box
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('Specification', 'select-real-estate'),
            'name'            => 'property_specification_container_title',
            'parent'          => $property_specification_container
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_id_meta',
            'type'        => 'text',
            'label'       => esc_html__('Property ID', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_price_meta',
            'type'        => 'text',
            'label'       => esc_html__('Price', 'select-real-estate'),
            'description' => esc_html__('Sale or Rent price', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_discount_price_meta',
            'type'        => 'text',
            'label'       => esc_html__('Discount Price', 'select-real-estate'),
            'description' => esc_html__('Sale or rent discount price', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_price_label_meta',
            'type'        => 'text',
            'label'       => esc_html__('Price Label', 'select-real-estate'),
            'description' => esc_html__('Text that will be shown next to price value', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_price_label_position_meta',
            'type'        => 'select',
            'label'       => esc_html__('Price Label Position', 'select-real-estate'),
            'description' => esc_html__('Chose whether price label will be shown before or after price value', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'options'     => array(
                ''          => esc_html__( 'Default', 'select-real-estate' ),
                'before'    => esc_html__( 'Before Price', 'select-real-estate' ),
                'after'     => esc_html__( 'After Price', 'select-real-estate' )
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_size_meta',
            'type'        => 'text',
            'label'       => esc_html__('Size', 'select-real-estate'),
            'description' => esc_html__('Enter property size', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_size_label_meta',
            'type'        => 'text',
            'label'       => esc_html__('Size Label', 'select-real-estate'),
            'description' => esc_html__('Text that will be shown next to size value', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_size_label_position_meta',
            'type'        => 'select',
            'label'       => esc_html__('Size Label Position', 'select-real-estate'),
            'description' => esc_html__('Chose whether size label will be shown before or after size value', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'options'     => array(
                ''          => esc_html__( 'Default', 'select-real-estate' ),
                'before'    => esc_html__( 'Before Value', 'select-real-estate' ),
                'after'     => esc_html__( 'After Value', 'select-real-estate' )
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_bedrooms_meta',
            'type'        => 'text',
            'label'       => esc_html__('Bedrooms', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_bathrooms_meta',
            'type'        => 'text',
            'label'       => esc_html__('Bathrooms', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_floor_meta',
            'type'        => 'text',
            'label'       => esc_html__('Floor', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_total_floors_meta',
            'type'        => 'text',
            'label'       => esc_html__('Total Floors', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_year_built_meta',
            'type'        => 'text',
            'label'       => esc_html__('Year Built', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_heating_meta',
            'type'        => 'text',
            'label'       => esc_html__('Heating', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_accommodation_meta',
            'type'        => 'text',
            'label'       => esc_html__('Accommodation', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('Additional Specification', 'select-real-estate'),
            'name'            => 'property_additional_specification_container_title',
            'parent'          => $property_specification_container
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_ceiling_height_meta',
            'type'        => 'text',
            'label'       => esc_html__('Ceiling Height', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_parking_meta',
            'type'        => 'text',
            'label'       => esc_html__('Parking', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_from_center_meta',
            'type'        => 'text',
            'label'       => esc_html__('Distance From the Center', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_area_size_meta',
            'type'        => 'text',
            'label'       => esc_html__('Area Size', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_garages_meta',
            'type'        => 'text',
            'label'       => esc_html__('Garages', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_garages_size_meta',
            'type'        => 'text',
            'label'       => esc_html__('Garages Size', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_additional_space_meta',
            'type'        => 'text',
            'label'       => esc_html__('Additional Space', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_publication_date_meta',
            'type'        => 'date',
            'label'       => esc_html__('Publication Date', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_create_meta_box_field(array(
            'name'        => 'qodef_property_is_featured_meta',
            'type'        => 'select',
            'label'       => esc_html__('Featured Property', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'options'     => eiddo_qodef_get_yes_no_select_array()
        ));
    }

    add_action('qodef_re_action_property_meta_fields', 'qodef_re_map_property_specifictation_meta', 10, 1);
}