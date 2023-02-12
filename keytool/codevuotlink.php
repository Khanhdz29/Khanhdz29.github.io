error_reporting(0);
session_start();
#time
date_default_timezone_set("Asia/Ho_Chi_Minh");
            $xxx = date("H:i");
//Phần Cài Đặt Màu
$ngay=date("d/m");
$day=date("d/m");
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$vienden="\033[100m"; 
$viendo="\033[101m"; 
$vienluc="\033[102m"; 
$vienvang="\033[103m"; 
$vienxduong="\033[104m"; 
$vienhong="\033[105m"; 
$vienxnhac="\033[106m"; 
$vientrang="\033[107m";
$maufulltrang= "\e1;47;33m"; 
$maufullxduong= "\e[1;47;34m"; 
$maufulldo= "\e[1;47;31m"; 
$maufullluc= "\e[1;47;32m"; 
$maufullxnhac= "\e[1;47;36m"; 
$maufullden= "\e[1;47;30m"; 
$maufullvang= "\e[1;47;33m"; 
$maufullhong= "\e[1;47;33m"; 
$denthui="\033[0;30m"; 
$res="\033[0m"; 
$do="\033[0;31m"; 
$grean="\033[1;32m"; 
$mit="\033[0;32m"; 
$vang="\033[0;33m"; 
$mti="\033[0;33m"; 
$test="\033[1;33m"; 
$tim="\033[1;36m"; 
$lam="\033[1;34m"; 
$tmi="\033[1;34m"; 
$hong="\033[1;35m"; 
$imt="\033[1;35m"; 
$blue="\033[1;36m"; 
$trang="\033[1;37m"; 
$ress="\033[0;32m"; 
$res="\033[0;33m"; 
$green="\033[0;37m"; 
$yellow="\033[0;33m"; 
$white= "\033[0;33m"; 
$xnhac= "\033[1;96m"; 
$den="\033[1;90m"; 
$do="\033[1;91m"; 
$luc="\033[1;92m"; 
$vang="\033[1;93m"; 
$xduong="\033[1;94m"; 
$hong="\033[1;95m"; 
$trang="\033[1;97m"; 
$banner="\r\n"; 
$ngay=date("d/m"); 
$day=date("d/m"); 
$BBlack="\033[1;30m"; 
$BRed="\033[1;31m"; 
$BGreen="\033[1;32m"; 
$BYellow="\033[1;33m"; 
$BBlue="\033[1;34m"; 
$BPurple="\033[1;35m";
$BPurpleb="\033[1;50m";  
$BCyan="\033[1;36m"; 
$BWhite="\033[1;37m"; 
$Blue="\033[0;34m"; 
$res="\033[0m"; 
$red="\033[1;31m"; 
$xanh="\033[1;32m"; 
$cyan="\033[1;36m"; 
$yellow="\033[1;33m"; 
$turquoise="\033[1;34m";
$maugi="\033[1;35m"; 
$white= "\033[1;37m";
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y");
$a=date('d'); // 
    $b=date("m");
    $thoigian=date('d/m');
    $getip=file_get_contents('https://kiemtraip.com/raw.php'); 

