<table>
    <thead>
        <tr>
            <th>No</th>            
            <th>Nama Lengkap Pelapor</th>
            <th>Nama Instansi</th>
            <th>Alamat Instansi</th>
            <th>Nomor Telepon</th>
            <th>Jumlah Yang Dicurigai</th>
            <th>Jenis Penyalahgunaan</th>            
        </tr>
    </thead>
    <tbody>
        @foreach($rehabilitasis as $rehabilitasi)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$rehabilitasi->nama_lengkap_pelapor}}</td>
            <td>{{$rehabilitasi->nama_instansi}}</td>
            <td>{{$rehabilitasi->alamat_instansi}}</td>
            <td>{{$rehabilitasi->nomor_telepon}}</td>
            <td>{{$rehabilitasi->jumlah_yang_dicurigai}}</td>
            <td>{{$rehabilitasi->jenis_penyalahgunaan}}</td>            
        </tr>
        @endforeach
    </tbody>
</table>