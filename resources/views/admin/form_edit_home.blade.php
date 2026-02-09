@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Home Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Home Record
                            </div>
                            <div class="card-body">

                            <form action="{{route('update_home',$home->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <legend>Home Page</legend>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Title</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="title" value="{{$home->title}}" placeholder="title">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Short Description</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="short_desc" value="{{$home->short_desc}}" placeholder="short_desc">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Video Channel</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="video_channel" value="{{$home->video_channel}}" placeholder="video Channel">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>



                            </div>
                        </div>
                    </div>
                </main>
@endsection
