<!DOCTYPE html>
<html>

<head>
    <title>Kop Surat</title>
    <style>
    /* Gaya CSS untuk kop surat */
    .kop-surat {
        text-align: center;
        margin-bottom: 20px;
    }

    .kop-surat h1 {
        font-size: 24px;
        font-weight: bold;
        margin: 0;
    }

    .kop-surat p {
        font-size: 12px;
        margin: 5px 0;
    }

    .kop-surat .alamat {
        font-style: italic;
    }

    .tanda-tangan {
        width: 100%;
    }

    .tanda-tangan-kanan {
        text-align: right;
    }

    .tanda-tangan-kiri {
        text-align: left;
        margin-top: 20px;
        /* Ubah nilai sesuai kebutuhan */

    }
    </style>
</head>

<body>
    <div class="kop-surat">
        <h5 class="card-title">BERITA ACARA REKONSILIASI <br>REKONSILIASI DATA PERTANGGUNGJAWABAN REALISASI APBD <br>
            BADAN
            PENGELOLA KEUANGAN DAN ASET DAERAH KABUPATEN MEMPAWAH <br> NOMOR:
            <?=$list->nomor_surat;?> </h5>
    </div>

    <span style=" font-size: 12px">Pada <?=$list->keterangan;?>, Kami yang bertanda tangan dibawah ini : </span>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td style="padding-right: 280px;">Nama</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nama1;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">NIP</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nip1;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">Jabatan</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->jabatan1;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;"></td>
            <td style="padding-right: 5px;"></td>
            <td>Selanjutnya disebut <b>PIHAK PERTAMA</b></td>
        </tr>

    </table>
    <br>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td style="padding-right: 280px;">Nama</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nama2;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">NIP</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nip2;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">Jabatan</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->jabatan2;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;"></td>
            <td style="padding-right: 5px;"></td>
            <td>Selanjutnya disebut <b>PIHAK KEDUA</b></td>
        </tr>
    </table>
    <br>

    <span style="font-size: 12px; line-height: 2;">Dengan ini menerangkan bahwa : <br> PIHAK PERTAMA
        telah melakukan
        Rekonsiliasi Pengeluaran Bulan
        <?=$list->bulan;?> Tahun <?=$list->tahun;?> dengan PIHAK KEDUA <br> Adapun Hasil Rekonsiliasi sebagai berikut :
    </span>
    <br>

    <span style=" font-size: 12px"><b>LAPORAN REALISASI BELANJA (PEMENDAGRI 64)</b> </span>
    <span style=" font-size: 12px;margin-left: 20px; font-weight: bold;">I.PENGELUARAN</span>
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 280px;">SALDO AWAL</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->saldo_awal_belanja;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA OPERASI</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->belanja_operasi;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA MODAL</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->belanja_modal;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA TIDAK TERDUGA</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->belanja_terduga;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA TRANSFER</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->belanja_transfer;?></td>
        </tr>

    </table>
    <hr style="font-size: 12px; margin-left: 30px;font-weight: bold; margin-right:70px">
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 225px;">TOTAL PENGELUARAN</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->total_pengeluaran;?></b></td>
        </tr>
    </table>
    <br>

    <span style=" font-size: 12px"><b>LAPORAN BELANJA DI BKU PENGELUARAN</b> </span>
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 280px;">SALDO AWAL</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->saldo_awal_pengeluaran;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">JUMLAH PENERIMAAN SP2D(LS+UP/GU/TU)</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->penerimaan_sp2d;?></b></td>
        </tr>
    </table>

    <p style=" font-size: 12px; margin-left: 30px;"><b>JUMLAH BELANJA</b> </p>

    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td>-</td>
            <td style="padding-right: 225px;">Belanja Berdasarkan BKU</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->bku;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Belanja Berdasarkan LRA</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->lra;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Selisih antara Belanja BKU dan LRA</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->selisih;?></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right: 10px;">1. Belanja GU dan BKU yang disahkan</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->gu_bku;?></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right: 10px;">2. GU di BKU yang belum disahkan</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->bku_gu;?></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right: 10px;">3. Pencatatan Dana Desa tidak melalui BKU tetapi melalui</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->dana_desa;?></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right: 10px;">Penjurnalan
                (Jurnal Penyesuaaian)</td>
            <td style="padding-right: 5px;"></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right: 10px;">4. SPJ di BKU kan tetapi belum di Transfer</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->spj;?></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right: 10px;">5. Kelebihan Bayar Pajak</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->lebih_pajak;?></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right: 10px;">6. Pajak yang belum di Setor</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->pajak_setor;?></td>
        </tr>
    </table>
    <p style=" font-size: 12px; margin-left: 30px;"><b>PAJAK</b> </p>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td>-</td>
            <td style="padding-right: 280px;">Penerima Pajak</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->penerima_pajak;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Penyetor Pajak</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->penyetor_pajak;?></td>
        </tr>

    </table>
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 172px;">PENGEMBALIAN SISA UP/GU/TU</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->pengembalian;?></b></td>
        </tr>

    </table>

    <span style=" font-size: 12px"><b>LAPORAN KAS DI BENDAHARA PENGELUARAN</b> </span>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td>-</td>
            <td style="padding-right: 260px;">Saldo Kasi di BKU</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->saldo_kas;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Saldo Bank Bendahara (CMS)</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->saldo_bank;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Saldo Tunai</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->saldo_tunai;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Total Saldo Kas Bendahara</td>
            <td style="padding-right: 5px;">:</td>
            <td> <?=$list->total_saldo;?> </td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Selisih Saldo BKU dan Saldo Kas Bendahara</td>
            <td style="padding-right: 5px;">:</td>
            <td>( <?=$list->selisih_saldo;?> )</td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right: 10px;">1. Kekurangan Bayar Lembur</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->kurang_lembur;?></td>
        </tr>
    </table>
    <span style=" font-size: 12px;margin-left: 30px;">Demikian Berita Acara Rekonsiliasi ini dibuat untuk dipergunakan
        sebagaimana mestinya.</span>
    <br>

    <table class="tanda-tangan" style=" font-size: 12px">
        <tr>
            <td class="tanda-tangan-kanan" style="text-align: center;">
                PIHAK PERTAMA <br>
                <?=$list->jabatan1;?> <br>

                <?php if ($list->ttd_1 != null) {
    $imagePath = base_url() . $list->ttd_1;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($list->ttd_1);
    ?>
                <img src="<?=$imagePathWithVersion;?>" style="width: 30%; height: auto;" alt="Tanda Tangan">

                <?php }?> <br>
                <u><?=$list->nama1;?></u><br><?=$list->nip1;?>
            </td>
            <td class="tanda-tangan-kiri" style="text-align: center;"> PIHAK KEDUA <br>
                <?=$list->jabatan2;?> <br>

                <?php if ($list->ttd_2 != null) {
    $imagePath = base_url() . $list->ttd_2;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($list->ttd_2);
    ?>
                <img src="<?=$imagePathWithVersion;?>" style="width: 30%; height: auto;" alt="Tanda Tangan">

                <?php }?> <br>
                <u><?=$list->nama2;?></u><br><?=$list->nip2;?>
            </td>
        </tr>
    </table>
</body>


</html>