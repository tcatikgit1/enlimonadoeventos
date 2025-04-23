import $ from 'jquery';
import 'datatables.net-bs5';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';

$(document).ready(function () {
  $.fn.DataTable;
  $('#blogs-table').DataTable({
    language: {
      url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
    },
    responsive: true,
    autoWidth: false,
    pageLength: 7,
    columnDefs: [
      { orderable: false, targets: -1 }
    ]
  });

  $('.btn-edit').on('click', function () {
    const row = $(this).closest('tr');
    const blogId = row.data('id');

    $('#editForm').attr('action', `${baseUrl}/${blogId}`);
    $('#editForm input[name="title"]').val(row.data('title'));
    $('#editForm input[name="author"]').val(row.data('author'));
    $('#editForm textarea[name="excerpt"]').val(row.data('excerpt'));
    $('#editForm textarea[name="content"]').val(row.data('content'));
    $('#editForm input[name="published_at"]').val(row.data('published'));
  });
});
