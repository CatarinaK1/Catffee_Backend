
//Sort the AdminPanel table when the column header is clicked.
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("menu-table");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

var headers = document.getElementsByTagName("th");
for (var i = 0; i < headers.length; i++) {
  headers[i].addEventListener("click", function() {
    var index = this.cellIndex;
    sortTable(index);
  });
}
