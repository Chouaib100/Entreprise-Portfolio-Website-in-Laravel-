@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Service Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a class="btn btn-primary" href="{{route('add_service')}}">Add Service</a>
                            </div>
                            <div class="card-body">


                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Short Desc</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($services as $service)
                                    <tr>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->short_desc}}</td>
                                    <td>{{$service->icon}}</td>

                                    <td><a class="btn btn-warning" href="{{route('edit_service',$service->id)}}">Edit</a></td>
                                    <td><a class="btn btn-danger" href="{{route('delete_service',$service->id)}}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
