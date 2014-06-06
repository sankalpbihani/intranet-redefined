<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.panel {
    width: 224px;
    height: 220px;
    margin: auto;
    position: relative;
}

.card {
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

.front {
    z-index: 2;
    }

.back {
    z-index: 1;
    -webkit-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);  
    transform: rotateY(-180deg);  
    }

.panel:hover .front {
    z-index: 1;
    -webkit-transform: rotateY(180deg);
    -ms-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.panel:hover .back {
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
			<div class="panel">
    			<div style="background:  url('front1.jpg')" class="front card">
    			</div>
  			  	<div align='center' style="background:  url('back1.jpg') " class="back card">  
    			<a href="fillingstyle.php">HOME</a>
    			</div>
			</div>
		</td>
		<td>
            <div class="panel">
                <div style="background:  url('front2.jpg')" class="front card">
                </div>
                <div align='center' style="background:  url('back2.jpg')" class="back card">  
                
                </div>
            </div>
        <td>
            <div class="panel">
                <div style="background:  url('front3.jpg')" class="front card">
                </div>
                <div align='center' style="background:  url('back3.jpg')" class="back card">  
                
                </div>
            </div>
        </td>
		<td>
            <div class="panel">
                <div style="background:  url('front4.jpg')" class="front card">
                </div>
                <div align='center' style="background:  url('back4.jpg')" class="back card">  
                
                </div>
            </div>
        </td>
	</tr>
	</table>
</div>

</body>
</html>