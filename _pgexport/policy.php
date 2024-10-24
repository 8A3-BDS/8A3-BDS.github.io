<?php get_header(); ?>

<nav class="navbar navbar-dark navbar-expand-lg text-center">
    <div class="container-fluid">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/fumee_logo_navbar.png" alt="Fumee logo" id="header-logo1"> 
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler10" aria-controls="" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler10">
            <ul class="ms-auto navbar-nav"> 
                <li class="align-self-center nav-item"> <a class="active link-light nav-link" aria-current="page" href="index.html#about" id="o-nas"><?php _e( 'O NAS', 'fumee' ); ?></a> 
                </li>                         
                <li class="align-self-center nav-item"> <a class="link-light nav-link" href="index.html#products" id="produkty"><?php _e( 'PRODUKTY', 'fumee' ); ?></a> 
                </li>                         
                <li class="align-self-center nav-item"> <a class="align-self-center link-light nav-link" href="index.html#contact" id="wspolpraca"><?php _e( 'KONTAKT I WSPÓŁPRACA', 'fumee' ); ?></a> 
                </li>                         
                <li class="nav-item"> <a class="link-light nav-link" href="https://www.instagram.com/fumee.pl/"><img src="<?php echo get_template_directory_uri(); ?>/assets/ig.png" alt="Instagram" class="icon" id="instagram"></a> 
                </li>                         
                <li class="nav-item"> <a class="link-light nav-link" href="https://wa.me/48533826795"><img src="<?php echo get_template_directory_uri(); ?>/assets/wh.png" alt="Whatsapp" class="icon" id="whatsapp"></a> 
                </li>                         
            </ul>
        </div>
    </div>             
