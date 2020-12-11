@extends('layouts.admin')
@section('pagetitle','Lecturers')
@section('content')
<div class="container-fluid"> 
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <a style="margin: 19px;" href="{{ url('/lecturer') }}" class="btn
                btn-primary">New Lecturer</a>
                </div>
                <div class="col-sm-12">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <table id="lecturetable" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Lecturer ID</th>
                            <th>Lecturer Name</th>
                            <th>Lecturer Email</th>
                            <th>Position</th>
                            <th colspan=2>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lecturers as $lecturer)
                        <tr>
                            <td>{{ $lecturer->lect_id }}</td>
                            <td>{{ $lecturer->lect_name }}</td>
                            <td>{{ $lecturer->lect_email }}</td>
                            <td>{{ $lecturer->position }}</td>
                            <td>
                                <a href="{{ route('lecturer_edit', ['id' => $lecturer->lect_id]) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('lecturer_delete', ['id' => $lecturer->lect_id]) }}" method="post">
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
{{ $lecturers->links() }}
@endsection
