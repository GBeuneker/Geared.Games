var animationLength = 500;
var activeElement;
var gearElement;
var gearAngle;

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

  $(".nav-element").on('mouseenter',function(){
    JiggleGear($(this));
  });

  $(".nav-element").on('mouseleave',function(){
    gearElement.css({
         transform: "rotate(" + 0 + "deg)"
    });
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
  $({deg: gearAngle}).animate({deg: degree}, {
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

function JiggleGear(element)
{
  if(element.offset().left < activeElement.offset().left)
    gearAngle = 10;
  else if(element.offset().left > activeElement.offset().left)
    gearAngle = -10;
  else
    gearAngle = 0;

  gearElement.css({
       transform: "rotate(" + gearAngle + "deg)"
  });
}

function DelayRedirect(link)
{
  setTimeout(function() {window.location = link}, animationLength);
}

function GetTargetPos()
{
  return activeElement.offset().left + activeElement.outerWidth()/2 - gearElement.outerWidth()/2;
}
