<!DOCTYPE html>
<html>
<body>

    <x-app-layout>

    </x-app-layout>
    <!DOCTYPE html>
<html>
  <head>
    <style>
        .no-underline {
                text-decoration: none;}
        .no-underline:hover {
                text-decoration: underline;}
                </style>
    <title>My Page</title>
    @include("admin.admincss")
    <style>
      html, body {
        height: 100%;
        margin: 10;
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
        padding: 20px;
      }

      .text-right {
        text-align: right;
      }
    </style>
  </head>
  <body>
    <div>@include("admin.navbar")</div>
    <div class="container">
        <div class="text-right" style="position: relative; top:-820px; right:-40px;" >


    <table bgcolor="grey" border="5px">

        <tr align="center" style="color: gold">
            <th style="padding: 10px">Name</th>
            <th style="padding: 10px">Email</th>
            <th style="padding: 10px" >Delete</th>
        </tr>
         @foreach($data as $data)
        <tr align="center" >
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            @if($data->usertype=="0")
            <td><a href="{{url('/deleteuser',$data->id)}}" class="no-underline">Delete</a></td>

            @else
            <td ><a class="no-underline">NOT ALOOWED TO DELETE</a></td>
            @endif
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


</body>
</html>
