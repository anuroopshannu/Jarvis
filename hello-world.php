<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div id="hire" style="background-color:#000000;text-align:center;">
     <a href="#" style="font-size:30px;text-decoration:none;color:orange" class="center-block nostyle">J.A.R.V.I.S<span style="display:inline-block; width: 10px;"></span></a>
</div>

<?php
require_once('pubnub-php/composer/lib/autoloader.php');
use Pubnub\Pubnub;
$pubnub = new Pubnub('pub-c-6f60573f-e6cf-4202-97fe-74bc30620aac','sub-c-0d99650e-54f4-11e6-aba3-0619f8945a4f');
$history = $pubnub->history('jarvis');
$history['messages']=array_reverse($history['messages']);
echo("<table class='table table-hover' style='background-color:#ffffff'><thead><tr><th>#</th><th>Date</th><th>Time</th><th>Image</th></tr></thead>");
foreach($history['messages'] as $key=>$value){
    $i=strpos($value,'@');
    $date=substr($value,0,$i);
    $time=substr($value,($i+1),8);
    $j=strpos($value,'+');
    $url=substr($value,($j+1));
    echo("<tr><td>".($key+1)."</td><td>".$date."</td><td>".$time."</td><td><a href=".$url." ><img src=".$url." height='100' width='100'></a></td></tr>");
}
echo("</table>");

?>
</body>
</html>