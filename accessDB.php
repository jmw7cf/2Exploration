<?
if(!$_POST['page']) die("0");

$page = $_POST['page'];

$servername = "juliawopata2017-us-east-1c.ctcznydxajnv.us-east-1.rds.amazonaws.com:3306";
$username = "jmw7cf";
$password = "";
$dbname = "Exploration2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
    echo "FAILURES";
} 
echo "<h1>Connected successfully</h1>";

$sql = "SELECT * FROM accounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>acct " . $row["acctName"]. " - followers: " . $row["followers"]. " -Bio: " . $row["bio"]. "</p>";
    }
} else {
    echo "<p>0 results</p>";
}
$conn->close();
?>
