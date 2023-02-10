@extends('admin.layouts.main')

@section('main')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Footer</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Address -->

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Footer Address</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            {{-- Modal Button --}}
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalAddress">Edit</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Address --}}
                <div class="modal fade" id="modalAddress" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Address</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/footer/updateAddress/' . $address->id) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="text" value="{{ $address->text }}">
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                        <p>{{ $address->text }}</p>
                </div>
            </div>
        </div>

        {{-- Socmeds --}}
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Social Media</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action </div>
                            {{-- Modal Button --}}
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalSocmeds">Add</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Socmeds --}}
                <div class="modal fade" id="modalSocmeds" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Socmeds</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="/dashboard/footer/addSocmeds/" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Socmed Link</label>
                                        <input type="text" class="form-control" name="link">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category</label>
                                        <select class="form-control" name="category">
                                            <option value="instagram">Instagram</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="facebook">Facebook</option>
                                            <option value="youtube">Youtube</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body overflow-auto">
                    <table class="table">
                        @foreach ($socmeds as $socmed)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $socmed->category }} </td>
                                <td> <a href="{{ $socmed->link }}">{{ $socmed->link }}</a> </td>
                                <td>
                                    @if ($socmed->is_active == 1)
                                        Active
                                    @else
                                        Deactivated
                                    @endif
                                </td>
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
                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalEditSocmed{{ $socmed->id }}">Edit</button>

                                            <a class="dropdown-item" href="{{ url('/dashboard/footer/activateSocmeds/' . $socmed->id) }}">
                                                @if ($socmed->is_active == 1)
                                                    Deactivate
                                                @else
                                                    Activate
                                                @endif
                                            </a>
                                            <a class="dropdown-item" href="{{ url('/dashboard/footer/deleteSocmeds/' . $socmed->id) }}" onclick="return confirm('Delete this socmed?')">Delete</a>
                                        </div>
                                    </div>

                                    {{-- Modal Socmeds --}}
                                    <div class="modal fade" id="modalEditSocmed{{ $socmed->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Socmeds</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('/dashboard/footer/updateSocmeds/' . $socmed->id) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Category</label>
                                                            <select class="form-control" name="category">
                                                                <option value="instagram" @selected($socmed->category == "instagram")>Instagram</option>
                                                                <option value="twitter" @selected($socmed->category == "twitter")>Twitter</option>
                                                                <option value="facebook" @selected($socmed->category == "facebook")>Facebook</option>
                                                                <option value="youtube" @selected($socmed->category == "youtube")>Youtube</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Socmed Link</label>
                                                            <input type="text" class="form-control" name="link" value="{{ $socmed->link }}">
                                                        </div>
                                                    </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Contact car audio -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Contact car audio</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalCarAudio">Edit</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Car Audio --}}
                <div class="modal fade" id="modalCarAudio" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Car Audio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/footer/updateContactCar/' . $contactcar->id) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="number" class="form-control" name="phone" value="{{ $contactcar->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Text</label>
                                        <input type="text" class="form-control" name="text" value="{{ $contactcar->text }}">
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p>Phone : {{ $contactcar->phone }}</p>
                    <p class="mb-0">{{ $contactcar->text }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Contact Auto Detailing</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Action :</div>
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalContactDetailing">Edit</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Car Audio --}}
                <div class="modal fade" id="modalContactDetailing" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Car Audio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('/dashboard/footer/updateContactAuto/' . $contactdetailing->id) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="number" class="form-control" name="phone" value="{{ $contactdetailing->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Text</label>
                                        <input type="text" class="form-control" name="text" value="{{ $contactdetailing->text }}">
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p>Phone : {{ $contactdetailing->phone }}</p>
                    <p class="mb-0"> {{ $contactdetailing->text }} </p>
                </div>
            </div>
        </div>
    </div>
@endsection