@extends('layouts.app')


@section('content')

<div class="container-fluid">
    <h2 class="alert alert-success text-center">Laravel 7 CRUD Application</h2>
    @include('inc.messages')
    <div class="row">
        <a href="/" class="btn btn-info add" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus-circle"></i> Add New Student</a>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead class="text-center">
                   <tr>
                       <th>ID</th>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Gender</th>
                       <th>Country</th>
                       <th>City</th>
                       <th>Address</th>
                       <th>Action</th>
                   </tr>
                </thead>
                <tbody>
                    @foreach ($students as $key => $student)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$student->firstname}}</td>
                        <td>{{$student->lastname}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->country}}</td>
                        <td>{{$student->city}}</td>
                        <td>{{$student->address}}</td>
                        <td class="text-center">
                            <a 
                            data-student_id="{{$student->id}}" 
                            data-firstname="{{$student->firstname}}"
                            data-lastname="{{$student->lastname}}"
                            data-country="{{$student->country}}"
                            data-city="{{$student->city}}"
                            data-address="{{$student->address}}"
                            data-gender="{{$student->gender}}"
                            data-toggle="modal" data-target="#showModal" type="button" class="btn btn-info btn-sm">Show</a>
                            <a 
                            data-student_id="{{$student->id}}" 
                            data-firstname="{{$student->firstname}}"
                            data-lastname="{{$student->lastname}}"
                            data-country="{{$student->country}}"
                            data-city="{{$student->city}}"
                            data-address="{{$student->address}}"
                            data-gender="{{$student->gender}}"
                            data-toggle="modal" data-target="#editModal" type="button" class="btn btn-success btn-sm">Edit</a>
                            <a data-student_id="{{$student->id}}"  data-toggle="modal" data-target="#deleteModal" type="button" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
                {{$students->links()}}
            </table>
    </div>
    @include('inc.addmodal')
    @include('inc.editmodal')
    @include('inc.showmodal')
    @include('inc.deletemodal')
</div>
@endsection