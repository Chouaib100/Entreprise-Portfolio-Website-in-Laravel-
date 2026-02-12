@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Candidate Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Write to one Candidate Page</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Mail Write to one Candidate
                            </div>
                            <div class="card-body">

                            @if ($errors->any())
    <div>

                            @foreach ($errors->all() as $error)

                                <script>

                                    iziToast.show({
                                    color: 'red',
                                    position:'topRight',
                                    message: '{{ $error }}'
                                });

                                </script>

                            @endforeach

                    </div>
                @endif

                <form action="{{route('send_mail_to_one')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <legend>Send Mail to One Candidate</legend>



                    <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$candidate->email}}" >
                    </div>
                    <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Subject</label>
                    <input type="text"  class="form-control" name="subject" placeholder="subject">
                    </div>

                    <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Message</label>
                    <textarea class="form-control"  name="message"rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>

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
