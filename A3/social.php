<!DOCTYPE html>
<html>
<head>
<title>Assignment3</title>

 <style>
   table.center {
  margin-left: auto; 
  margin-right: auto;
}
   table{width: 90%;
         height: 100%;
   }

    table, th, td {
          border: 2px solid black;
    }
   
   td{height: 200px;
    text-align: center;  
  }
   
   th{font-size: 2em;
      height: 100px;
   }
   td.i{
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
  <tr>
      <td colspan="6" class="i">
        <img alt="social media icons" src="social.jpg" width="300" height="300" usemap="#socialmedia">
        <map name="socialmedia">
        <?php
          $fName = "Social.txt";
          $retStr = file_get_contents($fName); //Read-in 
          $pieces = explode("\n", $retStr);
          echo '<area shape="rect" coords="0,0,75,75" alt="facebook" href=', $pieces[0],'>';
          echo '<area shape="rect" coords="113,0,225,75" alt="twitter" href=', $pieces[1],'>';
          echo '<area shape="rect" coords="0,113,75,188" alt="instagram" href=', $pieces[2],'>';
          ?>
        </map>
      </td> 
    </tr>
  </tbody> 

</table>  
</body>
</html>