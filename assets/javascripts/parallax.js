var parElem;

$(function(){
  parElem =  $(".parallax");
  if(parElem)
  {
    $(document).scroll(function(){
      ApplyParallax();
    });
  }
});

function ApplyParallax()
{
  var scroll = $(document).scrollTop();
  parElem.css("background-position", "50% " + (-scroll/5) + "px");
  parElem.css("opacity", (1 - scroll/500));
}
