<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @include('home.homecss')

      <style type="text/css">
         .player_deg {
            padding: 30px;
            text-align: center;
            background-color: black;
         }
         .title_deg {
            padding: 15px;
            font-size: 30px;
            font-weight: bold;
            color: white;
         }
         .des_deg {
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: whitesmoke;
         }
         .img_deg {
            height: 300px;
            width: 250px;
            padding: 30px;
            margin: auto;
         }
         .text {
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

         <h1 class="text">MATCH</h1>
         @foreach($game as $game)

         <div class="player_deg">
            <img class="img_deg" src="/gameimage/{{$game->image}}">
            <h4 class="title_deg">{{$game->title}}</h4>
            <p class="des_deg">{{$game->game}}</p>
            <p class="des_deg">RM {{$game->total}}</p>

            <button class="btn btn-success" onclick="handleButtonClick('{{$game->title}}', '{{ url('cartgame', ['id' => $game->id]) }}')">Buy Now</button>

         </div>
         @endforeach

         @include('home.footer')

         <script>
            function handleButtonClick(gameTitle, redirectUrl) {
               // Check if the user is authenticated
               @if (auth()->check())
                  // User is authenticated, proceed with purchase logic
                  // Redirect to the specified page after successful purchase
                  window.location.href = redirectUrl;
                  // Additional logic for purchase (if needed)
               @else
                  // User is not authenticated, show SweetAlert
                  Swal.fire({
                     icon: 'error',
                     title: 'Authentication Error',
                     text: 'You must be logged in to make a purchase',
                     confirmButtonText: 'OK'
                  });
               @endif
            }
         </script>
   </body>
</html>
