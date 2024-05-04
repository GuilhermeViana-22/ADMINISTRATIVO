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
                    'icon' => 'fas fa-users',
                    'label_color' => 'success',
                ],

                [
                    'text' => 'Cadastro de cursos',
                    'url'  => '/cursos',
                    'icon' => 'fas fa-network-wired',
                ],
                [
                    'text' => 'Material',
                    'url'  => '/material',
                    'icon' => 'fas fa-network-wired',
                ],
                [
                    'text' => 'Livros',
                    'url'  => '/livros',
                    'icon' => 'fas fa-network-wired',
                ],
                [
                    'text' => 'Meu progresso',
                    'url'  => '/progresso',
                    'icon' => 'fas fa-network-wired',
                ],
                [
                    'text' => 'Usuários',
                    'url'  => '/usuarios',
                    'icon' => 'fas fa-fw fa-user',
                    'label_color' => 'success',
                ],
                [
                    'text'    => 'Relatórios',
                    'icon'    => 'fas fa-fw fa-folder',
                    'submenu' => [

                        [
                            'text' => 'Vendas',
                            'url'  => '/vendas',
                        ],
                    ],
                ],
            );
        });
    }
}
