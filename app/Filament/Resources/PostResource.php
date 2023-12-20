<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name")->label("Name")->required(),
                Forms\Components\Select::make("category_id")->relationship('category', 'name')->label('Category')->required(),
                Forms\Components\Textarea::make('excerpt')->label('Excerpt'),
                Forms\Components\TextInput::make('slug')->label('Slug')->required(),
                Forms\Components\RichEditor::make("body")->label("Body text"),
                Forms\Components\FileUpload::make("image")->label("Cover Image")->required(),
                Forms\Components\Select::make('status')->options([
                    'active' => 'Published',
                    'de_active' => 'UnPublished',
                    'pending' => 'Pending',
                    'draft' => 'Draft',
                ])->required(),
                Forms\Components\Textarea::make("meta_description")->label("Meta description"),
                Forms\Components\Textarea::make("meta_tags")->label("Meta tags"),
                Forms\Components\Textarea::make("meta_keywords")->label("Meta keywords"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->label("Name")->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->label("Slug"),
                Tables\Columns\TextColumn::make('created_at')->label("Created at")->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->label("Updated at")->sortable(),
            ])
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
