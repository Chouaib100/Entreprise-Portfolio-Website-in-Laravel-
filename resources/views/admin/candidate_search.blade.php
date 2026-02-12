@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Candidate Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>

                            </div>
                            <div class="card-body">


                                <br>

                                <a class="btn btn-primary" href="{{route('write_to_all')}}">E-mailing to All </a>


                                <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Job</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Resume</th>
                                    <th scope="col">Video</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($candidates as $candidate)
                                    <tr>
                                    <th scope="row"><img height="100" width="100" src="\photocandidates\{{$candidate->photo}}"></th>
                                    <td>{{$candidate->name}}</td>
                                    <td>{{$candidate->job}}</td>
                                    <td>{{$candidate->phone}}</td>
                                    <td>{{$candidate->email}}</td>
                                    <td><a class="btn btn-info"href="{{route('write_to_one',$candidate->id)}}">Mail </a></td>
                                    <td><a class="btn btn-secondary"href="{{route('pdfdownload_candidate',$candidate->id)}}">Download </a></td>
                                    <td><a class="btn btn-success" href="{{route('videocandidate_candidate',$candidate->id)}}">View</a></td>
                                    <td><a class="btn btn-warning" href="{{route('edit_candidate',$candidate->id)}}">Edit</a></td>
                                    <td><a class="btn btn-danger" onclick ="return confirm('Do you want really delete this record?');"href="{{route('delete_candidate',$candidate->id)}}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>

                                </body>
                                </html>

                                @if(session('success'))

                                <script>

                                iziToast.success({
                                color: 'green',
                                position:'topRight',
                                message: '{{session('success')}}'
                                });

                                </script>

                                @endif

                            </div>
                        </div>
                    </div>
                </main>
@endsection
