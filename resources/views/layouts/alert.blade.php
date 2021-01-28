@if (session()->has('token'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Terima Kasih Telah Menggunakan Layanan Kami</h4>
        <p>
            Token Survey :
        <div class="input-group">
            <input id="token" type="text" readonly="true" class="form-control" value="{{ session()->get('token') }}">
            <div class="input-group-append">
                <button onclick="CopyFunction()" onmouseout="outFunc()" class="btn btn-primary" type="button">
                    <span class="tooltiptext" id="myTooltip">Copy</span>
                </button>
            </div>
        </div>
        </p>
        <hr>
        <p class="mb-0">Anda dapat melakukan survey dengan token tersebut <strong>Dibawah ini</strong></p>
    </div>
@endif
