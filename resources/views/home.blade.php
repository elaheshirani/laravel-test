@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
                    <a href="{{route('addToDo')}}" target="_blank">Add todo</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($todolists as $item)
                        <tr>
                            <th scope="row">{{$item->title}}</th>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->status}}</td>
                            <td><a href="{{route('edit.todo',['id'=>$item->id])}}">Edit</a>&nbsp;<a href="{{route('delete.todo',['id',$item->id])}}" >Delete</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
