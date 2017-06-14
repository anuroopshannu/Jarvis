<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    body{
        background-image:url('http://cdn.wallpapersafari.com/22/60/PvXYql.jpg');
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
    }
    #log{
        background-color:red;
    }
</style>
</head>
<body>
    
     <h1  style="font-size:30px;text-decoration:none;color:orange" class="center-block nostyle">J.A.R.V.I.S<span style="display:inline-block; width: 10px;"></span></h1>
     <a href="whatsapp://send/?text=Hello%20World!">whatsapp</a>
    
<?php
require __DIR__ . '/vendor/autoload.php';

use Auth0\SDK\Auth0;

$auth0 = new Auth0(array(
    'domain'        => 'anuroop.auth0.com',
    'client_id'     => 'RyvxBPLwptDZvYwMAhWOx5dkAYv8zOxu',
    'client_secret' => '-OFimq9fvMkFdvQvALsEALl-xL_ZUq3EW3qCQFKcBobwBVDWgvuKsXgwt7tkABOC',
    'redirect_uri'  => 'https://jarvis-shannu.c9users.io/hello-world.php',
    
));

?>

<script src="https://cdn.auth0.com/js/lock/10.0/lock.min.js"></script>
<script type="text/javascript">
  var lock = new Auth0Lock('RyvxBPLwptDZvYwMAhWOx5dkAYv8zOxu', 'anuroop.auth0.com', {
    auth: {
      redirectUrl: 'https://jarvis-shannu.c9users.io/hello-world.php',
      responseType: 'code',
      params: {
        scope: 'openid email' // Learn about scopes: https://auth0.com/docs/scopes
      }
    }
  });
</script>


<button id="log" onclick="lock.show();">Login</button>
</body>
</html>