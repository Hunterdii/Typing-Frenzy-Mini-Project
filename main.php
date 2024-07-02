<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TypingFrenzy</title>
  <link rel="stylesheet" href="mainstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
  .button3d {
      position: absolute;
      display: block;
      width: 500px;
      height: 400px;
      background-image: url(img.png);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      box-shadow: 0px 0px 0px 10px rgba(255, 255, 255, 0.1) inset, 0px 0px 20px rgba(0, 0, 0, 0.5);
      transition: transform 0.3s;
      transform-style: preserve-3d;
      perspective: 1000px;
    }
    .button3d:hover {
      transform: rotateY(-10deg) rotateX(10deg) scale(1.05);
      box-shadow: 0px 0px 0px 10px rgba(255, 255, 255, 0.1) inset, 0px 0px 50px rgba(0, 0, 0, 0.7);
    }
    .button3d > .button-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) translateZ(50px);
      text-align: center;
      font-size: 3em;
      color: white;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    }
    .rules-board {
  position: absolute;
  top: 65%;
  right: 50px;
  transform: translateY(-50%);
  background-color: #fff;
  padding: 20px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
  border: 2px dotted #000;
  max-width: 500px;
}

.rules-board h2 {
  margin-top: 0;
}

.rules-board ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.rules-board li {
  margin-bottom: 10px;
  padding-left: 20px;
  background-image: url('bullet.png');
  background-position: left center;
  background-repeat: no-repeat;
  background-size: 10px 10px;
}  


  </style>
</head>
<body>

  <nav>
    <div class="logo">
      <h1>TypingFrenzy</h1>
    </div>
    <ul class="nav-links">
      <li><a href="abtus.php">About Us</a></li>
      <li><a href="contact.php">Contact us</a></li>
    
    </ul>
   
  </nav>

  <div class="container">
    <div style="position: relative; margin-left: 0px;">
      <a href="dif.php" class="button3d">
        <div class="button-content">
          <!-- Play Game -->
        </div>
      </a>
    </div>
    <div class="rules-board">
  <h2>Guidelines:</h2>
  <ul>
    <br>
    <li>Typing speed matters: The faster you type the given text, the higher your score will be.</li>
    <li>Accuracy is key: Correctly typed words are worth more points than mistakes or missed words.</li>
    <li>Missed words lead to point deductions: Each missed word will deduct points from your score.</li>
    <li>Complete the given text in the shortest possible time: The quicker you complete the text, the higher your score will be.</li>
    <li>Time limit: You must complete the given text within a certain time limit</li>
  </ul>
</div>

    <div class="content">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
  </div>

  <footer>
    <p>&copy; 2023 TypingFrenzy. All rights reserved.</p>
  </footer>

</body>
</html>










