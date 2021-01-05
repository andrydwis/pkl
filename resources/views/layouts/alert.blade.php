@if (session('status'))
<div class="alert alert-primary alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span><i class="fas fa-times-circle"></i></span>
        </button>
        {{session('status')}}
    </div>
</div>
@endif