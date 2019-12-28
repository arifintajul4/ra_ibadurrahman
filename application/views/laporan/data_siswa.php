<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Siswa</title>
    <style>
        .customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        .customers td, .customers th {
          border: 1px solid black;
          padding: 8px;
        }

        .customers tr:hover {background-color: #ddd;}

        .customers th {
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
    <center><h3>Laporan Data Siswa</h3></center>
    <?php if(isset($kelas)): ?>
    <?php foreach ($kelas as $kls): ?>
    <p>Kelas <?= $kls['kelas'] ?></p>
    <table width="100%" class="customers" style="font-size: 12px;">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($siswa as $t):
            if($t['kelas'] == $kls['kelas']): ?>

            <tr>
                <td><?= $i++; ?></td>
                <td><?= $t['nis'] ?></td>
                <td><?= $t['nama'] ?></td>
                <td><?= ($t['jk']=='L')?'Laki-laki':'Perempuan' ?></td>
                <td><?= date('d M Y', strtotime($t['tgl_lahir'])) ?></td>
                <td><?= $t['agama'] ?></td>
                <td><?= $t['no_tlp'] ?></td>
                <td><?= $t['alamat'] ?></td>
            </tr>

            <?php endif; endforeach; ?>
        </tbody>
    </table>
    <?php endforeach; ?>
    <?php endif; ?>

    <?php if(!isset($kelas)): ?>
    <p>Kelas <?= $kls ?></p>
    <table width="100%" class="customers" style="font-size: 12px;">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($siswa as $t): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $t['nis'] ?></td>
                <td><?= $t['nama'] ?></td>
                <td><?= ($t['jk']=='L')?'Laki-laki':'Perempuan' ?></td>
                <td><?= date('d M Y', strtotime($t['tgl_lahir'])) ?></td>
                <td><?= $t['agama'] ?></td>
                <td><?= $t['no_tlp'] ?></td>
                <td><?= $t['alamat'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>