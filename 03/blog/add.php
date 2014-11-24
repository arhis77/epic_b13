<form action="" method="post">
    <input type="text" name="title" />
    <textarea name="content"></textarea>
    <input type="submit" name="Yeah" />
</form>

<?php

if (!empty($_POST['title']) && !empty($_POST['content'])) {

    // берем из файла содержимое
    $filename = 'posts/posts.txt';
    $fileContents = file_get_contents($filename);
    // дописываем в содержимое в начало новый пост через разделители
    $fileContents =   . $fileContents;
    // записываем обновленное содержимое обратно в тот же файл
    file_put_contents($filename, $fileContents);
}