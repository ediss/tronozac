$( ".ddl_model" ).change(function() {
    var model = $(".ddl_model").val();

    if(model == "oktopod") {
        $('.d-none').addClass('d-block');
        //$('.d-none').removeClass('d-none');
        $('#btn_order').click(function() {
            checked = $("input[type=checkbox]:checked").length;

            if(!checked) {
              alert("Izaberite boju.");
              return false;
            }

          });
    }
    else {
        $('.d-none').removeClass('d-block');
    }
  });

  $(document).ready(function () {

});