@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Home Record</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('read_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Home</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-edit me-1"></i>
                    Edit Home Information
                </div>
                <div class="card-body">
                    <form action="{{ route('update_home', $home->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $home->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="short_desc" class="form-label">Short Description</label>
                            <textarea class="form-control @error('short_desc') is-invalid @enderror" id="short_desc" name="short_desc" rows="3" required>{{ old('short_desc', $home->short_desc) }}</textarea>
                            @error('short_desc')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="video_channel" class="form-label">Video Channel</label>
                            <input type="text" class="form-control @error('video_channel') is-invalid @enderror" id="video_channel" name="video_channel" value="{{ old('video_channel', $home->video_channel) }}" required>
                            @error('video_channel')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="{{ route('read_home') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
