<?php

namespace App\Services;

class AeroSMS
{

    const URL_SMSAERO_API = 'gate.smsaero.ru';
    private $login = 'fisher_88@inbox.ru'; //Ваш логин
    private $password = 'OAnv1IHrnrbbcMI1w747wp65HIT';//'OAnv1IHrnrbbcMI1w747wp65HIT'; //Ваш пароль
    private $sign = 'NEWS'; //Подпись по умолчанию

    public function __construct($login = false, $password =false, $sign = false)
    {
        if ($login) {
            $this->login = $login;
        }
        if ($password) {
            $this->password = $password;
        }
        if ($sign) {
            $this->sign = $sign;
        }
    }

    /**
     * Формирование curl запроса
     * @param $url
     * @param $post
     * @param $options
     * @return mixed
     */

    private static function curl_post($url, array $post = null, array $options = array())
    {
        $defaults = array(
            CURLOPT_POST => 1, //Отправка данных post
            CURLOPT_HEADER => 0,
            CURLOPT_URL => $url,  //url
            CURLOPT_FRESH_CONNECT => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FORBID_REUSE => 1,
            CURLOPT_TIMEOUT => 10, //максимальное время выполнения
            CURLOPT_POSTFIELDS => http_build_query($post) //$_POST данные
        );

        $ch = curl_init();
        curl_setopt_array($ch, ($options + $defaults));
        if (!$result = curl_exec($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }

    /**
     * Отправка одного сообщения
     * @param $to - номер получателя
     * @param $text - текст сообщения
     * @param $date - время рассылки в unixtime
     * @param $digital - 0-прямой канал, 1-цифровой
     * @param $type - тип отправки (читать документацию по api для типов)
     * @return array(response)
     */

    public function send($to, $text, $date = false, $digital = 0, $type = 2)
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/send/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'to' => $to,
                        'text' => $text,
                        'from' => $this->sign,
                        'date' => $date,
                        'digital' => $digital,
                        'type' => $type,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Отправка по группам
     * @param $group - название группы контактов
     * @param $text - текст сообщения
     * @param $digital - 0-прямой канал, 1-цифровой
     * @param $type - тип отправки (читать документацию по api для типов)
     * @return array(response)
     */

    public function sendtogroup($group, $text, $digital = 0, $type = 2)
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/sendtogroup/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'text' => $text,
                        'from' => $this->sign,
                        'group' => $group,
                        'digital' => $digital,
                        'type' => $type,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Статус отправленного сообщения
     * @param $id - идентификатор сообщения
     * @return array(response)
     */

    public function status($id)
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/status/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'id' => $id,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Статус рассылки по группам
     * @param $id - идентификатор сообщения
     * @return array(response)
     */

    public function checksending($id)
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/checksending/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'id' => $id,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Запрос баланса
     * @return array(response)
     */

    public function balance()
    {
        $response =  json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/balance/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'answer' => 'json'
                    ]
                ), true
            );


        return $response['balance'];

    }

    /**
     * Запрос тарифа
     * @return array(response)
     */

    public function checktarif()
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/checktarif/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Список доступных подписей
     * @return array(response)
     */

    public function senders()
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/senders/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Запрос новой подписи
     * @param $sign - запрашиваемая подпись
     * @return array(response)
     */

    public function sign($sign)
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/sign/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'sign' => $sign,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Список существующих групп
     * @return array(response)
     */

    public function checkgroup()
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/checkgroup/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Добавление новой группы
     * @param $group - название группы
     * @return array(response)
     */

    public function addgroup($group)
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/addgroup/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'group' => $group,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Удаление группы
     * @param $group - название группы
     * @return array(response)
     */

    public function delgroup($group)
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/delgroup/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'group' => $group,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Добавление контактов
     * @param $phone - Номер абонента
     * @param $group - Название группы (для добавления номера в группу)
     * @param string $lname - Фамилия абонента
     * @param string $fname - Имя абонента
     * @param string $sname - Отчество абонента
     * @param string $bday - Дата рождения абонента
     * @param string $param - Свободный параметр
     * @return array(response)
     */

    public function addphone($phone, $group = false, $lname = '', $fname = '', $sname = '', $bday = '', $param = '')
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/addphone/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'phone' => $phone,
                        'group' => $group,
                        'lname' => $lname,
                        'fname' => $fname,
                        'sname' => $sname,
                        'bday' => $bday,
                        'param' => $param,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Удаление контактов
     * @param $phone - Номер абонента
     * @param $group - Название группы (для добавления номера в группу)
     * @param string $lname - Фамилия абонента
     * @param string $fname - Имя абонента
     * @param string $sname - Отчество абонента
     * @param string $bday - Дата рождения абонента
     * @param string $param - Свободный параметр
     * @return array(response)
     */

    public function delphone($phone, $group = false, $lname = '', $fname = '', $sname = '', $bday = '', $param = '')
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/delphone/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'phone' => $phone,
                        'group' => $group,
                        'lname' => $lname,
                        'fname' => $fname,
                        'sname' => $sname,
                        'bday' => $bday,
                        'param' => $param,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }

    /**
     * Добавление в черных список
     * @param $phone - Номер абонента
     * @return array(response)
     */

    public function addblacklist($phone)
    {
        return [
            'response' => json_decode(
                self::curl_post(self::URL_SMSAERO_API . '/addblacklist/',
                    [
                        'user' => $this->login,
                        'password' => $this->password,
                        'phone' => $phone,
                        'answer' => 'json'
                    ]
                ), true
            )
        ];
    }
}