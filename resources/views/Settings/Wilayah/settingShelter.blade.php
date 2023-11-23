@extends('layout.mainSettings')
@section('contentSettings')

<style>
    #btntmbhKaCab {
        background-color: rgb(0, 119, 255);
        border: transparent;
    }
    #btntmbhKaCab:hover {
        background-color: rgb(0, 97, 207);
        border: transparent;
    }
</style>

<div class="content-wrapper background">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Data Shelter</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 mb-2">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('admin.tambahShelterView') }}" class="btn btn-md btn-info text-white fw-bold" id="btntmbhKaCab">Tambah Shelter +</a>
                            </div>
                            <div class="col-6"></div>
                        </div>
                    </div>
                    <hr class="text-black mb-4">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered text-center" id="KacabTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Shelter</th>
                                    <th>Nama Koordinator</th>
                                    <th>No. HP</th>
                                    <th>Alamat Shelter</th>
                                    <th>Wilayah Binaan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#AnakBinaanTable').DataTable({
            processing : true,
            // searching : false,
            serverSide : true,
            ajax : {
                url : "{{ url('admin') }}",
            },
            columns : [
                {
                    data: null,
                    name: 'id',
                    render: function(data, type, row, meta) {
                        return meta.row + 1; // Menggunakan nomor baris sebagai nomor urut
                    }
                },
                { data: 'Nama_Shelter', name: 'Nama_Shelter'},
                { data: 'Nama_Koordinator', name: 'Nama_Koordinator'},
                { data: 'No._HP', name: 'No._HP'},
                { data: 'Alamat_Shelter', name: 'Alamat_Shelter'},
                { data: 'Wilayah_Binaan', name: 'Wilayah_Binaan'},
                { data: 'action', name: 'action', orderable: false},
            ],
            order: [[0, 'desc']],
            language: {
                "emptyTable": "Data Kosong...",
                "info": "Menampilkan _START_ sampai _END_, dari _TOTAL_ data",
                "lengthMenu": "Tampilkan _MENU_ data/halaman",
                "search": "Cari:",
                "infoFiltered": "(disaring dari total _MAX_ data)",
                "zeroRecords": "Tidak ada data yang cocok...",
                "loadingRecords": "Memuat...",
                "processing": "Memproses...",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
            },
        }); // End DataTable
    }); // End Ajax
</script>

@endsection