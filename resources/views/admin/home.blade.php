@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Home Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Home Record
                            </div>
                            <div class="card-body">


                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Short Desc</th>
                                    <th scope="col">Video Channel</th>
                                    <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($homes as $home)
                                    <tr>
                                    <td>{{$home->title}}</td>
                                    <td>{{$home->short_desc}}</td>
                                    <td>
                                        @if($home->video_channel)
                                            <a href="https://www.youtube.com/watch?v={{$home->video_channel}}" target="_blank" class="btn btn-sm btn-danger">
                                                <i class="fab fa-youtube"></i> Watch
                                            </a>
                                        @else
                                            <span class="badge bg-secondary">No Video</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" href="{{route('edit_home',$home->id)}}">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
