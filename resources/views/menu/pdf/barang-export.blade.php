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
    <h3 align="center">Laporan Data Barang</h3>
    <table id="barang">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>ID Distributor</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $barangs)
            <tr>
                <td>{{$barangs->id_barang}}</td>
                <td>{{$barangs->nama_barang}}</td>
                <td>{{$barangs->harga_barang}}</td>
                <td>{{$barangs->distributor->id_distributor}}</td>
                <td>{{$barangs->stok}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>