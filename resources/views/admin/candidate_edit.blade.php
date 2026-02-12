@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Candidate Edit Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Candidate
                            </div>
                            <div class="card-body">

                            <form action="{{route('update_candidate',$candidate->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <legend>Edit Candidate </legend>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Name</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="name" value="{{$candidate->name}}" placeholder="name">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Job</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="job" value="{{$candidate->job}}" placeholder="job">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Phone</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="phone" value="{{$candidate->phone}}" placeholder="phone">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Email</label>
                                    <input type="email" id="disabledTextInput" class="form-control" name="email" value="{{$candidate->email}}" placeholder="email">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Address</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="address" value="{{$candidate->address}}" placeholder="address">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Photo Existant</label>
                                        <img height="100" width="100" src="\photocandidates\{{$candidate->photo}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Photo</label>
                                        <input class="form-control" type="file" id="formFile" name="photo">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Resume</label>
                                        <input class="form-control" type="file" id="formFile" name="pdfresume">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Video Candidate</label>
                                        <input class="form-control" type="file" id="formFile" name="videocandidate">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>



                            </div>
                        </div>
                    </div>
                </main>
@endsection
