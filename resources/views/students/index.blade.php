@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="/students/create" class="btn btn-primary">Add Data</a><br><br> 

                   <form class="form" method="get" action="{{ route('search') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="search" class="d-block mr-2">Search</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Are you looking for a name? enter the name here">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>

                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Name</th>
                                <th>Class</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student as $s)
                            <tr>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->class }}</td>
                                <td>{{ $s->departemen }}</td>
                                <td>
                                    <form action="/students/{{$s->id}}" method="post">
                                        <a href="/students/{{$s->id}}/edit" class="btn btn-warning">Edit</a> 
                                        <a href="/students/{{$s->id}}" class="btn btn-info">View</a> 
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
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
</div>
@endsection

