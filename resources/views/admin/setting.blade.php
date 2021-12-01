@extends('layouts.app')
@section('title', 'Alamaba Lotttery')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Setting Your Profile</h4>
                <form id="form-setting" method="POST" action="{{ route('setting-update') }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" placeholder="Password">
                            <span toggle="#password" class="fa fa-lg fa-eye field-icon toggle-password"></span>

                            @error('password')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirm-password" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control form-control-sm" id="confirm-password" placeholder="Confirm Password" onkeyup="checkPasswordMatch();" required>
                            <span toggle="#confirm-password" class="fa fa-lg fa-eye field-icon toggle-passwords"></span>
                            <span id="text-match"></span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="id" id="id" value="{{ auth()->user()->id }}">
                            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-danger mr-2"><i class="fa fa-arrow-left"></i> Cancel</a>
                            <button type="submit" id="update" class="btn btn-sm btn-outline-info">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- CSS --}}
@push('css')
<style>
    .field-icon {
        float: right;
        margin-right: 8px;
        margin-top: -23px;
        position: relative;
        z-index: 2;
        cursor: pointer;
    }
</style>
@endpush

{{-- JS --}}
@push('js')
<script>
    $(document).ready(function() {
        $(".toggle-password").on('click', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        $(".toggle-passwords").on('click', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });

    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#confirm-password").val();

        if (password != confirmPassword) {
            $("#text-match").html("Passwords do not match!").addClass('text-danger').removeClass('text-success');
        } else {
            $("#text-match").html("Passwords match.").addClass('text-success').removeClass('text-danger');
        }
    }
</script>
@endpush