<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wallpaper</title>
    <link rel="stylesheet" href="./result.css">
</head>

<body>

<div class="row">
  <div class="left">
    <h2>COURSE REGISTERED</h2>
    <form  method="post" action="viewemployee.php">
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category" name="ele">
    </form>
    <ul id="myMenu">
      <li><a href="#">Web Development</a></li>
      <li><a href="#">Python</a></li>
      <li><a href="#">Java</a></li>
      <li><a href="#">C</a></li>
      <li><a href="#">Ethical Hacking</a></li>
      <li><a href="#">Android development</a></li>
      <li><a href="#">Cloud computing</a></li>
      <li><a href="#">DSA</a></li>
      <li><a href="#">Machine Learning</a></li>
      <li><a href="#">Business Analytics</a></li>
      <li><a href="#">Advanced Excel</a></li>
      <li><a href="#">Ui/UX</a></li>
      <li><a href="#">Graphics Design</a></li>
      <li><a href="#">Digital Marketing</a></li>
      <li><a href="#">AR/VR</a></li>
    </ul>
  </div>
  
  <div class="right">
   <h1> Registered Successfully <h1>

  </div>
</div>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>
