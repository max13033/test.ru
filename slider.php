<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>overflow</title>
  <style>
   .slider{
      background-color: #ddd;
      width: 500px;
      height: 300px;
      position: relative;

   }
  .slid{
    width: inherit;
    height: inherit;
  }
  .num1{
    background-color: #f77;
    position: absolute;
    top: 0;
    left: 0;
    z-index: <?$a?>1;
  }
  .num2{
    background-color: #7f7;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
  }
  .num3{
    background-color: #77f;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
  }
  .button{
    position: absolute;
    top: 0;
    height: inherit;
    width: 30px;
    background-color: #ddd;
    opacity: 0.3;
    z-index: 2;
  }
  .left{
    left: 0;
  }
  .right{
    right: 0;
  }
  </style>
</head>

<body> 

  <div class="slider">
    <div class="slid num1 <?=$a?>"></div>
    <div class="slid num2 <?=$b?>"></div>
    <div class="slid num3 <?=$c?>"></div>

    <div class="button left"></div>
    <div class="button right"></div>
  </div>








</body>
</html>