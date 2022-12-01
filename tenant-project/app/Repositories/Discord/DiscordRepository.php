<?php

namespace App\Repositories\Discord;

use Illuminate\Support\Facades\Http;
use App\Repositories\Validations\DiscordValidation;

class DiscordRepository
{

    private $validator;
    public function __construct(DiscordValidation $validator)
    {
        $this->validator = $validator;
    }

    public function SendNotification($data)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $validation = $this->validator->DiscordNoificationValidation($data);

        if ($validation['error'] == true) {
            return response()->json($validation);
        }
        $date = date("Y-m-d");
        return Http::post('https://discord.com/api/webhooks/1047636669769199616/oWOr4iusmWtqzaQAQCuZ7hN0-t4ZX0BlOFzWeZrmt3UI8cDn9n4QxyaJUB0zOgZSJAng', [
            'content' => "@everyone",
            // 'tts' => true,
            'embeds' => [
                [
                    // Set the title for your embed
                    "title" => $data['title'],

                    // The type of your embed, will ALWAYS be "rich"
                    "type" => "rich",

                    // A description for your embed
                    "description" => $data['description'],

                    /* A timestamp to be displayed below the embed, IE for when an an article was posted
                 * This must be formatted as ISO8601
                 */
                    // "timestamp" => "2018-03-10",
                    "timestamp" => "",

                    // The integer color to be used on the left side of the embed
                    "color" => hexdec("32CD32"),

                    // Footer object
                    "footer" => [
                        "text" => "CronoDesk TM",
                        "icon_url" => ""
                    ],

                    // Image object
                    "image" => [
                        "url" => "https://raw.githubusercontent.com/Gahznt/cronos-invest/main/Cronos.jpg?token=GHSAT0AAAAAABZKDFOPAJVFVMSR7XAZLFI6Y4H4J2A"
                    ],

                    // Thumbnail object
                    "thumbnail" => [
                        "url" => ""
                    ],

                    // Field array of objects
                    "fields" => [
                        // Field 1
                        [
                            "name" => "Nome do Cliente",
                            "value" => $data["data"]["name"],
                            "inline" => true
                        ],
                        // Field 2
                        [
                            "name" => "Email",
                            "value" => $data["data"]["email"],
                            "inline" => true
                        ],
                        // Field 3
                        [
                            "name" => "Telefone",
                            "value" => $data["data"]["phone"],
                            "inline" => true
                        ]
                    ]
                ]
            ]
        ]);
    }
}
