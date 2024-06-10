<?php
/**
 * Definitions list template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$definitions_list = get_field('definitions_list');

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id=' . esc_attr( $block['anchor'] ) . ' ';
}

// Create class attribute allowing for custom "className" values.
$class_name = 'definitions-list-section';
if ( ! empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}
?>

<section <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
  <?php if ($definitions_list): ?>
    <dl>
      <?php foreach ($definitions_list as $item): ?>
        <?php
          $term = $item['term'];
          $description = $item['description'];
        ?>

        <?php if ($term): ?>
          <dt><?php echo $term ?></dt>
        <?php endif ?>

        <?php if ($description): ?>
          <dd><?php echo $description ?></dd>
        <?php endif ?>
      <?php endforeach ?>
    </dl>
  <?php endif ?>
</section>