<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login V21</title>
    <link rel="stylesheet" href="css/main.css">


    <style>

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: black;
    opacity: 0.92;
    border-radius: 5px;
}

.box{
    width: 400px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}

.box h1{
    color: white;
    font-family: "Times New Roman";
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 500;
}

.box input[type = "text"], .box input[type = "password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}

.box input[type = "text"]:focus, .box input[type = "password"]:focus{
    width: 280px;
    border-color: #2ecc71;
}

.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}

.box input[type = "submit"]:hover{
    background: #2ecc71;
}

.box p{
    color: grey;
    font-family: arial,sans-serif;
    font-size: 13px;
}


.box p:hover{
    text-decoration: underline;
    cursor: pointer;
}

        </style>
</head>
<body>

    <form method="post" action="index.html" class="box">
        <h1>Login</h1>
        <br>
        <hr>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="" value="Login">
        <p>Forget password ?</p>
    </form>

</body>
</html>