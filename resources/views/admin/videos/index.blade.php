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
      width: 350px;
      height: 350px
    }
    #table{
      margin-left: 6%;
      height: 960px;
      overflow: scroll;
    }
  </style>
</head>
<body>
  <div id='table'>
   <table border="1" style="width: 80%">
    <tr>
      <th>Name</th>
      <th>Video</th> 
      <th>Content</th>
      <th>Category</th>
      <th>Date_time</th> 
      <th>Delete</th> 
      <th>Edit</th>
    </tr>
    @foreach($videos as $video)
    <tr>
      <td>{{$video->name}}</td>
      <td><video src="{{'/storage/'.$video->video}}" controls></video></td>
      <td>{{$video->content}}</td>
      <td>{{$video->category->name}}</td>
      <td>{{$video->datetime}}</td>
      <td>
        <form action='{{"/admin/video/".$video->id}}' method ="POST">
          @csrf 
          @method("DELETE")                                                                                                                                        
          <button type="submit" name ="delete" style="margin-left: 30px; background: #ffcccc; font-size: 17px;"> Delete </button>      
        </form>
      </td>
      <td>
        <form action='{{ "/admin/video/".$video->id."/edit"}}' method ="GET">  
          @csrf           
          <button type="submit" name ="delete" style="margin-left: 30px; background: #ffcccc; font-size: 17px;"> Edit </button>      
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@include('partials/danhmuc')
</body>
</html>