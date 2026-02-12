@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Video Candidate Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>

                            </div>
                            <div class="card-body">

                                <table class="table">
                                <iframe height="600"  width="960" src="/videocandidates/{{$videocandidate_candidate}}"></iframe>


                                </table>

                                </body>
                                </html>

                            </div>
                        </div>
                    </div>
                </main>
@endsection
