<div class="col-md-10 offset-md-2 meet_the_cast">
    <div class="col-md-10"><h4 class="text-center text-uppercase primary_color">Meet the cast</h4></div>

    {{--@for($i=1; $i<=2; $i++)--}}
    <div class="col-md-10">
        <h5 class="text-center text-uppercase primary_color">Development team</h5>
        <div class="row">
            @for($j=1; $j<=4; $j++)
            <div class="col-lg-3">
              <img class="img-thumbnail" src="http://via.placeholder.com/150x150">
              <h5 class="text-center text-uppercase" style="font-size:0.7em;">Adriel heng</h5>
              <h5 class="text-center text-uppercase" style="font-size:0.5em;">Lead</h5>
            </div>
            @endfor
        </div>
    </div>
    {{--@endfor--}}

</div>
