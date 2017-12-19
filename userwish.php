<?php

include("db.php");


if(isset($_GET['str']))
{
 $str = $_GET['str'];
 $stmt = $DBcon->prepare("SELECT * FROM event_wishes WHERE str=:str");
 $stmt->execute(array(':str' => $str));
 $user_wish=$stmt->FETCH(PDO::FETCH_ASSOC);
}

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
<title><?php echo $user_wish['title']; ?> Wishing your happy independence day</title>
<meta name="description" content="<?php echo $user_wish['title']; ?> Wish you a happy independence day Here is your happy independence day Greeting Wishes."/>
<link href='YOUR FAVICON URL' rel='icon' type='image/x-icon'/>

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $user_wish['title']; ?> Wishing your happy independence day" />
<meta name="twitter:description" content="<?php echo $user_wish['title']; ?> Wish you a happy independence day Here is your happy independence day Greeting Wishes." />
<meta name="twitter:image" content="THUMBNAIL URL IMAGE FOR TWITTER SHARE" />
<meta name="twitter:url" content="<?php echo $current_page; ?>" />
<meta name="twitter:site" content="@yourtwitterusername" />
<meta name="twitter:creator" content="@yourtwitterusername" />

<!-- Facebook Open Graph data -->
<meta property="og:title" content="<?php echo $user_wish['title']; ?> Wishing your happy independence day" />
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?= "http://example.com".$_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="THUMBNAIL IMAGE URL FOR FACEBOOK SHARE" />
<meta property="og:description" content="<?php echo $user_wish['title']; ?> Wish you a happy independence day Here is your happy independence day Greeting Wishes." /> 
<meta property="og:site_name" content="YOUR SITE NAME" />
<meta property="fb:app_id" content="APP ID" />
<meta content='YOUR FACEBOOK PROFILE URL' property='article:author'/>
<meta property="article:publisher" content="YOUR FACEBOOK PAGE URL" />

<!-- Google+ Meta Tags. -->
<meta itemprop="name" content="<?php echo $user_wish['title']; ?> Wishing your happy independence day">
<meta itemprop="description" content="<?php echo $user_wish['title']; ?> Wish you a happy independence day Here is your happy independence day Greeting Wishes.">
<meta itemprop="url" content="<?php echo $current_page; ?>" />
<meta itemprop="image" content="THUMBNAIL IMAGE URL FOR GOOGLE+ SHARE">

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

<h2 class="no-margin text-center">Hello <?php echo $user_wish['title']; ?> Wishing you a happy independence day :-) </h2>
<br />

<div class="col-md-6 col-lg-5 col-sm-8 center-block well login-form">
<h2 class="no-margin text-center">Create Your Own Greeting Wish Like this</h2>
<div class="clearfix">&nbsp;</div>
<form method="post" action="http://localhost/pdo/" class="form-horizontal" data-parsley-validate>
<div class="form-group">
<input type="text" class="form-control" name="title" placeholder="Your Name" data-parsley-required="true">
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