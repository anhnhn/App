@extends('layout.master')
@section('content')
    <h4 class="pb-2 pt-2">Form User</h4>
    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" class="border col-sm-7">
        @csrf
        <div class="form-group pt-2">
            <label for="name">User Name</label>
            <input class="form-control" name="name" id="name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" id="email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Date of birth</label>
            <input type="date" class="form-control" name="dOB" id="dOB">
            @error('dOB')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-group">
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="avatar" name="avatar">
                <label class="custom-file-label">Choose avatar</label>
                @error('avatar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="pb-2">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
