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
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->nama_lengkap }}</td>
                            <td>{{ $student->nisn }}</td>
                            <td>{{ \App\Models\KomliModel::find($student->id_komli)->nama_komli }}</td>
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
                    @endforeach
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
            $.fn.dataTable.ext.errMode = 'none';
            $('#students_data').DataTable({
                ajax: "{{ route('master.students.api.data') }}",
                "order": [
                    [2, "asc"]
                ],
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nama_lengkap',
                        "width": "23%"
                    },
                    {
                        data: 'nisn'
                    },
                    {
                        data: 'id_komli',
                        render: function(data, type) {
                            if (type === 'display') {
                                return "{{ \App\Models\KomliModel::find($student->id_komli)->nama_komli }}"
                            }
                        }
                    },
                    {
                        data: 'id',
                        render: function(data, type) {
                            let link = window.location.origin;
                            if (type === 'display') {
                                return "<a class='btn btn-success' href='" + link +
                                    "/admin/data-siswa/foto-awal-siswa/" + data +
                                    "'>Foto Awal Siswa</a>"
                            }
                        }
                    },
                    {
                        data: 'id',
                        render: function(data, type) {
                            let link = window.location.origin;
                            if (type === 'display') {
                                return "<a class='btn btn-success' href='" + link +
                                    "/admin/data-siswa/foto-akhir-siswa/" + data +
                                    "'>Foto Akhir Siswa</a>"
                            }
                        }
                    },
                    {
                        data: 'id',
                        render: function(data, type) {
                            if (type === 'display') {
                                let linkEdit = window.location.origin + "/admin/data-siswa/edit/" +
                                    data;
                                let linkHapus = window.location.origin +
                                    "/admin/data-siswa/delete/" +
                                    data;
                                let linkLihat = window.location.origin +
                                    "/admin/data-siswa/detail/" +
                                    data;
                                return ' <a class="btn btn-primary m-1" href="' +
                                    linkLihat +
                                    '"> <i class="fa fa-pencil-alt"></i> </a> <a class="btn btn-danger m-1" href="' +
                                    linkHapus + '"> <i class="fa fa-trash"></i> </a>'
                            }
                        }
                    }
                ],
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#students_data_wrapper .col-md-6:eq(0)');

            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
