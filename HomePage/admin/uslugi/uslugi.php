<?php 
    $user = "root";
    $password = "root";
    $host = "localhost";
    $db = "course";
    $dbh = 'mysql:host='.$host.';dbname='.$db;
    $pdo=new PDO($dbh, $user, $password);

    $flname= $_POST['im'];

if(isset($_POST["submit"])){
    
    $list=['.php', '.zip', '.js', '.html'];
    foreach($list as $item){
        if(preg_match("/$item$/",$_FILES['im']['name']))exit('Rasshirenie fayla ne podxodit');

    }
    $type=getimagesize($_FILES['im']['tmp_name']);
    
    if($type && ($type['mime'] !='image/png' || $type['mime'] !='image/jpg' || $type['mime'] !='image/jpeg')){
        if($_FILES['im']['name'] < 1024 ^ 2){
            $upload='./img/'.$_FILES['im']['name'];
            
            if(move_uploaded_file($_FILES['im']['tmp_name'],$upload)) echo "File uploaded";
            else echo"Oshibka pri zagruzke fayla";
            
        }
        
        else exit("Razmer fayla perevishen");
    }
    else exit("Tip fayla ne podxodit");
    if($type = NULL) exit('zagruzite fayl');
    
    
}

$title=$_POST["title"];
$price=$_POST["price"];
$time=$_POST["time"];
$description = $_POST['description'];
$url=$_SERVER['REQUEST_URI'];
$url= explode('/',$url);
$str=$url[4];
echo $str;

$sql="UPDATE course SET title=:title, price=:price, time=:time, filename=:filename, description=:description WHERE id=:id";
$query=$pdo->prepare($sql);
$query->execute(["title"=>$title, "price"=>$price, "time"=>$time, "filename"=>$_FILES['im']['name'], "description"=> $description, "id"=>$str]);
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../uslugi.php">';
?>

