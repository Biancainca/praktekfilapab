<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

/* NEW */
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;


class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Articles Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required()->maxLength(255),
                Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                Forms\Components\Textarea::make('excerpt'),
                /* NEW */
                SpatieMediaLibraryFileUpload::make('featured_image')
                    ->collection('featured_image')
                    ->disk('public')
                    ->label('Featured Image')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9'),
                SpatieMediaLibraryFileUpload::make('gallery')
                    ->collection('gallery')
                    ->disk('public')
                    ->label('Gallery Images')
                    ->multiple()
                    ->image()
                    ->reorderable(),
                /* END NEW */
                Forms\Components\RichEditor::make('content')->columnStart(1)->columnSpanFull(),
                Forms\Components\Select::make('categories')
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->preload(),
                Forms\Components\Select::make('tags')
                    ->relationship('tags', 'name')
                    ->multiple()
                    ->preload(),
                Forms\Components\Toggle::make('published'),
                Forms\Components\DateTimePicker::make('published_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('categories.name')
                    ->badge()
                    ->color('success'),
                Tables\Columns\TextColumn::make('tags.name')
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\TextColumn::make('updated_at'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

   

}