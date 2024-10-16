@extends('admin.layouts.main')

@section('title', 'Edit Portal')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-header">Edit Portal</h5>
                        <a href="{{ route('admin.portal.list') }}" class="btn btn-primary m-3">List
                            Portal</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.portal.update', ['id' => $portal->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="title">Topic</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $portal->title }}" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Description</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <textarea name="description" id="description" class="form-control" rows="10" required>{{ $portal->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="photo">Photo</label>
                                <div class="col-sm-10">
                                    <input type="file" id="photo" name="photo" class="form-control"
                                        accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="preview_photo">Preview Photo Before</label>
                                <div class="col-sm-10">
                                    @if ($portal->photo)
                                        <img src="{{ asset('blog/photo/' . $portal->photo) }}" alt="Photo Preview"
                                            class="mt-2" style="max-width: 200px;">
                                    @else
                                        <input type="text" id="preview_photo" value="Tidak ada photo"
                                            class="form-control" disabled>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h5 class="card-header">List Article</h5>
                        <a href="{{ route('admin.article.create', ['id' => $portal->id]) }}"
                            class="btn btn-success m-3">Create
                            Article</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="display table table-bordered" id="app_table" width="100%">
                                <thead class="bg-primary">
                                    <tr class="text-center" style="font-weight: bold;">
                                        <th style="max-width: 30px;">No</th>
                                        <th>Title</th>
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
            </div>
        </div>
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
                    <input type="text" readonly class="form-control-plaintext" id="title_article">
                    <input type="hidden" id="id_article">
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
                    url: "{{ route('admin.article.list_ajax', ['id' => $portal->id]) }}",
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
                        className: 'description-column',
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
                                    <a href="{{ url('admin/portal/article/edit/') }}/${row.id}" class="btn btn-primary"><i
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
                var id_article = $(this).data('id');
                var title_article = $(this).data('title');
                $('#id_article').val(id_article)
                $('#title_article').val(title_article)
            })
            $('#btn-approve-delete').on('click', function() {
                let id_article = $('#id_article').val();
                $.ajax({
                    url: "{{ route('admin.article.destroy') }}",
                    type: "POST",
                    data: {
                        id: id_article,
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
