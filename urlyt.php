<?php 

$yt = "https://www.youtube.com/watch?v=";

$link = array(
    $yt."gG6PRGEjSP4",
    $yt."gjBHEsGk7O4",
    $yt."teAd7nT8IVM",
    $yt."LVvzoqU3ru0",
    $yt."8hfAjEZHFEg",
    $yt."9K_RsowD4KE",
    $yt."XKLdixm0bz8",
    $yt."2Rq1y4ud_L0",
    $yt."OAwsG2y4_xo",
    $yt."LE77ZIF6H28",
    $yt."BIZsdGmbOHw",
    $yt."tkuDlWme4co",
    $yt."l5teRRknxmc",
    $yt."JuOIUdL8xaI",
    $yt."7AbVMq78esI",
    $yt."Rr9jKakoOHo",
    $yt."iShqwPzcrMY",
    $yt."PmI08a8WypU",
    $yt."QtK-54mXcYM",
    $yt."tZTLanmnk6A",
    $yt."8Az5YF8kPos",
    $yt."CG51SgfxdlQ",
    $yt."41SWQqAW_ys",
    $yt."WMxJkPFlIfE",
    $yt."cAlPC42cHL4",
    $yt."Z-4Yw4hev30",
    $yt."NJTL5mtOYjk",
    $yt."g7EZ6VyXrlk",
    $yt."PSbGumhE9rM",
    $yt."8e1YcZst8bc",
    $yt."TnWdK0RGDvY",
    $yt."bquuZciWlzo",
    $yt."txQBSwKgaOM",
    $yt."8qvMc6dHahE",
    $yt."uGN-l3P9T08",
    $yt."Qpmlo7YNR5w",
    $yt."Zs5ILv0GoDI",
    $yt."VbmEhSD2qMk",
    $yt."Tq6IozFGCsY",
);

// $test = json_encode($link);

foreach ($link as $key) {
    $length = 62;
    $fbclid = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    $h      = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(133/strlen($x)) )),1,133);
    $c      = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(187/strlen($x)) )),1,187);

    $url_fb = 'https://l.facebook.com/l.php?u='.$key.'&feature=share&fbclid='.$fbclid.'&h='.$h.'&__tn__=H-R&c[0]='.$c;

    echo $url_fb."<BR>";
}


die();


?>