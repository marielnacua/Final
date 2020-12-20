@extends('base')

@section('content')

@include('info')

<div class="float-right">
    <a href="{{ url('/instructors/create') }}" class="btn btn-primary">
        Add New Instructors
    </a>
</div>

<h1>Instructors</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Expertise</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($instructors as $i)

        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->user->lname}}</td>
            <td>{{$i->user->fname}}</td>
            <td>{{$i->aoe}}</td>
            <td>
                <a href="{{ url('/instructors/edit', ['id'=>$i]) }}" class="btn btn-secondary btn-sm">...</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

{{ $instructors->links() }}

@stop
