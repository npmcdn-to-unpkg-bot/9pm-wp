$(document).ready(function(){
  var $grid = $('#work .masonry').imagesLoaded(function(){
    $grid.masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true
    });
  });

  var $project = $('.project-container .masonry').imagesLoaded(function(){
    $project.masonry({
      // options
      itemSelector: '.grid-item-3',
      columnWidth: '.grid-sizer-3',
      percentPosition: true
    });
  });

  $('.menu-trigger').click(function(e){ $(this).toggleClass('is-open') });
});