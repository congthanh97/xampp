@extends('layout')

@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="card mt10 col-md-12 col-xs-12 col-lg-12">
                <div class="card-header">
                    Add Book
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{route('Admin.store')}}">
                        <div class="form-group">
                            @csrf
                            <label for="name">User Name:</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" name="email" />
                        </div>
                        <!-- <div class="form-group">
                            <label for="Address">Address :</label>
                            <input type="text" class="form-control" name="address" />
                        </div> -->
                        <div class="form-group">
                            <label for="Password">Password:</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password_Confirmation:</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div>
                    Right
                </div>
            </div>
        </div>
    </div>
</div>

@endsection