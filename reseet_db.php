<?php
$files = glob('migrations/*');
foreach ($files as $file){
    if(is_file($file)){
        unlink($file);
    }
}
echo "".shell_exec("php bin/console doctrine:database:drop --force");
echo "".shell_exec("php bin/console doctrine:database:create");
echo "".shell_exec("php bin/console doctrine:migrations:diff");
echo "".shell_exec("php bin/console doctrine:migrations:migrate");
echo "".shell_exec("php bin/console doctrine:fixtures:load");