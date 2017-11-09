<?php
try{
    $con = mysqli_connect('localhost', 'root', '', 'employee');
    
    if($_GET["action"]=="list"){
        //Count the records
        $result = mysqli_query($con,"SELECT COUNT(*) AS RecordCount FROM records;");
        $row = mysqli_fetch_array($result);
        $recordCount = $row["RecordCount"];
        
        // Get All records from database
        $result = mysqli_query($con,"SELECT * FROM records ORDER BY ". $_GET["jtSorting"] . " LIMIT " . $_GET["jtStartIndex"] .",". $_GET["jtPageSize"] .";");
        
        $rows = array();
        while($row = mysqli_fetch_array($result)){
            $rows[] = $row;
        }
        
       $jTableResult = array();
       $jTableResult['Result'] = 'OK';
       $jTableResult['TotalRecordCount'] = $recordCount;
       $jTableResult['Records'] = $rows;
       echo json_encode($jTableResult);
}
else if($_GET["action"] == "create"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $salary = $_POST["salary"];
    //Insert Query
    $result = mysqli_query($con,"INSERT INTO records(fname,lname,salary) VALUES ('$fname','$lname','$salary')");
    
    //Get last insert record
    $result = mysqli_query($con, "SELECT * FROM records WHERE emp_id = LAST_INSERT_ID();");
    $row = mysqli_fetch_array($result);
    
    //Return result to jtable
    
    $jTableResult = array();
    $jTableResult["Result"] = "OK";
    $jTableResult["Record"] = $row;
    echo json_encode($jTableResult);
}
    else if($_GET["action"] == "update"){
        $result = mysqli_query($con, "UPDATE records SET fname = '". $_POST["fname"] ."',lname = ". $_POST["lname"] ." WHERE emp_id = ". $_POST["emp_id"] .";");
        $jTableResult = array();
        $jTableResult["Result"] = "OK";
        echo json_encode($jTableResult);
        // Return result to jTbale
    }
    else if($_GET["action"] == "delete"){
        $result = mysqli_query($con, "DELETE FROM records WHERE emp_id = ". $_POST["emp_id"] .";");
        // Return Result to jTable
        $jTableResult = array();
        $jTableResult["Result"] = "OK";
        echo json_encode($jTableResult);
    }
    
    
mysqli_close($con);
}
catch(Exception $e){
    
}

?>