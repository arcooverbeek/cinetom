@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add Movie</a></h2>
<br>

<form action="{{ route('movies.store') }}" method="POST" name="add_product">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Title">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Enter Description"></textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
        <div class="form-group">
            <strong>Rating</strong>
            <input type="text" name="rating" class="form-control" placeholder="Enter rating">
            <span class="text-danger">{{ $errors->first('rating') }}</span>
        </div>
        <div class="form-group">
            <strong>Duration</strong>
            <input type="number" name="duration" class="form-control" placeholder="Enter duration">
            <span class="text-danger">{{ $errors->first('duration') }}</span>
        </div>
                <div class="form-group">
            <strong>Release date</strong>
            <input type="date" name="release_date" class="form-control" placeholder="Enter rating">
            <span class="text-danger">{{ $errors->first('release_date') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
@endsection
