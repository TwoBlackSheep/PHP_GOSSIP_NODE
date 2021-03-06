<?php
include_once '../vendor/sallar/5257396/console.php';
Console::log('================================================================================================================', 'white');
Console::log('                                                                                                                ', 'white');
Console::log('██████╗ ██╗  ██╗██████╗      ██████╗  ██████╗ ███████╗███████╗██╗██████╗     ███╗   ██╗ ██████╗ ██████╗ ███████╗', 'cyan');
Console::log('██╔══██╗██║  ██║██╔══██╗    ██╔════╝ ██╔═══██╗██╔════╝██╔════╝██║██╔══██╗    ████╗  ██║██╔═══██╗██╔══██╗██╔════╝', 'cyan');
Console::log('██████╔╝███████║██████╔╝    ██║  ███╗██║   ██║███████╗███████╗██║██████╔╝    ██╔██╗ ██║██║   ██║██║  ██║█████╗  ', 'cyan');
Console::log('██╔═══╝ ██╔══██║██╔═══╝     ██║   ██║██║   ██║╚════██║╚════██║██║██╔═══╝     ██║╚██╗██║██║   ██║██║  ██║██╔══╝  ', 'cyan');
Console::log('██║     ██║  ██║██║         ╚██████╔╝╚██████╔╝███████║███████║██║██║         ██║ ╚████║╚██████╔╝██████╔╝███████╗', 'cyan');
Console::log('╚═╝     ╚═╝  ╚═╝╚═╝          ╚═════╝  ╚═════╝ ╚══════╝╚══════╝╚═╝╚═╝         ╚═╝  ╚═══╝ ╚═════╝ ╚═════╝ ╚══════╝', 'cyan');
Console::log('----------------------------------------------------------------------------------------------------------------', 'white');
Console::log('                                        ____ ____ ____ _  _ ____ ____                                           ', 'green');
Console::log('                                        [__  |___ |__/ |  | |___ |__/                                           ', 'green');
Console::log('                                        ___] |___ |  \  \/  |___ |  \                                           ', 'green');
Console::log('                                                                                                                ', 'white');
Console::log('================================================================================================================', 'white');
Console::log('', 'white');

if (isset($_SERVER['argv'])){
    if (count($_SERVER['argv']) === 1){
        Console::log('server.php Options: ', 'white');
        Console::log('   -help         display this message', 'white');
        Console::log('   -start        start server using server.json', 'white');
        Console::log('   -run          run server passing parameters', 'white');
        Console::log('', 'white');
        Console::log('usage:', 'white');
        Console::log('   server.php -start', 'white');
        Console::log('   server.php -run GUID LOCAL_IP PORT NETWORK PASSWORD', 'white');
        Console::log('   server.php -run 5c9a20b0fde44ef38aa147f48cd6a29d 192.168.1.1 6884 MyNet 123456', 'white');
        Console::log('', 'white');
    }else{
        Console::log('Client is working with args', 'white');
        print_r($_SERVER['argv']);
    }
}
?>