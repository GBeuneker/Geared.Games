var animationLength = 500;
var activeElement;
var gearElement;

/*-----------------------------------------------------------------------------
DOCUMENT EVENTS
-----------------------------------------------------------------------------*/
$(function(){
  activeElement = $("#active");
  gearElement = $("#nav-gear");

  // Place gear at the right position
  UpdateGearPosition(GetTargetPos());


  // Click on a link
  $(".nav-element").click(function(e){
    activeElement = $(this);

    var targetLocation = $(this).offset().left +$(this).outerWidth()/2 - gearElement.outerWidth()/2;
    MoveGearTo(targetLocation);

    // Delay the page redirect
    e.preventDefault();
    DelayRedirect($(this).attr('href'));
  });
});

$(window).on('resize', function(){
  UpdateGearPosition();
});

/*-----------------------------------------------------------------------------
FUNCIONS
-----------------------------------------------------------------------------*/
function UpdateGearPosition()
{
  var targetPos = activeElement.offset().left + activeElement.outerWidth()/2 - gearElement.outerWidth()/2;

  gearElement.css({
    left: targetPos
  });
}

function RotateGear(degree)
{
  $({deg: 0}).animate({deg: degree}, {
        duration: animationLength,
        step: function(now){
            gearElement.css({
                 transform: "rotate(" + now + "deg)"
            });
        }
    });
}

function MoveGearTo(position)
{
  var posDiff = gearElement.offset().left - position;

  gearElement.animate({
    left: position,
  }, animationLength);

  RotateGear(posDiff);
}

function DelayRedirect(link)
{
  setTimeout(function() {window.location = link}, animationLength);
}

function GetTargetPos()
{
  return activeElement.offset().left + activeElement.outerWidth()/2 - gearElement.outerWidth()/2;
}
