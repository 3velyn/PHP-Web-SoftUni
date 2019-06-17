<?php
spl_autoload_register(function ($className) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
});

class Main
{
    public function run()
    {
        $this->readData();
    }
    private function readData()
    {
        $phoneNumbers = explode(' ', readline());
        $urls = explode(' ', readline());

        $smartPhone = new SmartPhone();
        foreach ($phoneNumbers as $number) {
            try {
                echo $smartPhone->calling($number);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }

        foreach ($urls as $url) {
            try {
                echo $smartPhone->browsing($url);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
    }
}

$main = new Main();
$main->run();