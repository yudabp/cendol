@extends('layouts.app')
@section('title', 'Admin Dashboard')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card shadow">
            <div class="card-body">
                <button id="add" class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus"></i> Add</button>
                <table class="table table-bordered table-sm" id="table">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>1st Place</th>
                            <th>2nd Place</th>
                            <th>3rd Place</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.min.css') }}">
@endpush

@push('js')
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/js/DataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            'ordering': false,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('dashboard') }}",
            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            }, {
                data: 'tanggal',
                name: 'tanggal'
            }, {
                data: 'waktu',
                name: 'waktu'
            }, {
                data: 'no_satu',
                name: 'no_satu'
            }, {
                data: 'no_dua',
                name: 'no_dua'
            }, {
                data: 'no_tiga',
                name: 'no_tiga'
            }, {
                data: 'action',
                name: 'action',
            } 
            ]
        });
    });
</script>
@endpush