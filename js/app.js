$(document).ready(function(){
  var $grid = $('.masonry').imagesLoaded(function(){
    $grid.masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true
    });
  });
});