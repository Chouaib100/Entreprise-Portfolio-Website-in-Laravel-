@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Subscriber Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a class="btn btn-primary" href="{{route('write_to_all_subscriber')}}">E-mailing to All </a>
                            </div>
                            <div class="card-body">


                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($subscribers as $subscriber)
                                    <tr>
                                    <td>{{$subscriber->email}}</td>
                                    <td><a class="btn btn-info"href="{{route('write_to_one_subscriber',$subscriber->id)}}">Mail </a></td>
                                    <td><a class="btn btn-danger" href="{{route('delete_subscriber',$subscriber->id)}}">Delete</a></td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
