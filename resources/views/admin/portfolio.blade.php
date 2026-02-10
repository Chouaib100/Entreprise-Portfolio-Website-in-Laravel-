@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Portfolio Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a class="btn btn-primary" href="{{route('add_portfolio')}}">Add Project</a>
                            </div>
                            <div class="card-body">


                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Short Desc</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($portfolios as $portfolio)
                                    <tr>
                                    <td><img height="100" width="100" src="\photo_project\{{$portfolio->photo}}"></td>
                                    <td>{{$portfolio->title}}</td>
                                    <td>{{$portfolio->short_desc}}</td>
                                    <td><a class="btn btn-warning" href="{{route('edit_portfolio',$portfolio->id)}}">Edit</a></td>
                                    <td><a class="btn btn-danger" href="{{route('delete_portfolio',$portfolio->id)}}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
