<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteinfoResource\Pages;
use App\Filament\Resources\SiteinfoResource\RelationManagers;
use App\Models\Siteinfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteinfoResource extends Resource
{
    protected static ?string $model = Siteinfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Site name')->required(),
                Forms\Components\TextInput::make('description')->label('Site description'),
                Forms\Components\TextInput::make('meta_desc')->label('Meta description'),
                Forms\Components\TextInput::make('meta_keywords')->label('Meta keywords'),
                Forms\Components\TextInput::make('meta_tags')->label('Meta tags'),
                Forms\Components\TextInput::make('email')->label('Email'),
                Forms\Components\TextInput::make('phone')->label('Phone'),
                Forms\Components\TextInput::make('fb')->label('Facebook page'),
                Forms\Components\TextInput::make('instagram')->label('Instagram page'),
                Forms\Components\TextInput::make('twitter')->label('Twitter page'),
                Forms\Components\TextInput::make('linkedin')->label('Linkedin page'),
                Forms\Components\TextInput::make('tiktok')->label('Tiktok page'),
                Forms\Components\TextInput::make('youtube')->label('Youtube page'),
                Forms\Components\TextInput::make('location')->label('Location'),
                Forms\Components\FileUpload::make('logo')->image()->label('Site logo')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('id'),
                Tables\Columns\TextColumn::make('name')->label('Site name'),
                Tables\Columns\ImageColumn::make('logo')->label('Site logo')
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
            'index' => Pages\ListSiteinfos::route('/'),
            'create' => Pages\CreateSiteinfo::route('/create'),
            'edit' => Pages\EditSiteinfo::route('/{record}/edit'),
        ];
    }
}
