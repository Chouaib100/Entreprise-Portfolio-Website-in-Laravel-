@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Form Contact Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Form Contact Record
                            </div>
                            <div class="card-body">


                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($formcontacts as $formcontact)
                                    <tr>
                                    <td>{{$formcontact->name}}</td>
                                    <td>{{$formcontact->email}}</td>
                                    <td>{{$formcontact->subject}}</td>

                                    <td><a class="btn btn-info" href="{{route('detail_formcontact',$formcontact->id)}}">Detail</a></td>
                                    <td><a class="btn btn-danger" href="{{route('delete_formcontact',$formcontact->id)}}">Delete</a></td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
@endsection
