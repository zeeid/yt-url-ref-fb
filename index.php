<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        if (isset($_POST['list_url'])) {
            $list = trim($_POST["list_url"]);
            $arr = explode("\r\n", $list); //array
            $hitung = count($arr);
            
            set_time_limit(0);
            // $proxy_list = $list;
            $url_list = str_replace("\r\n","",$list);

            $yt = "https://www.youtube.com/watch?v=";
            foreach ($arr as $key) {
                // echo $yt.$key."<BR>";
                $length = 62;
                $fbclid = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
                $h      = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(133/strlen($x)) )),1,133);
                $c      = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(187/strlen($x)) )),1,187);

                $url_fb = 'https://l.facebook.com/l.php?u='.$yt.$key.'&feature=share&fbclid='.$fbclid.'&h='.$h.'&__tn__=H-R&c[0]='.$c;

                echo $url_fb."<BR>";


            }
            die();
        }

    ?>
    <form action="" method="post">
        <textarea name="list_url" id="list_url" style="width: 70%;" ></textarea>
        <br>
        <button type="submit">GENERATE</button>
    </form>
</body>
</html>