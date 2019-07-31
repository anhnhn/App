@extends('layout.master')
@section('content')
    <div class="d-flex border col-sm-8 pl-4 pt-5">
        <div class="col-sm-3 avatar">
            <img src={{ $url_avatar }} alt="photo" class="border avatar_img">
        </div>
        <div class="col-sm-9">
            <h2 class="p-3">{{ $user->name }}</h2>
            <form>
                <div class="form-group d-flex">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value={{ $user->email }}>
                    </div>
                </div>
                <div class="form-group d-flex">

                </div>
                <div class="form-group d-flex">
                    <label for="create_at" class="col-sm-3 col-form-label">Birth Day</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value={{ $user->dOB }}>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
