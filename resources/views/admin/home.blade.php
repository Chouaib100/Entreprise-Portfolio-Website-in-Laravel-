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


                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Short Desc</th>
                                    <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($homes as $home)
                                    <tr>
                                    <td>{{$home->title}}</td>
                                    <td>{{$home->short_desc}}</td>

                                    <td><a class="btn btn-warning" href="{{route('edit_home',$home->id)}}">Edit</a></td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
