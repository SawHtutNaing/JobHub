<?php

namespace App\Filament\Resources\ShowJobStaticResource\Pages;

use App\Filament\Resources\ShowJobStaticResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowJobStatics extends ListRecords
{
    protected static string $resource = ShowJobStaticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
