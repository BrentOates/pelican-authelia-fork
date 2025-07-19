<?php

namespace App\Extensions\OAuth\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Illuminate\Foundation\Application;
use SocialiteProviders\Authelia\Provider;

final class AutheliaSchema extends OAuthSchema
{
    public function getId(): string
    {
        return 'authelia';
    }

    public function getSocialiteProvider(): string
    {
        return Provider::class;
    }

    public function getServiceConfig(): array
    {
        return [
            'base_url' => env('OAUTH_AUTHELIA_BASE_URL'),
            'client_id' => env('OAUTH_AUTHELIA_CLIENT_ID'),
            'client_secret' => env('OAUTH_AUTHELIA_CLIENT_SECRET'),
        ];
    }

    public function getSettingsForm(): array
    {
        return array_merge(parent::getSettingsForm(), [
            TextInput::make('OAUTH_AUTHELIA_BASE_URL')
                ->label('Base URL')
                ->placeholder('Base URL')
                ->columnSpan(2)
                ->required()
                ->url()
                ->autocomplete(false)
                ->default(env('OAUTH_AUTHELIA_BASE_URL')),
            TextInput::make('OAUTH_AUTHELIA_DISPLAY_NAME')
                ->label('Display Name')
                ->placeholder('Display Name')
                ->autocomplete(false)
                ->default(env('OAUTH_AUTHELIA_DISPLAY_NAME', 'Authelia')),
            ColorPicker::make('OAUTH_AUTHELIA_DISPLAY_COLOR')
                ->label('Display Color')
                ->placeholder('#b2c6fe')
                ->default(env('OAUTH_AUTHELIA_DISPLAY_COLOR', '#b2c6fe'))
                ->hex(),
        ]);
    }

    public function getName(): string
    {
        return env('OAUTH_AUTHELIA_DISPLAY_NAME', 'Authelia');
    }

    public function getHexColor(): string
    {
        return env('OAUTH_AUTHELIA_DISPLAY_COLOR', '#b2c6fe');
    }
}