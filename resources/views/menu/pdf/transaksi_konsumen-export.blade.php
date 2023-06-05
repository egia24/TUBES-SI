<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #barang{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-collapse: collapse;
            with: 100%;
        }
        #barang td, #barang th{
            border: 1px solid #bababa;
            padding: 8px;
        }
        #barang tr:nth-child(even){
            background-color: #bababa;
        }
        #barang tr:hover{
            background-color: #ddd;
        }
        #barang th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: aqua;
            color: azure;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3 align="center">Laporan Data Transaksi Konsumen</h3>
    <table id="barang">
        <thead>
            <tr>
                <th>ID Transaksi Konsumen</th>
                <th>ID Konsumen</th>
                <th>ID Barang</th>
                <th>ID Jenis Transaksi</th>
                <th>Jumlah Barang</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $transaksi_konsumens)
                <tr>
                    <td>{{$transaksi_konsumens->id_transaksi_konsumen}}</td>
                    <td>{{$transaksi_konsumens->konsumen->id_konsumen}}</td>
                    <td>{{$transaksi_konsumens->barang->id_barang}}</td>
                    <td>{{$transaksi_konsumens->jenis_transaksi->id_jenis_transaksi}}</td>
                    <td>{{$transaksi_konsumens->jumlah_barang}}</td>
                    <td>{{$transaksi_konsumens->tanggal_transaksi_konsumen}}</td>
                    <td>{{$transaksi_konsumens->total_harga_konsumen}}</td>
                </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>