<?php
echo "<br> These are some string functions. <br>";

echo "<br> # strlen() - Return the Length of a String";
echo strlen("Hello world!");

echo "<br> # str_word_count() - Count Words in a String";
echo str_word_count("Hello world!"); // outputs 2

echo "<br> # strrev() - Reverse a String";
echo strrev("Hello world!"); // outputs !dlrow olleH

echo "<br> # strpos() - Search For a Text Within a String";
echo strpos("Hello world!", "world"); // outputs 6

echo "<br> # str_replace() - Replace Text Within a String";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

echo "<br> # Complete PHP String Reference";
?>