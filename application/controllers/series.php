<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="src/style.css">
<font face=Ubuntu size=3>
<style>
  body { 
    background: white url("/src/hi.png") no-repeat fixed center; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.memek {
  margin: auto;
  background-color: #f7f3f3;
  width: 50%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.pepek {
  margin: auto;
  background-color: #f7f3f3;
  width: 40%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.intro {
  margin: auto;
  background-color: #f7f3f3;
  width: 20%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 20px;
}

#steal a{
  padding:5px 5px;
  margin:1;
  background:white;
  text-decoration:none;
  letter-spacing:1px;
  -moz-border-radius: 10px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}
#steal a:hover{
  background:green;
  border-bottom:5px solid #red;
  border-top:5px solid #red;
}
</style>
<center><div id="steal"><a href="/"><b>/home<b/></a>
<?php
$form = '<form action="series.php" method="get">
<input type="hidden" style="width:40%;" name="anti"><br>
<input type="hidden" name="fansub">
</center>
</form>';

print $form;

if(isset($_GET['anti'])){
  $anti = $_GET['anti'];
  $bangsat = 'http://melodysubs.net';
  $etc = '/anime/';
  $kontol = $bangsat . $etc . $anti; 
  $curl = curl_init($kontol); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

print '<div class="memek"><br>';
//anime info    
function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<a href="http://melodysubs.net/', ' <a href="/application/controllers/get.php?anti=', $ambilkata);
   
    return $ambilkata;
}



//link    
$regex = '/<div class="venser">(.*?)<div class="commentarea">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter3($list[0]),'</div><br>'; 
else 
    print "Not found";

}

function sed($text)
{
    $sed = $text;
    $sed = str_replace('-', ' ', $sed);
    $sed = str_replace('/', ' - Series ', $sed);
    return $sed;
}

$judul = sed(strtoupper($_GET['anti']));
?>
<title><?php echo $judul; ?></title>
</div></div></div>
<p></center>

<div class="pepek">
<font face=Ubuntu>
<font color=red><b>

<?php
$bc = basename(__FILE__);
echo "SITE: ".$_SERVER['SERVER_NAME']."<br>";
echo "FILE: ".$bc."<br>";
echo "params argument: <br><br>";
echo "
/$bc?home [mainpage]<br>
/$bc?page={1..99) [otherpages]";

    echo'
    <form action="/application/views/welcome_message.php?search=" method="get">
    <font face="Consolas" size="3" color="green"><p>
    SEARCH QUERY: <input type="text" style="width:20%;" placeholder="ie: tejina;senpai" name="search">
    <input type="submit" value=" > ">
    </font>
    <br>
    </form><p>';
    
    echo'
    <form action="/application/views/welcome_message.php?page=" method="get">
    <font face="Consolas" size="3" color="green"><p>
    PAGE: <input type="text" style="width:2%;"  name="page">
    <input type="submit" value=" > ">
    </font>
    <br>
    </form>';
    
    
echo'</div><p>
<div class="intro">
<font color=crimson face=consolas size=3>
<center>
<b>&copy; Sin,</b>

<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/melodyCI</font>
</font>
</div>   
<p>';


    