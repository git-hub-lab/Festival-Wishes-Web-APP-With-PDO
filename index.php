<?php

include("db.php");

if(isset($_POST['create-wish']))
{

$title = $_POST['title'];

$title = htmlspecialchars($title,ENT_COMPAT);
 
//friendly URL conversion
function to_prety_url($str){
    if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
    $str = mb_convert_encoding($str, 'UTF-8', mb_detect_encoding($str));
    $str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $str);
    $str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
    $str = strtolower( trim($str, '-') );
    return $str;
}
$str=to_prety_url($title);
 
 $sql = "INSERT IGNORE INTO event_wishes(title,str) VALUES(:title,:str)";
 $stmt = $DBcon->prepare($sql);
 $stmt->bindparam(':title', $title,PDO::PARAM_STR);
 $stmt->bindparam(':str', $str,PDO::PARAM_STR);
 $stmt->execute();
 //$result = $stmt->execute( array( ':title' => $title, ':str' => $str ) );

 //if (!empty($result) ){
    //header("Location: http://localhost/wish/$str");
    //exit();
  //}

// Greeting Page Redirection
//Replace http://localhost/wish/$str with your Greeting WEB APP URL
header("Location: http://localhost/wish/$str");
exit();

}
//print_r(PDO::getAvailableDrivers());
?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebSite">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $current_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 echo '<link rel="canonical" href="'.$current_page.'" />'; ?>


<!-- Edit the Meta Tags Add your Own Meta Contents  -->
<!-- Seo Meta Tags -->
<title>Mskian Festival Wishes Web App</title>
<meta name="description" content="Create an Awesome Name Wishing Festival Web App."/>
<meta name="robots" content="index,follow">
<link href='YOUR FAVICON URL' rel='icon' type='image/x-icon'/>

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Mskian Festival Wishes Web App" />
<meta name="twitter:description" content="Create an Awesome Name Wishing Festival Web App." />
<meta name="twitter:image" content="THUMBNAIL IMAGE FOR TWITTER SHARE" />
<meta name="twitter:url" content="<?php echo $current_page; ?>" />
<meta name="twitter:site" content="@yourtwitterusername" />

<!-- Facebook Open Graph data -->
<meta property="og:title" content="Mskian Festival Wishes Web App" />
<meta property="og:type" content="website"/>
<meta property="og:url" content="YOUR WEB APP URL" />
<meta property="og:image" content="THUMBNAIL IMAGE FOR FACEBOOK SHARE" />
<meta property="og:description" content="Create an Awesome Name Wishing Festival Web App." /> 
<meta property="og:site_name" content="YOUR SITE NAME" />
<meta property="fb:app_id" content="APP ID" />

<!-- Google+ Meta Tags. -->
<meta itemprop="name" content="Mskian Festival Wishes Web App">
<meta itemprop="description" content="Create an Awesome Name Wishing Festival Web App.">
<meta itemprop="url" content="<?php echo $current_page; ?>" />
<meta itemprop="image" content="THUMBNAIL IMAGE FOR GOOGLE+ SHARE">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu" type="text/css" media="all"/>

<style>
	body {
    font-family: 'Ubuntu', sans-serif;
    font-size: 18px;
}
h2 {
    font-size: 24px;
    margin: 20px 0 10px 0;
    letter-spacing: -1px;
}
.login-form {
    margin: 0 auto !important;
    float: none;
    padding: 15px;
}

.login-form form.form-horizontal {
    padding: 10px 20px;
}
.parsley-errors-list {
    list-style-type: none;
    opacity: 0;
    transition: all .3s ease-in;

    color: #d16e6c;
    margin-top: 5px;
    margin-bottom: 0;
  padding-left: 0;
}
.parsley-errors-list.filled {
    opacity: 1;
    color: #a94442;
}
.btn {
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #fff;
}
</style>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<br />
<br />

<div class="col-md-6 col-lg-5 col-sm-8 center-block well login-form">
<h2 class="no-margin text-center">Create Greeting</h2>
<div class="clearfix">&nbsp;</div>
<form method="post" class="form-horizontal" data-parsley-validate>
<div class="form-group">
<input type="text" class="form-control" name="title" placeholder="Your Name" data-parsley-error-message="Please Enter your Name" data-parsley-required="true">
 </div>
<div class="form-group">
<button type="submit" name="create-wish" class="btn btn-success btn-block">Create Wish</button>
</div>
</form>
 </div>
</div>
<div class="clearfix">&nbsp;</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.0/parsley.min.js" integrity="sha256-ixgfZ1KX2FiT8fYtfpU1l3NgfV4X18K1XxyQkdIAd+E=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
	$('form').parsley();
});
</script>

</body>
</html>