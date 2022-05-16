$(".checkbox_group").on("click", ".normal", function() {
    var checked = $(this).is(":checked");
  
    if (!checked) {
      $("#check_all").prop("checked", false);
    } else {
      var is_checked = true;
      
      $(".checkbox_group .normal").each(function(){
        is_checked = is_checked && $(this).is(":checked");
      });
      
      if(!checked){
          $("#check_all").prop("checked", false);
      }
    }
  });