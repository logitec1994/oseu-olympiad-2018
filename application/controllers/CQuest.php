<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';
include_once 'application/core/CRouter.php';
include_once 'application/models/CQuestModel.php';
include_once 'application/core/fs.php';



class CQuest extends CControllerBase
{
    use TViewBase;
    static private $font = "static/resources/fonts/Roboto-Regular.ttf";
    private $model = null;

    function __construct($page)
    {
        $this->model = new CQuestModel();
    }


    static private function getUserImage($uiid)
    {
        $default = 'static/resources/images/user.png';
        $custom = "uploaded/{$uiid}-av.png";
        return file_exists($custom) ? $custom : $default;
    }

    static private function createPassportImage($user)
    {
        $im = imagecreatetruecolor(200, 200);
        $paper = imagecolorallocate($im, 0xE9, 0xEA, 0xD6);
        $black = imagecolorallocate($im, 0x00, 0x00, 0x00);
        $blue = imagecolorallocate($im, 0x00, 0x00, 0xFF);
        imagefilledrectangle($im, 0, 0, 200, 200, $paper);
        imagecopyresampled($im, imagecreatefrompng(self::getUserImage($user->id)), 75, 30, 0, 0, 50, 50, 50, 50);
        imagefttext($im, 15, 0, 50, 20,  $black, self::$font, 'ПАСПОРТ ');
        imagefttext($im, 10, 0, 10, 100, $black, self::$font, "Фамилия: {$user->lastname}");
        imagefttext($im, 10, 0, 10, 120, $black, self::$font, "Имя: {$user->firstname}");
        imagefttext($im, 10, 0, 10, 140, $black, self::$font, "Отчество: {$user->patronymic}");
        imagefttext($im, 10, 0, 10, 160, $black, self::$font, "Дата рождения: {$user->birthdate}");
        imageellipse($im ,150,150,80,80, $blue);
        imageellipse($im ,150,150,70,70, $blue);
        imagefttext($im, 10, 20, 140, 160, $blue, self::$font, "МП");
        imagepng($im, "uploaded/{$user->id}.passport.png");
        imagedestroy($im);
    }

    static private function createMilitaryID($user)
    {
        $userImage = imagecreatefrompng(self::getUserImage($user->id));
        $im = imagecreatetruecolor(200, 200);
        $paper = imagecolorallocate($im, 0xE9, 0xE9, 0xE9);
        $black = imagecolorallocate($im, 0x00, 0x00, 0x00);
        $blue = imagecolorallocate($im, 0x00, 0x00, 0xFF);
        imagefilledrectangle($im, 0, 0, 200, 200, $paper);
        imagecopyresampled($im, imagecreatefrompng(self::getUserImage($user->id)), 10, 10, 0, 0, 30, 30, 50, 50);
        imagefttext($im, 10, 0, 50, 35,  $black, self::$font, 'ВОЕННЫЙ БИЛЕТ');
        imagefttext($im, 10, 0, 10, 100, $black, self::$font, "Фамилия: {$user->lastname}");
        imagefttext($im, 10, 0, 10, 120, $black, self::$font, "Имя: {$user->firstname}");
        imagefttext($im, 10, 0, 10, 140, $black, self::$font, "Отчество: {$user->patronymic}");
        imagefttext($im, 10, 0, 10, 160, $black, self::$font, "Дата рождения: {$user->birthdate}");
        imageellipse($im ,150,150,80,80, $blue);
        imageellipse($im ,150,150,70,70, $blue);
        imagefttext($im, 10, 20, 140, 160, $blue, self::$font, "МП");
        imagepng($im, "uploaded/{$user->id}.military-id.png");
        imagedestroy($im);
    }

    static private function createExaminationTicket($user)
    {
        $userImage = imagecreatefrompng(self::getUserImage($user->id));
        $im = imagecreatetruecolor(200, 200);
        $paper = imagecolorallocate($im, 0xE9, 0xFF, 0xE9);
        $black = imagecolorallocate($im, 0x00, 0x00, 0x00);
        $blue = imagecolorallocate($im, 0x00, 0x00, 0xFF);
        imagefilledrectangle($im, 0, 0, 200, 200, $paper);
        imagecopyresampled($im, imagecreatefrompng(self::getUserImage($user->id)), 160, 160, 0, 0, 30, 30, 50, 50);
        imagefttext($im, 10, 0, 5,  25,  $black, self::$font, 'ЕКЗАМИНАЦИОННЫЙ БИЛЕТ');
        imagefttext($im, 10, 0, 10, 100, $black, self::$font, "Фамилия: {$user->lastname}");
        imagefttext($im, 10, 0, 10, 120, $black, self::$font, "Имя: {$user->firstname}");
        imagefttext($im, 10, 0, 10, 140, $black, self::$font, "Отчество: {$user->patronymic}");
        imagefttext($im, 10, 0, 10, 160, $black, self::$font, "Дата рождения: {$user->birthdate}");
        imageellipse($im ,150,150,80,80, $blue);
        imageellipse($im ,150,150,70,70, $blue);
        imagefttext($im, 10, 20, 140, 160, $blue, self::$font, "МП");
        imagepng($im, "uploaded/{$user->id}.examination-ticket.png");
        imagedestroy($im);
    }

    static private function createEnglishCertificate($user)
    {
        $userImage = imagecreatefrompng(self::getUserImage($user->id));
        $im = imagecreatetruecolor(200, 200);
        $paper = imagecolorallocate($im, 0xE9, 0xE9, 0xFF);
        $black = imagecolorallocate($im, 0x00, 0x00, 0x00);
        $blue = imagecolorallocate($im, 0x00, 0x00, 0xFF);
        imagefilledrectangle($im, 0, 0, 200, 200, $paper);
        imagecopyresampled($im, imagecreatefrompng(self::getUserImage($user->id)), 160, 10, 0, 0, 30, 30, 50, 50);
        imagefttext($im, 10, 0, 5,  25,  $black, self::$font, 'English Certificate');
        imagefttext($im, 10, 0, 10, 100, $black, self::$font, "Lastname: {$user->lastname}");
        imagefttext($im, 10, 0, 10, 120, $black, self::$font, "Firstname: {$user->firstname}");
        imagefttext($im, 10, 0, 10, 140, $black, self::$font, "Birth date: {$user->birthdate}");
        imageellipse($im ,150,150,80,80, $blue);
        imageellipse($im ,150,150,70,70, $blue);
        imagefttext($im, 10, 20, 140, 160, $blue, self::$font, "XX");
        imagepng($im, "uploaded/{$user->id}.english-certificate.png");
        imagedestroy($im);
    }

    public function get($args)
    {
        $event = intval($args[0]);
        $eventQuest = intval($args[1]);

        $user = $this->model->getUserByCookie(self::getCookie(ENGINE_SESSION_COOKIE_ID));

        call_user_func_array(
            array($this, "getEvent{$event}Quest{$eventQuest}"),
            array(&$user)
        );
    }

    public function getEvent1Quest1($user)
    {
        $this->render("quests/1/1");
    }

    public function getEvent1Quest2($user)
    {
        $this->render("quests/1/2");
    }

    public function getEvent1Quest3($user)
    {
        self::createPassportImage($user);
        self::createMilitaryID($user);
        self::createExaminationTicket($user);
        self::createEnglishCertificate($user);

        $this->render("quests/1/3", array('user' => $user));
    }

    public function post($args)
    {
    }
}
