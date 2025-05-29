<?php

namespace App\Filament\Resources;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Filament\Resources\ContentResource\Pages;
use App\Models\Content;
use App\Models\Tag;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Support\Str;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->debounce(500)  // Add debounce to delay slug updates
                    ->afterStateUpdated(function (callable $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(Content::class, 'slug', ignoreRecord: true)
                    ->maxLength(255)
                    ->readOnly()
                    ->helperText('Generated from title.'),
                Forms\Components\Select::make('author_id')
                    ->label('Author')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options(ContentType::class)
                    ->default(ContentType::Blog->value)
                    ->required(),
                Forms\Components\Select::make('primary_tag_id')
                    ->label('Primary Tag')
                    ->relationship('primaryTag', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (callable $set, $state) {
                        $set('type', $state && Tag::find($state)?->slug === 'notice' ? ContentType::Notice->value : ContentType::Blog->value);
                    }),
                Forms\Components\Select::make('tags')
                    ->relationship('tags', 'name', function ($query, callable $get) {
                        $primaryTagId = $get('primary_tag_id');
                        if ($primaryTagId) {
                            $query->where('tags.id', '!=', $primaryTagId);
                        }
                    })
                    ->multiple()
                    ->maxItems(2)
                    ->preload()
                    ->searchable()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->reactive()
                            ->debounce(500)  // Add debounce to delay slug updates in tag creation
                            ->afterStateUpdated(function (callable $set, $state) {
                                $set('slug', Str::slug($state));
                            }),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(Tag::class, 'slug')
                            ->maxLength(255)
                            ->readOnly()
                            ->helperText('Generated from name.'),
                    ])
                    ->createOptionUsing(function (array $data): int {
                        $tag = Tag::create([
                            'name' => $data['name'],
                            'slug' => $data['slug'],
                        ]);
                        return $tag->id;
                    }),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cover_image')
                    ->image()
                    ->directory('content-covers')
                    ->disk('public')
                    ->maxSize(2048)
                    ->nullable(),
                Forms\Components\Select::make('status')
                    ->options(ContentStatus::class)
                    ->default(ContentStatus::Draft->value)
                    ->required(),
                Forms\Components\Section::make('SEO Settings')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255)
                            ->nullable(),
                        Forms\Components\Textarea::make('meta_description')
                            ->rows(4)
                            ->nullable(),
                        Forms\Components\TagsInput::make('meta_keywords')
                            ->placeholder('Enter keywords, press Enter')
                            ->nullable(),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_image')
                    ->label('Cover')
                    ->square(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->sortable(),
                Tables\Columns\TextColumn::make('primaryTag.name')
                    ->label('Primary Tag')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tags.name')
                    ->label('Tags')
                    ->listWithLineBreaks()
                    ->limitList(2)
                    ->sortable(),
                Tables\Columns\ImageColumn::make('author.profile_picture')
                    ->label('Author')
                    ->circular()
                    ->defaultImageUrl('/author/placeholder.jpg'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(ContentStatus $state): string => match ($state) {
                        ContentStatus::Draft => 'gray',
                        ContentStatus::Published => 'success',
                        ContentStatus::Archived => 'warning',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options(ContentStatus::class)
                    ->label('Status'),
                Tables\Filters\SelectFilter::make('type')
                    ->options(ContentType::class)
                    ->label('Type'),
                Tables\Filters\SelectFilter::make('primary_tag_id')
                    ->relationship('primaryTag', 'name')
                    ->label('Primary Tag'),
                Tables\Filters\SelectFilter::make('tags')
                    ->relationship('tags', 'name')
                    ->multiple()
                    ->preload()
                    ->label('Tags'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContents::route('/'),
            'create' => Pages\CreateContent::route('/create'),
            'edit' => Pages\EditContent::route('/{record}/edit'),
        ];
    }
}
