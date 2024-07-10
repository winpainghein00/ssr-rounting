<?php

    function index(){
        $conn = mysqli_connect("localhost","wph","qwerasdf","wad_school");
        $sql = "SELECT * FROM courses";
        $query = mysqli_query($conn,$sql);

        $rows = [];
        while ($row = mysqli_fetch_assoc($query)){
            array_push($rows,$row);
        };
        header("Content-Type:application/json");
        echo json_encode($rows);
    }

 