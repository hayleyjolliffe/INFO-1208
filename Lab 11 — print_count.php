<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Print Count</title>
</head>
<body>
<?php
// Set the directory name and scan it:
$search_dir = ".";
$contents = scandir($search_dir);
// Pull directories first
print '<h2>Print Counter</h2>
<ul>'; //Start list
foreach ($contents as $item) {
    if ( (is_dir($contents . '/' . $item)) AND (substr($item, 0, 1) != '.') ) {
        print "<li>$item</li>\n";
    }
}
print '</ul>'; // END list
// START table
print '<hr><h2>Files</h2>
<table cellpadding="2" cellspacing="2" align="left">
<tr>
<th>Name</th>
<th>Count</th>
<th>% of Occur.</th>
</tr>';
// List files
foreach ($contents as $item) {
    if ( (is_file($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.') ) {

        // Check for 'print' occurences
        if(strpos(file_get_contents($search_dir),'print')) {
            $count = preg_match_all('/print/i', file_get_contents($search_dir));
            // Calculate percentage
            $wordCount = str_word_count(file_get_contents($item));
            $percent = ($count / $wordCount) * 100;
            // Populate table
            print "<tr>
            <td>$item</td>
            <td>$count</td>
            <td>$percent</td>
            </tr>\n";

        } // Close the IF
    } // Close the IF
}
print '</table>'; // END of table
?>
</body>
</html>
