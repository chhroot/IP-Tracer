<?php
include("modules/system.php");
class set {
  public function Setup() {
    global $system;
    
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/IP-Tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/ip-tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/ip-tracer");
      system("sudo rm -rf /usr/bin/trace");
      system("sudo rm -rf /usr/share/IP-Tracer");
    } else {
      system("rm -rf /usr/bin/ip-tracer");
      system("rm -rf /usr/bin/trace");
      system("rm -rf /usr/share/IP-Tracer");
    }
    

    if ($system=="termux") {
      system("mv -v modules/ip-tracer /data/data/com.termux/files/usr/bin/");
      system("mv -v modules/trace /data/data/com.termux/files/usr/bin/");
      system("chmod +x /data/data/com.termux/files/usr/bin/ip-tracer trace");
      system("chmod +x /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo mv -v modules/ip-tracer /usr/bin/");
      system("sudo mv -v modules/trace /usr/bin/");
      system("sudo chmod +x /usr/bin/ip-tracer");
      system("sudo chmod +x /usr/bin/trace");
    } else {
      system("mv -v modules/ip-tracer /usr/bin/");
      system("mv -v modules/trace /usr/bin/");
      system("chmod +x /usr/bin/ip-tracer");
      system("chmod +x /usr/bin/trace");
    }


    if ($system=="termux") {
      system("mkdir /data/data/com.termux/files/usr/share/IP-Tracer");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /data/data/com.termux/files/usr/share/IP-Tracer/");
    } elseif ($system=="ubuntu") {
      system("sudo mkdir /usr/share/IP-Tracer/");
      system("sudo chmod +x * *.* .*.*");
      system("sudo mv -v * *.* .*.* /usr/share/IP-Tracer/");
    } else {
      system("mkdir /usr/share/IP-Tracer");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /usr/share/IP-Tracer/");
    }
    
    if ($system=="termux") {
      system("cd .. && rm -rf IP-Tracer");
    } elseif ($system=="ubuntu") {
      system("cd .. && sudo rm -rf IP-Tracer");
    } else {
      system("cd .. && rm -rf IP-Tracer");
    }
  }
  function logo() {
    system("clear");
    echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|

    Raghav Jindal , Amruth Kiran

EOL;

    if (file_exists("/usr/bin/ip-tracer") || file_exists("/data/data/com.termux/files/usr/bin/ip-tracer")) {
      echo "\033[01;32m     \033[00m\n";
      echo <<<EOL




EOL;
    } else {
      echo "\n\n\033[01;31m  Sorry IP-Tracer is not installed !!!\033[00m";
    }
  }
}
$a=new set;
$a->Setup();
$a->logo();
?>
