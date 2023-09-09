<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<style>
    h1{
        font-size: 50px;
        color: #000;
        background-color: yellow;
    }
    .a{
        font-size: 15px;
        color: #000;
        background-color: goldenrod;
        padding: 12px 32px;
    border-radius: 5px;
    position: absolute;
    
    width: 267px;
    height: 24px;
    left: 62px;
    top: 300px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    
    line-height: 29px;
    text-align: center;
    text-transform: uppercase;
    text-decoration: black;

   
    }
    input {
    padding: 20px;
    border: 1px solid #fff;
    background: inherit;
    border-radius: 5px;
    font: inherit;
    width: 30%;
    color: #000;
    text-align: center;
    margin-bottom: 5%;
    margin-top: 30px;
    background-color: rgb(228, 222, 165);
    font-size: large;
}
body{
    background-color: rgba(255, 255, 255, 0.83);
}
</style>
<body>
    <header>
        <h1> LOGOWANIE</h1>
    </header>
    <form class="form" action="form.php" method="post">
    <input type='text' placeholder='wprowadź swoje imie'>
    <input type='text' placeholder='wprowadź swoje nazwisko'>
    <input type='email' placeholder='wprowadź swój email'>
    <div class="a">
        <a href="form.php"> Zaloguj</a>
    </div>
    
    
</body>
</html>