<?php

namespace App\Filament\Resources\Invites\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Invites\InviteResource;
use Filament\Pages\Concerns\ExposesTableToWidgets;

class ListInvites extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = InviteResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return InviteResource::getWidgets();
    }
}
