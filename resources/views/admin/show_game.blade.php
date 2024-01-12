<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@include('admin.css')
<style type="text/css">
    .title_deg
    {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
    }
    .table_deg
    {
        border: 1px solid white;
        width: 80%;
        text-align: center;
        margin-left: 70px;
    }
    .th_deg
    {
        background-color: skyblue;
    }
    .img_deg
    {
        height: 200px;
        width: 150px;
        padding: 10px;
    }
    </style>
  </head>
  <body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        @if (session()->has('message'))
            <div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
            {{session()->get('message')}}</div>
        @endif
        <h1 class="title_deg">All Matches</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th>Match</th>

                <th>Information</th>

                <th>RM</th>

                <th>Post by</th>

                <th>Game Status</th>

                <th>UserType</th>

                <th>Image</th>

                <th>Delete</th>

                <th>Edit</th>
            </tr>

            @foreach ( $game as $game)

            <tr>
                <td>{{$game->title}}</td>
                <td>{{$game->game}}</td>
                <td>{{$game->total}}</td>
                <td>{{$game->name}}</td>
                <td>{{$game->game_status}}</td>
                <td>{{$game->usertype}}</td>
                <td>
                    <img class ="img_deg" src="gameimage/{{$game->image}}">
                </td>
                <td>
                    <a href="{{url('delete_game', $game->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                </td>
                <td>
                    <a href="{{url('edit_game', $game->id)}}" class="btn btn-success">Edit</a>
                </td>
            </tr>
@endforeach
        </table>
      </div>
      @include('admin.footer')

<script type="text/javascript">
function confirmation(ev)
{
    ev.preventDefault();
    var urlToRedirect=ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);

    swal({

        title:"Are You Sure to Delete This",
        text: "You won't be able to revert this delete",
        icon: "warning",
        buttons : true,
        dangerMode : true,
    })

    .then((willCancel)=>
    {
if(willCancel)
{
    window.location.href=urlToRedirect;
}
    });
}
</script>


      @include('admin.footer')
    </div>

  </body>
</html>
