<?php

namespace App\Filament\Resources;

use App\Enums\InventarioTipoEnum;
use App\Filament\Resources\InventarioResource\Pages;
use App\Filament\Resources\InventarioResource\RelationManagers;
use App\Models\Inventario;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class InventarioResource extends Resource
{
    protected static ?string $model = Inventario::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Inventario';

    protected static ?string $navigationGroup = 'Menu';

    protected static ?int $navigationSort = 0;

    protected static ?string $recordTitleAttribute = 'name';

    protected static int $globalSearchResultsLimit = 20;





    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Section::make()
                        ->schema([
                            Forms\Components\TextInput::make('nombre_producto')
                            ->maxValue(50)
                            ->required(),

                            Forms\Components\TextInput::make('marca')
                            ->maxValue(50)
                            ->required(),

                            Forms\Components\TextInput::make('categoria')
                            ->maxValue(50)
                            ->required(),

                            Forms\Components\TextInput::make('cantidad')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->required(),

                                    Forms\Components\TextInput::make('stock')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->required(),


                                 Forms\Components\TextInput::make('precio')
                                ->numeric()
                                ->rules('regex:/^\d{1,6}(\.\d{0,2})?$/')
                                ->required(),

                                Forms\Components\TextInput::make('numero')
                ->required()
                ->maxLength(9)
                ->numeric(),



                                Forms\Components\TextInput::make('codigo')
                                ->default('OR-' . random_int(100000, 9999999))
                                ->disabled()
                                ->dehydrated()
                                ->required(),

                                Forms\Components\TextInput::make('fecha_entrada')
                                ->type('date')
                                ->required(),



                            Forms\Components\Select::make('tipo')
                                ->options([
                                    'recojo_tienda' => InventarioTipoEnum::RECOJO_TIENDA->value,
                                    'delivery' => InventarioTipoEnum::DELIVERY->value,
                                ])->required()
                        ])->columns(2),
                ]),






        ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre_producto')
                    ->searchable()
                    ->sortable(),

                    Tables\Columns\TextColumn::make('marca')
                    ->sortable()
                    ->toggleable(),

                    Tables\Columns\TextColumn::make('categoria')
                    ->sortable()
                    ->toggleable(),

                    Tables\Columns\TextColumn::make('cantidad')
                    ->sortable()
                    ->toggleable(),


                    Tables\Columns\TextColumn::make('stock')
                    ->sortable()
                    ->toggleable(),


                Tables\Columns\TextColumn::make('precio')
                    ->sortable()
                    ->toggleable(),

                    Tables\Columns\TextColumn::make('numero')
                    ->searchable()
                    ->sortable(),



                Tables\Columns\TextColumn::make('fecha_entrada')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tipo')
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
            'index' => Pages\ListInventarios::route('/'),
            'create' => Pages\CreateInventario::route('/create'),
            'edit' => Pages\EditInventario::route('/{record}/edit'),
        ];
    }
}
