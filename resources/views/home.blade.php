<!doctype html> 
<html> 
  <head>     
    <meta charset="utf-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>Pharmacy</title>     
    <style>
      * {
	margin: 0;
	padding: 0;
	list-style-type: none;
}
body{
	background: url('{{ asset('img/1.jpg')}}')center / cover no-repeat;
  	height: 100vh;
	margin: 0;
	display: flex;
  	justify-content: center;
  
}
h1{
  margin: auto;
  text-align:center;
  margin-top:50px;
  color:#FFFF00;
}
ul{
	display: flex;
	width: 100%;
	height: 80vh;
	margin: auto;
	max-width: 1000px;
	justify-content: center;
	text-align: center;
}
li {
	padding: 1rem 2rem 1.15rem;
  background-image: url('https://scottyzen.sirv.com/Images/v/button.png');
  text-transform: uppercase;
  background-size: 100% 100%;
  cursor: pointer;
  color: #27262c;
	min-width: 150px;
	margin: auto;
  font-size: 15px;
  animation: spring 300ms ease-out;
  text-shadow: 0 -1px 0 #ef816c;
  font-weight: bold;
  margin-top: 10%;
}


li:active {
  transform: translateY(4px);
}

@keyframes spring {
  15% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.2, 1.1);
  }
  40% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(0.95, 0.95);
  }
  75% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.05, 1);
  }
  100% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1, 1);
  }
}

.shameless-plug{
  position: absolute;
  bottom: 10px;
  right: 0;
  padding: 8px 20px;
  color: #ccc;
  text-decoration: none;
}
    </style>
  </head> 
  <body>
    
    <div>
    <ul>
	<li><a style="color:white;" href="{{route("name.search")}}">Search by Name</li>
  <br>
	<li><a style="color:white;" href="{{route("brand.search")}}">Search by Brand</li>
  <br>
	<li><a style="color:white;" href="{{route("homeToemployee")}}">Employee</li>
  <br>
	<li><a style="color:white;" href="{{route("homeTodrug")}}">Drug List</li>
  <br>
  <li><a style="color:white;" href="{{route("contactPage")}}">Contact</li>
</ul>
</div>

  </body> 
  </html> 