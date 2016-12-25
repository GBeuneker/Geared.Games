var animationLength = 500;

$(function(){
  $(".nav-element").click(function(e){
    var positionDiff = $(this).offset().left - $("#nav-gear").offset().left;

    Rotate((positionDiff > 0?1:-1)*180, $("#nav-gear"));
    var offset = $(this).offset();
    Translate($(this).offset().left +$(this).outerWidth()/2 - $("#nav-gear").outerWidth()/2, $("#nav-gear"));
  });
});


function Rotate(degree, element)
{
  $({deg: 0}).animate({deg: degree}, {
        duration: animationLength,
        step: function(now){
            element.css({
                 transform: "rotate(" + now + "deg)"
            });
        }
    });
}

function Translate(position, element)
{
  element.animate({
    left: position,
  }, animationLength);
}
