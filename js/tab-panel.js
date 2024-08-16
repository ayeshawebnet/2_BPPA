$(function(){
  
    // set deault arrow position and tab
    moveArrow();
    moveTabs($('.tab-panel__header li.tab-active a'));
    
    var tab = $('.tab-panel__header a').click(function(e){
      e.preventDefault();
      var target = $(this).attr('href');
      
      //Remove tab-active class and add to current click tab     
      $('.tab-panel__header li').removeClass('tab-active');
      $(this).closest('li').addClass('tab-active');
      
      //Move Current active tab
      moveTabs($(this));
     
      //Move arrow shape
      moveArrow();
      
    });
  });
  
  function moveTabs(target){
     var total_tabs = target.closest("li").index();
      $('.tab-panel__content-area').css({
        'transform':'translateX('+ -(100 * total_tabs) +'%)'
      });
  }
  
  function moveArrow(){
    var arrow_size = $('.tab-panel__arrow').outerWidth() / 2;
      var moving_position = $('.tab-active a').position().left + $('.tab-active   a').innerWidth()/2 - arrow_size;
      $('.tab-panel__arrow').css({
        'transform':'translateX('+ moving_position +'px)'
      });
  }