<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <title>VnExpress</title>
        <style>
			*,
			*:before,
			*:after {
				margin: 0;
				padding: 0;
				text-decoration: none;
				list-style: none;
				box-sizing: border-box;
				position: relative;
			}
			body{
				max-width: 1400px;
				padding: 0 auto;
				margin: 0 auto;
                text-align: center;
			}
			.field{
                margin-bottom: 20px;
            }
            * {
  box-sizing: border-box;
}
h1{
  font-size:1em;
  text-align:center;
  color:#eee;
  letter-spacing: 1px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.9);
  padding: 20px;
}
.nav-container {
  width: 300px;
  box-shadow: 1px 3px 3px 3px black;
  transition: all 0.5s linear;
}
.nav {
  list-style-type: none;
  margin:0;
  padding:0;
}
li{
  height: 50px;
  position:relative;
  background:linear-gradient(#292929, #242424);
}
a {
  border-top: 1px solid rgba(255,255,255,0.1);
  border-bottom: 1px solid black;
  text-decoration: none;
  display:block;
  height:100%;
  width:100%;
  line-height:50px;
  color:#bbb;
  text-transform: uppercase;
  font-weight: bold;
  padding-left:25%;
  border-left: 5px solid transparent;
  letter-spacing: 1px;
  transition:all 0.3s linear;
}
.text {
  transition: all .4s linear;
}
li:hover .text{
 margin-left:20px
}
.active a {
  color: #9b59b6;
  border-left:5px solid #9b59b6;
  background-color: #1B1B1B;
  outline:0;
}
li:not(.active):hover a{
  color: #eee;
  border-left:5px solid #FCFCFC;
  background-color: #1B1B1B;
}

span[class ^= "icon"]{
  position:absolute;
  left:20px;
  font-size:1.5em;
  transition: all 0.3s linear;
}

@media only screen and (max-width : 860px){
  .text{
    display:none;
  }
  .nav-container, a {
    width: 70px;
  }
  a:hover{
    width: 200px;
    z-index:1;
    border-top: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid black;
    box-shadow: 0 0 1px 1px black;
  }
  a:hover .text {
    display:block;
    padding-left: 30%;    
  }
  
}
@media only screen and (max-width: 480px){
  .nav-container, a{ width:50px; }
  span[class ^= "icon"]{left:8px;}

}
		</style>
    </head>
    <body>
        <h3>Welcome <?php echo $_SESSION['username']?></h3>
        <span><a href="logout.php">Đăng xuất</a></span>
        <div style="margin-top: 20px;" class="nav-container">
        <ul style="display:inline;" class="nav">
            <li class="">
            <a href="index.php?controller=category">
                <span class="text">Category</span>
            </a>
            </li>
            <li>
            <a href="index.php?controller=user">
                <span class="text">Users</span>
            </a>
            </li>
            <li>
            <a href="index.php?controller=post">
                <span class="text">Post</span>
            </a>
            </li>
        </ul>
        </div>
<script>
    $('li').click(function(){
  $(this).addClass('active').siblings().removeClass('active');
});
</script>
<script src="https://use.fontawesome.com/c9d2b81f44.js">
</script>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>