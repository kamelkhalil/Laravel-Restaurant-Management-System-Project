<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include("admin.admincss")
    <style>
        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
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
        margin-right: 320px;
        margin-top: -880px;
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
       <form action="{{ url('/updatefoodchef',$data->id) }}" method="Post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>chef name</label>
            <input style="color: blue;" text" name="name" value="{{ $data->name }}">
        </div>
        <div>
            <label>speciality</label>
            <input style="color: blue;" text" name="name" value="{{ $data->speciality }}">
        </div>
        <div>
            <label>old image</label>
            <img height="200" width="200" src="/chefimage/{{ $data->image }}">
        </div>
        <div>
            <label>new image</label>
            <input type="file" name="image">
        </div>
        <div>
            <input class="button button2" style="color: blue;" type="submit" value="update chef" required="">
        </div>
       </form>
    </div>
    <div class="container-scroller">
    </div>
    @include("admin.adminscript")
  </body>
</html>
