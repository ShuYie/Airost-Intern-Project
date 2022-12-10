<html>
  <head>
    <title>UTM Bus Route</title>
    <link rel="stylesheet" href="../styling.css">
    <style>
      body{
      background-image: url('../php_image/new bg.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
      .empty_box{
          height:120px;
      }
      .result_box{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        width: 60%;
        height:50%;
        margin-right:auto;
        margin-left:auto;
        background-color:white;
        border-radius:9px;
      }
      
      .clarification{
          width: 70%;
          height:40%;
          padding-top:2px;
          margin-left:14px;
          display:block;
          font-size: 20px;
          font-weight:bold;
      }
      
      .display1{
          width: 70%;
          height:20%;
          margin-top:0px;
          margin-left:14px;
          margin-bottom:0px;
          display:block;
          padding:4px;
      }
      
      .display2{
          width: 70%;
          height:20%;
          margin-top:0px;
          margin-left:14px;
          display:block;
          padding:4px;
          margin-bottom:0px;
      }
      
      .reminder{
          color:red;
          margin-left:14px;
          
      }
  </style>
  </head>
  <body>
    <div class="empty_box"></div>
    <div class="result_box">
     <div class="clarification">
      <p class="word">From: <?php echo $_GET["location"];?></p>
      <p class="word"> To: <?php echo $_GET["destination"];?></p>
     </div>
     <p class="reminder">
          *if the bus shown in the first sentence and second sentence are the same, you do not need to transfer bus.
     </p>
      
      <?php 
        $x = $_GET["location"];
        $y = $_GET["destination"];
 
        if ($x=='KDOJ'||$x== 'KLG'||$x=='KDSE'||$x =='Orchard'||$x=='PKU'||$x=='KTF'||$x =='KRP'||$x =='A.M'||$x =='S.M'){
            echo "<p class='display1'>Take Bus D or E from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x =='L51' or $x=='Cengal' or $x=='KTR' or $x=='KTHO' or $x=='KTDI' or $x=='FKA' or $x=='N28' or $x=='N24'){
            echo "<p class='display1'>Take Bus F or G from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x =='Palapes' or $x=='R.F' or $x=='B.P'){
            echo "<p class='display1'>Walk to KTDI and take Bus F or G from ".$_GET["location"]. " to Central Point";
        } else if ($x == 'FKT'){
            echo "<p class='display1'>Take Bus G from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x =='P19' or $x=='C24' or $x=='D05' or $x=='C07'){
            echo "<p class='display1'>Take Bus A/C/D/F from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x =='KP'|| $x=='UTM_i'){
            echo "<p class='display1'>Take Bus A or B from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x == 'S.I'){
            echo "<p class='display1'>Take Bus B from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x =='K9/K10'|| $x=='A.L'){
            echo "<p class='display1'>Take Bus B or C from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x == 'T02_T08'){
            echo "<p class='display1'>Take Bus B or E from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x == 'KTC'){
            echo "<p class='display1'>Take Bus C from ".$_GET["location"]. " to Central Point</p>";
        } else if ($x == 'V01'){
            echo "<p class='display1'>Take Bus H from ".$_GET["location"]. " to Central Point</p>";
        } 
        
        
        if ($y=='KDOJ'||$y=='KLG'||$y=='KDSE'||$y=='Orchard'||$y=='PKU'||$y=='KTF'||$y=='KRP'||$y=='A.M'||$y=='S.M'){
            echo "<p class='display2'>Take Bus D or E to ".$_GET["destination"]."</p>";
        } elseif ($y=='L51'||$y=='Cengal'||$y=='KTR'||$y=='KTHO'||$y=='KTDI'||$y=='FKA'||$y=='N28'||$y=='N24'){
            echo "<p class='display2'>Take Bus F or G to ".$_GET["destination"]."</p>";
        } elseif ($y=='Palapes'||$y=='R.F'||$y=='B.P'){
            echo "<p class='display2'>Take Bus F or G to KTDI and walk to ".$_GET["destination"]."</p>";
        } elseif ($y=='FKT'){
            echo "<p class='display2'>Take Bus G to ".$_GET["destination"]."</p>";
        } elseif ($y=='P19'||$y=='C24'||$y=='D05'||$y=='C07'){
            echo "<p class='display2'>Take Bus A/C/D/F to ".$_GET["destination"]."</p>";
        } elseif ($y=='KP'||$y=='UTM_i'){
            echo "<p class='display2'>Take Bus A or B to ".$_GET["destination"]."</p>";
        } elseif ($y=='S.I'){
            echo "<p class='display2'>Take Bus B to ".$_GET["destination"]."</p>";
        } elseif ($y=='K9/K10'||$y=='A.L'){
            echo "<p class='display2'>Take Bus B or C to ".$_GET["destination"]."</p>";
        } elseif ($y=='T02_T08'){
            echo "<p class='display2'>Take Bus B or E to ".$_GET["destination"]."</p>";
        } elseif ($y=='KTC'){
            echo "<p class='display2'>Take Bus C to ".$_GET["destination"]."</p>";
        } elseif ($y=='V01'){
            echo "<p class='display2'>Take Bus H to ".$_GET["destination"]."</p>";
        }
      ?>

     
    </div>
  </body>
</html>