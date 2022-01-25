

 <?php

$list = array (
  array("Peter", "Griffin" ,"Oslo", "Norway"),
  array("Glenn", "Quagmire", "Oslo", "Norway")
);

$file = fopen("contactsz.csv","w");

foreach ($list as $line) {
  fputcsv($file, $line);
}

fclose($file);
?> 

?> 