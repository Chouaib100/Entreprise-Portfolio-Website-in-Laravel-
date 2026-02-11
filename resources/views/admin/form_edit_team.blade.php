@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Team Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Team Records
                            </div>
                            <div class="card-body">

                            <form action="{{route('update_team',$team->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <legend>Team Page</legend>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Name</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="name" value="{{$team->name}}" placeholder="name">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Job</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="job" value="{{$team->job}}" placeholder="job">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Short Description</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="short_desc" value="{{$team->short_desc}}"  placeholder="short_desc">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Facebook</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="facebook" value="{{$team->facebook}}" placeholder="facebook">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Instagram</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="instagram" value="{{$team->instagram}}" placeholder="instagram">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Linkdlin</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="linkdlin" value="{{$team->linkdlin}}" placeholder="linkdlin">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Twitter</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="twitter" value="{{$team->twitter}}" placeholder="twitter">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Photo Existant</label>
                                        <img height="100" width="100" src="\photo_team\{{$team->photo}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Photo</label>
                                        <input class="form-control" type="file" id="formFile" name="photo">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>



                            </div>
                        </div>
                    </div>
                </main>
@endsection
