@extends('template.index')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data</h4>
            <form class="forms-sample" method="POST" action="{{ route('tambah.action') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="nama" class="form-control" value="{{ Session::get('nama') }}"
                        placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}"
                        placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Nim</label>
                    <input type="text" name="nim" class="form-control" value="{{ Session::get('nim') }}"
                        placeholder="Nim">
                </div>
                <div class="form-group">
                    <label for="exampleInputCity1">No Telpon</label>
                    <input type="text" name="telpon" class="form-control" value="{{ Session::get('telpon') }}"
                        placeholder="No Telpon">
                </div>
                <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                <a href="dashboard" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
@endsection
