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
        <style>
            #semesterFilter,
            #tahunAjaranFilter {
                display: inline;
                width: 200px;
                margin-left: 25px;
            }
        </style>
        <div class="card-body">
            <div class="mt-1 mb-2" id="filter">
                <select id="tahunAjaranFilter" class="form-control">
                    <option value="">Tahun Ajaran</option>
                    @foreach ($academicYears as $academicYear)
                        <option value="{{ $academicYear->tahun_ajaran }}">{{ $academicYear->tahun_ajaran }}</option>
                    @endforeach
                </select>
                <select id="semesterFilter" class="form-control">
                    <option value="">Pilih Semester</option>
                    @foreach ($semesters as $semester)
                        <option value="{{ $semester->semester }}">{{ $semester->semester }}</option>
                    @endforeach
                </select>
            </div>
            <table id="students_data" class="table table-bo`rdered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Tahun Ajaran</th>
                        <th>Semester</th>
                        <th>Kelompok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $course->mata_pelajaran }}</td>
                            <td>{{ $course->tahun_ajaran }}</td>
                            <td>{{ $course->semester }}</td>
                            <td>{{ $course->kelompok }}</td>
                            <td>
                                <button type="button" class="btn btn-primary m-1" data-toggle="tooltip"
                                    data-placement="top" title="Lihat Data"
                                    onclick="showModalEdit('{{ $course->id }}')"><i class="fa fa-pencil-alt"></i></button>

                                <a href="{{ route('master.courses.delete.data', $course->id) }}" class="btn btn-danger m-1"
                                    data-toggle="tooltip" data-placement="top" title="Hapus Data"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Tahun Ajaran</th>
                        <th>Semester</th>
                        <th>Kelompok</th>
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
                                <label for="mapel">Mata Pelajaran</label>
                                <input type="text" name="mapel" id="mapel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Ajaran</label>
                                <select id="tahunAjaran" class="form-control">
                                    <option value="">Tahun Ajaran</option>
                                    @foreach ($academicYears as $academicYear)
                                        <option value="{{ $academicYear->id }}">
                                            {{ $academicYear->tahun_ajaran }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Semester</label>
                                <select id="semester" class="form-control">
                                    <option value="">Pilih Semester</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}">{{ $semester->semester }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelompok">Kelompok</label>
                                <input type="text" name="kelompok" id="kelompok" class="form-control">
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
                    <input type="hidden" id="idMapelEdit" value="">
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="spinner-border text-primary d-none" id="loadingEdit" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div id="form-input">
                            <div class="form-group">
                                <label for="mapel">Mata Pelajaran</label>
                                <input type="text" id="mapelEdit" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Ajaran</label>
                                <select id="tahunAjaranEdit" class="form-control">
                                    <option value="">Tahun Ajaran</option>
                                    @foreach ($academicYears as $academicYear)
                                        <option value="{{ $academicYear->id }}">
                                            {{ $academicYear->tahun_ajaran }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Semester</label>
                                <select id="semesterEdit" class="form-control">
                                    <option value="">Pilih Semester</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}">{{ $semester->semester }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelompok">Kelompok</label>
                                <input type="text" id="kelompokEdit" class="form-control" value="">
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

        $("#students_data_filter.dataTables_filter").append($("#filter"));

        $('#tahunAjaranFilter, #semesterFilter').on('change', function() {
            var selectedTahunAjaran = $('#tahunAjaranFilter').val();
            var selectedSemester = $('#semesterFilter').val();

            $('#students_data').DataTable().columns(2).search(selectedTahunAjaran).columns(3).search(
                    selectedSemester)
                .draw();
        });

        $('[data-toggle="tooltip"]').tooltip();

        $('form#addData').submit(function(e) {
            e.preventDefault();
            $('#form-input').addClass('d-none');
            $('#loading').removeClass('d-none');

            const token = "{{ csrf_token() }}";
            const mapel = $('#mapel').val();
            const tahun_ajaran = $('#tahunAjaran').val();
            const semester = $('#semester').val();
            const kelompok = $('#kelompok').val();

            $.ajax({
                url: "{{ route('master.courses.add.data') }}",
                type: "POST",
                data: {
                    _token: token,
                    mapel: mapel,
                    tahun_ajaran: tahun_ajaran,
                    semester: semester,
                    kelompok: kelompok
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
            const mapel = @json($courses);
            const data = mapel.find(item => item.id == id);

            $('#mapelEdit').val(data.mata_pelajaran);
            $('#kelompokEdit').val(data.kelompok);
            $('#tahunAjaranEdit').val(data.tahun_ajaran_id);
            $('#semesterEdit').val(data.semester_id);
            $('#idMapelEdit').val(data.id);
        }

        // edit data

        $('form#editData').submit(function(e) {
            e.preventDefault();
            $('#form-input').addClass('d-none');
            $('#loadingEdit').removeClass('d-none');

            const token = "{{ csrf_token() }}";
            const mapel = $('#mapelEdit').val();
            const kelompok = $('#kelompokEdit').val();
            const tahun_ajaran = $('#tahunAjaranEdit').val();
            const semester = $('#semesterEdit').val();
            const idMapel = $('#idMapelEdit').val();

            $.ajax({
                url: "{{ route('master.courses.update.data') }}",
                type: "POST",
                data: {
                    _token: token,
                    id_course: idMapel,
                    mapel: mapel,
                    tahun_ajaran: tahun_ajaran,
                    semester: semester,
                    kelompok: kelompok
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
