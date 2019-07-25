@extends('layout.master')
@section('content')
    <h4 class="pb-2 pt-2">Form User</h4>
    <form method="POST" action="{{ route('users.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">User Name</label>
            <input class="form-control col-sm-6" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control col-sm-6" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control col-sm-6" name="address" id="address">
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="1" checked>
                <label class="form-check-label" for="boy">
                    Boy
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="0">
                <label class="form-check-label" for="girl">
                    girl
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
