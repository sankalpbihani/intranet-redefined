<!DOCTYPE html>
<html>
<head>
<script src="/project4/navigation2/js/jq.js" type="text/javascript"></script>

<style type="text/css">

	.detail{
		
		display: none;
	}
</style>

<script>
$(document).ready(function(){
  $("#hadd").click(function(){
    $("#add").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hdelete").click(function(){
    $("#delete").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hupdate").click(function(){
    $("#update").show();
  });
});
</script>

</head>

<body style="height:100%">

<h1 style="background-color:orange ; text-align:center;">Administration</h1>

<div id="menu" style="text-align:center;">
	<button id="hadd" type="submit" value="Submit" style="font-size:18px;background-color:orange;">Add Student</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<button id="hdelete" type="submit" value="Submit" style="font-size:18px;background-color:orange;">Delete Student</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<button id="hupdate" type="submit" value="Submit" style="font-size:18px;background-color:orange;">Upate Information</button>
</div>


<div id="add" class="detail" style="text-align:center">
	<div id="anso" >NSO</div>
	<div id="apt" >PT</div>
</div>

<div id="delete" class="detail" style="text-align:center">
	<div id="anso" >NnSO</div>
	<div id="apt" >PpT</div>
</div>

<div id="update" class="detail">
	this is update section
</div>


</body>
</html>