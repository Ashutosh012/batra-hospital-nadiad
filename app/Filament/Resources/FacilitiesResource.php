<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacilitiesResource\Pages;
use App\Filament\Resources\FacilitiesResource\RelationManagers;
use App\Models\Facilities;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FacilitiesResource extends Resource
{
    protected static ?string $model = Facilities::class;

    protected static ?string $navigationGroup = 'Home Page Sections';

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Service Name')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Str::slug($state))),
                    Forms\Components\TextInput::make('slug')
                        ->label('Slug')
                        ->disabled()
                        ->required()
                        ->unique(Facilities::class, 'slug', fn ($record) => $record),
                    Forms\Components\Textarea::make('short_description')
                        ->label('Short Description')
                        ->rows(2)
                        ->required()
                        ->minLength(50)
                        ->maxLength(1000)
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                    Forms\Components\FileUpload::make('banner')
                        ->label('Icons')
                        ->image()
                        ->required()
                        ->maxSize(config('filament-blog.banner.maxSize', 5120))
                        ->disk(config('filament-blog.banner.disk', 'public'))
                        ->directory(config('filament-blog.banner.directory', 'services'))
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                    Forms\Components\TextInput::make('order')
                        ->label('Order')
                        ->numeric()
                        ->minValue(1)
                        ->maxValue(3)
                        ->required()

                ])
                ->columns([
                    'sm' => 2,
                ])
                ->columnSpan(2)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name of Facility'),
                Tables\Columns\ImageColumn::make('banner')->width(50)->height(50),
                Tables\Columns\TextColumn::make('order')->label('Facility Order')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFacilities::route('/'),
            'create' => Pages\CreateFacilities::route('/create'),
            'edit' => Pages\EditFacilities::route('/{record}/edit'),
        ];
    }    
}
