<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery"
    class="blueimp-gallery blueimp-gallery-controls"
    data-start-slideshow="true"
    data-slideshow-interval="5000"
    data-filter=":not(.slick-cloned)"
    data-close-on-slide-click="true"
>
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev" tabindex="-1">‹</a>
    <a class="next" tabindex="-1">›</a>
    <a class="close" tabindex="-1">×</a>
    <a class="play-pause" tabindex="-1"></a>
    <ol class="indicator"></ol>
</div>

<?php /*
Doc of blueimp Gallery https://github.com/blueimp/Gallery

------------------------------------------------------------------------------------------

For auto play:
class="blueimp-gallery-playing"
data-start-slideshow="true"
data-slideshow-interval="3000"

------------------------------------------------------------------------------------------

All other options: (settable also trough `data-api`)
var options = {
  // The Id, element or querySelector of the gallery widget:
  container: '#blueimp-gallery',
  // The tag name, Id, element or querySelector of the slides container:
  slidesContainer: 'div',
  // The tag name, Id, element or querySelector of the title element:
  titleElement: 'h3',
  // The class to add when the gallery is visible:
  displayClass: 'blueimp-gallery-display',
  // The class to add when the gallery controls are visible:
  controlsClass: 'blueimp-gallery-controls',
  // The class to add when the gallery only displays one element:
  singleClass: 'blueimp-gallery-single',
  // The class to add when the left edge has been reached:
  leftEdgeClass: 'blueimp-gallery-left',
  // The class to add when the right edge has been reached:
  rightEdgeClass: 'blueimp-gallery-right',
  // The class to add when the automatic slideshow is active:
  playingClass: 'blueimp-gallery-playing',
  // The class for all slides:
  slideClass: 'slide',
  // The slide class for loading elements:
  slideLoadingClass: 'slide-loading',
  // The slide class for elements that failed to load:
  slideErrorClass: 'slide-error',
  // The class for the content element loaded into each slide:
  slideContentClass: 'slide-content',
  // The class for the "toggle" control:
  toggleClass: 'toggle',
  // The class for the "prev" control:
  prevClass: 'prev',
  // The class for the "next" control:
  nextClass: 'next',
  // The class for the "close" control:
  closeClass: 'close',
  // The class for the "play-pause" toggle control:
  playPauseClass: 'play-pause',
  // The list object property (or data attribute) with the object type:
  typeProperty: 'type',
  // The list object property (or data attribute) with the object title:
  titleProperty: 'title',
  // The list object property (or data attribute) with the object alt text:
  altTextProperty: 'alt',
  // The list object property (or data attribute) with the object URL:
  urlProperty: 'href',
  // The list object property (or data attribute) with the object srcset URL(s):
  srcsetProperty: 'urlset',
  // The gallery listens for transitionend events before triggering the
  // opened and closed events, unless the following option is set to false:
  displayTransition: true,
  // Defines if the gallery slides are cleared from the gallery modal,
  // or reused for the next gallery initialization:
  clearSlides: true,
  // Defines if images should be stretched to fill the available space,
  // while maintaining their aspect ratio (will only be enabled for browsers
  // supporting background-size="contain", which excludes IE < 9).
  // Set to "cover", to make images cover all available space (requires
  // support for background-size="cover", which excludes IE < 9):
  stretchImages: false,
  // Toggle the controls on pressing the Return key:
  toggleControlsOnReturn: true,
  // Toggle the controls on slide click:
  toggleControlsOnSlideClick: true,
  // Toggle the automatic slideshow interval on pressing the Space key:
  toggleSlideshowOnSpace: true,
  // Navigate the gallery by pressing left and right on the keyboard:
  enableKeyboardNavigation: true,
  // Close the gallery on pressing the ESC key:
  closeOnEscape: true,
  // Close the gallery when clicking on an empty slide area:
  closeOnSlideClick: true,
  // Close the gallery by swiping up or down:
  closeOnSwipeUpOrDown: true,
  // Emulate touch events on mouse-pointer devices such as desktop browsers:
  emulateTouchEvents: true,
  // Stop touch events from bubbling up to ancestor elements of the Gallery:
  stopTouchEventsPropagation: false,
  // Hide the page scrollbars:
  hidePageScrollbars: true,
  // Stops any touches on the container from scrolling the page:
  disableScroll: true,
  // Carousel mode (shortcut for carousel specific options):
  carousel: false,
  // Allow continuous navigation, moving from last to first
  // and from first to last slide:
  continuous: true,
  // Remove elements outside of the preload range from the DOM:
  unloadElements: true,
  // Start with the automatic slideshow:
  startSlideshow: false,
  // Delay in milliseconds between slides for the automatic slideshow:
  slideshowInterval: 5000,
  // The direction the slides are moving: ltr=LeftToRight or rtl=RightToLeft
  slideshowDirection: 'ltr',
  // The starting index as integer.
  // Can also be an object of the given list,
  // or an equal object with the same url property:
  index: 0,
  // The number of elements to load around the current index:
  preloadRange: 2,
  // The transition speed between slide changes in milliseconds:
  transitionSpeed: 400,
  // The transition speed for automatic slide changes, set to an integer
  // greater 0 to override the default transition speed:
  slideshowTransitionSpeed: undefined,
  // The event object for which the default action will be canceled
  // on Gallery initialization (e.g. the click event to open the Gallery):
  event: undefined,
  // Callback function executed when the Gallery is initialized.
  // Is called with the gallery instance as "this" object:
  onopen: undefined,
  // Callback function executed when the Gallery has been initialized
  // and the initialization transition has been completed.
  // Is called with the gallery instance as "this" object:
  onopened: undefined,
  // Callback function executed on slide change.
  // Is called with the gallery instance as "this" object and the
  // current index and slide as arguments:
  onslide: undefined,
  // Callback function executed after the slide change transition.
  // Is called with the gallery instance as "this" object and the
  // current index and slide as arguments:
  onslideend: undefined,
  // Callback function executed on slide content load.
  // Is called with the gallery instance as "this" object and the
  // slide index and slide element as arguments:
  onslidecomplete: undefined,
  // Callback function executed when the Gallery is about to be closed.
  // Is called with the gallery instance as "this" object:
  onclose: undefined,
  // Callback function executed when the Gallery has been closed
  // and the closing transition has been completed.
  // Is called with the gallery instance as "this" object:
  onclosed: undefined
}

*/ ?>