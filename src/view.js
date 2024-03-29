/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */


function initializeTimer(timerBlock) {
  // Elements
  const seconds = timerBlock.querySelector('#seconds');
  const timerseconds = timerBlock.querySelector('#timerseconds');

  // Buttons
  const startBtn = timerBlock.querySelector('.btn.btn-start');
  const pauseBtn = timerBlock.querySelector('.btn.btn-pause');

  // State
  const duration = timerBlock.dataset.duration || 60
  let timeleft = duration;
  let isRunning = false;

  const toggleButtons = () => {
    startBtn.classList.toggle('d-none');
    pauseBtn.classList.toggle('d-none');
  }

  const resetState = () => {
    timeleft = duration;
    isRunning = false;
    seconds.className = "";
    toggleButtons();
  }

  startBtn.addEventListener('click', () => {
    toggleButtons();
    isRunning = true;

    let interval = setInterval(() => {
      if (timeleft === 0) {
        resetState();
        clearInterval(interval);
      }

      if (isRunning && timeleft > 0) {
        timeleft -= 1;

        seconds.className = "";
        seconds.innerHTML = timeleft;
        timerseconds.setAttribute('class', '');
        timerseconds.style.strokeDashoffset = (440 * (duration - timeleft)) / duration;

        if (timeleft > duration / 3 * 2) {
          timerseconds.classList.add("green");
          seconds.classList.add("green");
        } else if (timeleft > duration / 3) {
          timerseconds.classList.add("yellow");
          seconds.classList.add("yellow");
        } else {
          timerseconds.classList.add("red");
          seconds.classList.add("red");
        }
      }
    }, 1000);
  });

  pauseBtn.addEventListener('click', () => {
    isRunning = !isRunning;
  });
}


const timers = document.querySelectorAll('.timer');
timers.forEach(timerBlock => {
  initializeTimer(timerBlock);
});