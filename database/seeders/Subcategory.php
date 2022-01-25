<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class Subcategory extends Seeder
{
    public function run()
    {
        DB::table('subcategory_announcement')->insert([
            [ 'category_id' => 1, 'name' => 'Contabilidade'],
            [ 'category_id' => 1, 'name' => 'Eletro'],
            [ 'category_id' => 1, 'name' => 'Associações'],
            [ 'category_id' => 1, 'name' => 'Igrejas'],
            

            [ 'category_id' => 2, 'name' => 'Mecânica'],
            [ 'category_id' => 2, 'name' => 'Elétrica'],
            [ 'category_id' => 2, 'name' => 'Locadoras'],
            [ 'category_id' => 2, 'name' => 'Concessionárias'],
            [ 'category_id' => 2, 'name' => 'Borracharia'], 
            [ 'category_id' => 2, 'name' => 'Peças e acessórios'],

             
            [ 'category_id' => 3, 'name' => 'Restaurante'],
            [ 'category_id' => 3, 'name' => 'Lanchonete'],
            [ 'category_id' => 3, 'name' => 'Produtos caseiros'],
            [ 'category_id' => 3, 'name' => 'Supermercados'],
            [ 'category_id' => 3, 'name' => 'Mercearia'],
            [ 'category_id' => 3, 'name' => 'Sorveteria e Açaiteria'],
            [ 'category_id' => 3, 'name' => 'Padaria'],
            [ 'category_id' => 3, 'name' => 'Churrascaria'],
            [ 'category_id' => 3, 'name' => 'Chuarrasquinho'],
            [ 'category_id' => 3, 'name' => 'Bar e Pub'],
            [ 'category_id' => 3, 'name' => 'Delivery'],
            [ 'category_id' => 3, 'name' => 'Açougue'],


            [ 'category_id' => 4, 'name' => 'Shopping'],
            [ 'category_id' => 4, 'name' => 'Cinema'],
            [ 'category_id' => 4, 'name' => 'Parques'],
            [ 'category_id' => 4, 'name' => 'Zoológico'],
            [ 'category_id' => 4, 'name' => 'Clubes'],
            [ 'category_id' => 4, 'name' => 'Sítios'],
            [ 'category_id' => 4, 'name' => 'Pousada'],
            [ 'category_id' => 4, 'name' => 'Hotel'],
            [ 'category_id' => 4, 'name' => 'Motel'],
            [ 'category_id' => 4, 'name' => 'Academia'],
            [ 'category_id' => 4, 'name' => 'Ciclismo'],
            [ 'category_id' => 4, 'name' => 'Ginástica'],


            [ 'category_id' => 5, 'name' => 'Construtoras'],
            [ 'category_id' => 5, 'name' => 'Mobiliadora'],
            [ 'category_id' => 5, 'name' => 'Iluminação'],
            [ 'category_id' => 5, 'name' => 'Imobiliadora'],

            
            [ 'category_id' => 6, 'name' => 'Clínicas'],
            [ 'category_id' => 6, 'name' => 'Hospitais e PA'],
            [ 'category_id' => 6, 'name' => 'Drogarias'],
            [ 'category_id' => 6, 'name' => 'Home care'],


            [ 'category_id' => 7, 'name' => 'Motorista de Aplicativo'],
            [ 'category_id' => 7, 'name' => 'Taxi'],
            [ 'category_id' => 7, 'name' => 'Aeroporto'],
            [ 'category_id' => 7, 'name' => 'Estação Ferroviária'],
            [ 'category_id' => 7, 'name' => 'Estação Aquaviária'],
            [ 'category_id' => 7, 'name' => 'Terminal Rodoviário'],
            [ 'category_id' => 7, 'name' => 'Bikes'],


            // Agro e Indústria
            [ 'category_id' => 8, 'name' => 'Frigorífico'],
            [ 'category_id' => 8, 'name' => 'Salgados'],
            [ 'category_id' => 8, 'name' => 'Papel e Clulose'],
            [ 'category_id' => 8, 'name' => 'Reciclagem'],
            [ 'category_id' => 8, 'name' => 'Madeireira'],
            [ 'category_id' => 8, 'name' => 'Automotiva'],
            [ 'category_id' => 8, 'name' => 'Estaleiro'],
            [ 'category_id' => 8, 'name' => 'Aeronáutica'],
            [ 'category_id' => 8, 'name' => 'Têxtil'],
            [ 'category_id' => 8, 'name' => 'Laticínios'],
            [ 'category_id' => 8, 'name' => 'Cafeeira'],


            [ 'category_id' => 9, 'name' => 'Idiomas'],
            [ 'category_id' => 9, 'name' => 'Aulas Particulares'],
            [ 'category_id' => 9, 'name' => 'Cursos Preparatórios'],
            [ 'category_id' => 9, 'name' => 'Ensino Superior'],
            [ 'category_id' => 9, 'name' => 'Ensino Técnico'],
            [ 'category_id' => 9, 'name' => 'Ensino Médio'],
            [ 'category_id' => 9, 'name' => 'Ensino Fundamental'],
            [ 'category_id' => 9, 'name' => 'Ensino Infantil'],


            [ 'category_id' => 10, 'name' => 'Bancos'],
            [ 'category_id' => 10, 'name' => 'Instituições Financeiras'],
            [ 'category_id' => 10, 'name' => 'Fintech'],


            [ 'category_id' => 11, 'name' => 'Roupas e Calçados'],
            [ 'category_id' => 11, 'name' => 'Relojoaria'],
            [ 'category_id' => 11, 'name' => 'Ótica'],

            [ 'category_id' => 12, 'name' => 'Religiosos'],
            [ 'category_id' => 12, 'name' => ''],
        ]);
    }
}

         