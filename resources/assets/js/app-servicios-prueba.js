
'user strict';

$(function() {

    var dtServiciosTable = $('.datatables-servicios');
    var statusObj = {
        1: { title: 'Active', class: 'bg-label-success' },
        2: { title: 'Inactive', class: 'bg-label-secondary' }
      };
      

      var userView = baseUrl + 'app/user/view/account';

      if(dtServiciosTable.length)
      {
        var dtServicios = dtServiciosTable.DataTable({
            ajax: assetsPath + 'json/app-servicios.json',
            columns: [
                { data: 'id'},
                { data: 'id'},
                { data: 'nombre'},
                { data: 'descripcion'},
                { data: 'precio'},
                { data: 'duracion'},
                { data: 'status'},
            ],
            columnDefs: [
                {
                    className: 'control',
                    orderable: false,
                    searchable: false,
                    responsivePriority: 2,
                    targets: 0,
                    render: function(){
                        return '';
                    }
                },
                {
                    targets: 1,
                    orderable: false,
                    checkboxes: {
                        selectAllRender: '<input type="checkbox" class="form-check-input">'
                    },
                    render: function(data, type, full, meta){
                        return  '<input type="checkbox" class="dt-checkboxes form-check-input">'
                    },
                    searchable: false
                },
                {
                    targets: 2,
                    responsivePriority: 4,
                    render: function(data, type, full, meta) {
                        var $name = full['nombre']

                        return (
                            '<div class="d-flex justify-content-left align-items-center">' +
                            '<div class="d-flex flex-column">' +
                            '<a class="text-heading text-truncate"><span class="fw-medium">' +
                            $name +
                            '</span></a>' +
                            '</div>' +
                            '</div>'
                          );
                    }
                },
                {
                    targets: 3,
                    render: function(data, type, full, meta) {
                        var $descripcion = full['descripcion'];

                        return (
                            "<span class='text-truncate d-flex align-items-center text-heading'>" +
                            $descripcion +
                            '</span>' 
                        );
                    }
                },
                {
                    targets: 4,
                    render: function (data, type, full, meta) {
                      var $precio = full['precio'];
          
                      return '<span class="text-heading">' + $precio + '</span>';
                    }
                },
                {
                    targets: 5,
                    render: function (data, type, full, meta) {
                      var $duracion = full['duracion'];
          
                      return (
                        '<span class="badge text-heading">' + $duracion +'</span>'
                      );
                    }
                },
                {
                    targets: 6,
                    render: function (data, type, full, meta) {
                      var $status = full['status'];
                      return (
                        '<span class="badge ' +
                        statusObj[$status].class +
                        '" text-capitalized>' +
                        statusObj[$status].title +
                        '</span>'
                      );
                    }
                },
                {
                    targets: 7,
                    title: 'Actions',
                    searchable: false,
                    orderable: false,
                    render: function (data, type, full, meta) {
                      return (
                        '<div class="d-flex align-items-center">' +
                        '<a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record"><i class="ti ti-trash ti-md"></i></a>' +
                        '<a href="" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill"><i class="ti ti-eye ti-md"></i></a>' +
                        '<a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a>' +
                        '<div class="dropdown-menu dropdown-menu-end m-0">' +
                        '<a href="javascript:;" class="dropdown-item">Edit</a>' +
                        '<a href="javascript:;" class="dropdown-item">Suspend</a>' +
                        '</div>' +
                        '</div>'
                      );
                    }
                  }
            ],
            order: [[2, 'desc']],
            language: {
              sLengthMenu: 'Show _MENU_',
              search: '',
              searchPlaceholder: 'Search User',
              paginate: {
                next: '<i class="ti ti-chevron-right ti-sm"></i>',
                previous: '<i class="ti ti-chevron-left ti-sm"></i>'
              }
            },
        })
      }
});