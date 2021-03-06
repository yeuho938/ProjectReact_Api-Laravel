<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" >
  <style type="text/css">
    table[border="1"] {
      border-collapse:collapse;
      font:normal normal 11px Verdana,Arial,Sans-Serif;
      color:#333;
    }

    table[border="1"] tr {
      background-color:#fff;
    }

    table[border="1"] th,
    table[border="1"] td {
      vertical-align:top;
      padding:5px 10px;
      border:1px solid #333;
    }

    table[border="1"] th {
      background-color:#333;
      color:#fff;
      font-weight:bold;
    }
    video{
      width: 250px;
      height: 250px
    }
    #table{
      margin-left: 6%;
      height: 960px;
      overflow: scroll;
    }
   .add a{
        text-decoration: none;
        color: black;
        margin-left: 20%;
        background-color: burlywood;
        font-size: 20px;
    }
  </style>
</head>
<body>
    <div class="add" style="margin-bottom: 30px;">
        <a href="/admin/film/create">Thêm bộ phim mới</a>
    </div>
  <div id ='table'>
 <table border="1" style="width: 90%">
  <tr>
    <th>Name</th>
    <th>Video</th>
    <th>Content</th>
    <th>Link</th>
    <th>Category</th>
    <th>Image</th>
    <th>Date_time</th>
    <th>Status</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
  @foreach($films as $film)
  <tr>
    <td>{{$film->name}}</td>
    <td><video src="{{'/storage/'.$film->video}}" controls></video></td>
    <td>{{$film->content}}</td>
    <td><a href="{{$film->link}}">{{$film->link}}</a></td>
    <td>{{$film->category->name}}</td>
    <td><img src="{{'/storage/'.$film->image}}" width="150px" height="150px"></td>
    <td>{{$film->datetime}}</td>
    <td>{{$film->status}}</td>
    <td>
      <form action='{{"/admin/film/".$film->id}}' method ="POST">
        @csrf
        @method("DELETE")
        <button type="submit" name ="delete" style="margin-left: 30px; background: #ffcccc; font-size: 17px;"> Delete </button>
      </form>
    </td>
    <td>
      <form action='{{ "/admin/film/".$film->id."/edit"}}' method ="GET">
        @csrf
        <button type="submit" style="margin-left: 30px; background: #ffcccc; font-size: 17px;"> Edit </button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
</div>
 @include('partials/danhmuc')
</body>
</html>
