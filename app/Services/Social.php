<?php namespace App\Services;

use App\Models\Options;
use App\Models\Sites;
use Facebook\FacebookRequest;
use Facebook\FacebookSession;
use Session;

class Social
{

    public $descript;
    public $tag;
    public $image;
    public $name;
    public $type;
    public $url;
    public $siteId;

    public function __construct(array $construct)
    {
        $this->siteId = Session::get('website');
        $this->url = Sites::find($this->siteId)->first()->domen;
        $this->name = is_null($construct['name']) ? null : $construct['name'];
        $this->image = is_null($construct['image']) ? null : $construct['image'];
        $this->tag = is_null($construct['tag']) ? null : $construct['tag'];
        $this->descript = is_null($construct['descript']) ? null : $construct['descript'];
        $this->type = is_null($construct['type']) ? null : $construct['type'];
    }


    public function pushAll()
    {
        $this->pushVK();
        // $this->pushFB();
    }


    public function pushVK()
    {
        $vkToken = Options::select('value')->whereRaw('ids = ? and module=? ',
            [Session::get('website'), 'vk-token'])->first();
        $vkGroup = Options::select('value')->whereRaw('ids = ? and module=? ',
            [Session::get('website'), 'vk-group'])->first();

        if (!is_null($vkGroup) && !is_null($vkToken)) {
            $tagArraySend = explode(",", $this->tag);  // Делаем теги
            $ImageSend = public_path($this->image);

            $vkAPI = new VK(['access_token' => $vkToken->value]);
            $vkAPI->postToPublic(
                $vkGroup->value, //Группа
                $this->descript, //Текст
                $ImageSend, // Изображение
                $tagArraySend // Теги
            );
        }
    }

    public function pushFB()
    {
        $APP_ID = Options::select('value')->whereRaw('ids = ? and module=? ',
            [Session::get('website'), 'fb-app-id'])->first();
        $APP_SECRET = Options::select('value')->whereRaw('ids = ? and module=? ',
            [Session::get('website'), 'fb-app-secret'])->first();
        $TOKEN = Options::select('value')->whereRaw('ids = ? and module=? ',
            [Session::get('website'), 'fb-token'])->first();
        $ID = Options::select('value')->whereRaw('ids = ? and module=? ', [Session::get('website'), 'fb-id'])->first();

        $TOKEN->value = 'CAAXy3dCq85kBAHcgC2OWOWQp9qiUdRAfAH6Xz2d9c0M4NHY3SyZAiEO1zldDzIPsxv4ehUwDVBA7em5FT5oyEGgZC2hNNnTmLsF56PUZAJSmPF9VZCUnleUCyyizHPZCjEPZBJiVGxWx9MIBceT4LWdP5om0zQGhu6oI2OyZBwOQZClbfaw1ZBPEQhdkVz0BmgaLiBf9Fn7Pyz15nPhcBSYQh0iAZBl3JXh2EZD';


        if (!is_null($APP_ID) && !is_null($APP_SECRET) && !is_null($TOKEN) && !is_null($ID)) {
            FacebookSession::setDefaultApplication($APP_ID->value, $APP_SECRET->value);
            FacebookSession::enableAppSecretProof(false);
            $session = new FacebookSession($TOKEN->value);
            $params = array(
                "message" => $this->descript,
                //"link" => "http://octavian48.ru/",
                "picture" => 'http://' . $this->url . '/' . $this->image,
                "name" => $this->name,
                "caption" => "http://octavian48.ru/",
                "description" => $this->tag
            );

            if ($session) {
                $response = (new FacebookRequest(
                    $session, 'POST', '/' . $ID->value . '/feed', $params
                ))->execute()->getGraphObject();
            }
        }
    }
}
