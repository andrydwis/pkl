@if (session('status'))
<div class="alert alert-primary alert-dismissible show fade" data-aos="fade-up" data-aos-delay="1000">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span><i class="fas fa-times-circle"></i></span>
        </button>
        {{session('status')}}
    </div>
</div>
@endif