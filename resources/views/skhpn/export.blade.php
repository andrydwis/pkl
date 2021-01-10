<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nomer KTP</th>
            <th>Nama Lengkap</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Pekerjaan</th>
            <th>Tanggal Permohonan</th>
            <th>Keperluan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($skhpns as $skhpn)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$skhpn->nomer_ktp}}</td>
            <td>{{$skhpn->nama_lengkap}}</td>
            <td>{{$skhpn->tempat_lahir}}</td>
            <td>{{ date('d-m-Y', strtotime($skhpn->ttl)) }}</td>
            <td>{{$skhpn->jenis_kelamin}}</td>
            <td>{{$skhpn->alamat}}</td>
            <td>{{$skhpn->telepon}}</td>
            <td>{{$skhpn->pekerjaan}}</td>
            <td>{{ date('d-m-Y', strtotime($skhpn->tanggal_permohonan)) }}</td>
            <td>{{$skhpn->keperluan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>