<?php

namespace App\Filament\Resources\Invites\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Auth;

class InviteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Detalhes do Convite')
                    ->description('Coloque aqui o nome e descrição do evento')
                    ->icon(Heroicon::Sparkles)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Nome do Convite'),
                        TextInput::make('desc')
                            ->required()
                            ->label('Descrição do Convite'),
                    ]),

                Section::make('Senha de Acesso')
                    ->description('Essa senha será usada para acessar as confirmações do convite')
                    ->icon(Heroicon::LockClosed)
                    ->schema([
                        TextInput::make('password')
                            ->label('Senha de Acesso')
                            ->password(),
                ]),

            ]);
    }
}
