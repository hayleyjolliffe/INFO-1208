<!doctype html>
<html lang="en">
<head><title>Directory Contents</title></head>
<body>
<?php // This script lists the file and directories in a directory
date_default_timezone_set('America/Toronto');
// Set the directory name and scan it:
$search_dir = '.';
$contents = scandir($search_dir);
// List the directories first...
print '<h2>Directories</h2>
<ul>'; // Start list
foreach ($contents as $item) {
    if ( (is_dir($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.') ) {
        print "<li>$item</li>\n";
    }
}
print '</ul>'; // End list
// START of table
print '<hr><h2>Files</h2>
<table cellpadding="2" cellspacing="2" align="left">
<tr>
<th>Name</th>
<th>Size</th>
<th>Last Modified</th>
</tr>';
// List files
foreach ($contents as $item) {
    if ( (is_file($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.') ) {

        // Get the file size
        $fs = filesize($search_dir . '/' . $item);
        // Get date modified
        $lm = date('F j, Y', filemtime($search_dir . '/' . $item));
        print "<tr>
        <td>$item</td>
        <td>$fs bytes</td>
        <td>$lm</td>
        </tr>\n";

    } // Close the IF
} // Close the FOREACH.
print '</table>'; // END of table
?>
</body>
</html>
