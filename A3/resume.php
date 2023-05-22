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
   td{height: 500px;}
   
   th{font-size: 2em;
      height: 100px;
   }
   img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
   div{
     background-color: lightpink;    
     text-align: center;
     border: 2px solid lightblue;
     height: 300px;
     width: 100%;
   }
   tbody{
    text-align: left;
  }
  dl,ol,ul {
    text-align: left;
  }
  td.i{
    background-color:papayawhip;
   }
   dt{
    font-weight: bold;
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
        <?php
        function spilt_between_two_words($str, $starting_word, $ending_word){
          $arr = explode($starting_word, $str);
          if (isset($arr[1])){
              $arr = explode($ending_word, $arr[1]);
              return $arr[0];
          }
          return '';
        }
          $fName = "Resume.txt";
          $retStr = file_get_contents($fName); //Read-in 

          //spilt the Educational Qualifications out
          $string = spilt_between_two_words($retStr, "Educational Qualifications:\n", "Skill Set:");
          $pieces =  explode("\n", $string);
          $k=0;
          $output="";
          for($k=0;$k<count($pieces);$k++){
          if($k%2==0){
            $output = $output.'<dt>'.$pieces[$k].'</dt>';
          }
          else{
            $output = $output.'<dd>'.$pieces[$k].'</dd>';
          }
          }
          echo  "<h2> Educations</h2> <hr>";
          echo "<dl>", $output ,"</dl>";   

           //spilt the Skill Set out
          $string2 = spilt_between_two_words($retStr,"Skill Set:\n", "Awards/Recognition:");
          $pieces2 =  explode("\n", $string2);
          $k=0;
          $output2="";
          for($k=0;$k<count($pieces2);$k++){
          if($k%2==0){
            $output2 = $output2.'<dt>'.$pieces2[$k].'</dt>';
          }
          else{
            $output2 = $output2.'<dd>'.$pieces2[$k].'</dd>';
          }
          }
          echo  "<h2> Professional and Technical Skills</h2> <hr>";
          echo "<dl>", $output2 ,"</dl>"; 

           //spilt the Awards out
          $string3 = spilt_between_two_words($retStr, "Awards/Recognition:\n","Work Experience:");
          $pieces3 = explode("\n", $string3);
          $k=0;
          $output3="";
          echo  "<h2> Awards </h2> <hr>";
          for($k=0;$k<count($pieces3);$k++){
            $output3 = $output3.'<li>'.$pieces3[$k].'</li>';
          }
          echo "<ol>", $output3 ,"</ol>"; 

          //spilt the Awards out
          $string4 = spilt_between_two_words($retStr, "Work Experience:\n", "Referees:");
          $pieces4 =  explode("\n", $string4);
          $k=0;
          $output4="";
          echo  "<h2>  Work Experience </h2> <hr>";
          for($k=0;$k<count($pieces4);$k++){
            $output4 = $output4.'<li>'.$pieces4[$k].'</li>';
          }
          echo "<ol>", $output4 ,"</ol>"; 

          //spilt the Referees out
          $string5 = explode("Referees:\n", $retStr);
          $pieces5 =  explode("\n", $string5[1]);
          $k=0;
          $output5="";
          for($k=0;$k<count($pieces5);$k++){
            $output5 =$output5.'<li>'.$pieces5[$k].'</li>';
           }
          echo "<h2>Referees</h2> <hr>";
          echo "<ul>", $output5,"</ul>"; 
         ?>
    </td> 
  </tr> 

  </tbody> 

</table>  
</body>
</html>