$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
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
\033[1;32m                     [\033[1;36mTool Cày Xu Miễn Phí Và Chất Lượng\033[1;32m]
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
//codekey
$a=date('d'); 
$b=date("m");
$thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
@system('clear'); $string = strlen($banner); for($i=0; $i<=$string; $i++){ echo $banner[$i];usleep(100);}
$a=date('d'); // 
$b=date("m");
$thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
$key = "Mondzdangiu".substr(md5($today), 0 , 8);
$long_url = "https://dichvuthanhtoan.site/api_key/keytool.php?key=$key";
$api_token = '00467cfde64409be6c40366db5f177f23fe5b84c';
$api_url = "https://link1s.com/api?api={$api_token}&url={$long_url}";
$result = @json_decode(file_get_contents($api_url), true);
$checkkey = file_get_contents("https://dichvuthanhtoan.site/api_key/keytool.php?key=$key");
$d = date("d-m");
$_check = file_exists("Key_MonTool$d.txt");
echo $BGreen."Truy Cập Vào Link : $BWhite".$result["shortenedUrl"]."".$BGreen." Để Lấy Key Miễn Phí\n";
echo "\033[1;31m[\033[1;33mTHÔNG BÁO\033[1;31m]\033[1;32m Đây Là Tool Free. Key Tool Phải Lấy Lại Mỗi Ngày Nhé \n";
if ($_check !='1'){
$gh = date("d-m", strtotime("yesterday"));
$yt = "Key_MonTool$gh.txt";
$_check2 = file_exists("$yt");
if($_check2==1){
  unlink("$yt");
}
for($j = 3;$j> 0;$j--){
  echo $BCyan."Chuyển Hướng Đến Trang Lấy Key Sau $BCyan".$j;
  sleep(1);
  echo "\r";
  echo "                                          \r";
}
system("termux-open-url ".$result["shortenedUrl"]."");
echo $BWhite."- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    echo " \033[1;33m[\033[1;35m➤\033[1;33m] \033[1;32mNhập Key Miễn Phí Đã Lấy: $BWhite";
    $keyy = trim(fgets(STDIN));
    }
if ($_check =='1'){
  $keyy = file_get_contents("Key_MonTool$d.txt");
  $vt = 1;
  echo $BGreen."   Đang Lấy Api Key...";
  sleep(2);
  echo "\r                                         \r";
}
if($keyy == ''){
  echo "
(\_/)
( >_<)
/ > \033[1;96mKey Sai Rồi, Vào Link Phía Trên Để Lấy Key-_-\n";
  exit;
}
  if($keyy == $key)
      {
             echo "
(\_/)
( >_<)
/ > \033[1;96mKey Đúng Rồi, Chúc Bạn Ngày Mới Vui Vẻ:3\n";
             $mf = fopen("Key_MonTool$d.txt", "w");
             fwrite($mf, $keyy);
             fclose($mf);
      }
      else
      {
echo "
(\_/)
( >_<)
/ > \033[1;96mKey Sai Rồi, Vào Link Phía Trên Để Lấy Key-_-\n";
           exit;
      }
@system('clear'); $string = strlen($banner); for($i=0; $i<=$string; $i++){ echo $banner[$i];usleep(100);}
       echo"\033[1;32m  ╔═════════════════════╗ \n";
echo"\033[1;32m  ║  \033[1;96mTool Trao Đổi Sub  \033[1;32m║\n";
echo"\033[1;32m  ╚═════════════════════╝\n";
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.1\033[1;31m] \033[1;32mTool TDS Cookie \033[1;33mĐa Luồng \033[1;31m[V1] \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.2\033[1;31m] \033[1;32mTool TDS Cookie \033[1;33mĐa Luồng \033[1;31m[V2] \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.3\033[1;31m] \033[1;32mTool TDS Cookie \033[1;33mđã Fix Lỗi\n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.4\033[1;31m] \033[1;32mTool TDS TIK TOK \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.5\033[1;31m] \033[1;32mTool TDS TOKEN \033[1;33mMới Fix không lấy được Token\n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.6\033[1;31m] \033[1;32mTool TDS TOKEN \033[1;33m(Mới) \033[1;31m[V1] \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.7\033[1;31m] \033[1;32mTool TDS TOKEN \033[1;33m(Mới) \033[1;31m[V2] \033[1;33m[Mới]\n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.8\033[1;31m] \033[1;32mTool TDS MAX SPEED COOKIE \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m1.9\033[1;31m] \033[1;32mTool TDS MAX SPEED TOKEN \033[1;33m[Mới] \n";
for ($makep=38;$makep > 0;$makep--){ 
    echo $vang."-"; usleep(25000); 
    echo $grean."-"; } 
    echo "\n"; 
echo"\033[1;32m  ╔═══════════════════════╗\n";
echo"\033[1;32m  ║  \033[1;96mTool Tương Tác Chéo  \033[1;32m║\n";
echo"\033[1;32m  ╚═══════════════════════╝\n";
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m2.1\033[1;31m] \033[1;32mTool TTC Cookie \033[1;33mĐa Luồng \033[1;31m[V1] \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m2.2\033[1;31m] \033[1;32mTool TTC Cookie \033[1;33mĐa Luồng \033[1;31m[V2] \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m2.3\033[1;31m] \033[1;32mTool TTC Cookie \033[1;33mđã Fix Lỗi\n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m2.4\033[1;31m] \033[1;32mTool TTC TIK TOK \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m2.5\033[1;31m] \033[1;32mTool TTC TOKEN \033[1;33m(Mới Fix không lấy được Token)\n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m2.6\033[1;31m] \033[1;32mTool TTC TOKEN \033[1;33m \033[1;31m[V1] \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m2.7\033[1;31m] \033[1;32mTool TTC TOKEN \033[1;33m \033[1;31m[V2] \033[1;33m[Mới]\n";
for ($makep=38;$makep > 0;$makep--){ 
    echo $vang."-"; usleep(25000); 
    echo $grean."-"; } 
    echo "\n"; 
echo"\033[1;32m  ╔═════════════════════╗\n";
echo"\033[1;32m  ║   \033[1;96mTool Instagram    \033[1;32m║\n";
echo"\033[1;32m  ╚═════════════════════╝\n";
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m3.1\033[1;31m] \033[1;32mTool Vipig (TTC) \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m3.2\033[1;31m] \033[1;32mTool Topig (TDS) \033[1;33m[Mới] \n";
 
for ($makep=38;$makep > 0;$makep--){ 
    echo $vang."-"; usleep(25000); 
    echo $grean."-"; } 
    echo "\n"; 
echo"\033[1;32m  ╔═════════════════════╗\n";
echo"\033[1;32m  ║   \033[1;96mTool Tăng Like    \033[1;32m║\n";
echo"\033[1;32m  ╚═════════════════════╝\n";
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m4.1\033[1;31m] \033[1;32mTool Machine Liker \033[1;33m[Like Tây] \033[1;33m[Mới]\n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m4.2\033[1;31m] \033[1;32mTool Machine Liker \033[1;31m[V1] \033[1;33m[Like Tây] + [tùy like] \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m4.3\033[1;31m] \033[1;32mTool Machine Liker \033[1;31m[V2]  \033[1;33m[Like Tây] + [tùy like] \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m4.4\033[1;31m] \033[1;32mTool Rpwliker \033[1;33m[tùy like]\n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m4.5\033[1;31m] \033[1;32mTool Rpwliker \033[1;31m[V1] \033[1;33m(tùy like) \033[1;33m[Mới]\n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m4.6\033[1;31m] \033[1;32mTool Rpwliker \033[1;31m[V2] \033[1;33mĐa Luồng \033[1;32m+ \033[1;33m(Like Việt + Like Tây) + (tùy like) \033[1;33m[Mới] \n";
for ($makep=38;$makep > 0;$makep--){ 
    echo $vang."-"; usleep(25000); 
    echo $grean."-"; } 
    echo"  
  \033[1;32m╔═════════════════════╗
  \033[1;32m║   \033[1;96mTool Công Cụ      \033[0;33m║
  \033[1;32m╚═════════════════════╝\n";            
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m5.1\033[1;31m] \033[1;32mTool Giải Mã PHP Vip - Chạy Key Mua (Dạng Mã Hóa 64 và 32) \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m5.2\033[1;31m] \033[1;32mTool Má Hóa PHP Free - Chạy Lấy Key (Khó Giải Mã) \033[1;33m[Mới] \n";
  
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m5.3\033[1;31m] \033[1;32mTool Reg Acc Garena Vip - Chạy Key Mua (, tự động Reg Acc Garena, ) \033[1;33m[Mới] \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m5.4\033[1;31m] \033[1;32mTool Tăng View Website \033[1;33m[Mới] \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m5.5\033[1;31m] \033[1;32mTool Auto Get Proxy  \033[1;33m[Mới] \n";

for ($makep=38;$makep > 0;$makep--){ 
    echo $vang."-"; usleep(25000); 
    echo $grean."-"; } 
    echo "\n"; 
echo"  
  \033[1;32m╔═════════════════════╗
  \033[1;32m║   \033[1;96mTool Công Cụ FB   \033[0;33m║
  \033[1;32m╚═════════════════════╝\n";
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.1\033[1;31m] \033[1;32mTool Spam CMT Group Vip - Chạy Key Mua (Cmt Ảnh, Gif) \033[1;33m[Mới] \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.2\033[1;31m] \033[1;32mTool xem Thông Tin Trên trang cá nhân FB bằng Token\n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.3\033[1;31m] \033[1;32mTool Add Kết Bạn Vip - Chạy Key Mua (Add, thêm bạn) \033[1;33m[Mới] \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.4\033[1;31m] \033[1;32mTool Nuôi Nick fb Vip - Chạy Key Mua (Cmt Ảnh, Gif Like) \033[1;33m[Mới] \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.5\033[1;31m] \033[1;32mTool Thêm bạn bè \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.6\033[1;31m] \033[1;32mTool Share ảo bằng Token \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.7\033[1;31m] \033[1;32mTool Chấp Nhận Kết Bạn \033[1;33m(Mới) \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.8\033[1;31m] \033[1;32mTool Share ảo bằng Token \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m6.9\033[1;31m] \033[1;32mTool Chọc Bạn Bè \033[1;33m(Mới)\n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m7.1\033[1;31m] \033[1;32mTool Hủy Follow \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m7.2\033[1;31m] \033[1;32mTool Hủy Follow Page\n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m7.3\033[1;31m] \033[1;32mTool Lọc Bạn Ko Tương Tác \033[1;33m(Mới)\n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m7.4\033[1;31m] \033[1;32mTool Share ảo bằng Page \033[1;31m[V1] \033[1;33m[Mới] \n";

echo"\033[1;31m[\033[1;37m\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m7.5\033[1;31m] \033[1;32mTool Đào Mail V2 Vip - Chạy Key Mua (Đào tất cả loại Mail, ) \033[1;33m[Mới] \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m7.6\033[1;31m] \033[1;32mTool Đào Mail YAHOO Vip (Mail, Việt Nam, Canada, Indonesia, ) \033[1;33m[Mới] \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m7.7\033[1;31m] \033[1;32mTool Get Mã 2Fa \n";

  for ($makep=38;$makep > 0;$makep--){ 
    echo $vang."-"; usleep(25000); 
    echo $grean."-"; } 
    echo"\n";  
echo"  
  \033[1;32m╔═════════════════════╗
  \033[1;32m║   \033[1;96mThông Tin Hỗ Trợ  \033[0;33m║
  \033[1;32m╚═════════════════════╝\n";
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m8.1\033[1;31m] \033[1;32mFacebook Admin\n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m8.2\033[1;31m] \033[1;32mZalo Admin    \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m8.3\033[1;31m] \033[1;32mWeb Bán Clone \n";
 
echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m8.4\033[1;31m] \033[1;32mMua Key Chạy Tool \n";

echo"\033[1;31m[\033[1;37m💸\033[1;31m] \033[1;37m=> \033[1;32mNhập \033[1;31m[\033[1;33m8.5\033[1;31m] \033[1;32mExit Tool\n";

echo"\033[1;33m------------------------\n";
echo"\033[1;31m[✨\033[1;31m] \033[1;37m=> \033[1;96mNhập \033[1;37m===>: \033[1;33m"; 
$mondz = trim(fgets(STDIN));
// Trao Đổi Sub
 if ($mondz == '1.1'){ 
    if(!$sock = @fsockopen('www.google.com', 80)) { 
        echo 'Vui lòng bật kết nối mạng'; exit(); } 
        eval(file_get_contents('https://run.mocky.io/v3/7ff3c936-da79-49f6-8f1b-6565a1f6339e'));} 
else if ($mondz == '1.2'){eval(file_get_contents('https://run.mocky.io/v3/9eba9f07-7bc6-48bd-b4e8-70425a4043ef')); } 
else if ($mondz == '1.3'){eval(file_get_contents('https://run.mocky.io/v3/9a67f3dd-6fa1-41b7-8c2e-a59d5362b04e')); } 
else if ($mondz == '1.4'){eval(file_get_contents('https://run.mocky.io/v3/c56cd570-d41c-4f42-9543-65f507a8e7d9')); } 
else if ($mondz == '1.5'){eval(file_get_contents('https://run.mocky.io/v3/9fae126a-ebd8-4188-9274-93f9fc1c82a3')); } 
else if ($mondz == '1.6'){eval(file_get_contents('https://run.mocky.io/v3/758cdfff-37a9-4940-9918-dbc54a2b313c')); } 
else if ($mondz == '1.7'){eval(file_get_contents('https://run.mocky.io/v3/bf5ef204-6017-4fa9-9b49-8b281d08bd06')); } 
else if ($mondz == '1.8'){eval(file_get_contents('https://run.mocky.io/v3/17ba40d9-b7ed-4347-81f2-7499ab168a89')); } 
else if ($mondz == '1.9'){eval(file_get_contents('https://run.mocky.io/v3/cc21c5f9-dcc9-433b-a14d-71a47f9b1f28')); } 
// Tương Tác Chéo 
else if ($mondz == '2.1'){eval(file_get_contents('https://run.mocky.io/v3/e40c818a-a962-441e-998a-8dc8c839f8af')); } 
else if ($mondz == '2.2'){eval(file_get_contents('https://run.mocky.io/v3/34da3068-2cb8-4d50-a82a-5d1b140acac8')); } 
else if ($mondz == '2.3'){eval(file_get_contents('https://run.mocky.io/v3/22b6f3e7-3ca3-4888-b56c-75a9b131630b')); } 
else if ($mondz == '2.4'){eval(file_get_contents('https://run.mocky.io/v3/667e0a80-879f-4c32-b5d8-e8e82986321b')); } 
else if ($mondz == '2.5'){eval(file_get_contents('https://run.mocky.io/v3/9add5843-987b-43c5-9b87-bb3fb7a13ffe')); } 
else if ($mondz == '2.6'){eval(file_get_contents('https://run.mocky.io/v3/26048756-dfe2-43ed-8739-28387b9b7f18')); } 
else if ($mondz == '2.7'){eval(file_get_contents('https://run.mocky.io/v3/a7cabd2c-4396-4d45-987c-505c54d4aae3')); } 
// Tool Instagram
else if ($mondz == '3.1'){eval(file_get_contents('https://run.mocky.io/v3/3983190f-295c-4b3b-8e7b-877e297b1680')); } 
else if ($mondz == '3.2'){eval(file_get_contents('https://run.mocky.io/v3/4ba13576-765e-4751-b0b1-68c22caf0c38')); } 
//Tool Tăng Like
else if ($mondz == '4.1'){eval(file_get_contents('https://run.mocky.io/v3/b2a79a33-ba6f-46cd-b798-40c5718eabc9')); } 
else if ($mondz == '4.2'){eval(file_get_contents('https://run.mocky.io/v3/f1bf4f11-81bf-4dcf-9d09-3fe9a300ea98')); } 
else if ($mondz == '4.3'){eval(file_get_contents('https://run.mocky.io/v3/a18d6168-2445-4324-b9a8-292c3da92d21')); } 
else if ($mondz == '4.4'){eval(file_get_contents('https://run.mocky.io/v3/7b3c39b5-d166-47d7-8a83-b3d77deb8eb8')); } 
else if ($mondz == '4.5'){eval(file_get_contents('https://run.mocky.io/v3/a017b5d9-9368-462f-ace2-435a22de5825')); } 
else if ($mondz == '4.6'){eval(file_get_contents('https://run.mocky.io/v3/564bd258-fbd4-4dd7-b81b-c653357264e3')); } 
//Tool Công Cụ
else if ($mondz == '5.1'){eval(file_get_contents('https://run.mocky.io/v3/1d519570-1fd7-4b23-9b97-9c160817cd2e')); } 
else if ($mondz == '5.2'){eval(file_get_contents('https://run.mocky.io/v3/ec8194c9-4f61-4967-afe0-8755ad69c17f')); } 
else if ($mondz == '5.3'){eval(file_get_contents('https://run.mocky.io/v3/c0e1606a-8a0e-4080-9769-ea1c4951c5f9')); } 
else if ($mondz == '5.4'){eval(file_get_contents('https://run.mocky.io/v3/5c1c590b-4fe3-460a-8ada-74593d154b74')); } 
else if ($mondz == '5.5'){eval(file_get_contents('https://run.mocky.io/v3/8d90c319-a596-427b-95bb-10854a3033ba')); } 
//Tool Công Cụ FB
else if ($mondz == '6.1'){eval(file_get_contents('https://run.mocky.io/v3/28089ee1-0f4b-4039-abf0-092d47e54abe')); } 
else if ($mondz == '6.2'){eval(file_get_contents('https://run.mocky.io/v3/df595ec3-eac9-4b3e-9804-f5ff08ce2a97')); } 
else if ($mondz == '6.3'){eval(file_get_contents('https://run.mocky.io/v3/ab3cce4d-0a5d-4bb4-b4db-80143686fc46')); } 
else if ($mondz == '6.4'){eval(file_get_contents('https://run.mocky.io/v3/d70ab14b-15d6-40ca-ad26-9f98b1ef88f6')); }
else if ($mondz == '6.5'){eval(file_get_contents('https://run.mocky.io/v3/b13c5d41-39b7-45b1-a996-2929113e69e0')); } 
else if ($mondz == '6.6'){eval(file_get_contents('https://run.mocky.io/v3/ec6c8504-afda-46ef-8e1c-f8f524677cc9')); } 
else if ($mondz == '6.7'){eval(file_get_contents('https://run.mocky.io/v3/ce6181ff-8ece-44be-b055-085b1400feb6')); } 
else if ($mondz == '6.8'){eval(file_get_contents('https://run.mocky.io/v3/bc9bb752-8657-4f52-b6e4-a95a51e3b90d')); } 
else if ($mondz == '6.9'){eval(file_get_contents('https://run.mocky.io/v3/80f3a840-ff2b-4b39-be82-8a974908a3cd')); } 
else if ($mondz == '7.1'){eval(file_get_contents('https://run.mocky.io/v3/9bc4cc0e-dc87-4ca8-9dd1-31b0aec7507d')); } 
else if ($mondz == '7.2'){eval(file_get_contents('https://run.mocky.io/v3/7fcb142c-ea33-4d5a-bad4-e93f609093cf')); } 
else if ($mondz == '7.3'){eval(file_get_contents('https://run.mocky.io/v3/f32a363e-eb8c-427d-9df7-960d931c5828')); } 
else if ($mondz == '7.4'){eval(file_get_contents('https://run.mocky.io/v3/3e7b6e2f-1efa-483f-ab26-68cbe2e2bbdb')); } 
else if ($mondz == '7.5'){eval(file_get_contents('https://run.mocky.io/v3/618fcc38-be9a-491c-9e3b-f04bf76972f0')); } 
else if ($mondz == '7.6'){eval(file_get_contents('https://run.mocky.io/v3/f2188c26-f6a6-415d-ad84-f22fd1aebd34')); } 
else if ($mondz == '7.7'){eval(file_get_contents('https://run.mocky.io/v3/20e4da83-e99d-4ea6-ad79-39ebbc8691c5')); } 
//Thông Tin Hỗ Trợ
else if ($mondz == '8.1'){ echo $luc."https://www.facebook.com/PNNGUYEN.INFO\n";
@system('xdg-open https://www.facebook.com/PNNGUYEN.INFO'); }
else if ($mondz == '8.2'){ echo $luc."Zalo: 0867080069\n";
@system('xdg-open https://zalo.me/0867080069'); }
else if ($mondz == '8.3'){ echo $luc."https://nguyenlieufacebook.com\n"; 
@system('xdg-open https://nguyenlieufacebook.com'); }
else if ($mondz == '8.4'){ echo $luc."https://dichvuthanhtoan.site\n"; 
@system('xdg-open https://dichvuthanhtoan.site'); }
else if ($mondz == '8.5'){ echo $luc."Cảm Ơn Bản Đã Sử Dụng Tool Bên Mình :))\n"; } 
else {echo $luc."Nhập Sai Định Dạng! Vui Lòng Nhập Lại";} 
?>
            
