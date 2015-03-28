<?php
$db = mysqli_connect('h2ospace-techc0328_event_demo-1389581', 'h2ospace', '', 'c9') or die(mysqli_error($db));
mysqli_query($db, sprintf('INSERT INTO scores SET name="%s", score=%d',
    mysqli_real_escape_string($db, $_REQUEST['name']),
    mysqli_real_escape_string($db, $_REQUEST['score'])
));

header('Location: thanks.html');
?>
