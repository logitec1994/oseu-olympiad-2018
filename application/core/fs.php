<?php


define("ENGINE_FILE_UPLOAD_DIRECTORY", "uploaded");


class fs
{
    static public function mvFromTemp($name, $to)
    {
        if (!file_exists(ENGINE_FILE_UPLOAD_DIRECTORY)) {
            mkdir(ENGINE_FILE_UPLOAD_DIRECTORY);
        }

        $newPath = sprintf("%s/%s", ENGINE_FILE_UPLOAD_DIRECTORY, $to);

        if (file_exists($newPath)) {
            unlink($newPath);
        }

        return move_uploaded_file(fs::getTempName($name), $newPath);
    }

    static public function getType($name)
    {
        return $_FILES[$name]["type"];
    }

    static public function getName($name)
    {
        return $_FILES[$name]["name"];
    }

    static public function getTempName($name)
    {
        return $_FILES[$name]["tmp_name"];
    }

    static public function getSize($name)
    {
        return $_FILES[$name]["size"];
    }

    static public function getError($name)
    {
        return $_FILES[$name]["error"];
    }
}
