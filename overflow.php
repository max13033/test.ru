<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>overflow</title>
<style>
   .cont{
      background-color: #ddd;
   }
   .block1{
    width: 100px;
    height: 100px;
    background-color: #f77;
    float: left;
    z-index: 3;
   } 
   .block2{
    width: 300px;
    height: 300px;
    background-color: #7f7;
/*    position: relative;
    float: left;*/
    top: 3px;
   } 
/*   .block3{
    height: 30px;
    background-color: #77F;
    width: 500px;
    clear: both;*/
   }
</style>
</head>

<body> 
<div class="cont">
  <div class="block1"></div>
  <div class="block2"></div>
<!--   <div class="block3"></div> -->



</div>








</body>
</html>