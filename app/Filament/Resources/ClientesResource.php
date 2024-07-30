<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientesResource\Pages;
use App\Filament\Resources\ClientesResource\RelationManagers;
use App\Models\Clientes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientesResource extends Resource
{
    protected static ?string $model = Clientes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Menu';




    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombres')
                            ->maxValue(50)
                            ->required(),

                            Forms\Components\TextInput::make('apellidos')
                            ->maxValue(50)
                            ->required(),

                            Forms\Components\TextInput::make('numero')
                                    ->numeric()

                                    ->required(),

                                    Forms\Components\TextInput::make('dni')
                                    ->numeric()

                                    ->required(),

                                    Forms\Components\TextInput::make('nombre_producto')
                                    ->maxValue(50)
                                    ->required(),

                                    Forms\Components\TextInput::make('monto_total')
                            ->numeric()
                            ->required(),

                            Forms\Components\TextInput::make('fecha_hora_compra')
                                ->type('date')
                                ->required(),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombres')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('apellidos')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('numero')
                ->sortable(),

            Tables\Columns\TextColumn::make('dni')
                ->sortable(),

            Tables\Columns\TextColumn::make('nombre_producto')
                ->sortable(),

            Tables\Columns\TextColumn::make('monto_total')
                ->sortable(),

            Tables\Columns\TextColumn::make('fecha_hora_compra')
                ->date()
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListClientes::route('/'),
            'create' => Pages\CreateClientes::route('/create'),
            'edit' => Pages\EditClientes::route('/{record}/edit'),
        ];
    }
}
