<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Accordion Navigation Bar</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="stilo.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".siderbar_menu li").click(function(){
			  $(".siderbar_menu li").removeClass("active");
			  $(this).addClass("active");
			});

			$(".hamburger").click(function(){
			  $(".wrapper").addClass("active");
			});

			$(".close, .bg_shadow").click(function(){
			  $(".wrapper").removeClass("active");
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
  <div class="sidebar">
    <div class="bg_shadow"></div>
    <div class="sidebar_inner">
        <div class="close">
          <i class="fas fa-times"></i>
        </div>
        
        <div class="profile_info">
            <div class="profile_img">
              <img src="Profile_id.png" alt="profile_img">
            </div>
            <div class="profile_data">
                <p class="name">Scarlett Rosey</p>
                <span><i class="fas fa-map-marker-alt"></i> Texas, USA</span>
            </div>
        </div>
      
        <ul class="siderbar_menu">
            <li class="active"><a href="#">
              <div class="icon"><i class="fas fa-heart"></i></div>
              <div class="title">Favourites</div>
              </a> 
          </li>  
          <li><a href="#">
              <div class="icon"><i class="fas fa-user"></i></div>
              <div class="title">Account Details</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
            <ul class="accordion">
                 <li><a href="#" class="active">Account_Details_1</a></li>
                 <li><a href="#">Account_Details_2</a></li>
                 <li><a href="#">Account_Details_3</a></li>
                 <li><a href="#">Account_Details_4</a></li>
                 <li><a href="#">Account_Details_5</a></li>
              </ul>
          </li>  
          <li><a href="#">
              <div class="icon"><i class="fas fa-receipt"></i></div>
              <div class="title">Previous Orders</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
            <ul class="accordion">
                 <li><a href="#">Previous_Orders_1</a></li>
                 <li><a href="#" class="active">Previous_Orders_2</a></li>
                 <li><a href="#">Previous_Orders_3</a></li>
                 <li><a href="#">Previous_Orders_4</a></li>
                 <li><a href="#">Previous_Orders_5</a></li>
              </ul>
          </li>  
          <li><a href="#">
              <div class="icon"><i class="fas fa-credit-card"></i></div>
              <div class="title">Payment Info</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
              <ul class="accordion">
                 <li><a href="#">Payment_Info_1</a></li>
                 <li><a href="#">Payment_Info_2</a></li>
                 <li><a href="#">Payment_Info_3</a></li>
                 <li><a href="#">Payment_Info_4</a></li>
                 <li><a href="#" class="active">Payment_Info_5</a></li>
              </ul>
            
          </li>  
          <li><a href="#">
              <div class="icon"><i class="fas fa-unlock-alt"></i></div>
              <div class="title">Change Password</div>
              </a></li>  
        </ul>
       <div class="logout_btn">
            <a href="#">Logout</a>  
        </div>
      
    </div>
  </div>
  <div class="main_container">
    <div class="navbar">
       <div class="hamburger">
         <i class="fas fa-bars"></i>
       </div>
       <div class="logo">
         <a href="#">Coding Market</a>
      </div>
    </div>
    <div class="content">
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
      <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi ipsum distinctio? Minus similique molestias iusto atque voluptate aut quod excepturi ullam! Deserunt, delectus nam.</div>
    </div>
  </div>
</div>
	
</body>
</html>