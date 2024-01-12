<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">IIUM Players</h1>
       <p class="services_text">This is our athletes that brings the glory to us.</p>
       <div class="services_section_2">
          <div class="row">

            @foreach ($player as $player)

             <div class="col-md-4" style="padding:30px">
                <div><img style="margin-bottom: 20px; height: 200px" width="350px" src="/playerimage/{{$player->image}}" class="services_img"></div>
                <h4 style="text-align: center;">{{$player->title}}</h4>
                <p>Post by <b>{{$player->name}}</b></p>
                <div class="btn_main"><a href="{{url('player_details',$player->id)}}">READ MORE</a></div>
             </div>

             @endforeach


       </div>
    </div>
 </div>
