<?php
    $conn = mysqli_connect("localhost","root","","test");
    $data = json_decode(file_get_contents("php://input"));
    if($data->request=='add'){
        $query = "INSERT INTO emlpoyee (emp_f_name,emp_l_name) VALUES('".$data->fname."','".$data->lname."')";
        if (mysqli_query($conn, $query)){
            echo "Data added successfully.";
        } else{
            echo "Oops, Falied to added!!!!";
        }
    } else if($data->request=='get_data'){
        $output=array();
        $query = "SELECT * FROM emlpoyee";
        if ($result = mysqli_query($conn, $query)){

            while($rows = mysqli_fetch_assoc($result)){
                array_push($output,$rows);
            }
            echo json_encode($output);
        } else{
            echo "Oops, Falied to added!!!!";
        }
    }
?>