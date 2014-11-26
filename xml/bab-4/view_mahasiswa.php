<html>
<head>
  <title>View Data Bukti</title>
</head>
<body>
  <?php
    // include "koneksi.php"
  $url = 'http://localhost/dev/ws/xml/bab-4/mhs.php';

  // Menambil data string dari resources
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($client);
  curl_close($client);

  $datamahasiswaxml = simplexml_load_string($response);

  echo "<table border='1'>
  <tr>
    <td>NIM</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Prodi</td>
  </tr>";

  foreach ($datamahasiswaxml->mahasiswa as $mahasiswa) {
    echo "<tr>
      <td>".$mahasiswa->nim."</td>
      <td>".$mahasiswa->nama."</td>
      <td>".$mahasiswa->alamat."</td>
      <td>".$mahasiswa->prodi."</td>
    </tr>";
  }
  echo "</table>"
  ?>
</body>
</html>