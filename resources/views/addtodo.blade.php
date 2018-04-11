@extends('layout')
@section('content')
<div class="container">
    <form action="{{route('addToDo.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="description"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">create</button>
        </div>
    </form>
</div>

@endsection