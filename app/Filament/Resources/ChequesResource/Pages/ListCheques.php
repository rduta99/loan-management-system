<?php

namespace App\Filament\Resources\ChequesResource\Pages;

use App\Filament\Resources\ChequesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCheques extends ListRecords
{
    protected static string $resource = ChequesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
