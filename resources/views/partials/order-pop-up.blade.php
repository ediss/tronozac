

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Narudzbina</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action = "{{route('order')}}" method = "POST">

        @csrf
            <div class="form-group">
                <label for="label_name">Ime i prezime</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
                <label for="label_email">E-mail adresa</label>
                <input type="email" class="form-control" id = "email_order" name="email" required>
                <small id="emailHelp" class="form-text text-muted">Ne delimo Vašu e-mail adresu i ostale podatke sa drugima</small>
            </div>

            <div class="form-group">
                <label for="label_phone">Broj telefona</label>
                <input type="text" class="form-control" name="phone" required>
            </div>

            <div class="form-group">
                <label for="label_quantity">Količina</label>
                <input type="number" class = "form-control" id = "quantity" name="quantity" min="1" max="1000" value = "1" required>
            </div>

            <div class="form-group">
                <label for="label_price">Cena</label>
                <input type="text" class = "form-control" id = "price" name="price" value = "999 RSD" disabled>
            </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Odustani</button>
        <button type="submit" class="btn btn-primary purple">Poruči</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
$('#myModal').on('shown.bs.modal', function () {
    var email = $('#emailstart').val();
  $('#myInput').trigger('focus');
  $('#email_order').val(email);
  console.log(".. "+email);

});


$( "#quantity" ).click(function() {
  var quantity = $('#quantity').val();

  var newPrice = quantity * 999;

  $("#price").val(newPrice+" RSD");
});

</script>
