<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('films')->delete();
        
        \DB::table('films')->insert(array (
            0 => 
            array (
                'id' => 1,
                'film_name' => 'Король Ричард',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/10/1/od7c8ebfdf748qk10c48a.jpg',
                'publish' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'film_name' => 'Редкие звери',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/s7803378d1617zy30n97g.jpeg',
                'publish' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'film_name' => 'Возвращение Синдбада',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/h66e451405a0duq97v66y.jpeg',
                'publish' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'film_name' => 'Странствия Синдбада',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/1/5/e736096d82fc7iv39t17o.jpg',
                'publish' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'film_name' => 'Тайна спящей дамы',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/ue187540c7453tp47q63x.jpg',
                'publish' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'film_name' => 'Тайна Сен-Тропе',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/k5a0b570f3383ak71p28g.jpeg',
                'publish' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'film_name' => 'Брак по завещанию 2. Возвращение Сандры',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/yb30ce3b6fbfbme25k73j.jpeg',
                'publish' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'film_name' => 'Аварийное состояние',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/q89dccb8e7e08ae43y71p.jpeg',
                'publish' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'film_name' => 'Номер 69',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/m9842dd713932ar43v32j.jpeg',
                'publish' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'film_name' => 'Ведьмы / История колдовства',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/ed7bdde493970bw11z23l.jpeg',
                'publish' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'film_name' => 'Горько!',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/i9898964e0602mw59y21w.jpeg',
                'publish' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'film_name' => 'Возвращение короля',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/e8882ee8501e9zx14a18z.jpeg',
                'publish' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'film_name' => 'Моя семья и волк',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/pf9cd30d1dda4ov97v78b.jpeg',
                'publish' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'film_name' => 'Закон Гарроу',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/ab77446ae161elx56u21m.jpg',
                'publish' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'film_name' => 'Маленький портной',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/ob6c6bd104714mh29h49h.jpeg',
                'publish' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'film_name' => 'Радужно-бабочково-единорожная кошка',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/e447db6a1c396iz28e94b.jpeg',
                'publish' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'film_name' => 'Невеста тьмы',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/lf8268bb6cccdms12w20g.jpeg',
                'publish' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'film_name' => 'Деррен Браун: Толчок',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/g9634be4f0759gm45m29z.jpg',
                'publish' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'film_name' => 'Дождь',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/m9e0e49f1fa81bu49d43l.jpeg',
                'publish' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'film_name' => 'Мир глазами группы Radiohead',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/jdceb36a8ab99ob68w60r.jpg',
                'publish' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'film_name' => 'Деррен Браун: Жертва',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/ode33d25e59ceux88b50q.jpeg',
                'publish' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'film_name' => 'Возвращение доктора Мабузе',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/i00cac7e25d74yk59n81w.jpeg',
                'publish' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'film_name' => 'Жестокая провинция',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/w6a02fa120985ow47p51e.jpg',
                'publish' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'film_name' => 'Мессалина, императрица Венеры',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/y5d918e42b9e0pi89p77d.jpg',
                'publish' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'film_name' => 'Глубокие воды',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/m6e1c99e26cfaxh94u67h.jpeg',
                'publish' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'film_name' => 'Гуляка',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/kf4117bea1eb7kz92b95c.jpeg',
                'publish' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'film_name' => 'Чудо',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/i941e0b18901cwf81n82x.jpeg',
                'publish' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'film_name' => 'Голубые молнии',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/d4741b5840ea8gl45r58v.jpeg',
                'publish' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'film_name' => 'Государственная защита 3',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/ie42cd72878ffls24g35o.jpg',
                'publish' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'film_name' => 'Государственная защита 2',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/r9d2fe4f4ff06cz24u42u.jpeg',
                'publish' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'film_name' => 'Медиум',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/q737efb810853qx33p52p.jpeg',
                'publish' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'film_name' => 'Фри-соло',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/wda9c3feb0f92ja58i80l.jpeg',
                'publish' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'film_name' => 'Что ни день, то неприятности',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/22/p913804dc3fbcih63e76c.jpeg',
                'publish' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'film_name' => 'Вещдок',
                'preview_url' => 'https://static.hdrezka.ac/i/2016/11/30/v9eb992a3ebc9fs18x18u.jpg',
                'publish' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'film_name' => 'Удары',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/11/16/sc512c309587bpq24i36y.jpg',
                'publish' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'film_name' => 'Ясновидец 3: Это Гас',
                'preview_url' => 'https://static.hdrezka.ac/i/2021/10/30/pf22f1403212fiq57m40m.jpg',
                'publish' => 0,
            ),
        ));
        
        
    }
}