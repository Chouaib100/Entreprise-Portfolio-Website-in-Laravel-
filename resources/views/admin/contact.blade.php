@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Contact Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Contact Record
                            </div>
                            <div class="card-body">


                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>

                                    <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($contacts as $contact)
                                    <tr>
                                    <td>{{$contact->address}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone}}</td>


                                    <td><a class="btn btn-warning" href="{{route('edit_contact',$contact->id)}}">Edit</a></td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
