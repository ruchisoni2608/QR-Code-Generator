@extends('layouts.admin')

@section('page_title')
    Social Media Link
@endsection

@section('styles')
    <link href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            margin-top: 25%;
        }

        main {
            flex: 1;
        }

        body {
            height: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Social Media Link</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.social_media_links') }}">Social
                                    Media Link</a></li>
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
                                <h3 class="card-title">Social Media Link List</h3>
                                <div class="card-tools">
                                    <div class="submit_notification d-inline-block">
                                        @session('success')
                                            <div class="alert alert-success" role="alert"> {{ $value }} </div>
                                        @endsession
                                    </div>
                                    <a href="{{ route('admin.social_media_links.create') }}"
                                        class="btn btn-sm btn-primary font-weight-bolder">
                                        <i class="fa fa-plus"></i> New Social Media Link
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-striped table-sm table-head-custom table-checkable"
                                        id="datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>slug</th>
                                                <th style="width: 100px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($socialMediaLink->count())
                                                @foreach ($socialMediaLink as $link)
                                                    <tr>
                                                        <td>{{ $link->name }}</td>
                                                        <td>{{ $link->slug }}</td>
                                                        <td nowrap="nowrap">

                                                            <a class="btn btn-sm btn-info edit-btn"
                                                                href="{{ route('admin.social_media_links.edit', $link->id) }}"><i
                                                                    class="fa far fa-edit"></i></a>

                                                            <button class="btn btn-sm btn-danger comman-delete-btn"
                                                                data-href="{{ route('admin.social_media_links.delete', $link->id) }}"><i
                                                                    class="fa fa-times-circle"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js" type="application/javascript"></script>
    <script type="module">
        $(document).ready(function() {
            $('#datatable').DataTable({
                "paging": true,
                // "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
