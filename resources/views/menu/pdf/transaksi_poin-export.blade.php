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
    <h3 align="center">Laporan Data Transaksi Poin</h3>
    <table id="barang">
        <thead>
            <tr>
                <th>ID Transaksi Poin</th>
                <th>ID Pelanggan</th>
                <th>ID Poin</th>
                <th>Tanggal</th>
                <th>Jumlah Poin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $transaksi_poins)
            <tr>
                <td>{{$transaksi_poins->id_transaksi_poin}}</td>
                <td>{{$transaksi_poins->pelanggan->id_pelanggan}}</td>
                <td>{{$transaksi_poins->poin->id_poin}}</td>
                <td>{{$transaksi_poins->tanggal_transaksi_poin}}</td>
                <td>{{$transaksi_poins->jumlah_poin}}</td> 
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>