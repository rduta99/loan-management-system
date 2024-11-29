<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChequesResource\Pages;
use App\Filament\Resources\ChequesResource\RelationManagers;
use App\Models\Cheques;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChequesResource extends Resource
{
    protected static ?string $model = Cheques::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('check_number')->maxLength(255),
                TextInput::make('amount')->type('number'),
                TextInput::make('beneficiary')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('check_number'),
                TextColumn::make('amount'),
                TextColumn::make('beneficiary')
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
            'index' => Pages\ListCheques::route('/'),
            'create' => Pages\CreateCheques::route('/create'),
            'edit' => Pages\EditCheques::route('/{record}/edit'),
        ];
    }
}
