<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Data Dari API</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($data['data']) && is_array($data['data']))
                @foreach($data['data'] as $item)
                    <tr>
                        <td>{{ $item['no'] ?? 'N/A' }}</td>
                        <td>{{ $item['id_produk'] ?? 'N/A' }}</td>
                        <td>{{ $item['nama_produk'] ?? 'N/A' }}</td>
                        <td>{{ $item['kategori'] ?? 'N/A' }}</td>
                        <td>{{ $item['harga'] ?? 'N/A' }}</td>
                        <td>{{ $item['status'] ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">Data tidak valid</td>
                </tr>
            @endif
        </tbody>
    </table>

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
    
</body>
</html>
