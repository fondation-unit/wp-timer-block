<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

if ( !empty( $attributes['timerDuration'] ) ) : ?>

  <div class="wp-block-timer-block timer" data-duration="<?php echo $attributes['timerDuration']; ?>" <?php echo get_block_wrapper_attributes(); ?>>
    <div class="timer-block-body">
      <div class="circle">
        <svg>
          <circle cx="70" cy="70" r="60"></circle>
          <circle cx="70" cy="70" r="60" id="timerseconds" class=""></circle>
        </svg>
        <div id="seconds">
          <i class="bi bi-alarm"></i>
        </div>
      </div>

      <button class="btn btn-primary btn-start" type="button">Start</button>
      <button class="btn btn-primary btn-pause d-none" type="button">Pause</button>
    </div>
  </div>

<?php endif; ?>