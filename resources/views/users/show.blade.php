@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users Show') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="{{ $user->title }}" name="title" class="form-control" placeholder="Please enter user title"readonly>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" readonly>{{ $user->description }}</textarea>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection