<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'description' => 'Ajout d\'une adresse IP pour un nouveau collaborateur',
            'name' => 'Ouverture IP',
            'equipe_id' => 2
            ]);

        DB::table('categories')->insert([
            'description' => 'Création d\'une Machine Virtuelle clé en main',
            'name' => 'Création d\'une VM',
            'equipe_id' => 3
            ]);

        DB::table('categories')->insert([
            'description' => 'Migration d\'une table Postgres vers une table ORACLE ',
            'name' => 'Migration table SQL',
            'equipe_id' => 4
            ]);

        DB::table('categories')->insert([
            'description' => 'Purge de table spécifiée trop pleine',
            'name' => 'Purge des tables',
            'equipe_id' => 4
        ]);

        DB::table('categories')->insert([
            'description' => 'Récupération de fichier après suppression non souhaitée',
            'name' => 'Récupération de fichier',
            'equipe_id' => 5
            ]);

        DB::table('categories')->insert([
            'description' => 'Pour tous problèmes liés à un environnement Linux',
            'name' => 'Support Linux',
            'equipe_id' => 6
            ]);

        DB::table('categories')->insert([
            'description' => 'Pour tous problèmes liés à un environnement Windows',
            'name' => 'Support Windows',
            'equipe_id' => 7
            ]);

        DB::table('categories')->insert([
            'description' => 'Pour tous problèmes matériels, plomberie, électricité',
            'name' => 'Demande d\'intervention sur autre site',
            'equipe_id' => 8
            ]);

        DB::table('categories')->insert([
            'description' => 'Pour tous problèmes liés au DataCenter',
            'name' => 'Support DataCenter',
            'equipe_id' => 9
            ]);

        DB::table('categories')->insert([
            'description' => 'Urna enim ante aenean amet sagittis elementum. lacinia facilisis porta sem vehicula et sagittis augue. taciti praesent aliquet ligula. aliquet',
            'name' => 'Litora maecenas nec torquent imperdiet eleifend.',
            'equipe_id' => 15
        ]);

        DB::table('categories')->insert([
            'description' => 'Placerat etiam convallis lacus rutrum adipiscing ac. erat massa dictum donec erat eros aliquet. mattis vehicula tempus',
            'name' => 'Feugiat purus ante',
            'equipe_id' => 8
        ]);

        DB::table('categories')->insert([
            'description' => 'Phasellus libero sollicitudin rutrum. quam purus fringilla rhoncus eros class. nullam laoreet erat dapibus aliquam',
            'name' => 'Molestie rhoncus senectus etiam. quisque per',
            'equipe_id' => 16
        ]);

        DB::table('categories')->insert([
            'description' => 'Varius placerat interdum cras. curabitur eu quam urna. morbi donec id sodales',
            'name' => 'Praesent pretium vulputate',
            'equipe_id' => 14
        ]);

        DB::table('categories')->insert([
            'description' => 'Etiam ultricies vivamus pellentesque quisque ornare pharetra. cursus bibendum',
            'name' => 'Per ullamcorper mattis rutrum. sem ultricies',
            'equipe_id' => 10
        ]);

        DB::table('categories')->insert([
            'description' => 'Porta luctus molestie nunc tincidunt',
            'name' => 'Sagittis neque integer',
            'equipe_id' => 6
        ]);

        DB::table('categories')->insert([
            'description' => 'Dapibus ornare eleifend aliquam congue amet. proin eros quis convallis platea. luctus magna ullamcorper primis habitant.',
            'name' => 'Etiam nullam nisi suspendisse aliquet',
            'equipe_id' => 12
        ]);

        DB::table('categories')->insert([
            'description' => 'Semper etiam convallis curae luctus amet platea.',
            'name' => 'Tellus faucibus suspendisse aenean vel platea',
            'equipe_id' => 4
        ]);

        DB::table('categories')->insert([
            'description' => 'Cursus cursus taciti vivamus mi platea proin. cras habitasse imperdiet auctor enim lobortis. suscipit litora ipsum habitant ligula',
            'name' => 'Ut viverra cubilia enim. himenaeos dolor',
            'equipe_id' => 12
        ]);

        DB::table('categories')->insert([
            'description' => 'Quisque quam lacinia vulputate rutrum donec',
            'name' => 'Per dui aptent tempus',
            'equipe_id' => 13
        ]);

        DB::table('categories')->insert([
            'description' => 'Aenean fames porta blandit potenti ullamcorper curae nibh. nibh morbi sapien vitae. congue risus condimentum ut.',
            'name' => 'Duis volutpat enim ullamcorper',
            'equipe_id' => 8
        ]);

        DB::table('categories')->insert([
            'description' => 'Sit ultricies donec proin. iaculis luctus sollicitudin platea',
            'name' => 'Sociosqu cras id',
            'equipe_id' => 10
        ]);

        DB::table('categories')->insert([
            'description' => 'Congue ipsum fringilla tincidunt enim vivamus.',
            'name' => 'Quisque habitant vivamus leo sollicitudin consequat.',
            'equipe_id' => 10
        ]);

        DB::table('categories')->insert([
            'description' => 'Urna risus adipiscing congue. sem sodales hendrerit primis. conubia hendrerit posuere conubia. ut leo fringilla conubia conubia',
            'name' => 'Orci mollis tristique dolor donec',
            'equipe_id' => 8
        ]);

        DB::table('categories')->insert([
            'description' => 'Vivamus imperdiet lacinia urna velit nisi rhoncus.',
            'name' => 'Litora lorem euismod dictum. proin',
            'equipe_id' => 2
        ]);

        DB::table('categories')->insert([
            'description' => 'Congue ipsum vitae orci rutrum aenean viverra hac.',
            'name' => 'Tincidunt mauris tortor egestas sagittis odio',
            'equipe_id' => 4
        ]);

        DB::table('categories')->insert([
            'description' => 'Nisi fermentum magna suscipit cubilia. proin cursus amet interdum quis imperdiet egestas ad. lectus molestie feugiat sed ultricies ut',
            'name' => 'Sodales elementum iaculis pretium',
            'equipe_id' => 3
        ]);

        DB::table('categories')->insert([
            'description' => 'Nisi aliquam et arcu est sem sed facilisis. vitae',
            'name' => 'Erat sed arcu ligula pellentesque malesuada ultrices.',
            'equipe_id' => 9
        ]);

        DB::table('categories')->insert([
            'description' => 'Cubilia vivamus mattis mauris. faucibus morbi cras at. ultrices diam lobortis rutrum',
            'name' => 'Id auctor taciti',
            'equipe_id' => 6
        ]);

        DB::table('categories')->insert([
            'description' => 'Class justo mi euismod. bibendum eu velit habitant',
            'name' => 'Ornare accumsan dapibus vitae',
            'equipe_id' => 14
        ]);

        DB::table('categories')->insert([
            'description' => 'Catégorie de démo',
            'name' => 'Démo mail',
            'equipe_id' => 17
        ]);

    }
}
