@extends('admin.layouts.main')

@section('main')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
    </div>

    <!-- Gallery Row -->
    <div class="row">

        <!-- Gallery -->
        <div class="col-12 mb-3">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Gallery</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            {{-- Modal Button --}}
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalAddGallery">Add</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Add Gallery --}}
                <div class="modal fade" id="modalAddGallery" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Gallery</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/gallery/addGallery') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="inputImage">
                                            <label class="custom-file-label" for="inputImage">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category</label>
                                        <select class="form-control" name="category">
                                            <option value="car audio">Car Audio</option>
                                            <option value="auto detailing">Auto Detailing</option>
                                            <option value="showroom">Showroom</option>
                                        </select>
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
                                <td>Image</td>
                                <td class="w-25">Category</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/'. $gallery->image) }}" alt="" class="w-75"></td>
                                <td>{{ $gallery->category }}</td>
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
                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalEditGallery{{ $gallery->id }}">Edit</button>
                                            <a class="dropdown-item" href="{{ url('/dashboard/gallery/deleteGallery/' . $gallery->id) }}" onclick="return confirm('Delete this?')">Delete</a>
                                        </div>
                                    </div>

                                    {{-- Modal Edit Gallery --}}
                                    <div class="modal fade" id="modalEditGallery{{ $gallery->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Gallery</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('/dashboard/gallery/editGallery/' . $gallery->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image" id="inputImage">
                                                                <label class="custom-file-label" for="inputImage">Choose file</label>
                                                                <input type="hidden" class="form-control" name="oldImage" value="{{  $gallery->image }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Category</label>
                                                            <select class="form-control" name="category">
                                                                <option value="car audio" @selected($gallery->category == 'car audio')>Car Audio</option>
                                                                <option value="auto detailing" @selected($gallery->category == 'auto detailing')>Auto Detailing</option>
                                                                <option value="showroom" @selected($gallery->category == 'showroom')>Showroom</option>
                                                            </select>
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