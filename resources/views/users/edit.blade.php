@extends('layout.master')
@section('content')
    <h4 class="pb-2 pt-2">Form User</h4>
    <form method="POST" action="{{ route('users.update', ['id' => $user->id])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">User Name</label>
            <input class="form-control col-sm-6" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control col-sm-6" name="email" id="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control col-sm-6" name="address" id="address">
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="1"
                    @if ($user->gender == 1)
                        checked
                    @endif
                >
                <label class="form-check-label" for="boy">
                    Boy
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="0"
                    @if ($user->gender == 0)
                       checked
                    @endif
                >
                <label class="form-check-label" for="girl">
                    girl
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
