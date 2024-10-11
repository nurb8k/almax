<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageElementResource\Pages;
use App\Filament\Resources\PageElementResource\RelationManagers;
use App\Models\PageElement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageElementResource extends Resource
{
    protected static ?string $model = PageElement::class;
    protected static ?string $label = 'Элементы страницы';
    use Translatable;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->columnSpanFull()
                    ->label('Заголовок'),
                Forms\Components\RichEditor::make('content')
                    ->columnSpanFull()
                    ->label('Контент')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Изображение')
                    ->columnSpanFull()
                    ->image(),
                Forms\Components\Select::make('page_id')
                    ->label('Страница')
                    ->options(
                        \App\Models\Page::all()->pluck('title', 'id')->toArray()
                    )
                    ->required(),

                Forms\Components\Select::make('type')
                    ->label('Тип')
                    ->options([
                        '1' => 'Карточка',
                        '2' => 'Изображение',
                        '3' => 'Видео',
                        '4' => 'Галерея',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Заголовок'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Изображение'),

                Tables\Columns\TextColumn::make('content')
                    ->searchable()
                    ->label('Контент'),


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
            'index' => Pages\ListPageElements::route('/'),
            'create' => Pages\CreatePageElement::route('/create'),
            'edit' => Pages\EditPageElement::route('/{record}/edit'),
        ];
    }

    protected static ?string $pluralLabel = 'Элементы страницы';
}
