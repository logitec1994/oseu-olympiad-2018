<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/CRouter.php';
include_once 'application/models/CSettingsModel.php';
include_once 'application/core/TViewBase.php';
include_once 'application/core/fs.php';

class CSettings extends CControllerBase
{
    use TViewBase;
    private $model = null;

    function __construct($page)
    {
        $this->model = new CSettingsModel();
    }

    private function requestAuthorization()
    {
        $session = self::getCookie(ENGINE_SESSION_COOKIE_ID);
        if (!$this->model->isAuthorized($session))
        {
            CRouter::redirect("/authorization");
            exit();
        }
    }

    public function get($args)
    {
        $this->requestAuthorization();
        $user = $this->model->getUserByCookie(self::getCookie(ENGINE_SESSION_COOKIE_ID));

        $this->render("settings", array('user' => $user));
    }

    public function post($args)
    {
        $this->requestAuthorization();

        $update = $this->model->escape($_POST['update']);
        $email = $this->model->escape($_POST['email']);
        $firstName = $this->model->escape($_POST['firstname']);
        $lastName = $this->model->escape($_POST['lastname']);
        $patronymic = $this->model->escape($_POST['patronymic']);
        $password = $this->model->escape($_POST['password']);

        $year = $this->model->escape($_POST['year']);
        $month = $this->model->escape($_POST['month']);
        $day = $this->model->escape($_POST['day']);

        $items = array($update, $email, $firstName, $lastName, $patronymic, $password, $year, $month, $day);

        $filtered = array_filter($items, function ($item) {
            return empty($item);
        });

        $filtered = ($filtered && checkdate(intval($year), intval($month), intval($day)));


        if (!!$filtered)
        {
            setcookie("msg", "error,fields");
            CRouter::redirect('/settings');
            exit();
        }

        $user = $this->model->getUserByCookie(self::getCookie(ENGINE_SESSION_COOKIE_ID));

        if ($this->model->checkMailExists($email, $user->id))
        {
            setcookie("msg", "error,exists");
            CRouter::redirect('/settings');
            exit();
        }

        $birthDate = sprintf("%s-%s-%s", $year, $month, $day);


        if (!$this->model->update($user->id, $firstName, $lastName, $patronymic, $email, $password, $birthDate))
        {
            setcookie("msg", "error,update");
            CRouter::redirect('/settings');
            exit();
        }

        if (!fs::getError('avatar'))
        {
            setcookie("msg", "error,image");
            CRouter::redirect('/settings');
            exit();
        }

        if (!in_array(fs::getType('avatar'), array('image/jpg', 'image/png')))
        {
            setcookie("msg", "error,image-type");
            CRouter::redirect('/settings');
            exit();
        }

        $path = fs::getTempName('avatar');

        $imageLoadFunction = fs::getType('avatar') === 'image/png'
            ? 'imagecreatefrompng' : 'imagecreatefromjpeg';

        $im = $imageLoadFunction($path);

        $size = min(imagesx($im), imagesy($im));

        $cropped = imagecrop($im, array('x' => 0, 'y' => 0, 'width' => $size, 'height' => $size));

        if ($cropped !== FALSE) {
            $directory = ENGINE_FILE_UPLOAD_DIRECTORY;
            $img = "{$directory}/{$user->id}-av.png";

            if (!file_exists($directory))
            {
                mkdir($directory);
            }

            if (file_exists($img))
            {
                unlink($img);
            }

            $resized = imagecreatetruecolor(50, 50);
            imagecopyresampled($resized, $cropped, 0, 0, 0, 0, 50, 50, $size, $size);

            imagepng($resized, $img);
            imagedestroy($cropped);
            imagedestroy($resized);
        }

        imagedestroy($im);

        setcookie("msg", "ok,update");
        CRouter::redirect('/settings');
    }
}
