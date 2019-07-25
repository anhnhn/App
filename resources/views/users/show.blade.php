@extends('layout.master')
@section('content')
    <div class="col-sm-12">
        <h2 class="p-3">{{ $user->name }}</h2>
        <form>
            <div class="form-group d-flex">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value={{$user->email}}>
                </div>
            </div>
            <div class="form-group d-flex">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=
                        @if($user->gender == 1)
                            boy
                        @elseif($user->gender == 0)
                            girl
                        @endif
                    >
                </div>
            </div>
            <div class="form-group d-flex">
                <label for="create_at" class="col-sm-2 col-form-label">Create at</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value={{$user->created_at}}>
                </div>
            </div>
            <div class="form-group d-flex">
                <label for="updated_at" class="col-sm-2 col-form-label">Updated at</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value={{$user->updated_at}}>
                </div>
            </div>
        </form>
    </div>
@endsection
