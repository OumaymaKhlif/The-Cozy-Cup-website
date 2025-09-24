<?php
$firstname=$_POST['prenom'];
$lastname=$_POST['nom'];
$email=$_POST['mail'];
$phone=$_POST['tel'];
$username=$_POST['user'];
$password=$_POST['mdp'];
$code=$username.rand(100,999);
$cnx=mysqli_connect('localhost','root','');
mysqli_select_db($cnx,'registration');
$req1=mysqli_query($cnx,"select * from clients where username='$username'");
$req2=mysqli_query($cnx,"select * from clients where email='$email'");
if(mysqli_num_rows($req1)>0){
    echo"
    <script> alert('Username Has Already Taken');</script>
    <html>
    <head>
        <title>Login</title>
        <link rel='icon' type='image/x-icon' href='logo.png'>
        <link href='signup.css' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css'>
            <!-- Google Web Fonts -->
        <link rel='preconnect' href='https://fonts.gstatic.com'>
        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap' rel='stylesheet'>

        <!-- Font Awesome -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class='signup'>
            <form name='registration' method='POST' action='signup.php'>
                <h1>Login</h1>
                <div class='input-box'>
                    <input type='text' placeholder='Firstname' required name='prenom'> 
                    <i class='fa fa-user' aria-hidden='true'></i>
                </div>
                <div class='input-box'>
                    <input type='text' placeholder='Lastname' required name='nom'>
                    <i class='fas fa-lock'></i>
                </div>
                <div class='input-box'>
                    <input type='email' placeholder='Email' required name='mail'>
                    <i class='fas fa-envelope'></i>
                </div>
                <div class='input-box'>
                    <input type='text' placeholder='Phone' required name='tel'>
                    <i class='fas fa-phone'></i>
                </div>
                <div class='input-box'>
                    <input type='text' placeholder='Username' required name='user'>
                    <i class='fa fa-user' aria-hidden='true'></i>
                </div>
                <div class='input-box'>
                    <input type='password' placeholder='Password' required name='mdp'>
                    <i class='fas fa-lock'></i>
                </div>
                <div class='remember'>
                    <label><input type='checkbox'>Remember me</label>
                </div>
                <button type='submit' class='btn'>Sign up</button>
                <div class='register'>
                    <br>
                    <a href='home.html'><i class='fas fa-arrow-left'></i></a>
                </div>
            </form>
        </div>
    </body>
</html>";
}
else{
    if(mysqli_num_rows($req2)>0){
        echo"
        <script> alert('Email Has Already Taken');</script>;
<html>
    <head>
        <title>Login</title>
        <link rel='icon' type='image/x-icon' href='logo.png'>
        <link href='signup.css' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css'>
            <!-- Google Web Fonts -->
        <link rel='preconnect' href='https://fonts.gstatic.com'>
        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap' rel='stylesheet'>

        <!-- Font Awesome -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class='signup'>
            <form name='registration' method='POST' action='signup.php'>
                <h1>Login</h1>
                <div class='input-box'>
                    <input type='text' placeholder='Firstname' required name='prenom'> 
                    <i class='fa fa-user' aria-hidden='true'></i>
                </div>
                <div class='input-box'>
                    <input type='text' placeholder='Lastname' required name='nom'>
                    <i class='fas fa-lock'></i>
                </div>
                <div class='input-box'>
                    <input type='email' placeholder='Email' required name='mail'>
                    <i class='fas fa-envelope'></i>
                </div>
                <div class='input-box'>
                    <input type='text' placeholder='Phone' required name='tel'>
                    <i class='fas fa-phone'></i>
                </div>
                <div class='input-box'>
                    <input type='text' placeholder='Username' required name='user'>
                    <i class='fa fa-user' aria-hidden='true'></i>
                </div>
                <div class='input-box'>
                    <input type='password' placeholder='Password' required name='mdp'>
                    <i class='fas fa-lock'></i>
                </div>
                <div class='remember'>
                    <label><input type='checkbox'>Remember me</label>
                </div>
                <button type='submit' class='btn'>Sign up</button>
                <div class='register'>
                    <br>
                    <a href='home.html'><i class='fas fa-arrow-left'></i></a>
                </div>
            </form>
        </div>
    </body>
</html>";


    }
    else{
        $query="insert into clients values('$firstname','$lastname','$email','$phone','$username','$password','$code')";
        mysqli_query($cnx,$query);
        echo"
    <html>
        <head>
            <title>Login</title>
            <link rel='icon' type='image/x-icon' href='logo.png'>
            <link href='signup.css' rel='stylesheet' type='text/css'>
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css'>
            <!-- Google Web Fonts -->
        <link rel='preconnect' href='https://fonts.gstatic.com'>
        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap' rel='stylesheet'>

        <!-- Font Awesome -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>
        </head>
        <body>
            <div class='signup'>
            <center>
            <h2><i class='fas fa-check-circle success-icon'></i> &nbsp Registration Successful</h2><br>
            <p>Congratulations &nbsp<span style='color:rgb(57, 107, 76);'><b>".$firstname."&nbsp".$lastname."</b></span> ! <br>
            Your account has been created successfully</p>
            <br>
            <p> <span style='color:black;'><b>your discount code :</b> &nbsp</span><span style='color:white; border: 3px solid rgb(57, 107, 76); padding: 0px 25px; border-radius: 100px; background-color:rgb(57, 107, 76);align-items:center;'><b>".$code."</b></span><p>
            <div class='register'>
                    <br>
                    <a href='homelogin.html'><i class='fas fa-arrow-left'> Home </i></a>
                </div>
            </div>
        </body>
    </html>";}}
?>
