<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <style type="text/css">
        .div_deg
        {
            text-align: center;
        }
        .title_deg
        {
            font-size: 30px;
    font-weight: bold;
    color: white;
        }
        label
{
    display: inline-block;
    width: 200px;
    color: skyblue;
    font-size: 18px;
    font-weight: bold;
    padding: 30px;
}
.field_deg
{
    padding: 25px;
}
        </style>
      @include('home.homecss')
   </head>
   <body>

    @include('sweetalert::alert')
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')

<div class="div_deg">
<h3 class="title_deg">Add Donation</h3>
    <form action="{{url('user_donation')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="field_deg">
            <label>Donor Name:</label>
            <input type="text" name="title">
        </div>

        <div class="field_deg">
            <label>Donation Amount (RM):
                <b>Note:Please write the number.</b>
         </label>
         <textarea name="amount"></textarea>
        </div>

        <div class="field_deg">
            <label>Receipt for Proof</label>
            <input type="file" name="image">
        </div>
        <div class="field_deg">
            <input type="submit" value="Add Donation" class="btn btn-primary">
            </div>
    </form>
</div>
 @include('home.footer')
   </body>
</html>
