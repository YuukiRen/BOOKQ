@if($ratings==0)
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
@elseif($ratings<=2)
<span class="fas fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
@elseif($ratings<=3)
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
@elseif($ratings<=4)
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="far fa-star" style=""></span>
<span class="far fa-star" style=""></span>
@elseif($ratings<5)
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="far fa-star" style=""></span>
@elseif($ratings==5)
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
<span class="fas fa-star" style=""></span>
@endif
<span class="thick">
        &nbsp;@if($ratings){{$ratings}} / 5 @else() ( Unrated )
            @endif
    </span>

