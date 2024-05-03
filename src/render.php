<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

if ( !empty( $attributes['timerDuration'] ) ) : ?>

  <div class="wp-block-timer-block timer"
    data-duration="<?php echo $attributes['timerDuration']; ?>"
    data-unit="<?php echo !empty( $attributes['timeUnit'] ) ? $attributes['timeUnit'] : 'minutes'; ?>"
    <?php echo get_block_wrapper_attributes(); ?>>
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

      <button class="btn btn-primary btn-start" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
          <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
        </svg>
      </button>
      <button class="btn btn-primary btn-pause d-none" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
          <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/>
        </svg>
      </button>
    </div>
  </div>

<?php endif; ?>