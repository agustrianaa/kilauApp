@extends('layout.main')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    .mb-2.tombolsubmit{
        justify-content: center;
        align-content: center; 
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
                        <li class="breadcrumb-item active">Data Anak Binaan</li>
                    </ol>
                </div>
            </div><!-- End row -->
        </div><!-- End container-fluid -->
    </div>
    <!-- End content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mb-2">
                        <h4>Form Pengajuan Anak</h4>
                    </div>
                </div>
            </div>
            <div class="row">

                

                <div class="card">
                    <div class="card-body">
                        <div class="card-body text-nowrap">
                            <div class="row">

                                <!--Form Anak-->
                                <div class="col-12 col-sm-6">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4 class="text-center">Form Anak</h4>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <form action="javascript:void(0)" id="pengajuanFormStore" name="pengajuanFormStore" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Nama Lengkap :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="nama_lengkap_calon_anak" name="nama_lengkap_calon_anak" placeholder="Nama Lengkap...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Nama Panggilan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="nama_panggilan_calon_anak" name="nama_panggilan_calon_anak" placeholder="Nama Panggilan...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Tempat Lahir :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="tempat_lahir_calon_anak" name="tempat_lahir_calon_anak" placeholder="Tempat Lahir...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Tanggal Lahir :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="date" class="form-control" id="tanggal_lahir_calon_anak" name="tanggal_lahir_calon_anak" placeholder="Tanggal Lahir...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Nama Sekolah :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah...">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="kelas_sekolah" name="kelas_sekolah" placeholder="Kelas...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Nama Madrasah :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="nama_madrasah" name="nama_madrasah" placeholder="Nama Madrasah...">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="kelas_madrasah" name="kelas_madrasah" placeholder="Kelas...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Hobby :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="hobby" name="hobby" placeholder="Hobby...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Cita - cita :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="cita_cita" name="cita_cita" placeholder="Cita-cita...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Jarak ke Shelter :</p>
                                                </div>
                                                <div class="col-12 col-sm-2">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="jarak_ke_shelter">
                                                        <span class="input-group-text">KM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Form Keluarga-->
                                <div class="col-12 col-sm-6">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4 class="text-center">Form Keluarga</h4>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">No. Kartu Keluarga :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No. KK">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Anak Ke :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="anak_ke" name="anak_ke" placeholder="Anak ke...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Alamat Lengkap :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <textarea class="form-control" id="alamat_kk" name="alamat_kk" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Kepala Keluarga :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga" placeholder="Nama Kepala Keluarga...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Form Ayah-->
                                <div class="col-12 col-sm-4">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4 class="text-center">Form Ayah</h4>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Nama Ayah Kandung :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Lengkap...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Pekerjaan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Nama Lengkap...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Jumlah Tanggungan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text" class="form-control" id="jumlah_tanggungan_ayah" name="jumlah_tanggungan_ayah">
                                                        <span class="input-group-text">,-</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Pendapatan Perbulan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text" class="form-control" id="pendapatan_ayah" name="pendapatan_ayah">
                                                        <span class="input-group-text">,-</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Form Ibu-->
                                <div class="col-12 col-sm-4">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4 class="text-center">Form Ibu</h4>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Nama Ibu Kandung :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Lengkap...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Pekerjaan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Nama Lengkap...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Pendapatan Perbulan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text" class="form-control" id="pendapatan_ibu" name="pendapatan_ibu">
                                                        <span class="input-group-text">,-</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Form Wali-->
                                <div class="col-12 col-sm-4">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4 class="text-center">Form Wali(Jika ada)</h4>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">No. KTP :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="no_ktp_wali" name="no_ktp_wali" placeholder="Nama Lengkap...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Nama Lengkap :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="nama_lengkap_wali" name="nama_lengkap_wali" placeholder="Nama Lengkap...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Nama Panggilan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="nama_panggilan_wali" name="nama_panggilan_wali" placeholder="Nama Panggilan...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Tempat Lahir :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="tempat_lahir_wali" name="tempat_lahir_wali" placeholder="Kota">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Tanggal Lahir :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="date" class="form-control" id="tanggal_lahir_wali" name="tanggal_lahir_wali" placeholder="Tanggal Lahir...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Pekerjaan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Nama Lengkap...">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Jumlah Tanggungan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text" class="form-control" id="jumlah_tanggungan_wali" name="jumlah_tanggungan_wali">
                                                        <span class="input-group-text">,-</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-sm-4">
                                                    <p class="text-sm-end">Pendapatan Perbulan :</p>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text" class="form-control" id="pendapatan_wali" name="pendapatan_wali">
                                                        <span class="input-group-text">,-</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary" id="tombol-save">Submit</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>

        
    </section><!-- End Main content -->
</div><!-- End content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#pengajuanFormStore').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ url('admin/PengajuanFormStore') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    // Reset semua input-an ke nilai awalnya
                    $('#nama_lengkap_calon_anak').val('');
                    $('#nama_panggilan_calon_anak').val('');
                    $('#tempat_lahir_calon_anak').val('');
                    $('#tanggal_lahir_calon_anak').val('');
                    $('#nama_sekolah').val('');
                    $('#kelas_sekolah').val('');
                    $('#nama_madrasah').val('');
                    $('#kelas_madrasah').val('');
                    $('#hobby').val('');
                    $('#cita_cita').val('');
                    $('#jarak_ke_shelter').val('');

                    $('#no_kk').val('');
                    $('#anak_ke').val('');
                    $('#alamat_kk').val('');
                    $('#kepala_keluarga').val('');

                    $('#nama_ayah').val('');
                    $('#pekerjaan_ayah').val('');
                    $('#jumlah_tanggungan_ayah').val('');
                    $('#pendapatan_ayah').val('');

                    $('#nama_ibu').val('');
                    $('#pekerjaan_ibu').val('');
                    $('#pendapatan_ibu').val('');

                    $('#no_ktp_wali').val('');
                    $('#nama_lengkap_wali').val('');
                    $('#nama_panggilan_wali').val('');
                    $('#tempat_lahir_wali').val('');
                    $('#tanggal_lahir_wali').val('');
                    $('#pekerjaan_wali').val('');
                    $('#jumlah_tanggungan_wali').val('');
                    $('#pendapatan_wali').val('');

                    $("#tombol-save").html('Submit');
                    $("#tombol-save").attr("disabled", false);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });

        // $('#pengajuanFormStore').click(function(e) {
            
        //     //form anak
        //     let nama_lengkap_calon_anak = $('#nama_lengkap_calon_anak').val();
        //     let nama_panggilan_calon_anak = $('#nama_panggilan_calon_anak').val();
        //     let tempat_lahir_calon_anak = $('#tempat_lahir_calon_anak').val();
        //     let tanggal_lahir_calon_anak = $('#tanggal_lahir_calon_anak').val();
        //     let nama_sekolah = $('#nama_sekolah').val();
        //     let kelas_sekolah = $('#kelas_sekolah').val();
        //     let nama_madrasah = $('#nama_madrasah').val();
        //     let kelas_madrasah = $('#kelas_madrasah').val();
        //     let hobby = $('#hobby').val();
        //     let cita_cita = $('#cita_cita').val();
        //     let jarak_ke_shelter = $('#jarak_ke_shelter').val();


        //     //form keluarga
        //     let no_kk = $('#no_kk').val();
        //     let anak_ke = $('#anak_ke').val();
        //     let alamat_kk = $('#alamat_kk').val();
        //     let kepala_keluarga = $('#kepala_keluarga').val();

        //     //form ayah
        //     let nama_ayah = $('#nama_ayah').val();
        //     let pekerjaan_ayah = $('#pekerjaan_ayah').val();
        //     let jumlah_tanggungan_ayah = $('#jumlah_tanggungan_ayah').val();
        //     let pendapatan_ayah = $('#pendapatan_ayah').val();

        //     //form ibu
        //     let nama_ibu = $('#nama_ibu').val();
        //     let pekerjaan_ibu = $('#pekerjaan_ibu').val();
        //     let pendapatan_ibu = $('#pendapatan_ibu').val();

        //     //form wali
        //     let no_ktp_wali = $('#no_ktp_wali').val();
        //     let nama_lengkap_wali = $('#nama_lengkap_wali').val();
        //     let nama_panggilan_wali = $('#nama_panggilan_wali').val();
        //     let tempat_lahir_wali = $('#tempat_lahir_wali').val();
        //     let tanggal_lahir_wali = $('#aabbbca').val();
        //     let pekerjaan_wali = $('#pekerjaan_wali').val();
        //     let jumlah_tanggungan_wali = $('#jumlah_tanggungan_wali').val();
        //     let pendapatan_wali = $('#pendapatan_wali').val();

        //     $.ajax({
        //         url: "{{ url('admin/pengajuanFormStore') }}"
        //         type: 'POST',

        //         data: {
        //             //Form Anak
        //             "nama_lengkap_calon_anak": nama_lengkap_calon_anak,
        //             "nama_panggilan_calon_anak": nama_panggilan_calon_anak,
        //             "tempat_lahir_calon_anak": tempat_lahir_calon_anak,
        //             "tanggal_lahir_calon_anak": tanggal_lahir_calon_anak,
        //             "nama_sekolah": nama_sekolah,
        //             "kelas_sekolah": kelas_sekolah,
        //             "nama_madrasah": nama_madrasah,
        //             "kelas_madrasah": kelas_madrasah,
        //             "hobby": hobby,
        //             "cita_cita": cita_cita,
        //             "jarak_ke_shelter": jarak_ke_shelter,

        //             //Form Keluarga
        //             "no_kk": no_kk,
        //             "anak_ke": anak_ke,
        //             "alamat_kk": alamat_kk,
        //             "kepala_keluarga": kepala_keluarga,

        //             //Form Ayah
        //             "nama_ayah": nama_ayah,
        //             "pekerjaan_ayah": pekerjaan_ayah,
        //             "jumlah_tanggungan_ayah": jumlah_tanggungan_ayah,
        //             "pendapatan_ayah": pendapatan_ayah,

        //             //Form Ibu
        //             "nama_ibu": nama_ibu,
        //             "pekerjaan_ibu": pekerjaan_ibu,
        //             "pendapatan_ibu": pendapatan_ibu,

        //             //Form Wali
        //             "no_ktp_wali": no_ktp_wali,
        //             "nama_lengkap_wali": nama_lengkap_wali,
        //             "nama_panggilan_wali": nama_panggilan_wali,
        //             "tempat_lahir_wali": tempat_lahir_wali,
        //             "tanggal_lahir_wali": tanggal_lahir_wali,
        //             "pekerjaan_wali": pekerjaan_wali,
        //             "jumlah_tanggungan_wali": jumlah_tanggungan_wali,
        //             "pendapatan_wali": pendapatan_wali,
        //         },
        //         success: function() {
        //             // Reset semua input-an ke nilai awalnya
        //             $('#nama_lengkap_calon_anak').val('');
        //             $('#nama_panggilan_calon_anak').val('');
        //             $('#tempat_lahir_calon_anak').val('');
        //             $('#tanggal_lahir_calon_anak').val('');
        //             $('#nama_sekolah').val('');
        //             $('#kelas_sekolah').val('');
        //             $('#nama_madrasah').val('');
        //             $('#kelas_madrasah').val('');
        //             $('#hobby').val('');
        //             $('#cita_cita').val('');
        //             $('#jarak_ke_shelter').val('');

        //             $('#no_kk').val('');
        //             $('#anak_ke').val('');
        //             $('#alamat_kk').val('');
        //             $('#kepala_keluarga').val('');

        //             $('#nama_ayah').val('');
        //             $('#pekerjaan_ayah').val('');
        //             $('#jumlah_tanggungan_ayah').val('');
        //             $('#pendapatan_ayah').val('');

        //             $('#nama_ibu').val('');
        //             $('#pekerjaan_ibu').val('');
        //             $('#pendapatan_ibu').val('');

        //             $('#no_ktp_wali').val('');
        //             $('#nama_lengkap_wali').val('');
        //             $('#nama_panggilan_wali').val('');
        //             $('#tempat_lahir_wali').val('');
        //             $('#tanggal_lahir_wali').val('');
        //             $('#pekerjaan_wali').val('');
        //             $('#jumlah_tanggungan_wali').val('');
        //             $('#pendapatan_wali').val('');
        //         }

        //     });
        // });
    });
</script>

@endsection