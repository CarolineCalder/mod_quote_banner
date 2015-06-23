<?php
// No direct access
defined('_JEXEC') or die; ?>
<style>

#fade-quote 	{
	font: "le_havre_blackblack";
	margin-bottom: 0px;
	height: 150px;
	width: 100%;
	padding: 0px;
	}

.quotes {
	display: block;
	margin-top: -140px;
	position: relative;	
}
div[id^="quote-"] {
	display: none;
}

.nom-name	{
	font-size: 14pt;
    line-height: 150%;
	font-weight: bold;
	color: #19acff;
	font-family: 'le_havreregular', Arial, sans-serif;
	position: absolute;
	right: 3%;
}
.credit-name	{
	font-size: 15pt;
	font-weight: bold;
	line-height: 150%;
	margin-left: 35%;
	color: #cc0000;
	font-family: 'le_havreregular', Arial, sans-serif;
	}
.reason	{
	font-size: 12pt;
	line-height: 130%;
	quotes: "“" "”";
	margin-left: 35%;
	letter-spacing: .05em;
	color: #0077ba;
	font-family: 'le_havreregular', Arial, sans-serif;
	text-align: left;
	margin-right: 2%;
	}
.reason:before	{
	content: open-quote;
	}
.reason:after	{
	content: close-quote;
	}
ul	{
	list-style-type: none;
	}
.send	{
	font-size: 12pt;
	font-weight: 400;
	}
.background-image-sho	{
	width: 100%;
	height: 100%;
	
	}
.links-sho	{
	width: 100%;
	margin-top: -24px;
	
	}
.link1-sho	{
	position: absolute;
	margin-top: -24px;
	}
.link2-sho	{
	position: absolute;
	right: 10%;
	margin-top: -24px;
	}
.link2-sho [href^="https://"]   {
        background-image:none !important;
}
.link1-sho [href^="http://"]   {
        background-image:none !important;
}
	
@media (max-width:690px){
	#fade-quote 	{
		display: none;
	
	}
	}
	
@media all and (max-width: 880px) and (min-width: 691px)	{
	.quotes {
		margin-top: -80px;
}
	.nom-name	{
		font-size: 10pt;
        	
}
	.credit-name	{
		font-size: 10pt;
		
}
	.reason	{
		font-size: 8pt;
		
}
	#fade-quote 	{
		height: 100px;
		display: none;
	
}
	
	}


@media all and (max-width: 1280px) and (min-width: 881px)	{
	.quotes {
		margin-top: -100px;
}
	.nom-name	{
		font-size: 9pt;
        	
}
	.credit-name	{
		font-size: 10pt;
		
}
	.reason	{
		font-size: 8pt;
		
}
	#fade-quote 	{
		height: 120px;
	
	}
	}


@media all and (max-width: 1400px) and (min-width: 1281px)	{
	.quotes {
		margin-top: -135px;
}
	.nom-name	{
		font-size: 14pt;
}
	.credit-name	{
		font-size: 15pt;
}
	.reason	{
		font-size: 12pt;
		
}
	#fade-quote 	{
		height: 180px;
}
	}



</style>

            
<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<div class="background-image-sho">
<img src="<?php echo JURI::root(true); ?>/modules/mod_quote/" alt="Shout out!" class="big-image" />
</div>

<div class="link1-sho"><a href="" ><img src="<?php echo JURI::root(true); ?>/modules/mod_quote/" alt="" class="hidden-img" /></a></div>
<div class="link2-sho"><a href="" ><img src="<?php echo JURI::root(true); ?>/modules/mod_quote/" alt="" class="hidden-img" /></a></div>

	
<div class="quotes">
<?php
$sql = "SELECT id, nominator, nominee, reason FROM jos_quote ORDER BY RAND() LIMIT 200";
$result = mysqli_query($conn, $sql);
$i = 1;
if (mysqli_num_rows($result) >0 ) {
    // output data of each row
    
    
    while($row = mysqli_fetch_assoc($result)) {
    
    echo '<div id="quote-'. $i .'">';
        
    $i++;
	echo "<ul>";
    
    echo  "<li class='credit-name'> ". $row["nominee"].  ",</li>
	<li class='reason'> " . $row["reason"]. "</li> 
	<li class='nom-name'>" .$row["nominator"]. "</li>";
	
	echo "</ul>";
   echo '</div>';
   } // while loop end
   
} 

else {
    echo "0 results";
}
?>
</div>


<?php
mysqli_close($conn);
?> 