<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Faker\Provider\ar_EG\Text;
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
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Facades\Auth;

class JobResource extends Resource
{

    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')
                    ->afterStateHydrated(function (TextInput $component) {
                        $user = Auth::user();

                        $component->state($user->id);
                    }),
                TextInput::make('name'),
                TextInput::make('category'),
                TextInput::make('subCategories'),
                TextInput::make('qualifications'),
                TextInput::make('companyName'),
                TextInput::make('description'),

                TextInput::make('employmentType'),
                TextInput::make('salary'),
                DatePicker::make('date'),
                TextInput::make('location'),
                FileUpload::make('company_logoPath')
                    ->directory('images')
                    // // ->image()
                    ->dehydrateStateUsing(function ($state) {
                        $key = array_keys($state)[0];
                        $store = asset('images/' . $state[$key]);

                        return $store;
                    })
                // ->afterStateHydrated(function ($state) {

                //     return [];
                // })
                ,
                FileUpload::make('job_imagePath')
                    ->directory('images')

                //     ->image()
                //     ->afterStateHydrated(function (FileUpload $component) {
                //         $component->state('');
                //     })




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('category'),
                TextColumn::make('subCategories'),
                TextColumn::make('qualifications'),
                TextColumn::make('companyName'),
                TextColumn::make('description'),
                TextColumn::make('employmentType'),
                TextColumn::make('salary'),
                TextColumn::make('date'),
                TextColumn::make('location'),
                ImageColumn::make('company_logoPath')
                    ->getStateUsing(function ($record) {
                        return asset('images') . '/' . $record->company_logoPath;
                    }),
                ImageColumn::make('job_imagePath')
                    ->getStateUsing(function ($record) {
                        return asset('images') . '/' . $record->job_imagePath;
                    }),


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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
