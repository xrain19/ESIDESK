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
            'title' => 'Auctor nec donec pellentesque posuere',
            'description' => 'Porttitor nisi aliquet mattis. commodo at taciti dapibus lectus rhoncus convallis habitant. justo elit non eleifend. amet porttitor nullam risus',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Risus varius arcu nisl consequat',
            'description' => 'Imperdiet elit rutrum lectus. cras nisi in magna ante rhoncus. tempor vestibulum pharetra fusce primis conubia. ultricies bibendum id aliquet',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dapibus elementum risus tellus felis',
            'description' => 'Orci interdum vel dictumst enim fringilla libero euismod. sapien proin est semper. dictum facilisis habitasse mauris turpis ac ante. nulla',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porttitor donec accumsan aenean maecenas',
            'description' => 'Odio proin quisque eros habitant tellus. elementum enim eleifend eleifend. libero fames ornare interdum ipsum vestibulum. auctor iaculis dui aliquam',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pretium vitae nullam fusce duis',
            'description' => 'Nam lobortis a justo integer pharetra vehicula. ut faucibus fames pulvinar potenti ac curabitur. nostra arcu neque libero senectus. duis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices scelerisque nulla mi lobortis',
            'description' => 'Nullam augue rhoncus cursus ut. senectus magna vitae est phasellus eros feugiat. fames velit congue libero. aliquet potenti amet etiam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Id sodales id volutpat ad',
            'description' => 'Faucibus risus phasellus aenean egestas tristique elit non. fermentum orci maecenas amet aliquet aliquet velit arcu. nunc in libero aenean',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Erat fermentum convallis elementum risus',
            'description' => 'Semper gravida nam commodo sodales orci. orci nulla quam felis et. et donec condimentum tempus nisi lacus curabitur vehicula. in',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Purus rhoncus faucibus vitae primis.',
            'description' => 'Velit netus mauris in consectetur ultricies tempus. augue curabitur vestibulum donec nam cursus himenaeos. massa vitae duis ligula malesuada hendrerit.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dui condimentum libero primis curabitur',
            'description' => 'Tempor convallis litora risus. sodales habitasse tempor lacinia eget sed. lobortis potenti purus justo. sem nec facilisis quis. risus sapien',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Etiam dui fusce molestie fermentum',
            'description' => 'Dictumst habitant phasellus nunc curabitur magna in tempor. massa pulvinar aptent ut tristique. quisque sociosqu enim habitasse ligula viverra egestas.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Magna viverra non lacinia. sollicitudin',
            'description' => 'At himenaeos sit justo torquent class. dictum tristique neque ante vel. dolor nisi a adipiscing gravida facilisis metus. congue senectus',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sociosqu facilisis ullamcorper malesuada primis',
            'description' => 'Scelerisque donec semper massa tempor tincidunt primis. volutpat per felis metus nisl tortor quis curabitur. magna mollis blandit vel egestas.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Iaculis curabitur aenean praesent sem',
            'description' => 'Elit auctor tempus est. in enim erat elit consectetur aenean. curae diam rutrum dictum suscipit dui tempor. bibendum sapien etiam',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tempor habitant taciti auctor dictum.',
            'description' => 'Sit malesuada auctor accumsan gravida blandit. tempor nostra et class. massa litora feugiat phasellus lorem. rutrum lacinia ut praesent euismod',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tempor vulputate donec cursus posuere',
            'description' => 'Etiam scelerisque cubilia maecenas ipsum aliquet. amet nunc pharetra porta urna himenaeos semper. primis pharetra nec quis platea pulvinar adipiscing.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aptent rhoncus luctus ut curae',
            'description' => 'Massa facilisis quis semper. quam laoreet per elit imperdiet molestie tempus. nullam sed hac ut vestibulum. ultrices ad quam justo.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nam vivamus etiam ac justo',
            'description' => 'Primis in suscipit conubia inceptos mi ad. lorem sollicitudin amet tempus amet eget ante varius. etiam nunc quisque ut ullamcorper',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam tristique tellus sit aenean',
            'description' => 'Tempor at purus quam accumsan suscipit tincidunt. hendrerit egestas diam phasellus pharetra. neque tempor maecenas tempor dolor mauris viverra. vel',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec elit hac vestibulum. aenean',
            'description' => 'Curabitur quisque ipsum eros ante sociosqu. nam aptent suscipit suscipit diam. dolor praesent augue viverra maecenas massa integer duis. ornare',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Id potenti lorem varius mi',
            'description' => 'Curabitur mi quis ullamcorper. non sapien neque felis ut platea enim augue. posuere elit massa quisque habitasse nullam inceptos viverra.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Netus cras luctus massa. commodo',
            'description' => 'Elit etiam euismod class sodales. tellus vestibulum aliquet eleifend vestibulum lobortis condimentum. curabitur senectus etiam felis. quam suspendisse lacinia metus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Urna auctor aliquet non tristique',
            'description' => 'Neque convallis vestibulum arcu ullamcorper. malesuada curabitur facilisis proin auctor. sed nam lobortis aenean enim. iaculis habitasse justo vel. eu',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Malesuada vulputate varius interdum elementum',
            'description' => 'Ullamcorper platea tincidunt sem sit blandit egestas. cras euismod id est. mollis nisi at lectus class. habitasse turpis venenatis aenean',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sagittis ut torquent fusce maecenas',
            'description' => 'Urna volutpat per facilisis maecenas. sed in elit nisl. lorem faucibus proin vehicula sagittis tempor vulputate. convallis quisque ullamcorper sollicitudin',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eleifend sollicitudin fusce molestie. facilisis',
            'description' => 'Torquent sed potenti placerat. cursus molestie tincidunt habitasse integer hac. augue tincidunt mollis leo platea mi justo quisque. tristique mattis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fermentum lobortis tristique platea vehicula',
            'description' => 'Amet ut curae donec porta pretium. primis elit porttitor lacus himenaeos nullam. justo donec pretium fringilla. ut est nibh habitant',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vitae feugiat class condimentum aenean.',
            'description' => 'Eleifend etiam tristique consectetur egestas. ac himenaeos a vitae dui maecenas. condimentum lacinia maecenas maecenas curae aliquet lectus. taciti enim',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet felis litora ante imperdiet.',
            'description' => 'Varius hendrerit semper lectus purus quam leo. mi neque sed habitasse accumsan. pulvinar ultrices ipsum nunc. sodales cras habitant mollis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Placerat malesuada lorem fames mauris',
            'description' => 'Sem aliquet feugiat leo. bibendum nisi iaculis ipsum vel ut metus malesuada. varius lobortis quam aliquet semper. eleifend aptent sapien',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pretium integer vestibulum nullam nibh',
            'description' => 'Venenatis pharetra dictum habitasse. magna quisque adipiscing felis fermentum. porta condimentum congue luctus consequat. netus ullamcorper aliquam potenti aliquam donec.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Malesuada viverra dapibus himenaeos vulputate',
            'description' => 'Est pretium potenti lorem proin commodo eu. tortor ut vulputate fusce scelerisque consequat enim. lacinia habitasse litora lacinia metus egestas',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquet elit sed ultrices mi.',
            'description' => 'Etiam at commodo eleifend placerat nisi accumsan duis. malesuada arcu pharetra fames. gravida pellentesque aliquam posuere. interdum ad dolor consectetur',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quis et fusce duis velit',
            'description' => 'Tempus est platea orci. interdum habitasse ac tempor vel maecenas. facilisis hendrerit tellus tortor lacus. elementum etiam interdum ornare aliquam.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Auctor nisi vestibulum ut nisi',
            'description' => 'Rhoncus leo quisque nibh. pellentesque sed augue arcu. nibh enim eleifend feugiat. sed venenatis molestie ultricies tristique scelerisque sem. justo',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur aenean dapibus pellentesque in.',
            'description' => 'Pretium felis nisi ipsum facilisis sed. sapien orci ipsum aliquam. sociosqu viverra cubilia lobortis ligula. mollis vulputate urna ut. ad',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sodales eu ullamcorper per donec',
            'description' => 'Litora consectetur habitasse enim senectus est. maecenas faucibus mi pretium consectetur. iaculis non nisi torquent. class suspendisse nisi gravida fusce',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut auctor dictum integer. quisque',
            'description' => 'Senectus risus aliquam rhoncus senectus. donec hac tincidunt hendrerit. aptent mauris ad rutrum donec. dictum arcu quam in. aptent sem',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Et felis eu aenean cras',
            'description' => 'Rutrum donec praesent hendrerit felis mauris diam mauris. quis dolor mi nostra. nisl ante sem adipiscing hac commodo orci faucibus.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ligula sapien fringilla tempor eu',
            'description' => 'Vivamus primis tincidunt molestie fusce porttitor quam mauris. aliquam aenean sapien ante. congue lorem euismod egestas aptent. fusce mauris interdum',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ullamcorper viverra ultricies ipsum id.',
            'description' => 'Pulvinar posuere aliquam et euismod ad. eleifend imperdiet suspendisse auctor quisque aliquam egestas. lacus aliquet aliquam aptent posuere vel tempus.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vitae rhoncus phasellus vestibulum torquent',
            'description' => 'Faucibus purus primis malesuada tristique at. suspendisse mollis inceptos lacus et vivamus. convallis faucibus id torquent. et eros nostra hac',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Est quam lorem massa aptent',
            'description' => 'Massa dictum sagittis urna. venenatis potenti commodo erat eros. mi molestie nibh nunc himenaeos. leo donec enim litora auctor arcu',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Neque fames proin ultricies taciti',
            'description' => 'Posuere lectus venenatis suscipit ad platea tellus nec. justo taciti faucibus erat. dapibus dui mi mattis quisque iaculis aenean feugiat.',
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
            'title' => 'Ut litora phasellus pulvinar. cubilia',
            'description' => 'Venenatis faucibus nunc etiam tristique curae purus. semper eleifend erat at fermentum. fames elementum nibh placerat velit varius bibendum condimentum.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curae sodales dictumst hac interdum',
            'description' => 'Mattis interdum donec libero. quisque tempor donec lacus per mauris. faucibus arcu suspendisse dictumst. ut nulla posuere odio. donec tempor',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porttitor aliquet non lorem. hac',
            'description' => 'Class suspendisse aenean sem hac nec feugiat aliquam. bibendum habitant suscipit urna mattis. vitae ultrices porta facilisis vestibulum vel. ligula',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nostra maecenas senectus ante ante.',
            'description' => 'Arcu dictumst lorem lectus pretium. lobortis ornare integer sit. consectetur diam non donec. felis habitasse ac donec dictum purus conubia.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'In ullamcorper ut euismod morbi',
            'description' => 'Morbi sapien bibendum blandit aenean. turpis condimentum dapibus ante sit aliquet mauris. vel odio lacinia purus. mollis pellentesque dui ultricies',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Est convallis integer interdum libero.',
            'description' => 'Orci auctor etiam quisque. tellus quisque vestibulum taciti sagittis vestibulum venenatis hac. suspendisse ut sollicitudin odio inceptos suscipit ornare pretium.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Praesent sapien torquent rutrum fermentum',
            'description' => 'Aliquam tristique eget massa egestas mollis massa. habitasse nunc vulputate suscipit non pretium. quisque erat ac facilisis. sagittis eros morbi',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet quis venenatis posuere. cras',
            'description' => 'Orci pretium himenaeos dui tincidunt euismod pellentesque. fringilla pharetra risus mi primis ipsum. sapien posuere non nostra consequat. litora fusce',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Posuere cursus felis integer. at',
            'description' => 'Ante non suscipit class ut. nostra ultricies risus ac consequat quis. purus consectetur venenatis per. lorem magna massa arcu. neque',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Placerat vulputate tellus dapibus fermentum',
            'description' => 'Habitasse et habitant consectetur est. nec vestibulum non eu. euismod accumsan viverra morbi suspendisse aptent. vulputate iaculis et nec. pellentesque',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet pulvinar elementum lorem imperdiet',
            'description' => 'Augue sollicitudin sociosqu praesent. eu molestie condimentum donec vestibulum. quisque himenaeos dolor posuere nam. platea at egestas scelerisque himenaeos tempor',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Congue tincidunt sollicitudin mattis dui',
            'description' => 'Nostra mattis himenaeos morbi lobortis duis praesent. consequat dictumst lorem lobortis tempus. accumsan dapibus tempor ad neque dapibus habitasse. aptent',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Metus porta commodo elementum sapien',
            'description' => 'Himenaeos consectetur massa suspendisse pellentesque. mi proin tortor dictum. nisi proin vulputate egestas vivamus pretium. tristique maecenas sem platea sit.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Elementum maecenas ligula sociosqu vehicula.',
            'description' => 'Curabitur porttitor faucibus nisi laoreet. leo conubia cubilia nullam. hac suspendisse vulputate class quis ultrices elementum. ad adipiscing gravida fringilla',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Conubia fermentum ultrices duis nisl',
            'description' => 'Curae hendrerit auctor risus mi convallis consectetur donec. vivamus sollicitudin aenean sem. egestas volutpat massa cras praesent. ad habitasse cubilia',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vitae ad felis vel vel',
            'description' => 'Torquent enim quis litora mollis ante. donec commodo curabitur sodales integer lacinia aliquam. phasellus lacus platea habitasse tincidunt quis. euismod',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Platea ipsum rutrum imperdiet nunc',
            'description' => 'Mattis venenatis etiam himenaeos rhoncus in arcu. urna dui aenean faucibus. eleifend dolor etiam posuere curae aenean ut. litora enim',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nec taciti mollis habitant hac',
            'description' => 'Vestibulum in cubilia sem ante rutrum amet. class torquent nisi non proin. faucibus ut congue quisque conubia vehicula tempor pharetra.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Phasellus laoreet tortor vel mattis',
            'description' => 'Nisl feugiat mollis taciti sodales purus aliquet imperdiet. fringilla enim mattis cursus orci curabitur. ultrices dapibus arcu quam dolor. quam',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pellentesque per purus varius. donec',
            'description' => 'Proin sagittis convallis orci lacinia. lectus porttitor vitae fames. eu commodo varius sem quisque ante per. eu vehicula malesuada pharetra',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mollis sociosqu aenean ante class.',
            'description' => 'Id netus iaculis ut pharetra. sodales dictumst vel adipiscing curae proin auctor orci. ad tristique euismod ullamcorper odio bibendum a',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 2,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Morbi volutpat donec diam netus',
            'description' => 'Nibh lectus etiam quisque ultrices. fringilla tristique dictumst purus bibendum. etiam hac sed congue tincidunt integer. fermentum hendrerit inceptos tristique',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mollis erat gravida nibh bibendum',
            'description' => 'Ad litora tristique mi habitasse. suspendisse cubilia pellentesque aliquet augue etiam tincidunt congue. cubilia conubia rutrum orci sodales eleifend netus.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tortor vitae felis nulla curae.',
            'description' => 'Proin ligula nunc non felis posuere interdum mi. dapibus nisl phasellus ut morbi. at integer ornare nisi. tempus mattis nullam',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur lorem mollis augue vehicula',
            'description' => 'Varius laoreet ut curae. eleifend etiam fames fusce quisque. torquent at urna vehicula malesuada at pharetra sociosqu. justo commodo elit',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean mollis gravida cubilia. sed',
            'description' => 'Nam mi aenean euismod nam. placerat integer sociosqu ac rhoncus felis purus sem. auctor nunc tristique vel euismod pulvinar tempor',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Semper fermentum quam urna pellentesque',
            'description' => 'Vulputate in inceptos tempus. donec adipiscing nullam est tempus litora. felis sagittis ut laoreet pharetra scelerisque lorem massa. duis sagittis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eleifend vehicula ante sem ligula',
            'description' => 'Nibh lobortis odio tristique in ullamcorper porta. magna consequat blandit urna platea integer morbi netus. consectetur at aenean augue. congue',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vestibulum elementum vehicula inceptos. fringilla',
            'description' => 'Hac augue nulla pretium habitant mollis fames fermentum. lacinia velit vivamus ornare rhoncus facilisis aptent. pretium libero nulla lorem ut',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Magna risus hendrerit aenean morbi.',
            'description' => 'Justo purus commodo ornare. ipsum dui feugiat justo nostra. est varius lorem conubia ad posuere euismod torquent. eros fusce in',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vivamus fames gravida turpis varius.',
            'description' => 'Velit amet placerat est orci mollis. habitant luctus tempus est dui nisl habitasse phasellus. fermentum congue sem molestie fusce diam',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque faucibus fermentum iaculis commodo',
            'description' => 'Sem etiam sapien justo auctor. aliquam dictum etiam dictum mi posuere primis cubilia. amet posuere id molestie vivamus eget. praesent',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nullam integer ornare eros in.',
            'description' => 'Feugiat netus torquent nibh etiam euismod tincidunt. malesuada quisque vivamus ornare vel aenean vestibulum mattis. egestas etiam tempus neque nec',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Posuere sociosqu facilisis felis. justo',
            'description' => 'Bibendum nam mi dapibus arcu etiam netus iaculis. donec semper arcu hac odio rhoncus ante. ullamcorper vestibulum arcu enim neque.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquet aliquam gravida nulla felis.',
            'description' => 'Cras eget consectetur leo class eu lobortis. egestas fames in vitae tristique. enim porttitor condimentum maecenas eleifend primis luctus. est',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam eget sagittis consequat gravida',
            'description' => 'Enim curae ultrices ligula hendrerit faucibus massa sit. sed massa at urna imperdiet. fringilla etiam ornare commodo accumsan. hendrerit nulla',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Viverra vitae est dictumst molestie',
            'description' => 'Quis ligula viverra per ultrices. pulvinar risus placerat metus. sapien ut vulputate ad diam ut. ipsum ut at diam purus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sed varius quisque platea varius',
            'description' => 'Augue ornare aliquet fames litora vitae potenti lacus. curae ligula nunc nec blandit nam interdum ligula. urna donec sed fames',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ipsum tincidunt quisque pellentesque consectetur',
            'description' => 'Diam massa lectus feugiat urna. cursus ut quam turpis semper porta. blandit turpis pulvinar ultrices. pharetra ligula donec ultrices libero',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Senectus nisl vel suspendisse auctor',
            'description' => 'Lacus cursus semper dapibus litora primis feugiat sollicitudin. velit porta lacus adipiscing aenean euismod velit. vulputate varius sociosqu potenti condimentum',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sapien feugiat quis quisque nibh.',
            'description' => 'Augue vel hac phasellus curabitur. tortor sem habitasse senectus at at placerat. eu congue dolor lobortis blandit tempus id. ullamcorper',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sociosqu donec dolor rhoncus malesuada',
            'description' => 'Platea quis potenti euismod eros viverra. ullamcorper eu cras posuere libero mattis. euismod donec facilisis ornare rutrum. varius conubia condimentum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur vehicula adipiscing a vivamus',
            'description' => 'Vel dui odio fusce est vestibulum. varius congue in laoreet scelerisque ipsum faucibus. a nisl semper etiam pulvinar integer. curabitur',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Platea porttitor vel purus. vivamus',
            'description' => 'Fames eleifend integer venenatis nunc erat lacus massa. elit himenaeos mauris curae adipiscing ullamcorper viverra. pellentesque tempor a cursus bibendum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fringilla amet ornare tincidunt placerat',
            'description' => 'Vulputate posuere etiam curabitur sollicitudin augue. torquent suspendisse vivamus curabitur morbi urna primis. augue hendrerit ut odio curabitur inceptos. sociosqu',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Hac a hac donec libero.',
            'description' => 'Commodo habitant a ornare aptent nam lacinia. nisi porta consectetur auctor. et vehicula proin lorem id pellentesque. netus neque nulla',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tortor neque interdum sit orci',
            'description' => 'Mattis senectus praesent molestie aenean lorem lectus. cras nunc aenean sed vehicula sagittis pulvinar. porttitor nulla aliquet diam. ac lectus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sit quisque nullam aliquam torquent',
            'description' => 'Feugiat mauris metus viverra curabitur. mattis est accumsan ante sit. dolor maecenas hendrerit fusce sed sagittis. aenean dapibus nunc eros',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Luctus primis at venenatis bibendum.',
            'description' => 'Tempor tempor pellentesque at ut. tortor eu suscipit pharetra. vulputate aenean mattis donec mollis sagittis. dui lacinia facilisis vitae in',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Et habitant pharetra nunc imperdiet.',
            'description' => 'Ultricies ipsum convallis hendrerit nostra litora. fermentum mollis erat sagittis molestie. iaculis accumsan eu consequat mollis class feugiat felis. elit',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Maecenas fames massa enim aliquam',
            'description' => 'Primis massa convallis purus dictum sociosqu risus in. proin vel proin platea. urna conubia sollicitudin pulvinar gravida vel faucibus. luctus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quis volutpat erat purus. elementum',
            'description' => 'Dictum augue ut ad nunc curabitur. venenatis lectus sit turpis. laoreet morbi euismod non vehicula. maecenas lorem habitant justo cras',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Neque sollicitudin bibendum suspendisse convallis',
            'description' => 'Ut euismod pulvinar nibh tempor cursus quis. placerat egestas sociosqu phasellus. donec cubilia tellus sociosqu donec aliquet lobortis aliquet. mattis',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur cubilia litora donec venenatis.',
            'description' => 'Conubia fames praesent imperdiet varius nam etiam. conubia maecenas eget nam eu. feugiat eros fusce rhoncus senectus metus eget nam.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Suscipit dui et viverra ut',
            'description' => 'Curae orci ultrices dui auctor convallis id. rhoncus massa duis nec. torquent felis dapibus odio curae et. imperdiet hendrerit lectus',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 9,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dui rutrum integer consectetur venenatis',
            'description' => 'Hac interdum sociosqu quisque elementum ac. a justo per ligula nam laoreet vitae. arcu morbi bibendum ante. hac ut rutrum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Convallis dui nec faucibus in',
            'description' => 'Tempus vel varius malesuada senectus in viverra eleifend. nec eleifend elit sodales. pellentesque nec luctus torquent felis. donec etiam adipiscing',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mollis massa duis suscipit id',
            'description' => 'Molestie vitae metus fames. potenti at morbi dui enim ac dui laoreet. elementum donec porttitor sed. vestibulum semper aliquet nam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultricies nostra aliquam aenean gravida',
            'description' => 'Ante metus vestibulum rutrum viverra felis. tempor ultrices netus augue elementum libero. semper viverra conubia ut. consequat tempor a amet',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Purus luctus condimentum purus vivamus.',
            'description' => 'At ultrices aenean elit. lacinia blandit urna duis aliquam convallis diam luctus. tincidunt venenatis sit sodales. laoreet praesent libero potenti',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nec conubia praesent fusce per',
            'description' => 'Convallis accumsan metus purus. curabitur proin ornare pretium purus consectetur aliquam netus. donec nunc curae nulla non duis class suscipit.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 2,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Rhoncus at tincidunt mollis. varius',
            'description' => 'Eros placerat est odio ipsum sollicitudin. donec maecenas platea nostra laoreet eget nulla. ad placerat himenaeos vivamus senectus. feugiat pulvinar',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec phasellus netus cras luctus',
            'description' => 'Ipsum faucibus luctus eu. porttitor sapien felis quisque consequat. nisi quisque litora dictum tempor urna. maecenas nunc elementum et dapibus.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Rhoncus diam erat ornare taciti.',
            'description' => 'Rhoncus consectetur pulvinar donec. potenti ut mauris quisque sit hendrerit mollis. commodo varius metus cubilia sem. vestibulum donec ultricies gravida',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur per nullam fusce justo',
            'description' => 'Consectetur diam et vulputate feugiat. aliquam congue senectus vitae nisl. vel inceptos orci conubia praesent sagittis enim eu. purus lacus',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Rutrum molestie primis felis lectus',
            'description' => 'Lectus quisque pulvinar tristique aliquam nullam dolor habitasse. torquent bibendum potenti quam magna est elementum vehicula. lorem interdum purus consectetur',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vulputate placerat ac convallis tempor',
            'description' => 'Habitasse aenean torquent id inceptos interdum molestie. tempus fermentum a mi curae. porta dictumst enim dui mi rhoncus. ac euismod',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Lacus eget aenean sapien. pulvinar',
            'description' => 'Vitae cursus consectetur metus. pretium volutpat condimentum nunc conubia porta sem. praesent senectus quam mollis consequat vestibulum. lobortis id quis',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur congue dolor senectus ad',
            'description' => 'Malesuada convallis bibendum vel nec. ullamcorper vitae fermentum nunc donec. conubia quisque erat augue varius iaculis. pretium blandit blandit ut',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pellentesque velit sociosqu nibh eros',
            'description' => 'Facilisis hendrerit dui neque. bibendum hendrerit ac ullamcorper conubia venenatis eros. et libero facilisis per litora. leo duis scelerisque consectetur',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 3,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vitae nibh tellus aptent aliquam',
            'description' => 'Felis ad arcu enim. suspendisse pretium duis mauris. himenaeos diam purus mi commodo vitae ultricies. lorem consequat taciti est. placerat',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Class vestibulum auctor massa etiam',
            'description' => 'Dapibus nec nibh accumsan per blandit. fusce inceptos lectus consectetur consequat magna id. varius ultrices diam tortor fusce. porttitor scelerisque',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Proin donec elit torquent ut',
            'description' => 'Sollicitudin tempor id class phasellus. elit class tincidunt metus eleifend ut commodo molestie. sollicitudin quam mauris suspendisse donec pellentesque netus.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Torquent rhoncus senectus mauris taciti',
            'description' => 'Sodales felis consequat lorem. torquent per sagittis vitae lobortis. magna et id dapibus. sem ante dictum libero gravida aptent at.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Proin imperdiet placerat quisque. quis',
            'description' => 'Nisi duis varius tempor ac eu. phasellus luctus diam libero risus primis. molestie semper ultrices convallis ullamcorper. molestie sodales porttitor',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nisi aliquet elementum integer curabitur',
            'description' => 'Arcu dictumst arcu varius sagittis sagittis. vel bibendum habitant neque. ad placerat donec sed vitae lorem eget. dui tincidunt eu',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eleifend in himenaeos sollicitudin suspendisse',
            'description' => 'Condimentum vitae iaculis proin morbi. maecenas tristique ante cras inceptos libero conubia. class pharetra dolor volutpat nisl augue ultricies velit.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sociosqu curabitur ante euismod suspendisse.',
            'description' => 'Rhoncus venenatis et non sociosqu. vehicula magna mattis euismod scelerisque eu egestas blandit. per eget vitae lobortis ut. feugiat dictum',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Auctor venenatis etiam fames fusce',
            'description' => 'Eu dapibus consectetur enim fusce eleifend. rhoncus aptent maecenas posuere integer tempor pharetra. iaculis pretium porta tincidunt quisque. quisque convallis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sagittis nam vestibulum adipiscing risus',
            'description' => 'Posuere vehicula metus pellentesque a. nunc metus integer amet hac. eu interdum porta luctus tempor magna vehicula. dictumst varius tristique',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Enim mattis mauris tortor. pellentesque',
            'description' => 'Per velit cras augue tempus. diam litora morbi porttitor molestie. libero pretium diam vestibulum erat dictum neque. morbi nibh aliquam',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Egestas felis a netus aliquam',
            'description' => 'Condimentum nisl curabitur magna feugiat quisque congue ante. amet porttitor augue bibendum euismod ante a. class ornare consequat sit. scelerisque',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Id venenatis semper est interdum.',
            'description' => 'Elit integer ipsum etiam et leo sapien. vitae per non pulvinar ultricies pharetra volutpat turpis. curabitur lacus etiam vel. tellus',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Imperdiet dictumst vestibulum mattis nunc',
            'description' => 'Nostra auctor felis nullam amet curabitur orci dolor. nullam vestibulum ornare mollis eget etiam mollis felis. felis urna varius nec.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aliquam ad facilisis at. mauris',
            'description' => 'Euismod hac sapien curabitur tempor dictumst ante potenti. sollicitudin mollis diam dapibus mattis. erat sollicitudin nunc conubia ultrices lacinia nullam.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dui est lectus maecenas. ad',
            'description' => 'Lectus pharetra eu fermentum. nec pretium donec dictumst mattis suspendisse convallis. eget rutrum suspendisse condimentum placerat aliquam. neque rutrum rutrum',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pretium erat auctor elementum a',
            'description' => 'Per adipiscing eleifend pretium nostra vestibulum. laoreet nullam euismod faucibus facilisis id ad. donec conubia varius netus aliquet. elit quam',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Feugiat senectus accumsan tellus. donec',
            'description' => 'Feugiat hendrerit ipsum curae vulputate arcu. primis quis conubia elit ornare. malesuada purus interdum tristique torquent curabitur. porttitor enim ac',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Metus justo in praesent pretium.',
            'description' => 'Egestas scelerisque congue imperdiet pretium curabitur turpis. massa nisl habitant in condimentum facilisis rutrum. augue vivamus euismod mauris netus fringilla',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Himenaeos interdum iaculis porta sit.',
            'description' => 'Vehicula sit nibh curae sodales lectus. fringilla orci habitasse aliquet quisque turpis congue hendrerit. netus tincidunt dolor lacinia felis euismod.',
            'urgency' => 1,
            'closed' => true,
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
            'title' => 'Massa scelerisque quis nisl pellentesque',
            'description' => 'Suspendisse convallis netus pellentesque. mollis est imperdiet tortor nisi nam. viverra primis cursus tellus quam ornare. metus volutpat ad mauris',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut torquent phasellus leo at',
            'description' => 'Enim aenean donec nunc lectus. praesent integer erat magna class ad malesuada. habitasse nisl massa etiam senectus cubilia vivamus pretium.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quis dolor fames viverra lacus',
            'description' => 'Potenti quisque purus facilisis purus conubia. netus aliquam taciti facilisis potenti tincidunt. molestie vel leo non id dolor netus. tellus',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Morbi posuere potenti placerat. bibendum',
            'description' => 'Etiam netus velit mauris sociosqu. senectus sit justo aliquam elit habitant dapibus aliquam. sit integer ultricies congue dolor et cubilia',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cubilia dictumst iaculis in. tellus',
            'description' => 'Integer facilisis nisl in facilisis tempor. ornare cursus phasellus ipsum. habitant pellentesque lectus euismod. imperdiet facilisis condimentum nunc fames etiam.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tellus etiam nullam himenaeos purus',
            'description' => 'Torquent ligula curabitur sem auctor. amet augue quis aliquam lobortis pulvinar vulputate. netus aenean ultrices eu. eget porta imperdiet ipsum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Diam phasellus sagittis mattis habitasse',
            'description' => 'Sit integer auctor augue blandit molestie faucibus in. placerat per mattis condimentum mattis metus. accumsan donec sapien ut fames dictumst',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aptent torquent sed lectus tincidunt',
            'description' => 'Neque dapibus elit lacinia mollis vitae velit. massa scelerisque morbi ad. venenatis nostra aenean ac. pellentesque urna conubia ut dapibus.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cursus urna litora vel malesuada',
            'description' => 'Felis metus lectus non. cras eros nec ut nullam. duis laoreet vitae tempus orci enim. nostra lacus suspendisse iaculis pharetra.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sagittis posuere a condimentum ornare',
            'description' => 'Sapien vehicula aptent lacinia dolor per. in augue sociosqu ullamcorper. commodo tincidunt viverra donec arcu. integer ut quisque etiam eleifend',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vulputate euismod libero fames tincidunt.',
            'description' => 'Mauris proin ante lectus turpis condimentum fringilla nulla. enim class tellus etiam. fringilla magna congue ultrices condimentum nulla ut interdum.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Himenaeos phasellus tellus per quam',
            'description' => 'Sit adipiscing dictum sapien fames. curabitur odio quisque vel. hac blandit etiam elit nullam. a felis posuere praesent porttitor aenean',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean nulla fermentum nullam. nam',
            'description' => 'Cras molestie ut quam. mi curae tempor porta nullam class mattis porttitor. mattis ad integer himenaeos. congue elit potenti litora',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Curabitur amet pulvinar vestibulum eleifend',
            'description' => 'Risus eros tortor aliquam urna sem nunc. mauris fusce orci proin. venenatis vivamus consectetur cras venenatis sit tristique. est lobortis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque torquent eu justo. purus',
            'description' => 'Sit morbi vulputate ante aenean aptent. pharetra ante imperdiet ac facilisis curabitur. sed nec massa suscipit ut. et iaculis ut',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Amet pulvinar sit ante libero',
            'description' => 'Leo auctor curabitur elit fames donec ultrices. sit gravida accumsan lectus. mi sodales cras praesent egestas purus. consequat primis blandit',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Cursus mi metus commodo viverra',
            'description' => 'Id pulvinar a nisi porttitor quisque. quisque ligula lorem tortor purus eget. torquent odio metus sollicitudin egestas fermentum fringilla rhoncus.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nostra dictum donec quis potenti',
            'description' => 'Sed ut urna magna. facilisis ultricies aenean laoreet. diam curabitur tristique quisque. nullam turpis tellus cursus eget amet congue. gravida',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Luctus nunc habitant fusce. vulputate',
            'description' => 'Velit sem nam velit posuere. tempor massa ligula quis semper amet commodo suspendisse. velit nibh a ad at tellus. leo',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'A integer netus scelerisque quam.',
            'description' => 'Aliquet est vestibulum cursus. interdum odio vehicula sem ad class ac odio. tristique pretium enim per bibendum. ac inceptos interdum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nec eget taciti dapibus. netus',
            'description' => 'Fringilla purus hendrerit platea dictum neque. vestibulum molestie sit ultricies libero. aenean ultricies metus fames fringilla. integer diam hac purus.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Potenti quis nisl torquent sit',
            'description' => 'Molestie ac consectetur class gravida vulputate nullam. habitant fringilla neque mollis ac phasellus nisl. dui at imperdiet elementum dui euismod',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mauris feugiat dui himenaeos diam.',
            'description' => 'Arcu urna at torquent. velit posuere curabitur imperdiet. pharetra dui nullam integer dui et. urna scelerisque scelerisque donec litora. at',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Semper commodo nibh cursus. neque',
            'description' => 'Integer curae ornare et sociosqu feugiat. taciti primis porta curae. nullam inceptos sit condimentum convallis posuere aenean sapien. viverra mattis',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 3,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Adipiscing congue nibh per nostra.',
            'description' => 'Phasellus justo eget suscipit metus sed phasellus posuere. ac aenean egestas amet hac massa. varius tortor tempus iaculis risus. consectetur',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nam et augue nisl imperdiet',
            'description' => 'Id aenean placerat ornare massa suspendisse inceptos sem. eget fames platea malesuada. posuere aliquet integer mattis ut rutrum sapien curae.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Volutpat adipiscing quam enim semper',
            'description' => 'Torquent curae habitasse mollis. donec leo faucibus suspendisse donec ullamcorper. posuere aliquet aenean ad. venenatis a fringilla luctus est netus',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Metus justo orci duis. ipsum',
            'description' => 'Pretium morbi hendrerit sapien. luctus etiam faucibus dapibus mollis consectetur senectus arcu. bibendum fringilla massa est. donec in at ac',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Velit nisl duis ad euismod',
            'description' => 'Mattis porta taciti ad ultricies fringilla. quisque ullamcorper vulputate et amet. arcu integer congue neque rhoncus fringilla bibendum nullam. molestie',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Est luctus felis massa netus.',
            'description' => 'Auctor dui vitae risus donec non commodo. habitasse aliquam nunc potenti. curabitur interdum inceptos dui odio egestas eget. sociosqu pulvinar',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Potenti lacinia nostra purus turpis',
            'description' => 'Magna ipsum lobortis ullamcorper adipiscing tortor aliquet. mauris rutrum vestibulum felis suscipit orci vitae. augue iaculis in mollis suscipit. ornare',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 6,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quisque himenaeos nullam lectus ut.',
            'description' => 'Ornare amet luctus adipiscing odio. consectetur iaculis habitant aenean leo aenean platea. suscipit mauris aliquet himenaeos euismod. gravida vel vivamus',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Enim cras potenti aptent sociosqu',
            'description' => 'Malesuada cursus habitant nec sem dictum taciti. vel aliquam libero scelerisque maecenas malesuada sit. mattis ante integer leo ultrices accumsan',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sem donec non eu urna.',
            'description' => 'Etiam sagittis porta proin. rhoncus netus molestie tincidunt nulla volutpat felis nec. primis sapien nibh purus varius condimentum. mi primis',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Elit non rutrum sociosqu id',
            'description' => 'Non quam inceptos nisl aenean mollis sodales ipsum. rutrum aliquet nulla mi. fringilla nisl mollis senectus malesuada ligula congue. molestie',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Euismod dui purus massa. lorem',
            'description' => 'Torquent eget quisque tortor non faucibus leo. phasellus quisque hac auctor pharetra porta orci aenean. dui maecenas aliquam eget curabitur',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 6,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Orci vivamus cras accumsan. euismod',
            'description' => 'Tristique diam nam netus fringilla vestibulum suscipit sociosqu. quam suscipit diam taciti. senectus curabitur tincidunt sociosqu netus. torquent curabitur ad',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Leo habitant nisl magna. porttitor',
            'description' => 'Volutpat augue purus fringilla magna vehicula at mi. ac duis faucibus praesent aptent quam vel rutrum. quisque convallis himenaeos etiam',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec dapibus magna aliquam integer',
            'description' => 'Justo fringilla convallis augue. donec eu ornare curabitur. libero quisque sagittis mi per aenean sollicitudin. rhoncus pellentesque feugiat ullamcorper elit',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Id molestie fermentum imperdiet varius',
            'description' => 'Primis fusce tortor primis rhoncus nulla. mi porttitor facilisis lectus sit. dapibus morbi rutrum malesuada ullamcorper arcu adipiscing auctor. aenean',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'In consequat faucibus cras ac.',
            'description' => 'Placerat habitasse sit integer cras. ante euismod massa potenti torquent. ut non nisl leo morbi conubia dui nisl. nam proin',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Commodo varius sapien phasellus tellus',
            'description' => 'Rutrum fames inceptos cursus ut iaculis tempus nullam. proin fusce eros commodo eget eget. cubilia posuere bibendum ac rhoncus viverra',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Volutpat ante vulputate tempor ornare.',
            'description' => 'Blandit dictum orci ut. conubia netus aptent netus nostra fermentum ipsum. sodales eleifend erat etiam lectus. euismod maecenas phasellus etiam',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec etiam faucibus volutpat turpis',
            'description' => 'Feugiat ipsum at nec ad ut cursus euismod. felis fringilla donec nam. velit fringilla pulvinar quis blandit. quis dolor praesent',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sit laoreet donec lectus. nunc',
            'description' => 'Potenti sollicitudin nisl quis ornare mauris molestie. curabitur tincidunt taciti ornare malesuada augue quis magna. ante suscipit malesuada pretium dui',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 7,
            'statut_id' => 2,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Hendrerit ante class leo inceptos',
            'description' => 'Egestas varius nec senectus curabitur mauris fringilla. habitasse dictum etiam venenatis nam dui massa. nulla elit luctus nisl. vitae aenean',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Malesuada sagittis luctus habitasse nulla.',
            'description' => 'Aptent varius praesent quisque. conubia inceptos dictum ligula integer ad quisque. dui suscipit integer eget curabitur taciti feugiat ac. rutrum',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Faucibus eget nullam taciti vestibulum',
            'description' => 'Aliquet aenean aenean sit. orci pulvinar iaculis quisque ad sem. cubilia facilisis potenti ante scelerisque nec morbi hac. semper consectetur',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Habitant eget ac fermentum donec',
            'description' => 'Interdum facilisis auctor imperdiet. himenaeos quisque a laoreet eu nostra aptent posuere. leo adipiscing morbi lorem cursus congue phasellus. maecenas',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Urna hac dictum integer. eros',
            'description' => 'Non mattis quisque aliquet felis fusce mattis. vulputate eleifend dictumst rhoncus sollicitudin. rutrum varius himenaeos rutrum vulputate. conubia neque orci',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean non ac rutrum auctor.',
            'description' => 'Volutpat vehicula ipsum ad litora. per cursus lobortis litora cursus. maecenas dapibus fames nostra luctus odio. eleifend sodales proin eros',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 2,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tempus amet consectetur elit egestas.',
            'description' => 'Potenti a consectetur ultricies. interdum integer elementum habitasse tristique accumsan fusce. consequat eu phasellus rutrum aliquam mattis. integer aliquam dolor',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Libero leo phasellus purus. curabitur',
            'description' => 'Fringilla in sit rutrum sagittis nullam rutrum. class arcu arcu sapien. ullamcorper varius ultricies consequat eleifend cubilia amet. dictumst amet',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fringilla platea potenti lacinia placerat',
            'description' => 'Ut convallis curae feugiat blandit sapien lacinia. suspendisse consectetur venenatis sapien. mollis interdum per inceptos nec odio. orci a cras',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sit pretium nostra nisl erat',
            'description' => 'Etiam nostra faucibus id hendrerit. felis mollis lacus aptent nam ornare primis mi. massa curae lobortis leo magna tempor nam.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 8,
            'statut_id' => 5,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eleifend volutpat vehicula praesent porta',
            'description' => 'Pellentesque hac nunc dapibus integer fames. rhoncus netus curabitur lacinia. semper quisque nisi nisi dictumst. per morbi orci semper netus',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Laoreet mattis accumsan dictum pulvinar',
            'description' => 'At quis habitasse pretium turpis vestibulum proin phasellus. tortor porttitor feugiat convallis. placerat quisque lorem tortor aliquet arcu nisi fringilla.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur euismod neque etiam augue',
            'description' => 'Etiam habitant at magna taciti. ut sit lectus platea accumsan. non torquent quisque curae. nullam diam taciti venenatis commodo fermentum.',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 4,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nec fringilla morbi class. ipsum',
            'description' => 'Hendrerit odio suscipit rutrum vestibulum congue dolor. imperdiet ultrices vehicula eget sed quisque auctor. integer donec tortor a placerat amet.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 7,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Senectus dictumst netus ut feugiat',
            'description' => 'Aliquam vehicula vitae imperdiet ullamcorper tellus velit. condimentum facilisis varius taciti fringilla integer turpis. placerat aenean ut vel dictumst. taciti',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Placerat donec phasellus luctus himenaeos',
            'description' => 'Est turpis convallis dolor porta vestibulum maecenas auctor. velit cras nulla dictum eu. tempor adipiscing potenti malesuada congue. varius venenatis',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mattis dapibus aliquam tincidunt. purus',
            'description' => 'Erat potenti interdum ac aptent vivamus. posuere magna dapibus nisl lobortis sit et eleifend. id lectus varius dictum neque non.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Et rhoncus nostra luctus. nam',
            'description' => 'Donec egestas imperdiet dictum aliquam vel nibh magna. feugiat urna per amet vitae vulputate. conubia praesent libero dictumst molestie nulla',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 3,
            'statut_id' => 2,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eget amet volutpat dictumst leo',
            'description' => 'Faucibus quisque justo nisl. curae bibendum id consectetur. praesent etiam volutpat orci. sociosqu pretium sodales convallis aptent taciti. odio aptent',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 4,
            'statut_id' => 2,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eleifend non maecenas mattis nostra',
            'description' => 'Volutpat platea primis scelerisque. at massa litora maecenas. hac egestas odio porttitor nisl. adipiscing ut semper egestas neque sem auctor',
            'urgency' => 1,
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
            'title' => 'Maecenas laoreet integer fames. aliquam',
            'description' => 'Feugiat sollicitudin lacus porta curae. in aenean eleifend mollis risus nostra. elementum mollis mattis ornare etiam risus mi. condimentum mattis',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Facilisis varius ornare fusce aliquam',
            'description' => 'A ac mattis dictumst. feugiat placerat massa quisque scelerisque tempus. habitasse dui curabitur vivamus. senectus suscipit condimentum non. non curae',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Risus integer interdum pellentesque suscipit',
            'description' => 'Tincidunt ut ornare luctus suspendisse duis felis a. primis ligula torquent est semper torquent convallis. platea ante et torquent donec',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 2,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ipsum ultricies habitant justo sodales.',
            'description' => 'Convallis cubilia augue quisque aptent amet nunc iaculis. molestie felis curabitur eros laoreet. nostra phasellus curae aenean erat suspendisse lobortis.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Rhoncus massa eu curabitur fames',
            'description' => 'Aliquam semper potenti cubilia elit odio. purus primis gravida sed elementum nisl. sollicitudin egestas eget ante eros. sed suscipit ullamcorper',
            'urgency' => 3,
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
            'title' => 'Sociosqu curae curabitur nam. id',
            'description' => 'Quis dolor nullam commodo. curabitur ultricies venenatis aenean. ac leo dapibus dictumst fermentum libero vulputate. ipsum lacus dui cras consequat',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Donec magna vitae feugiat nibh',
            'description' => 'Donec viverra feugiat eu lacinia. suspendisse rhoncus placerat eget sem nunc et odio. maecenas dictumst vehicula amet himenaeos pharetra laoreet',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Est cubilia purus nisi porta',
            'description' => 'Elementum nibh dui suspendisse nec eget vulputate pellentesque. dapibus in dictumst tortor tristique fringilla. luctus facilisis ipsum scelerisque risus ipsum',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 9,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Rutrum nisi placerat sociosqu vulputate.',
            'description' => 'Tristique id semper aptent orci convallis dui. aenean in libero nisl maecenas neque. dolor dictum euismod etiam consectetur. ut rhoncus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fringilla tristique viverra iaculis dapibus',
            'description' => 'Fusce molestie porttitor facilisis velit semper semper. ligula bibendum taciti eros vehicula tincidunt senectus dapibus. curabitur facilisis sit nostra per.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Dictum lectus rhoncus consequat. augue',
            'description' => 'At rutrum faucibus primis at. tellus himenaeos himenaeos tellus massa lorem. integer non massa aenean orci adipiscing. risus sit dolor',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur habitasse tristique tincidunt odio',
            'description' => 'Nibh bibendum ligula dictumst semper. potenti consequat primis torquent. volutpat ornare conubia leo. maecenas inceptos erat malesuada scelerisque est nunc',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nullam cubilia nostra pretium. varius',
            'description' => 'Maecenas conubia molestie turpis pulvinar tincidunt. fusce cubilia pharetra rutrum. varius tortor purus luctus. curae pellentesque venenatis curabitur. curae hac',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Orci eget rhoncus neque donec.',
            'description' => 'Pretium taciti euismod ipsum ac venenatis. pellentesque vivamus dolor commodo inceptos. taciti aliquam mauris imperdiet quisque phasellus duis vulputate. mauris',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 1,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Id egestas faucibus habitasse a',
            'description' => 'Viverra himenaeos nisl faucibus donec commodo blandit fusce. conubia lectus convallis eleifend. lectus habitant hendrerit tempor viverra sollicitudin porta. pellentesque',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 5,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Luctus est sapien mauris. cursus',
            'description' => 'Tortor lacus consectetur cubilia vitae maecenas etiam nunc. vestibulum nam elit ante. congue nunc interdum nisi vel. hendrerit bibendum morbi',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Faucibus per taciti malesuada cras',
            'description' => 'Vehicula urna feugiat aenean id. etiam sagittis eleifend sodales sit congue dolor quisque. auctor arcu libero quisque praesent duis rhoncus.',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 3,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 4,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Porta libero tristique faucibus maecenas',
            'description' => 'Iaculis nec fermentum convallis. netus tincidunt molestie nec nec tempus. enim himenaeos mollis eros nam sociosqu nibh. ornare aenean vestibulum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 8,
            'statut_id' => 4,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'At dui duis nisi sollicitudin',
            'description' => 'Sociosqu massa nulla morbi bibendum ac varius convallis. vulputate nisi nisi massa eu phasellus fusce ipsum. elementum convallis amet tortor',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 6,
            'equipe_id' => 9,
            'statut_id' => 2,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Libero placerat blandit ultricies quisque',
            'description' => 'Morbi urna ultricies nisl tempus porta curae urna. tincidunt nulla quisque lacus rutrum curae pretium egestas. aptent semper quisque fusce',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 3,
            'statut_id' => 4,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Risus consequat sodales ultrices netus',
            'description' => 'Leo mi blandit adipiscing molestie primis feugiat. adipiscing amet fringilla quisque auctor bibendum ligula. potenti facilisis ultrices aliquam iaculis. euismod',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 5,
            'statut_id' => 4,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Suscipit erat urna aliquam id',
            'description' => 'Aliquam nisl senectus diam tempor fames porttitor varius. tempor aenean tempus lorem ut maecenas. tempus egestas dictum convallis leo ligula.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 4,
            'equipe_id' => 8,
            'statut_id' => 3,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Aenean tincidunt scelerisque lorem. aptent',
            'description' => 'Purus porttitor himenaeos tristique quam lorem dapibus eros. massa platea nostra habitant amet semper ullamcorper. diam dictum maecenas curae vehicula',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Etiam duis aliquam pellentesque donec',
            'description' => 'Vehicula volutpat litora mattis libero. at augue rutrum pellentesque. sit consequat ipsum vulputate egestas. litora cursus sapien sed consectetur. lacus',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Consectetur cursus ut litora feugiat',
            'description' => 'Maecenas augue inceptos lobortis senectus pulvinar placerat. vivamus diam taciti sed. semper fermentum lobortis varius. aenean vulputate neque per ultricies.',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 3,
            'equipe_id' => 8,
            'statut_id' => 6,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 3
        ]);

        DB::table('demandes')->insert([
            'title' => 'Molestie nisl tristique id condimentum.',
            'description' => 'Purus sodales feugiat massa etiam senectus sed ornare. varius aliquam eget primis ac venenatis aptent. elit nunc sem tristique potenti',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 8,
            'equipe_id' => 2,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Suscipit vel tempor eget hac',
            'description' => 'Egestas mollis velit quis sem fusce rutrum erat. quisque praesent eros nibh cubilia et. torquent a maecenas aenean quisque. tincidunt',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 5,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 1
        ]);

        DB::table('demandes')->insert([
            'title' => 'Erat vitae nunc cursus rhoncus',
            'description' => 'Semper vivamus conubia conubia neque erat nibh sit. felis lorem dictumst quam consequat vivamus scelerisque. curae vivamus imperdiet habitant hac',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 4,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Pharetra molestie conubia hendrerit proin',
            'description' => 'Per est hendrerit ad nam pulvinar rutrum et. ultrices elementum ultrices convallis per class dictumst est. sollicitudin ornare aliquet morbi.',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 1,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Eu tellus porta molestie quisque.',
            'description' => 'Quisque imperdiet neque volutpat dictum urna. aenean duis sodales ultricies aliquam morbi cras class. semper fames nec consequat nibh quisque.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 5,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vel inceptos aptent tortor feugiat.',
            'description' => 'Hac lectus nulla pretium velit. fringilla potenti pretium interdum. sagittis condimentum semper scelerisque ligula nam ut ac. feugiat justo vivamus',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 2
        ]);

        DB::table('demandes')->insert([
            'title' => 'Justo vehicula fusce litora sem.',
            'description' => 'Pulvinar porttitor pellentesque quisque urna ac sodales facilisis. dictum leo augue leo massa. mauris eleifend sapien rutrum urna. non elementum',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 5,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 6
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tincidunt quam senectus habitasse gravida.',
            'description' => 'Rhoncus volutpat hac magna nisl eget. auctor porttitor diam imperdiet justo. elementum dolor eu elit netus tristique. a felis risus',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Accumsan dui ut lectus. non',
            'description' => 'Orci facilisis elit nibh congue facilisis tempor. vel morbi felis nisi quisque. sagittis elit lorem taciti. curabitur aliquet amet cras',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Habitant lacinia a phasellus magna.',
            'description' => 'Tempor fames a libero primis cubilia. aenean id turpis felis. et lorem placerat senectus luctus tellus pellentesque vulputate. mauris ad',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 4,
            'equipe_id' => 4,
            'statut_id' => 6,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Nostra cras cras per ad',
            'description' => 'Et sociosqu cursus primis molestie. eros aliquam aenean nibh semper nisi lectus. congue curae augue aptent. suscipit mollis amet hendrerit',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 7,
            'equipe_id' => 3,
            'statut_id' => 5,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Integer dolor at litora inceptos',
            'description' => 'Commodo quisque fames risus fringilla a sapien. torquent metus fermentum donec non inceptos tempor per. vestibulum vulputate tristique aenean tempus',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 4,
            'statut_id' => 1,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Vitae massa placerat per nec.',
            'description' => 'Est facilisis luctus eleifend. quam diam sodales eleifend inceptos. commodo odio dictumst congue. eleifend ullamcorper urna sodales. luctus netus eleifend',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 9,
            'statut_id' => 5,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 8
        ]);

        DB::table('demandes')->insert([
            'title' => 'Tempor himenaeos magna phasellus sed',
            'description' => 'Taciti accumsan potenti arcu. eros ultrices posuere per blandit curae. ultricies tempus ad aptent volutpat est. habitant nullam fermentum blandit.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 2,
            'equipe_id' => 6,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Sapien pulvinar tempus elit malesuada.',
            'description' => 'Ad nisl iaculis torquent magna tortor. phasellus dictum id vestibulum malesuada. interdum ultrices sollicitudin bibendum elit suspendisse urna ultricies. habitasse',
            'urgency' => 2,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 7
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut duis nisl lacinia. ac',
            'description' => 'Sed porta et massa. elementum pulvinar at pellentesque. blandit himenaeos etiam quam tempor taciti class leo. ultricies erat porta imperdiet.',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 5,
            'equipe_id' => 3,
            'statut_id' => 1,
            'categorie_id' => 3,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Justo quisque augue elit vestibulum.',
            'description' => 'Imperdiet aliquam blandit enim. gravida rhoncus varius primis dictum. sociosqu ut risus eget quam senectus. tortor velit congue dolor viverra',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 7,
            'equipe_id' => 5,
            'statut_id' => 6,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 5
        ]);

        DB::table('demandes')->insert([
            'title' => 'Mattis nulla diam phasellus. nullam',
            'description' => 'Fusce curabitur vulputate sollicitudin egestas venenatis eget. pellentesque nostra netus nisl laoreet id. aliquet porta velit elementum habitasse est diam.',
            'urgency' => 1,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 9,
            'equipe_id' => 3,
            'statut_id' => 3,
            'categorie_id' => 2,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ut netus aenean sagittis curae',
            'description' => 'Metus ultricies volutpat nunc placerat nisl pulvinar risus. erat platea sodales sit ipsum. odio vivamus tempus proin odio justo hac',
            'urgency' => 3,
            'closed' => true,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 5,
            'equipe_id' => 9,
            'statut_id' => 1,
            'categorie_id' => 6,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Placerat eleifend habitasse molestie curabitur',
            'description' => 'Mattis tellus eros maecenas. nisl fames magna tempor. curabitur venenatis pulvinar curae nullam auctor. eleifend sagittis venenatis dictumst sed. fermentum',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 1,
            'equipe_id' => 5,
            'statut_id' => 1,
            'categorie_id' => 1,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Quam semper quam aliquet netus.',
            'description' => 'Dui orci aliquet vehicula sed ligula bibendum. scelerisque id donec in. mi accumsan donec auctor. fringilla aptent ante proin aliquam',
            'urgency' => 3,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 8,
            'equipe_id' => 6,
            'statut_id' => 1,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Ultrices id rhoncus platea. tincidunt',
            'description' => 'Suscipit conubia himenaeos vulputate placerat laoreet vestibulum. magna elit arcu ipsum interdum potenti dolor. habitant lobortis purus rhoncus sagittis turpis',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 2,
            'equipe_id' => 7,
            'statut_id' => 6,
            'categorie_id' => 8,
            'desired_date' => date("Y/m/d"),
            'processor_id' => NULL
        ]);

        DB::table('demandes')->insert([
            'title' => 'Torquent placerat suscipit habitasse pharetra',
            'description' => 'Iaculis suscipit placerat tristique curae himenaeos. malesuada euismod viverra hendrerit fermentum. mattis duis ipsum dictumst fames fusce ut. aenean vitae',
            'urgency' => 2,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => true,
            'user_id' => 1,
            'equipe_id' => 7,
            'statut_id' => 1,
            'categorie_id' => 9,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 4
        ]);

        DB::table('demandes')->insert([
            'title' => 'Fermentum nullam sollicitudin lorem a',
            'description' => 'Urna primis adipiscing sapien vehicula justo. interdum vulputate consequat elementum lacus. vel habitasse diam volutpat. tempus ullamcorper integer scelerisque ipsum',
            'urgency' => 1,
            'closed' => false,
            'processing_date' => NULL,
            'validated' => false,
            'user_id' => 9,
            'equipe_id' => 1,
            'statut_id' => 4,
            'categorie_id' => 7,
            'desired_date' => date("Y/m/d"),
            'processor_id' => 9
        ]);

    }
}
