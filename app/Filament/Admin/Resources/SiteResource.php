<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SiteResource\Pages;
use App\Filament\Admin\Resources\SiteResource\RelationManagers;
use App\Models\Site;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteResource extends Resource
{
    protected static ?string $model = Site::class;

    protected static ?string $navigationGroup = "Web master";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = "Site web";
    protected static ?string $pluralModelLabel = "Sites web";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Profile")
                    ->schema([
                        FileUpload::make('logo')
                            ->image()
                            ->imageEditor()
                            ->required(),
                        TextInput::make('first_name')
                            ->required()
                            ->label('Titre 1')
                            ->maxLength(255),
                        TextInput::make('last_name')
                            ->required()
                            ->label('Titre 2')
                            ->maxLength(255),
                        TextInput::make('description')
                            ->required()
                            ->label('Description')
                            ->maxLength(255),
                        TextInput::make('email')
                            ->required()
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('address')
                            ->required()
                            ->label('Adresse')
                            ->maxLength(255),
                        TextInput::make('place')
                            ->required()
                            ->label('Siège social')
                            ->maxLength(255),
                        TextInput::make('link')
                            ->required()
                            ->label('Lien du site web')
                            ->maxLength(255),
                        ]),
                    Section::make('Contacts')
                    ->schema([
                        Repeater::make('Contacts')
                            ->relationship('siteContacts')
                            ->label('')
                            ->schema([
                                TextInput::make('contact')
                                    ->required()
                                    ->label('Contact')
                                    ->tel()
                                    ->maxLength(255),
                            ])
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['contact'] ?? null),
                    ]),
                Section::make('Reseaux sociaux')
                    ->schema([
                        Repeater::make('Reseaux sociaux')
                            ->relationship('socialNetworks')
                            ->label('')
                            ->schema([
                                FileUpload::make('logo')
                                    ->image()
                                    ->imageEditor()
                                    ->required(),
                                TextInput::make('name')
                                    ->required()
                                    ->label('Nom')
                                    ->maxLength(255),
                                TextInput::make('link')
                                    ->required()
                                    ->label('Lien du site web')
                                    ->maxLength(255),
                            ])
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('Titre 1')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_name')
                    ->label('Titre 2')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->sortable()
                    ->searchable(),
                // TextColumn::make('address')
                //     ->label('Adresse')
                //     ->sortable()
                //     ->searchable(),
                // TextColumn::make('place')
                //     ->label('Siège social')
                //     ->sortable()
                //     ->searchable(),
                TextColumn::make('link')
                    ->label('Lien')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListSites::route('/'),
            'create' => Pages\CreateSite::route('/create'),
            'edit' => Pages\EditSite::route('/{record}/edit'),
        ];
    }    
}
