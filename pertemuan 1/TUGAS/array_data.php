<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

  $Fruits = [
    [
          "Id" => 1,
          "Nama" => 'Naga',
          "Warna" => 'Merah',
          "Stok"  => 200, 
          "Harga" => 30000,
          "Deskripsi" => 'Buah naga (Inggris: pitaya) adalah buah dari beberapa jenis kaktus dari marga Hylocereus dan Selenicereus. Buah ini berasal dari Meksiko, Amerika Tengah dan Amerika Selatan namun sekarang juga dibudidayakan di negara-negara Asia seperti Indonesia, Taiwan, Vietnam, Filipina, dan Malaysia. ',
    ],
    [
        "Id" => 2,
        "Nama" => 'Alpukat',
        "Warna" => 'Hijau',
        "Stok"  => 300,
        "Harga" => 38000,
        "Deskripsi" => ' Alpukat merupakan jenis buah yang memiliki kandungan lemak tinggi, sekitar 20 kali lebih tinggi dibanding buah-buahan lain. Nama latin tanaman alpukat adalah Persea americana, diyakini berasal dari Amerika Tengah.',
    ],
    [
        "Id" => 3,
        "Nama" => 'Melon',
        "Warna" => 'Hijau',
        "Stok"  => 150,
        "Harga" => 35000,
        "Deskripsi" => 'Melon (Cucumis melo L.) merupakan nama buah sekaligus tanaman yang menghasilkan buah, termasuk suku labu-labuan atau Cucurbitaceae. Buahnya dimakan segar sebagai buah meja atau diiris-iris sebagai campuran es buah.',
    ],
    [
      "Id" => 4,
      "Nama" => 'semangka',
      "Warna" => 'Merah',
      "Stok"  => 120,
      "Harga" => 20000,
      "Deskripsi" => 'Buah semangka merupakan tanaman semusim yang tumbuh merambat hingga mencapai panjang 3-5 meter. Batangnya lunak, bersegi, berambut dan panjangnya mencapai 1,5-5 meter.',
  ],
  [
    "Id" => 5,
    "Nama" => 'Jeruk',
    "Warna" => 'Kuning',
    "Stok"  => 250,
    "Harga" => 23000,
    "Deskripsi" => 'Buah jeruk memiliki ragam bentuk ada yang bulat, oval namun ada juga yang lonjong memanjang. Dengan kulit buah terdapat yang alot dan tebal, tipis mudah di kupas, warna kuning, hijau hingga jingga tergantung pada jenis jeruk tersebut. ',
],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */

          foreach ($Fruits as $fruit) {
            echo "<tr>";
               echo "<td>" . $fruit['Id'] . "</td>"; 
               echo "<td>" . $fruit['Nama'] . "</td>"; 
               echo "<td>" .  $fruit['Warna'] . "</td>"; 
               echo  "<td>" . $fruit['Stok'] . "</td>"; 
               echo  "<td>" . $fruit['Harga'] . "</td>"; 
               echo "<td>" . $fruit['Deskripsi']. "</td>";
               
            echo "</tr>";
        }   
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>