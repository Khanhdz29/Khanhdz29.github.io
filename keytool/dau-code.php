#time
date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $xxx = date("H:i");
//Phần Cài Đặt Màu
$res="\033[0m";
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$Bmg="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lmg="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y");   
$yellow="\033[1;33m";
$mtool="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$red="\033[1;31m";
$white= "\033[1;37m";
$whiteb= "\033[1;37m";
$pmtol="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$cam="\033[1;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[1;34m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$vang="\033[1;93m";
$do="\033[1;91m";
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$BCyan="\033[1;36m";
$trang="\033[1;37m";
$do="\033[1;31m";
$luc="\033[1;32m";
$vang="\033[1;33m";
$luc="\033[1;92m";
$dat="\033[1;37m~\033[1;37m[\033[1;31m-_-\033[1;37m]\033[1;37m ➩";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$useragent = 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36';
/***[ Banner ]***/
$banner = "
\033[1;33m╔══════════════════════════════════════════════════════════════════════════╗
\033[1;33m║                                  \033[1;33m   ║ \033[1;32mCopyright: \033[1;95mMon Sadboiz    \033[1;33m         ║
\033[1;33m║ \033[1;31m  █▀█ █▄░█ █▄░█ \033[1;37m ▀█▀ █▀█ █▀█ █      \033[1;33m║ \033[1;32mFacebook: \033[1;37mfb.com/PNNGUYEN.INFO     \033[1;33m║
\033[1;33m║ \033[1;31m  █▀▀ █░▀█ █░▀█ \033[1;37m  █  █▄█ █▄█ █▄▄    \033[1;33m║ \033[1;32mMomo: \033[1;36m0969389112   \033[1;33m                ║
\033[1;33m║                                  \033[1;33m   ║ \033[1;32mShop Clone: \033[1;34mNguyenlieufacebook.com \033[1;33m║
\033[1;33m╚══════════════════════════════════════════════════════════════════════════╝
\033[1;32m                     [\033[1;36mTool Cày Miễn Phí Và Chất Lượng\033[1;32m]\n";
@system('clear'); $string = strlen($banner); for($i=0; $i<=$string; $i++){ echo $banner[$i];usleep(10);}
echo "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -";
echo" 
\033[1;31m[\033[1;37m●\033[1;31m] \033[1;37m=> \033[1;32mNhập số \033[1;31m[\033[1;37m1\033[1;31m] \033[1;32mVào Tool Free \033[1;31m[\033[1;33mVượt Link\033[1;31m]";
echo" 
\033[1;31m[\033[1;37m●\033[1;31m] \033[1;37m=> \033[1;32mNhập số \033[1;31m[\033[1;37m2\033[1;31m] \033[1;32mVào Tool Phí \033[1;31m[\033[1;33mMua Key\033[1;31m]\n";
echo"\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -";
echo "\n";
echo "\033[1;31m[\033[1;37m●\033[1;31m]\033[1;37m =>\033[1;32m Vui Lòng Chọn Chế Độ: \033[1;33m"; 
$mondz = trim(fgets(STDIN));
if ($mondz == '1'){ 
    if(!$sock = @fsockopen('www.google.com', 80)) { 
        echo 'Vui lòng bật kết nối mạng'; exit(); } 
        eval(file_get_contents('https://dichvuthanhtoan.site/toolbymondepzai/codevuotlink.php')); }
else if ($mondz == '2'){ eval(file_get_contents('https://dichvuthanhtoan.site/toolbymondepzai/codematphi.php')); }
else {echo $luc."Nhập Sai Định Dạng! Vui Lòng Nhập Lại";}
?>
