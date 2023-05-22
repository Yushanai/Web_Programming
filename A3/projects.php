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
   td{height: 200px;}
   
   th{font-size: 2em;
      height: 100px;
   }
   ol{text-align: left;}
   
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
        <td colspan="6" class = "i">
        <h2> Projects</h2>
    <hr>
  <?php
  $fName = "Project.txt";
  $retStr = file_get_contents($fName); //Read-in 
  $pieces = explode("\n", $retStr);
  $k=0;
  $output="";
  for($k=0;$k<count($pieces);$k++){
   $output =$output.'<li>'.$pieces[$k].'</li>';
  }
  echo "<ol>", $output ,"</ol>";
  ?>

   </td> 
</tr>
</tbody> 
</table>  

</body>
</html>