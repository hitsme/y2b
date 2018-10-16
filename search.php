<?php
include("./lib.php");
session_start();
if(isset($_POST['password']) &&$_POST['name']&& $_POST['password'] == PASSWORD&&$_POST['name'] == NAME){
    $_SESSION['ok'] = 1;
    header('location:?');
}
if(!isset($_SESSION['ok'])){
    exit('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Login.css"/>
</head>
<body>
    <p id="login">
    <h1 style="text-align: center">登陆</h1>
   <form method="post" id="form" class="divForm">
        <input type="text" required="required" placeholder="用户名" name="name"></input>
        <br>
        <input type="password" required="required" placeholder="密码" name="password"></input>
        <br>
        <button type="submit" class="but">登陆</button>
    </form>
    </p>
</body>
</html>');
}
if(!is_array($_GET)&&count($_GET)<=0){
       exit();
    }
$headtitle=$_GET["q"].'-'.SITE_NAME;;
include("./header.php");
$order=isset($_GET['order'])?$_GET['order']:'relevance';
$order1=$order;
$q=urlencode($_GET["q"]);
$type=isset($_GET['type'])?$_GET['type']:'video';
if($type=='channel'){
$order1='channel'; 
}
?>
  <div class="container">
      <div class="py-2">
    <div class="row">
     
      <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
          
          <span class="txt2 pt-1 pb-1" style="text-align: center;display:block;">搜索:<?php echo $_GET["q"] ?></span>
       <div class="row"> <div class="col-md-12 selectalign">  搜索选项： <select class="custom-select" id="paixu">
        <?php
             switch ($order1){
                    case 'relevance':
                      $relevance='selected';
                      break;
                    case 'date':
                      $date1='selected';
                      break;
                    case 'viewCount';
                      $viewCount='selected';
                    case 'channel';
                      $channel='selected';
                      break;
                    }
             echo '<option '.$relevance.' data-url="./ajax/ajax.php?q='.$q.'&type=video&order=relevance&ptk='.$_GET['pageToken'].'">按相关程度排序</option>';
             echo '<option '.$date1.' data-url="./ajax/ajax.php?q='.$q.'&type=video&order=date&ptk='.$_GET['pageToken'].'">按上传日期排序</option>';
             echo '<option '.$viewCount.' data-url="./ajax/ajax.php?q='.$q.'&type=video&order=viewCount&ptk='.$_GET['pageToken'].'">按观看次数排序</option>';
             echo '<option '.$channel.' data-url="./ajax/ajax.php?q='.$q.'&type=channel&order=relevance&ptk='.$_GET['pageToken'].'">仅搜索频道</option>';
        ?>
          </select></div></div>
         <div id="videocontent" class="pt-2 videocontentrow"></div>
        
            
        
       </div>
<script>
    $("#videocontent").load('<?php echo './ajax/ajax.php?q='.$q.'&type='.$type.'&order='.$order.'&ptk='.$_GET['pageToken']?>');
    $('#paixu').on('change', function() {
      loadPage($(this).find(':selected').data('url'));
      });
    function loadPage(url) {
        $("#videocontent").load(url);
    }
</script>
    </div>
 </div> </div>

 <?php
include("./footer.php"); 
?>