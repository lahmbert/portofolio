@extends('template.index')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Mahasiswa</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Nama Lengkap
                            </th>
                            <th>
                                Nim
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                No Telpon
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{ $i }}
                                </td>
                                <td>
                                    {{ $item->nama }}
                                </td>
                                <td>
                                    {{ $item->nim }}
                                </td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    {{ $item->telpon }}
                                </td>
                                <td>
                                    <a href="#" class="btn btn-md btn-outline-warning">Edit</a>
                                    <a href="#" class="btn btn-md btn-outline-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-3">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
