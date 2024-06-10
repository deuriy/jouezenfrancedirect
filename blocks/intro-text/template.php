<?php
/**
 * Intro text template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title_tag = get_field('title_tag');
$title = get_field('title');
$description = get_field('description');

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id=' . esc_attr( $block['anchor'] ) . ' ';
}

// Create class attribute allowing for custom "className" values.
$class_name = 'intro-section';
if ( ! empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}
?>

<section <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
  <?php if ($title): ?>
    <<?php echo $title_tag ?> class="intro-section__title">
      <?php echo $title ?>
    </<?php echo $title_tag ?>>
  <?php endif ?>

  <?php if ($description): ?>
    <div class="intro-section__description">
      <?php echo $description ?>
    </div>
  <?php endif ?>
</section>