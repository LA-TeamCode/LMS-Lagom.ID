@extends('Template.Main')
@section('title', ' Data Guru dan Staff')

@section('content')
    <div class="card shadow rounded">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h3 class="card-title">Kelola Guru & Staff</h3>
                </div>
                <div class="col-6 d-flex">
                    <button class="btn btn-primary ml-auto" type="button" data-toggle="modal" data-target="#tambahData">Tambah
                        Data</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="students_data" class="table table-bo`rdered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal lahir</th>
                        <th>Jabatan</th>
                        <th>NIP</th>
                        <th>NUPTK</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->tanggal_lahir }}</td>
                            <td>{{ $teacher->jabatan }}</td>
                            <td>{{ $teacher->nip }}</td>
                            <td>{{ $teacher->nuptk }}</td>
                            <td>{{ $teacher->status_guru ? 'Aktif' : 'Tidak Aktif' }}</td>
                            <td>
                                <a href="{{ route('master.teachers.view.data', $teacher->id_teacher) }}"
                                    class="btn btn-success m-1" data-toggle="tooltip" data-placement="top"
                                    title="Lihat Data"><i class="fa fa-eye"></i></a>
                                {{-- <a href="{{ route('master.teachers.edit.data', $teacher->id_teacher) }}"
                                    class="btn btn-primary m-1" data-toggle="tooltip" data-placement="top"
                                    title="Edit Data"><i class="fa fa-pencil-alt"></i></a> --}}
                                <a href="{{ route('master.teachers.delete.data', $teacher->id_teacher) }}"
                                    class="btn btn-danger m-1" data-toggle="tooltip" data-placement="top"
                                    title="Hapus Data"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal lahir</th>
                        <th>Jabatan</th>
                        <th>NIP</th>
                        <th>NUPTK</th>
                        <th>status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataLabel">Tambah Data Guru & Staff</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addData">
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="spinner-border text-primary d-none" id="loading" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div id="form-input">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ttl">Tempat, Tanggal lahir</label>
                                <input type="text" name="ttl" id="ttl" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="number" name="nip" id="nip" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nuptk">NUPTK</label>
                                <input type="text" name="nuptk" id="nuptk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" name="jabatan" id="jabatan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            let table = $("#students_data").DataTable({
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#students_data_wrapper .col-md-6:eq(0)');

            $('[data-toggle="tooltip"]').tooltip();

            $('form#addData').submit(function(e) {
                e.preventDefault();
                $('#form-input').addClass('d-none');
                $('#loading').removeClass('d-none');

                const token = "{{ csrf_token() }}";
                const name = $('#name').val();
                const ttl = $('#ttl').val();
                const nip = $('#nip').val();
                const nuptk = $('#nuptk').val();
                const jabatan = $('#jabatan').val();
                const status = $('#status').val();

                $.ajax({
                    url: "{{ route('master.teacher.add.data') }}",
                    type: "POST",
                    data: {
                        _token: token,
                        name: name,
                        ttl: ttl,
                        nip: nip,
                        nuptk: nuptk,
                        jabatan: jabatan,
                        status: status
                    },
                    success: function(data) {
                        if (data.massage == 'success') {
                            alert('Data berhasil di tambahkan');
                            $('#loading').addClass('d-none');
                            // $('#tambahData').modal('hide');
                            // $('#form-input').removeClass('d-none');

                            location.reload();

                        } else {
                            console.log(data);
                            alert('Data gagal di tambahkan');
                        }
                    },
                    error: function(data) {
                        $('#loading').addClass('d-none');
                        $('#tambahData').modal('hide');
                        $('#form-input').removeClass('d-none');
                        console.log(data);
                        alert('Data gagal di tambahkan');
                    }
                })

            });
        });
    </script>
@endsection
