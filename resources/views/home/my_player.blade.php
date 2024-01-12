<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->

      @include('home.homecss')

      <style type="text/css">
      .player_deg
      {
        padding: 30px;
        text-align: center;
        background-color: black;
      }
      .title_deg
      {
        padding: 15px;
        font-size: 30px;
        font-weight: bold;
        color: white;
      }
      .des_deg
      {
        padding: 15px;
        font-size: 18px;
        font-weight: bold;
        color: whitesmoke;
      }
      .img_deg
      {
        height: 200px;
        width: 300px;
        padding: 30px;
        margin: auto;
      }
      .text
      {
        color: white;
        text-align: center;
        font-size: 30px;
      }
    </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')

      <h1 class="text">IIUM PLAYERS</h1>
      @foreach($player as $player)

     <div class="player_deg">
        <img class="img_deg" src="/playerimage/{{$player->image}}">
        <h4 class="title_deg">{{$player->title}}</h4>
        <p class="des_deg">{{$player->description}}</p>
      </div>
      @endforeach

      @include('home.footer')
   </body>
</html>

