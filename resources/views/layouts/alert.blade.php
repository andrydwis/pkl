@if(session()->has('token'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Terima Kasih Telah Menggunakan Layanan Kami</h4>
    <p>
        Token Survey :
    <div class="btn-group" role="group">
        <button class="btn btn-light"><strong>{{session()->get('token')}}</strong></button>
        <button class="btn btn-primary"><i class="far fa-copy"></i></button>
    </div>
    </p>
    <hr>
    <p class="mb-0">Anda dapat melakukan survey dengan token tersebut <strong><a href="{{route('survey.index')}}" class="text-success">Disini</a></strong></p>
</div>
@endif