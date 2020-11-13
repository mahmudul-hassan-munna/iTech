<!DOCTYPE html>
<html>
<head>
<style> 
div {
  width: 100px;
  height: 100px;
  background: red;
  position: relative;
  animation: myfirst 5s infinite;
  animation-direction: alternate;
}

@keyframes myfirst {
  0%   {background: red; left: 0px; top: 0px;}
  50%  {background: blue; left: 100%; bottom: 500px;}
  100% {background: red; left: 0px; top: 0px;}
}
</style>
</head>
<body>

<div></div>


</body>
</html>
