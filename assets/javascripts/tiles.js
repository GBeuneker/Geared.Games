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
      $(this).css("width", 400 + "pt");
      $(this).css("height", 400 + "pt");
      $(this).removeClass("col-md-4");
    });
    $(".tiles").css("text-align", "center");

  }
  else {
    $(".tile").each(function(index){
      $(this).css("width", 250 + "pt");
      $(this).css("height", 300 + "pt");
      $(this).addClass("col-md-4");
    });
    $(".tiles").css("text-align", "");
  }
}
