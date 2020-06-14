 
<!doctype html>
<?php
session_start();
if((!isset($_SESSION['un']))&&(!isset($_SESSION['ps'])))
   {
   header("location:home.php");
    } 
   ?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>NAVIGUS</title>
    <meta charset="utf-8">
  <style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
th,td 
 {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;

  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>

<style type="text/css">
 #footer {
    position: absolute;
    bottom: 0px;
    width: 100%;
 }
    #form{
  background-color: lightblue;
  width: 110px;
  height: 110px;
  overflow: scroll;
}
</style>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body bgcolor="#4dffa6">
  <script src="js/scripts.js"></script>


  <section class="text-gray-700 body-font">
  
</section>
<hr>
<header class="text-gray-500 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
        <path d=""></path>
      </svg>
      <span class="ml-3 text-xl">Navigus</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700 flex flex-wrap items-center text-base justify-center">
      
      
      <a class="mr-5 hover:text-white" href=user.php>Users</a>
      <a class="mr-5 hover:text-white" href="active.php">Active Users</a>
      <a class="mr-5 hover:text-white" href="previous.php">Previously Active Users</a>
      <a class="mr-5 hover:text-white" href="logout.php">Log Out</a>
    </nav>
    
  </div>
</header>
<hr>
<hr>
<br>
<br>
<b>
<h1 align="center">Details of Users</h1>
</b>
<br>
<body background="red">

<form method="post" >
<?php

    $link=mysqli_connect("localhost","root","","navigus");
    
    $qry="select Name,f_name,m_name,password,email,image from register"; 
    //$qry="select * from register";
    
    
    $resultset=mysqli_query($link,$qry);
   
        
     $mytable=<<<Tab
    <table border=3 cellspacing="5" align="center" width="500">
   <tr><th>NAME</th><th>F_NAME</th><th>M_NAME</th><th>EMAIL</th><th>PWD</th><th>IMAGE</th></tr>
Tab;
    while($row=mysqli_fetch_row($resultset))
        {
    
    $mytable.="<tr bgcolor='white'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td><td>$row[3]</td><td><img src=$row[5]  height=50 width=50/></td>";
}
    $mytable.="</table>";
    echo $mytable;

?>

</form>
<footer class="text-gray-500 bg-gray-900 body-font" id="footer">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-orange-500 rounded-full" viewBox="0 0 24 24">
        <path d=""></path>
      </svg>
      <span class="ml-3 text-xl">UD</span>
    </a>
    <p class="text-sm text-gray-600 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 uditrj —
      <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@uditRaj....</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-600">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24"><a href="https://www.facebook.com/udit.raj.1426/">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <a href="https://twitter.com/uditraj02859390"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <a href="https://www.instagram.com/udit9591/">
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <a href="https://www.linkedin.com/in/udit-raj-05347a196/"><path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>


</body>
</html>





























