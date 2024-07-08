<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>ABout Us</title>
@include('./cssjss')
<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 50px 0;
            background-color: transparent;
            color: #fff;
        }
        .header h1 {
            margin: 0;
            font-size: 3em;
        }
        .header p {
            font-size: 1.2em;
        }
        .content {
            margin-top: 40px;
            text-align: center;
        }
        .content h2 {
            font-size: 2.5em;
            color: #ff8c94;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.1em;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto;
        }
        .team {
            margin-top: 50px;
        }
        .team h2 {
            font-size: 2em;
            color: #ff8c94;
            text-align:center;
        }
        .team .member {
            margin: 20px 0;
        }
        .team .member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .team .member h3 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .team .member p {
            font-size: 1em;
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<div class="pageWrapper">
	@include('./navigation.header')
    
    <!--Body Content-->
    <div id="page-content">
       
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>About Gems & Glow</h1>
            <p>Your ultimate destination for stunning cosmetics and imitation jewelry.</p>
        </div>
        <div class="content">
            <h2>Our Story</h2>
            <p>At Gems & Glow, we believe in celebrating beauty in all its forms. Our journey began with a passion for providing high-quality, affordable cosmetics and exquisite imitation jewelry. Each product is carefully selected to ensure it brings joy and enhances your natural beauty. We are dedicated to offering a diverse range of products that cater to every style and occasion, helping you feel confident and radiant every day.</p>
        </div>
        <div class="team">
            <h2>Meet Our Team</h2>
            <div class="container">
            <div class="row">
            <div class="member col-md-6">
                <img src="https://via.placeholder.com/150" alt="Team Member">
                <h3>Jenny</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="member col-md-6">
                <img src="https://via.placeholder.com/150" alt="Team Member">
                <h3>Maria</h3>
                <p>Creative Director</p>
            </div>
        </div>
    </div>
      </div>
      </div>

        
    </div>
    <!--End Body Content-->
    
    @include('navigation.footer')
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
</div>
</body>
</html>