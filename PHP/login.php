<?php
$username=$_POST['user'];
$password=$_POST['mdp'];
$cnx=mysqli_connect('localhost','root','');
mysqli_select_db($cnx,'registration');
$req1=mysqli_query($cnx,"select * from clients where username='$username'");
$req2=mysqli_query($cnx,"select * from clients where password='$password'");
$query1=mysqli_query($cnx,"select * from clients where username='$username'");
while($ligne1=mysqli_fetch_row($query1)){
    $firstname=$ligne1[0];
}
$query2=mysqli_query($cnx,"select * from clients where username='$username'");
while($ligne2=mysqli_fetch_row($query2)){
    $lastname=$ligne2[1];
}
$query3=mysqli_query($cnx,"select * from clients where username='$username'");
while($ligne3=mysqli_fetch_row($query3)){
    $code=$ligne3[6];
}
if(mysqli_num_rows($req1)<1){
    echo"
    <script> alert('Username does not exist. Try again or sign up');</script>
    <html>
        <head>
            <title>Login</title>
            <link href='login.css' rel='stylesheet' type='text/css'>
            <link rel='icon' type='image/x-icon' href='logo.png'>
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css'>
                <!-- Google Web Fonts -->
            <link rel='preconnect' href='https://fonts.gstatic.com'>
            <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap' rel='stylesheet'>

            <!-- Font Awesome -->
            <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>
        </head>
        <body>
            <div class='login'>
                <form method='POST' action='login.php'>
                    <h1>Login</h1>
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
                        <a href='#'>Forget Password ?</a>
                    </div>
                    <button type='submit' class='btn'>Log in</button>
                    <div class='register'>
                        <p>Don't you have an account ? <a href='signup.html'>&nbsp Sign up</a></p><br>
                        <a href='home.html'><i class='fas fa-arrow-left'></i></a>
                    </div>
                </form>
            </div>
        </body>
    </html>";
}
else{
    if(mysqli_num_rows($req2)<1){
        echo"
        <html>
        <head>
            <title>Login</title>
            <link href='login.css' rel='stylesheet' type='text/css'>
            <link rel='icon' type='image/x-icon' href='logo.png'>
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css'>
                <!-- Google Web Fonts -->
            <link rel='preconnect' href='https://fonts.gstatic.com'>
            <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap' rel='stylesheet'>

            <!-- Font Awesome -->
            <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>
        </head>
        <body>
            <div class='login'>
                <form method='POST' action='login.php'>
                    <h1>Login</h1>
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
                        <a href='#'>Forget Password ?</a>
                    </div>
                    <button type='submit' class='btn'>Log in</button>
                    <div class='register'>
                        <p>Don't you have an account ? <a href='signup.html'>&nbsp Sign up</a></p><br>
                        <a href='home.html'><i class='fas fa-arrow-left'></i></a>
                    </div>
                </form>
            </div>
        </body>
    </html>
        <script> alert('password does not exist. Try again or sign up');</script>";

    }
    else{
        echo" <html>
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
            <h2><i class='fas fa-check-circle success-icon'></i> &nbsp Log In Successful</h2><br>
            <p>Welcome &nbsp<span style='color:rgb(57, 107, 76);'><b>".$firstname."&nbsp".$lastname."</b></span> ! <br>
            your account is already created</p>
            <br>
            <p> <span style='color:black;'><b>Reminder <i class='fas fa-bell'></i><br><br> your discount code :</b> &nbsp<b></span><span style='color:white; border: 3px solid rgb(57, 107, 76); padding: 0px 25px; border-radius: 100px; background-color:rgb(57, 107, 76);align-items:center;'>".$code."</b></span><p>
            <div class='register'>
                    <br>
                    <a href='homelogin.html'><i class='fas fa-arrow-left'> Home </i></a>
                </div>
            </div>
        </body>
    </html>";}
}
?>