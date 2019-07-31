@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 m-0 d-flex flex-column" >
            <h2 class="text-center p-3"> List Users </h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col">Name</td>
                        <td scope="col">Email</td>
                        <td scope="col">Birth Day</td>
                        <td scope="col">Choice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td >{{ $user->name }}</td>
                            <td >{{ $user->email }}</td>
                            <td >{{ $user->dOB }}</td>
                            <td class="d-flex">
                                <button class="btn btn-link p-0" type="submit" title="Show">
                                    <a href="{{ route('users.show', $user->id) }}"><i class="material-icons">search</i></a>
                                </button>
                                <button class="btn btn-link p-0" type="submit" title="Edit">
                                    <a href="{{ route('users.edit', $user->id) }}"><i class="material-icons text-warning">create</i></a>
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
            <div class="col-xl-12 d-flex justify-content-center pt-4">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
