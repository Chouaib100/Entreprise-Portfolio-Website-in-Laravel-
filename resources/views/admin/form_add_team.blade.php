@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Create Team Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Team Records
                            </div>
                            <div class="card-body">

                            <form action="{{route('create_team')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <legend>Team Page</legend>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Name</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="name" placeholder="name">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Job</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="job"  placeholder="job">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Short Description</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="short_desc"  placeholder="short_desc">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Facebook</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="facebook" placeholder="facebook">
                                    </div>


                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Intagram</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="instagram" placeholder="instagram">
                                    </div>


                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Linkdlin</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="linkdlin" placeholder="linkdlin">
                                    </div>


                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Twitter</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="twitter" placeholder="twitter">
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

                                    <button type="submit" class="btn btn-primary">Create</button>

                                </form>



                            </div>
                        </div>
                    </div>
                </main>
@endsection
