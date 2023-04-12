@extends('Template.Main')
@section('title', ' Data Siswa')

@section('head')
    <style>
        .buttons-html5,
        .buttons-print,
        .buttons-collection {
            margin: 5px;
            margin-bottom: 10px;
        }
    </style>
@endsection
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
            var table = $('#students_data').DataTable({
                processing: true,
                language: {
                    "processing": '<div class="d-flex justify-content-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden"></span></div></div>'
                },
                ajax: {
                    url: "{{ route('master.students.api.data') }}"
                },

                // "responsive": true,
                "autoWidth": false,
                "columns": [{
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
                        data: 'nama_komli',
                    },
                    {
                        data: 'id',
                        render: function(data, type) {
                            let link = window.location.origin;
                            if (type === 'display') {
                                return "<a class='btn btn-info' href='" + link +
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
                                return "<a class='btn btn-info' href='" + link +
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
                                return '<a href="#" class="btn btn-success m-1" data-toggle="tooltip" data-placement="top" title="Lihat Data"><i class="fa fa-eye"></i></a> <a href="#" class="btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-alt"></i></a> <a href="#" class="btn btn-danger m-1" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>'
                            }
                        }
                    }
                ],
                initComplete: function(settings, json) {
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });

            new $.fn.dataTable.Buttons(table, {
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });

            table.buttons(0, null).container().prependTo(
                table.table().container()
            );

        });
    </script>
@endsection
