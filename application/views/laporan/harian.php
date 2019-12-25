<!DOCTYPE html>
<html>
<head>
    <title>Laporan Harian</title>
    <style>
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid black;
          padding: 8px;
        }

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #ddd;
          color: black;
        }
    </style>
</head>
<body>
    <div>
        <div style="text-align:center; margin-top: 0px">
            <img src="<?= $_SERVER["DOCUMENT_ROOT"] ?>/ra/assets/images/logo/<?= $identitas->favicon ?>" style="width: 100px; height: 90px; position: absolute; top: 0;"/>
            <p style="text-align: center; line-height: 30px">
              <span style="font-size: 18px;">PONDOK PESANTREN MUMTAZ</span><br>
              <span style="font-size: 25px;"><strong><?= strtoupper($identitas->nama_sekolah) ?></strong></span><br/>
            </p>
        </div>
        <div style="border: 2px solid black; width: 100%; align-items: center;">
            <p style="margin: 0; font-size:12px; font-weight: bold; text-align: center;"><?= $identitas->alamat.' Telp. '.$identitas->no_telp ?></p>
        </div>
    </div>
    <center><h3>Laporan Tabungan Harian</h3></center>
    <table width="100%" id="customers">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Jenis</th>
                <th>Nominal</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($tabungan as $t): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $t['nis'] ?></td>
                <td><?= $t['nama'] ?></td>
                <td><?= $t['jenis'] ?></td>
                <td>Rp.<?= number_format($t['nominal']) ?></td>
                <td><?= $t['ket'] ?></td>
                <td><?= $t['tanggal'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>