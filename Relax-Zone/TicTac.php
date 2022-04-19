<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="style.css" />
    <script src="tic.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
    <?php include('../includes/header1.php');?>
    <div style="height: 641px; background-image: url('tic2.jpg');  background-size: cover;
background-repeat: no-repeat; 
  ">
    <br>
    <br>
    <center>
      
      <div style="border:2px solid black; border-radius:20px; margin-left:550px; margin-right:550px;box-shadow: 0px 5px 16px 6px rgba(0, 0, 0, 1); background-color:#e3dedee0;">
      <center> <h1 style=" font-family:cursive;
                color:black;"><b>TIC TAC TOE<b></h1><center>
                  <br>
      <div class="boxContainer" style="margin-left:0px;">
      <span class="box" id="1" style="border-bottom: 3px solid black; border-right: 3px solid black;"></span>
      <span class="box" id="2" style="border-bottom: 3px solid black; border-right: 3px solid black; border-left: 3px solid black;"></span>
      <span class="box" id="3" style="border-bottom: 3px solid black; border-left: 3px solid black;"></span>
    </div>
    <div class="boxContainer" style="margin-left:0px;">
      <span class="box" id="4" style="border-bottom: 3px solid black; border-right: 3px solid black; border-top: 3px solid black;"></span>
      <span class="box" id="5" style="border: 3px solid black;"></span>
      <span class="box" id="6" style="border-bottom: 3px solid black; border-left: 3px solid black; border-top: 3px solid black;"></span>
    </div>
    <div class="boxContainer" style="margin-left:0px;">
      <span class="box" id="7" style="border-top: 3px solid black; border-right: 3px solid black;"></span>
      <span class="box" id="8" style="border-top: 3px solid black; border-right: 3px solid black; border-left: 3px solid black;"></span>
      <span class="box" id="9" style="border-top: 3px solid black; border-left: 3px solid black;"></span>
    </div>

<br>

    <div id="endGame">
      <div id="endGameContent">
        <div id="endGameText"></div>
       <div class="newGame" id="endBoxNewGame">
      New Game
    </div>
    </div>
      </div>
    <div id="baseDiv">
      <span class="scores">
      Losses:<span class="scoreNumbers" id="losses">0</span>
    </span>
    <span class="newGame" id="bottomNewGame">
      New Game
    </span>
    <span class="scores">
      Ties:<span class="scoreNumbers" id="ties">0</span>
    </span>
    
    </div>
    <br>
    </div>
    </center>
</div>
  </body>
 
  <?php include('../includes/footer.php');?>
</html>