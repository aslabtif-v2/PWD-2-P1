<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PWD - PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 30px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
        }
       
        .header-col {
            background-color: #00FF00; 
        }
        .cell-yellow {
            background-color: #FFFF00; 
        }
        .cell-cyan {
            background-color: #00FFFF; 
        }
    </style>
</head>
<body>

    
    <h3>Soal 1: Pengulangan Angka Genap (1 sampai 10)</h3>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            // Cek apakah angka genap (habis dibagi 2)
            if ($i % 2 == 0) {
                echo "<li>Angka Genap: $i</li>";
            }
        }
        ?>
    </ul>

    
    <h3>Soal 2: Tabel Perkalian Matriks</h3>
    <table>
        <!-- Header Atas (Kolom 1 sampai 10) -->
        <tr>
            <th class="header-col">bilangan</th>
            <?php
            for ($h = 1; $h <= 10; $h++) {
                echo "<th class='header-col'>$h</th>";
            }
            ?>
        </tr>

        <!-- Perulangan Baris (1 sampai 10) -->
        <?php
        for ($r = 1; $r <= 10; $r++) {
            echo "<tr>";
            
         
            echo "<th class='header-col'>$r</th>";

            
            for ($c = 1; $c <= 10; $c++) {
                $hasil = $r * $c;
                
              
                $warna = ($c % 2 != 0) ? "cell-yellow" : "cell-cyan";
                
                echo "<td class='$warna'>$hasil</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>