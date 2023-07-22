<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurservicesResource\Pages;
use App\Filament\Resources\OurservicesResource\RelationManagers;
use App\Models\Ourservices;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurservicesResource extends Resource
{
    protected static ?string $model = Ourservices::class;

    protected static ?string $navigationGroup = 'Our Services';

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

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
                        ->unique(Ourservices::class, 'slug', fn ($record) => $record),
                    Forms\Components\Textarea::make('excerpt')
                        ->label('Excerpt')
                        ->rows(2)
                        ->minLength(50)
                        ->maxLength(1000)
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                    Forms\Components\FileUpload::make('banner')
                        ->label('Icons')
                        ->image()
                        ->maxSize(config('filament-blog.banner.maxSize', 5120))
                        ->disk(config('filament-blog.banner.disk', 'public'))
                        ->directory(config('filament-blog.banner.directory', 'services'))
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                    Forms\Components\MarkdownEditor::make('content')
                        ->label(__('filament-blog::filament-blog.content'))
                        ->required()
                        ->columnSpan([
                            'sm' => 2,
                        ])
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
                Tables\Columns\TextColumn::make('name')->label('Name of Service'),
                Tables\Columns\ImageColumn::make('banner')->width(50)->height(50)
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
            'index' => Pages\ListOurservices::route('/'),
            'create' => Pages\CreateOurservices::route('/create'),
            'edit' => Pages\EditOurservices::route('/{record}/edit'),
        ];
    }    
}
