$(function () {
  $('#quantity').on('keyup', function () {
    calculateTotal();
  });
  $('#offers').on('change', function () {
    calculateTotal();
  });
});

function calculateTotal() {
  var quantity = parseInt($('#quantity').val());
  var price = parseFloat($('#offers :selected').data('price'));
  total = quantity * price;
  if(Math.floor(total) == total && $.isNumeric(total)) {
    $('#amount').text(total);
  } else {
    $('#amount').text(0.00);
  }
}