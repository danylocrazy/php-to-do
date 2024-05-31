<?php 
    if(isset($_POST['title'])){
        require '../connectdb.php';
        $title = $_POST['title'];


    if(empty($title)) {
        header('Location: ../index.php?mess=error');
    } else {
        $stmt = $connect->prepare("INSERT INTO todos(title) VALUE(?)");
        $res = $stmt->execute([$title]); 

        if($res) {
            header('Location: ../index.php?mess=success');
        } else {
            header('Location: ../index.php');
        }
        $connect = null;
        exit();
    }
} else {
    header('Location: ../index.php?mess=error');
}
?>