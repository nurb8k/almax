<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    use Translatable;
    protected static ?string $label = 'Контакты';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('telegram')
                    ->label('Telegram')
                    ->required(),
                Forms\Components\TextInput::make('vk')
                    ->label('VK')
                    ->required(),
                Forms\Components\TextInput::make('phone1')
                    ->label('Телефон 1')
                    ->required(),
                Forms\Components\TextInput::make('phone2')
                    ->label('Телефон 2')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required(),

                Forms\Components\TextInput::make('address')
                    ->label('Адрес')
                    ->columnSpanFull()
                    ->required(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('telegram')
                    ->label('Telegram')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('vk')
                    ->label('VK')
                    ->searchable()
                    ->sortable(),


                Tables\Columns\TextColumn::make('phone1')
                    ->label('Телефон 1')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('phone2')
                    ->label('Телефон 2')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
    protected static ?string $pluralLabel = 'Контакты';
}
