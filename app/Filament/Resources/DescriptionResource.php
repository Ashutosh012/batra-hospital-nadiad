<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DescriptionResource\Pages;
use App\Filament\Resources\DescriptionResource\RelationManagers;
use App\Models\Description;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DescriptionResource extends Resource
{
    protected static ?string $model = Description::class;

    protected static ?string $navigationGroup = 'Home Page Sections';

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

    public static function form(Form $form): Form
    {
        $number = count(Description::all());
        return $form
            ->schema([
                Forms\Components\TextInput::make('module_name')
                        ->label('Module Name')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('section_name', \Str::slug($state)))
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                Forms\Components\Textarea::make('module_description')
                        ->label('Module Description')
                        ->rows(2)
                        ->minLength(50)
                        ->maxLength(1000)
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                Forms\Components\FileUpload::make('banner')
                        ->label('Banner')
                        ->image()
                        ->maxSize(config('filament-blog.banner.maxSize', 5120))
                        ->disk(config('filament-blog.banner.disk', 'public'))
                        ->directory(config('filament-blog.banner.directory', 'services'))
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                Forms\Components\TextInput::make('section_name')
                        ->label('Section Name')
                        ->disabled()
                        ->required()
                        ->unique(Description::class, 'section_name', fn ($record) => $record),
                Forms\Components\TextInput::make('section_order')
                        ->label('Section Order')
                        ->numeric()
                        ->minValue(1)
                        ->maxValue(100)
                        ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('module_name')->label('Module Name')
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
            'index' => Pages\ListDescriptions::route('/'),
            'create' => Pages\CreateDescription::route('/create'),
            'edit' => Pages\EditDescription::route('/{record}/edit'),
        ];
    }    
}
