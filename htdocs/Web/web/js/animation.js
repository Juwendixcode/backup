
var makeBSS = function (el, options) {
    // a collection of all of the slideshows
    var $slideshows = document.querySelectorAll(el),
        
        // this slideshow instance 
        $slideshow = {},
        
        // the slideshow object we will use as prototype 
        Slideshow = {
            init: function (el, options) {
               /* ...
                  slideshow initialization stuff 
                  happens here */
            },
            showCurrent: function (i) {
               /* ...
                  show current slide and hide the rest
                  increment/decrement counter to keep track
                  of our place in the slideshow */
            },
            injectControls: function (el) {
               /* ...
                  add previous & next buttons 
                  to the slideshow */
            },
            addEventListeners: function (el) {
               /* ...
                  add event listeners to prev/next
                  buttons, and to left/right arrow keys
                  for keyboard navigation */    
            },
            autoCycle: function (el, speed, pauseOnHover) {
               /* ...
                  make slides auto-advance on a timer
                  and pause timer on hover */
            },
            addFullScreen: function(el){
               /* ...
                  add full screen toggle button */
            },
            addSwipe: function(el){
               /* ...
                  add touch/swipe functionality 
                  using hammerjs */
            },
            toggleFullScreen: function(el){
               /* ...
                  toggle full screen on/off
                  as button is clicked */ 
            } 
            
        }; // end Slideshow object 
        
    /* make instances of Slideshow as needed,
       the forEach makes it so that we can create multiple
       slideshows if $slideshows is a list of DOM elements */                     
    [].forEach.call($slideshows, function (el) {
        /* instantiate a new object 
           using Slideshow as its prototype */      
        $slideshow = Object.create(Slideshow);
        /* call the init method on the new object
           and pass in the options we've set */
        $slideshow.init(el, options);
    });
};

/* set up the options for the slideshow
   we're about to create */
var opts = {
    auto : {
        speed : 5000, 
        pauseOnHover : true
    },
    fullScreen : true, 
    swipe : true
};

/* call makeBSS, passing in the element(s)
   we want to make a slideshow, and the
   options we have set */
makeBSS('.demo1', opts);
