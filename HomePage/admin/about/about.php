<?php 
    $user = "root";
    $password = "root";
    $host = "localhost";
    $db = "course";
    $dbh = 'mysql:host='.$host.';dbname='.$db;
    $pdo=new PDO($dbh, $user, $password);

if(isset($_POST["submit"])){
    $list=['.php', '.zip', '.js', '.html'];
    foreach($list as $item){
        if(preg_match("/$item$/",$_FILES['im']['name']))exit('Rasshirenie fayla ne podxodit');

    }
    $type=getimagesize($_FILES['im']['tmp_name']);
    if($type && ($type['mime'] !='image/png' || $type['mime'] !='image/jpg' || $type['mime'] !='image/jpeg' || $type['mime'] !='image/svg+xml' || $type['mime'] !='image/xml+svg'  || $type['mime'] !='image/svg' || $type['mime'] !='application/xml' || $type['mime'] !='text/xml')){
        if($_FILES['im']['name'] < 1024 ^ 2){
            $upload='./img/'.$_FILES['im']['name'];

            if(move_uploaded_file($_FILES['im']['tmp_name'],$upload)) echo "File uploaded";
            else echo"Oshibka pri zagruzke fayla";
        }
        else exit("Razmer fayla perevishen");
    }
    else exit("Tip fayla ne podxodit");
}

$title=$_POST["title"];
$title1=$_POST["title1"];
$description1=$_POST["description1"];
$description2=$_POST["description2"];
$sql="UPDATE about SET title=:title, description1=:description1, description2=:description2, filename1=:filename1, title1=:title1";
$query=$pdo->prepare($sql);
$query->execute(["title"=>$title, "description1"=>$description1, "description2"=>$description2, "title1"=>$title1, "filename1"=>$_FILES['im']['name']]);
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../about.php">';
?>

