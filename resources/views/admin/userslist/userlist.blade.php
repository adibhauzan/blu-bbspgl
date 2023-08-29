@extends('admin.layouts.main')

@section('title')
    Admin BBSPGL | Home
@endsection

@section('main-content')

<div class="row ml-5 mr-5">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users List</h3>

        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Users List</th>
                <th>Email</th>
                <th>Registered At</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($userList as $usersList)
              <tr>
                    
                <td>{{$loop->iteration}}</td>
                <td>{{$usersList->name}}</td>
                <td>{{$usersList->email}}</td>
                <td>{{$usersList->created_at}}</td>
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection