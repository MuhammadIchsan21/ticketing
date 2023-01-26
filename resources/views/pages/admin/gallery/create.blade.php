@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="csrd shadow">
        <div class="card-body">
            <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="ticket_packages_id">Paket ticket</label>
                    <select name="ticket_packages_id" required class="form-control">
                        <option value="">Pilih Paket ticket</option>
                        @foreach ($ticket_packages as $ticket_package)
                        <option value="{{$ticket_package->id}}">
                            {{$ticket_package->title}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Image">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
