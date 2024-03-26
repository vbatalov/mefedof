<?php

namespace App\Traits;


use JetBrains\PhpStorm\ArrayShape;

trait TelegramBotButtonTrait
{
    use TelegramBotDataBuilderTrait;


    #[ArrayShape(['text' => "string", 'callback_data' => "string"])]
    public function registerButton(): array
    {
        return ['text' => 'Зарегистрироваться', 'callback_data' => $this->build(action: "register")];
    }

    #[ArrayShape(['text' => "string", 'callback_data' => "string"])]
    public function howItWorkButton(): array
    {
        return ['text' => 'Как это работает?', 'callback_data' => $this->build(action: "howItWork")];
    }

    #[ArrayShape(['text' => "string", 'request_contact' => "bool"])]
    public function sendPhone(): array
    {
        return ['text' => 'Отправить телефон', 'request_contact' => true];
    }

    #[ArrayShape(['text' => "string", 'callback_data' => "string"])]
    public function confirmEmail($email): array
    {
        return ['text' => 'Подтверждаю', 'callback_data' => $this->build(action: "_requestEmailUserConfirm", data: $email)];

    }
}