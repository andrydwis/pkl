@if(session()->has('token'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Terima Kasih Telah Menggunakan Layanan Kami</h4>
    <p>
        Token Survey :
        <div class="input-group">
            <input id="token" type="text" class="form-control" disabled aria-describedby="basic-addon2" value="<?php echo session()->get('token')?>">
            <div class="input-group-append">
                <button onclick="CopyFunction()" onmouseout="outFunc()"class="btn btn-primary" type="button"><i id="myTooltip" class="far fa-copy"></i></button>
            </div>
        </div>
    </p>
    <hr>
    <p class="mb-0">Anda dapat melakukan survey dengan token tersebut <strong><a href="{{route('survey.index')}}" class="text-success">Disini</a></strong></p>
</div>
@endif