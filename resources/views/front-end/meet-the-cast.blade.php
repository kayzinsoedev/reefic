<div class="container-fluid meet_the_cast p-5">
    <h4 class="text-center text-uppercase primary_color">Meet the cast</h4>

    {{--@for($i=1; $i<=2; $i++)--}}
    <div class="container">
        <h5 class="text-center text-uppercase primary_color my-3">Development team</h5>
        @for($i=1; $i<=2; $i++)
        <div class="row">
            @for($j=1; $j<=4; $j++)
            <div class="col-lg-3 flip-container" ontouchstart="this.classList.toggle('hover');">
              <img class="img-thumbnail" src="http://via.placeholder.com/250x200">
              <h5 class="text-center text-uppercase" style="font-size:0.7em;">Adriel heng</h5>
              <h5 class="text-center text-uppercase" style="font-size:0.5em;">Lead</h5>
            </div>

            <!-- <div class="flip-container" ontouchstart="this.classList.toggle('hover');"> -->
            <!-- <div class="flip-container col-lg-3" ontouchstart="this.classList.toggle('hover');">
              	<div class="flipper">
              		<div class="front">
              			<img class="img-thumbnail" src="http://via.placeholder.com/180x150">
                    <h5 class="text-center text-uppercase" style="font-size:0.7em;">Adriel heng</h5>
                    <h5 class="text-center text-uppercase" style="font-size:0.5em;">Lead</h5>
              		</div>
              		<div class="back">
              			<p>Name</p>
                    <p>Title</p>
                    <p>Far far away,behind the world mountains</p>
              		</div>
              	</div>
              </div> -->
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
