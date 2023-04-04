function add_req() {
  var dropdown = document.getElementById("req_drop");
  var label = document.getElementById("req_text");
  var selectedOption = dropdown.options[dropdown.selectedIndex].text;
  if (label.innerHTML.indexOf(selectedOption) === -1) {
      label.innerHTML += selectedOption + ";        ";
  } else {
      alert("Elemento ya añadido")
  }
}