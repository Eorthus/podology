<?php
namespace app\controllers;

use app\models\db\Companys;
use app\models\Encryption;
use app\models\LoginForm;
use app\models\projectmail\ProjectMailer;
use app\models\User;
use Yii;
use yii\web\Controller;

class AjaxController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        exit;
    }

    /**
     * Обработчик авторизации
     *
     * @return bool|string
     */
    public function actionLogin()
    {
        if ($_GET['login']) {
            $login = htmlspecialchars($_GET['login']);
        } else {
            return 'err_login';
        }
        if ($_GET['pass']) {
            $pass = htmlspecialchars($_GET['pass']);
        } else {
            return 'err_pass';
        }
        // получаем логин и пароль, проверяем, авторизируем, если все ок
        $login_form = new LoginForm;
        $login_form->load(Yii::$app->request->get());
        $login_form->username = $login;
        $login_form->password = $pass;
        if ($login_form->login()) {
            return true;
        }

        return 'wrong_pass';
    }

    /**
     * Проверка, зарегистрирован ли уже такой аккаунт
     *
     * @param $u_name
     *
     * @return bool
     */
    private static function checkUserName($u_name): bool
    {
        $user = User::find()
            ->where(['email' => $u_name])
            ->one();
        if ($user) {
            return true;
        }

        return false;
    }

    /**
     * Проверка, является ли введенный логин почтой
     *
     * @param $u_name
     *
     * @return bool
     */
    private static function userNameIsMail($u_name): bool
    {
        if (preg_match("/[0-9a-z]+@[a-z]/", $u_name)) {
            return true;
        }

        return false;
    }
}