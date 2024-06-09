<?php
/**
 * Betting offers block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$betting_offers = get_field('betting_offers');

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id=' . esc_attr( $block['anchor'] ) . ' ';
}

// Create class attribute allowing for custom "className" values.
$class_name = 'betting-offers';
if ( ! empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}
?>

<section <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
  <?php foreach ($betting_offers as $key => $betting_offer): ?>
    <?php
      $label = $betting_offer['label'];
      $image_id = $betting_offer['image'];
      $title = $betting_offer['title'];
      $profit = $betting_offer['profit'];
      $conditions = $betting_offer['conditions'];
      $url = $betting_offer['url'];
      $rating = $betting_offer['rating'];
    ?>

    <div class="betting-offer">
      <?php if ($label): ?>
        <div class="betting-offer__label-wrapper">
          <div class="betting-offer__number">
            <?php echo $key + 1 ?>
          </div>

          <div class="betting-offer__label">
            <?php echo $label ?>
          </div>
        </div>
      <?php endif ?>

      <div class="betting-offer__wrapper">
        <?php if ($image_id): ?>
          <?php echo wp_get_attachment_image( $image_id, 'full', false, [
            'class' => 'betting-offer__img'
          ] ) ?>
        <?php endif ?>

        <div class="betting-offer__title-wrapper">
          <?php if ($title): ?>
            <h3 class="betting-offer__title">
              <?php echo $title ?>
            </h3>
          <?php endif ?>

          <?php if ($profit): ?>
            <div class="betting-offer__profit">
              <?php echo $profit ?>
            </div>
          <?php endif ?>
        </div>

        <?php if ($conditions): ?>
          <ul class="list list--betting-offer betting-offer__conditions">
            <?php foreach ($conditions as $condition): ?>
              <li class="list__item">
                <?php echo $condition['title'] ?>
              </li>
            <?php endforeach ?>
          </ul>
        <?php endif ?>

        <div class="betting-offer__btn-and-rating">
          <?php if ($url): ?>
            <a href="<?php echo $url ?>" class="btn betting-offer__btn">INSCRIVEZ-VOUS</a>
          <?php endif ?>

          <?php if ($rating): ?>
            <div class="rating">
              <ul class="rating__stars">
                <?php for ($i = 0; $i < $rating; $i++): ?>
                  <li class="rating__star"></li>
                <?php endfor ?>
              </ul>

              <div class="rating__mark"><?php echo number_format($rating, 1) ?></div>
            </div>
          <?php endif ?>
        </div>
      </div>
    </div>

  <?php endforeach ?>
</section>