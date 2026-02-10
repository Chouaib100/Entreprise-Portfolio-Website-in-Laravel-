@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Create Service Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Services Records
                            </div>
                            <div class="card-body">

                            <form action="{{route('create_portfolio')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <legend>Portfolio Page</legend>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Title</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="title" placeholder="title">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Short Description</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="short_desc"  placeholder="short_desc">
                                    </div>

                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Link</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="link" placeholder="link">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Photo</label>
                                        <input class="form-control" type="file" id="formFile" name="photo">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Create</button>

                                </form>



                            </div>
                        </div>
                    </div>
                </main>
@endsection
