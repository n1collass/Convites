<?php

namespace App\Filament\Resources\Invites\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class InviteInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detalhes do Convite')
                    ->description('Código identificador, nome e descrição do convite')
                    ->icon(Heroicon::Sparkles)
                    ->schema([
                        TextEntry::make('code')
                            ->label('Código'),
                        TextEntry::make('name')
                            ->label('Nome'),
                        TextEntry::make('desc')
                            ->label('Descrição'),
                ]),
                Section::make('Compartilhamento')
                    ->description('Compartilhe o convite e tenha acesso as confirmações')
                    ->icon(Heroicon::Share)
                    ->schema([
                        TextEntry::make('code')
                            ->formatStateUsing(fn (string $state): string => __(url(route('invites.show', ['code' => $state]))))
                            ->copyable()
                            ->copyMessage('Link copiado!')
                            ->label('Link para os convidados'),
                        TextEntry::make('code')
                            ->formatStateUsing(fn (string $state): string => __(url(route('invites.manage', ['code' => $state]))))
                            ->copyable()
                            ->copyMessage('Link copiado!')
                            ->label('Link para os anfitriões (ver confirmações)'),
                ]),
            ]);
    }
}
