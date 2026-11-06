<?php
$files = ['about.php', 'index.php'];

$replacements = [
    "\xE2\x80\x93" => "-",         // en-dash (–)
    "\xE2\x80\x94" => " - ",       // em-dash (—)
    "\xE2\x80\x99" => "'",         // right single quotation mark / apostrophe (’)
    "\xE2\x80\x98" => "'",         // left single quotation mark (‘)
    "\xE2\x80\x9C" => '"',         // left double quotation mark (“)
    "\xE2\x80\x9D" => '"',         // right double quotation mark (”)
    "â€“"          => "-",         // Windows-1252 misinterpretation of en-dash
    "â€™"          => "'",         // Windows-1252 misinterpretation of apostrophe
    "â€˜"          => "'",
    "â€œ"          => '"',
    "â€"          => '"',
    "â€”"          => " - ",
    "&#8211;"      => "-",
    "&ndash;"      => "-",
    "&#8217;"      => "'",
    "&rsquo;"      => "'"
];

foreach ($files as $file) {
    if (!file_exists($file)) continue;
    $content = file_get_contents($file);
    foreach ($replacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }
    file_put_contents($file, $content);
    echo "Cleaned $file\n";
}
unlink(__FILE__);

