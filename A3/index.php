<!DOCTYPE html>
<html>
<head>
  <title>Assignment3</title>

 <style>
   table.center {
  margin-left: auto; 
  margin-right: auto;
}
   table{
     width: 90%;    
   }

    table, th, td {
       border: 2px solid black;
    }
  th:hover {background-color: pink;}  
   
   
   th{font-size: 2em;
      height: 100px;
   }
   img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
   div{
     margin-left: auto;
     margin-right: auto;
     font-size: 130%;
     text-align: center;
     width: 90%; 
     height: 140px;
   }
   h2{
     text-align: center;
   }
   td.bio{
    background-color:papayawhip;
   }
 </style>

 <script type = "text/javaScript" >
 if(sessionStorage.getItem("login")!= "connected"){
  document.write("You are not login");
   window.location.href = "admin.html";
 }else{
  document.write("You are login");
 }
</script>

</head>

<body>

<table class = "center">
  <tbody>
    <tr>
    <th>
        <a href="adminIndex.html">
        Home
        </a>  
      </th> 
  
      <th>
        <a href="adminResume.html">
        Resume
        </a>
      </th> 
  
      <th>
        <a href="adminProjects.html">
        Projects
        </a>
      </th> 
  
      <th>
        <a href="contact.html"> 
        Contact
        </a>
      </th> 
              
      <th>
        <a href="adminSocial.html"> 
        Social
       </a>
      </th>
  
      <th> 
        <a href="admin.html"> 
        Admin
        </a>
      </th>
      </tr>
  <tr id = "r">
    <td colspan="6" class = "bio">
    <img alt = "Presonal image" src ="image.jpg" width="600" height="450" />
    <?php
          $fName = "Index.txt";
          $retStr = file_get_contents($fName); //Read-in 
          $pieces = explode("About Myself:", $retStr);
          echo "<div>",$pieces[0], "</div>";
          echo "<h2> About Myself </h2>","<hr>", "<div>", $pieces[1], "</div>";?>
         
    </td>
    
  </tr> 
      
  </tbody> 
</table>  
</body>

</html>
<?php

?>