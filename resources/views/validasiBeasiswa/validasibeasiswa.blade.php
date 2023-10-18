@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="row text-center">
                <h1>INI HALAMAN VALIDASI BEASISWA</h1>
            </div>
            
            <div class="card">

                <div class="card-header">
                <h2 class="card-title text-center">Validasi Beasiswa</h2>
                </div>

                <div class="card-body" style="overflow-x:auto;">
                    <table class="table table-bordered" id="validasi-beasiswa">
                    <thead>
                        <tr>
                            <th style="width: 10px"> No </th>
                            <th> Nama</th>
                            <th> Kelas Sekolah </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                </div>

                </table>
            </div>
        </div>
    </div>
    </section>
</div>

<script type="text/javascript">
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#validasi-beasiswa').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.validasi-beasiswa')}}",
            columns: [
                { data: 'id_anaks', name: 'id_anaks'},
                { data: 'nama_lengkap', name: 'nama_lengkap'},
                { data: 'kelas_sekolah', name: 'kelas_sekolah'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            order: [[0, 'asc']]
        })

        function validFunc(id){
            window.location.href = "{{ url('admin/validasi') }}/" + id;
        }
    });

    function validFunc(id){
            window.location.href = "{{ url('admin/validasi') }}/" + id;
        }
</script>
@endsection