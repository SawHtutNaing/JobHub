<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowJobStaticResource\Pages;
use App\Filament\Resources\ShowJobStaticResource\RelationManagers;
use App\Models\ShowJobStatic;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class ShowJobStaticResource extends Resource
{
    protected static ?string $model = ShowJobStatic::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                TextInput::make('content'),
                TextInput::make('jobs_count')->numeric(),
                FileUpload::make('logo')
                    ->directory('static_logo'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('content'),
                TextColumn::make('jobs_count')->numeric(),
                ImageColumn::make('logo')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListShowJobStatics::route('/'),
            'create' => Pages\CreateShowJobStatic::route('/create'),
            'edit' => Pages\EditShowJobStatic::route('/{record}/edit'),
        ];
    }
}
