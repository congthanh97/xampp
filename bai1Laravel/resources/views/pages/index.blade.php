@extends('layout')

@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="uper col-md-12 col-lg-12 col-xs-12 col-12 col-xl-12 col-sm-12">
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>admin Name</td>
                            <td>Email</td>
                            <!-- <td>admin Price</td> -->
                            <td colspan="2">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Admin as $admin)
                        <tr>
                            <td>{{$admin->id}}</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            <!-- <td>{{$admin->address}}</td> -->
                            <td><a href="{{ route('Admin.edit',$admin->id)}}" class="btn btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('Admin.destroy', $admin->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                </div>
            </div>
            <div class="col-md-6 ">
                blalalal
            </div>
        </div>
        @endsection