<?php
$path = $_GET['sciezka'];
$folder = $_GET['folder'];
$operacja = $_GET['operacja'];

//echo "Path: " . $path . '<br>'."Folder: " . $folder . '<br>'. "Operacja: " . $operacja;
if ($path[strlen($path) - 1] !== "/") {
    $path = $path . "/";
}
if ($folder[0] === "/") {
    $folder = substr($folder, 1);
}

operateOnFolders($path, $folder, $operacja);

function operateOnFolders($path, $folder, $operation) {
    if ($operation == "Read") {
        if (!is_dir($path . $folder)) {
            echo ("Wybrany folder nie istnieje");
             return 0;
        }
        $token = opendir($path . $folder);
        while (($file = readdir($token)) !== false) {
            if ($file == "." || $file == "..") {
                continue;
            }
            echo $file . "<br>";
        }
        closedir($token);
    }
    if ($operation == "Delete") {
        if (file_exists($path . $folder)) {
            $token = opendir($path . $folder);
            $fileexists = false;
            while (($file = readdir($token)) !== false) {
                if ($file == "." || $file == "..") {
                    continue;
                } else {
                    $fileexists = true;
                    break;
                }
            }
            if ($fileexists) {
                echo "W folderze znajduje się przynajmniej jeden plik, nie można go usunąć.";
            } else {
                if ($folder == "deleteme") {
                    rmdir($path . $folder);
                    echo "Usunięto folder: " . $path . $folder;
                } else {
                    echo "Nie można usunąć folderu: " . $path . $folder . "<br>";
                    echo "Dla bezpieczeństwa program usuwa wyłącznie folder o nazwie 'deleteme'";
                }
            }
            closedir($token);
        }
    }
    if ($operation == "Create") {
        if (!file_exists($path)) {
            echo "Wskazana ścieżka nie istnieje.";
        } else {
            if (file_exists($path . $folder)) {
                echo "Wskazany folder już istnieje.";
            }
            else {
                mkdir($path . $folder);
                echo "Folder: " . $folder . " został stworzony w miejscu: " . $path .$folder;
            }
        }
    }
}

