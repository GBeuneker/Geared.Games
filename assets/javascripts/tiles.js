$(function(){
  turnTiles();
  resizeTiles();
});

function turnTiles(){
  $(".tile").each(function(index){
    $(this).css("animation-delay", 0.05*index + "s" );
  });
}

$(window).on('resize', function(){
  resizeTiles();
})

function resizeTiles()
{
  var width = $(window).width();

  if(width < 1010)
  {
    $(".tile").each(function(index){
      $(this).removeClass("col-md-4");
    });
  }
  else {
    $(".tile").each(function(index){
      $(this).addClass("col-md-4");
    });
  }
}
