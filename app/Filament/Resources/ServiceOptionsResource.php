<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceOptionsResource\Pages;
use App\Filament\Resources\ServiceOptionsResource\RelationManagers;
use App\Models\ServiceOptions;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceOptionsResource extends Resource
{
    protected static ?string $model = ServiceOptions::class;

    protected static ?string $navigationGroup = 'Sections';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function(\Closure $set, $state){
                        $set('slug', \Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')->required(),
                Forms\Components\FileUpload::make('icon'),
                Forms\Components\MarkdownEditor::make('description')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->label('Services'),
                //Tables\Columns\ImageColumn::make('icon')->width(50)->height(50)->visibility('public'),
            ])
            ->defaultSort('title', 'desc')
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
            'index' => Pages\ListServiceOptions::route('/'),
            'create' => Pages\CreateServiceOptions::route('/create'),
            'edit' => Pages\EditServiceOptions::route('/{record}/edit'),
        ];
    }    
}
