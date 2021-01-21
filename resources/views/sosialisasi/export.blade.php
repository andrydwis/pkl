<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nama Penyelenggara</th>
            <th>Tanggal</th>
            <th>Jam Pukul</th>
            <th>Tempat</th>
            <th>Nama Pemohon</th>
            <th>No HP Pemohon</th>
            <th>Jumlah Peserta</th>
            <th>Tema Kegiatan</th>
            <th>Status</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sosialisasis as $sosialisasi)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$sosialisasi->kategori}}</td>
            <td>{{$sosialisasi->nama_penyelenggara}}</td>
            <td>{{ date('d-m-Y', strtotime($sosialisasi->tanggal)) }}</td>
            <td>{{$sosialisasi->jam_pukul}}</td>
            <td>{{$sosialisasi->tempat}}</td>
            <td>{{$sosialisasi->nama_pemohon}}</td>
            <td>{{$sosialisasi->no_hp_pemohon}}</td>
            <td>{{$sosialisasi->jumlah_peserta}}</td>
            <td>{{$sosialisasi->tema_kegiatan}}</td>
            <td>{{$sosialisasi->status}}</td>
            <td>{{$sosialisasi->keterangan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>