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
    <center><h2> Thêm các danh sách ảnh</h2></center>
    <form  method="POST" action="/admin/image/store" enctype="multipart/form-data">
       @csrf
      <label for="fname">Name</label>
      <input type="text" id="fname" name="name">
      <label for="lname">Image</label>
      <input type="file" id="image" name="image">
      <label for="lname">Content</label>
      <input type="text" id="content" name="content">
      <label for="lname">DateTime</label>
      <input type="datetime-local" id="datetime" name="datetime">
      <label for="lname">Category</label>
      <select id="category" name="category">
       @foreach($categories as $category)
       <option value="{{$category->id}}"> {{$category->name}}</option>
       @endforeach
     </select>
     <button type="submit">
      Thêm
    </button>
  </form>
</div>
@include('partials/danhmuc')

</body>
</html>
