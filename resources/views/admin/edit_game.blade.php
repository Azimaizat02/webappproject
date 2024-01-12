<!DOCTYPE html>
<html>
  <head>

    <base href="/public">
@include('admin.css')
<style type="text/css">
    .post_title
    {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
    }
    .div_center
    {
        text-align: center;
        padding: 30px;
    }
    label
    {
        display: inline-block;
        width: 200px;
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
        <div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
        {{session()->get('message')}}</div>
    @endif
        <h1 class="post_title">Update Match</h1>
<form action="{{url('update_game',$game->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="div_center">
        <label>Match:</label>
        <input type="text" name="title" value="{{$game->title}}">
        </div>

        <div class="div_center">
            <label>Information:
         </label>
            <textarea name="game">{{$game->game}}</textarea>
            </div>

            <div class="div_center">
                <label>RM:
             </label>
             <input type="integer" name="total" value="{{$game->total}}">
                </div>

            <div class="div_center">
                <label>Old Image</label>
                <img style="margin:auto;" height= "200px;" width= "200px" src="/gameimage/{{$game->image}}">


            </div>
            <div class="div_center">
                <label>Add Image of the Match</label>
                <input type="file" name="image">
                </div>
                <div class="div_center">
                    <input type="submit" value="Update" class="btn btn-primary">
                    </div>

</form>
      </div>


      @include('admin.footer')


  </body>
</html>

