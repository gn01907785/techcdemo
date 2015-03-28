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
                <tr>
                    <th width="10">No.1</th>
                    <td>Taro</td>
                    <td>80 point</td>
                </tr>
                <tr>
                    <th>No.2</th>
                    <td>Yoshiko</td>
                    <td>65 point</td>
                </tr>
                <tr>
                    <th>No.3</th>
                    <td>Hana</td>
                    <td>24 point</td>
                </tr>
                <tr>
                    <th>No.4</th>
                    <td>Aoi</td>
                    <td>22 point</td>
                </tr>
                <tr>
                    <th>No.5</th>
                    <td>Nick</td>
                    <td>10 point</td>
                </tr>
            </table>            
            </ol>
        </div>
</body>
</html>