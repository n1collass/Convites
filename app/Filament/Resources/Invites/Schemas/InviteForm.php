<?php

namespace App\Filament\Resources\Invites\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class InviteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label('Nome do Convite'),
                TextInput::make('desc')
                    ->required()
                    ->label('Descrição do Convite'),
                FileUpload::make('assets')
                    ->visibility('public')
                    ->multiple(),
            ]);
    }
}
