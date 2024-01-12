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
        <h1 class="post_title">Update Donation</h1>
<form action="{{url('update_donation',$donation->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="div_center">
        <label>Donor Name</label>
        <input type="text" name="title" value="{{$donation->title}}">
        </div>

        <div class="div_center">
            <label>Donation Amount (RM):
                <b>Note:Please write the number.</b>
         </label>
            <textarea name="amount">{{$donation->amount}}</textarea>
            </div>

            <div class="div_center">
                <label>Old Receipt</label>
                <img style="margin:auto;" height= "200px;" width= "200px" src="/donationimage/{{$donation->image}}">


            </div>
            <div class="div_center">
                <label>Receipt for Proof</label>
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

