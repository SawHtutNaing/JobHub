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
use Filament\Forms\Get;
use Filament\Forms\Set;
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
                // ->dehydrateStateUsing(function ($state) {
                //     $key = array_keys($state)[0];
                //     return explode('/', $state[$key])[1];
                // })

                // ->afterStateHydrated(function ($component, $state) {
                //     $imagePath = asset('images/' . $state);

                //     // $imagePath = asset('images/' . $get('company_logoPath'));

                //     // $set('company_logoPath', $imagePath);

                //     // dd(asset('images') . '/' . $state);
                //     // dd($component->state([asset('images') . '/' . $state]));

                //     // // return $state = ['https://media.istockphoto.com/id/1491857076/photo/tree-light-bulb-glowing-hold-in-hand-on-blue-background-concept-of-saving-electricity.webp?s=1024x1024&w=is&k=20&c=Pc8fAuBVEmepq4glK2-c3lbhZj1eZ1-40gh-tg1RO_k='];
                //     // return $component->state([asset('images') . '/' . $state]);


                //     // Check if the file exists


                //     $component->state($imagePath);
                //     // dd($component);
                // })
                // ->afterStateHydrated(fn ($component) => $component->callAfterStateUpdated())
                ,
                FileUpload::make('job_imagePath')
                    ->directory('images')
                // ->dehydrateStateUsing(function ($state) {
                //     $key = array_keys($state)[0];
                //     // dd(explode('/', $state[$key])[1]);
                //     return explode('/', $state[$key])[1];
                // })

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
                TextColumn::make('owner.name')
                    ->getStateUsing(function ($record) {
                        return $record->owner->name;
                    }),
                TextColumn::make('category'),
                TextColumn::make('subCategories'),
                TextColumn::make('qualifications'),
                TextColumn::make('companyName'),
                TextColumn::make('description'),
                TextColumn::make('employmentType'),
                TextColumn::make('salary'),
                TextColumn::make('date'),
                TextColumn::make('location'),

                ImageColumn::make('company_logoPath')->label("Company Photo")

                // ->getStateUsing(function ($record) {
                //     // dd(asset('images') . '/' . $record->company_logoPath);

                //     return   asset('images') . '/' . $record->company_logoPath;
                // })
                ,
                ImageColumn::make('job_imagePath')->label("Job Photo")
                // ->getStateUsing(function ($record) {
                //     return   asset('images') . '/' . $record->job_imagePath;
                // })
                ,


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
