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

{{-- Modal --}}
<div id="modal-number" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Record</h4>
                <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form id="form-number">
                @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">Select Date:</label>
                                <input type="text" name="tanggal" id="tanggal" class="form-control datepicker" placeholder="Select Date" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">Time:</label>
                                <select name="waktu" id="waktu" class="form-control" autocomplete="off">
                                    <option value="">Select Time</option>
                                    <option value="09:00:00">09:00 AM</option>
                                    <option value="09:00:00">09:00 PM</option>
                                    <option value="11:45:00">11:45 AM</option>
                                    <option value="07:00:00">07:00 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">1st Winner:</label>
                                <input type="text" name="no_satu" id="no_satu" class="form-control" onkeypress="return isNumberKey(event)" maxlength="4" minlength="4" placeholder="0000" autocomplete="off">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">2nd Winner:</label>
                                <input type="text" name="no_dua" id="no_dua" class="form-control" onkeypress="return isNumberKey(event)" maxlength="4" minlength="4" placeholder="0000" autocomplete="off">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">3rd Winner:</label>
                                <input type="text" name="no_tiga" id="no_tiga" class="form-control" onkeypress="return isNumberKey(event)" maxlength="4" minlength="4" placeholder="0000" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-1">
                        <div class="col">
                            <input type="hidden" name="action" id="action" value="add">
                            <input type="hidden" name="hidden_id" id="hidden_id">
                            <input type="submit" name="btn" value="Add" id="btn" class="btn btn-sm shadow-sm btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
@endpush

@push('js')
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/js/DataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
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

        // Reset form when close button pressed
        $('.close').on('click', function () {
            $('#form-number')[0].reset();
        });

        // open the datepicker
        $('.datepicker').datepicker({
            todayHighlight: true,
        });

        // Open the modal
        $('#add').on('click', function () {
            $('.modal-title').text('Tambah Baru');
            $('#action').val('add');
            $('#btn').val('Save');
            $('#modal-number').modal('show');
        });

        // Record into database
        $('#form-number').on('submit', function (event) {
            event.preventDefault();
            var url = "";
            var pesan = "";

            // action condition
            if ($('#action').val() == 'add') {
                url = "{{ route('store') }}";
                pesan = "Number added Successfully!";
            }

            // Added record into database
            $.ajax({
                url: url,
                method: 'POST',
                dataType: 'JSON',
                data: $(this).serialize(),
                success: function (data) {
                    var html = '';
                    if (data.errors) {
                        html = '<div class="alert alert-danger"><ul>';
                        for (var i = 0; i < data.errors.length; i++) {
                            html += '<li>'+ data.errors[i] +'</li>';
                        }
                        html += '</ul></div>';
                    }

                    if (data.success) {
                        toastr.success(pesan);
                        $('#form-number')[0].reset();
                        $('#modal-number').modal('hide');
                        $('#action').val('add');
                        $('#btn').removeClass('btn-info').addClass('btn-success').val('Save');
                        $('#table').DataTable().ajax.reload();
                    }
                    $('#form_result').html(html);
                }
            });
        });

        // Input only number function
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
        }

        // toastr option
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    });
</script>
@endpush