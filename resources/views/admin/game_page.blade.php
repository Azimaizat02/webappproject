<!DOCTYPE html>
<html>
  <head>
@include('admin.css')

<style type="text/css">
.merch_title
{
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    padding: 30px;
    color: white;
}
.div_center3
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

        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>

        @endif

<h1 class="merch_title">Add Match</h1>

      <div>
        <form action="{{url('add_game')}}" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="div_center3">
            <label>Match:</label>
            <input type="text" name="title">
            </div>

            <div class="div_center3">
                <label>Information:
                </label>
                <textarea name="game"></textarea>
                </div>
                <div class="div_center3">
                    <label>RM:
                    </label>
                    <input type="integer" name="total">
                    </div>
                <div class="div_center3">
                    <label>Match Image:</label>
                    <input type="file" name="image">
                    </div>
                    <div class="div_center3">
                        <input type="submit" class="btn btn-primary">
                        </div>
        </form>
    </div>
</div>

      @include('admin.footer')

  </body>
</html>
