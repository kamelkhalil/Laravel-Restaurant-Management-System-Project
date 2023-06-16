<!DOCTYPE html>
<html>
<body>

    <x-app-layout>

    </x-app-layout>
    <!DOCTYPE html>
<html>
  <head>
    <title>My Page</title>
    <base href="/public">
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
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data" >
              @csrf
              <div class="form-group">
                  <label for="title">Title</label>
                  <input style="color: blue;margin-bottom: 10px;" type="text" name="title" value="{{$data->title}}" required>
              </div>
              <div class="form-group">
                  <label  for="price">price</label>
                  <input  style="color: blue;margin-bottom: 10px;" type="number" name="price" value="{{$data->price}}" required>
              </div>
              <div class="form-group">
                  <label for="image">old image</label>
                  <img height="120" width="140" src="/foodimage/{{$data->image}}">
              </div>
              <div class="form-group">
                <label for="image">new image</label>
                <input style="color: blue;margin-bottom: 10px;" type="file" name="image" required>
            </div>
              <div class="form-group">
                  <label for="description">description</label>
                  <input  style="color: blue;margin-bottom: 10px;" type="text" name="description" value="{{$data->description}}" required>
              </div>
              <div>

                <input  type="submit" value="Save">
            </div>
          </form>
        </div>
    </div>

  <div class="container-scroller">

  </div>
  @include("admin.adminscript")
</body>
</html>


</body>
</html>
