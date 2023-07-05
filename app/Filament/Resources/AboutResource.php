<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationGroup = 'Pages';

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
                Forms\Components\MarkdownEditor::make('description')->required(),
                Forms\Components\FileUpload::make('image'),
                // Forms\Components\Select::make('services')
                //     ->multiple()
                //     ->relationship('serviceoptions', 'title')
                // Forms\Components\CheckboxList::make('services')
                //     ->options([
                //         'tailwind' => 'Tailwind CSS',
                //         'alpine' => 'Alpine.js',
                //         'laravel' => 'Laravel',
                //         'livewire' => 'Laravel Livewire'
                //     ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('description')->searchable(),
                Tables\Columns\ImageColumn::make('image')->width(50)->height(50)->visibility('public'),
                //Tables\Columns\TextColumn::make('serviceoptions.title')
                //Tables\Columns\TextColumn::make('services')->searchable()

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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }    
}
