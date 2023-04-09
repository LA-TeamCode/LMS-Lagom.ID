@extends('Template.Main')
@section('title', 'Keahlian')

@section('content')
    <div class="card shadow rounded">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h3 class="card-title">Kelola Keahlian</h3>
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
                        <th>Bidang Keahlian</th>
                        <th>Program Keahlian</th>
                        <th>Paket Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $skill->bidang_keahlian }}</td>
                            <td>{{ $skill->program_keahlian }}</td>
                            <td>{{ $skill->paket_keahlian }}</td>
                            <td>
                                <button type="button" class="btn btn-primary m-1" data-toggle="tooltip"
                                    data-placement="top" title="Lihat Data" onclick="showModalEdit({{ $skill->id }})"><i
                                        class="fa fa-pencil-alt"></i></button>

                                <a href="{{ route('master.skills.delete.data', $skill->id) }}" class="btn btn-danger m-1"
                                    data-toggle="tooltip" data-placement="top" title="Hapus Data"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Bidang Keahlian</th>
                        <th>Program Keahlian</th>
                        <th>Paket Keahlian</th>
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
                    <h5 class="modal-title" id="tambahDataLabel">Tambah Data Keahlian</h5>
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
                                <label for="skill">Bidang Keahlian</label>
                                <input type="text" name="skill" id="bidang_keahlian" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="skill">Program Keahlian</label>
                                <input type="text" name="skill" id="program_keahlian" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="skill">Paket Keahlian</label>
                                <input type="text" name="skill" id="paket_keahlian" class="form-control">
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
                    <h5 class="modal-title" id="editDataLabel">Edit Data Keahlian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editData">
                    <input type="hidden" id="idSkillEdit" value="">
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="spinner-border text-primary d-none" id="loadingEdit" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div id="form-input">
                            <div class="form-group">
                                <label for="skill">Bidang Keahlian</label>
                                <input type="text" name="skill" id="bidang_keahlian_edit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="skill">Program Keahlian</label>
                                <input type="text" name="skill" id="program_keahlian_edit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="skill">Paket Keahlian</label>
                                <input type="text" name="skill" id="paket_keahlian_edit" class="form-control">
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
            const bidang_keahlian = $('#bidang_keahlian').val();
            const program_keahlian = $('#program_keahlian').val();
            const paket_keahlian = $('#paket_keahlian').val();

            $.ajax({
                url: "{{ route('master.skills.add.data') }}",
                type: "POST",
                data: {
                    _token: token,
                    bidang_keahlian: bidang_keahlian,
                    program_keahlian: program_keahlian,
                    paket_keahlian: paket_keahlian,
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
            const skill = @json($skills);
            const data = skill.find(item => item.id == id);

            $('#bidang_keahlian_edit').val(data.bidang_keahlian);
            $('#program_keahlian_edit').val(data.program_keahlian);
            $('#paket_keahlian_edit').val(data.paket_keahlian);
            $('#idSkillEdit').val(data.id);
        }

        // edit data

        $('form#editData').submit(function(e) {
            e.preventDefault();
            $('#form-input').addClass('d-none');
            $('#loadingEdit').removeClass('d-none');

            const token = "{{ csrf_token() }}";
            const idSkill = $('#idSkillEdit').val();
            const bidang_keahlian = $('#bidang_keahlian_edit').val();
            const program_keahlian = $('#program_keahlian_edit').val();
            const paket_keahlian = $('#paket_keahlian_edit').val();

            $.ajax({
                url: "{{ route('master.skills.update.data') }}",
                type: "POST",
                data: {
                    _token: token,
                    id: idSkill,
                    bidang_keahlian: bidang_keahlian,
                    program_keahlian: program_keahlian,
                    paket_keahlian: paket_keahlian,
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
