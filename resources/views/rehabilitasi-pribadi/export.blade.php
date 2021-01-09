<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nomer KTP</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Jenis Penyalahgunaan</th>
            <th>Hubungan Dengan Penyalahguna</th>
            <th>Rencana Kedatangan Ke Klinik</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rehabilitasis as $rehabilitasi)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$rehabilitasi->nomer_ktp}}</td>
            <td>{{$rehabilitasi->nama_lengkap}}</td>
            <td>{{$rehabilitasi->alamat}}</td>
            <td>{{$rehabilitasi->telepon}}</td>
            <td>{{$rehabilitasi->jenis_penyalahgunaan}}</td>
            <td>{{$rehabilitasi->hubungan_dengan_penyalahguna}}</td>
            <td>{{ date('d-m-Y', strtotime($rehabilitasi->rencana_kedatangan_ke_klinik)) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>