<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HealthProblemsResource\Pages;
use App\Filament\Resources\HealthProblemsResource\RelationManagers;
use App\Models\HealthProblems;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HealthProblemsResource extends Resource
{
    protected static ?string $model = HealthProblems::class;

    protected static ?string $navigationGroup = 'Others';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name of the Health Problem'),
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
            'index' => Pages\ListHealthProblems::route('/'),
            'create' => Pages\CreateHealthProblems::route('/create'),
            'edit' => Pages\EditHealthProblems::route('/{record}/edit'),
        ];
    }    
}
