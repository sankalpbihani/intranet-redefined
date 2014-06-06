<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.panel1 {
    width: 224px;
    height: 220px;
    margin: auto;
    position: relative;
}

.card1 {
    width: 100%;
    height: 100%;
    -o-transition: all .5s;
    -ms-transition: all .5s;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
    transition: all .5s;
    -webkit-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    position: absolute;
    top: 0px;
    left: 0px;
}

.front1 {
    z-index: 2;
    background-image: url(front1.jpg);
}

.back1 {
    z-index: 1;
    -webkit-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);  
    transform: rotateY(-180deg);  
    background-image: url(back1.jpg);
}

.panel1:hover .front1 {
    z-index: 1;
    -webkit-transform: rotateY(180deg);
    -ms-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.panel1:hover .back1 {
    z-index: 2;   
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    transform: rotateY(0deg);
}

.panel2 {
    width: 224px;
    height: 220px;
    margin: auto;
    position: relative;
}

.card2 {
    width: 100%;
    height: 100%;
    -o-transition: all .5s;
    -ms-transition: all .5s;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
    transition: all .5s;
    -webkit-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    position: absolute;
    top: 0px;
    left: 0px;
}

.front2 {
    z-index: 2;
    background-image: url(front2.jpg);
}

.back2 {
    z-index: 1;
    -webkit-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);  
    transform: rotateY(-180deg);  
    background-image: url(back2.jpg);
}

.panel2:hover .front2 {
    z-index: 1;
    -webkit-transform: rotateY(180deg);
    -ms-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.panel2:hover .back2 {
    z-index: 2;   
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    transform: rotateY(0deg);
}


.panel3 {
    width: 224px;
    height: 220px;
    margin: auto;
    position: relative;
}

.card3 {
    width: 100%;
    height: 100%;
    -o-transition: all .5s;
    -ms-transition: all .5s;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
    transition: all .5s;
    -webkit-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    position: absolute;
    top: 0px;
    left: 0px;
}

.front3 {
    z-index: 2;
    background-image: url(front3.jpg);
}

.back3 {
    z-index: 1;
    -webkit-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);  
    transform: rotateY(-180deg);  
    background-image: url(back3.jpg);
}

.panel3:hover .front3 {
    z-index: 1;
    -webkit-transform: rotateY(180deg);
    -ms-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.panel3:hover .back3 {
    z-index: 2;   
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    transform: rotateY(0deg);
}



.panel4 {
    width: 224px;
    height: 220px;
    margin: auto;
    position: relative;
}

.card4 {
    width: 100%;
    height: 100%;
    -o-transition: all .5s;
    -ms-transition: all .5s;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
    transition: all .5s;
    -webkit-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    position: absolute;
    top: 0px;
    left: 0px;
}

.front4 {
    z-index: 2;
    background-image: url(front4.jpg);
}

.back4 {
    z-index: 1;
    -webkit-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);  
    transform: rotateY(-180deg);  
    background-image: url(back4.jpg);
}

.panel4:hover .front4 {
    z-index: 1;
    -webkit-transform: rotateY(180deg);
    -ms-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.panel4:hover .back4 {
    z-index: 2;   
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    transform: rotateY(0deg);
}
	</style>
</head>
<body>
<div align='center'>
	<table>
	<tr>
		<td>
			<div class="panel1">
    			<div class="front1 card1">
    			</div>
  			  	<div align='center' style="vertical-align:text-bottom"; class="back1 card1">  
    			HOME
    			</div>
			</div>
		</td>
		<td>
			<div class="panel2">
    			<div class="front2 card2">
    			</div>
    			<div class="back2 card2">  
    			
    			</div>
			</div>
		</td>
		<td>
			<div class="panel3">
    			<div class="front3 card3">
    			</div>
    			<div class="back3 card3">  
    			</div>
			</div>
		</td>
		<td>
			<div class="panel4">
    			<div class="front4 card4">
    			</div>
    			<div class="back4 card4">  
    			</div>
			</div>
		</td>
	</tr>
	</table>
</div>

</body>
</html>