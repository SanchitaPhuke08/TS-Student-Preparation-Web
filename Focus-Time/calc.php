<?php include('../includes/header1.php');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
    </head>
        <script>
            function display(val){
            document.getElementById("textval").value +=val
        }
            function evaluate(){
            let x = document.getElementById("textval").value
            let y = eval(x);
            document.getElementById("textval").value = y
        }
            function clear(){
            document.getElementById("textval").value=""
        }
        </script>
        <style>
            body, html {
                /* background: whitesmoke; */
                margin: 0;
                padding: 0;
            }
 
            .container {
                position: fixed;
                top: 60%;
                left: 50%;
                transform: translate(-50%, -50%);
                /* background: white; */
                box-shadow: 0 10px 15px 0 rgba(0,0,0,1), 0 10px 20px 0 rgba(0,0,0,1);
                border-radius: 14px;
                padding-bottom: 20px;
                width: 320px;
                background: whitesmoke;
                opacity: 1 !important;
                
                
            }
            .display {
                width: 100%;
                height: 60px;
                padding: 40px 0;
                /* background: grey; */
                border-top-left-radius: 14px;
                border-top-right-radius: 14px;
                background: whitesmoke;
            }
            .buttons {
                padding: 20px 20px 0 20px;
                margin:0px;
            }
            .row {
                width: 280px;
                float: left;
            }
            input[type=button] {
                width: 60px;
                height: 60px;
                float: left;
                padding: 0;
                margin: 5px;
                box-sizing: border-box;
                background: white;
                border: none;
                font-size: 30px;
                font-weight: 700;
                border-radius: 50%;
                color: black;
                cursor: pointer;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2);
            
            }
            input[type=text] {
                width: 270px;
                height: 60px;
                float: left;
                padding: 0;
                box-sizing: border-box;
                border: none;
                background: none;
                color: black;
                text-align: right;
                font-weight: 700;
                font-size: 60px;
                line-height: 60px;
                margin: 0 25px;
            }
            .red {
                background: white !important;
                color: red !important; 
                margin:0px;
            }
            h1{
                font-family:cursive;
                color:black;
            }
        </style>
        <body>
          
            <div style="height: 641px; background-image: url('calc1.jpg');  background-size: cover;
background-repeat: no-repeat;  opacity:1;
  ">
  <br>
           <center> <h1><b>CALCULATOR<b></h1><center>
               <br>
               
            <div class="container" >
                <form name="form">
                    
                    <div class="display">
                        <input type="text" id="textval" name="displayResult">
                    </div>
                    <div class="buttons">
                        <input class="red" type="button" value="C" onclick="form.displayResult.value = ' '"/>
                    <div class="row">
                        <input type="button" value="7" onClick="display('7')">
                        <input type="button" value="8" onClick="display('8')">
                        <input type="button" value="9" onClick="display('9')">
                        <input type="button" value="+" onClick="display('+')">
                    </div>
                
                    <div class="row">
                    <input type="button" value="4" onClick="display('4')">
                    <input type="button" value="5" onClick="display('5')">
                    <input type="button" value="6" onClick="display('6')">
                    <input type="button" value="-" onClick="display('-')">
                    </div>
                
                    <div class="row">
                    <input type="button" value="1" onClick="display('1')">
                    <input type="button" value="2" onClick="display('2')">
                    <input type="button" value="3" onClick="display('3')">
                    <input type="button" value="*" onClick="display('*')">
                    </div>
                
                    <div class="row">
                    <input type="button" value="0" onClick="display('0')">
                    <input type="button" value="." onClick="display('.')">
                    <input type="button" value="/" onClick="display('/')">
                    <input type="button" class="red" value="=" onclick="form.displayResult.value = eval(form.displayResult.value)">
                    </div>
                </form>
            </div>
        </div>
        </body>
        
</html>
