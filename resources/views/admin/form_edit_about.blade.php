@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit About Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                About Record
                            </div>
                            <div class="card-body">

                            <form action="{{route('update_about',$about->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <legend>About Page</legend>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Short Description</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="short_desc" value="{{$about->short_desc}}" placeholder="short_desc">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Title1</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="title1" value="{{$about->title1}}" placeholder="title1">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Title2</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="title2" value="{{$about->title2}}" placeholder="title2">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Title3</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="title3" value="{{$about->title3}}" placeholder="title3">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Description</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="description" value="{{$about->description}}" placeholder="description">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Title Skills</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="title_skills"  value="{{$about->title_skills}}" placeholder="description">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Short Description Skills</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="short_desc_skills" value="{{$about->short_desc_skills}}" placeholder="description">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Skill1</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="skill1" value="{{$about->skill1}}" placeholder="skill1">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Percentage1</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="skill1_percentage" value="{{$about->skill1_percentage}}" placeholder="percentage1">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Skill2</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="skill2" value="{{$about->skill2}}" placeholder="skill2">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Percentage2</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="skill2_percentage" value="{{$about->skill2_percentage}}" placeholder="percentage2">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Skill3</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="skill3" value="{{$about->skill3}}" placeholder="skill3">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Percentage3</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="skill3_percentage" value="{{$about->skill3_percentage}}" placeholder="percentage3">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Skill4</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="skill4" value="{{$about->skill4}}" placeholder="skill4">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Percentage4</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="skill4_percentage" value="{{$about->skill4_percentage}}" placeholder="percentage4">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Photo Existant</label>
                                        <img height="100" width="100" src="\photo_about\{{$about->photo}}">
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
