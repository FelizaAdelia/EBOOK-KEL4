<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Checkout Pesanan</h1>

    <form action="proses_checkout.php" method="post">
        <label for="nama">Nama Penerima:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" required><br>

        <h2>Daftar Buku:</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <!-- Isi tabel dengan buku-buku yang akan dibeli -->
                <tr>
                    <td>Buku 1</td>
                    <td>$19.99</td>
                </tr>
                <tr>
                    <td>Buku 2</td>
                    <td>$29.99</td>
                </tr>
                <!-- Tambahkan baris untuk setiap buku yang dibeli -->
            </tbody>
        </table>

        <h3 class="total">Total Harga: $49.98</h3>

        <input type="submit" value="Proses Pesanan">
    </form>

</body>
</html>
