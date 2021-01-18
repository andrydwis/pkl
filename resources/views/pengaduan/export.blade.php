<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nomer KTP</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Pekerjaan</th>
            <th>Tanggal Kejadian</th>
            <th>Waktu Kejadian</th>
            <th>Kategori</th>
            <th>Isi Pengaduan</th>
            <th>Status</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengaduans as $pengaduan)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$pengaduan->nomer_ktp}}</td>
            <td>{{$pengaduan->nama_lengkap}}</td>
            <td>{{ date('d-m-Y', strtotime($pengaduan->ttl)) }}</td>
            <td>{{$pengaduan->alamat}}</td>
            <td>{{$pengaduan->telepon}}</td>
            <td>{{$pengaduan->pekerjaan}}</td>
            <td>{{$pengaduan->tanggal_kejadian}}</td>
            <td>{{$pengaduan->waktu_kejadian}}</td>
            <td>{{$pengaduan->kategori}}</td>
            <td>{{$pengaduan->isi_pengaduan}}</td>
            <td>{{$pengaduan->status}}</td>
            <td>{{$pengaduan->keterangan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>