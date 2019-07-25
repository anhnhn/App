@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 m-0 d-flex flex-column" >
            <h2 class="text-center p-3"> List Users </h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col-1">id</th>
                        <th scope="col-2">Name</th>
                        <th scope="col-1">gender</th>
                        <th scope="col-3">email</th>
                        <th scope="col-3">address</th>
                        <th scope="col-2">choice</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>
                                @if($user->gender == 1)
                                    boy
                                @elseif($user->gender == 0)
                                    girl
                                @endif
                            </td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->address}}</td>
                            <td class="d-flex">
                                <button class="btn btn-link p-0" type="submit" title="Show">
                                    <a href="{{ route('users.show',$user->id)}}"><i class="material-icons">search</i></a>
                                </button>
                                <button class="btn btn-link p-0" type="submit" title="Edit">
                                    <a href="{{ route('users.edit',$user->id) }}"><i class="material-icons text-warning">create</i></a>
                                </button>
                                <form method="POST" action="{{ route('users.destroy', [$user->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-link p-0" type="submit" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete the record {{ $user->id }} ?')">
                                        <a href="{{ route('users.destroy',$user->id) }}"><i class="material-icons text-danger">delete</i></a>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-xl-12 d-flex justify-content-center">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
