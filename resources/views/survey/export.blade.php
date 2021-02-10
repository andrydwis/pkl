<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Pertanyaan</th>
            <th>Sangat Puas</th>
            <th>Puas</th>
            <th>Cukup Puas</th>
            <th>Kurang Puas</th>
            <th>Tidak Puas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stats as $stat)
        @php
        $sangat_puas = $stat->jawabans->where('jawaban', 5)->count();
        $puas = $stat->jawabans->where('jawaban', 4)->count();
        $cukup_puas = $stat->jawabans->where('jawaban', 3)->count();
        $kurang_puas = $stat->jawabans->where('jawaban', 2)->count();
        $tidak_puas = $stat->jawabans->where('jawaban', 1)->count();
        @endphp
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$stat->pertanyaan}}</td>
            <td>{{$sangat_puas}}</td>
            <td>{{$puas}}</td>
            <td>{{$cukup_puas}}</td>
            <td>{{$kurang_puas}}</td>
            <td>{{$tidak_puas}}</td>
        </tr>
        @endforeach
    </tbody>
</table>