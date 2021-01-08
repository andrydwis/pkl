<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nomer KTP</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengaduans as $pengaduan)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$pengaduan->nomer_ktp}}</td>
            <td>{{$pengaduan->nama_lengkap}}</td>
            <td>{{$pengaduan->ttl}}</td>
            <td>{{$pengaduan->alamat}}</td>
            <td>‘{{$pengaduan->telepon}}</td>
        </tr>
        @endforeach
    </tbody>
</table>