<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Visitor Management System</title>

<style>

body{
margin:0;
font-family:Arial;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#3b5ba9,#ef5b6b);
}

.container{
width:1100px;
height:600px;
background:white;
border-radius:20px;
display:flex;
overflow:hidden;
box-shadow:0 10px 40px rgba(0,0,0,.2);
}

.left{
flex:1;
background:#d9ecff;
display:flex;
justify-content:center;
align-items:center;
text-align:center;
color:#2d4f8b;
}


.login-box{
width:320px;
background:#d9ecff;
padding:40px;
border-radius:18px;
box-shadow:0 12px 30px rgba(0,0,0,.15);
}

h2{
margin-bottom:30px;
color:#2d4f8b;
}

input{
width:100%;
padding:14px;
margin-bottom:15px;
border:1px solid #ddd;
border-radius:8px;
}

button{
width:100%;
padding:14px;
background:#f5a623;
border:none;
color:white;
font-size:16px;
border-radius:8px;
cursor:pointer;
}
button:hover{
transform:scale(1.03);
}

.small{
font-size:12px;
margin-bottom:20px;
color:gray;
}
</style>
</head>
<body>

<div class="container">

<div class="left">
   <div>
      <h1>Visitor Management System</h1>
      <p>Visitor Side Design</p>
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
           width="250">
   </div>
</div>

<div class="right">
<div class="login-box">
<h2>Super Admin Login</h2>

<form>
<input type="email" placeholder="Email">
<input type="password" placeholder="Password">
<div class="small">Forgot password?</div>
<button>Login</button>
<br><br>

<p style="text-align:center;">
Belum punya akun?
<a href="/register">Daftar Admin</a>
</p>
</form>

</div>
</div>

</div>

</body>
</html>