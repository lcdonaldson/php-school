# similar to the w3schools example

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Brian";
$lastname = "Martin";
$email = "brian@shop.com";
$stmt->execute();

$firstname = "Ab";
$lastname = "Massul";
$email = "ab@shop.com";
$stmt->execute();

$firstname = "Diego";
$lastname = "Salzar";
$email = "diego@shop.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

***************************************
          NEXT EXAMPLE
***************************************

if(isset($_GET['scanTime'])){

// media audit scan time for modal
    $myArr = [];
    $time = "SELECT date FROM audit_media ORDER BY date ASC";

    $stmt = \GLTR\Core\Database\Database::getInstance()->conn()->prepare($time);
    $stmt->execute();
    $stmt->bind_result($gpid);

    while($stmt->fetch()){
        array_push($myArr, $gpid);
    }
    $stmt->close();

    $date1Timestamp = strtotime(min($myArr));
    $date2Timestamp = strtotime(max($myArr));
    $difference = $date2Timestamp - $date1Timestamp;
    $decMinutes = $difference / 60;
    $minutes = round($decMinutes);
    print_r($minutes);
}

***************************************
          NEXT EXAMPLE
***************************************

if(isset($_GET['totalScans'])){

// media audit number of scans for modal   

    $scans = "SELECT users.fname, users.lname, audit_media.id FROM audit_media INNER JOIN users ON audit_media.guid=users.id";
    $stmt = \GLTR\Core\Database\Database::getInstance()->conn()->prepare($scans);
    $stmt->execute();
    $stmt->bind_result($fname, $lname, $id);

    while ($stmt->fetch()) {
        $str = sprintf("%s %s %s", $fname, $lname, $id);       
        $piece = preg_split('/[\s]+/', $str);
        print_r($piece);
    }    
    $stmt->close();   
} 


