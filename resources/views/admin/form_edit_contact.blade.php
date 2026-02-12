@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Contact Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Contact Record
                            </div>
                            <div class="card-body">

                            <form action="{{route('update_contact',$contact->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <legend>Contact Page</legend>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Address</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="address" value="{{$contact->address}}" placeholder="address">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Email</label>
                                    <input type="email" id="disabledTextInput" class="form-control" name="email" value="{{$contact->email}}" placeholder="email">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Phone</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="phone" value="{{$contact->phone}}" placeholder="phone">
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Map</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="map" value="{{$contact->map}}" placeholder="map">
                                    </div>






                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>



                            </div>
                        </div>
                    </div>
                </main>
@endsection
