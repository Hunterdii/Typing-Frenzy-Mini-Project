<!DOCTYPE html>
<html>
  <head>
    <title>Button Example</title>
    <style>
      body {
        background-color: black;
      }
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      .button {
        background-color: transparent;
        border: 2px solid;
        border-radius: 50px;
        color: white;
        font-size: 20px;
        font-weight: bold;
        margin: 10px;
        padding: 20px 40px;
        transition: all 0.3s ease-in-out;
      }
      .button:hover {
        transform: scale(1.1);
      }
      .easy {
        border-color: blue;
      }
      .medium {
        border-color: green;
      }
      .hard {
        border-color: red;
      }
    </style>
  </head>
  <div class="container">
  <a href="game/easy/index.html">
    <button class="button easy">Easy</button>
  </a>
  <a href="game/medium/index.html">
    <button class="button medium">Medium</button>
  </a>
  <a href="game/hard/index.html">
    <button class="button hard">Hard</button>
  </a>
</div>
</html>
