@extends('Template.Main')
@section('title', ' Data Siswa')

@section('content')
    <div class="card shadow rounded">
        <div class="card-header">
            <h3 class="card-title">Kelola Data Siswa</h3>
        </div>
        <div class="card-body">
            <table id="students_data" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Kelas / Komli</th>
                        <th>Foto Awal Siswa</th>
                        <th>Foto Akhir Siswa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Muhammad Khoyron Ahlaqul Firdaus</td>
                        <td>123456789101112</td>
                        <td>7A</td>
                        <td><a href="#" class="btn btn-info">Foto Awal Siswa</a></td>
                        <td><a href="#" class="btn btn-info">Foto Akhir Siswa</a></td>
                        <td>
                            <a href="#" class="btn btn-success m-1" data-toggle="tooltip" data-placement="top"
                                title="Lihat Data"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary m-1" data-toggle="tooltip" data-placement="top"
                                title="Edit Data"><i class="fa fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-danger m-1" data-toggle="tooltip" data-placement="top"
                                title="Hapus Data"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Kelas / Komli</th>
                        <th>Foto Awal Siswa</th>
                        <th>Foto Akhir Siswa</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $("#students_data").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#students_data_wrapper .col-md-6:eq(0)');


            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
