<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            
            'title'=>"Európa - Študijné pobyty",
            'text'=>"<p>Program Erasmus+ je zaměřen na vysokoškolské vzdělávání a je určen především pro studenty.

            Cílem programu je podpořit vzájemné vztahy a spolupráci mezi vysokými školami v rámci evropského prostoru, zvýšit úroveň transparentnosti a slučitelnosti kvalifikací vysokoškolského vzdělávání v Evropě, zkvalitnit jazykovou výuku, informovat o vzdělávacích systémech v různých zemích a dát vzdělání evropský rozměr.</p>
        
            <p>Základní podmínkou pro zapojení vysokoškolské instituce do programu Erasmus+ je přidělení Erasmus Charter for Higher Education (ECHE) od Evropské komise, který UHK získala na období 2014-2020.
            
            Podprogram Erasmus se zaměřuje na vysoké školství. Je to největší program, který podporuje evropskou spolupráci v oblasti vysokoškolského vzdělávání. V současné době je do programu aktivně zapojena většina evropských vysokých škol.
            
            Fakulta informatiky a managementu je v programu zapojena již od akademického roku 1998/1999. Každým rokem se počet nabízených pobytů zvyšuje a i nadále se snažíme hledat nové partnerské univerzity v destinacích, které v naší nabídce prozatím chybí. V rámci tohoto programu bylo vysláno na střednědobé pobyty více než 700 studentů. V současné době máme již 71 partnerských univerzit.
            
            Naši studenti mají možnost se v rámci studijního pobytu přímo účastnit výuky jednotlivých předmětů a složit příslušné zápočty a zkoušky. Mohou poznat nejen styl výuky, ale hlavně mají spoustu příležitostí potkat nové přátele, prozkoumat nové prostředí a získat neocenitelné zkušenosti a neopakovatelné zážitky.
            </p>
           <p> Kterých zemí se program týká?
    
            členské státy EU – Belgie, Bulharsko, Česká republika, Dánsko, Estonsko, Finsko, Francie, Irsko, Itálie, Kypr, Litva, Lotyšsko, Lucembursko, Maďarsko, Malta, Německo, Nizozemsko, Polsko, Portugalsko, Rakousko, Rumunsko, Řecko, Slovensko, Slovinsko, Spojené království, Španělsko, Švédsko, Chorvatsko
            země EHP (Norsko, Island, Lichtenštejnsko)
            Turecko, Bývalá jugoslávská republika Makedonie, Srbsko </p>" ,

            'slug'=>"clanok-1",
            'user_id'=>"1"
            ]);
        DB::table('posts')->insert([
                'title'=>"Pracovné stáže",
                'text'=>"<p>Program Erasmus+ je zaměřen na vysokoškolské vzdělávání a je určen především pro studenty. Kromě studijních pobytů nabízíme také možnost pracovní stáže v zahraničí.

                Studenti si nejen zlepší jazykové schopnosti, poznají odlišnou kulturu, ale také zvýší své šance na trhu práce. 
                </p>
                <p>V kterých zemích je možné absolvovat pracovní stáž?
                
                členské státy EU – Belgie, Bulharsko, Česká republika, Dánsko, Estonsko, Finsko, Francie, Irsko, Itálie, Kypr, Litva, Lotyšsko, Lucembursko, Maďarsko, Malta, Německo, Nizozemsko, Polsko, Portugalsko, Rakousko, Rumunsko, Řecko, Slovensko, Slovinsko, Spojené království, Španělsko, Švédsko, Chorvatsko
                země EHP (Norsko, Island, Lichtenštejnsko)
                Turecko, Bývalá jugoslávská republika Makedonie, Srbsko</p>",
                'slug'=>"clanok-2",
                'user_id'=>"1"
                ]);
        DB::table('posts')->insert([
                    'title'=>"Erasmus – Polytechnic Institute of Viana do Castelo, Portugalsko",
                    'text'=>"<p>Na Erasmus do Portugalska jsem se vydala společně se svojí kamarádkou ze školy Pájou. Po dlouhém uvažování jsme se nakonec rozhodly, že pojedeme do Portugalska, protože tam bude krásně teplo. Opak byl ale pravdou. Ze začátku sice svítilo sluníčko a mohly jsme se opalovat na naší krásné terase s výhledem na oceán, ale po chvíli se počasí obrátilo proti nám. Začaly nám deštivé dny. Ani počasí nám ale nemohlo pokazit požitek z krásného Portugalska a zážitky z Erasmu.

                    Bydlely jsme v městečku na kopci v nádherném domě společně se čtyřmi Brazilkami, jednou Běloruskou a třemi Češkami. Ze začátku se zdálo jako nemožné, dělit se o vše s dalšími sedmi holkami, ale postupem času jsme si všechny přirostly k srdci. Byly jsme jako sestry, vše jsme si půjčovaly a pomáhaly jsme si.
                    
                    Dojít do školy nám trvalo asi 15 minut. Pokaždé jsme musely zdolat tři malé kopce. Dolů to ještě šlo, ale zpáteční cesta byla vždy malinko náročná. Do školy jsme ale chodily jen málokdy, protože se všechny předměty vyučovaly v portugalštině a my portugalsky neumíme. Se všemi učiteli jsme se proto domluvily na schůzkách, které se konaly přibližně jednou za dva týdny.
                    
                    A teď něco o cestování. Protože mám úžasnou rodinu a kamarády, téměř každý měsíc mě někdo z nich navštívil. Dalo by se říct, že jsem díky tomu procestovala takřka celé Portugalsko. Nejprve mě navštívili babička, děda a má sestra. Půjčili jsme si na letišti auto a vyrazili na výlet. Během naší cesty jsme navštívili 13 měst, jedno bylo hezčí než druhé. V každém najdete roztomilé úzké uličky, barevné domečky… Asi nejvíce jsme si zamilovali Porto. Od tohoto města jsem bydlela asi pouze 70 km daleko, a tak jsem tam s každou svojí návštěvou minimálně jednu noc zůstávala. V květnu za mnou přijeli rodiče. Společně s Pájou jsme s nimi navštívili další místa, protože je pro nás, studenty cestovního ruchu, cestování srdcová záležitost. A já jsem moc ráda, že jsem takovou možnost měla. </p>",
                   
                    'slug'=>"clanok-3",
                    'user_id'=>"1"
                    ]);
        DB::table('posts')->insert([
        'title'=>"Velká Británia",
        'text'=>"<p>Pro studenty FIM máme nabídku k získání bakalářského titulu BA (Hons) na partnerské univerzitě ve Velké Británii. 

        Po ukončení 2. ročníku studia na FIM (lze i později) se student může přihlásit ke studiu na University of Huddersfield. Studium trvá dva semestry, školní rok začíná v průběhu září a končí zhruba v polovině května. Student s přihláškou přikládá seznam předmětů, které vystudoval na FIM. Dále musí během svého ročního studia ve Velké Británii splnit předepsaný počet kreditů s vyhovujícím prospěchem. Po návratu domů student dostuduje na FIM UHK a po úspěšném ukončení studia na FIM získá druhý titul Bc.
        
        Pro přijetí ke studiu jsou posuzovány pouze studijní výsledky na zdejší fakultě, žádné přijímací zkoušky předepsány nejsou. Úroveň anglického jazyka a schopnost studia v angličtině jsou ponechány na vlastním posouzení studenta. Počet přijímaných studentů není ze strany partnerské univerzity omezený.</p>",
        'slug'=>"clanok-4",
        'user_id'=>"1"
                    ]);
        DB::table('posts')->insert([
        'title'=>"Erasmus – University of Applied Sciences for Public Service in Bavaria, Hof, Německo",
        'text'=>"<p>Na svůj studijní pobyt v zahraničí jsem se rozhodla odjet do Německa. Odjížděla jsem na začátku března roku 2018. V té době leželo bavorské město Hof, kde jsem strávila tři měsíce, ještě pod sněhem.

        První víkend probíhal tzv. welcome week, během kterého jsem měla možnost poznat studenty z celého světa. Každý den jsme společně trávili hodiny na intenzivním kurzu německého jazyka a každé odpoledne probíhal seznamovací program. Byli jsme společně například na večeři v typicky bavorské hospůdce, zašli jsme na bowling, do kina, udělali jsme si výlet k jezeru Untreusee a o víkendu jsme navštívili Norimberk a vesnici Mödlereuth, které se rovněž přezdívá Little Berlin, neboť ji také rozdělovala zeď.
        
        Po welcome week jsem začala navštěvovat přednášky jednotlivých předmětů na univerzitě. V Hofu, ve kterém jsem studovala, se nacházejí dvě univerzity. Na jedné z nich studují většinou němečtí studenti, kteří později pracují ve státní sféře. Tam jsem studovala i já a byla jsem jedinou zahraniční studentkou.</p>",
        'slug'=>"clanok-5",
        'user_id'=>"1"
                    ]);
    }
}
