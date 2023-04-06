function del_row(event) {
  var deleteRow = $(event.target).closest('tr').data('delete-row');
  if (deleteRow) {
    $(event.target).closest('tr').remove();
  }
}