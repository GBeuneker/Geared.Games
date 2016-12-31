$(function(){
  pushFooterDown();
})

$(window).on('resize', function(){
 pushFooterDown();
});

function pushFooterDown()
{
  if($(document).height() <= $(window).height())
  {
    $('footer').css("position", "absolute");
  }
  else {
      $('footer').css("position", "");
  }
}
