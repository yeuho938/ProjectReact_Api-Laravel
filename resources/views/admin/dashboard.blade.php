<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/admin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" >
</head>
<body>
<div class="area">
<div id ='table'>
    <div class="package">
      <div class='name'>
        <a href="/admin/film">Film>></a>
      </div>
      <div class='price'>
      <h3>{{count($films)}}</h3>
      </div>
      <div class='trial'>
       Bộ phim
      </div>
      <hr>
      <ul>
        <li>
          <strong>{{count($filmComment)}}</strong>
          lượt comment
        </li>
        <li>
          <strong>6</strong>
          lượt comment
        </li>
        <li>
          <strong>Unlimited</strong>
          public playlists
        </li>
      </ul>
    </div>
    <div class="package">
      <div class='name'>
      <a href="/admin/image"> Image >></a>
      </div>
      <div class='price'>
      <h3>{{count($images)}}</h3>
      </div>
      <div class='trial'>
        Hình ảnh
      </div>
      <hr>
      <ul>
        <li>
          <strong>{{count($imageComment)}}</strong>
          lượt comment
        </li>
        <li>
          <strong>6</strong>
          lượt like
        </li>
        <li>
          <strong>Unlimited</strong>
          public playlists
        </li>
      </ul>
    </div>
    <div class="package">
      <div class='name'>
      <a href="/admin/new">New >></a>
      </div>
      <div class='price'>
      <h3>{{count($news)}}</h3>
      </div>
      <div class='trial'>
          Tin tức
      </div>
      <hr>
      <ul>
        <li>
          <strong>{{count($newComment)}}</strong>
          lượt comment
        </li>
        <li>
          <strong>6</strong>
          lượt like
        </li>
        <li>
          <strong>Unlimited</strong>
          public playlists
        </li>
      </ul>
    </div>
    <div class="package brilliant">
      <div class='name'> <a href="/admin/video">Video >></a></div>
      <div class='price'><h3>{{count($videos)}}</h3></div>
      <div class='trial'>Video các loại</div>
      <hr>
      <ul>
        <li>
          <strong>{{count($videoComment)}}</strong>
          lượt comment
        </li>
        <li>
          <strong>444</strong>
          lượt like
        <li>
          Team analytics
        </li>
      </ul>
    </div>
    <div class="package">
      <div class='name'> <a href="/user">User >></a></div>
      <div class='price'><h3>{{count($users)}}</h3></div>
      <div class='trial'>Users</div>
      <hr>
      <ul>
        <li>
          <strong>5</strong>
          user
        </li>
        <li>
          <strong>3</strong>
          team playlists
        </li>
        <li>
          <strong>Unlimited</strong>
          public playlists
        </li>
      </ul>
    </div>
  </div>
  </div>
 @include('partials/danhmuc')
</body>
</html>
