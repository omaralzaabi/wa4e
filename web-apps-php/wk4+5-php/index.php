<?php 
echo "<title>Omar Ashraf Alzaabi</title>
<h1>Omar Ashraf Alzaabi PHP</h1>
<p>";
$name = 'Omar Ashraf Alzaabi';
echo "The SHA256 hash of $name is ";
print hash('sha256', $name);
echo "
</p>
<pre>ASCII ART:

             
     _/_/    
  _/    _/   
 _/    _/    
_/    _/     
 _/_/              

</pre>
<a href='check.php'>Click here to check the error setting</a>
<br/>
<a href='fail.php'>Click here to cause a traceback</a>
</body>";
?>