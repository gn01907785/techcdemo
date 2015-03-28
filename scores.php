<?php
$db = mysqli_connect('h2ospace-techc0328_event_demo-1389581', 'h2ospace', '', 'c9') or die(mysqli_error($db));
$rows = mysqli_query($db, 'SELECT * FROM scores ORDER BY score DESC');
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>TECH.C. Game Demo</title>
    
    <meta name="viewport" content="width=device-width,user-scalable=no,initical-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="content col-xs-10 col-xs-offset-1">
            <h1>Winner!</h1>

            <table class="table">
                <?php $count = 1; ?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <th>No.<?php echo $count++; ?></th>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo $row['score']; ?>point</td>
                    </tr>
                    <?php if ($count > 5) break; ?>
                <?php endforeach; ?>
            </table>            
            </ol>
        </div>
</body>
</html>