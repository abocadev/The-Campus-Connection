<?php

echo "".shell_exec("php bin/console doctrine:database:drop --force");
echo "".shell_exec("php bin/console doctrine:database:create");
echo "".shell_exec("php bin/console doctrine:migrations:diff");
echo "".shell_exec("php bin/console doctrine:migrations:migrate");
echo "".shell_exec("php bin/console doctrine:fixtures:load");