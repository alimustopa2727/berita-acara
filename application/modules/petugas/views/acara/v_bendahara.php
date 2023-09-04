<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/mempawah.png">
    <title><?=$title;?></title>
    <!-- This page CSS -->
    <!-- chartist CSS -->

    <?=$this->load->view('css.php')?>

    <!-- page css -->
    <link href="<?=base_url()?>assets/dist/css/pages/tab-page.css" rel="stylesheet">

</head>

<body class="skin-green-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><?=$title;?></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->


        <?=$this->load->view('sidebar.php')?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Pengajuan</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php base_url();?>petugas/pengajuan" class="btn btn-success">
                                    <i class="ti ti-angle-double-left"></i>
                                    <span class="ml-2">Menu Pengajuan</span>
                                </a>
                                <center>
                                    <h4 class="card-title">BERITA ACARA REKONSILIASI</h4>
                                    <h6 class="card-title">REKONSILIASI DATA PERTANGGUNGJAWABAN REALISASI APBD <br>
                                        BADAN
                                        PENGELOLA KEUANGAN DAN ASET DAERAH KABUPATEN MEMPAWAH <br> NOMOR:
                                        <?=$list->nomor_surat;?>
                                        <br>
                                        <br>
                                        Status : <span class="label label-table label-<?=$list->warna;?>">
                                            <?=$list->nama_status;?></span>
                                </center>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link "
                                            href="<?=base_url() . 'petugas/detail_ajuan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                                class="hidden-xs-down">
                                                Penandatangan</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link "
                                            href="<?=base_url() . 'petugas/detail_belanja?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-user"></i></span> <span
                                                class="hidden-xs-down">
                                                Belanja (PEMENDAGRI 64)</span></a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'petugas/detail_pengeluaran?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-money"></i></span> <span
                                                class="hidden-xs-down">
                                                BKU Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active"
                                            href="<?=base_url() . 'petugas/detail_bendahara?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-tag"></i></span> <span
                                                class="hidden-xs-down">Kas di
                                                Bendahara Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'petugas/detail_pimpinan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-users"></i></span> <span
                                                class="hidden-xs-down">TTD
                                                Pimpinan</span></a> </li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" role="tabpanel">
                                        <div class="p-20">
                                            <p>LAPORAN KAS DI BENDAHARA PENGELUARAN</p>

                                            <div class="col-md-12">
                                                <div class="card card-body">

                                                    <form class="form-horizontal"
                                                        action="<?php base_url()?>petugas/simpan_step4" method="post"
                                                        onsubmit="return validateForm()">

                                                        <div class="form-group row">
                                                            <!-- Input Saldo Awal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">-
                                                                Saldo Kas di BKU</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="saldo_kas" id="saldo_kas"
                                                                        value="<?=$step4->saldo_kas;?>" data-min="0">


                                                                    <input type="hidden" class="form-control"
                                                                        name="id_ajuan" value="<?=$list->id_ajuan;?>"
                                                                        placeholder="Nama">
                                                                    <input type="hidden" class="form-control"
                                                                        name="hash"
                                                                        value="<?=hash('sha256', $list->created_at);?>"
                                                                        placeholder="Nama">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <!-- Input Saldo Awal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">-
                                                                Saldo Bank Bendahara (CMS)</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="saldo_bank" id="saldo_bank"
                                                                        value="<?=$step4->saldo_bank;?>" data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <!-- Input Saldo Awal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">-
                                                                Saldo Tunai</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="saldo_tunai" id="saldo_tunai"
                                                                        value="<?=$step4->saldo_tunai;?>" data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <!-- Input Saldo Awal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">-
                                                                Total Saldo Kas Bendahara</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="total_saldo" id="total_saldo"
                                                                        value="<?=$step4->total_saldo;?>" data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <!-- Input Saldo Awal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">-
                                                                Selisih Saldo BKU dan Saldo Kas Bendahara</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="selisih_saldo" id="selisih_saldo"
                                                                        value="<?=$step4->selisih_saldo;?>"
                                                                        data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <!-- Input Saldo Awal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label"><i>1.
                                                                    Kekurangan Bayar Lembur</i></label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="kurang_lembur" id="kurang_lembur"
                                                                        value="<?=$step4->kurang_lembur;?>"
                                                                        data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if ($list->status == 1 || $list->status == 4): ?>
                                                        <div class="form-group m-b-0">
                                                            <div class="offset-sm-3 col-sm-9">
                                                                <button type="submit"
                                                                    class="btn btn-info waves-effect waves-light m-t-10">Simpan
                                                                    Belanja</button>
                                                            </div>
                                                        </div>
                                                        <?php endif;?>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        <?=$this->load->view('footer.php')?>
        <?=$this->load->view('javascript.php')?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js">
        </script>

        <script>
        function validateForm() {
            // Get the form fields
            var saldoKas = document.getElementById("saldo_kas").value;
            var saldoBank = document.getElementById("saldo_bank").value;
            var saldoTunai = document.getElementById("saldo_tunai").value;
            var totalSaldo = document.getElementById("total_saldo").value;
            var selisihSaldo = document.getElementById("selisih_saldo").value;
            var kurangLembur = document.getElementById("kurang_lembur").value;

            // Check if any field is empty
            if (saldoKas == "" || saldoBank == "" || saldoTunai == "" || totalSaldo == "" || selisihSaldo == "" ||
                kurangLembur == "") {
                alert("Mohon lengkapi semua field yang diperlukan. Jika kosong mohon isi dengan nol(0)");
                return false; // Prevent form submission
            }
        }
        </script>
        <script>
        $(document).ready(function() {
            $('.input-rupiah').inputmask({
                prefix: 'Rp ',
                radixPoint: ',',
                groupSeparator: '.',
                alias: 'numeric',
                autoGroup: true,
                digits: 0
            });

            // Menghitung total pengeluaran
            function calculateTotalPengeluaran() {
                var saldoAwal = parseInt($('#saldo_awal').inputmask('unmaskedvalue')) || 0;

                var belanjaOperasi = parseInt($('#belanja_operasi').inputmask('unmaskedvalue')) || 0;
                var belanjaModal = parseInt($('#belanja_modal').inputmask('unmaskedvalue')) || 0;
                var belanjaTerduga = parseInt($('#belanja_terduga').inputmask('unmaskedvalue')) || 0;
                var belanjaTransfer = parseInt($('#belanja_transfer').inputmask('unmaskedvalue')) || 0;

                var totalPengeluaran = saldoAwal + belanjaOperasi + belanjaModal + belanjaTerduga +
                    belanjaTransfer;

                $('#total_pengeluaran').val('Rp ' + totalPengeluaran.toLocaleString());
            }

            // Memanggil fungsi calculateTotalPengeluaran saat inputan berubah
            $('.input-rupiah').on('input', calculateTotalPengeluaran);
        });
        </script>


</body>







</html>
