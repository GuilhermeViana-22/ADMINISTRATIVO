<?php

namespace App\Providers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        // o metodo dispachante vai pegar todos os eventos e e jogar para a view do Adminlte
        // com a classe AppServiceProvider podemops conversar com o banco
        // e renderizar as informações solicitadas
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add(
                [
                    'text' => 'Cadastro de clientes',
                    'url'  => '/cadastro',
                    'icon' => 'fas fa-fw fa-user',
                    'label'       => $user = Cliente::count(),
                    'label_color' => 'success',
                ],
                [
                    'text'    => 'Relatórios',
                    'icon'    => 'fas fa-fw fa-folder',
                    'submenu' => [
                        [
                            'text' => 'Clientes',
                            'url'  => '/clientes',
                        ],
                        [
                            'text'    => 'Sistemas ',
                            'submenu' => [
                                [
                                    'text' => 'Sistemas cadastrados',
                                    'url'  => '/sistema',
                                ],
                                [
                                    'text' => 'Saldo em atraso',
                                    'url'  => '/saldo',
                                ],
                            ],

                        ],
                        [
                            'text' => 'Vendas',
                            'url'  => '/vendas',
                        ],
                    ],
                ],
            );
        });
    }// fechamento do metodo
}// fechamento da classe
