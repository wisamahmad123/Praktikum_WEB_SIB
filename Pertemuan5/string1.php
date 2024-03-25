<?php

//variabel
$loremIpsum = "Lorem, ipsum dolor sit amet consectetur 
adipisicing elit. Possimus blanditiis illo, 
eos quidem ipsum saepe aspernatur hic ad nobis 
reprehenderit nemo ut excepturi. Delectus 
necessitatibus ipsam officia praesentium? 
Possimus, debitis.";

//memanggil variabel dengan berbagai macam fungsi String
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";