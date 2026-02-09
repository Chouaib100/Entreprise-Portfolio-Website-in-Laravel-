@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">About Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                About Record
                            </div>
                            <div class="card-body">


                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Title1</th>
                                    <th scope="col">Short Desc</th>
                                    <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($abouts as $about)
                                    <tr>
                                    <td>{{$about->title1}}</td>
                                    <td>{{$about->short_desc}}</td>

                                    <td><a class="btn btn-warning" href="{{route('edit_about',$about->id)}}">Edit</a></td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
