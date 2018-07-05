<?php

use Illuminate\Database\Seeder;

class DemandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demandes')->insert([
            'title' => 'Facilisis tincidunt mattis orci bibendum',
            'description' => 'Vel maecenas hac eleifend diam. nisi odio sem feugiat. proin ultricies posuere taciti faucibus nullam fusce fames. bibendum mauris inceptos',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Diam phasellus turpis dui sodales.',
            'description' => 'Dictumst vulputate himenaeos pharetra aliquam ornare nostra fames. elementum ultrices tellus varius dapibus condimentum ornare blandit. nisl lobortis congue pulvinar',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Elementum ut faucibus aliquam mattis',
            'description' => 'Class libero ac ut. per urna suscipit diam mattis adipiscing faucibus. felis faucibus nisi vivamus lorem posuere vitae. sollicitudin dictumst',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Integer phasellus conubia malesuada et',
            'description' => 'Magna euismod netus ante imperdiet. cursus non vitae euismod integer mollis massa ligula. ante nulla pretium tincidunt fermentum. sapien accumsan',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Amet massa litora sapien turpis',
            'description' => 'Hendrerit etiam egestas fermentum mollis rhoncus iaculis himenaeos. pharetra dui vivamus praesent aliquet. est convallis rutrum torquent non id cras',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Risus integer malesuada sollicitudin aliquam',
            'description' => 'A torquent sodales urna vivamus sodales. ligula luctus magna augue vestibulum velit. litora sapien congue dolor iaculis. bibendum porta vehicula',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Class tortor rutrum lectus convallis',
            'description' => 'Aliquet hendrerit blandit velit nisl. congue convallis eleifend ullamcorper massa hendrerit at. pharetra habitasse elit faucibus. adipiscing tristique nam varius',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Elementum semper proin ligula. semper',
            'description' => 'Molestie cursus pulvinar vehicula vel dapibus vitae. donec justo mi ut senectus. sem molestie id congue sociosqu. auctor molestie aliquam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vivamus facilisis vitae aliquam convallis.',
            'description' => 'Luctus sed aenean magna mi phasellus cursus sollicitudin. sed erat habitasse praesent eu nam ipsum adipiscing. class sagittis sit feugiat.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacinia ut morbi est venenatis',
            'description' => 'Rhoncus bibendum vulputate vitae. metus elit erat nostra auctor. arcu fringilla mollis id viverra fringilla proin habitasse. ornare cras ultrices',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Phasellus cubilia aliquet donec fringilla',
            'description' => 'Integer vitae metus consequat posuere diam curae adipiscing. auctor curabitur lacinia ornare porta at taciti. fames taciti himenaeos ornare suspendisse',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Primis sodales cursus tempus curabitur.',
            'description' => 'Himenaeos pulvinar taciti consectetur. nulla senectus erat nibh placerat iaculis. ut ac nostra risus lacus. convallis netus hendrerit velit ut',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Id aliquam purus ut condimentum.',
            'description' => 'Hac donec elit inceptos senectus conubia. euismod semper litora sollicitudin torquent nostra. convallis gravida senectus iaculis lorem congue dolor interdum.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dictum porttitor aliquam dictum. velit',
            'description' => 'Nulla fames risus magna. non commodo placerat ut accumsan nostra eu sodales. nisi dui neque dictum. etiam placerat curabitur sed',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fames condimentum nullam habitasse. metus',
            'description' => 'Facilisis himenaeos phasellus placerat urna. interdum tellus suscipit conubia. congue nisi sem nam sem fringilla quisque. duis tortor sociosqu a',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut dictum posuere turpis nullam',
            'description' => 'Luctus himenaeos cras curabitur sagittis sociosqu. vehicula tincidunt purus placerat massa. felis blandit nam nam id non. turpis nulla arcu',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Urna ut tempus torquent. elit',
            'description' => 'Ad urna sed tellus pharetra tempus. ad elit sodales augue. mattis ut semper vitae dui sociosqu mi. commodo quisque duis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Per dui lectus nisi id',
            'description' => 'Senectus imperdiet nam eleifend. ad lacus congue varius nostra scelerisque. molestie aptent enim ac sit faucibus. taciti urna nam habitant',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Feugiat tellus velit ad erat',
            'description' => 'Varius varius vel adipiscing ullamcorper magna. pellentesque viverra vel metus dolor nam eu rhoncus. placerat semper arcu pharetra. duis sodales',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Suspendisse primis consectetur ante quis',
            'description' => 'Pellentesque per duis sagittis in malesuada. dictum velit nullam commodo vestibulum duis. platea bibendum aliquet morbi nunc. leo proin euismod',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Leo pharetra diam commodo elementum',
            'description' => 'Gravida conubia viverra pharetra magna. etiam commodo potenti scelerisque metus lorem sapien. vestibulum ornare purus mauris lectus fermentum vivamus sem.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tincidunt blandit nostra porttitor fermentum',
            'description' => 'Neque donec vel aliquam platea etiam sodales. orci posuere ut diam per. cursus aptent tristique torquent imperdiet. neque curae luctus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'At volutpat duis interdum torquent',
            'description' => 'Fusce integer at tempor fringilla taciti. fames torquent aliquet aenean donec. elementum erat leo habitasse integer. lorem euismod vel dictumst',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tempus et enim nibh arcu',
            'description' => 'Velit tempor velit fusce diam. tempor himenaeos lobortis per consectetur scelerisque rhoncus vel. a facilisis justo gravida. vivamus ac quis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Blandit ac ut consequat magna',
            'description' => 'Dolor augue velit integer. iaculis a enim felis consectetur donec vel cubilia. pretium habitant sollicitudin turpis condimentum ipsum hendrerit luctus.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur hendrerit fringilla praesent. proin',
            'description' => 'Libero tellus rutrum feugiat mauris quis varius. eros nostra faucibus quisque molestie cursus praesent hac. enim viverra fames vehicula. venenatis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nibh egestas lacus litora nibh.',
            'description' => 'In ut tincidunt cursus pharetra. hac felis mauris neque habitasse. leo porta purus bibendum. posuere feugiat nostra mattis nulla. platea',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Est ullamcorper accumsan mollis dictumst',
            'description' => 'Morbi molestie aenean conubia urna ultrices. hac sagittis interdum himenaeos. aliquam cubilia condimentum nulla. pellentesque posuere taciti est placerat placerat',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porttitor non porttitor sodales. vel',
            'description' => 'Faucibus platea aenean non tortor. nunc nunc adipiscing platea tortor. himenaeos curabitur urna netus. mi justo est euismod aenean sapien',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec duis maecenas sociosqu fames',
            'description' => 'Metus morbi dictumst viverra urna. bibendum dapibus placerat vestibulum condimentum diam erat congue. blandit quisque lacus suspendisse scelerisque cubilia habitant.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Aliquam ut phasellus arcu faucibus.',
            'description' => 'Nunc tincidunt tincidunt velit sem elit. eu eu pharetra sit iaculis. in eu odio maecenas mattis. praesent dapibus mollis id',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut aliquet hac magna risus',
            'description' => 'Elementum lectus lectus consectetur praesent potenti donec euismod. ornare platea dictum euismod cursus luctus. mattis augue sagittis tortor fermentum commodo.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquet purus faucibus hendrerit. etiam',
            'description' => 'Pulvinar tempor vulputate fringilla fusce purus. etiam netus praesent potenti. ultricies sit convallis iaculis commodo. vel libero libero tortor volutpat',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Gravida netus pharetra egestas. tempus',
            'description' => 'Hendrerit sollicitudin mollis aptent cursus nulla scelerisque elementum. etiam egestas felis varius eleifend. ultricies semper posuere sagittis id aliquam blandit.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam orci eu tempus dictum',
            'description' => 'Sed diam ultrices mi vulputate congue tempor suscipit. fermentum sed euismod ipsum nibh. venenatis et fames ad. cras nunc non',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Suspendisse per auctor semper curabitur',
            'description' => 'Potenti arcu dui convallis ante nibh quisque. vivamus lacinia hac ante nostra consectetur etiam. vitae erat non felis. nam vel',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Hac tellus aenean erat senectus.',
            'description' => 'Elementum ut fames proin consequat. augue massa luctus vehicula at class aenean. fusce potenti mauris eros egestas. placerat semper in',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lorem sem ut arcu donec',
            'description' => 'Lacinia metus platea duis nulla aliquam sapien lectus. pulvinar himenaeos nunc in. egestas aliquam ultricies bibendum mattis nostra habitasse euismod.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Per consectetur quisque scelerisque feugiat.',
            'description' => 'Pulvinar sem malesuada ante gravida fames fusce enim. donec pellentesque risus leo rhoncus proin augue rutrum. ultricies senectus vitae imperdiet',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Velit nunc etiam dictumst aenean',
            'description' => 'Potenti pellentesque sodales inceptos quis. dolor est ultrices massa. morbi elit posuere quisque semper massa praesent quam. semper tellus tincidunt',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Taciti nam facilisis mi senectus.',
            'description' => 'Feugiat viverra donec adipiscing. quisque dictumst urna commodo porttitor congue quis. proin erat fermentum pellentesque. quisque pretium commodo ultricies hendrerit',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Etiam tristique consequat lorem amet',
            'description' => 'Tristique vehicula praesent sit cursus. justo massa rhoncus lacus. ullamcorper habitant molestie aliquet aenean libero. placerat blandit vulputate purus quam',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Proin netus ligula molestie erat',
            'description' => 'Pellentesque volutpat nibh non elementum scelerisque proin proin. nunc habitasse nibh fames ultrices aenean. aliquam id mauris iaculis ante platea.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque phasellus nibh nisl elit.',
            'description' => 'Amet venenatis neque himenaeos blandit duis. ad facilisis convallis leo varius quis. cubilia erat quam nec facilisis. curabitur inceptos a',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tellus risus dui mi fringilla',
            'description' => 'Fringilla auctor tempus maecenas porta eros. varius magna torquent ultrices. tempus habitasse amet ligula mollis pulvinar congue at. ut accumsan',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Duis donec imperdiet varius donec.',
            'description' => 'Platea lacinia vel metus laoreet potenti felis eget. luctus blandit vitae tempus. conubia cursus velit nisl. litora egestas a nostra',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dolor venenatis sagittis pretium. congue',
            'description' => 'Mollis mattis lectus lobortis vitae consequat tristique. leo etiam aliquet quam integer dolor. aliquet sem quisque nulla sit consequat mi.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo sed consectetur accumsan. placerat',
            'description' => 'Sollicitudin congue litora mollis placerat. nisl cras magna aenean lobortis. pellentesque elit tristique ut. quisque enim ut adipiscing. non tincidunt',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Vehicula iaculis at nulla ultrices',
            'description' => 'Ut ut curabitur inceptos torquent lectus volutpat. convallis imperdiet curabitur aliquam tortor. malesuada praesent tellus leo eget phasellus. quis diam',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nunc nam quisque potenti nostra',
            'description' => 'Quam laoreet fringilla ac congue dolor ut elit. habitasse magna vel porttitor dictum augue pulvinar. lacus platea diam sodales dictum',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Arcu tortor sollicitudin lorem magna',
            'description' => 'Etiam eros eros porttitor. amet viverra tortor vivamus. accumsan eros fringilla facilisis congue. consequat massa porttitor adipiscing himenaeos et arcu.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 9,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quam quam platea quis. sit',
            'description' => 'Porttitor leo viverra hendrerit. taciti nisl iaculis eleifend fames. dictumst nostra platea nulla dapibus litora. eleifend sapien consectetur duis accumsan',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Congue aliquet platea suspendisse. erat',
            'description' => 'Sociosqu vehicula aliquet mollis eros nisl. faucibus dapibus laoreet ante aenean non ornare semper. molestie eu cursus sapien inceptos accumsan',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sapien massa dapibus nulla felis',
            'description' => 'Senectus est ut duis etiam egestas quis justo. eros turpis quis vehicula aliquet nunc. tempor integer ipsum vel auctor feugiat',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Viverra auctor etiam massa condimentum',
            'description' => 'Augue habitant sit maecenas turpis risus. ultrices habitasse ut et massa interdum ut per. dolor fames ac lectus sem. eu',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dui velit ornare nisi. enim',
            'description' => 'Consectetur in vel mattis diam. aliquam ultrices massa habitasse ut. ullamcorper mattis enim semper arcu litora euismod. risus aenean amet',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Taciti cubilia netus bibendum. elit',
            'description' => 'Mi ultricies tellus dapibus hac ac facilisis ullamcorper. aliquet massa mollis odio. morbi eros diam elit amet himenaeos bibendum sollicitudin.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vivamus etiam risus dolor auctor',
            'description' => 'Rhoncus platea iaculis quam. eu tempor luctus massa. curabitur ante inceptos ligula blandit suspendisse. nibh proin varius diam inceptos sed',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut nam molestie fringilla. rhoncus',
            'description' => 'Praesent class ante vel sociosqu cras. primis fermentum blandit posuere cubilia ornare. dolor bibendum consequat rutrum morbi consequat dolor. consequat',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo tempus tristique varius habitant.',
            'description' => 'Senectus adipiscing magna netus erat egestas nostra vitae. et ante ligula conubia rhoncus. risus augue magna commodo nulla erat aptent.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Facilisis sapien posuere amet. tempor',
            'description' => 'Curae adipiscing feugiat ad sagittis ullamcorper aliquam. vivamus iaculis suscipit nisl dapibus ullamcorper aenean sollicitudin. cursus accumsan convallis tempor mollis',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Interdum aptent primis mauris. ante',
            'description' => 'Congue purus quisque sit odio. orci ac mattis turpis viverra morbi conubia. litora sodales ut primis ullamcorper. massa placerat commodo',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ante nostra elementum sagittis curabitur.',
            'description' => 'Maecenas litora dictumst neque. eleifend erat quisque elit sodales vulputate conubia. donec justo nullam inceptos. cras iaculis nec neque. aliquam',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eu venenatis praesent tellus condimentum',
            'description' => 'Condimentum nec himenaeos nisi velit habitasse. egestas arcu aenean congue justo porttitor. etiam quis augue lacus eros nibh. volutpat himenaeos',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Justo aenean porttitor tortor sociosqu',
            'description' => 'Ante etiam eu pretium commodo ultricies neque. porta viverra platea adipiscing sollicitudin eleifend feugiat. pulvinar tortor ultrices vestibulum blandit. porttitor',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Proin sollicitudin sem etiam dapibus',
            'description' => 'Litora at scelerisque convallis ultrices quam. faucibus aliquam aliquam ut inceptos fames sit. potenti ut lectus curabitur adipiscing sit praesent.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Pharetra vehicula morbi enim. nisl',
            'description' => 'Nisi gravida hac augue vulputate nibh. urna sociosqu cras suscipit nec. per mollis inceptos quisque nibh aenean lorem. id dictum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'At pellentesque metus sed quis.',
            'description' => 'Netus tristique sit venenatis fringilla curabitur fringilla egestas. conubia dictumst et dolor ut semper. quam sit mi odio tincidunt posuere.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Varius lobortis sed id mauris',
            'description' => 'Pellentesque taciti class odio. conubia cras sodales metus consequat. sodales tortor platea pretium tincidunt. ut dui hendrerit erat. suscipit rhoncus',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Egestas scelerisque nisi morbi. at',
            'description' => 'Auctor quam a auctor conubia taciti. adipiscing eros massa netus euismod. venenatis convallis curae eleifend. fermentum netus massa tempus. lacus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'A cubilia aliquam hac conubia',
            'description' => 'Aenean himenaeos pharetra dictumst risus viverra curae lacus. cubilia aenean nisl rutrum venenatis elit proin venenatis. scelerisque aliquet adipiscing conubia',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sem mattis dolor condimentum fames',
            'description' => 'Risus felis porta vestibulum tellus. mi commodo fermentum viverra. nam ornare donec dictumst varius dapibus per. aliquam etiam lobortis posuere',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Ornare eget magna posuere ut.',
            'description' => 'Praesent velit nibh maecenas facilisis ad. nullam nisi interdum amet. imperdiet fermentum egestas interdum gravida. metus pulvinar pulvinar sollicitudin pellentesque',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet duis blandit quam dictum.',
            'description' => 'Nisi elementum praesent enim fringilla ante. donec libero aenean massa augue pretium. vehicula tempus rhoncus sed hendrerit sociosqu consequat. diam',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean tincidunt lorem adipiscing vel',
            'description' => 'Lacinia mi hendrerit nisi sodales sapien curae. netus volutpat sociosqu vivamus. lectus sit venenatis tempus habitasse dui ut pulvinar. suspendisse',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Auctor fringilla condimentum arcu. fermentum',
            'description' => 'Faucibus duis erat velit. rhoncus tempus tempus at consectetur. donec litora pretium blandit. convallis consequat hac aenean. mi faucibus libero',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Purus nullam maecenas cursus. odio',
            'description' => 'Etiam tortor proin tempor. justo integer facilisis vulputate ultricies adipiscing duis quis. lobortis aliquet ipsum pellentesque suscipit porttitor nulla. scelerisque',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quis dolor fermentum netus. cubilia',
            'description' => 'Adipiscing molestie maecenas ut rhoncus eleifend. ligula mattis hac et. auctor dictum porttitor euismod auctor eu a. congue velit taciti',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Aenean hendrerit iaculis eget. orci',
            'description' => 'Taciti praesent sed dictumst rhoncus sit. potenti curae varius sed. class sed donec bibendum quis lectus leo class. tellus aenean',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo diam eros eros sapien',
            'description' => 'Massa fermentum at nibh ullamcorper nisi sed nulla. habitant accumsan erat proin id viverra posuere. ante rhoncus semper cubilia. aliquam',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tortor metus consectetur praesent ante',
            'description' => 'Nullam vivamus phasellus etiam non. porta ut conubia id. netus est lectus erat est quisque primis. laoreet sapien posuere sociosqu',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Phasellus nisi hendrerit urna bibendum',
            'description' => 'Proin platea posuere in vivamus. porta hac mi pulvinar elementum eros. aliquam mauris vivamus iaculis volutpat neque. nibh accumsan metus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Luctus mattis netus netus id',
            'description' => 'Dolor curabitur lobortis senectus cras sollicitudin quam amet. purus cubilia convallis nostra senectus maecenas nec. ad consectetur amet per curabitur',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tristique conubia sed nostra neque',
            'description' => 'Nisi scelerisque velit ligula ut risus euismod. augue eleifend primis litora tristique tempus litora. justo proin rutrum gravida magna sapien',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Quisque tempus sem metus ut',
            'description' => 'Placerat quisque ullamcorper curae vulputate ad. vulputate fringilla lacus molestie commodo erat arcu. volutpat curae libero purus platea morbi nullam.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Semper bibendum sociosqu est pretium',
            'description' => 'Venenatis elit eleifend litora. in eleifend urna ligula blandit pellentesque urna. cras imperdiet nec nunc ultrices amet sed libero. inceptos',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean suscipit quis aenean. vehicula',
            'description' => 'Eu suscipit taciti posuere consequat posuere euismod. tortor mauris vel vulputate adipiscing elit nec potenti. pulvinar lacus potenti diam eu.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Neque ac aptent augue donec',
            'description' => 'Netus ullamcorper lorem dui proin ligula. platea inceptos gravida dictum vivamus erat nibh. sollicitudin donec quisque vehicula ut suspendisse ante',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porta dolor taciti nunc cubilia',
            'description' => 'Integer quisque curabitur cras malesuada sollicitudin feugiat. mattis et porttitor habitant vitae porttitor. lacinia dictumst sodales amet eros imperdiet ultrices',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curae conubia porta sodales nisi',
            'description' => 'Senectus auctor cursus felis gravida ullamcorper. quisque sodales egestas commodo senectus sociosqu class quisque. viverra metus rhoncus non. habitasse nullam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);
        DB::table('demandes')->insert([
            'title' => 'Tristique tempor ultricies diam. cubilia',
            'description' => 'Ultricies nunc per posuere nam tempus curabitur aliquam. ut malesuada sodales sed in. commodo ultricies praesent semper adipiscing placerat sagittis.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet orci nullam proin convallis',
            'description' => 'Pretium magna potenti inceptos volutpat conubia ornare. mi tempor nam etiam. hac molestie integer tristique mollis purus tristique. iaculis blandit',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Amet senectus etiam mattis tortor',
            'description' => 'Hendrerit venenatis praesent euismod quis dui a. mauris aenean venenatis ligula sodales elementum mauris. elit at nec integer. eget ut',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque sapien rhoncus tristique vel',
            'description' => 'Sed non tempus sapien eros. lacus conubia varius donec. vitae massa bibendum quisque tortor mollis tellus morbi. sociosqu sagittis lacinia',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Gravida venenatis aptent curae fermentum.',
            'description' => 'Vestibulum mollis praesent senectus sed cras semper. etiam ullamcorper eget eget. mollis donec pretium suscipit senectus. sociosqu sociosqu quisque enim.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Etiam tincidunt dictum eleifend porttitor.',
            'description' => 'Sed lobortis orci orci torquent nisl praesent. aliquet vel bibendum feugiat quisque sed. a vehicula ornare gravida est tortor. leo',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Platea convallis donec per dapibus.',
            'description' => 'Placerat nullam ullamcorper litora. rhoncus cubilia integer pretium consectetur sodales a. class mauris scelerisque molestie. vestibulum mi eleifend praesent. pretium',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Morbi gravida lectus arcu est',
            'description' => 'Aenean aliquam egestas egestas pellentesque aenean sodales. euismod enim commodo augue tellus congue. ipsum eros sit semper ante sit. sem',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nam ullamcorper duis convallis non.',
            'description' => 'Euismod class etiam cubilia vehicula. class tempor sed fames. tempus tristique habitasse hendrerit risus. fringilla gravida tincidunt lacus litora. dolor',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eu pharetra nostra per feugiat',
            'description' => 'Bibendum inceptos posuere himenaeos nostra. euismod diam sem etiam lacus erat nisl. volutpat egestas interdum litora maecenas dictumst fusce erat.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Luctus ipsum congue dolor potenti',
            'description' => 'Est massa odio fringilla. felis bibendum himenaeos litora litora. feugiat cubilia venenatis odio vitae sed. nam suspendisse massa porttitor litora',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Magna magna sem semper. pretium',
            'description' => 'Tortor sodales vivamus eget cubilia. lobortis cubilia etiam feugiat urna lacus urna sem. magna vivamus dapibus praesent eu porta amet.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Curabitur pharetra nisl lorem non',
            'description' => 'Tortor lorem praesent proin aenean curabitur. tortor dui ultrices mollis sit. litora eu malesuada pharetra fermentum integer velit nisi. sollicitudin',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Conubia urna sapien felis luctus',
            'description' => 'Amet consequat nullam lacinia. porta mattis himenaeos praesent litora iaculis in. convallis in commodo aenean felis cras arcu. interdum taciti',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut feugiat donec nam etiam',
            'description' => 'Rutrum mauris elit ipsum dapibus. nisi nec lectus dictum massa pharetra. vulputate lacinia adipiscing id neque fermentum proin. dictumst habitant',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Facilisis curabitur quam luctus mauris',
            'description' => 'Tempus aliquam purus eros. duis aliquam mauris nisl. orci proin sagittis cursus. mi est eros rhoncus phasellus lacus dictum neque.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Posuere habitant hac semper aliquam',
            'description' => 'Ante convallis hendrerit hac felis torquent dui aliquam. euismod dui feugiat elit id malesuada. etiam est justo orci cubilia. aliquam',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Leo mollis sollicitudin nisl mollis',
            'description' => 'Aliquam eleifend mi duis duis augue. hendrerit semper ullamcorper litora. pulvinar pretium pellentesque odio ac nisl. sapien non pretium est.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Facilisis metus lorem tristique enim.',
            'description' => 'Suscipit auctor consequat sodales volutpat auctor. vel gravida molestie aptent sapien curabitur urna tortor. sodales habitasse nullam aenean egestas malesuada',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dapibus cubilia lobortis curabitur conubia',
            'description' => 'Senectus dapibus lectus fusce. blandit quam porta malesuada ipsum. condimentum dapibus eget class netus. tempus dolor tristique commodo tellus litora.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'In faucibus a semper vestibulum',
            'description' => 'Nullam curabitur ultrices varius. torquent hendrerit vivamus dictum viverra. vel fames quam aliquam vulputate purus ut turpis. nostra integer sodales',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fringilla odio mollis per torquent',
            'description' => 'Erat feugiat nec libero ante suscipit cursus. eu felis ut quam a vivamus litora. non metus eget luctus platea tempor.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Erat lobortis ad sollicitudin tristique.',
            'description' => 'Vehicula est eleifend imperdiet. vestibulum varius erat enim orci. nullam sociosqu mollis sociosqu amet molestie. lacus adipiscing volutpat taciti sociosqu',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Feugiat amet mollis nec ligula.',
            'description' => 'Gravida pretium aenean rhoncus pulvinar curae interdum convallis. quam fermentum tristique vulputate libero leo risus rutrum. mollis habitasse ante molestie',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Ligula himenaeos sem turpis inceptos',
            'description' => 'Nullam eu litora posuere aliquet. malesuada ultricies suspendisse risus conubia nibh integer. cursus semper fringilla curabitur euismod curabitur. risus cras',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Massa sociosqu consectetur aenean aptent',
            'description' => 'Lorem at sociosqu scelerisque inceptos aliquam. gravida curabitur convallis commodo. quisque etiam id felis purus. conubia ut bibendum sociosqu. curabitur',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Primis litora curae magna non',
            'description' => 'Consectetur libero pellentesque platea quam purus aliquam mauris. habitant adipiscing orci vel nisl nisi aptent. dictumst volutpat massa mattis quisque',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur mi sapien porttitor sem',
            'description' => 'Habitant potenti gravida arcu nam lacinia. etiam integer aenean vehicula nibh ligula himenaeos egestas. ante curabitur conubia egestas duis quisque',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Class sollicitudin class facilisis donec.',
            'description' => 'Adipiscing platea tempus semper fringilla. posuere himenaeos tristique porta. auctor suspendisse metus semper aliquam donec rutrum aliquam. eu magna luctus',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut lobortis luctus tincidunt non',
            'description' => 'Cursus eros aenean vestibulum. varius augue ornare duis porttitor sed conubia volutpat. aliquet ad diam eros odio donec. quam accumsan',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);
        DB::table('demandes')->insert([
            'title' => 'Vitae accumsan ultrices augue iaculis',
            'description' => 'Ante ut enim sagittis consectetur viverra. urna dictum praesent cubilia. ante arcu etiam cubilia pretium leo aptent torquent. accumsan pretium',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices porta ipsum erat urna',
            'description' => 'Sem congue turpis varius fringilla arcu curabitur fames. eros auctor blandit sed himenaeos morbi. neque suspendisse litora feugiat suscipit volutpat',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Diam nec aliquet semper fames',
            'description' => 'Quis sagittis pharetra fringilla. posuere leo duis habitant class vulputate. at vestibulum dictumst fames. porttitor sodales donec hac aliquet commodo.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tincidunt justo ullamcorper viverra dolor',
            'description' => 'Curabitur ultricies inceptos senectus duis nullam elementum curabitur. aenean faucibus suspendisse ultrices nullam. per dictum porttitor hendrerit quam curae lorem.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices felis commodo sit netus.',
            'description' => 'Dolor enim dapibus varius pharetra laoreet feugiat. sapien tempor felis amet ad pretium tincidunt quis. in dictum justo conubia amet',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacus mollis tortor phasellus. odio',
            'description' => 'Dictumst vitae volutpat auctor nibh hac enim ipsum. imperdiet mauris senectus lacinia pretium felis feugiat. tortor eleifend egestas suspendisse cubilia',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Praesent vulputate sed sagittis lacus',
            'description' => 'Lobortis tempor ut justo taciti. class vivamus ipsum enim inceptos platea purus donec. tempor aenean quam felis. eros proin adipiscing',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Erat platea faucibus est laoreet',
            'description' => 'Venenatis mollis quam habitant velit feugiat nunc dictum. elementum dui amet mauris velit sagittis blandit luctus. id diam volutpat potenti',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Leo senectus vulputate aenean. himenaeos',
            'description' => 'Sodales orci aliquam netus porttitor ultrices. sodales dolor mauris convallis condimentum. euismod lectus scelerisque sem pellentesque praesent. eros nunc congue',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ipsum lectus consectetur fusce ligula',
            'description' => 'Commodo purus facilisis tortor interdum varius nibh. quisque dui duis fermentum at ornare. arcu vivamus non aptent orci aliquet ultricies',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Euismod tempus aptent curae placerat',
            'description' => 'Cubilia in mattis himenaeos. dictumst convallis faucibus urna non consectetur. a condimentum ornare praesent. hendrerit fames fringilla ut erat. eget',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur euismod posuere ultricies. maecenas',
            'description' => 'Suscipit non egestas fringilla phasellus neque. orci a fermentum hendrerit interdum ut. mauris cursus in ullamcorper inceptos mi orci. curae',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);
        DB::table('demandes')->insert([
            'title' => 'Luctus molestie sagittis lacinia aptent.',
            'description' => 'Nulla viverra tempus eleifend maecenas nisl quam consectetur. velit consectetur metus eleifend in quisque. mattis etiam senectus faucibus. nullam vel',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Conubia fames est porttitor. ullamcorper',
            'description' => 'Mi elit himenaeos class. rutrum fusce porttitor nam cubilia. molestie conubia praesent mattis nisl. felis luctus ante sollicitudin auctor. purus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacinia bibendum dui aptent consectetur',
            'description' => 'Eros torquent phasellus tempus non sollicitudin suspendisse. sem integer ultricies euismod. tellus aenean risus purus lorem. convallis felis etiam sem.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Risus feugiat erat sollicitudin. tincidunt',
            'description' => 'Sem lorem urna praesent mi sociosqu. class quisque eros nunc. sem pulvinar euismod ac ipsum. fermentum vehicula lobortis mauris. curae',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nibh quam pellentesque ac. orci',
            'description' => 'Nisl eget nulla habitant elementum. nullam eros aptent vulputate faucibus viverra. vestibulum tempor ullamcorper molestie fringilla elit fringilla. felis potenti',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vel id nisl molestie posuere',
            'description' => 'Inceptos ac placerat ullamcorper pellentesque massa porta sapien. dictumst nam torquent donec inceptos. habitasse porttitor nibh ut nam ligula neque',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Tincidunt tellus nulla justo tincidunt',
            'description' => 'Aptent arcu platea convallis mattis. diam sagittis integer tincidunt eu suscipit curabitur nullam. ultricies semper suscipit auctor nam. tempus donec',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dictum potenti lectus etiam ut',
            'description' => 'Tempor erat elit tincidunt amet. euismod aliquam diam euismod vel. per a tortor faucibus. potenti neque ad augue. rhoncus vel',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Est enim vel velit massa.',
            'description' => 'Nostra dolor risus vehicula. porttitor bibendum elit cubilia fusce. porttitor urna purus aliquet. vehicula est purus phasellus gravida. aliquet turpis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dictumst platea nec iaculis mauris',
            'description' => 'Habitant fames ante elementum fames mattis. porttitor vitae odio vehicula tristique ultricies interdum risus. faucibus felis rutrum tempor. dui venenatis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vehicula nec turpis dolor fusce',
            'description' => 'Vehicula suscipit suspendisse posuere ullamcorper et. morbi senectus metus sit conubia. nam enim aenean molestie justo augue tempor pellentesque. habitant',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sit faucibus eget lacus faucibus.',
            'description' => 'Consectetur at suspendisse praesent nisi adipiscing libero dolor. proin curabitur aliquet iaculis porttitor. conubia lobortis dictum non velit lectus amet.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Ut enim feugiat luctus taciti',
            'description' => 'Sollicitudin erat ultrices sapien sagittis malesuada dictum fermentum. magna fames risus tempus rutrum mollis aenean. mauris semper sapien egestas sagittis.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Et hac justo imperdiet. ut',
            'description' => 'Nostra pulvinar ultrices sollicitudin sem. ut semper aliquam consectetur ante ad. potenti orci sit gravida. magna ante dictumst aliquam. himenaeos',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ipsum amet vulputate lectus aliquam',
            'description' => 'Integer ut ornare arcu. nisl orci varius risus odio dictum nisi eu. integer eu auctor curabitur nibh pulvinar enim. torquent',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Euismod nostra blandit conubia morbi.',
            'description' => 'Fermentum sociosqu nunc condimentum platea. hendrerit erat condimentum adipiscing ultricies. ullamcorper quisque felis eleifend aliquet potenti. sit risus tortor lorem',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Venenatis iaculis venenatis id bibendum.',
            'description' => 'Libero justo fusce cubilia orci lorem condimentum. nec quis nec porta. curabitur venenatis inceptos pellentesque praesent eros. nibh non dolor',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ante odio per eleifend odio',
            'description' => 'Tristique nulla hendrerit erat senectus erat. massa dictum lobortis odio vulputate mattis justo praesent. hac donec amet luctus senectus ut',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Est torquent venenatis erat sagittis',
            'description' => 'Suspendisse sed convallis senectus pretium. leo amet nisl maecenas fringilla mi cubilia. nostra venenatis ante mattis facilisis ullamcorper tristique. conubia',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Augue augue purus enim urna.',
            'description' => 'Proin adipiscing cubilia senectus volutpat. nostra himenaeos ac purus sagittis malesuada magna placerat. et vehicula ante rhoncus tristique sodales. dolor',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tincidunt class vehicula conubia quisque',
            'description' => 'Ac magna molestie vitae. hendrerit pharetra eget ipsum cursus ante quisque velit. purus ac quisque elit eros. molestie fusce elit',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Metus aliquam viverra ante fames',
            'description' => 'Suspendisse diam eu ipsum aliquam odio. scelerisque ad justo sed. augue ullamcorper interdum curabitur. eget senectus sollicitudin nec ut morbi',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Per maecenas libero euismod volutpat.',
            'description' => 'Tristique curabitur tristique ac dictum aliquet potenti curabitur. mollis quis donec semper aliquam odio praesent hendrerit. in mattis primis blandit',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Risus at eu potenti dapibus',
            'description' => 'Porta praesent cubilia etiam tristique nunc. maecenas urna semper facilisis lorem. aliquam convallis arcu mattis a. dictumst scelerisque molestie eu',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Porta id lorem justo phasellus',
            'description' => 'Potenti placerat ultricies faucibus commodo nostra eget luctus. vestibulum torquent phasellus auctor dui velit. egestas consequat nec senectus fames nisl',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Auctor fringilla viverra nisi lacinia',
            'description' => 'Nam nec feugiat semper. ultricies potenti taciti feugiat sapien sem primis. mi quisque venenatis aptent nullam. velit tincidunt quam curae.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Posuere suspendisse lorem ut adipiscing',
            'description' => 'Cursus dictum justo nulla sit tortor felis. luctus hac habitasse pulvinar adipiscing consequat. viverra aptent donec donec iaculis. ornare auctor',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Phasellus pharetra ac adipiscing aenean',
            'description' => 'Fringilla consectetur vulputate non etiam. amet taciti dictumst venenatis leo imperdiet praesent. volutpat commodo id pellentesque. amet luctus sollicitudin id',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Molestie ac vehicula proin ultrices.',
            'description' => 'Netus tortor elit lectus nam. libero elit luctus arcu gravida. id sollicitudin morbi vulputate tempor. ultrices quam fringilla tempor proin.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vivamus sagittis quisque auctor est',
            'description' => 'Inceptos malesuada habitasse tortor nisi faucibus. dui metus vel nisi. ultrices lorem ac etiam ultrices. arcu pharetra quisque mattis mi',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Iaculis vulputate lobortis hendrerit maecenas.',
            'description' => 'Dictumst litora nunc ut. nisl eros potenti ullamcorper accumsan neque vel per. non auctor id ut congue dolor leo. placerat',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sit urna dictum placerat tincidunt',
            'description' => 'Vel mi curabitur scelerisque. class volutpat sodales torquent maecenas pellentesque sem litora. rhoncus dictumst aptent lorem convallis tellus. erat class',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sodales potenti tempus felis sagittis.',
            'description' => 'Etiam interdum placerat cras in nullam. dui aliquam pulvinar congue taciti. placerat consectetur duis gravida accumsan est. himenaeos consequat sapien',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porta id blandit a nisl.',
            'description' => 'Leo consequat at purus feugiat ligula. consequat eleifend vehicula vestibulum fringilla donec taciti dictumst. turpis turpis aliquam posuere neque suscipit.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ligula in nibh posuere inceptos',
            'description' => 'Etiam arcu torquent ac nam. neque nostra sed turpis neque turpis dictumst. fusce hac dictum congue dolor ornare sit. potenti',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Primis habitant vestibulum praesent. inceptos',
            'description' => 'Proin metus tempus aenean. sed metus sed tellus a semper. conubia diam dictum congue arcu mi vitae. urna inceptos habitasse',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);
        DB::table('demandes')->insert([
            'title' => 'Proin dictum aptent ullamcorper mollis.',
            'description' => 'Lacinia lacus libero erat scelerisque. eleifend luctus euismod etiam molestie aenean. placerat leo purus eleifend tempus etiam gravida. sollicitudin nisl',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ad hendrerit hendrerit curae elit',
            'description' => 'Enim massa metus diam platea nec. tellus tempus platea nullam sapien varius ultrices. curabitur tempus ligula placerat. ultricies sem pellentesque',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ad morbi pretium nibh purus',
            'description' => 'Duis quis ultricies fusce nisl fusce mattis ante. blandit lacus class adipiscing nisl. convallis condimentum consequat vivamus interdum pulvinar. risus',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sit faucibus imperdiet netus rutrum.',
            'description' => 'Justo ante velit auctor. lectus quisque nisi eleifend. tellus aenean interdum purus erat ultricies. nostra libero nec ullamcorper rhoncus cubilia.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lectus maecenas elit mollis. per',
            'description' => 'Blandit eleifend sit torquent imperdiet. blandit venenatis ornare lectus velit erat iaculis. felis ut netus donec amet cras. commodo cubilia',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Facilisis class senectus habitant. neque',
            'description' => 'Ullamcorper curae quisque eros pulvinar pellentesque placerat pharetra. aenean nam ut habitant ut. libero quisque sollicitudin ad. volutpat scelerisque potenti',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Ligula nibh ultrices scelerisque. class',
            'description' => 'Sit fringilla vulputate curabitur. class class facilisis accumsan sapien taciti vestibulum. suspendisse ut tristique donec sed. hendrerit class netus sollicitudin',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Iaculis vulputate fames luctus. maecenas',
            'description' => 'Arcu dapibus euismod cursus sollicitudin. ornare per inceptos velit iaculis at. in lectus volutpat tempus. facilisis sodales aenean vitae viverra.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Class arcu ad quisque vestibulum',
            'description' => 'Tempor ut condimentum erat senectus quis ullamcorper dui. fringilla lobortis senectus torquent. amet convallis a est. phasellus dui mollis tristique',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Volutpat ante metus cubilia praesent',
            'description' => 'Semper conubia pulvinar curabitur litora erat faucibus porta. felis ac tempus platea. pellentesque proin sit vel. aenean habitasse morbi volutpat',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dui senectus nulla tristique nibh.',
            'description' => 'Ultrices nullam lectus semper feugiat orci. mi enim placerat ornare. aenean et curabitur sollicitudin proin. porta erat pretium aptent. orci',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Arcu quisque est venenatis et',
            'description' => 'Magna mauris tincidunt volutpat taciti sed. mi ullamcorper malesuada nunc lacus vivamus elit quam. quis et mauris non. litora feugiat',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Lobortis odio pretium porta pretium.',
            'description' => 'Suscipit condimentum pulvinar curabitur eleifend dictumst. ligula ultricies metus dapibus vitae curabitur congue platea. turpis tortor ante felis leo interdum.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lorem convallis dui ac turpis.',
            'description' => 'Quam tristique sociosqu habitasse habitant habitant. fermentum aptent aliquam a ut. malesuada felis sagittis nullam praesent. tempor adipiscing dui semper',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Viverra velit ac viverra molestie',
            'description' => 'Praesent lacinia nisl rutrum non. habitant facilisis suspendisse nullam ultricies. dictumst purus ligula torquent nullam. donec ultricies et curabitur malesuada',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Phasellus etiam fames hendrerit lobortis',
            'description' => 'Sem congue lacus felis tristique. odio quisque conubia eros ornare euismod ante himenaeos. hendrerit suspendisse augue ipsum mattis quis massa.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices tristique eget duis aliquam',
            'description' => 'Volutpat dictumst mi integer ipsum tempor. tempor ipsum aliquam pulvinar curabitur donec ornare. lectus ut nisi vehicula dictumst tempor. luctus',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Suscipit lorem ipsum fusce convallis',
            'description' => 'Accumsan convallis blandit et. congue magna duis netus. magna a nulla torquent aptent lorem. lorem sit volutpat fermentum ad. dui',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Phasellus interdum vel non mauris',
            'description' => 'Quis dolor nunc mi dui id orci. velit suscipit pharetra tempus augue erat fringilla. primis litora nibh fames. morbi condimentum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Class rhoncus ornare aliquam tempus',
            'description' => 'Est aliquam praesent cursus. purus curabitur nunc lobortis eros luctus ipsum. posuere tellus consequat per quam litora. augue facilisis congue',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consequat lectus habitasse malesuada senectus',
            'description' => 'Facilisis ligula ac senectus auctor. nisi suscipit tortor vestibulum sapien. velit accumsan orci convallis purus elit. lectus tortor primis quam',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nisi ligula donec consectetur id.',
            'description' => 'Tristique et etiam curabitur amet. sollicitudin sem ullamcorper per nulla litora urna feugiat. placerat facilisis vitae lobortis dictumst fringilla. augue',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quam aliquam mattis erat libero',
            'description' => 'Imperdiet porta malesuada habitasse. consequat tempor habitasse ante. dictumst class etiam torquent. viverra mattis felis molestie nam taciti congue rhoncus.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Et laoreet sit fringilla urna.',
            'description' => 'Congue enim euismod mi dapibus congue. ipsum est sollicitudin sollicitudin fames. vulputate per vulputate mattis nam massa. porttitor scelerisque quis',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Nibh lobortis sed dapibus. dapibus',
            'description' => 'Sociosqu dictum integer cras phasellus felis ut ut. magna imperdiet suscipit dictumst. pellentesque dictum cursus curabitur faucibus. sapien quisque volutpat',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cubilia viverra dui netus posuere',
            'description' => 'Ut elementum etiam nunc lectus torquent consectetur neque. laoreet et sagittis bibendum urna posuere tempor. laoreet dui maecenas molestie fringilla',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quam fermentum condimentum fames aenean',
            'description' => 'Per semper arcu egestas facilisis. faucibus sit molestie feugiat amet molestie varius. semper pellentesque neque egestas velit dolor nec in.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Purus phasellus faucibus vulputate amet',
            'description' => 'Pellentesque odio ultrices morbi. proin convallis at netus. etiam luctus integer dolor potenti. aenean orci odio sodales. fusce etiam senectus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur faucibus velit arcu hac',
            'description' => 'Gravida et porta curae. blandit libero pharetra dapibus condimentum facilisis metus nulla. turpis dui taciti posuere. eu malesuada vel nisl.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam mollis etiam consectetur diam',
            'description' => 'Morbi amet integer consectetur. nisl lobortis dui elit ac phasellus viverra ullamcorper. euismod aliquam non nostra faucibus at cubilia malesuada.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);
        DB::table('demandes')->insert([
            'title' => 'Tortor aliquet per nam sit',
            'description' => 'Nunc nisl netus habitant hac curabitur dictum. lorem tincidunt fames turpis cubilia rhoncus. velit potenti quis facilisis. commodo taciti magna',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ullamcorper ut morbi eros molestie.',
            'description' => 'At imperdiet sapien fusce facilisis facilisis elementum. amet mauris vel at ullamcorper fusce elementum euismod. porta etiam volutpat molestie justo',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque congue nulla hac inceptos.',
            'description' => 'Integer hendrerit nam rutrum. posuere condimentum placerat dictum sit ac feugiat. tellus rhoncus amet fermentum dolor quam. dictum erat tristique',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean sem diam taciti. semper',
            'description' => 'A litora eu dictum nullam a venenatis. aptent venenatis tempus sapien. proin ultricies amet sapien etiam magna volutpat. nisl aliquam',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Venenatis sodales fringilla nisi sed.',
            'description' => 'Vitae torquent proin senectus amet tristique. proin sodales aliquam tincidunt luctus. dapibus rutrum varius congue laoreet. curabitur orci blandit duis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fermentum metus fames quisque quam',
            'description' => 'Amet malesuada morbi quisque ante. integer vehicula lacus rutrum integer. viverra quisque habitant interdum tincidunt phasellus. aptent magna fermentum lacus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Tellus donec aptent sollicitudin aptent',
            'description' => 'Vulputate bibendum sociosqu vulputate praesent. integer imperdiet congue cursus mi convallis habitasse. luctus feugiat curabitur iaculis ad aenean. pharetra class',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Duis fringilla vulputate mi sapien',
            'description' => 'Ligula eu fermentum vulputate nullam varius quisque ornare. per diam nisl nibh dolor. felis pellentesque taciti elementum volutpat lacus purus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'A quisque himenaeos eu. vehicula',
            'description' => 'Congue primis erat adipiscing varius tortor in aenean. dictum felis malesuada viverra. felis nullam in dictumst litora bibendum malesuada. nisi',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Convallis ultrices varius nostra. quisque',
            'description' => 'Ornare taciti quis platea donec primis viverra. class habitasse augue scelerisque bibendum. tristique tristique vulputate habitant. bibendum vehicula viverra cubilia',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Placerat himenaeos netus aenean ipsum.',
            'description' => 'Luctus mollis posuere eget. magna et potenti maecenas ac sollicitudin. sem lacinia duis tortor sed. aliquam bibendum placerat curabitur lacus',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cubilia in ut felis. primis',
            'description' => 'Rhoncus gravida vivamus tincidunt venenatis duis scelerisque mollis. fringilla augue facilisis scelerisque aliquam bibendum. risus tempus enim ad torquent purus.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Elementum class ut justo dui',
            'description' => 'Phasellus tortor non duis. nulla imperdiet risus ut egestas torquent auctor. leo nam euismod dapibus netus a curae. habitant dui',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Habitant vivamus eu turpis. aliquet',
            'description' => 'Suscipit molestie himenaeos in. maecenas a condimentum fusce rhoncus sollicitudin. varius faucibus ultricies erat. duis malesuada est suspendisse. turpis in',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sociosqu eget aenean nostra nunc',
            'description' => 'Ad neque neque eu etiam. euismod non pulvinar litora fames. class facilisis litora enim nostra. viverra non suscipit placerat integer',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec quis tortor venenatis duis',
            'description' => 'Sed ullamcorper metus curabitur. sodales feugiat viverra ipsum. molestie orci ac euismod egestas blandit primis. in a congue placerat mattis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Viverra vel aptent ac luctus',
            'description' => 'Sapien maecenas a curabitur rutrum eros cursus. lectus fermentum quis tristique praesent suspendisse odio. auctor luctus leo justo cubilia. et',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Potenti himenaeos netus elementum netus',
            'description' => 'Nam tincidunt sollicitudin augue. dapibus maecenas tincidunt fringilla. aenean est nibh curae. cubilia a sapien eros vulputate blandit. vel consectetur',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Duis mollis eu dui phasellus',
            'description' => 'Porttitor ornare fames suspendisse nullam. nunc pulvinar nibh morbi. interdum suscipit hendrerit facilisis elit fusce. iaculis conubia neque mollis lacinia.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam mollis scelerisque vehicula suscipit',
            'description' => 'Euismod vivamus porttitor aenean. pretium ipsum ligula dapibus ac cras proin dui. primis primis fusce varius nulla rhoncus facilisis. blandit',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Maecenas ante tempus bibendum. platea',
            'description' => 'Hac varius ipsum suscipit nam interdum. amet tempus elementum arcu arcu eleifend tempor bibendum. tincidunt fames euismod imperdiet taciti. sodales',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nostra vivamus donec ultricies habitasse',
            'description' => 'Lacinia ultricies sem velit pharetra vehicula pellentesque dictumst. non sit cubilia himenaeos. pulvinar pretium auctor lectus curabitur. venenatis nisi tortor',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Feugiat conubia aliquet tempus libero',
            'description' => 'Pellentesque habitasse dictumst dapibus sapien mi amet. habitant malesuada luctus primis conubia lacus. amet porttitor lacinia sapien cursus sollicitudin vulputate',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pellentesque accumsan hendrerit ornare. mollis',
            'description' => 'Iaculis lacinia conubia erat rhoncus phasellus quis habitasse. tortor ultricies fames mi suspendisse per. est malesuada integer vitae vulputate morbi',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Ornare libero congue dolor lacinia',
            'description' => 'Augue metus eu phasellus magna mi. aenean donec aenean pretium. interdum netus commodo metus. adipiscing faucibus et proin sodales hac.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Elementum dui in primis auctor',
            'description' => 'Ultrices netus sociosqu inceptos ligula vitae scelerisque. dui placerat ornare fusce. consectetur neque convallis odio libero sociosqu. id aenean inceptos',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cras etiam nulla commodo praesent',
            'description' => 'Curabitur consectetur vulputate vulputate. viverra tortor ultricies ultricies turpis donec suspendisse. primis netus feugiat potenti tortor. pulvinar convallis nulla ipsum.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porta libero nostra accumsan scelerisque',
            'description' => 'Vel sagittis mi consequat. tempus blandit class aenean amet enim eros dictumst. nibh sed urna ut. ornare felis duis per',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Augue ipsum fusce vulputate ut',
            'description' => 'Enim nibh ad malesuada sagittis. fames fermentum rhoncus etiam. fames commodo gravida justo metus id gravida class. in rhoncus fringilla',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Libero senectus nunc augue. convallis',
            'description' => 'Inceptos amet vitae ac nunc gravida. molestie dui ac odio magna. hendrerit ligula senectus ante adipiscing. aliquam massa etiam iaculis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);
        DB::table('demandes')->insert([
            'title' => 'Mattis sollicitudin donec himenaeos eget',
            'description' => 'Amet id conubia est. dapibus vehicula id erat venenatis netus elit in. laoreet porttitor ante vehicula sem ante etiam faucibus.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Arcu vitae est inceptos quis',
            'description' => 'Ligula nam mi congue tincidunt. felis class congue varius etiam tincidunt. tristique tristique iaculis massa. pharetra etiam vehicula orci massa',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Viverra maecenas condimentum tristique dolor',
            'description' => 'Donec aliquet nostra consequat. elit ullamcorper tincidunt etiam mattis pretium. cubilia ut integer lacinia metus. luctus eu ac nulla habitant',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tellus lorem ac taciti mauris.',
            'description' => 'Leo aliquam ullamcorper magna ipsum malesuada pharetra. rutrum habitant amet lectus congue etiam tortor a. rutrum vehicula aenean dictum. sem',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque faucibus nibh cras sed',
            'description' => 'Suspendisse ornare elementum vulputate faucibus bibendum etiam. tortor vehicula at etiam. turpis egestas libero suscipit sociosqu. cras himenaeos tristique proin',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dapibus enim habitasse placerat ac.',
            'description' => 'Ut fringilla class lacinia. habitasse ante tellus laoreet potenti tempus pulvinar nulla. mauris quisque ad platea mollis himenaeos ut tortor.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Pulvinar cubilia aenean auctor ornare',
            'description' => 'Purus sagittis volutpat dictumst. orci luctus fusce mollis et et. commodo quis et ultrices lacus dui. dolor vitae nec tempor.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque inceptos blandit fermentum donec.',
            'description' => 'Sit vulputate amet senectus. nullam feugiat mi porttitor ad faucibus. orci vel ullamcorper vehicula praesent felis. habitant facilisis aliquam senectus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Scelerisque nunc iaculis feugiat justo.',
            'description' => 'Massa laoreet primis phasellus malesuada. molestie per at hendrerit libero enim elit tincidunt. inceptos duis facilisis taciti curae pellentesque. nec',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Interdum convallis congue nibh tempor',
            'description' => 'Nam fermentum fermentum pulvinar ultricies. vulputate molestie tempus sit sollicitudin. malesuada velit nostra eros. ligula curabitur vivamus aliquet nisl donec',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nunc vitae metus ipsum. torquent',
            'description' => 'Accumsan curae cras torquent at elementum dolor curabitur. in est maecenas justo. condimentum amet pharetra eleifend. nunc vivamus ornare elit',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Primis tincidunt aenean odio in.',
            'description' => 'Interdum vestibulum venenatis eleifend lacus varius. tempus lacinia ornare faucibus est. suscipit auctor ultrices malesuada quam. dui suscipit ac in',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Platea eu praesent pharetra. dictumst',
            'description' => 'Senectus taciti sociosqu ornare ligula donec enim bibendum. et hac ligula nisl interdum eleifend lacus bibendum. tincidunt consequat nec diam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Volutpat aenean nec etiam. semper',
            'description' => 'Aliquet consectetur et tempus aenean dictum. donec fermentum quam litora sagittis cras. pharetra ullamcorper vel nullam. fermentum integer leo maecenas',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cras interdum quam sapien phasellus',
            'description' => 'Consequat tempus lorem mattis. phasellus nullam nullam placerat ut dictumst. accumsan suspendisse id maecenas mi euismod. class sodales tempus sem',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ligula ad sapien sollicitudin. donec',
            'description' => 'Risus curae eu tellus torquent ultricies varius sollicitudin. magna imperdiet molestie velit. nullam auctor sollicitudin vehicula iaculis quis faucibus odio.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Augue netus suscipit risus facilisis.',
            'description' => 'Faucibus nulla lorem dictum donec. curabitur eleifend ultrices habitant. aenean hendrerit elit erat justo. facilisis et pulvinar nibh. aenean ullamcorper',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vestibulum nam tortor nam cubilia.',
            'description' => 'Orci sodales curae semper enim dui. class augue accumsan orci ultricies. nec consectetur libero tortor sollicitudin cras suscipit. donec libero',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Elementum hendrerit pulvinar tempor. ornare',
            'description' => 'Commodo imperdiet aliquam risus. pulvinar nibh rutrum rutrum nisl adipiscing. nisl lacus torquent id imperdiet viverra taciti. sodales convallis justo',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sodales a turpis risus. ut',
            'description' => 'Amet risus hendrerit scelerisque. suspendisse ad amet quis elementum tellus fringilla. taciti congue nam ullamcorper. donec accumsan ultrices porttitor. iaculis',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Elementum condimentum faucibus commodo. euismod',
            'description' => 'Orci nisl eget morbi cursus euismod luctus ad. orci egestas aliquam urna. egestas hac posuere lectus justo varius. egestas viverra',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Habitasse sem scelerisque lobortis ultricies',
            'description' => 'Luctus consequat tristique at eget. risus tristique blandit sed. dictumst ut morbi fringilla integer. auctor elit nunc eu. malesuada suspendisse',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Senectus metus commodo nibh. pretium',
            'description' => 'Commodo nec augue elementum senectus donec pretium. pellentesque mi tristique potenti massa. vivamus quisque tempus mollis ultricies. arcu amet nisl',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aptent enim volutpat felis id',
            'description' => 'At senectus non orci porta inceptos. rhoncus imperdiet accumsan vulputate justo tempor. torquent eu aliquam aliquet. ut pretium vivamus tellus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Auctor phasellus ipsum ut ipsum',
            'description' => 'Consectetur rutrum metus ad vitae. mauris metus fames nullam vestibulum vivamus varius. facilisis vivamus vitae volutpat tempor consequat lobortis. aliquet',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cras iaculis pulvinar tristique potenti.',
            'description' => 'Suspendisse fames at lobortis. auctor accumsan aptent ut nec conubia cubilia in. lacinia imperdiet vestibulum nibh varius. aliquam morbi ut',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Habitasse ac lacinia neque ac',
            'description' => 'Proin mollis interdum facilisis enim donec aptent proin. augue magna suscipit donec erat blandit pulvinar adipiscing. dictum vitae cras quam',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Morbi metus aenean elit laoreet',
            'description' => 'Donec urna mattis euismod. vulputate lobortis et proin quisque maecenas neque ac. rhoncus venenatis praesent sit in integer libero. est',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Egestas aenean pretium ligula malesuada',
            'description' => 'Sollicitudin torquent mauris maecenas mollis suspendisse platea. molestie at faucibus elit. porttitor himenaeos metus nullam per rhoncus venenatis tellus. feugiat',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Augue netus aptent feugiat libero',
            'description' => 'Platea mauris consectetur posuere quis. aptent lobortis aliquam ipsum. porta dapibus purus cras metus mattis habitant cras. sociosqu arcu duis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Turpis ullamcorper a arcu. viverra',
            'description' => 'Vehicula suscipit metus felis. sagittis ipsum auctor mollis tortor habitant lacus. nostra curabitur luctus curabitur nullam platea eros. cubilia laoreet',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mi accumsan a nisi rhoncus',
            'description' => 'Eu ac lacinia nulla netus etiam erat. mollis sem ut inceptos nulla ut. aliquet ultricies quisque rutrum tellus amet. morbi',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Facilisis urna magna leo cras.',
            'description' => 'Consectetur arcu aliquam fermentum. nibh himenaeos auctor orci aliquam orci. morbi odio varius aptent sodales. facilisis volutpat diam dapibus curabitur',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Suscipit feugiat condimentum a vehicula',
            'description' => 'Condimentum placerat dui tempor porta lacus blandit. ad sapien felis mauris tristique consequat. sodales aliquam id quam. fusce rhoncus ad',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Odio posuere scelerisque vulputate pretium.',
            'description' => 'Commodo suspendisse et donec himenaeos. tristique cras felis donec ultrices interdum velit. suscipit maecenas ut viverra ligula. placerat risus interdum',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ornare tempor cubilia quam curabitur',
            'description' => 'Curabitur primis turpis interdum eros erat aptent. pharetra fusce sit mauris neque aenean commodo. nec purus dictum elit etiam dapibus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Elementum etiam hendrerit tellus imperdiet.',
            'description' => 'Pellentesque leo ullamcorper tempor ornare malesuada fames tristique. dui tempor fermentum erat. potenti himenaeos etiam curae. habitasse elementum ultricies egestas.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam justo ligula litora est',
            'description' => 'Vel eget vivamus cras scelerisque velit hendrerit netus. congue aenean sed imperdiet quam ligula justo. lorem neque lacinia blandit. class',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur nam nibh massa. metus',
            'description' => 'Curabitur mollis semper interdum mollis adipiscing mauris aliquam. tellus et platea aenean dictum velit enim. curae vestibulum imperdiet ipsum curabitur',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sit elementum rutrum et suscipit',
            'description' => 'Aenean facilisis fermentum morbi quisque. interdum commodo congue lorem adipiscing suscipit id mi. platea tempus suspendisse mauris vehicula lobortis. elementum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sociosqu netus taciti purus vestibulum',
            'description' => 'Phasellus curabitur fermentum sed. sed risus donec donec leo aenean libero venenatis. cursus venenatis etiam nullam phasellus. cursus sapien tempus',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo semper enim elementum leo.',
            'description' => 'Pellentesque ad molestie eleifend viverra id. fusce ultrices nunc dapibus nulla congue. dolor gravida ante tempor cubilia consectetur. maecenas eros',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Vel dapibus et dictumst magna',
            'description' => 'Amet praesent ad tincidunt orci dui vestibulum amet. accumsan porttitor cursus senectus ipsum sagittis euismod sed. placerat consectetur suscipit vestibulum.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Non bibendum scelerisque rhoncus consequat',
            'description' => 'Vestibulum proin bibendum cras leo tempus consequat tincidunt. fermentum elit etiam neque. imperdiet donec sollicitudin fames lobortis. dictumst vitae quam',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Viverra auctor commodo nec. velit',
            'description' => 'Rutrum pellentesque enim risus ante proin. rhoncus class maecenas varius sagittis. tortor odio gravida velit purus. himenaeos orci condimentum habitant',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque viverra suscipit eleifend. cubilia',
            'description' => 'Eleifend eleifend justo litora suscipit. maecenas nam odio feugiat ornare ipsum nec. cras suspendisse luctus lacinia. felis bibendum feugiat accumsan',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porta ut ad sit bibendum',
            'description' => 'Massa massa sodales nec potenti. vehicula sociosqu augue libero scelerisque felis. justo blandit malesuada velit ipsum. interdum purus libero integer',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ac donec litora placerat ut',
            'description' => 'Condimentum ullamcorper praesent erat nam. lobortis velit purus conubia donec. adipiscing quam amet ullamcorper elit. justo facilisis neque faucibus egestas',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);
        DB::table('demandes')->insert([
            'title' => 'Accumsan velit faucibus leo. convallis',
            'description' => 'Sollicitudin sagittis scelerisque suspendisse pulvinar sed nostra tempus. est aliquet quam integer rutrum eu. scelerisque cubilia nunc lacinia aliquam nunc',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pharetra malesuada litora curae viverra',
            'description' => 'Leo inceptos nec quisque quam netus in. hendrerit sapien duis nec diam. nec lobortis dapibus vestibulum elit. conubia porta elementum',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Conubia molestie facilisis eleifend lacus',
            'description' => 'Aliquam sem auctor egestas phasellus. hac elit nullam taciti cubilia ligula ultrices fusce. magna lacus vivamus commodo. per habitasse nisl',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Diam etiam cras massa netus',
            'description' => 'Ullamcorper netus varius tristique. praesent fringilla tortor ultrices maecenas aliquam volutpat etiam. fames felis curabitur nulla habitant vestibulum elementum nibh.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Adipiscing eget quisque amet nulla.',
            'description' => 'Urna maecenas bibendum etiam primis. ullamcorper varius ut ligula habitant torquent dictum. venenatis ad mi non nibh sit gravida consequat.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices habitasse torquent quisque nunc',
            'description' => 'Proin venenatis leo quisque neque non risus. nostra pretium torquent rhoncus tempor. risus viverra imperdiet aliquam auctor purus accumsan. justo',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Augue porttitor fringilla faucibus viverra',
            'description' => 'Risus habitant porta ornare fermentum pellentesque. volutpat et tincidunt urna sagittis lacinia tempus himenaeos. semper dolor nostra convallis nec luctus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut arcu platea proin ullamcorper',
            'description' => 'Morbi aliquet accumsan litora. at tristique cubilia rhoncus rutrum. vehicula accumsan mi class dapibus elit ligula condimentum. nam placerat ullamcorper',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lorem urna aliquam ut. scelerisque',
            'description' => 'Purus ultrices porttitor senectus nisi tincidunt per. neque fames cubilia iaculis enim. nisl tempus facilisis senectus lacinia. dolor aliquet turpis',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dictumst suscipit et lacinia fusce',
            'description' => 'Potenti libero egestas dui viverra. ipsum primis fames duis ultrices hendrerit. malesuada in pellentesque nisl amet tincidunt pulvinar. senectus platea',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Amet primis enim sollicitudin netus',
            'description' => 'Tincidunt tincidunt cubilia interdum mattis. euismod mollis risus placerat facilisis. inceptos consequat laoreet nullam sociosqu eleifend metus. ligula magna imperdiet',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Metus tincidunt maecenas taciti. facilisis',
            'description' => 'Quam integer sed eget ac mi eu vehicula. lacus malesuada integer diam suscipit curabitur. erat dictumst habitasse mollis. nullam dictum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Auctor laoreet mauris mattis cubilia.',
            'description' => 'Aliquam per velit curae. aenean per ultricies viverra tempus a. ultricies eros per convallis ornare lectus odio mattis. purus purus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Urna ut dapibus conubia lobortis.',
            'description' => 'Justo ante dictumst mi elementum proin. mi consectetur vulputate sapien arcu vivamus tellus. cras lacinia faucibus velit. amet eleifend augue',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec velit pharetra vulputate est',
            'description' => 'Vestibulum suspendisse quam donec platea turpis tincidunt. eget faucibus fusce tempus mauris augue. aliquam tempus leo aenean pellentesque nunc netus.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aptent sapien dapibus justo curabitur',
            'description' => 'Senectus tortor turpis dui. blandit amet varius urna euismod pulvinar tincidunt. mattis vulputate ullamcorper taciti convallis metus venenatis. posuere rhoncus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Iaculis sodales magna ad inceptos',
            'description' => 'Etiam ante proin tristique viverra. tellus aptent mi ut porttitor. ac donec etiam ac ullamcorper varius maecenas lectus. eros placerat',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Neque non interdum proin ut',
            'description' => 'Luctus aliquam blandit eros et et class. at tempus vestibulum leo leo dictum rutrum nibh. mattis etiam nunc orci consequat.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Orci gravida conubia placerat. commodo',
            'description' => 'Erat sodales malesuada congue congue egestas. praesent ullamcorper ligula quisque bibendum ornare. cras aenean euismod tempor. neque sem eu mauris',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Purus aenean iaculis ligula varius',
            'description' => 'Nisi amet pulvinar vivamus ipsum ac molestie. ut sed conubia torquent consequat vel quisque praesent. tincidunt arcu malesuada commodo ligula',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Libero justo praesent etiam a',
            'description' => 'Maecenas aptent sed donec. ultricies turpis euismod elementum commodo mattis. quisque inceptos aenean dictum. litora orci urna tincidunt dapibus placerat',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Platea dictumst justo mi maecenas.',
            'description' => 'Amet cursus dapibus amet torquent scelerisque quisque augue. netus laoreet nisl cursus viverra iaculis luctus. pharetra habitasse etiam vestibulum pharetra.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Augue curae fringilla rutrum. enim',
            'description' => 'Elit arcu tempor inceptos etiam nostra condimentum. odio nullam quam enim vel ac nisi augue. nisi vestibulum mi a eu',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Egestas quisque aptent laoreet. dictum',
            'description' => 'Quam sapien bibendum consectetur tortor tortor a metus. posuere cras ipsum platea ultricies tempus morbi. curae dolor eu dapibus platea',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);
        DB::table('demandes')->insert([
            'title' => 'Lacus cursus inceptos morbi tempus',
            'description' => 'Gravida metus pretium pretium aliquam eleifend a. elit etiam elit viverra. id suspendisse pharetra conubia. enim mauris tellus massa accumsan',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultricies platea risus ultrices suscipit',
            'description' => 'Lobortis gravida auctor sociosqu urna. adipiscing molestie in consectetur suspendisse. aenean iaculis ornare ultricies odio ipsum. ut pharetra vestibulum bibendum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Libero morbi aliquam rutrum. ultricies',
            'description' => 'Nibh quisque eget turpis vulputate. augue interdum urna ut congue. ut aliquet conubia faucibus sit senectus. inceptos suspendisse velit conubia',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Conubia primis ornare ipsum vitae.',
            'description' => 'Conubia placerat facilisis rutrum conubia curabitur tempor laoreet. habitasse vehicula viverra pharetra. etiam curae rhoncus porttitor bibendum nibh. vel porta',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mattis senectus ultrices leo nam',
            'description' => 'Leo himenaeos conubia eget habitasse etiam. primis accumsan mattis egestas donec tellus. nec cursus mollis egestas in donec. fermentum iaculis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Neque lacus vulputate eu. ante',
            'description' => 'Suscipit mauris diam elit aliquet metus. ullamcorper erat felis odio eget feugiat. fringilla imperdiet auctor adipiscing nec. sollicitudin aliquam auctor',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Consequat ornare rhoncus proin ligula',
            'description' => 'Ligula ultricies commodo congue sagittis senectus sed. inceptos litora nibh eleifend placerat himenaeos. purus id porta vitae ipsum euismod. ante',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Erat ultrices fringilla suscipit elit',
            'description' => 'Placerat sit torquent pharetra. suspendisse morbi habitasse curae taciti. aliquet enim quisque leo hac mauris gravida arcu. blandit amet condimentum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cras proin lobortis aliquam. tincidunt',
            'description' => 'Suspendisse inceptos sodales posuere ligula. torquent id donec curabitur convallis facilisis. rutrum morbi etiam himenaeos neque. aliquam litora hac fringilla',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 9,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Urna libero quisque imperdiet quam',
            'description' => 'Netus scelerisque est tristique. habitasse eu ultricies faucibus tempus semper malesuada. aenean sapien ullamcorper eu ornare varius. facilisis maecenas sodales',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Conubia neque risus cubilia habitasse',
            'description' => 'Hac odio est velit quisque metus. tellus nisi faucibus etiam ligula netus sit. sem libero class eleifend senectus donec tellus.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tortor quam aliquam mauris vehicula.',
            'description' => 'Lacinia justo quis vehicula vehicula aenean eu. nec placerat habitasse sem etiam elementum. himenaeos leo non feugiat pretium interdum aliquam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Massa arcu est vivamus facilisis',
            'description' => 'Convallis condimentum ante risus fermentum. malesuada justo ultrices nunc. dictumst eleifend lectus fames. magna ipsum porttitor amet. ad convallis sagittis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Hendrerit consectetur placerat mi vulputate',
            'description' => 'Mi sollicitudin sollicitudin ligula. ut suscipit accumsan ad amet inceptos dapibus maecenas. tempor sem litora magna netus netus amet. cursus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nisl ornare elit sit curabitur',
            'description' => 'Eget fermentum et leo feugiat turpis ligula. aliquam fringilla cursus hendrerit libero. imperdiet pellentesque vel massa. dictum imperdiet curae bibendum',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec amet morbi ante enim',
            'description' => 'Integer dolor nec tempor arcu felis mattis. aptent pretium lorem augue sodales proin tempus ut. posuere ipsum orci sem fusce',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Arcu libero quis non nisl.',
            'description' => 'Nisl pellentesque quis praesent lacus potenti tincidunt senectus. condimentum tellus neque rhoncus viverra dui. laoreet justo aliquam quam. a vestibulum',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean arcu tempus quam. habitant',
            'description' => 'Etiam tempor dapibus vivamus. pretium ultricies scelerisque convallis ultricies. dapibus quam imperdiet turpis. ullamcorper laoreet rutrum curabitur vestibulum ante. torquent',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Varius ultrices ullamcorper dictumst ornare.',
            'description' => 'Donec vehicula ultricies tortor. metus eu facilisis ante. rhoncus aliquam inceptos sagittis. adipiscing nunc consequat fermentum vivamus vulputate. nam congue',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacinia venenatis senectus tortor. quam',
            'description' => 'Ornare lobortis vel habitant. et rutrum quisque placerat eros. facilisis pharetra nullam morbi tristique praesent. velit eros senectus litora. malesuada',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nec tortor lorem senectus. aliquet',
            'description' => 'Justo justo duis sociosqu. congue nisi praesent mollis est curabitur. lacus rutrum sodales consectetur porttitor odio. quam sit erat accumsan.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sodales euismod dictumst tempor adipiscing.',
            'description' => 'Urna sed blandit curae habitant. netus quis curabitur et velit ut pharetra. ornare facilisis non interdum fusce mollis massa sit.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cubilia lobortis turpis integer sed',
            'description' => 'Bibendum fermentum blandit habitant porttitor enim mi. imperdiet tristique nostra ligula curabitur lacinia. adipiscing quisque taciti praesent. integer aenean mattis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Enim suspendisse consequat primis venenatis.',
            'description' => 'Libero at pharetra litora vestibulum rhoncus fusce senectus. netus curae nibh vulputate pulvinar curabitur. ultricies vivamus curae ultricies varius elementum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);
        DB::table('demandes')->insert([
            'title' => 'Egestas venenatis himenaeos ut. feugiat',
            'description' => 'Ut curabitur donec netus. laoreet iaculis vestibulum platea. curabitur rutrum orci cubilia etiam habitant proin vivamus. ligula vivamus eleifend lectus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam eros tempor condimentum praesent',
            'description' => 'Aliquam litora porttitor condimentum eget dui etiam nullam. lacinia dui quisque suspendisse viverra ut ac justo. eu aliquam donec vulputate',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Purus aliquam porttitor tristique purus',
            'description' => 'Molestie vestibulum torquent odio odio potenti tempor quam. donec praesent vestibulum ut donec curabitur. ut dictum nam nisl. laoreet ut',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sodales nisi sem tristique. sapien',
            'description' => 'Torquent ipsum in nulla potenti porta sed. egestas sapien taciti tortor ante. maecenas odio pulvinar platea dolor. pretium luctus varius',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dapibus nullam etiam curae fringilla',
            'description' => 'Placerat maecenas malesuada quis ut. eget massa nam dapibus lorem. nunc sagittis risus nam nullam per cubilia porta. aliquet tristique',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices sollicitudin egestas a donec.',
            'description' => 'Ut rhoncus ligula eget laoreet primis mattis. nibh sapien eleifend aliquam vivamus duis massa. tincidunt ullamcorper lacus consectetur rutrum vitae.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Etiam hendrerit in gravida congue',
            'description' => 'Proin nulla enim et aenean lorem dapibus. vitae tincidunt feugiat faucibus. diam massa vehicula magna diam lorem sociosqu convallis. pretium',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cubilia convallis nec vel. lacinia',
            'description' => 'Mattis nunc fames et. diam malesuada consectetur urna dictum bibendum. nam varius mattis porttitor massa phasellus inceptos. viverra fusce litora',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Turpis primis enim donec cursus',
            'description' => 'Taciti morbi justo hendrerit aliquam dictumst ut. curabitur ornare aenean maecenas risus lobortis habitasse felis. amet placerat tempor integer consequat.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo lacus mollis integer viverra',
            'description' => 'Imperdiet libero consectetur convallis egestas vestibulum. purus tempus adipiscing mauris posuere torquent turpis. rhoncus vehicula augue varius. quam tortor lacus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Habitant volutpat posuere ante elit.',
            'description' => 'Eu platea magna odio arcu. platea a pretium sapien sem adipiscing. consequat sollicitudin suspendisse ligula fringilla adipiscing non. pellentesque sociosqu',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Orci molestie cubilia pretium inceptos',
            'description' => 'Aenean eros aenean convallis donec dictumst iaculis. primis magna nisi tortor. litora facilisis inceptos morbi cubilia himenaeos. tellus est est',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Mattis at per sem. netus',
            'description' => 'Tortor quis venenatis odio vulputate at urna. dapibus arcu volutpat purus dictum nunc dolor dictum. congue fringilla commodo consequat nisi.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Egestas ultrices phasellus phasellus blandit.',
            'description' => 'Aptent auctor sem fusce aenean dictum aptent. sem etiam neque massa sed. risus elementum vulputate et suspendisse. suscipit placerat primis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque elit elit suspendisse massa',
            'description' => 'Massa nisl urna malesuada ultrices consequat. feugiat elementum facilisis ad sociosqu. malesuada mi consectetur ut porta eu bibendum quisque. integer',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Proin sollicitudin adipiscing euismod turpis',
            'description' => 'Tristique velit senectus fringilla eget ultricies ullamcorper. vulputate eros nibh nec. aliquam volutpat nulla euismod fermentum ornare suscipit auctor. torquent',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Est feugiat quisque semper praesent',
            'description' => 'Pretium interdum scelerisque pretium vestibulum lacinia sagittis himenaeos. odio curabitur vulputate etiam aenean. nunc purus congue phasellus pretium. commodo suscipit',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cras non lacinia consectetur tellus',
            'description' => 'Eleifend vestibulum feugiat felis hendrerit. interdum turpis ultricies tristique etiam proin. scelerisque libero primis ligula nisl sociosqu. massa conubia rhoncus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Senectus semper vel bibendum neque',
            'description' => 'Nostra curae maecenas lectus lorem sagittis suspendisse suspendisse. platea dictumst vitae vivamus inceptos. consectetur quisque scelerisque vestibulum condimentum varius fringilla.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Condimentum euismod nunc tempus. arcu',
            'description' => 'At cras nullam nec faucibus nam ultricies. praesent metus eu sed libero lectus hendrerit sed. placerat integer velit ipsum fusce',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Iaculis magna vulputate leo. imperdiet',
            'description' => 'Sagittis in aliquam malesuada nisl nec pulvinar. facilisis ornare turpis fames. metus mauris dolor volutpat orci aenean sit tempor. himenaeos',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nunc habitasse ut dui dictum',
            'description' => 'Dui a aptent sagittis in pulvinar nunc pretium. eleifend velit rhoncus netus iaculis donec. mi lectus donec vivamus sed id',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque euismod potenti in tincidunt',
            'description' => 'Cubilia ultrices fusce nullam etiam adipiscing etiam. arcu semper aptent hendrerit eros aliquam hac. gravida aliquam ullamcorper netus. blandit auctor',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur suspendisse hendrerit tristique. eu',
            'description' => 'Eu varius risus aenean cubilia aenean. blandit phasellus nunc orci quis taciti. torquent fusce fames dolor in. metus aliquam maecenas',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Suscipit elementum dapibus lacus. posuere',
            'description' => 'Nisi habitasse felis urna nec. magna hac morbi mattis arcu. magna etiam ut dictum tortor. suspendisse ornare per fringilla. ullamcorper',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nam laoreet iaculis porttitor cursus',
            'description' => 'Morbi fringilla in cursus felis quam. risus ad eros felis quisque dapibus pharetra. urna integer felis neque lobortis. aenean tellus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Id rutrum per hac fames.',
            'description' => 'Ad fames sem et convallis. tempus sodales ad viverra vulputate bibendum. nibh etiam netus eu lorem. sodales suspendisse conubia luctus',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eget mauris habitant per sodales',
            'description' => 'Aliquam ultrices sapien vehicula vehicula accumsan. maecenas vivamus ornare arcu primis etiam. scelerisque quisque donec cursus. amet congue vitae placerat',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Habitasse bibendum molestie nostra nisl.',
            'description' => 'Scelerisque vulputate phasellus condimentum amet pellentesque vel. libero tincidunt consequat euismod. sem fermentum orci habitasse orci purus torquent elementum. arcu',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Elit nec dolor sodales. vel',
            'description' => 'Mattis libero a nam nibh imperdiet eleifend. porttitor amet dictumst eget. interdum vulputate mauris ad diam cubilia suspendisse porta. id',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Laoreet accumsan interdum leo suscipit',
            'description' => 'Mi curabitur quam eros amet curabitur potenti per. vel aenean aenean nisl urna netus conubia. primis purus litora libero in',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Proin nisl aliquam at magna',
            'description' => 'Eu dictum venenatis malesuada aenean etiam etiam. scelerisque conubia aliquam ultricies aenean inceptos. mi senectus eu feugiat. per arcu velit',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vestibulum vehicula dapibus et venenatis.',
            'description' => 'Ad donec ligula pellentesque. tristique libero phasellus sit nullam torquent senectus dictumst. vehicula scelerisque semper ac ad porttitor. morbi sagittis',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pretium proin quisque purus. curabitur',
            'description' => 'A conubia diam praesent integer mollis blandit. dictumst mattis erat vestibulum nibh non quisque. aliquet etiam commodo sodales orci ut',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Semper quisque cras semper at',
            'description' => 'Placerat aenean odio nam proin. rhoncus taciti feugiat aliquam. tortor consequat ac aenean a ut. magna dictumst metus dolor non',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Arcu accumsan vulputate morbi. habitasse',
            'description' => 'Curabitur in consequat integer aenean lobortis id. aliquet turpis viverra elit platea fringilla phasellus. tincidunt dictumst tempor mi ante molestie.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Donec amet tortor convallis curabitur',
            'description' => 'Hac amet porttitor etiam. convallis tempor felis congue dolor sapien. mattis iaculis commodo non inceptos sit bibendum ante. at tincidunt',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sociosqu maecenas tellus ut augue',
            'description' => 'Lacinia rhoncus ut dui elit nisl. curabitur curabitur imperdiet viverra. rhoncus cubilia pharetra condimentum aptent suscipit vehicula nunc. pretium augue',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Augue hendrerit a molestie litora',
            'description' => 'Nisl ipsum sit faucibus condimentum hendrerit vulputate consequat. tempus elementum ac senectus donec hac consectetur feugiat. mauris justo velit euismod',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Turpis urna bibendum sit donec.',
            'description' => 'Consectetur pretium tempor nisi aliquet donec feugiat nullam. mollis cubilia non sodales condimentum accumsan. morbi morbi felis in cras. at',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec accumsan mi netus aenean.',
            'description' => 'Vivamus ornare aliquet morbi in. gravida ligula dictum lectus tempor. quam quisque habitasse nostra cubilia laoreet tortor. tortor tempor himenaeos',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Gravida vulputate posuere quisque imperdiet',
            'description' => 'Quisque faucibus tempor scelerisque neque orci. a pellentesque ornare faucibus. curabitur taciti nulla cursus. neque hendrerit curae libero mauris velit.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Eget fusce aliquam proin netus.',
            'description' => 'Nostra mi rutrum nullam facilisis suscipit. integer tellus nisi accumsan enim erat platea curae. imperdiet posuere consequat morbi urna luctus.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Placerat cras morbi dolor maecenas',
            'description' => 'Cubilia euismod ullamcorper sit. quisque sem dapibus ad eget eros ut senectus. ut eget libero et ultricies mauris sit. elementum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Faucibus fusce ipsum eros conubia.',
            'description' => 'Vehicula morbi sociosqu ipsum aliquam eget. vivamus faucibus cubilia cursus odio. faucibus mi praesent nisl phasellus ornare torquent. nullam curae',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Purus sed bibendum porttitor aliquet',
            'description' => 'Fringilla ipsum a posuere tempor placerat ligula. non potenti vehicula euismod maecenas sit potenti taciti. himenaeos augue vivamus euismod aliquam',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam justo hac auctor lacinia',
            'description' => 'Habitasse vitae porttitor condimentum integer aenean neque faucibus. nibh condimentum dictum nec urna rhoncus. hac convallis sodales suspendisse non rhoncus',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut pulvinar pellentesque magna mauris',
            'description' => 'Cursus ut ullamcorper auctor. eu justo amet ultrices. odio quisque est sagittis cubilia molestie. ante varius purus maecenas condimentum. donec',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);
        DB::table('demandes')->insert([
            'title' => 'Suspendisse tempus nunc hac bibendum',
            'description' => 'Maecenas sit etiam ornare inceptos himenaeos. tristique etiam donec habitant semper volutpat viverra condimentum. vitae est primis imperdiet. nullam ad',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Molestie vel sociosqu hac. lacus',
            'description' => 'Molestie enim conubia suspendisse risus ornare per libero. suspendisse at aliquam justo. vivamus eget ut in. morbi suscipit nisi nisi',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sodales habitant a eleifend aptent.',
            'description' => 'Odio in pulvinar luctus mattis class aliquam. sollicitudin consequat per habitasse neque. pretium pulvinar praesent rhoncus libero pulvinar arcu. nibh',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Integer ligula ultrices integer dapibus',
            'description' => 'Tortor orci orci per nisl. malesuada blandit etiam molestie. facilisis a rutrum lacinia amet laoreet mi. semper imperdiet posuere ipsum.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consequat leo scelerisque vulputate erat.',
            'description' => 'Per massa condimentum et phasellus mi odio. leo sapien fringilla at. proin proin sed praesent justo. facilisis tortor dictum justo',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo magna primis blandit mollis.',
            'description' => 'Pellentesque laoreet fermentum semper. nec libero condimentum curabitur vivamus cubilia per dolor. nullam nunc rhoncus malesuada. placerat potenti maecenas curabitur.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Volutpat tellus libero curabitur fringilla',
            'description' => 'Tempor conubia faucibus torquent tempor interdum. consequat pulvinar ipsum curae nostra dictumst risus. fames ut mi cubilia himenaeos dictumst. adipiscing',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tempor dictumst ultricies nostra. vitae',
            'description' => 'Blandit suspendisse tincidunt fusce condimentum convallis suspendisse sem. tempor leo proin vivamus faucibus augue lacinia proin. imperdiet conubia aptent semper',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Euismod venenatis arcu senectus. sed',
            'description' => 'Commodo purus tempus nulla neque donec varius tempus. nulla eget scelerisque erat varius sollicitudin. fringilla libero elit mi neque nibh',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur ultricies commodo accumsan placerat.',
            'description' => 'Malesuada ac elementum tortor ac sapien enim. litora tellus praesent leo primis sagittis primis pulvinar. neque vehicula curabitur rutrum mi',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Class urna habitant libero dui',
            'description' => 'Mollis magna pharetra dolor luctus. venenatis donec curabitur praesent nam auctor suspendisse. curabitur a et curabitur aptent fermentum. tortor mattis',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nostra mauris eu interdum. donec',
            'description' => 'Nam venenatis potenti feugiat diam nullam urna. vitae ante conubia bibendum at class arcu. curae porta potenti primis. maecenas vel',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Iaculis rhoncus augue malesuada class.',
            'description' => 'Sit fermentum interdum leo. primis vehicula blandit vel fringilla primis rutrum sollicitudin. porta duis quam lacinia placerat curabitur. ut ullamcorper',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tristique augue mauris suscipit cras.',
            'description' => 'Dapibus habitasse blandit augue lobortis. cubilia et tellus metus. fermentum nunc dictumst bibendum. per nisi velit suscipit accumsan sem nostra',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Per suscipit mauris adipiscing amet',
            'description' => 'Platea pharetra condimentum metus laoreet neque. mauris nulla egestas netus consectetur mauris. suspendisse porta nec per pellentesque feugiat vulputate ut.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet ad ligula nunc. auctor',
            'description' => 'Quisque felis tempor lacus in malesuada. sit sociosqu ipsum pulvinar eu ligula integer nostra. aptent non id nullam sodales dictum.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'At curae torquent egestas suspendisse',
            'description' => 'Odio habitant tellus tellus. aptent luctus mauris consectetur neque. pharetra ullamcorper tincidunt nisi venenatis erat in. turpis nostra mattis vulputate',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Orci viverra suspendisse primis. fringilla',
            'description' => 'Faucibus viverra eleifend pellentesque at quis enim duis. iaculis suspendisse sem proin eleifend curabitur euismod. nec nam egestas malesuada tellus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Platea justo scelerisque proin maecenas',
            'description' => 'Elementum ac fermentum habitant eget proin. massa auctor libero viverra. per suspendisse praesent consequat sagittis leo. vulputate facilisis felis phasellus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices imperdiet facilisis venenatis ullamcorper',
            'description' => 'Sapien fermentum porta vivamus. inceptos per inceptos ullamcorper vitae ultrices. risus leo varius class libero curabitur. etiam vehicula habitant nibh',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacus aptent sem platea primis',
            'description' => 'Pretium rhoncus feugiat nam. mi nostra vivamus augue. sapien etiam libero sagittis feugiat platea phasellus. massa laoreet phasellus aliquet semper',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Suspendisse sapien venenatis mollis. at',
            'description' => 'Conubia leo est iaculis maecenas orci donec. aenean a eu scelerisque. cursus fames mi elit etiam. auctor viverra at in',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque fringilla molestie urna. faucibus',
            'description' => 'Pulvinar aliquam quisque elit. mi bibendum ipsum rhoncus nullam dictumst nisi ad. libero porttitor volutpat himenaeos blandit amet suspendisse arcu.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet potenti placerat aenean. ullamcorper',
            'description' => 'Varius donec ad lobortis enim aenean. aliquet elementum primis etiam congue luctus. amet cubilia id arcu auctor condimentum orci viverra.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Convallis ultricies nullam nisi. porta',
            'description' => 'Senectus curae lobortis nisi non posuere. ornare etiam et nisi dapibus aptent. nunc fermentum nullam pellentesque urna himenaeos. diam in',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Varius orci posuere eget accumsan.',
            'description' => 'Congue varius ullamcorper suspendisse pretium. rutrum iaculis praesent felis mattis quisque quisque. porta risus tempor congue quam lacinia. odio malesuada',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Platea diam proin ullamcorper himenaeos',
            'description' => 'Mi sit id conubia imperdiet. ultrices lobortis habitasse erat leo. leo eget vel purus donec duis vehicula. vulputate quam nulla',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Malesuada mauris imperdiet quisque himenaeos',
            'description' => 'Sociosqu himenaeos aptent quis. faucibus vehicula neque volutpat eros. vel ac diam donec. suspendisse non curae aliquam dictum. donec quam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porttitor aptent metus proin. magna',
            'description' => 'Etiam laoreet curabitur ornare in semper gravida. a eros vulputate hendrerit donec augue. dictumst quam class curabitur sem. dui ornare',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque aliquet quisque egestas. et',
            'description' => 'Vel felis iaculis scelerisque vel nam libero curabitur. fames faucibus quisque fames lacus. fames venenatis fames faucibus aenean interdum quisque.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Nisi viverra in venenatis pretium',
            'description' => 'Diam senectus dapibus cras porta. augue a metus ac faucibus nec. luctus mollis justo nostra nam litora tellus. porttitor taciti',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Libero velit nec velit blandit',
            'description' => 'Quisque non tortor auctor platea porttitor blandit justo. nulla quis donec ut class fames. netus donec pulvinar lacinia arcu odio.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eget dapibus nec nibh varius',
            'description' => 'Nulla ac sapien non malesuada aenean nulla leo. volutpat potenti auctor pulvinar aliquam duis amet habitasse. potenti vivamus per himenaeos',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Magna sagittis arcu mattis. imperdiet',
            'description' => 'Sed commodo bibendum eu facilisis dapibus. ultrices imperdiet ad ipsum vulputate. enim conubia enim hac litora blandit proin duis. ullamcorper',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nostra senectus iaculis sem senectus.',
            'description' => 'Ornare duis donec pulvinar ut lacus curabitur cubilia. sit nulla curabitur purus odio netus. tempus imperdiet ipsum suscipit libero nisl',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices at nibh rutrum euismod.',
            'description' => 'Rutrum a curabitur maecenas pharetra. purus curabitur ut libero in ante dolor. condimentum hac in accumsan iaculis ultricies litora tempor.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Nulla est sagittis molestie varius.',
            'description' => 'Tristique quisque sociosqu aptent pharetra fusce vitae. potenti luctus sagittis fringilla. semper taciti ad quam praesent nunc et quisque. ante',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sed est enim ad. luctus',
            'description' => 'Pharetra platea placerat sociosqu fames dolor. faucibus fringilla malesuada pharetra venenatis. congue elementum hac cursus. feugiat eu dictumst luctus augue',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lobortis dolor nulla adipiscing himenaeos',
            'description' => 'Class interdum scelerisque nisl dictum cras. varius sem tristique enim eros tempus. hendrerit placerat quisque et mattis placerat sapien praesent.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Orci ipsum molestie faucibus senectus.',
            'description' => 'Posuere ornare elementum quis hendrerit aliquet amet ut. quisque tristique curabitur cursus. taciti nisi magna quam consequat molestie arcu neque.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Etiam mollis consequat commodo potenti',
            'description' => 'Nibh est dictumst ante. volutpat dui taciti eleifend fusce. purus himenaeos mollis pharetra. lectus velit sagittis enim ante. condimentum sem',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eros lectus enim elementum taciti',
            'description' => 'Cras enim felis ut. iaculis nibh aenean odio praesent at habitant. cras etiam lacus pharetra ultricies. fusce fames inceptos turpis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Integer quisque pellentesque neque tristique',
            'description' => 'Mauris nullam scelerisque mi. fusce elit curae sociosqu conubia velit lorem. curabitur conubia sit turpis conubia venenatis. tellus sed luctus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dapibus faucibus et eleifend mollis',
            'description' => 'Sapien accumsan velit dapibus molestie. eleifend velit facilisis luctus urna felis ornare. hendrerit rhoncus mauris a proin. id cubilia massa',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sollicitudin auctor tellus ullamcorper. iaculis',
            'description' => 'Convallis et habitasse potenti. quam curabitur lorem quisque pellentesque. torquent commodo a at pellentesque erat rutrum. posuere mattis sed odio',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Enim sagittis duis ipsum nunc.',
            'description' => 'Condimentum in lacinia vehicula sapien. egestas eu lacus massa. donec risus potenti rutrum torquent dictum a. ornare fermentum suspendisse quis',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Gravida morbi nisl etiam semper.',
            'description' => 'Vestibulum inceptos sodales quis. vitae netus mauris id dictumst inceptos. dui leo dui cras nullam placerat id sem. congue ultrices',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Congue fames nulla tortor eleifend',
            'description' => 'Interdum rutrum velit dictumst mauris quam viverra libero. potenti quis suspendisse sapien per. ut nam ut ante. curabitur nisl lectus',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Blandit integer ad dui et',
            'description' => 'Ultrices rutrum convallis aliquam hac neque fusce tristique. habitant urna dictum mattis egestas iaculis lobortis pharetra. semper ac laoreet diam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eros lectus donec mollis scelerisque.',
            'description' => 'Etiam mauris tempus vulputate vulputate. posuere nam nostra magna morbi nisi fermentum. netus aliquet sollicitudin curabitur blandit. habitasse suspendisse venenatis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Phasellus at malesuada quis curabitur',
            'description' => 'Libero duis curae tempor potenti lectus egestas platea. at cras egestas luctus curabitur dictum. condimentum phasellus leo orci enim. dolor',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Iaculis praesent donec nullam velit',
            'description' => 'Justo suscipit lorem semper magna velit ullamcorper fames. massa laoreet aliquam nulla elementum purus faucibus. vestibulum turpis nisi arcu class',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cras sagittis morbi habitasse inceptos',
            'description' => 'Primis neque congue torquent praesent curae. ac donec blandit eget adipiscing. luctus nisl magna at dictumst at dictum ac. vel',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'A mi ultrices hac senectus.',
            'description' => 'Vulputate aliquam commodo non sociosqu. volutpat ut semper nisl inceptos molestie platea. fermentum habitant consectetur cursus sed duis. interdum venenatis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);
        DB::table('demandes')->insert([
            'title' => 'Mauris lectus quisque dictumst vehicula',
            'description' => 'Libero mollis nam odio nec. leo volutpat arcu donec tempus. vivamus quisque vel iaculis. nam faucibus risus augue. varius nec',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mollis elementum eu mauris est',
            'description' => 'Bibendum sociosqu congue vulputate. curae potenti aenean commodo. porttitor euismod nibh ut lacinia congue. inceptos fringilla porta feugiat urna etiam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Senectus nibh urna praesent. nisl',
            'description' => 'Praesent commodo lorem eros sagittis. risus auctor gravida aptent placerat taciti blandit. hac metus nam vehicula sodales blandit amet diam.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fames sit viverra imperdiet viverra.',
            'description' => 'Tortor diam gravida nibh. rutrum venenatis tristique dictum. commodo in nibh ullamcorper libero mauris tempus fames. nisi velit curabitur urna',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'A lacus aenean elit. ut',
            'description' => 'Sed hendrerit elementum nam. tempor suscipit mi consectetur. dui a suscipit blandit curabitur platea. eros sem luctus pharetra. nisi magna',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Molestie mauris sociosqu nisi quisque',
            'description' => 'Dictum dui malesuada sem aliquet phasellus. metus ac aptent pretium accumsan eu donec. etiam a tempor turpis posuere eget erat',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Morbi sociosqu purus purus est',
            'description' => 'Vitae sociosqu eget sodales tincidunt cras vulputate sem. at porttitor aliquet nostra nec quisque nam conubia. commodo hac et facilisis',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Netus quis et etiam. vehicula',
            'description' => 'Placerat sem enim ullamcorper erat. dictum tempus tempor ante condimentum. non malesuada senectus platea velit magna. ante praesent rutrum interdum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dapibus at aliquam quam suspendisse.',
            'description' => 'Habitant mi sed fusce. turpis congue dolor elit turpis mattis. euismod purus est adipiscing fusce elementum eu. nisi rhoncus per',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Senectus eget ante aenean laoreet.',
            'description' => 'Aenean aliquam habitasse varius massa etiam pretium cursus. posuere dictum lacus turpis iaculis aptent porta tempor. lobortis porta aliquam nam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nunc curae fames potenti vivamus',
            'description' => 'Ut id dapibus fermentum non imperdiet himenaeos auctor. purus varius himenaeos porta praesent. metus purus ad malesuada proin suspendisse praesent.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Semper nec dictum nisi duis',
            'description' => 'Class suscipit nostra pharetra lacinia primis fames. nunc litora justo lectus lobortis platea sociosqu tristique. molestie fames suscipit felis sem',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Morbi himenaeos curabitur feugiat consequat',
            'description' => 'Fusce phasellus pharetra ornare viverra pharetra. non bibendum taciti iaculis euismod donec. cras ultrices nisl facilisis felis. suspendisse justo curae',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'A himenaeos sociosqu donec etiam',
            'description' => 'Varius feugiat eget odio ut tortor phasellus. litora laoreet in aliquet. tellus hendrerit ornare suscipit ut eros. maecenas augue nec',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tincidunt donec nisi condimentum. elementum',
            'description' => 'Aliquam ullamcorper quisque ante euismod. id conubia metus dictumst iaculis congue dolor. primis auctor netus eget curae sollicitudin aenean pharetra.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ornare commodo metus laoreet fermentum',
            'description' => 'Egestas quisque sapien mollis rutrum. fusce nam amet consequat vivamus bibendum integer aenean. nulla sapien aenean nullam morbi. torquent posuere',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Blandit nibh auctor urna quam.',
            'description' => 'Velit scelerisque scelerisque et et odio viverra justo. sed lorem purus tempus litora. cursus sit phasellus elit praesent turpis augue',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mattis erat faucibus libero tincidunt',
            'description' => 'Porta euismod platea arcu. rutrum felis gravida hendrerit pretium. porta vestibulum in mauris. et non aliquam porta vestibulum proin congue.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Pretium fusce aenean pellentesque. curabitur',
            'description' => 'Potenti odio nullam et eleifend viverra pretium. quis dolor fusce praesent sociosqu nullam. pellentesque ligula venenatis non metus quisque suscipit',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sociosqu curabitur potenti justo. sodales',
            'description' => 'Porttitor in odio aliquet luctus curabitur non faucibus. mauris fusce elementum nec convallis non. fermentum elit senectus libero sapien id',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Rhoncus aptent etiam nulla urna',
            'description' => 'Erat fames rhoncus aptent donec. auctor suscipit fusce mattis rhoncus curabitur ligula. ornare sed ornare feugiat. etiam fames ultrices elementum',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Rhoncus elementum condimentum cursus magna',
            'description' => 'Inceptos phasellus vehicula varius blandit posuere porta. quisque tellus cras erat congue. bibendum libero vivamus nisl. pellentesque netus habitasse arcu',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nibh vitae augue faucibus non',
            'description' => 'Etiam bibendum erat nullam. aliquet aptent semper ullamcorper commodo netus blandit egestas. lectus auctor pulvinar auctor et. sed sed turpis',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vitae hendrerit ornare interdum at',
            'description' => 'Ad turpis venenatis quis tincidunt. sodales fusce ultricies vel dui. mollis faucibus scelerisque sagittis vestibulum. ipsum eros elit felis donec',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Donec odio aliquet fames tincidunt',
            'description' => 'Curae facilisis ad gravida himenaeos. tempus luctus cursus magna nulla ullamcorper ut tempus. habitasse suscipit integer ut sagittis. nec malesuada',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Neque tellus eget inceptos semper',
            'description' => 'Justo quam nunc dolor. velit eros pellentesque venenatis nec habitant. varius metus scelerisque donec ut aliquet. consectetur ac nibh sapien.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ante aptent iaculis aliquet quam',
            'description' => 'Augue netus consequat nam. justo taciti senectus erat. litora sagittis semper vulputate ut dictumst. pharetra congue malesuada etiam aptent mattis.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sodales porttitor nibh venenatis turpis',
            'description' => 'Eget inceptos litora eu. posuere molestie tristique egestas amet fames. senectus donec sem integer curabitur accumsan donec id. nostra pretium',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tristique lacinia tempus etiam porta',
            'description' => 'Feugiat integer nunc volutpat. congue vestibulum morbi euismod. potenti a habitasse risus tristique pellentesque congue bibendum. gravida ultricies in eros',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tellus ad taciti molestie venenatis.',
            'description' => 'Ut at convallis quisque erat ultrices eget ac. integer nunc leo ornare commodo sagittis. lectus ornare aliquet maecenas gravida posuere',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Consectetur sem suspendisse diam rutrum.',
            'description' => 'Sed turpis nam eu metus. ad nostra fames ipsum feugiat viverra conubia euismod. vestibulum pharetra phasellus non varius. nunc sapien',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque aenean vivamus at feugiat.',
            'description' => 'Nostra torquent dictumst molestie porttitor. id conubia volutpat luctus cursus tellus. purus vehicula magna metus pretium. malesuada augue dui conubia',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Erat ac pellentesque tincidunt. ullamcorper',
            'description' => 'Non etiam lectus torquent platea ad. lacinia ipsum lacinia odio sit primis nec. phasellus et dictumst egestas nec ut dolor',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacinia tristique fermentum mattis augue',
            'description' => 'Vel aptent hac lobortis integer condimentum metus mi. vitae praesent tortor posuere auctor feugiat. proin porta primis volutpat libero dictum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur turpis tristique purus platea',
            'description' => 'Suspendisse porta himenaeos amet curae. ipsum nostra nibh elementum arcu vulputate fermentum est. porttitor iaculis consequat eros. enim sit etiam',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec fames condimentum non cubilia',
            'description' => 'Eleifend tempor habitant dictumst consectetur ultricies elit ante. platea faucibus posuere aenean neque. odio aenean himenaeos tellus egestas. netus nibh',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Hac quam ipsum lacinia. commodo',
            'description' => 'Laoreet dapibus ornare conubia. aptent primis platea ante nec himenaeos mollis. massa arcu nullam placerat congue quisque ad. elit felis',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Libero accumsan taciti taciti duis',
            'description' => 'Habitant consectetur dictumst tristique. vehicula ante donec purus. elit sollicitudin proin sodales netus nullam. erat curabitur mattis ante quis quam',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Placerat curae suscipit massa tempor',
            'description' => 'Metus enim velit eros at donec pulvinar. et hendrerit ullamcorper orci ipsum rutrum amet. eleifend donec phasellus egestas posuere mi.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Neque sem auctor a velit.',
            'description' => 'In aenean tempor eros etiam dolor. tempus fames blandit senectus hac justo pretium. molestie inceptos et hendrerit. malesuada sed inceptos',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Hac tristique donec commodo lacinia.',
            'description' => 'Pulvinar curabitur adipiscing blandit lacinia eget elementum. metus pretium placerat lorem. conubia sociosqu vulputate vulputate dictumst orci euismod. sollicitudin elementum',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam id suscipit fames ullamcorper.',
            'description' => 'Platea phasellus urna commodo lacinia platea hendrerit. quisque viverra vestibulum interdum placerat. magna inceptos malesuada felis. tristique auctor per pellentesque',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);
        DB::table('demandes')->insert([
            'title' => 'Est sodales tristique erat. pulvinar',
            'description' => 'Elementum sed ut tempor nam non auctor. sapien augue torquent nisl diam vitae auctor et. lectus orci per a et.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sodales rutrum consectetur porta pulvinar.',
            'description' => 'Viverra sed proin habitant habitasse integer. lacinia tempus dictum duis aliquet dolor semper placerat. integer ut metus a. himenaeos mauris',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Felis at dictumst pulvinar tempor',
            'description' => 'Ac vehicula purus massa at est ad. hac habitasse diam inceptos cubilia sodales porttitor. nisi porttitor proin non. gravida cras',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dapibus venenatis nisl senectus. quisque',
            'description' => 'Mauris egestas curabitur erat auctor rhoncus suscipit semper. feugiat venenatis platea lobortis torquent. senectus sem tincidunt accumsan dictum. platea posuere',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Hendrerit ad dictumst nullam quam',
            'description' => 'Libero nisi volutpat justo nulla nec. habitant platea risus ad habitasse. sapien iaculis metus sagittis. mattis sociosqu congue dolor interdum',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fringilla ultrices venenatis luctus. dapibus',
            'description' => 'Maecenas sapien consectetur mollis justo potenti. diam massa id sit magna interdum lobortis quisque. non orci cubilia aptent facilisis enim.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Faucibus vivamus pharetra vivamus arcu',
            'description' => 'Sapien litora inceptos hendrerit. auctor fusce vehicula dapibus. magna augue scelerisque eget habitant hac porta. curabitur magna per inceptos. netus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet adipiscing turpis feugiat. ultrices',
            'description' => 'Condimentum magna pharetra magna diam. at eget convallis massa. eu euismod nisl maecenas nulla aliquet. mi nunc mollis posuere mattis.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cras nibh pulvinar tristique ad',
            'description' => 'Mauris curae cras consectetur. sodales at neque vulputate nec turpis. cursus venenatis ac tincidunt rutrum. habitant interdum vestibulum cubilia interdum',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vel felis ut lorem fermentum',
            'description' => 'Habitant quam aptent curabitur sed phasellus dapibus. cursus arcu egestas sit facilisis suscipit convallis. semper hac leo mollis. pretium vestibulum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curae nullam eleifend dolor tortor.',
            'description' => 'Diam litora nam nostra. interdum interdum proin sem phasellus purus mollis. ornare scelerisque suscipit ultrices maecenas etiam nullam. suspendisse suspendisse',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ad ut potenti congue fusce.',
            'description' => 'Taciti volutpat at suspendisse sociosqu ultrices hendrerit vel. dictum torquent mi accumsan quam taciti scelerisque. fermentum dictumst in ut cubilia',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Donec ullamcorper pretium in platea',
            'description' => 'Magna pellentesque at fusce nunc justo cubilia himenaeos. rhoncus accumsan donec neque luctus. accumsan id sodales arcu condimentum mauris. interdum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam sem ultricies erat ad',
            'description' => 'In ligula eleifend iaculis. ad cubilia a curabitur et pellentesque sagittis himenaeos. tellus adipiscing praesent dui amet sociosqu elit. porttitor',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Praesent sagittis urna hac dictum',
            'description' => 'Dolor mattis magna luctus. donec quam curae sociosqu justo consequat leo. vel dictumst turpis potenti erat vulputate iaculis mi. euismod',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nec integer nam est est',
            'description' => 'Ultricies urna enim aliquet habitasse nec id donec. cubilia sit adipiscing suspendisse iaculis porta. cras convallis feugiat nisi metus nunc',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Posuere vestibulum praesent quisque. suscipit',
            'description' => 'Lacinia fusce cras cursus habitasse sed. gravida urna nullam cubilia nibh at. aenean fames ullamcorper curae risus. quis himenaeos netus',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Orci proin sed etiam sapien',
            'description' => 'Phasellus est fermentum senectus faucibus lacus suscipit. condimentum himenaeos luctus dolor. aptent varius donec etiam. egestas sociosqu elementum risus habitasse',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Hac tellus tincidunt vulputate. sagittis',
            'description' => 'Maecenas metus sit eu. primis curabitur ante metus urna primis. nec aptent ullamcorper libero lorem aliquam ultricies. adipiscing pellentesque justo',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur aliquet porta suscipit dapibus.',
            'description' => 'Vel fusce in quisque habitasse tortor tempor. hendrerit augue donec molestie morbi orci senectus. cursus semper gravida mattis. dictumst congue',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Integer proin quam egestas mattis.',
            'description' => 'Mi platea litora dapibus rhoncus cras. phasellus mi aenean platea etiam turpis velit. consectetur risus etiam arcu facilisis nulla. ante',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Venenatis tortor ligula maecenas. senectus',
            'description' => 'Euismod litora dictumst sagittis convallis. ad inceptos mauris viverra porttitor mi nam suscipit. eu nam nulla sed. lobortis lobortis donec',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sagittis sodales cras mollis consectetur',
            'description' => 'Inceptos dictum duis duis inceptos proin. potenti et sodales etiam. consequat torquent nostra metus dapibus cubilia id. tempus dui mollis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque sem lorem scelerisque felis',
            'description' => 'Mattis duis aliquam dapibus torquent euismod sem. dictumst justo orci libero dictumst aliquam habitant. pellentesque feugiat pharetra adipiscing venenatis nisl',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Eros class dictumst dictumst elit',
            'description' => 'Fermentum netus primis massa. senectus turpis aenean iaculis curabitur vitae aliquam. tortor laoreet sodales elementum proin scelerisque eleifend. urna et',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'In sagittis euismod phasellus non',
            'description' => 'Eleifend rhoncus dictumst mi posuere libero. semper molestie elementum condimentum varius convallis ac. placerat gravida turpis taciti eleifend varius nunc.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Venenatis aenean eu semper erat',
            'description' => 'Amet habitasse non aliquam curabitur. id imperdiet condimentum a per. consequat consectetur sollicitudin sit congue. enim amet diam molestie quis',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Varius aliquet placerat porttitor mauris.',
            'description' => 'Curabitur netus habitasse sem lacinia. cursus laoreet eleifend habitasse nibh posuere vulputate. amet proin curabitur convallis nunc. a orci tincidunt',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vitae condimentum non nibh varius',
            'description' => 'Iaculis nulla malesuada cras porttitor. eget pharetra tellus cursus rutrum dictumst tincidunt fusce. suscipit cursus massa tortor aliquet pulvinar neque',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eleifend malesuada quisque vel turpis.',
            'description' => 'Risus nostra vestibulum neque nisl curabitur. et placerat quam risus sodales purus dapibus. cursus enim convallis bibendum dolor at. augue',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Proin vestibulum pellentesque mi placerat.',
            'description' => 'Semper tempus dictumst rutrum. elit condimentum aptent orci vitae hendrerit. per sagittis bibendum magna donec. mi id quam sociosqu. adipiscing',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porta suscipit netus proin dui',
            'description' => 'Tempus nostra posuere est purus. praesent mi rhoncus euismod ante facilisis interdum sagittis. etiam donec sollicitudin ultricies felis. himenaeos suscipit',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lectus ut nostra lorem habitasse',
            'description' => 'Ac tincidunt ut etiam. faucibus nisi dictum turpis fames. ante sed integer auctor nostra ornare nisl quisque. pretium imperdiet euismod',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Est lobortis gravida class mollis',
            'description' => 'Nunc est litora mattis ipsum quisque sociosqu pretium. cubilia enim habitasse iaculis tellus gravida. tristique dictum hendrerit id eros. justo',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Iaculis massa taciti cubilia cras',
            'description' => 'Etiam aliquam senectus gravida. praesent integer erat volutpat suscipit accumsan. sollicitudin blandit hac vestibulum diam erat. sagittis curabitur auctor cursus',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Congue mollis cras primis auctor',
            'description' => 'Maecenas torquent fames neque. pretium facilisis adipiscing auctor auctor arcu dictum pulvinar. inceptos primis curabitur augue. ut nam fusce dictumst.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Euismod et euismod ut rutrum',
            'description' => 'Ligula condimentum sed tellus nulla. diam blandit suscipit lorem turpis semper conubia suscipit. inceptos suspendisse cursus morbi consectetur diam. hendrerit',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nec phasellus mauris ut consequat.',
            'description' => 'Laoreet tempor eleifend augue enim pulvinar habitasse quisque. ultrices malesuada duis litora mauris tempus lacus potenti. nisi id amet suscipit.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vestibulum pulvinar lectus potenti proin',
            'description' => 'Semper justo massa integer donec mollis posuere gravida. ut conubia phasellus eget molestie mattis eget et. sem taciti tortor consequat',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Inceptos sapien ullamcorper integer dolor',
            'description' => 'Habitasse quisque duis faucibus quisque purus ac. tristique magna ultrices enim. velit nunc odio commodo curabitur. feugiat risus nam mauris',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Etiam malesuada cursus luctus id',
            'description' => 'Quis tincidunt integer curae arcu sem vel nam. accumsan malesuada lorem dictum eros sociosqu. fames libero feugiat imperdiet magna commodo',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vestibulum eu primis odio. ut',
            'description' => 'Ipsum neque nunc faucibus. felis nisl dictumst class curae erat ultricies. ornare ut at quam. justo ultricies odio eros felis.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);
        DB::table('demandes')->insert([
            'title' => 'Rhoncus odio semper aliquam molestie.',
            'description' => 'Nisl sociosqu sociosqu mauris purus ac fames. mollis tincidunt taciti metus. ipsum commodo nunc habitant taciti arcu. neque sed hac',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean etiam vitae turpis pharetra',
            'description' => 'Nullam class quis sagittis consectetur inceptos nostra. nunc sagittis tempor aliquam dapibus sapien. nullam class nec aliquet quisque sollicitudin laoreet.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sed tristique rutrum lobortis. duis',
            'description' => 'Interdum phasellus quis cubilia pretium lorem non. vulputate platea malesuada semper lorem hendrerit. sociosqu lobortis quis commodo primis fames inceptos',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Neque metus dictumst volutpat pretium',
            'description' => 'Condimentum ligula lacinia curabitur quisque. consequat sit varius ad urna fames. non gravida eleifend ut. nibh per convallis curabitur magna',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lectus nisi praesent cubilia feugiat',
            'description' => 'Pharetra gravida massa platea class. congue lorem posuere libero mi quis. porttitor sociosqu curae morbi. nec etiam vulputate ut mattis',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean enim turpis purus. mauris',
            'description' => 'Elit orci inceptos venenatis hendrerit cursus. nulla fringilla lorem lobortis curabitur sagittis mollis. cursus habitasse nostra est ultricies laoreet. sollicitudin',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Urna per mollis pretium. proin',
            'description' => 'Tristique ut inceptos viverra malesuada maecenas maecenas. arcu risus sem imperdiet metus sapien duis. egestas inceptos odio fusce ipsum. elit',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ullamcorper cras leo congue dolor',
            'description' => 'Vivamus quisque at torquent scelerisque suscipit fames pellentesque. praesent aptent erat adipiscing vulputate massa tempor erat. scelerisque vestibulum nostra varius',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sagittis imperdiet amet maecenas. himenaeos',
            'description' => 'Convallis tristique tincidunt porta netus. tellus in duis sodales consectetur iaculis suspendisse. dictum platea felis sapien porta cubilia metus. etiam',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Amet accumsan aptent suspendisse egestas.',
            'description' => 'Platea bibendum volutpat turpis gravida. posuere blandit ultrices est fames. sed fames rutrum tempus. quisque urna quam suscipit non amet.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec nunc primis integer hac.',
            'description' => 'Ante cubilia maecenas mollis erat laoreet. semper neque amet ut aptent facilisis eros. velit condimentum vel amet etiam. blandit dictum',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ante euismod aliquam odio aliquam',
            'description' => 'Vitae amet imperdiet quis praesent cubilia habitant. ad quisque cubilia urna nibh ultrices etiam. ac in porttitor feugiat eleifend nec.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Nostra metus eu aliquam cras',
            'description' => 'Condimentum conubia praesent phasellus. aptent mattis rhoncus mi eget ultricies. torquent ligula convallis auctor dictumst rhoncus adipiscing magna. felis suspendisse',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Inceptos massa nullam aliquam hendrerit',
            'description' => 'Gravida interdum dolor potenti mauris. quis tincidunt tortor at sagittis justo ante class. vivamus erat ultrices dictumst. urna volutpat imperdiet',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Turpis quisque conubia per suscipit',
            'description' => 'Suscipit netus cursus adipiscing cras sodales vel sem. dui tellus vestibulum pellentesque. diam porttitor elementum tincidunt nunc condimentum nulla. velit',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Convallis inceptos vel nullam augue',
            'description' => 'Felis maecenas varius commodo dolor libero aliquet. vivamus vivamus velit sit taciti. mi facilisis ullamcorper cubilia lobortis egestas. ad torquent',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacinia nam lacinia curabitur morbi',
            'description' => 'Aliquam aliquam est malesuada congue. ipsum nisl vestibulum est orci. orci porta aliquet nisl pharetra ad arcu molestie. auctor nostra',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vel ornare ullamcorper venenatis nullam',
            'description' => 'Varius porta suscipit tincidunt sed tincidunt vulputate cubilia. aliquet morbi aliquam vulputate aliquam porta congue. aliquet aenean magna viverra imperdiet',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Leo dui congue neque ultrices',
            'description' => 'Dolor sodales aliquam proin magna odio. molestie etiam quisque proin per. nisl lacinia viverra enim phasellus. pellentesque laoreet cubilia facilisis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nulla ut dictumst adipiscing mattis',
            'description' => 'Erat nam tortor inceptos. imperdiet curabitur faucibus hac posuere a. viverra magna libero risus sem. nibh tellus magna in ut',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Class ut etiam dolor risus',
            'description' => 'Est tortor sem aliquam odio sem ut. est laoreet nostra aliquam habitant vestibulum. commodo etiam eros a vel cursus. eget',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cubilia nam pulvinar platea rhoncus.',
            'description' => 'Bibendum nulla cursus fermentum. libero orci dui suscipit euismod. vivamus class porta aliquam blandit eleifend varius torquent. class ipsum consequat',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Praesent ut non nec semper',
            'description' => 'In faucibus condimentum interdum donec. dapibus fames donec congue commodo rutrum dictum. libero viverra tristique facilisis ligula aenean eget at.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aptent consectetur velit tortor. lobortis',
            'description' => 'Libero sagittis tempor lobortis. id eros suscipit nunc rutrum quisque cursus lobortis. praesent ipsum auctor bibendum. ipsum id venenatis sollicitudin',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);
        DB::table('demandes')->insert([
            'title' => 'Sollicitudin fermentum justo orci nam',
            'description' => 'Aliquet nec fringilla luctus nunc urna purus pellentesque. nec massa auctor nullam. ullamcorper class sodales adipiscing gravida eget scelerisque. platea',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fringilla per sem gravida ullamcorper',
            'description' => 'Bibendum fusce fames proin ad tortor. nisi non sapien ut auctor sit. purus dolor viverra nisl lorem. aliquam tellus amet',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vivamus sit maecenas semper. a',
            'description' => 'Hac donec semper erat nunc. varius imperdiet sociosqu libero cubilia. velit massa nam ut. ultricies aliquam justo leo ut iaculis',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquet magna commodo felis malesuada',
            'description' => 'Dolor litora suspendisse inceptos hac aliquet. tempor cubilia hendrerit dui non non. congue fringilla inceptos ante morbi. blandit convallis etiam',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ullamcorper pharetra vulputate molestie quam.',
            'description' => 'Metus ornare suspendisse facilisis litora taciti vestibulum. vehicula libero tempor elementum. nisl bibendum enim turpis curabitur elementum. quisque sollicitudin et',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lectus metus lectus pretium fermentum',
            'description' => 'Ornare aenean porttitor justo laoreet libero quis. primis curae dolor lorem id. cursus vehicula leo nisi elementum varius vestibulum. aenean',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);
        DB::table('demandes')->insert([
            'title' => 'Aliquam aliquam nulla fringilla. feugiat',
            'description' => 'Ligula sagittis per fringilla cubilia tellus. aliquam pellentesque lobortis porttitor. sodales nam sapien nunc curabitur nisi. morbi sed mollis conubia',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pellentesque morbi pretium pharetra. nostra',
            'description' => 'Sed leo vehicula fringilla. primis faucibus risus morbi maecenas. et odio aenean lacus mauris. vel ut commodo ut. non eros',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Taciti tellus curabitur ac. facilisis',
            'description' => 'Convallis ac pellentesque netus dictum praesent platea gravida. class posuere placerat elit rutrum condimentum. scelerisque interdum dui arcu fusce. quam',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eleifend ligula curabitur laoreet nunc',
            'description' => 'Hendrerit nostra consectetur egestas ut. libero lacinia ligula sapien. auctor in faucibus libero massa proin. blandit cubilia litora duis. eget',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vestibulum suscipit litora gravida eu',
            'description' => 'Scelerisque vestibulum per turpis. fusce cursus lobortis cursus urna. convallis primis habitant morbi conubia aliquet. erat mauris felis luctus etiam',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ac erat fames massa. sagittis',
            'description' => 'Lectus tincidunt eros elementum. lobortis consequat curabitur taciti vel. sit tellus pretium vestibulum malesuada. porttitor iaculis senectus ligula conubia rutrum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);
        DB::table('demandes')->insert([
            'title' => 'Ultrices aliquam eleifend eleifend. primis',
            'description' => 'Arcu viverra sagittis luctus aptent. venenatis dui donec mollis nam libero. curabitur ac justo mauris. habitasse euismod phasellus sociosqu odio',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dictum hendrerit quisque venenatis nam',
            'description' => 'Nisi ipsum ipsum imperdiet magna torquent ut. et tempus condimentum porttitor nulla. dictum metus justo rutrum lobortis curae. nullam sollicitudin',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Urna vehicula condimentum torquent urna',
            'description' => 'Accumsan aenean ultrices magna mi fusce curae ac. accumsan ornare porta a consequat. proin ad orci mi consequat dolor. habitasse',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Maecenas mattis adipiscing suscipit tincidunt',
            'description' => 'Aenean auctor himenaeos elementum. semper accumsan aenean mattis lacus. dapibus phasellus sociosqu platea accumsan tortor fusce accumsan. luctus rutrum dui',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nostra phasellus tellus himenaeos. nulla',
            'description' => 'Eu imperdiet facilisis enim elementum varius amet ac. pellentesque taciti a tellus ornare. etiam nec vivamus vulputate eros sem. torquent',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Odio mauris nulla eget tortor',
            'description' => 'Dictum curae egestas lobortis etiam sem tristique ac. nec turpis vitae quam rhoncus in nam. tempus leo molestie praesent hac',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Nullam posuere vel arcu quam',
            'description' => 'Accumsan praesent viverra volutpat. varius iaculis facilisis quisque semper semper. accumsan sapien aliquam mi leo. id vitae commodo aliquet. interdum',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aptent phasellus vulputate nec imperdiet',
            'description' => 'Hendrerit vehicula taciti taciti. pellentesque cras tortor nec viverra erat pretium. euismod phasellus fermentum tincidunt. malesuada tortor etiam hac. curae',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cubilia donec nullam praesent neque',
            'description' => 'Lobortis pulvinar integer vel integer ultricies ut arcu. morbi cursus lectus volutpat. netus potenti accumsan fermentum felis ultrices ante. odio',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Erat eu nunc ad cubilia',
            'description' => 'Luctus lacinia aliquet nulla magna fermentum arcu. metus quisque venenatis libero aenean. donec sociosqu platea lectus maecenas id iaculis aenean.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Habitant tortor nunc lorem. tempus',
            'description' => 'Maecenas sed adipiscing accumsan rutrum eu duis himenaeos. arcu fusce phasellus conubia. sem nisl risus risus nunc pretium. nibh class',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ligula fringilla aenean sagittis. fringilla',
            'description' => 'Justo massa ullamcorper eleifend nibh phasellus. pellentesque hendrerit fermentum felis mauris fringilla. felis purus consectetur malesuada quis. orci proin nullam',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);
        DB::table('demandes')->insert([
            'title' => 'Bibendum ut placerat primis ac',
            'description' => 'Eu sollicitudin dapibus ut mi. porttitor enim felis taciti potenti venenatis ut. vehicula nostra molestie platea. maecenas volutpat curae porta',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Amet ad eget magna dui.',
            'description' => 'Hendrerit tortor elementum donec metus eget rhoncus. cursus dictum varius bibendum. vivamus velit massa viverra metus enim. lacinia sapien litora',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porttitor dapibus libero volutpat. sit',
            'description' => 'Enim curabitur eros ultricies arcu dapibus tellus id. fusce lacinia taciti torquent. semper hendrerit eu bibendum aliquam aliquam. dictum odio',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo neque ultrices condimentum. aliquam',
            'description' => 'Lacus leo cras hendrerit nostra eu cubilia pharetra. torquent mi dictumst nullam. venenatis massa suspendisse consectetur sodales sagittis diam nam.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacus ultricies nisl lacinia. luctus',
            'description' => 'Elementum pretium vitae litora faucibus semper aliquam nunc. massa tortor ultrices posuere. aliquet nec conubia class condimentum. auctor torquent nisl',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices suscipit at conubia placerat',
            'description' => 'Quisque neque donec potenti duis ac pharetra quam. etiam congue mi diam mauris tortor sollicitudin eu. purus est nunc praesent.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);
        DB::table('demandes')->insert([
            'title' => 'Metus curabitur porttitor volutpat dapibus',
            'description' => 'Placerat aliquam inceptos placerat vestibulum massa orci donec. amet ipsum condimentum a. sit primis nisi lectus vivamus habitant ultricies. himenaeos',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tortor nam auctor neque est',
            'description' => 'Class condimentum lorem nisi vulputate lectus neque. lacinia gravida pellentesque blandit rutrum curae. ante lacus in pellentesque. dui egestas ac',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Hac ut pharetra integer netus',
            'description' => 'Dui nam porta potenti varius blandit etiam ante. etiam luctus adipiscing iaculis primis curae consectetur orci. potenti dapibus curabitur aliquam',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dictum nullam sollicitudin placerat aptent',
            'description' => 'Pellentesque lacus gravida mollis. libero vivamus himenaeos odio. himenaeos elementum vivamus nec pellentesque ornare. nunc inceptos convallis urna class suscipit',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacinia dictum pulvinar sapien. fames',
            'description' => 'Congue at felis consectetur hendrerit felis leo. felis class donec ullamcorper mi consequat et urna. dui nibh curae hac bibendum',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultricies tempus gravida ligula varius',
            'description' => 'Velit adipiscing nibh porttitor. metus pharetra cubilia quisque donec nulla. sit ultricies ullamcorper ac scelerisque. fusce aliquet tincidunt cursus ipsum',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Pharetra ac erat fringilla semper',
            'description' => 'Nulla aliquam interdum egestas. suscipit orci habitasse pellentesque sociosqu. mi ultricies dapibus nulla sagittis purus ac porttitor. eget nisi nostra',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nunc tincidunt dui luctus blandit',
            'description' => 'Adipiscing sed diam neque mauris. porta neque ultricies porta. hendrerit fusce phasellus orci nulla dictumst tincidunt. vulputate amet mattis cras.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Faucibus dictum dolor ad est',
            'description' => 'Phasellus curae lectus commodo. velit eu hendrerit himenaeos torquent venenatis elementum. molestie ad sociosqu feugiat semper dictum venenatis. in bibendum',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nibh torquent platea ultricies adipiscing',
            'description' => 'Libero semper interdum diam. laoreet nec quisque per viverra. maecenas eleifend posuere quam placerat. cubilia viverra inceptos sollicitudin lacus integer',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curae imperdiet metus facilisis aliquam.',
            'description' => 'Sagittis maecenas morbi in aenean etiam sit. donec libero iaculis placerat. sollicitudin amet ipsum ante risus ultrices. etiam odio ullamcorper',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Posuere nulla molestie cubilia. lacus',
            'description' => 'Venenatis rhoncus class augue pretium vitae at. eget platea hac ligula fusce. eleifend quisque nec luctus sodales augue. bibendum potenti',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 2,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);
        DB::table('demandes')->insert([
            'title' => 'Primis gravida fermentum sapien. interdum',
            'description' => 'Pellentesque rutrum ut suspendisse ac fames. enim imperdiet velit cursus purus feugiat ultricies laoreet. non consequat netus est libero dictum',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo proin consequat curae. tincidunt',
            'description' => 'Curae semper suscipit fringilla. curae adipiscing suscipit viverra aliquet sodales sagittis. donec dapibus nec tristique in rutrum lectus maecenas. potenti',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dictumst est ullamcorper commodo imperdiet',
            'description' => 'Maecenas sapien praesent inceptos hendrerit. metus class blandit pulvinar. dapibus nisi himenaeos quis nisl. pellentesque habitasse senectus ipsum. enim fusce',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Rutrum inceptos gravida turpis potenti.',
            'description' => 'Elementum nullam fermentum sociosqu aliquam non ad. euismod litora ac amet semper eros curabitur praesent. volutpat vehicula habitant aenean odio',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Condimentum aenean sociosqu justo tempor.',
            'description' => 'Pellentesque porta urna sollicitudin. volutpat dictum convallis congue. sodales eros turpis vitae magna platea. hac ut fusce donec netus facilisis.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quam blandit litora malesuada nisl',
            'description' => 'Semper venenatis porta habitant odio sem cubilia et. libero lacinia sit dolor. viverra rutrum mauris nam ipsum id massa at.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);
        DB::table('demandes')->insert([
            'title' => 'Dictumst imperdiet molestie consectetur dolor.',
            'description' => 'Fusce placerat libero tincidunt. blandit ullamcorper potenti aenean vestibulum. ligula a fusce mollis. porta platea habitasse venenatis. mauris blandit porttitor',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Felis aliquam gravida rhoncus. quisque',
            'description' => 'Blandit fermentum vivamus aptent luctus vehicula faucibus. cursus elit sed dictum tempor ac vestibulum. bibendum libero sapien fermentum litora curabitur',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mollis phasellus leo duis. elit',
            'description' => 'Aenean purus arcu justo donec bibendum. eleifend class nostra vehicula lacinia. id volutpat at vestibulum nisl ac taciti. ullamcorper diam',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Hendrerit condimentum placerat lacinia habitant.',
            'description' => 'Sollicitudin risus ornare facilisis. turpis eget nullam lacus cursus blandit venenatis vestibulum. turpis convallis aliquam ultrices feugiat risus. at sapien',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lectus lacinia cubilia tempor. blandit',
            'description' => 'Quisque orci potenti ut mollis turpis netus. tincidunt aenean etiam commodo. turpis et convallis commodo pharetra elementum sapien. himenaeos laoreet',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Justo vel platea curae curae',
            'description' => 'Suspendisse massa sed curabitur pulvinar nulla vulputate integer. mollis vestibulum mollis sapien vitae morbi malesuada. dui iaculis accumsan in quisque',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);
        DB::table('demandes')->insert([
            'title' => 'Sodales class rutrum dolor mattis.',
            'description' => 'Ante nullam lorem gravida mauris potenti rhoncus. aliquet eros donec facilisis nisl sodales. tincidunt sit enim ante consequat consectetur. nam',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Interdum sed urna pharetra. fermentum',
            'description' => 'Rutrum consectetur donec etiam quisque felis. non vitae nisl vestibulum ipsum quisque. gravida congue dolor consequat id dictum auctor. mattis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Auctor fringilla curabitur orci pulvinar.',
            'description' => 'Phasellus himenaeos interdum potenti ultrices tempor. convallis ornare adipiscing porta vitae tempor blandit. curabitur platea etiam nibh sociosqu orci odio.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Gravida rutrum lacinia sed imperdiet',
            'description' => 'Tristique tempus maecenas arcu dapibus. taciti ultricies fringilla porta venenatis. massa fringilla curae ullamcorper a vulputate. porttitor mi accumsan elementum.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Himenaeos gravida accumsan litora. taciti',
            'description' => 'Tortor sociosqu vivamus commodo ac class condimentum. sociosqu ac risus maecenas duis posuere. taciti est primis commodo. adipiscing vivamus aenean',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Non proin nunc curabitur eget.',
            'description' => 'Ultricies curabitur etiam sem. pretium nostra molestie amet. ornare nunc turpis aliquam orci vitae. nisl etiam euismod tristique porttitor ante.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);
        DB::table('demandes')->insert([
            'title' => 'Donec auctor eleifend rutrum eget.',
            'description' => 'Sodales aliquam orci conubia ad class. class justo enim aenean. faucibus cursus mi potenti curabitur curabitur nostra. quisque tellus litora',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Torquent senectus ipsum suscipit aenean',
            'description' => 'Ipsum congue dolor lobortis cubilia ultricies vehicula arcu. amet purus habitant inceptos leo. quam primis scelerisque hac nibh sem taciti.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Elit ante fusce himenaeos. aptent',
            'description' => 'Mollis massa venenatis augue aenean tincidunt semper. tellus duis nulla aptent. proin torquent at suspendisse. ultrices tellus lacinia himenaeos. nunc',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Metus et sollicitudin tincidunt. donec',
            'description' => 'Tellus conubia nam et. curabitur mi nostra porttitor eros. lorem cras porta aenean cras congue a. massa dictumst sociosqu massa',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tortor metus euismod elementum. semper',
            'description' => 'Etiam sollicitudin porttitor gravida dictum velit interdum iaculis. elementum velit nunc iaculis nisi dictumst habitasse. dapibus amet primis neque bibendum',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => date("Y/m/d"),
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sollicitudin inceptos vel cras morbi.',
            'description' => 'Lacus lobortis vitae interdum felis diam justo vel. ad ut donec maecenas odio placerat. ad cursus dictumst sollicitudin nostra eu.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

    }
}
