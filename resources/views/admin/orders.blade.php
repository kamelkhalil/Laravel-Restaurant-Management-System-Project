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
      html, body {
        height: 100%;
        margin: 0;
      }

      body {
        display: flex;
        flex-direction: column;
      }

      .container-scroller {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .container {
        padding: 20px; /* Replace 20px with the desired value of padding */
        margin-right: 240px;
        margin-top: -860px;
        margin-bottom: 20px;
      }

      .text-right {
        text-align: right;
      }
    </style>
  </head>
  <body>
    <div>@include("admin.navbar")</div>
    <div class="container">
        <div class="text-left" style="position: relative; top:-180; right:-10px;">
          <h1>Customer Order</h1>
          <form action="{{ url('/search') }}" method="get">
            @csrf
            <div style="padding: 15px; margin: 20px;">
            <input type="text" name="search" style="color:blue;">
            <input type="submit" value=" Search" class="btn btn-success">
            </div>
          </form>
          <table>
            <tr align="center"  style="background-color:grey; color:brown">
                <td style="padding: 40px;">Name</td>
                <td style="padding: 40px;">Phone</td>
                <td style="padding: 40px;">Address</td>
                <td style="padding: 40px;">Foodname</td>
                <td style="padding: 40px;">Price</td>
                <td style="padding: 40px;">Quantity</td>
                <td style="padding: 40px;">Total Price</td>
            </tr>
            @foreach ($data as $data)
            <tr align="center" style="background-color:black;">
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->foodname }}</td>
                <td>{{ $data->price }}$</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->price *$data->quantity}}$</td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>

    <div class="container-scroller">

    </div>
    @include("admin.adminscript")
  </body>
</html>



