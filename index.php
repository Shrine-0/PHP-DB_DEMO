<!DOCTYPE html>
<html>
<head>
<?php
    include('demo.php');
?>
</head>
<body>
    <h2 id = "header1">
        PHP to Mysql connection checker
    </h2>
<?php 
    include('orders_table.php');
    include('customer_table.php');
    // include('add_to_db.php');
    include('alter.php');
    include('update.php');
    include('select.php');
?>

<form>
<br><br>Number : <input type = "number" min="0" max="1" id="input">
<button id = "button1" onclick="randomize()"><b>Randomize</b></button>
<input id = "input-reset" type="reset" value="Reset" style = "font-weight:bold">

<br><br><h1 id ="COLOR">COLOR</h1>
<input id = "color_picker" type="text" value="pick a color">
<button onclick="change()"><b>Change</b></button>
<button id="red" onclick="condition('red')">RED</button>
<button id="green" onclick="condition('green')">GREEN</button>
</form>

<script type='text/javascript'>
    console.log("this is my first java script code in a long time ");
    document.write("<h3>this is a javascript code print</h3>");
    let x = document.getElementById("header1").innerHTML;
    document.write(x);
    function randomize(){
       document.getElementById("input").value = Math.random();
    }
    function condition(color_type){
        if(color_type == "red"){
            document.getElementById("COLOR").style.color="red";
            console.log(document.getElementById("red").innerHTML);
        }
        else if(color_type == "green"){
            document.getElementById("COLOR").style.color="green";
            console.log(document.getElementById("green").innerHTMl);
        }
    }
    
    function change(){
        let color = document.getElementById("color_picker");//* this is color referencing the input tag with color_picker as its id same like object referencing in python 
        let col = color.value.toLowerCase();
        // let color  = document.getElementById("color_picker").value.toLowerCase();
        // console.log("color");

        switch(col){
            case "red":
                document.getElementById("COLOR").style.color="red";
                break;
            case "green":
                document.getElementById("COLOR").style.color="green";
                break;
            case "blue":
                document.getElementById("COLOR").style.color="blue";
                break;
            default:
                document.getElementById("COLOR").style.color="black";
        }
    }

</script>

</body>
</html>
