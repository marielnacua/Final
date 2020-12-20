@extends('base')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteUserModalLabel">Delete User - {{$user->lname}}, {{$user->fname}}    </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {!! Form::open(['url'=>'/users', 'method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this user?
                {{ Form::hidden('user_id', $user->id)}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete User</button>
            </div>
            {!! Form::close() !!}
        </div>
        </div>
    </div>

    <h1>Edit User {{ $user->lname }}, {{ $user->fname }}</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::model($user, ['url'=>"/users/$user->id", 'method'=>'patch']) !!}

            @include('users._form')

            <div class="form-group">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteUserModal">
                    Delete User
                </button>
                <button class="btn btn-primary float-right">
                    Update User
                </button>
            </div>

            {!! Form::close() !!}

        </div>

        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

@endsection
