function calculateTotal() {
  var coffeePrice = 550;
  var teaPrice = 250;
  var organicPrice = 450;
  var mocca = 850;
  var espresso = 1250;
  var americano = 1350;

  var quantityCoffee = parseInt(document.querySelector('input[name="quantity_coffee"]').value);
  var quantityTea = parseInt(document.querySelector('input[name="quantity_tea"]').value);
  var quantityOrganic = parseInt(document.querySelector('input[name="quantity_organic"]').value);
  var quantityMocca = parseInt(document.querySelector('input[name="quantity_mocca"]').value);
  var quantityEspresso = parseInt(document.querySelector('input[name="quantity_espresso"]').value);
  var quantityAmericano = parseInt(document.querySelector('input[name="quantity_americano"]').value);







  var total = (quantityCoffee * coffeePrice) + (quantityTea * teaPrice)
   + (quantityOrganic * organicPrice) + (quantityMocca * mocca )
   + (quantityEspresso * espresso) + (americano * quantityAmericano);

  document.getElementById("totalAmount").textContent = "PKR " + total.toFixed(2);
}

// Attach event listener to quantity inputs
var quantityInputs = document.querySelectorAll('input[type="number"]');
quantityInputs.forEach(function (input) {
  input.addEventListener('input', calculateTotal);
});

// Calculate initial total on page load
calculateTotal();
