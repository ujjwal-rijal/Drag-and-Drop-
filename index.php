<?php
$content ='
<style type="text/css">
*{
    font-family:Tahoma, Geneva, sans-serif;
}
h4{
    color:#FFF;
}
.drag{
    width:100%;
    margin:0 auto;
}
.box{
    padding:10px;
    min-height:160px;
    text-align:justify;
    border:0px #CCC solid; 
    margin:5px;
}
.box-head{
    cursor:move;
}
.black{
    border:#000000 1px solid;
}
.black h4{
    background-color:#000000;
    padding:10px;
}
.red{
    border:1px #FF0000 solid;
}
.red h4{
    background-color:#FF0000; padding:10px;
}
.blue{
    border:#0000FF 1px solid; }
.blue h4{
    background-color:#0000FF;
    padding:10px;
}
</style>




<div class="drag" id="drag">
<div class="box black">
<div class="box-head">
<h4>Sample Title One</h4>
</div>
<div>
Place Text here.  
</div>
</div>
<div class="box red">
<div class="box-head">
<h4> Sample Title Two</h4>
</div>
<div>
Place Text here.
</div>
</div>
<div class="box blue">
<div class="box-head">
<h4>Sample Title Three</h4>
</div>
<div>
Place Text here.

Please follow the instruction given in download package to implement it in your web applications. </div>
</div>
</div>

<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript">
$("#drag").sortable({
connectWith: ".box",
items: ".box",
opacity: 0.5,
tolerance: "pointer"
});
</script>';


$pre = 1;
$title = "How to drag and drop items using jQuery";
$heading = "How to drag and drop items using jQuery example.";
include("html.inc");            
?>