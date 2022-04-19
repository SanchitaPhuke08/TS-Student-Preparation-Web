var winningCombos = [
  ["1", "2", "3"],
  ["4", "5", "6"],
  ["7", "8", "9"],
  ["1", "5", "9"],
  ["3", "5", "7"],
  ["1", "4", "7"],
  ["2", "5", "8"],
  ["3", "6", "9"]
];
var xArray = [];
var oArray = [];
var ties =0;
var losses=0;

$(".box").click(function() {
  if (this.innerHTML == "") {
    this.innerHTML = "X";
    xArray.push(this.id);
    if (
      !Number.isInteger(
        checkWin(xArray, oArray.length + xArray.length, "X", true)
      )
    ) {
      goO();
    }
  }
});

function goO()
{
      var val = findBestMove(); //minimax(xArray, oArray, xArray.length+oArray.length, true);
      document.getElementById(val).innerHTML = "O";
      oArray.push(val.toString());
      checkWin(oArray, oArray.length + xArray.length, "O", true);
}

function checkWin(array, tied, letter, real) {
  for (var i = 0; i < winningCombos.length; i++) {
    var win = false;
    for (var j = 0; j < winningCombos[i].length; j++) {
      if (array.includes(winningCombos[i][j])) {
        win = true;
      } else {
        win = false;
        break;
      }
      if (win == false) {
        continue;
      }
    }
    var result;
    if (win == true) {
      var result = 0;
      if (letter == "O") {
        result = 10;
      }
      if (letter == "X") {
        result = -10;
      }
      if (real == true) {
        $("#endGameText").html(letter + " won!");
        $("#endGame").show();
        losses++;
        $("#losses").html(losses);
      }
      return result;
    }
  }
  if (tie(tied)) {
    if (real == true) {
      $("#endGameText").html("Tie");
      $("#endGame").show();
      ties++;
      $("#ties").html(ties);
    }
    return 0;
  }
  return "merry";
}

$(".newGame").click(function() {
  $(".box").html("");
  xArray = [];
  oArray = [];
  $("#endGame").hide();
});

function minimax(boardx, boardo, depth, isMaximizingPlayer) {
  //var boardx = xboard;
  //var boardo = oboard;
  var oWin = checkWin(boardo, boardo.length + boardx.length, "O");
  var xWin = checkWin(boardx, boardo.length + boardx.length, "X");
  if (isFinite(oWin) && oWin > 0) {
    return oWin;
  }
  if (isFinite(xWin) && xWin < 0) {
    return xWin;
  }
  if (tie(boardo.length + boardx.length)) {
    return 0;
  }
  if (isMaximizingPlayer) {
    var bestVal = -100000;
    for (var i = 1; i < 10; i++) {
      if (boardx.includes(i.toString()) == false) {
        if (boardo.includes(i.toString()) == false) {
          boardo.push(i.toString());
          bestVal = Math.max(
            bestVal,
            minimax(boardx, boardo, depth + 1, !isMaximizingPlayer)
          );
          boardo.pop();
        }
      }
    }
    return bestVal-depth;
  } else {
    var bestVal = 100000;
    for (var i = 1; i < 10; i++) {
      if (boardx.includes(i.toString()) == false) {
        if (boardo.includes(i.toString()) == false) {
          boardx.push(i.toString());
          bestVal = Math.min(
            bestVal,
            minimax(boardx, boardo, depth + 1, !isMaximizingPlayer)
          );
          boardx.pop();
        }
      }
    }
    return bestVal +depth;
  }
}

function tie(value) {
  if (value >= 9) {
    //console.log("tie");
    return true;
  } else {
    return false;
  }
}

function findBestMove() {
  var bestMove = null;
  var bestVal = -1000000;
  for (var i = 1; i < 10; i++) {
    if (
      xArray.includes(i.toString()) == false &&
      oArray.includes(i.toString()) == false
    ) {
      oArray.push(i.toString());
      var moveVal = minimax(xArray, oArray, 0, false);
      //console.log("Move" + i.toString() + " " + moveVal.toString());
      oArray.pop();
      if (moveVal >= bestVal) {
        bestVal = moveVal;
        bestMove = i;
      }
    }
  }
  //console.log(bestMove);
  return bestMove;
}