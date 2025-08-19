<?php

namespace App\Filament\Clusters\Products\Resources\Products\Widgets;

use App\Filament\Resources\Invites\Pages\ListInvites;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InviteStats extends BaseWidget
{
    use InteractsWithPageTable;

    protected ?string $pollingInterval = null;

    protected function getTablePage(): string
    {
        return ListInvites::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Convites Totais', $this->getPageTableQuery()->count()),
            Stat::make('Limite de Convites', '2'),
        ];
    }
}
