<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms\Set;
use App\Filament\Admin\Resources\OrgChartResource\Pages;
use App\Filament\Admin\Resources\OrgChartResource\RelationManagers;
use App\Models\OrgChart;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Support\Contracts\HasLabel;
 
enum OrgchartBlockEnum: string implements HasLabel
{
    case president = 'presidence';
    case commissaire = 'commissaire aux comptes';
    case secretaire = 'secretaire';
    case tresorier = 'tresorier';
    case coordonnateur = 'coordonnateur';
    
    public function getLabel(): ?string
    {
        return $this->name;
        
        // or
    
        return match ($this) {
            self::president => 'Presidence',
            self::commissaire => 'Commissaire aux comptes',
            self::secretaire => 'Secretaire',
            self::tresorier => 'Tresorier',
            self::coordonnateur => 'Coordonnateur',
        };
    }
}

class OrgChartResource extends Resource
{
    protected static ?string $model = OrgChart::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = "Authentification";
    protected static ?string $modelLabel = "Organigramme";

    public static function form(Form $form): Form
    {
        return $form
                ->schema([
                        Section::make()
                            ->schema([
                                Select::make('block')
                            ->options(OrgchartBlockEnum::class)
                            ->required()
                            ->live(),
                        TextInput::make('pid')
                                ->label('Niveau')
                                ->numeric()
                                ->integer()
                                ->required(),
                        // Select::make('pid')
                        //     ->label('Niveau')
                        //     ->options(function(Get $get){
                        //         $block = $get('block');
                        //         if($block ==  OrgchartBlockEnum::president){
                        //             return range(1, 3);
                        //         }else if($block == OrgchartBlockEnum::commissaire || $block == OrgchartBlockEnum::secretaire || $block == OrgchartBlockEnum::tresorier){
                        //             return range(1, 2);
                        //         }else{
                        //             return range(1, OrgChart::all()->count() + 1);
                        //         }

                        //     })
                        //     ->required(),
                        TextInput::make("title")
                            ->label('Titre')
                            ->live()
                            // ->afterStateUpdated(function (Set $set, $state) {
                            //     $set('title', strtoupper($state));
                            // })
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('img')
                            ->required()
                            ->image()
                            ->imageEditor(),
                        Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->label('Utilisateur'),
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('block'),
                TextColumn::make('title')
                    ->label('Titre'),
                TextColumn::make('pid')
                    ->label('Niveau'),
                TextColumn::make('title')
                    ->label('Titre'),
                ImageColumn::make('img')
                    ->label('photo'),
                TextColumn::make('user.name')
                    ->label('Nom')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ReplicateAction::make(),
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
            'index' => Pages\ListOrgCharts::route('/'),
            'create' => Pages\CreateOrgChart::route('/create'),
            'edit' => Pages\EditOrgChart::route('/{record}/edit'),
        ];
    }    
}
