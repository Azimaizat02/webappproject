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
        width: 150px;
        padding: 30px;
        margin: auto;
      }
      .text
      {
        color: white;
        text-align: center;
      }
    </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')

      <h1 class="text">NEWS</h1>
      @foreach($news as $news)

     <div class="player_deg">
        <img class="img_deg" src="/newsimage/{{$news->image}}">
        <h4 class="title_deg">{{$news->title}}</h4>
        <p class="des_deg">{{$news->info}}</p>
      </div>
      @endforeach

      @include('home.footer')
   </body>
</html>
