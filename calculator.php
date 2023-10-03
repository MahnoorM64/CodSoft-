<!-- php code for operations -->
<?php
//conditional statement
if(isset($_POST['submit'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $drop=$_POST['drop'];

    switch($drop){
        case"add":
            $num3=$num1+$num2;
            break;
        case"sub":
            $num3=$num1-$num2;
            break;
        case"mul":
            $num3=$num1*$num2;
            break;
        case"div":
            $num3=$num1/$num2;
            break;
        default:
        $num3="please select operator";
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link href="<link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200&display=swap" rel="stylesheet">

    <style>
       *{
        margin:0%;
        padding:0%;
        font-family: 'Poppins', sans-serif;
       }
       .cal{
        width:600px;
        height:600px;
        background: linear-gradient(#472AA2,#6DB1E3);
        border-radius: 30% 40% 40% 30% / 30% 30% 40% 40%;
        position: absolute;
        left:50%;
        top:50%;
        transform:translate(-50%,-50%);
        text-align: center;
        box-shadow: 20px 60px 0px 0px rgb(128 128 128 / 26%);


       }
       
       form{
        position: absolute;
        left: 50%;
        top: 45%;
        transform: translate(-50%,-50%);
       } 
       input{
        width: 300px;
        height: 40px;
        margin-top: 20px;
        border-radius: 40px;
        padding: 0px 30px;
        font-size: 18px;
        color: black;
        border: 2px solid rgba(0, 0, 0, 0.656);
        outline: none;
        transition: 0.3s;
       }
       input:hover{
        width: 260px;
        transition: 0.3s;
       }
       input[type="submit"]{
        background-color: #2b124c;
        width: 200px; 
        height: 40px;
        color: white;
        font-size: 20px;
        border: none;
       }
       input[type="submit"]:active{
        transform: scale(0.9);
       }
       select{
        width: 280px;
        height: 40px;
        margin-top: 20px;
      border-radius: 40px;
        padding: 0px 30px;
        font-size: 18px;
        color: black;
        border: none;
       }
    </style>
</head>
<body>
    <div class="cal">
        <h3 style= "text-align:center;margin-top:50px;color:white;">CALCULATOR</h3>
        <!-- form part -->
        <form action= "index.php" method="POST">
            <input type="text" name="num1" placeholder="Enter first number">
            <input type="text" name="num2" placeholder="Enter second number">
            <select name="drop">
                <option>Please select </option>
                <option value="add">ADD</option>
                <option value="sub">SUB</option>
                <option value="mul">MUL</option>
                <option value="div">DIV</option>
            </select><br>
            <input type="submit" name="submit">
            <h5 style="margin-top:30px;font-size:18px;">YOUR ANSWER:<br>
        <!--output -->
        <span style="color:white;font-size:23px"><?php echo @$num3;?>
    
    </span>
        
        </h5>
        </form>
    </div>
</body>
</html>