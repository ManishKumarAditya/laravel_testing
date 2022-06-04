@extends('layouts.base')
@section('content')
<div class="container">
    <div class="col-lg-8 mx-auto mt-5">
        <div class="card">
            <div class="card-header bg-dark text-bold text-white"><h2>Send otp to your mobile no</h2></div>
            <div class="card-body">
                <form action="{{ route('sendOTP') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" name="sendotp" class="btn btn-success">Send OTP</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
