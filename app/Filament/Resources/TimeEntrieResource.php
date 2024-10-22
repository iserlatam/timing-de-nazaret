<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TimeEntrieResource\Pages;
use App\Filament\Resources\TimeEntrieResource\RelationManagers;
use App\Models\TimeEntrie;
use Filament\Forms;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TimeEntrieResource extends Resource
{
    protected static ?string $model = TimeEntrie::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nombre_entrada')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                    
                Forms\Components\TimePicker::make('hora_de_inicio')
                    ->required(),
                Forms\Components\TimePicker::make('hora_Final')
                    ->required(),
                // Forms\Components\Textarea::make('notas_adicionales')
                //     ->required()
                //     ->maxLength(65535)
                //     ->columnSpanFull(),
                Forms\Components\Select::make('Proyecto')
                    ->options([
                        'FRspot'=> 'FRspot',
                        'MiuraFX'=> 'MiuraFX',
                        'IserLatam'=> 'IserLatam',
                        'SheduFX'=> 'SheduFX',
                    ]),
                Forms\Components\Select::make('Etiqueta')
                    ->options([
                        'frontend'=> 'frontend',
                        'backend'=> 'backend',
                        'analisis_requerimiento'=> 'analisis de requerimiento',
                        'Diseño'=> 'Diseño',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('Nombre_entrada'),
                Tables\Columns\TextColumn::make('hora_Inicio'),
                Tables\Columns\TextColumn::make('Hora_Final'),
                Tables\Columns\TextColumn::make('Usuario'),
                Tables\Columns\TextColumn::make('Etiqueta'),
                Tables\Columns\TextColumn::make('Proyecto'),
                Tables\Columns\TextColumn::make('Fecha_creacion'),
                Tables\Columns\TextColumn::make('Fecha_Actualizacion'),
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
            'index' => Pages\ListTimeEntries::route('/'),
            'create' => Pages\CreateTimeEntrie::route('/create'),
            'edit' => Pages\EditTimeEntrie::route('/{record}/edit'),
        ];
    }
}
