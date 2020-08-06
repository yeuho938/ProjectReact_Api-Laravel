<!DOCTYPE html>
<html>
<head>
<style> 
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
input[type=reset] {
  width: 50%;
  background-color: #db7093;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
</head>

<body><form>
  <label for="fname">Tên</label>
  <input type="text" id="fname" name="fname">
  <label for="lname">Họ và tên</label>
  <input type="text" id="lname" name="lname">
  <input type="reset" value="Reset"><br>
</form>

</body>
</html>