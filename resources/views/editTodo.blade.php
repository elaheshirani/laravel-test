@extends('layout')
@section('content')
<div class="container">
    <form  method="post" action="{{route('update.todo',['id'=>$toDoList->id])}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" value="{{$toDoList->title}}" id="title" name="title" >
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="new" {{($toDoList->status == 'new')? 'selected="selected"':''}}>new</option>
                <option value="done" {{($toDoList->status == 'done')? 'selected="selected"':''}}>done</option>
                <option value="cancel" {{($toDoList->status == 'cancel')? 'selected="selected"':''}}>cancel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" >{{$toDoList->description}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

@endsection