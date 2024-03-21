@extends('admin.layouts.main')

@section('title', 'List Portal')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Portal /</span>
            List
        </h4> --}}
        <!-- Bordered Table -->
        <div class="card">
            <div class="d-flex justify-content-between">
                <h5 class="card-header">List Portal</h5>
                <a href="{{ route('admin.portal.create') }}" class="btn btn-success m-3">Create
                    Portal</a>
            </div>

            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="display table table-bordered" id="app_table" width="100%">
                        <thead class="bg-primary">
                            <tr class="text-center" style="font-weight: bold;">
                                <th style="max-width: 30px;">No</th>
                                <th>Topic</th>
                                <th>Description</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th style="width: 50px;">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this portal?
                    <input type="text" readonly class="form-control-plaintext" id="title_portal">
                    <input type="hidden" id="id_portal">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="btn-approve-delete">Yes, Delete!</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .table th {
            color: white !important;
            margin-top: 20px !important;
        }

        .description-column {
            max-width: 250px;
            white-space: pre-wrap;
        }
    </style>
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {

            @if (session()->has('success'))
                toastr['success']("{{ Session('success') }}")
            @endif

            var table = $('#app_table').DataTable({
                'lengthChange': true,
                'processing': true,
                'serverSide': false,
                'orderable': true,
                ajax: {
                    url: "{{ route('admin.portal.list_ajax') }}",
                },
                columns: [{
                        data: null,
                        orderable: true,
                        searchable: true,
                        render: function(data, type, row, meta) {
                            var rowIndex = meta.row + meta.settings._iDisplayStart + 1;
                            return `<div class="text-center">${rowIndex}</div>`;
                        },
                    },
                    {
                        data: 'title',
                        name: 'title',
                    },
                    {
                        data: 'description',
                        name: 'description',
                        className: 'description-column',
                    },
                    {
                        data: 'created_name',
                        name: 'created_name',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data) {
                            return new Date(data).toLocaleDateString('en-GB', {
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric'
                            });
                        }
                    },
                    {
                        orderable: false,
                        searchable: false,
                        data: null,
                        render: function(data, type, row, meta) {
                            return `
                                <div class="text-center">
                                    <a href="{{ url('admin/portal/edit/') }}/${row.id}" class="btn btn-primary"><i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                            <button class="btn btn-danger btn-delete" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal" data-id="${data.id}" data-title="${data.title}"><i class="mdi mdi-trash-can-outline"></i>
                                            </button>
                                </div>
                        `;
                        }
                    },
                ],
            });
            $('#app_table').on('click', '.btn-delete', function() {
                var id_portal = $(this).data('id');
                var title_portal = $(this).data('title');
                $('#id_portal').val(id_portal)
                $('#title_portal').val(title_portal)
            })
            $('#btn-approve-delete').on('click', function() {
                let id_portal = $('#id_portal').val();
                $.ajax({
                    url: "{{ route('admin.portal.destroy') }}",
                    type: "POST",
                    data: {
                        id: id_portal,
                        '_token': "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        toastr['success'](response);
                        table.ajax.reload();
                        $('#deleteModal').modal('hide');
                    },
                    error: function(xhr, status, error) {
                        toastr['error']('Error');
                        $('#deleteModal').modal('hide');
                    }
                });
            });
        });
    </script>
@endpush
