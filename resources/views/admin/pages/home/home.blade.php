@extends('admin.layouts.main')

@section('main')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Footer</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Carousel -->
        <div class="col mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Carousel Banner</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            {{-- Modal Button --}}
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalAddCarousel">Add</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Address --}}
                <div class="modal fade" id="modalAddCarousel" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Carousel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/home/addCarousel') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="inputImage">
                                            <label class="custom-file-label" for="inputImage">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" class="form-control" name="link">
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body overflow-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td class="w-25">Name</td>
                                <td>Image</td>
                                <td>Link</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carousels as $carousel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $carousel->name }}</td>
                                <td><img src="{{ asset('storage/'. $carousel->image) }}" alt="" class="w-75"></td>
                                <td><a href="{{ $carousel->link }}">{{ $carousel->link }}</a></td>
                                <td>
                                    <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Action </div>
                                            {{-- Modal Button --}}
                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalEditCarousel{{ $carousel->id }}">Edit</button>
                                            <a class="dropdown-item" href="{{ url('/dashboard/home/deleteCarousel/' . $carousel->id) }}" onclick="return confirm('Delete this carousel?')">Delete</a>
                                        </div>
                                    </div>

                                    {{-- Modal Address --}}
                                    <div class="modal fade" id="modalEditCarousel{{ $carousel->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Carousel</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('/dashboard/home/editCarousel/' . $carousel->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name" value="{{ $carousel->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image" id="inputImage">
                                                                <label class="custom-file-label" for="inputImage">Choose file</label>
                                                            </div>
                                                            <input type="hidden" class="form-control" name="oldImage" value="{{ $carousel->image }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Link</label>
                                                            <input type="text" class="form-control" name="link" value="{{ $carousel->link }}">
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

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection