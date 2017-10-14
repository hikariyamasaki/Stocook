function okPushed() {

  var food_name = document.input_area.food_name.value
  var amount= Number(document.input_area.amount.value)

  var table = document.getElementById('table_meat')
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(-1);
  var cell2 = row.insertCell(-1);
  cell1.innerHTML = food_name;
  cell2.innerHTML = amount;

}
