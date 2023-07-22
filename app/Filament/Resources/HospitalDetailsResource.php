<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HospitalDetailsResource\Pages;
use App\Filament\Resources\HospitalDetailsResource\RelationManagers;
use App\Models\HospitalDetails;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HospitalDetailsResource extends Resource
{
    protected static ?string $model = HospitalDetails::class;

    protected static ?string $navigationGroup = 'Hospital Details';

    protected static ?string $navigationIcon = 'heroicon-o-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('address')
                        ->label('Address')
                        ->rows(2)
                        ->required()
                        ->minLength(50)
                        ->maxLength(1000)
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                Forms\Components\TextInput::make('helpline_number')
                        ->label('Helpline Number')
                        ->required(),
                Forms\Components\TextInput::make('map_link')
                        ->label('Add Map Link')
                        ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address')->label('Address'),
                Tables\Columns\TextColumn::make('helpline_number')->label('Helpline Number'),
                Tables\Columns\TextColumn::make('map_link')->label('Map Link')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHospitalDetails::route('/'),
            'create' => Pages\CreateHospitalDetails::route('/create'),
            'edit' => Pages\EditHospitalDetails::route('/{record}/edit'),
        ];
    }    

    public static function canCreate(): bool
    {
        return false;
    }
}
