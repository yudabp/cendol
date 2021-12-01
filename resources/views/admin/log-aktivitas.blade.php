@extends('layouts.app')
@section('title', config('app.name'))

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card shadow">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('status') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-striped" id="table">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Action</th>
                                <th>User Agent</th>
                                <th>IP</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
@endpush

@push('js')
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/js/DataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            'ordering': false,
            processing: true,
            responsive: true,
            serverSide: true,
            ajax: {
                url: "{{ route('log') }}",
            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            }, {
                data: 'date',
                name: 'date'
            }, {
                data: 'name',
                name: 'name'
            }, {
                data: 'action',
                name: 'action'
            }, {
                data: 'user_agent',
                name: 'user_agent'
            }, {
                data: 'ip',
                name: 'ip'
            }, {
                data: 'country',
                name: 'country'
            }]
        });

    });
</script>
@endpush