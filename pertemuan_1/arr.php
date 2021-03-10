<?php
    // $arr =['Shyfa','20',]
    $mh = [
        [
            'nama' => 'Shyfa',
            'umur' => '20',
        ],
        [
            'nama' => 'Naya',
            'umur' => '21',
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?foreach ($mh as $student) : ?>
                <!-- <tr>
                    <td><?= $mh['nama']; ?></td>
                    <td><?= $mh['umur']; ?></td>
                </tr> -->
        </tbody>
    </table>
    
</body>
</html>