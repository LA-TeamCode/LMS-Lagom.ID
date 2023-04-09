@extends('Template.Main')
@section('title', 'Data Guru - ' . $guru->nama)

@section('content')
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
            <h3 class="widget-user-username">{{ $guru->nama }}</h3>
            <h5 class="widget-user-desc">{{ $guru->jabatan }}</h5>
        </div>
        <div class="widget-user-image">
            <img class="img-circle elevation-2" src="{{ asset('images/profile/default.png') }}" alt="User Avatar">
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-3 border-right">
                    <div class="description-block">
                        <h5 class="description-header">Tanggal Lahir</h5>
                        <span class="description-text">{{ $guru->ttl }}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 border-right">
                    <div class="description-block">
                        <h5 class="description-header">NIP</h5>
                        <span class="description-text">{{ $guru->nip }}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3">
                    <div class="description-block">
                        <h5 class="description-header">NUPTK</h5>
                        <span class="description-text">{{ $guru->nuptk }}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3">
                    <div class="description-block">
                        <h5 class="description-header">Status</h5>
                        <span class="description-text">{{ $guru->status_guru ? 'Aktif' : 'Tidak Aktif' }}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <hr>
            <div class="form-group">
                <a href="{{ route('master.guru.data', $guru->id) }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i></a>
                <button type="button" class="btn btn-primary text-white" id="showForm"><i
                        class="fa fa-pencil-alt"></i></button>
            </div>
        </div>
    </div>
    <!-- /.widget-user -->

    <div class="text-center">
        <div class="spinner-border text-primary d-none" id="loading" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="card shadow rounded mt-5 d-none" id="edit_form">
        <div class="card-header">
            <button onclick="closeForm()" type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="card-title">Edit Data</h3>
        </div>
        <div class="card-body">
            <form id="">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $guru->nama }}">
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat, Tanggal lahir</label>
                    <input type="text" name="ttl" id="ttl" class="form-control" value="{{ $guru->ttl }}">
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" name="nip" id="nip" class="form-control" value="{{ $guru->nip }}">
                </div>
                <div class="form-group">
                    <label for="nuptk">NUPTK</label>
                    <input type="text" name="nuptk" id="nuptk" class="form-control" value="{{ $guru->nuptk }}">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $guru->jabatan }}">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $guru->status_guru ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ $guru->status_guru ? '' : 'selected' }}>Tidak Aktif</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#showForm').click(function() {
            $('#edit_form').removeClass('d-none');
        })

        function closeForm() {
            $('#edit_form').addClass('d-none');
        }

        function showLoading() {
            $('#loading').removeClass('d-none');
        }

        function closeLoading() {
            $('#loading').addClass('d-none');
        }
        $('form').submit(function(e) {
            e.preventDefault();
            closeForm();
            showLoading();
            const token = "{{ csrf_token() }}";
            const name = $('#name').val();
            const ttl = $('#ttl').val();
            const nip = $('#nip').val();
            const nuptk = $('#nuptk').val();
            const jabatan = $('#jabatan').val();
            const status = $('#status').val();

            const id = "{{ $guru->id }}";

            $.ajax({
                url: "{{ route('master.guru.update.data', $guru->id) }}",
                type: "POST",
                data: {
                    _token: token,
                    name: name,
                    ttl: ttl,
                    nip: nip,
                    nuptk: nuptk,
                    id: id,
                    jabatan: jabatan,
                    status: status
                },
                success: function(data) {
                    closeLoading();
                    if (data.massage == 'success') {
                        alert('Data berhasil diubah');
                        location.reload();
                    } else {
                        console.log(data);
                        alert('Data gagal diubah');
                    }
                },
                error: function(data) {
                    closeLoading();
                    console.log(data);
                    alert('Data gagal diubah');
                }
            })
        });
    </script>
@endsection
