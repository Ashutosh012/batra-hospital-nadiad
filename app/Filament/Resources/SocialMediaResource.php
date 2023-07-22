<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialMediaResource\Pages;
use App\Filament\Resources\SocialMediaResource\RelationManagers;
use App\Models\SocialMedia;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialMediaResource extends Resource
{
    protected static ?string $model = SocialMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('platform_name')
                        ->label('Platform Name')
                        ->required()
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                Forms\Components\FileUpload::make('platform_icon')
                        ->label('Platform Image')
                        ->image()
                        ->maxSize(config('filament-blog.banner.maxSize', 5120))
                        ->disk(config('filament-blog.banner.disk', 'public'))
                        ->directory(config('socialmedia', 'socialmedia'))
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                Forms\Components\TextInput::make('platform_link')
                        ->label('Platform Link')
                        ->required()
                        ->columnSpan([
                            'sm' => 2,
                        ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('platform_name')->label('Platform Name'),
                Tables\Columns\TextColumn::make('platform_link')->label('Platform Link')
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
            'index' => Pages\ListSocialMedia::route('/'),
            'create' => Pages\CreateSocialMedia::route('/create'),
            'edit' => Pages\EditSocialMedia::route('/{record}/edit'),
        ];
    }    
}
