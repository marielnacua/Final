@extends('base')

@section('content')

@include('info')


<div class="float-right">
    <a href="{{ '/users/create' }}" class="btn btn-primary">
        Add New User
    </a>
</div>
<h1>List of Users</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->email}}</td>
            <td>
                <a href="{{ url('/users/edit', ['id'=>$u]) }}" class="btn btn-secondary btn-sm">...</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

{{ $users->links() }}

@stop
