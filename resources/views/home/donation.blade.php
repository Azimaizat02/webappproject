<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->

      @include('home.homecss')

      <style type="text/css">
     .table_deg
    {
        border: 1px solid white;
        border-collapse: collapse;
        width: 80%;
        text-align: center;
        margin-left: 100px;
    }
    .th_deg
    {
        background-color: skyblue;
        border: 1px solid black;
    }
    .th_deg1
    {
        background-color: peachpuff;
        border: 1px solid black;
    }
    .text
      {
        color: white;
        text-align: center;
        font-size: 30px;
      }
      .th_deg1 td {
        border: 1px solid black;
    }
    /* .donation_deg
    {
        background-color: black;
    } */
    </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')

      <h1 class="text">DONATIONS</h1>
      <div class="donation_deg">
      <table class="table_deg">
        <tr class="th_deg">
            <th>Donor Name</th>

            <th>Amount(RM)</th>

            <th>Post by</th>
        </tr>

        @foreach ( $donation as $donation)

        <tr class="th_deg1">
            <td>{{$donation->title}}</td>
            <td>RM {{$donation->amount}}</td>
            <td>{{$donation->name}}</td>
        </tr>
    </div>
@endforeach
    </table>
      @include('home.footer')
   </body>
</html>

