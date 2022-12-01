<?php


namespace App\Repositories;

use App\Repositories\Discord\DiscordRepository;

class AuthRepository
{

    private $notificator;
    public function __construct(DiscordRepository $notificator)
    {
        $this->notificator = $notificator;
    }

    public function register($data)
    {
        $notificationData = [
            "title" => "Lead prospectado!",
            "description" => "Um novo Lead enviou um cadastro!",
            "data" => [
                "name" => $data['name'],
                "email" => $data['email'],
                "phone" => $data['phone']
                ]
            ];

            try{
                $this->notificator->SendNotification($notificationData);
                return "Notification has ben sended";
            }catch(\Exception $e){
                return $e;
            }
    }
}
