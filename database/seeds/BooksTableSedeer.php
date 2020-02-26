<?php

use Illuminate\Database\Seeder;

class BooksTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
    


            \App\Book::create([
                'title'=>'أرض زيكولا',
                'price'=>rand(20,50),
                'category_id'=> 1,
                'author'=>'عمرو عبد الحميد',
                'description'=>'هل جرّبت أن تتعامل بعملة مختلفة عن العملات الورقية .. ليست معدنية وليست ذهبية ...الثروة هنا من نوع آخر ... لن تدفع مالاً لتأخذ ..بل ستدفع من ذكائك ..ستدفع من وحدات عقلك... ولكن انتبه فـ للثروة حدود ...فهنا المفلس لا يعامل باحتقار أو يُهان كما يحدث في عالمك .. بل يتعرض للموت .. احذر .. فأنت .. في أرض زيكولا',
                'quantity'=>rand(1,20),
                'user_id'=> 2,
                'status' => 1,
                'cover'=> '3-1.jpg'
            ]);

            \App\Book::create([
                'title'=>'يوتوبيا',
                'price'=>rand(20,50),
                'category_id'=> 1,
                'author'=>'أحمد خالد توفيق',
                'description'=>'تدور أحداث الرواية في سنة 2023 حيث تحولت مصر الي طبقتين, الأولي بالغة الثراء والرفاهية وهي (يوتوبيا) المدينة المحاطة بسور ويحرسها جنود المارينز التي تقع في الساحل الشمالي والثانية فقر مدقع وتعيش في عشوائيات ويتقاتلون من أجل الطعام والرواية تحكى قصة شاب غنى من يوتوبيا يريد أن يتسلى ويقوم بمغامرة لكسر ملل الحياة ورتابتها وهى صيد إنسان فقير من سكان شبرا واللعب به مع أصحابه للحصول على متعة ثم قتله والاحتفاظ بجزء من جسده على سبيل الفخر وهى من الهوايات الجديدة للأغنياء الذين يعيشون في الساحل الشمالي تحديدا في يوتوبيا التي تشكل عالم الأغنياء.',
                'quantity'=>rand(1,20),
                'user_id'=> 2,
                'status' => 1,
                'cover'=> '1.jpg'
            ]);
         

            \App\Book::create([
                'title'=>'ايزابيل',
                'price'=>rand(20,50),
                'category_id'=> 1,
                'author'=>'انطونيو تابوكي',
                'description'=>'اختفت إيزابيل، المناضلة ضد ديكتاتورية سالازار في البرتغال، في ظروف غامضة. ورغم أن صديقها تاديوس قرأ خبر موتها في الصحيفة، لم يصدّق وراح يسافر من مكان إلى آخر، مقتفياً رموزاً وإشارات ترشده في بحثه، ملتقياً آخر الأشخاص الذين التقتهم إيزابيل قبل اختفائها المفاجئ.
                في رحلة البحث، يدخل تاديوس متاهة «الماندالا»، متنقّلاً من دائرة إلى أخرى، في أجواء بوليسية وروحانية. من لشبونة إلى جبال الألب السويسرية، يجد تاديوس نفسه مرةً أخرى في ذاك القارب نفسه، تحت ضوء القمر الأحمر نفسه، حيث قال لإيزابيل ذات يوم: وداعاً.',
                'quantity'=>rand(1,20),
                'user_id'=> 2,
                'status' => 1,
                'cover'=> '2-1.jpeg'
            ]);

            \App\Book::create([
                'title'=>'تاريخ الطبري',
                'price'=>rand(20,50),
                'category_id'=>2 ,
                'author'=>'ابن جرير',
                'description'=>'كتاب تاريخ الطبري تأليف محمد بن جرير الطبري، وهو من أهم الكتب التراثية، ومن أبرز المصادر التاريخية التي حفظتها لها المكتبة الإسلامية، فهو أوسع التواريخ القديمة وأشملها.',
                'quantity'=>rand(1,20),
                'user_id'=> 2,
                'status' => 1,
                'cover'=> 'jareer.png'
            ]);

            \App\Book::create([
                'title'=>'	المفاتيح العشرة للنجاح ',
                'price'=>rand(20,50),
                'category_id'=> 3 ,
                'author'=>'ابراهيم الفقي',
                'description'=>'1 الدوافع : الرغبة المشتعلة لتحقيق الأهداف .. سر النجاح هو الرغبة المشتعلة .
                الدوافع الداخلية هي السبب في أن يقوم الشخص العادي بعمل أشياء أعلى من المستوى العادي و يصل إلى نتائج عظيمة ... أما الدوافع الخارجية التي مصدرها الأخرين و التي تتلاشى بسرعة .
                
                2 الطاقة : الصحة هي وقود الحياة
                الرياضة التنفس الغذاء المتوازن شرب الماء الطاقة العاطفية التأمل ',
                'quantity'=>rand(1,20),
                'user_id'=> 2,
                'status' => 1,
                'cover'=> 'key.jpg'
            ]);

            \App\Book::create([
                'title'=>'ثلاثية غرناطة',
                'price'=>rand(20,50),
                'category_id'=>4 ,
                'author'=>'رضوي عاشور',
                'description'=>'
                غرناطة مريمية الرحيل !
                الروايات الثلاث التي جمعت في ثلاثية غرناطة
                رواية تشعرك بالخجل ، بالعار ، لما وصل إليه
                ضعف المسلمين ، محرومين من التحدث بالعربية ،
                محرومين من الصلاة ، قراءة القرآن ،
                صوم رمضان والاحتفال بعيدي المسلمين .
                مجبورين على اعتنقاء المسيحية ، مذلولين
                أينما اتجهوا ، لا حياة كريمة ولا ذرة إنسانية
                وترحيل من أرض إلى أرض و سلب ممتلكاتهم
                عنوة ! المصائب تتوالى، مصيبة أكبر من قبلها
                و أكثر ألما ووجعا وحزنا واضطهادا',
                'quantity'=>rand(1,20),
                'user_id'=> 2,
                'status' => 1,
                'cover'=> 'ger.jpg'
            ]);


            \App\Book::create([
                'title'=>'علم نفس الجماهير',
                'price'=>rand(20,50),
                'category_id'=> 5,
                'author'=>'سيجمند فرويد',
                'description'=>'الملكية الفكرية محفوظة لمؤلف الكتاب المذكور',
                'quantity'=>rand(1,20),
                'user_id'=> 2,
                'status' => 1,
                'cover'=> 'nafs.png'
            ]);

            \App\Book::create([
                'title'=>' حكايات جحا و الحمار',
                'price'=>rand(20,50),
                'category_id'=> 6,
                'author'=>'منصور على عرابى',
                'description'=>'جحا وحماره وابنه في يومٍ من الأيام كان جحا و ابنه يحزمون أمتعتهم إستعداداً للسفر إلى المدينة المجاورة، فركبا على ظهر الحمار لكي يبدأوا رحلتهم ... وفي الطريق مروا على قريةٍ....',
                'quantity'=>rand(1,20),
                'user_id'=> 2,
                'status' => 1,
                'cover'=> 'ch.png'
            ]);



         



       
    }
}