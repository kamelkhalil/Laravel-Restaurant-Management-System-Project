<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
    <style>
        .no-underline {
            color: blue;
            text-decoration: none;}
        .no-underline:hover {
            color: black;
                text-decoration: underline;}
      html, body {
        height: 100%;
        margin: 0;
      }

      body {
        display: flex;
        flex-direction: column;
      }

      .container-scroller {

        margin-top: 40px;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        padding: 20px; /* Replace 20px with the desired value of padding */
        margin-right: 240px;
        margin-top: -960px;
        margin-bottom: 20px;
      }

      .text-right {
        text-align: left;
      }
      .form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 10px;
}

.form-group label {
  margin-bottom: 5px;

}

.form-group input {

  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}
    </style>
  </head>
  <body>
    <div>
        @include("admin.navbar")
    </div>
    <div class="container">
    <div class="text-right" style="position: relative; top: 120px; right:-5px">
    <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>name</label>
            <input style="color:blue;" type="text" name="name" required="" placeholder="enter name">
        </div>
        <div class="form-group">
            <label>speciality</label>
            <input style="color:blue;" type="text" name="speciality" required="" placeholder="enter speciality">
        </div>
        <div class="form-group">
             <input type="file" name="image" required="" >
        </div>
        <div >
            <input type="submit" name="save" >
       </div>
    </form>
    <table bgcolor="grey">
      <tr style="color: black;">
        <th style="padding:30px; ">chef name</th>
        <th style="padding:30px; ">speciality</th>
        <th style="padding:30px; ">image</th>
        <th style="padding:30px; ">update</th>
        <th style="padding:30px; ">delete</th>
      </tr>
      @foreach($data as $data)
      <tr align="center">
        <td >{{$data->name}}</td>
        <td >{{$data->speciality}}</td>
        <td ><img height="120" width="140" src="/chefimage/{{$data->image}}"></td>
        <td ><a href="{{url('/updatechef',$data->id)}}" class="no-underline" >update</a></td>
        <td ><a href="{{url('/deletechef',$data->id)}}" class="no-underline" >delete</a></td>
      </tr>
      @endforeach
    </table>
    </div>
    <div class="container-scroller">
    </div>
    @include("admin.adminscript")
  </body>
</html>
