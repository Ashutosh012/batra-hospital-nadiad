<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentsResource\Pages;
use App\Filament\Resources\AppointmentsResource\RelationManagers;
use App\Models\Appointments;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppointmentsResource extends Resource
{
    protected static ?string $model = Appointments::class;

    protected static ?string $navigationGroup = 'Sections';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->sortable()
                    ->searchable()
                    ->label('First Name'),
                Tables\Columns\TextColumn::make('last_name')
                    ->sortable()
                    ->searchable()
                    ->label('Last Name'),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable()
                    ->label('Email'),
                Tables\Columns\TextColumn::make('mobile_number')
                    ->sortable()
                    ->searchable()
                    ->label('Mobile Number'),
                Tables\Columns\TextColumn::make('healthproblems.name')
                    ->sortable()
                    ->searchable()
                    ->label('Health Problem'),
                Tables\Columns\TextColumn::make('appointment_date')
                    ->sortable()
                    ->searchable()
                    ->label('Appointment Date'),
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
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointments::route('/create'),
            'edit' => Pages\EditAppointments::route('/{record}/edit'),
        ];
    }    
}
