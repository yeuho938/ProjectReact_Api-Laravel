<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" >

  <style>
    #box{
      width: 500px;
      margin-left: 30%;
      margin-top: 10px
    }
    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid purple;
      border-radius: 4px;
    }
    input[type=text]:focus {
      background-color: lightblue;
    }
    button[type=submit] {
      width: 50%;
      background-color: #db7093;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-left: 30%;
    }
  </style>
</head>
<body>
  <div id='box'>
    <center><h2> Sửa các danh sách video</h2></center>
    <form  method="POST" action="{{'/admin/video/'.$videos->id}}" enctype="multipart/form-data">
       @csrf
       @method("PATCH")
      <label for="fname">Name</label>
      <input type="text" id="fname" name="name" value="{{$videos->name}}">
      <label for="lname">Video</label><br>
      <input type="file" id="video" name="video" value="{{$videos->video}}"><br>
      <label for="lname">Content</label>
      <input type="text" id="content" name="content" value="{{$videos->content}}">
       <label for="lname">DateTime</label><br>
      <input type="datetime-local" id="datetime" name="datetime" value="{{$videos->datetime}}"><br>
      <label for="lname">Category</label>
      <select id="category" name="category">
       @foreach($categories as $category)
       <option value="{{$category->id}}"> {{$category->name}}</option>
       @endforeach
     </select>
     <button type="submit">
      Cập nhật
    </button>
  </form>
</div>
@include('partials/danhmuc')

</body>
</html>
