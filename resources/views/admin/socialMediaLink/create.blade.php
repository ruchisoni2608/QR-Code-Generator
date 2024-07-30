@extends('layouts.admin')

@section('page_title')
    Social Media Link Create
@endsection

@section('styles')
    <!-- Include Quill's CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Include your favorite highlight.js stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" rel="stylesheet">

    <!-- Include the highlight.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>


    <style>
        /* Optional custom styles */
        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    @php $actionUrl = route('admin.social_media_links.save'); @endphp
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Social Media Link</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.social_media_links') }}">Social Media
                                    Link</a></li>
                            <li class="breadcrumb-item active">Social Media Link Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Social Media Link {{ isset($socialMediaLinks) ? 'Edit' : 'Create' }}
                                </h3>
                            </div>
                            <form onsubmit="return false;" id="blog_frm" enctype="multipart/form-data">
                                @csrf
                              @if (isset($socialMediaLink))
                                    @php $actionUrl = route('admin.social_media_links.update', ['socialMediaLink' => $socialMediaLink->id]); @endphp
                                    @method('PUT')
                                @endif
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Name:</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your Name" value="{{ $socialMediaLink->name ?? '' }}"
                                            required>
                                        <div class="error text-danger" id='name_error'></div>

                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <input type="file" name="image" id="image">
                                        <img id="image-preview" src="#" alt="Image Preview"
                                            style="max-width: 200px; display: none;">

                                        <div class="error text-danger" id='image_error'></div>
                                        @if (isset($socialMediaLink) && $socialMediaLink->image)
                                            <div class="form-group">
                                                <label for="image">Existing Image:</label><br>
                                                <img src="{{ asset('storage/social_images/' . $socialMediaLink->image) }}"
                                                    alt="Title Image" style="max-width: 200px;">
                                            </div>
                                        @endif
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <input type="button" id="comman_submit_info" class="btn btn-primary comman_submit_info"
                                        value="Save" data-url="{{ $actionUrl }}" />
                                    <a type="button" id="back_btn" class="btn btn-default"
                                        href="{{ route('admin.social_media_links') }}">Back</a>
                                    <div class="submit_notification">
                                        @if (Session::has('message'))
                                            <div class="text-{{ Session::get('status') }}">
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('scripts')
    <script>
        var returnUrl = "{{ route('admin.social_media_links') }}";
        $(document).ready(function() {
            $('#image').change(function(event) {
                var dataURL = URL.createObjectURL(event.target.files[0]);
                $('#image-preview').attr('src', dataURL).show();
            });
            var csrfToken = $('meta[name="csrf-token"]').attr('content');


        });
    </script>
@endsection
