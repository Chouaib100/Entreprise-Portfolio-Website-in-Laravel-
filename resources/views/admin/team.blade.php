@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Team Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a class="btn btn-primary" href="{{route('add_team')}}">Add Member</a></li>

                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>


                            </div>
                            <div class="card-body">


                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Job</th>
                                    <th scope="col">Short Desc</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($teams as $team)
                                    <tr>
                                    <td><img height="100" width="100" src="{{ asset('photo_team/' . $team->photo) }}" alt="{{ $team->name }}" class="img-thumbnail"></td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->job }}</td>
                                    <td>{{ Str::limit($team->short_desc, 80) }}</td>
                                    <td><a class="btn btn-warning" href="{{ route('edit_team', $team->id) }}">Edit</a></td>
                                    <td><a class="btn btn-danger" href="{{ route('delete_team', $team->id) }}" onclick="return confirm('Delete this member?')">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
