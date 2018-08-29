<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                border-style: solid;
                border-width: thin;
                text-align: center;
            }
            
            leftdiv{
                border-style: solid;
                border-width: thin;
            }
        </style>
    </head>
<body>
<h1>FAQ (Frequently Asked Questions)</h1>

<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Id</th><th>Questions</th><th>Answers</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "faq_schema";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, questions, answers FROM faq_table");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
    
<br/>
    <br/>
    <br/>
    <br/>
    
<table>
    <tr>
        <td>Col1</td>
        <td>Col2</td>
    </tr>  
</table>
</body>
</html>