</nav>
<div class="container-rules">
    <h3><?php _e( 'Polityka prywatności', 'fumee' ); ?></h3>
    <p><?php _e( 'Regulamin korzystania z serwisu internetowego Fumee', 'fumee' ); ?></p>
    <p><?php _e( 'Data wejścia w życie: 17.10.2024r.', 'fumee' ); ?></p>
    <ol>
        <li>
            <h5><?php _e( '1. INFORMACJE OGÓLNE', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Niniejsza Polityka Prywatności określa zasady przetwarzania i ochrony danych osobowych użytkowników korzystających z serwisu internetowego', 'fumee' ); ?> 
                    <?php _e( 'Fumee (dalej: „Serwis”). Serwis jest wyłącznie stroną prezentacyjną, która ma na celu przedstawienie informacji o firmie Fumee oraz jej', 'fumee' ); ?> 
                    <?php _e( 'produktach. Na stronie dostępny jest formularz kontaktowy, umożliwiający użytkownikom przekazanie swoich danych. Administratorem danych', 'fumee' ); ?> 
                    <?php _e( 'osobowych jest FUMEE SP Z O.O. z siedzibą we Wrocławiu (53-013), NIP: 8992993846, REGON: 528667600, kontakt: biuro@fumee.pl,', 'fumee' ); ?>
                    <?php _e( '+48 533 826 795', 'fumee' ); ?> 
                </li>
            </ol>
        </li>
        <li>
            <h5><?php _e( '2. ZAKRES ZBIERANYCH DANYCH', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Za pośrednictwem formularza kontaktowego Serwis zbiera następujące dane osobowe:', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Imię i nazwisko', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Nazwa firmy (opcjonalnie)', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Numer telefonu', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Adres e-mail', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( 'Dane te są zbierane wyłącznie na potrzeby kontaktu z użytkownikami.', 'fumee' ); ?>
                </li>
            </ol>
        </li>
        <li>
            <h5><?php _e( '3. CEL PRZETWARZANIA DANYCH', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Zebrane dane osobowe są przetwarzane wyłącznie w celu:', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Odpowiedzi na pytania lub zapytania wysłane przez użytkownika poprzez formularz kontaktowy', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Prowadzenia korespondencji związanej z działalnością firmy Fumee', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Utrzymywania relacji biznesowych (jeśli dotyczy)', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( 'Dane nie będą wykorzystywane w celach marketingowych bez wyraźnej zgody użytkownika.', 'fumee' ); ?>
                </li>
            </ol>
        </li>                 
        <li>
            <h5><?php _e( '4. PODSTAWA PRAWNA PRZETWARZANIA DANYCH', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Przetwarzanie danych osobowych odbywa się zgodnie z:', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( 'Art. 6 ust. 1 lit. a RODO – na podstawie zgody użytkownika, udzielonej podczas wypełniania formularza kontaktowego', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( 'Art. 6 ust. 1 lit. b RODO – w zakresie, w jakim przetwarzanie danych jest niezbędne do', 'fumee' ); ?>
                    <?php _e( 'realizacji zapytań użytkowników', 'fumee' ); ?>
                </li>
            </ol>
        </li>
        <li>
            <h5><?php _e( '5. PRAWA UŻYTKOWNIKÓW', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Każdy użytkownik ma prawo do:', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Dostępu do swoich danych osobowych', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Sprostowania swoich danych osobowych', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Usunięcia swoich danych osobowych', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Ograniczenia przetwarzania danych osobowych', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Sprzeciwu wobec przetwarzania danych osobowych', 'fumee' ); ?>
                </li>
                <li>
                    <?php _e( '~ Cofnięcia zgody na przetwarzanie danych w dowolnym momencie (co nie wpływa na zgodność przetwarzania z prawem przed jej cofnięciem) W celu skorzystania z tych praw należy skontaktować się z Administratorem: biuro@fumee.pl', 'fumee' ); ?>
                </li>                         
            </ol>
        </li>
        <li>
            <h5><?php _e( '6. UDOSTĘPNIENIE DANYCH', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Dane osobowe użytkowników nie będą udostępniane żadnym podmiotom trzecim, z wyjątkiem przypadków, w których jest to wymagane przez przepisy prawa lub na żądanie uprawnionych organów.', 'fumee' ); ?>
                </li>                         
            </ol>
        </li>
        <li>
            <h5><?php _e( '7. PRZECHOWYWANIE DANYCH', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Dane osobowe użytkowników będą przechowywane przez okres niezbędny do udzielenia odpowiedzi na zapytania, a następnie usuwane, chyba że użytkownik wyrazi zgodę na dalszy kontakt w przyszłości.', 'fumee' ); ?>
                </li>
            </ol>
        </li>
        <li>
            <h5><?php _e( '8. PLIKI COOKIES', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Serwis wykorzystuje pliki cookies w celu zapewnienia prawidłowego działania strony oraz w celach analitycznych. Użytkownicy mogą zarządzać plikami cookies w ustawieniach swojej przeglądark', 'fumee' ); ?>
                </li>
            </ol>
        </li>
        <li>
            <h5><?php _e( '9. ZMIANY W POLITYCE PRYWATNOŚCI', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'Administrator zastrzega sobie prawo do wprowadzania zmian w Polityce Prywatności, które będą publikowane na stronie Serwisu. Zmieniona Polityka wchodzi w życie z dniem jej opublikowania.', 'fumee' ); ?>
                </li>
            </ol>
        </li>
        <li>
            <h5><?php _e( '10. KONTAKT', 'fumee' ); ?></h5>
            <ol>
                <li>
                    <?php _e( 'W sprawach związanych z ochroną danych osobowych prosimy o kontakt: biuro@fumee.pl', 'fumee' ); ?>
                </li>
            </ol>
        </li>
    </ol>
</div>
<footer class="container footer-bg"> 
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
        <div class="col-lg-6 col-md-6 order-lg-1 order-md-first" id="footer-logo1">
            <img id="footer-img1" src="<?php echo get_template_directory_uri(); ?>/assets/logo_form.png">
            <div class=" row">
                <div class="col-md-5 data1 text-white">
                    <?php _e( 'FUMEE SP. Z O.O.', 'fumee' ); ?>
                    <br>
                    <?php _e( 'Tenisowa 18a, 53-013, Wrocław', 'fumee' ); ?> <br>
                    <?php _e( 'KRS 0001106127', 'fumee' ); ?>
                    <br>
                    <?php _e( 'NIP 8992993846', 'fumee' ); ?>
                    <br>
                    <?php _e( 'REGON 528667600', 'fumee' ); ?>
                </div><span></span>>
                <div class="col-md-6 data1 order-first order-lg-last order-md-last order-sm-first order-xl-last order-xxl-last">
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/phone-call.png" class="phone-icon"> <span class="text-white"><?php _e( '+48 533 826 795', 'fumee' ); ?></span></p>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/mail.png" class="phone-icon"><span class="text-white"><?php _e( 'biuro@fumee.pl', 'fumee' ); ?></span></p>
                </div>
            </div>
        </div>                 
    </div>
    <div class="justify-content-md-evenly pb-3 row">
        <div class="col-md-7 col-xxl-6 data-footer order-last order-md-first order-sm-last order-xxl-first" "">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/breath.png">
            <span class="text-white"><?php _e( '@2024 wszelkie prawa zastrzeżone', 'fumee' ); ?></span><span><a class="active link-light nav-link" aria-current="page" href="https://breathdesignstudio.com"><?php _e( '&nbsp;BREATH DESIGN STUDIO', 'fumee' ); ?></a></span> 
            <!-- dodać <a> do instagrama Oliwci -->
        </div>
        <div class="col-md-4 justify-content-md-end rules-container">
            <a class="active link-light nav-link" aria-current="page" href="policy.html"><?php _e( 'POLITYKA PRYWATNOŚCI', 'fumee' ); ?></a><span class="separator text-white"> / </span><a class="active link-light nav-link" aria-current="page" href="rules.html"><?php _e( 'REGULAMIN', 'fumee' ); ?></a>
            <!--  
                            podpiąć taki odnośnik pod obrazek w nagłówku
                            <a href="https://wa.me/48123456789?text=Cze%C5%9B%C4%87%2C%20jak%20si%C4%99%20masz%3F" target="_blank"></a> 

                            -->
        </div>
    </div>             
</footer>        

<?php get_footer(); ?>