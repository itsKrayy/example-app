/**
* this was just a test I did, the final version actually works, but I didn't release it to the public since I use it for building fast landing pages.
*/
$(document).foundation();
$(document).ready(function() {
  var cloned;
  var firstTime = true;
  $(".draggable").draggable({
    revert: true,
    drag: function() {
      cloned = $(this).html();
    },
    scroll: false,
    start: function(e, ui){
    }
  });
  $("#site").droppable({
    tolerance: "pointer"
  });
  $("#site").on('drop', function(e, ui) {
    $(this).append(cloned);
    cloned = "";
  })
  $("#site").on('click', 'img', function() {
    $(this).remove();
  });
  $("#site").sortable();
  $("#generate").click(function() {
    var _text = "";
    $("#site").find("img").each(function(){ 
      switch(this.id){
        case "1":
          _text += "<form><input type=\"text\" value=\"Name\" /></form>";
          break;
        case "2":
          _text += "<h4>This is who we are</h4>";
          break;
        case "3":
          _text += "<a href=\"https://google.com\" target=\"_blank\">Help</a>";
          break;
      }
    });
    $("#code").text(_text);
    var popup = new Foundation.Reveal($('#codemodal'));
    popup.open();
    return false;
  });
})
