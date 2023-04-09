@extends('Template.Main')
@section('title', 'Mata Pelajaran')

@section('content')
    <div class="card shadow rounded">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h3 class="card-title">Kelola Mata Pelajaran</h3>
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
                        <th>Nama Komli</th>
                        <th>Jurusan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $class->nama_komli }}</td>
                            <td>{{ $class->nama_jurusan }}</td>
                            <td>{{ $class->keterangan }}</td>
                            <td>
                                <button type="button" class="btn btn-primary m-1" data-toggle="tooltip"
                                    data-placement="top" title="Lihat Data"
                                    onclick="showModalEdit({{ $class->id_komli }})"><i
                                        class="fa fa-pencil-alt"></i></button>

                                <a href="{{ route('master.classes.delete.data', $class->id_komli) }}"
                                    class="btn btn-danger m-1" data-toggle="tooltip" data-placement="top"
                                    title="Hapus Data"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Komli</th>
                        <th>Jurusan</th>
                        <th>Keterangan</th>
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
                    <h5 class="modal-title" id="tambahDataLabel">Tambah Data Mata Pelajaran</h5>
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
                                <label for="class">Nama Kelas / Komli</label>
                                <input type="text" id="class" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="major">Jurusan</label>
                                <select name="major" id="major" class="form-control">
                                    <option value="">Pilih Jurusan</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id_jurusan }}">{{ $major->nama_jurusan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control"></textarea>
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

    <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDataLabel">Edit Data Mata Pelajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editData">
                    <input type="hidden" id="idKomliEdit" value="">
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="spinner-border text-primary d-none" id="loadingEdit" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div id="form-input">
                            <div class="form-group">
                                <label for="class">Nama Kelas / Komli</label>
                                <input type="text" id="classEdit" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="major">Jurusan</label>
                                <select name="major" id="majorEdit" class="form-control">
                                    <option value="">Pilih Jurusan</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id_jurusan }}">{{ $major->nama_jurusan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" id="keteranganEdit" cols="30" rows="5" class="form-control"></textarea>
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
            let komli = $('#class').val();
            let jurusan = $('#major').val();
            let keterangan = $('#keterangan').val();

            $.ajax({
                url: "{{ route('master.classes.add.data') }}",
                type: "POST",
                data: {
                    _token: token,
                    nama_komli: komli,
                    jurusan: jurusan,
                    keterangan: keterangan
                },
                success: function(data) {
                    if (data.massage == 'success') {
                        alert('Data berhasil di tambahkan');
                        $('#loading').addClass('d-none');

                        location.reload();

                    } else {
                        console.log(data);
                        alert('Data gagal di tambahkan');
                    }
                },
                error: function(data) {
                    $('#loading').addClass('d-none');
                    $('#form-input').removeClass('d-none');
                    console.log(data);
                    alert('Data gagal di tambahkan');
                }
            })
        });

        // show modal edit
        function showModalEdit(id) {
            $('#editData').modal('show');
            const komli = @json($classes);
            const data = komli.find(item => item.id_komli == id);

            $('#idKomliEdit').val(data.id_komli);
            $('#classEdit').val(data.nama_komli);
            $('#majorEdit').val(data.id_jurusan);
            $('#keteranganEdit').val(data.keterangan);

        }

        // edit data

        $('form#editData').submit(function(e) {
            e.preventDefault();
            $('#form-input').addClass('d-none');
            $('#loadingEdit').removeClass('d-none');

            const token = "{{ csrf_token() }}";
            let idKomli = $('#idKomliEdit').val();
            let komli = $('#classEdit').val();
            let jurusan = $('#majorEdit').val();
            let keterangan = $('#keteranganEdit').val();


            $.ajax({
                url: "{{ route('master.classes.update.data') }}",
                type: "POST",
                data: {
                    _token: token,
                    id_komli: idKomli,
                    nama_komli: komli,
                    jurusan: jurusan,
                    keterangan: keterangan
                },
                success: function(data) {
                    if (data.massage == 'success') {
                        alert('Data berhasil di update');
                        $('#loadingEdit').addClass('d-none');

                        location.reload();

                    } else {
                        console.log(data);
                        alert('Data gagal di update');
                    }
                },
                error: function(data) {
                    $('#loadingEdit').addClass('d-none');
                    $('#form-input').removeClass('d-none');
                    console.log(data);
                    alert('Data gagal di update');
                }
            })
        });
    </script>
@endsection
