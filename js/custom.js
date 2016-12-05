/**
 * @author:   Mats Wikmar, mow-github, matwik@gmail.com
 * @description
 * 1. start a bs3 carousel (images cover the entire screen + scale against center)
 * 2. myCarouselObj.. toggle between large / small images in the carousel ( based on the screen width )
 * */


$(document).ready(function () {


  /**
   * @description
   * init bs3 carousel
   *
   * @param
   * interval: number (etc: 4000)
   * pause: string    (etc: null or hover)
   *
   * @purpose
   *
   * */
  let $myCarousel = $('#carousel1');
  $myCarousel.carousel({
    interval: 4000,
    pause: null
  });

  /**
   * @description
   * 1. toggle bs3 carousel images ( depends on the screen width )
   * 2. Etc. load small images if the width is less then 480px and large images if the width is > 480px
   *
   * @param
   * src_flag:    boolean (may prevent the iterate loop from executing over and over..if the current image is set)
   * selector:    string  (every carousel divTag that contains the style-attribute.. url to the image)
   * screenWidth: number  (check width onload and on resize (reassign value) )
   * dataSrc:     string  (holder for a large / small image)
   *
   * @purpose
   * 1. Check if one has to change the current images (php loads large images by default)
   * 2. Change images upon load and resize of the window
   * */
  let myCarouselObj = {
    src_flag: false,
    selector: $("#carousel1 .fill"),
    screenWidth: $(window).width(),
    dataSrc: null,
    checkScreenWidth: function(){
      if( this.screenWidth <= 480 ){
        this.dataSrc = "data-my-srcMini";
      }else if( this.screenWidth > 480 ){
        this.dataSrc = "data-my-srcOrg";
      }
    },
    iterate: function(){
      $.each(this.selector, (key,obj) => {
        $(obj).css("background-image",'url(' + $(obj).attr(this.dataSrc) + ')');
      });
    },
    initImages: function(){
      this.checkScreenWidth();
      this.iterate();
    },
    toggleImages: function(){
      $(window).on("resize",(e) => {
        this.screenWidth = $(window).width();
        this.checkScreenWidth();

        if( this.dataSrc === "data-my-srcMini" && !this.src_flag ) {
          this.src_flag = true;
          this.iterate();
        }else if( this.dataSrc === "data-my-srcOrg" && this.src_flag ){
          this.src_flag = false;
          this.iterate();
        }

      });
    }
  };
  myCarouselObj.initImages();
  myCarouselObj.toggleImages();

});

