<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Grab the text from the form
    $answer = $_POST['crush_reply'];

    // 2. Format how it will look in your secret file
    $log_entry = "Time: " . date("Y-m-d H:i:s") . " | Answer: " . $answer . "\n";

    // 3. Save it to a file called 'answers.txt'
    // FILE_APPEND ensures it doesn't delete previous answers
    file_put_contents("answers.txt", $log_entry, FILE_APPEND);

    // 4. Show her a cute confirmation message
    echo "
    <html>
    <head><link rel='stylesheet' href='styles.css'></head>
    <body style='background-color: rgb(255,210,225); text-align: center; padding-top: 50px;'>
        <h1 class='BUM'>Message Received! ❤️</h1>
        <p class='text'>I'll get back to you soon.</p>
    </body>
    </html>";
}
?>