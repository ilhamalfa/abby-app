@extends('admin.layouts.main')

@section('main')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home</h1>
    </div>

    <!-- Carousel Row -->
    <div class="row">

        <!-- Carousel -->
        <div class="col mb-3">
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

                {{-- Modal Add Carousel --}}
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
                                            <a class="dropdown-item" href="{{ url('/dashboard/home/deleteCarousel/' . $carousel->id) }}" onclick="return confirm('Delete this?')">Delete</a>
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

    <!-- 2nd Row -->
    <div class="row">

        <!-- Service -->
        <div class="col-6 mb-3">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Service</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            {{-- Modal Button --}}
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalAddService">Add</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Add Service --}}
                <div class="modal fade" id="modalAddService" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/home/addService') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="inputImage">
                                            <label class="custom-file-label" for="inputImage">Choose file</label>
                                        </div>
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
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/'. $service->image) }}" alt="" class="w-75"></td>
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
                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalEditService{{ $service->id }}">Edit</button>
                                            <a class="dropdown-item" href="{{ url('/dashboard/home/deleteService/' . $service->id) }}" onclick="return confirm('Delete this?')">Delete</a>
                                        </div>
                                    </div>

                                    {{-- Modal Edit Service --}}
                                    <div class="modal fade" id="modalEditService{{ $service->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('/dashboard/home/editService/' . $service->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image" id="inputImage">
                                                                <label class="custom-file-label" for="inputImage">Choose file</label>
                                                            </div>
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

        <!-- Highlight -->
        <div class="col-6 mb-3">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Highlight</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            {{-- Modal Button --}}
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalAddHighlight">Add</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Add Highlight --}}
                <div class="modal fade" id="modalAddHighlight" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Highlight</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/home/addHighlight') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="inputImage">
                                            <label class="custom-file-label" for="inputImage">Choose file</label>
                                        </div>
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
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($highlights as $highlight)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/'. $highlight->image) }}" alt="" class="w-75"></td>
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
                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalEditHighlight{{ $highlight->id }}">Edit</button>
                                            <a class="dropdown-item" href="{{ url('/dashboard/home/deleteHighlight/' . $highlight->id) }}" onclick="return confirm('Delete this?')">Delete</a>
                                        </div>
                                    </div>

                                    {{-- Modal Edit Highlight --}}
                                    <div class="modal fade" id="modalEditHighlight{{ $highlight->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Highlight</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('/dashboard/home/editHighlight/' . $highlight->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image" id="inputImage">
                                                                <label class="custom-file-label" for="inputImage">Choose file</label>
                                                            </div>
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

    <!-- 3rd Row -->
    <div class="row">

        <!-- Value -->
        <div class="col mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Value</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            {{-- Modal Button --}}
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalAddValue">Add</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Address --}}
                <div class="modal fade" id="modalAddValue" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Value</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/home/addValue') }}" method="POST" enctype="multipart/form-data">
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
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label>Text</label>
                                        <input type="text" class="form-control" name="text">
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
                                <td class="w-25">Title</td>
                                <td>Text</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($values as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="bg-dark text-center"><img src="{{ asset('storage/'. $value->image) }}" alt="" class="w-50"></td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->text }}</td>
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
                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalEditValue{{ $value->id }}">Edit</button>
                                            <a class="dropdown-item" href="{{ url('/dashboard/home/deleteValue/' . $value->id) }}" onclick="return confirm('Delete this?')">Delete</a>
                                        </div>
                                    </div>

                                    {{-- Modal Edit Value --}}
                                    <div class="modal fade" id="modalEditValue{{ $value->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Value</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('/dashboard/home/editValue/' . $value->id) }}" method="POST" enctype="multipart/form-data">
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
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" name="title" value="{{ $value->title }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Text</label>
                                                            <input type="text" class="form-control" name="text" value="{{ $value->text }}">
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