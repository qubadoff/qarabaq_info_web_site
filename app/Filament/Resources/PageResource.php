<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Page name')->required(),
                Forms\Components\Textarea::make('excerpt')->label('Excerpt'),
                Forms\Components\RichEditor::make('body')->label('Body Text'),
                Forms\Components\FileUpload::make('image')->image()->label('Cover image')->openable()->downloadable(),
                Forms\Components\Select::make('status')->options([
                    'active' => 'Active',
                    'de_active' => 'De active'
                ])->required(),
                Forms\Components\TextInput::make('slug')->label('Slug')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('id')->sortable(),
                Tables\Columns\TextColumn::make('order')->label('Sort')->sortable(),
                Tables\Columns\TextColumn::make('name')->label('Page name')->searchable(),
                Tables\Columns\ImageColumn::make('image')->label('Cover image'),
                Tables\Columns\TextColumn::make('created_at')->sortable()
            ])->reorderable('order')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
