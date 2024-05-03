<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

if ( !empty( $attributes['timerDuration'] ) ) : ?>

  <div class="wp-block-timer-block timer"
    data-duration="<?php echo $attributes['timerDuration']; ?>"
    data-unit="<?php echo !empty( $attributes['timeUnit'] ) ? $attributes['timeUnit'] : 'minutes'; ?>"
    data-colors="<?php echo !empty( $attributes['timerColors'] ) ? $attributes['timerColors'] : 'false'; ?>"
    <?php echo get_block_wrapper_attributes(); ?>>
    <div class="timer-block-body">
      <div class="circle">
        <svg>
          <circle cx="70" cy="70" r="60"></circle>
          <circle cx="70" cy="70" r="60" id="timerseconds" class=""></circle>
        </svg>
        <div id="seconds">
          <svg xmlns="http://www.w3.org/2000/svg" class="clock" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z"/>
            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1"/>
          </svg>
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