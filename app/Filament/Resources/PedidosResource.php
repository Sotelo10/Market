<?php

namespace App\Filament\Resources;

use App\Enums\PedidoOrdenEnum;
use App\Filament\Resources\PedidosResource\Pages;
use App\Filament\Resources\PedidosResource\RelationManagers;
use App\Models\Inventario;
use App\Models\Pedidos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class PedidosResource extends Resource
{
    protected static ?string $model = Pedidos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationGroup = 'Menu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('clientes_id')
                ->relationship('clientes', 'nombres')
                ->searchable()
                ->required(),

            Forms\Components\TextInput::make('codigo')
                ->default('OR-' . random_int(100000, 9999999))
                ->disabled()
                ->dehydrated()
                ->required(),

            Forms\Components\TextInput::make('precio_total')
                ->label('Precio Total')
                ->dehydrated()
                ->numeric()
                ->required(),

            Forms\Components\Select::make('estado')
                ->options([
                    'pendiente' => PedidoOrdenEnum::PENDIENTE->value,
                    'procesado' => PedidoOrdenEnum::PROCESADO->value,
                    'completado' => PedidoOrdenEnum::COMPLETADO->value,
                ])
                ->required(),

            Forms\Components\TextInput::make('precio_envio')
                ->label('Precio  Envio')
                ->dehydrated()
                ->numeric()
                ->required(),

            Forms\Components\MarkdownEditor::make('nota')
                ->columnSpanFull(),


        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('codigo')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('clientes.nombres')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('estado')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha de Orden')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                ])
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
            'index' => Pages\ListPedidos::route('/'),
            'create' => Pages\CreatePedidos::route('/create'),
            'edit' => Pages\EditPedidos::route('/{record}/edit'),
        ];
    }
}
