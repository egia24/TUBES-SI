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
    <h3 align="center">Laporan Data Pelanggan</h3>
    <table id="barang">
        <thead>
            <tr>
                <th>ID Transaksi Pelanggan</th>
                <th>ID Pelanggan</th>
                <th>ID Barang</th>
                <th>ID Jenis Transaksi</th>
                <th>Jumlah Barang</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $transaksi_pelanggans)
                <tr>
                    <td>{{$transaksi_pelanggans->id_transaksi_pelanggan}}</td>
                    <td>{{$transaksi_pelanggans->pelanggan->id_pelanggan}}</td>
                    <td>{{$transaksi_pelanggans->barang->id_barang}}</td>
                    <td>{{$transaksi_pelanggans->jenis_transaksi->id_jenis_transaksi}}</td>
                    <td>{{$transaksi_pelanggans->jumlah_barang}}</td>
                    <td>{{$transaksi_pelanggans->tanggal_transaksi_pelanggan}}</td>
                    <td>{{$transaksi_pelanggans->total_harga_pelanggan}}</td>
                </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>