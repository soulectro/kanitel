<?php
    if (isset($_POST['crtNum']) && !empty($_POST['crtNum'])) {
        require_once "db.php";
        $stmt = $pdo->query('SELECT * FROM certs WHERE cert_num = '.$_POST['crtNum']);
        while ($row = $stmt->fetch(PDO::FETCH_LAZY))
        {
            $term = $row['term'];
        }

        echo $term;
    } else {
        echo "net";
    }

?>