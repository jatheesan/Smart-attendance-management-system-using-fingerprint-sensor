@extends('layouts.admin')
@section('pagetitle','Users')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div style="margin: 15px;" class="row">
                <div class="col-sm-4">
                    {{--<a href="{{ url('/user') }}" class="btn btn-primary">New User</a>--}}
                </div>
                <div class="col-sm-4 offset-sm-4">
                    <form action="{{ url('/tables/users') }}" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search_user"
                                placeholder="Search user and just enter"> <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
            </div>
            <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>user Name</td>
                        <td>User Email</td>
                        <td>User Role</td>
                        <td colspan=2>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('edit', ['id' => $user->id]) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('delete', ['id' => $user->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
{{ $users->links() }}
@endsection
