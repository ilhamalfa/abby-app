@extends('admin.layouts.main')

@section('main')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>

    <!-- Profile Row -->
    <div class="row">

        <!-- Profile -->
        <div class="col mb-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            {{-- Modal Button --}}
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalEditProfile">Edit</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Address --}}
                <div class="modal fade" id="modalEditProfile" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/profile/editProfile/' . $profile->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ $profile->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Text Body</label>
                                        <input type="text" class="form-control" name="body" value="{{ $profile->body }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="inputImage">
                                            <label class="custom-file-label" for="inputImage">Choose file</label>
                                        </div>
                                        <input type="hidden" class="form-control" name="oldImage" value="{{ $profile->image }}">
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body overflow-auto">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Title : {{ $profile->title }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Text Body : {{ $profile->body }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><img src="{{ asset('storage/'. $profile->image) }}" alt="" class="w-75"></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection