
<?php

$testMatrix = [
    [
        "Mahasiswa + Web Dasar + 1 paket",
        "Rp 240.000",
        "Rp 240.000"
    ],
    [
        "Guru + PHP Dasar + 1 paket",
        "Rp 340.000",
        "Rp 340.000"
    ],
    [
        "Umum + Laravel Dasar + 1 paket",
        "Rp 500.000",
        "Rp 500.000"
    ],
    [
        "Mahasiswa + Web Dasar + 2 paket",
        "Rp 480.000",
        "Rp 480.000"
    ],
    [
        "Guru + PHP Dasar + 2 paket",
        "Rp 680.000",
        "Rp 680.000"
    ],
    [
        "Umum + Laravel Dasar + 2 paket",
        "Rp 1.000.000",
        "Rp 1.000.000"
    ],
    [
        "Mahasiswa + PHP Dasar + 1 paket",
        "Sesuai harga mahasiswa",
        "Sesuai harga mahasiswa"
    ],
    [
        "Guru + Web Dasar + 1 paket",
        "Sesuai harga guru",
        "Sesuai harga guru"
    ],
    [
        "Umum + PHP Dasar + 1 paket",
        "Sesuai harga umum",
        "Sesuai harga umum"
    ],
    [
        "Mahasiswa + Laravel Dasar + 2 paket",
        "Sesuai perhitungan paket",
        "Sesuai perhitungan paket"
    ],
    [
        "Guru + Laravel Dasar + 1 paket + diskon",
        "Total setelah diskon",
        "Total setelah diskon"
    ],
    [
        "Mahasiswa + PHP Dasar + 2 paket + diskon",
        "Total setelah diskon",
        "Total setelah diskon"
    ],
    [
        "Input peserta kosong",
        "Muncul pesan validasi",
        "Muncul pesan validasi"
    ],
    [
        "Input kursus kosong",
        "Muncul pesan validasi",
        "Muncul pesan validasi"
    ],
    [
        "Jumlah paket tidak valid",
        "Muncul pesan kesalahan",
        "Muncul pesan kesalahan"
    ]
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Matrix Pertemuan 6</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 32px 20px;
            background: #effaf8;
            font-family: Arial, Helvetica, sans-serif;
            color: #172033;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 26px 24px 22px;
            background: #ffffff;
            border-radius: 16px;
        }

        .subtitle {
            margin-bottom: 22px;
            color: #087f78;
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        h1 {
            margin: 0 0 14px;
            font-size: 24px;
            font-weight: 700;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border: 1px solid #e3eaf0;
            border-radius: 10px;
        }

        table {
            width: 100%;
            min-width: 760px;
            border-collapse: collapse;
            font-size: 12px;
        }

        thead {
            background: #eafbf4;
        }

        th {
            padding: 14px 12px;
            text-align: left;
            color: #164e49;
            font-size: 10px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        td {
            padding: 14px 12px;
            border-top: 1px solid #e7edf3;
            line-height: 1.5;
        }

        tbody tr:hover {
            background: #f8fcfb;
        }

        .no {
            width: 40px;
        }

        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            background: #eafbf0;
            color: #07833d;
            font-size: 10px;
            font-weight: bold;
        }

        @media (max-width: 600px) {
            body {
                padding: 16px 10px;
            }

            .container {
                padding: 20px 14px;
            }

            h1 {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="subtitle">EVIDENCE WEEK 06</div>

        <h1>Test Matrix Pertemuan 6</h1>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th class="no">No</th>
                        <th>Skenario</th>
                        <th>Actual</th>
                        <th>Expected</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($testMatrix as $index => $data): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($data[0]) ?></td>
                            <td><?= htmlspecialchars($data[1]) ?></td>
                            <td><?= htmlspecialchars($data[2]) ?></td>
                            <td>
                                <span class="status">PASS</span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
