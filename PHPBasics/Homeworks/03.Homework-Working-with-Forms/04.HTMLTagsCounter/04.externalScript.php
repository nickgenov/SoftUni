<?php
$validTags = ["!DOCTYPE","a","abbr","acronym","address","applet","area","article","aside","audio","b","base","basefont","bdi",
    "bdo","big","blockquote","body","br","button","canvas","caption","center","cite","code","col","colgroup","datalist","dd",
    "del","details","dfn","dialog","dir","div","dl","dt","em","embed","fieldset","figcaption","figure","font","footer","form",
    "frame","frameset","h1", "h2","h3","h4","h5", "h6","head","header","hgroup","hr","html","i","iframe","img","input","ins",
    "kbd","keygen","label","legend","li","link","main","map","mark","menu","menuitem","meta","meter","nav","noframes","noscript",
    "object","ol","optgroup","option","output","p","param","pre","progress","q","rp","rt","ruby","s","samp","script","section",
    "select","small","source","span","strike","strong","style","sub","summary","sup","table","tbody","td","textarea","tfoot","th",
    "thead","time","title","tr","track","tt","u","ul","var","video","wbr"
];

session_start();
$_SESSION['score'];
$result;

function validateTag($tag) {
    global $validTags, $result;

    if (array_search($tag, $validTags) === false) {
        $result = "Invalid HTML Tag!";
        $_SESSION['score']--;
    } else {
        $result = "Valid HTML Tag!";
        $_SESSION['score']++;
    }
}

if (isset($_POST['submit'])) {
    validateTag($_POST['input']);
}
?>