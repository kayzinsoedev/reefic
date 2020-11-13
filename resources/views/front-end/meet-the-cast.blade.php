<div class="container-fluid meet_the_cast p-5">
    <h4 class="text-center text-uppercase primary_color">Meet the cast</h4>

    {{--@for($i=1; $i<=2; $i++)--}}
    <div class="container">
        <h5 class="text-center text-uppercase primary_color my-3">Development team</h5>
        @for($i=1; $i<=2; $i++)
        <div class="row">
            @for($j=1; $j<=4; $j++)
            <div class="col-lg-3">
              <img class="img-thumbnail" src="http://via.placeholder.com/250x200">
              <h5 class="text-center text-uppercase" style="font-size:0.7em;">Adriel heng</h5>
              <h5 class="text-center text-uppercase" style="font-size:0.5em;">Lead</h5>
            </div>
            @endfor
        </div>
        @endfor
    </div>

    <div class="container">
        <h5 class="text-center text-uppercase primary_color my-3">Advisors</h5>
        @for($i=1; $i<=2; $i++)
        <div class="row">
            @for($j=1; $j<=4; $j++)
            <div class="col-lg-3">
              <img class="img-thumbnail" src="http://via.placeholder.com/250x200">
              <h5 class="text-center text-uppercase" style="font-size:0.7em;">Adriel heng</h5>
              <h5 class="text-center text-uppercase" style="font-size:0.5em;">Lead</h5>
            </div>
            @endfor
        </div>
        @endfor
    </div>

    {{--@endfor--}}

</div>
