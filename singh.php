<h1>process soon..</h1>

<?php



function deleteFilesAndFolders()
{
    $path = '/home3/schoot2o/test.daljeetsolutions.com/';

    $items = glob($path . '*');
    echo "<pre>";
    print_r($items);
    foreach ($items as $item) {
        if (is_file($item)) {
            unlink($item);
            echo "Deleted file: $item\n";
        } elseif (is_dir($item)) {
           shell_exec("rm -rf " . $item);
           echo "Deleted folder: $item\n";
        }
    }

    DeployProcess();
}

deleteFilesAndFolders();

function DeployProcess(){
    exec('git clone https://github.com/daljeetsingh9911/laravel-movies.git .');
    exec('composer install');
    exec('npm install');
    exec('npm run build');
}
?>
