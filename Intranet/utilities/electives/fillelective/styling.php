<<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript">

;(function($) {
   $.fn.fixMe = function() {
      return this.each(function() {
         var $this = $(this),
            $t_fixed;
         function init() {
            $this.wrap('<div class="container" />');
            $t_fixed = $this.clone();
            $t_fixed.find("tbody").remove().end().addClass("fixed").insertBefore($this);
            resizeFixed();
         }
         function resizeFixed() {
            $t_fixed.find("th").each(function(index) {
               $(this).css("width",$this.find("th").eq(index).outerWidth()+"px");
            });
         }
         function scrollFixed() {
            var offset = $(this).scrollTop(),
            tableOffsetTop = $this.offset().top,
            tableOffsetBottom = tableOffsetTop + $this.height() - $this.find("thead").height();
            if(offset < tableOffsetTop || offset > tableOffsetBottom)
               $t_fixed.hide();
            else if(offset >= tableOffsetTop && offset <= tableOffsetBottom && $t_fixed.is(":hidden"))
               $t_fixed.show();
         }
         $(window).resize(resizeFixed);
         $(window).scroll(scrollFixed);
         init();
      });
   };
})(jQuery);

$(document).ready(function(){
   $("table").fixMe();
   $(".up").click(function() {
      $('html, body').animate({
      scrollTop: 0
   }, 2000);
 });
});

  </script>

  <style type="text/css">
    body{
  font:1.2em normal Arial,sans-serif;
  color:#34495E;
}

h1{
  text-align:center;
  text-transform:uppercase;
  letter-spacing:-2px;
  font-size:2.5em;
  margin:20px 0;
}

.container{
  width:90%;
  margin:auto;
}

table{
  border-collapse:collapse;
  width:100%;
}

.blue{
  border:2px solid #1ABC9C;
}

.blue thead{
  background:#1ABC9C;
}

.purple{
  border:2px solid #9B59B6;
}

.purple thead{
  background:#9B59B6;
}

thead{
  color:white;
}

th,td{
  text-align:center;
  padding:5px 0;
}

tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}

.fixed{
  top:0;
  position:fixed;
  width:auto;
  display:none;
  border:none;
}

.scrollMore{
  margin-top:600px;
}

.up{
  cursor:pointer;
}


  </style>
</head>
<body>
<h1>&darr; SCROLL &darr;</h1>
<table class="blue">
  <thead>
    <tr>
      <th>Colonne 1</th>
      <th>Colonne 2</th>
      <th>Colonne 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
       <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
  </tbody>
</table>

<h1 class="scrollMore">&darr; SCROLL MORE &darr;</h1>
<table class="purple">
  <thead>
    <tr>
      <th>Colonne 1</th>
      <th>Colonne 2</th>
      <th>Colonne 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
       <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
    <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
       <tr>
      <td>Non</td>
      <td>Mais</td>
      <td>Allo !</td>
    </tr>
  </tbody>
</table>
<h1 class="up scrollMore">&uarr; UP &uarr;</h1>

</body>
</html>

