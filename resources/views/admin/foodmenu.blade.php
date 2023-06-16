<!DOCTYPE html>
<html>
<body>

    <x-app-layout>

    </x-app-layout>
    <!DOCTYPE html>
<html>
  <head>
    <title>My Page</title>
    @include("admin.admincss")
    <style>
        .no-underline {
            color: white;
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
        <div class="text-right" style="position: relative; top: 60px; right: -10px;" >
          <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input style="color: blue;margin-bottom: 10px;" type="text" name="title" paceholder="write a title" required>
            </div>
            <div class="form-group">
                <label  for="price">price</label>
                <input  style="color: blue;margin-bottom: 10px;" type="number" name="price" paceholder="price" required>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input style="color: blue;margin-bottom: 10px;" type="file" name="image" required>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input  style="color: blue;margin-bottom: 10px;" type="text" name="description" paceholder="write a description" required>
            </div>
            <div>

                <input type="submit" value="Save">
            </div>
          </form>
          <div>
          <table  bgcolor="blue">
            <tr>
                <th style="padding: 40px">Food Name</th>
                <th style="padding: 40px">price</th>
                <th style="padding: 40px">description</th>
                <th style="padding: 40px">images</th>
                <th style="padding: 40px">delete</th>
                <th style="padding: 40px">update</th>
            </tr>
            @foreach($data as $data)
            <tr align="center" >
                <td>{{$data->title}}</td>
                <td>{{$data->price}}$</td>
                <td>{{$data->description}}</td>
                <td><img height="120" width="140" src="/foodimage/{{$data->image}}"></td>
                <td><a href="{{url('/deletemenu',$data->id)}}"  class="no-underline"  >delete</a></td>
                <td><a href="{{url('/updateview',$data->id)}}"  class="no-underline"  >update</a></td>
            </tr>
            @endforeach
          </table>
        </div>
        </div>
      </div>

    <div class="container-scroller">

    </div>
    @include("admin.adminscript")
  </body>
</html>


</body>
</html>
