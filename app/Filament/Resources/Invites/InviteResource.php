<?php

namespace App\Filament\Resources\Invites;

use BackedEnum;
use App\Models\Invite;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Invites\Pages\EditInvite;
use App\Filament\Resources\Invites\Pages\ViewInvite;
use App\Filament\Resources\Invites\Pages\ListInvites;
use App\Filament\Resources\Invites\Pages\CreateInvite;
use App\Filament\Resources\Invites\Schemas\InviteForm;
use App\Filament\Resources\Invites\Tables\InvitesTable;
use App\Filament\Resources\Invites\Schemas\InviteInfolist;
use App\Filament\Clusters\Products\Resources\Products\Widgets\InviteStats;

class InviteResource extends Resource
{
    protected static ?string $model = Invite::class;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::id());
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Convites';
    protected static ?string $slug = '/convites';
    protected static ?string $label = 'Convite';
    protected static ?string $navigationLabel = 'Convites';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getWidgets(): array
    {
        return [
            InviteStats::class,
        ];
    }

    public static function form(Schema $schema): Schema
    {
        return InviteForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InviteInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InvitesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInvites::route('/'),
            'create' => CreateInvite::route('/criar'),
            'view' => ViewInvite::route('/{record}'),
            'edit' => EditInvite::route('/{record}/editar'),
        ];
    }
}
