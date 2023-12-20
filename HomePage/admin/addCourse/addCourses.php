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
                $upload='../uslugi/img/'.$_FILES['im']['name'];
    
                if(move_uploaded_file($_FILES['im']['tmp_name'],$upload)) echo "File uploaded";
                else echo"Oshibka pri zagruzke fayla";
            }
            else exit("Razmer fayla perevishen");
        }
        else exit("Tip fayla ne podxodit");
    }

    $title = $_POST['title'];
    $price =$_POST['price'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    $sql="INSERT INTO course SET title=:title, price=:price, time=:time, filename=:filename, description=:description";
    $query=$pdo->prepare($sql);
    $query->execute(["title"=>$title, "price"=>$price, "time"=>$time,  "filename"=>$_FILES['im']['name'], "description"=>$description]);
    
        
            // $insert = "INSERT INTO courses(title, price, time, filename) VALUES ('$title', '$price', '$time',)";
            
            // header('location:LoginForm.php');
            echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../addCourses.php">';


?>