<?php

get_header();
$id = isset($id) ? $id : get_the_ID();
$gallery_images = get_post_meta($id, 'qodef_property_image_gallery', true);
$image_ids = explode(',', $gallery_images);
$attachment = get_post_meta(get_the_ID(), 'qodef_property_attachment_meta', true);
$params = array(
  'number-of-items' => '4',
  'enable-navigation' => 'no',
  'enable-pagination' => 'no',
  'enable-loop' => 'yes',
  'enable-auto-width' => 'yes',
  'enable-center' => 'no',
  'slider-animate-in' => 'fadeIn',
  'slider-animate-out' => 'fadeOut',
  'slider-speed-animation' => '600',
  'slider-speed' => '5000',
  'slider-margin' => '14',
  'enable-autoplay' => 'yes',
  'pretty_photo' => 'yes'
);
$dataString = '';
foreach ($params as $key => $value) {
  if ($value !== '') {
    $new_key = str_replace('_', '-', $key);

    $dataString .= ' data-' . $new_key . '="' . esc_attr($value) . '"';
  }
}
if (is_array($image_ids) && count($image_ids)) { ?>
  <div class="qodef-property-single-gallery-holder qodef-owl-slider " <?php echo wp_kses($dataString, array('data')); ?>>
    <?php foreach ($image_ids as $image_id) {
      $img_url = wp_get_attachment_image_src($image_id, 'full');
      $img_desc = get_post_meta($image_id, '_wp_attachment_image_alt', true);
      if ($img_url !== '') { ?>
        <div class="qodef-property-single-gallery-item">
          <a itemprop="image" class="qodef-property-single-lightbox" href="<?php echo esc_url($img_url[0]) ?>" data-rel="prettyPhoto[single_pretty_photo]">
            <img src="<?php echo esc_url($img_url[0]); ?>" alt="<?php echo esc_attr($img_desc); ?>" />
          </a>
        </div>
    <?php }
    } ?>
  </div>
<?php
}
?>
<div class="container">
  <div class="qodef-property-description qodef-property-label-items-holder">
    <div class="qodef-property-description-label qodef-property-label-style">
      <h5>
        <?php esc_html_e('Description', 'select-real-estate'); ?>
      </h5>
    </div>
    <div class="qodef-property-description-items qodef-property-items-style clearfix">
      <?php the_content(); ?>
      <?php if (!empty($attachment)) { ?>
        <div class="qodef-property-attachment">
          <a href="<?php echo esc_url($attachment); ?>" download target="_blank">
            <span class="qodef-attachment-label"><?php esc_html_e('Download Prospect', 'select-real-estate'); ?></span>
            <span class="qodef-attachment-icon"><span class="arrow_carrot-down" aria-hidden="true"></span></span>
          </a>
        </div>
      <?php } ?>

    </div>
  </div>
</div>
<?php
get_footer();
