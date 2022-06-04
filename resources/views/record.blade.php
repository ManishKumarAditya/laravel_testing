@extends('layouts.base')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card mt-5 col-lg-8 bg-light mx-auto">
            <div class="card-header bg-dark text-white">
                <h4>Inserting From</h4>
            </div>
            <div class="card-body">
                <div class="col-lg-12 mx-auto">

                    <form action="{{ route('form') }}" method="POST">
                        @csrf
                        <div class="form-group col-sm-12 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group col-sm-12 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="form-group col-sm-12 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone No</label>
                            <input type="text" name="phone_no" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="form-group col-sm-12 mb-3">
                            <label for="exampleInputPassword1" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="form-group col-sm-12 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Pin code</label>
                            <input type="number" name="pincode" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="form-group col-sm-12 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8 mt-5 mx-auto">
        <div class="table-responsive-md table-responsive-sm table-sm">
            <table class="table" style="overflow:scroll">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">city</th>
                    <th scope="col">pincode</th>
                    <th scope="col">date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                @foreach ($data as $item)
                <tbody>
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone_no }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->pincode }}</td>
                    <td>{{ $item->date }}</td>
                    <td>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection