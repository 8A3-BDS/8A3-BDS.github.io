<?php get_header(); ?>

<section class="custom-gradient">
    <section class="container-fluid overflow-hidden pt-3 text-center">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container-fluid">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/fumee_logo_navbar.png" alt="Fumee logo" id="header-logo"> 
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler10" aria-controls="" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span> 
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler10">
                    <ul class="ms-auto navbar-nav"> 
                        <li class="align-self-center nav-item"> <a class="active link-light nav-link" aria-current="page" href="#about" id="o-nas"><?php _e( 'O NAS', 'fumee' ); ?></a> 
                        </li>                                 
                        <li class="align-self-center nav-item"> <a class="link-light nav-link" href="#products" id="produkty"><?php _e( 'PRODUKTY', 'fumee' ); ?></a> 
                        </li>                                 
                        <li class="align-self-center nav-item"> <a class="align-self-center link-light nav-link" href="#contact" id="wspolpraca"><?php _e( 'KONTAKT I WSPÓŁPRACA', 'fumee' ); ?></a> 
                        </li>                                 
                        <li class="nav-item"> <a class="link-light nav-link" href="https://www.instagram.com/fumee.pl/"><img src="<?php echo get_template_directory_uri(); ?>/assets/ig.png" alt="Instagram" class="icon" id="instagram"></a> 
                        </li>                                 
                        <li class="nav-item"> <a class="link-light nav-link" href="https://wa.me/48533826795"><img src="<?php echo get_template_directory_uri(); ?>/assets/wh.png" alt="Whatsapp" class="icon" id="whatsapp"></a> 
                        </li>                                 
                    </ul>
                </div>
            </div>                     
        </nav>
        <!-- Slider hero -->
        <div class="container-fluid" id="hero-container">
            <div id="carouselExampleControls" data-bs-ride="carousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="active carousel-item mw-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/fumee_slider_1.png"/>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/fumee_slider_2.png"/>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/fumee_slider_3.png"/>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/fumee_slider_4.png"/>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/fumee_slider_5.png"/>
                    </div>
                </div>
                <a href="#carouselExampleControls" role="button" data-bs-slide="prev" class="carousel-control-prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden"><?php _e( 'Previous', 'fumee' ); ?></span> </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"> <span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden"><?php _e( 'Next', 'fumee' ); ?></span> </a>
            </div>
        </div>
        <!-- Sekcja About -->
        <section id="about">
            <div class="marquee">
                <div class="track"><span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span> <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                    <span><?php _e( 'POZNAJ NAS', 'fumee' ); ?></span>
                </div>
            </div>
            <div class="container-fluid"> 
                <div id="who" class="row"> 
                    <div id="kim" class="col-12 col-xxl-12" data-pg-ia-scene='{"dir":"v","smooth":"0","s_t":"start","s_s":"end","l":[{"a":"fadeIn"}]}'>
                        <h3 class="text-black"><?php _e( 'Kim jesteśmy?', 'fumee' ); ?></h3>
                        <p class="text-black"><?php _e( 'Fumee to nowa na rynku firma zajmująca się dystrybucją e-papierosów, e-liquidów oraz części zamiennych przeznaczonych do&nbsp;wapowania. Naszym celem jest dostarczanie najnowocześniejszych produktów, gwarantujących najwyższą jakość i&nbsp;satysfakcję z&nbsp;użytkowania.', 'fumee' ); ?><br><?php _e( 'Jako partner handlowy zapewniamy rzetelną i&nbsp;kompleksową obsługę logistyczną. W&nbsp;naszej ofercie znajdziesz produkty spełniające najwyższe standardy, potwierdzone wszelkimi wymaganymi certyfikatami bezpieczeństwa.', 'fumee' ); ?></p>
                    </div>
                    <div class="align-content-center align-self-center col-lg-4 col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_blue.png" id="logo_blue" sizes="4000px">
                    </div>                             
                    <div class="col-lg-8 col-md-8" id="why-us" ata-pg-ia-scene='{"l":[{"a":"fadeIn"}]}' data-pg-ia-scene='{"dir":"v","l":[{"a":"fadeIn"}]}'>
                        <h3 class="text-black"><?php _e( 'Dlaczego my?', 'fumee' ); ?></h3>
                        <p class="text-black"><?php _e( 'Fumee uważnie selekcjonuje marki, które wprowadza na rynek. Stawiamy na jakość, smak i&nbsp;design dotąd niedostępne na rynku lub&nbsp;konkurencyjne dla topowych marek. Bardzo istotne jest dla nas bezpieczeństwo klientów końcowych, dlatego oferujemy wyłącznie przebadane &nbsp;przetestowane produkty, spełniające wymogi TPD. Każdy klient jest dla nas tak samo ważny.', 'fumee' ); ?></p>
                        <p class="text-black"><?php _e( 'Uważamy, że indywidualne podejście i&nbsp;zrozumienie potrzeb klienta jako przedsiębiorcy jest  kluczowe dla zbudowania bliskiej relacji biznesowej opartej na wzajemnym zaufaniu.', 'fumee' ); ?></p>
                    </div>                             
                </div>                         
            </div>                     
        </section>
        <section id="bg-ask">
            <div class="container pb-5 pt-5">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 me-auto ms-auto" data-pg-ia-scene='{"dir":"v","l":[{"a":"fadeIn"}],"on":"desktop"}'>
                        <p class="lead-ask"> <?php _e( 'Jesteś właścicielem jednego vape shopu w małej miejscowości?', 'fumee' ); ?><br><?php _e( 'Nasza oferta jest dla ciebie!', 'fumee' ); ?></p>
                        <p class="lead-ask"> <?php _e( 'Posiadasz kilka sklepów?', 'fumee' ); ?><br><?php _e( 'A może rozwinąłeś już swoją sieć vape shopów w wielu miastach?', 'fumee' ); ?></p>
                        <p class="lead-ask"> <?php _e( 'Skontaktuj się z nami, a na pewno nawiążemy owocną współpracę!', 'fumee' ); ?></p>
                    </div>
                </div><a href="#" class="btn btn-ask pe-3 ps-3" data-pg-ia='{"l":[{"trg":"mouseenter","a":"rubberBand"}]}'><?php _e( 'NAPISZ DO NAS!', 'fumee' ); ?></a>
            </div>
        </section>
    </section>
</section>
<section id="products" style="margin-left: auto; margin-right: auto;" class="container-fluid">
    <div id="marquee-products" style="z-index: 2;" class="marquee">
        <div class="track">
            <span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span> <span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span><span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span><span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span><span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span><span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span><span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span><span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span><span><?php _e( 'POZNAJ NASZE PRODUKTY', 'fumee' ); ?></span> 
        </div>
    </div>
    <section class="text-center text-lg-start text-secondary">
        <div class="container-fluid overflow-hidden" id="keystone"> 
            <div class="align-items-center row"> 
                <div class="col-lg-7 col-md-7 order-lg-1 order-md-first pb-2" data-pg-ia-scene='{"on":"desktop","l":[{"a":"fadeIn"}],"dir":"v"}' style="z-index: 1;">
                    <h2 class="text-black"><?php _e( 'KEYSTONE ARK PRO', 'fumee' ); ?></h2>
                    <img id="bubble-1" src="<?php echo get_template_directory_uri(); ?>/assets/bubble_1.png">
                    <p class="p-products text-black"><?php _e( 'W szczególności doceniony za swój ergonomiczny, owalny kształt,', 'fumee' ); ?> <?php _e( 'idealnie dopasowujący się do dłoni oraz wyróżniający się na tle konkurencji industrialny styl.', 'fumee' ); ?></p>
                </div>
                <div class="col-lg-5 col-md-5 order-first order-lg-1 order-sm-first pb-2" id="papieroski">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Group%20211.png" data-pg-ia-scene='{"dir":"v","l":[{"a":"slideInDown"}]}'>
                </div>                         
            </div>
            <div class="align-items-center"> 
                <div class="col-lg-10 order-lg-1 pb-2" data-pg-ia-scene='{"dir":"v","l":[{"a":"fadeIn"}]}' style="z-index: 1;">
                    <p class="p-products text-black"><?php _e( 'Ark PRO stawia na komfort, jakość i satysfakcję z&nbsp;użytkowania. Urządzenie jest nieco cięższe od&nbsp;większości podów innych marek, a jego metaliczne, subtelnie połyskujące wykończenie zapobiega pozostawianiu odcisków palców.', 'fumee' ); ?></p>
                    <p class="p-products text-dark"><?php _e( 'Dostępny w czterech eleganckich wariantach kolorystycznych.', 'fumee' ); ?></p>
                </div>                         
            </div>                     
        </div>
        <div class="container-fluid ks-wrapper">
            <ul class="ks-carousel"> 
                <li class="ks-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ark_pod_1.png">
                    <p><?php _e( 'Pod Ark PRO został wyposażony w system grzewczy o&nbsp;zakresie mocy od 5W do 30W, który zapewnia maksymalnie intensywny smak o wydłużonym finiszu oraz umożliwia wyprodukowanie większej i gęstszej chmury.', 'fumee' ); ?></p>
                    <p><?php _e( 'Wbudowany inteligentny chip dostosowuje moc wyjściową, automatycznie odczytując oporność grzałki.', 'fumee' ); ?></p>
                </li>                         
                <li class="ks-card"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ark_pod_2.png">
                    <p><?php _e( 'Grzałka mesh Sytek (oryginalnie opracowanaprzez markę Keystone) posiada powierzchnię grzewczą 1.5&nbsp;razy większą niż u innych producentów. Umożliwia szybsze, bardziej równomierne podgrzanie e-liquidu w&nbsp;zaledwie 0.09 sekundy, wzmacniając doznania smakowe.', 'fumee' ); ?></p>
                    <p><?php _e( 'Za wzbogacony smak e-liquidu odpowiada też czterootworowy wlot powietrza w cartridge&rsquo;u, zamiast standardowego dwuotworowego.Dzięki temu rozwiązaniu wapowanie zyskujena lekkości i gładkości.', 'fumee' ); ?></p>
                </li>                         
                <li class="ks-card"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ark_pod_3.png">
                    <p><?php _e( 'Regulacja przepływu powietrza, umieszczona z boku urządzenia, pozwala na dodatkową personalizację wrażeń podczas zaciągania. Konstrukcja cartridge’a w urządzeniach z serii ARK cechuje się niezwykłą szczelnością.', 'fumee' ); ?></p>
                    <p><?php _e( 'Jako nośnik liquidu zastosowano najwyższej jakości wielowarstwową bawełnę biologiczną o zróżnicowanej gęstości  i grubości, aby zapobiec przeciekaniu płynu.', 'fumee' ); ?></p>
                </li>                         
                <li class="ks-card"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ark_pod_4.png">
                    <p><?php _e( 'Specjalnie zaprojektowany pierścieniowy kanał powietrzny równoważy ciśnienie wewnątrz i na zewnątrz wkładu, aby zapobiec wyciekom spowodowanym różnicą ciśnień  powietrza.Dzięki tym elementom oraz kilkuwarstwowym silikonowym pierścieniom i uszczelkom, cartridge Keystone dla urządzeń ARK Pro i Lite jest jednymz najbardziej niezawodnych na rynku.', 'fumee' ); ?></p>
                    <p><?php _e( 'Napełnianie liquidu przez otwór boczny z silikonową zatyczką jest łatwe i wygodne dla użytkownika.', 'fumee' ); ?></p>
                </li>                         
            </ul>
        </div>
        <div id="prod-info" class="container-fluid">
            <div class="row"> 
                <div class="col-lg-5 col-md-6 order-1 order-lg-0 order-md-0 order-sm-1">
                    <div class="bg-secondary border spec-info">
                        <h4><?php _e( 'DANE TECHNICZNE CARTRIDGE\'A', 'fumee' ); ?></h4>
                        <p><?php _e( 'Pojemność: 2.0 ml', 'fumee' ); ?><br><?php _e( 'Materiał: PCTG', 'fumee' ); ?><br><?php _e( 'Oporność grzałki: 0.4Ω/0.6Ω/0.8Ω', 'fumee' ); ?></p>
                    </div>
                    <div class="border bg-secondary spec-info">
                        <h4><?php _e( 'DANE TECHNICZNE PODA', 'fumee' ); ?></h4>
                        <p><?php _e( 'Materiał obudowy: stop cynku', 'fumee' ); ?><br><?php _e( 'Zakres mocy: 5-30W', 'fumee' ); ?><br><?php _e( 'Aktywacja: mechanizm Auto-Draw i przycisk', 'fumee' ); ?><br><?php _e( 'Bateria: 900mAh', 'fumee' ); ?><br><?php _e( 'Wymiary: 112.6 × 27.75 × 18.1mm', 'fumee' ); ?><br><?php _e( 'Ładowanie: Type-C', 'fumee' ); ?>  
                    </div>
                    <div class="bg-secondary border spec-info">
                        <h4><?php _e( 'ZESTAW ZAWIERA:', 'fumee' ); ?></h4>
                        <p><?php _e( '1 × Urządzenie ARK PRO', 'fumee' ); ?><br><?php _e( '1 × Pod ARK Meshed 0.6Ω', 'fumee' ); ?><br><?php _e( '1 × Pod ARK Meshed 0.4Ω', 'fumee' ); ?><br><?php _e( '1 × Smycz', 'fumee' ); ?><br><?php _e( '1 × Kabel ładowania', 'fumee' ); ?><br><?php _e( '1 × Instrukcja obsługi', 'fumee' ); ?></p>
                    </div>
                </div>                         
                <div id="ark-pro-txt" class="col-lg-7 col-md-6 order-0 order-lg-1 order-md-0 order-sm-0">
                    <div class="">
                        <p><?php _e( 'Pod Ark Pro jest wyposażony w port ładowania USB Type-C, wspierający technologię szybkiego ładowania. W&nbsp;zaledwie 18 minut bateria ładuje się z&nbsp;10 do 80%, a&nbsp;użytkownik może cieszyć&nbsp;się nieprzerwanym wapowaniem nawet do 3 dni.', 'fumee' ); ?></p>
                        <p> <?php _e( 'Wyświetlacz OLED informuje użytkownika w czasie rzeczywistym o poziomie naładowania baterii, aktualnej mocy, oporności i&nbsp;liczbie zaciągnięć.', 'fumee' ); ?></p>
                    </div>
                    <div id="img-ark">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/ark-pro-set.png">
                    </div>
                </div>                         
            </div>
        </div>                 
        <div class="ark-pro-lite container-fluid overflow-hidden">
            <div class="row"> 
                <div class="col-lg-8 col-md-8 order-1 order-lg-0 order-md-1 order-sm-1">
                    <h2><?php _e( 'KEYSTONE ARK LITE', 'fumee' ); ?></h2>
                    <p><?php _e( 'Pod Ark Lite to idealny wybór dla początkujących waperów oraz zwolenników e-papierosów jednorazowych, którzy poszukują ekonomicznej alternatywy. Prosty, bezprzyciskowy design urządzenia zapewnia komfort i&nbsp;łatwość użytkowania - wystarczy zaciągnąć się i&nbsp;cieszyć wapowaniem.', 'fumee' ); ?></p>
                    <p><?php _e( 'Papieros elektroniczny Ark Lite jest dostępny w dwóch wersjach kolorystycznych o aksamitnym w dotyku, matowym wykończeniu, odpornym na odpryski i&nbsp;zarysowania.', 'fumee' ); ?></p>
                </div>
                <div id="papieroski2" class="col-lg-4 col-md order-lg-0 order-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Group%20199.png" sizes="4000px" class="order-first order-sm-first overflow-hidden" width="100%">
                </div>                         
            </div>
            <div class="row"> 
                <div class="col-lg-12 order-1 order-lg-0 order-sm-1">
                    <p class="col-lg-12"><?php _e( 'Pod został wyposażony w system grzewczy o&nbsp;maksymalnej mocy do 25W, zapewniając intensywny smak o&nbsp;wydłużonym finiszu oraz umożliwiając wyprodukowanie dużej i gęstej chmury.', 'fumee' ); ?></p>
                    <p><?php _e( 'Regulacja przepływu powietrza, umieszczona z boku urządzenia, pozwala na dodatkową personalizację wrażeń podczas zaciągania.', 'fumee' ); ?></p>
                </div>                         
            </div>
        </div>
        <div id="prod-info2" class="container-fluid overflow-hidden pb-5">
            <div class="row"> 
                <div id="pod-ark-lite" class="col-lg-7 col-md-6">
                    <div class="">
                        <p><?php _e( 'Pod Ark Lite jest wyposażony w port ładowania USB Type-C, wspierający technologię szybkiego ładowania, jak&nbsp;w&nbsp;przypadku Ark Pro.', 'fumee' ); ?> </p>
                        <p> <?php _e( 'Wskaźnik LED informuje o poziomie naładowania baterii: kolor biały oznacza wysoki poziom naładowania, niebieski średni, a&nbsp;czerwony niski.', 'fumee' ); ?></p>
                    </div>
                    <div id="img-pod-lite">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Group%20201.png" sizes="4000px">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="bg-white border spec-info2">
                        <h4><?php _e( 'DANE TECHNICZNE CARTRIDGE\'A', 'fumee' ); ?></h4>
                        <p class="text-start"><?php _e( 'Pojemność: 2.0 ml', 'fumee' ); ?><br><?php _e( 'Materiał: PCTG', 'fumee' ); ?><br><?php _e( 'Oporność grzałki: 0.4Ω/0.6Ω/0.8Ω', 'fumee' ); ?></p>
                    </div>
                    <div class="bg-white border spec-info2">
                        <h4><?php _e( 'DANE TECHNICZNE PODA', 'fumee' ); ?></h4>
                        <p class="text-start"><?php _e( 'Materiał obudowy: stop aluminium', 'fumee' ); ?><br><?php _e( 'Zakres mocy: 12-25W', 'fumee' ); ?><br><?php _e( 'Aktywacja: mechanizm Auto-Draw', 'fumee' ); ?><br><?php _e( 'Bateria: 900mAh', 'fumee' ); ?><br><?php _e( 'Wymiary: 27.75 × 17.5 × 89.5mm', 'fumee' ); ?><br><?php _e( 'Ładowanie: Type-C', 'fumee' ); ?>  
                    </div>
                    <div class="bg-white spec-info2">
                        <h4><?php _e( 'ZESTAW ZAWIERA:', 'fumee' ); ?></h4>
                        <p class="text-start"><?php _e( '1 × Urządzenie ARK LITE', 'fumee' ); ?><br><?php _e( '1 x Instrukcja obsługi', 'fumee' ); ?><br>  
                    </div>
                </div>                         
            </div>
        </div>
        <section class="salts">
            <div class="container-fluid overflow-hidden"> 
                <div class="row">
                    <div class="col-lg-7 col-md-6 order-lg-1">
                        <h2 class="text-black"><?php _e( 'SOLE NIKOTYNOWE DIZZY', 'fumee' ); ?></h2>
                        <p class="text-start"><?php _e( 'Dizzy Ice to linia soli nikotynowych z kooladą stworzona dla&nbsp;naprawdę wymagających waperów. Starannie wyselekcjonowane smaki zaskakują intensywnością i rzadko spotykanym, doskonałym wręcz odwzorowaniem.', 'fumee' ); ?></p>
                        <p class="text-start"><?php _e( 'Bez względu na to, czy preferujesz słodkie czy kwaśne smaki, Dizzy dostarczy ci niezastąpionych wrażeń.', 'fumee' ); ?></p>
                    </div>
                    <div class="col-lg-5 col-md-6 order-first order-lg-2 order-md-1 order-sm-first py-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/salts.png" sizes="4000px" width="100%">
                    </div>                             
                </div>                         
            </div>
            <div class="container-fluid salt-wrapper">
                <ul class="salt-carousel"> 
                    <li class="salt-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/salt1.png" alt="Ark Pod head" draggable="false">
                    </li>                             
                    <li class="salt-card"> 
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/salt2.png" alt="Ark Pod head" draggable="false">
                        </div>
                    </li>                             
                    <li class="salt-card"> 
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/salt3.png" alt="Ark Pod head" draggable="false">
                        </div>
                    </li>                             
                    <li class="salt-card"> 
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/salt4.png" alt="Ark Pod head" draggable="false">
                        </div>
                    </li>
                    <li class="salt-card"> 
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/salt5.png" alt="Ark Pod head" draggable="false">
                        </div>
                    </li>                             
                    <li class="salt-card"> 
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/salt6.png" alt="Ark Pod head" draggable="false">
                        </div>
                    </li>                             
                </ul>
            </div>
            <div id="salt-center"> 
                <div class="container-fluid overflow-hidden pb-4 pt-4 text-black"> 
                    <div class="align-items-center row"> 
                        <div class="col-lg-12 text-center"> 
                            <p class="mb-4"><?php _e( 'Nasze sole są świetną opcją dla każdego, kto poszukuje bezkompromisowego połączenia smaku i&nbsp;mocy nikotyny. Zarówno dla doświadczonych waperów jak i fanów jednorazówek, szukających najlepszej  możliwej alternatywy. Złożone, unikalne doznania smakowe przy jednoczesnej gładkości i&nbsp;minimalnym  drażnieniu gardła? Takie właśnie są sole nikotynowe Dizzy Ice od Fumee!', 'fumee' ); ?></p>
                            <p class="mb-4"><?php _e( 'Dizzy Ice jako produkt nikotynowy spełnia wszelkie normy TPD, zachowując najwyższe standardy', 'fumee' ); ?><br><?php _e( 'jakości i&nbsp;bezpieczeństwa.', 'fumee' ); ?></p>
                        </div>                                 
                    </div>                             
                </div>                         
            </div>
        </section>
        <section class="contact">
            <div class="baner container-fluid">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/baner1.png" alt="Produkty" class="baner-image" sizes="4000px">
            </div>
            <footer class="bg-dark container footer-bg"> 
                <div class="row"> 
                    <div class="col-lg-6 col-md formularz ms-auto order-lg-2 order-md-1 text-center" id="contact">
                        <section class="pb-5 pt-5">
                            <form id="contact-form" method="post" action="<?php echo get_template_directory_uri(); ?>/contact.php" role="form">
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_email" type="text" name="email" class="form-control" placeholder="Imię, nazwisko / Nazwa firmy:" required="required" data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_name" type="email" name="name" class="form-control" placeholder="Adres email:" required="required" data-error="Adres email jest wymagany.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="phone" class="form-control" placeholder="Numer telefonu:" required="required" data-error="Numer telefonu jest wymagany.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Wiadomość:" rows="4" required="required" data-error="Prosimy, zostaw nam wiadomość!."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <input type="submit" class="btn-form btn-send btn-success" value="Wyślij" data-pg-ia='{"l":[{"trg":"mouseenter","a":"rubberBand"}]}'>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="text-muted">  
                                        </div>
                                    </div>
                                </div>
                            </form>                                     
                        </section>
                        <!-- miejsce na formularz -->
                    </div>
                    <div class="col-lg-6 col-md-6 order-lg-1 order-md-first" id="footer-logo">
                        <img id="footer-img" src="<?php echo get_template_directory_uri(); ?>/assets/logo_form.png">
                        <div class="row">
                            <div class="col-md-5 data">
                                <?php _e( 'FUMEE SP. Z O.O.', 'fumee' ); ?>
                                <br>
                                <?php _e( 'Tenisowa 18a, 53-013, Wrocław', 'fumee' ); ?> <br>
                                <?php _e( 'KRS 0001106127', 'fumee' ); ?>
                                <br>
                                <?php _e( 'NIP 8992993846', 'fumee' ); ?>
                                <br>
                                <?php _e( 'REGON 528667600', 'fumee' ); ?>
                            </div>
                            <div class="col-md-6 data order-first order-lg-last order-md-last order-sm-first order-xl-last order-xxl-last">
                                <ul>
                                    <li>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/phone-call.png" class="phone-icon">
                                        <span><?php _e( '+48 533 826 795', 'fumee' ); ?></span>
                                    </li>
                                    <li>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/mail.png" class="phone-icon">
                                        <span><?php _e( 'biuro@fumee.pl', 'fumee' ); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>                             
                </div>
                <div class="justify-content-md-evenly pb-3 row">
                    <div class="col-md-7 col-xxl-6 data-footer order-last order-md-first order-sm-last order-xxl-first" "">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/breath.png"><span><?php _e( '@2024 wszelkie prawa zastrzeżone', 'fumee' ); ?></span>
                        <span><a class="active link-light nav-link" aria-current="page" href="https://breathdesignstudio.com"><?php _e( '&nbsp;BREATH DESIGN STUDIO', 'fumee' ); ?></a></span>
                    </div>
                    <div class="col-md-4 justify-content-md-end rules-container"><a class="active link-light nav-link" aria-current="page" href="policy.html"><?php _e( 'POLITYKA PRYWATNOŚCI', 'fumee' ); ?></a>
                        <span class="separator"> / </span>
                        <a class="active link-light nav-link" aria-current="page" href="rules.html"><?php _e( 'REGULAMIN', 'fumee' ); ?></a>
                        <!--  
                            podpiąć taki odnośnik pod obrazek w nagłówku
                            <a href="https://wa.me/48123456789?text=Cze%C5%9B%C4%87%2C%20jak%20si%C4%99%20masz%3F" target="_blank"></a> 

                            -->
                    </div>
                </div>                         
            </footer>
        </section>                 
    </section>
</section>        

<?php get_footer(); ?>