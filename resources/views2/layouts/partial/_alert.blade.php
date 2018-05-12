<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
        $(this).remove(); 
    });
}, 3170);
</script>
@if (session('success'))
<div class="row">
<div class="col-12">
    <div class="alert alert-success alert-dismissible" role="alert">
            {{--  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>  --}}
        <b>{{ session('success')}}</b>
    </div>
</div>   
</div>    
@endif

@if (session('info'))
<div class="row">
<div class="col-12">
    <div class="alert alert-info alert-dismissible" role="alert">
           <strong>{{ session('info')}}</strong>
            {{--  <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none !important;box-shadow: none;">
                <span aria-hidden="true" style="position:relative;bottom:7px;">&times;</span>
            </button>  --}}
        </div>
    </div>
</div>
@endif

@if (session('danger'))
<div class="row">
<div class="col-12">
        <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ session('danger')}}</strong>
                 {{--  <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none !important;box-shadow: none;">
                     <span aria-hidden="true" style="position:relative;bottom:7px;">&times;</span>
                 </button>  --}}
             </div>
    </div>
</div>
@endif