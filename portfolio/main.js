$(document).ready(function(){
    $(".sm").hover(function(){
      $(this).addClass("bigbtn")
    },
      function(){
      $(this).removeClass("bigbtn")
    });
});
