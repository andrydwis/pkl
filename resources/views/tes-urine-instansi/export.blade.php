<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Instansi</th>
            <th>Nama Pemohon</th>
            <th>Alamat Instansi</th>
            <th>Tanggal Pelaksanaan Pemeriksaan</th>
            <th>Waktu Pelaksanaan Pemeriksaan</th>            
            <th>Contact Person</th>
            <th>Jumlah Peserta Laki-Laki</th>
            <th>Jumlah Peserta Perempuan</th>
            <th>Lokasi Pemeriksaan</th>            
        </tr>
    </thead>
    <tbody>
        @foreach($tes_urine_instansi as $tes_urine_instansi)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$tes_urine_instansi->nama_instansi}}</td>
            <td>{{$tes_urine_instansi->nama_pemohon}}</td>
            <td>{{$tes_urine_instansi->alamat_instansi}}</td>
            <td>{{ date('d-m-Y', strtotime($tes_urine_instansi->tanggal_pelaksanaan_pemeriksaan)) }}</td>
            <td>{{$tes_urine_instansi->waktu_pelaksanaan_pemeriksaan}}</td>
            <td>{{$tes_urine_instansi->contact_person}}</td>
            <td>{{$tes_urine_instansi->jumlah_peserta_laki}}</td>
            <td>{{$tes_urine_instansi->jumlah_peserta_perempuan}}</td>            
            <td>{{$tes_urine_instansi->lokasi_pemeriksaan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>