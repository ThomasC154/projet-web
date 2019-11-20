<!DOCTYPE html>

<html lang="fr-FR">

<head>

    <!-- Character set used -->
    <meta charset="utf-8" />
    <!--Tell the screen to show 'full sized' for mobile users -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="/Images/logo_dbe_cesi_nice.png">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" media="all" type="text/css" href="/css/styleIndex.css" />
    <link rel="stylesheet" media="all" type="text/css" href="/css/styleFooter.css" />
    <link rel="stylesheet" media="all" type="text/css" href="/css/styleEvent.css" />
    <link rel="stylesheet" media="all" type="text/css" href="css/styleShop.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">

    <!-- Global Page Title -->
    <title>BDE NICE</title>

    <!-- JavaScripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
    </script>


</head>

<body>
    <!-- ##################     Page Header = Navigation     ###################### -->
    @section('navbar')
    <header>

        @if(Request::is('/'))
        <img id="campus" src="Images/campus.jpg" alt="Image Campus">
        @endif

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="/"><img id="logo_header" src="/Images/logo_dbe_cesi_nice.png" alt="Logo_Cesi"></a>
                <a class="navbar-brand" href="/">CESI <span style="font-weight: 700">NICE</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="linksed collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:3000/shop">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:3000/events">Évenements</a>
                        </li>
                        <!-- <li class="nav-item">
                    <a class="nav-link" href="admin">Admin</a>
                </li> -->

                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        @if(Auth::check())
                        @php 
                        $user_id2 = Auth::user()->id; @endphp
                        @javascript('user_idd', "{{ $user_id2 }}")
                        @endif

                        &nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == "http://localhost:3000/shop" || "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == "http://localhost:3000/shopping-cart") { ?>
                            <a href="{{ route('article.shoppingCart') }}" class="nav-link active">
                                <h5 class="cart">
                                    <i class="fas fa-shopping-cart"><span> Panier </span></i>
                                    <span id="cart_count"
                                        class="text-warning bg-dark">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                                </h5>
                            </a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </header>
    @show

    <main>
        @yield('content')
    </main>

    <!-- ##################     Footer     ###################### -->
    @section('footer')
    <!--- Footer start--->

    <footer class="footer">
        <div class="mt-5 pt-5 pb-5 footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2 class="color-white">Nous Suivre</h2>
                        <p class="pr-5 text-white-50">
                            <div>
                                <a href="#" class="fab fa-facebook fa-2x footer_social"></a>
                                <a href="#" class="fab fa-twitter fa-2x footer_social"></a>
                                <a href="#" class="fab fa-instagram fa-2x footer_social"></a>
                            </div>
                        </p>
                    </div>
                    <div class="col-lg-4 col-xs-12 location float-right">
                        <h2 class="mt-lg-0 mt-sm-4 color-white">A propos</h2>
                        <div id="footer_mention" class="links">

                            <div id="footer_mention">
                                <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Mentions légales</a>
                                <p>
                                    <a href="#" data-toggle="modal" data-target=".bd-example-modal2-lg">Cookies</a></p>
                                <?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == "http://localhost:3000/shop") { ?>
                                <a href="#" data-toggle="modal" data-target=".bd-example-modal3-lg">Conditions générales
                                    de Vente</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <!-- Large modal -->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div id="modalPadding" class="modal-content">
                                <h4>1.Mentions légales</h4>

                                <p>1. Conformément aux dispositions de l'article 6-III 1<sup>e</sup> de la loi
                                    n°2004-575 du 21
                                    juin 2004 pour la confiance dans l'économie numérique, nous vous informons
                                    que&nbsp;:</p>

                                <ul>
                                    <li>la présente plateforme est éditée par le BDE de nice, Direction des lycées,
                                        27 place
                                        Jules Guesde, 13481 Marseille cedex 20. Son numéro de téléphone est le 01 02
                                        03 04 05;
                                    </li>

                                    <li>le directeur de la publication de la présente plateforme en ce qui concerne
                                        les contenus
                                        édités par la Région, est moi, en qualité de représentant légal du BDE Nice
                                        ;</li>

                                    <li>l'hébergement de la présente plateforme est assuré à Marseille - France, par
                                        la société
                                        JAGUAR NETWORKS , dont l'adresse est 70 Chemin du Passet, 13016 Marseille,
                                        et le numéro
                                        de téléphone est 04 22 90 99 98</li>
                                </ul>

                                <h4>&nbsp;</h4>
                                <h4>2.Signalement de contenus illicites</h4>

                                <p>2. L'utilisateur pourra signaler auprès du BDE Nice l'existence de contenus
                                    illicites mis à
                                    la disposition du public par BDE Nice, soit, conformément à l'article 6-I-7 de
                                    la loi
                                    n°2004-574 du 21 juin 2004, tout contenu susceptible de revêtir les caractères
                                    des
                                    infractions visées aux cinquième et huitième alinéas de l'article 24 de la loi
                                    du 29 juillet
                                    1881 sur la liberté de presse et à l'article 227-23 du Code pénal.</p>

                                <p>3. Pour signaler un contenu manifestement illicite, l'utilisateur peut envoyer un
                                    courriel à
                                    <a href="mailto:MaximeMehrenberger@viacesi.fr">MaximeMehrenberger@viacesi.fr</a>
                                    &nbsp;en
                                    précisant :</p>

                                <ul>
                                    <li>la page depuis laquelle le contenu est accessible&nbsp;;</li>

                                    <li>le contenu considéré comme illicite&nbsp;;</li>

                                    <li>la date à laquelle le contenu considéré comme illicite a été
                                        découvert&nbsp;;</li>

                                    <li>son identité (nom et coordonnées complètes).</li>
                                </ul>

                                <p>4. L'abus de signalement est puni d'une peine d'un an d'emprisonnement et de
                                    15.000 €
                                    d'amende.</p>

                                <h4>&nbsp;</h4>
                                <h4>3.Limitation de responsabilité</h4>

                                <p>5. L'utilisateur reconnaît disposer de la compétence et des moyens nécessaires
                                    pour accéder
                                    et utiliser le présent Espace numérique.</p>
                                <p>6. L'utilisateur reconnaît avoir vérifié que la configuration informatique
                                    utilisée ne
                                    contient aucun virus et qu'elle est en parfait état de fonctionnement.</p>
                                <p>7. Le BDE Nice ne saurait être responsable :</p>
                                <ul>
                                    <li>de la qualité du service, le service étant proposé «&nbsp;en l'état&nbsp;» ;
                                    </li>
                                    <li>de la perturbation de l'utilisation du BDE Nice ;</li>
                                    <li>de l'impossibilité d'utiliser BDE Nice ;</li>
                                    <li>des atteintes à la sécurité informatique, pouvant causer des dommages aux
                                        matériels
                                        informatiques des utilisateurs et à leurs données ;</li>
                                    <li>de l'atteinte aux droits des utilisateurs de manière générale.</li>
                                </ul>
                                <p>8. Le BDE Nice met tout en œuvre pour offrir aux utilisateurs des informations ou
                                    des outils
                                    disponibles et vérifiés, mais ne saurait être tenue pour responsable des
                                    erreurs, d'une
                                    absence de disponibilité des fonctionnalités ou de la présence de virus sur
                                    ATRIUM.</p>

                                <p>9. Les informations fournies par le BDE Nice le sont à titre indicatif et ne
                                    sauraient
                                    dispenser l'utilisateur d'une analyse complémentaire et personnalisée.</p>

                                <p>10. Le BDE Nice ne saurait garantir l'exactitude, la complétude, l'actualité des
                                    informations
                                    diffusées sur&nbsp; BDE Nice.</p>

                                <p>11.Les renseignements qui apparaissent sur BDE Nice sont fournis à titre de
                                    renseignements
                                    généraux.</p>

                                <p>12. Le BDE Nice fait tout son possible pour veiller à l'exactitude et à la
                                    véracité des
                                    renseignements contenus sur BDE Nice et ne peut aucunement être tenue
                                    responsable de tout
                                    préjudice pouvant être causé par l'utilisation de la présente plateforme.</p>

                                <p>13. Le BDE Nice fait appel à des sources fiables, afin que les renseignements
                                    accessibles sur
                                    BDE Nice soient exacts et régulièrement tenus à jour.</p>

                                <p>14. Le BDE Nice se réserve le droit de supprimer, changer ou modifier la présente
                                    plateforme
                                    en tout temps et sans préavis.</p>

                                <p>15. Le BDE Nice ne peut être tenue responsable d'aucun préjudice, notamment de
                                    préjudices
                                    résultant de la transmission de documents sur Internet.</p>

                                <p>16. Le BDE Nice se réserve le droit de réviser, supprimer, modifier, valider ou
                                    changer,
                                    intégralement ou en partie, tout contenu envoyé à BDE Nice ou affiché sur
                                    celui-ci.</p>

                                <p>17. En conséquence, l'utilisateur reconnaît utiliser ces informations sous sa
                                    responsabilité
                                    exclusive.</p>

                                <h4>&nbsp;</h4>

                                <h4>4.Hyperliens</h4>

                                <p>18. Les liens hypertextes mis en place dans le cadre du BDE Nice en direction
                                    d'autres
                                    ressources présentes sur le réseau Internet, et notamment vers ses partenaires,
                                    ont fait
                                    l'objet d'une autorisation préalable, écrite et expresse.</p>

                                <p>19. Le BDE Nice ne saurait être responsable de l'accès par les utilisateurs par
                                    les liens
                                    hypertextes mis en place dans le cadre de l'ENE BDE Nice en direction d'autres
                                    ressources
                                    présentes sur le réseau.</p>

                                <p>20. Le BDE Nice décline toute responsabilité quant au contenu des informations
                                    fournies sur
                                    ces ressources présentes sur le réseau au titre de l'activation des liens
                                    hypertextes.</p>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade bd-example-modal2-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div id="modalPadding" class="modal-content">

                                <h4> Phase 1 - Message succinct d'information </h4>
                                <p>La mention suivante doit idéalement apparaître de manière aussi visible que
                                    possible. Il est recommandé d'utiliser les techniques indiquées dans le premier
                                    modèle ci-dessus (bandeau notamment), mais nous pensons qu'il est légal
                                    d'utiliser d'autres procédés moins contraignants, contrairement à ce qu'affirme
                                    la CNIL. Attention, ne pas suivre les recommandations de la CNIL présente des
                                    risques : nous conseillons donc de suivre les recommandations de la CNIL, dans
                                    toute la mesure possible, alors même que nous pensons que ces recommandations
                                    excèdent les obligations légales. Pour en savoir plus, notamment sur le
                                    raisonnement qui sous-tend notre position, lire : Cookies et traceurs :
                                    obligations juridiques des éditeurs.
                                </p>
                                *****
                                <p>
                                    En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de
                                    traceurs (cookies) afin de vous fournir les services que vous demandez
                                    expressément.
                                </p>
                                <p>
                                    Pour en savoir plus et paramétrer les traceurs, cliquez sur ce lien ou lisez
                                    attentivement cette page.
                                </p>
                                *****

                                <h4> 2 - Informations détaillées et possibilités de paramétrage des traceurs </h4>
                                <p>
                                    Les mentions suivantes figurent en principe sur une page dédiée aux traceurs.
                                </p>
                                *****
                                <p>
                                    Le site que vous visitez utilise des traceurs (cookies). Ainsi, le site est
                                    susceptible d'accéder à des informations déjà stockées dans votre équipement
                                    terminal de communications électroniques et d'y inscrire des informations.
                                </p>
                                Le site utilise exclusivement des traceurs dits "strictement nécessaires", qui ne
                                nécessitent pas votre consentement préalable.
                                <p>
                                    Nous utilisons ces traceurs pour permettre et faciliter la navigation sur le
                                    site notamment en mémorisant vos préférences de navigation définis au cours de
                                    votre session.
                                </p>
                                <p>
                                    Ces traceurs ne peuvent pas, techniquement, être désactivés depuis le site. Vous
                                    pouvez néanmoins vous opposer à l'utilisation de ces traceurs, exclusivement en
                                    paramétrant votre navigateur. Ce paramétrage dépend du navigateur que vous
                                    utilisez, mais il est en général simple à réaliser : en principe, vous pouvez
                                    soit activer une fonction de navigation privée soit uniquement interdire ou
                                    restreindre les traceurs (cookies). Attention, il se peut que des traceurs aient
                                    été enregistrés sur votre périphérique avant le paramétrage de votre navigateur
                                    : dans ce cas, effacez votre historique de navigation, toujours en utilisant le
                                    paramétrage de votre navigateur.
                                </p>

                                <p>
                                    L'utilisation des traceurs est régie par l'article 32 II de la loi n° 78-17 du 6
                                    janvier 1978, transposant l'article 5.3 de la directive 2002/58/CE du parlement
                                    européen et du conseil du 12 juillet 2002 modifiée par la directive 2009/136/CE.
                                </p>
                                <p>
                                    Pour en savoir plus sur les cookies et traceurs, nous vous invitons à consulter
                                    le site de la CNIL : www.cnil.fr.
                                </p>
                                *****



                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade bd-example-modal3-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div id="modalPadding" class="modal-content">

                        <h1>Notice légale - BDE Nice</h1>

                        <h1>Conditions générales de vente
                        </h1>
                        <div class="shop_policy_box">
                            <p>En vigueur au 19/11/2019</p>

                            <h2>ARTICLE 1 - Champ d'application</h2>

                            <p>Les présentes conditions générales de vente (dites « CGV ») s'appliquent, sans
                                restriction ni réserve à l'ensemble des ventes conclues par le vendeur auprès
                                d'acheteurs non professionnels (« les clients ou le client »), désirant acquérir les
                                produits proposés à la vente (« les produits ») par le vendeur sur le site
                                https://BDENice.fr/ . Les produits proposés à la vente sur le site sont les suivants
                                :</p>

                            <p>vêtements accessoires</p>
                            <p>Les caractéristiques principales des produits et notamment les spécifications,
                                illustrations et indications de dimensions ou de capacité des produits, sont
                                présentées sur le site https://BDENice.fr/ ce dont le client est tenu de prendre
                                connaissance avant de commander.</p>

                            <p>Le choix et l'achat d'un produit sont de la seule responsabilité du client.</p>

                            <p>Les offres de produits s'entendent dans la limite des stocks disponibles, tels que
                                précisés lors de la passation de la commande.</p>

                            <p>Ces CGV sont accessibles à tout moment sur le site https://BDENice.fr/ et prévaudront
                                sur tout autre document.</p>

                            <p>Le client déclare avoir pris connaissance des présentes CGV et les avoir acceptées en
                                cochant la case prévue à cet effet avant la mise en œuvre de la procédure de
                                commande en ligne du site https://BDENice.fr/ .</p>

                            <p>Sauf preuve contraire, les données enregistrées dans le système informatique du
                                vendeur constituent la preuve de l'ensemble des transactions conclues avec le
                                client.</p>

                            <h3>Les coordonnées du vendeur sont les suivantes :</h3>
                            <p>BDE CESI Nice<br>
                                Buropolis 1, 1240 Route des Dolines, 06560 Sophia Antipolis<br>
                                mail : BDENiceboutique@gmail.com<br>
                                téléphone : ¤<br>
                                Numéro de TVA Intracommunautaire FR00000000000<br>
                                Les produits présentés sur le site https://BDENice.fr/ sont proposés à la
                                vente&nbsp;dans la&nbsp; quasi-totalité des pays.<br>
                                En cas de commande vers un pays autre où la France métropolitaine, le client est
                                l'importateur du ou des produits concernés.</p>

                            <p>Pour tous les produits expédiés hors Union européenne et DOM-TOM, le prix sera
                                calculé hors taxes automatiquement sur la facture.</p>

                            <p>Des droits de douane ou autres taxes locales ou droits d'importation ou taxes d'état
                                sont susceptibles d'être exigibles. Ils seront à la charge et relèvent de la seule
                                responsabilité du client.</p>


                            <h2>ARTICLE 2 - Prix</h2>

                            <p>Les produits sont fournis aux tarifs en vigueur figurant sur le site
                                https://BDENice.fr/ , lors de l'enregistrement de la commande par le vendeur.</p>

                            <p>Les prix sont exprimés en Euros, HT et TTC.</p>

                            <p>Les tarifs tiennent compte d'éventuelles réductions qui seraient consenties par le
                                vendeur sur le site https://BDENice.fr/ .</p>

                            <p>Ces tarifs sont fermes et non révisables pendant leur période de validité mais le
                                vendeur se réserve le droit, hors période de validité, d’en modifier les prix à tout
                                moment.</p>

                            <p>Les prix ne comprennent pas les frais de traitement, d'expédition, de transport et de
                                livraison, qui sont facturés en supplément, dans les conditions indiquées sur le
                                site et calculés préalablement à la passation de la commande.</p>

                            <p>Le paiement demandé au client correspond au montant total de l'achat, y compris ces
                                frais.</p>

                            <p>Une facture est établie par le vendeur et remise au client lors de la livraison des
                                produits commandés.</p>


                            <h2>ARTICLE 3 – Commandes</h2>

                            <p>Il appartient au client de sélectionner sur le site https://BDENice.fr/ les produits
                                qu'il désire commander, selon les modalités suivantes :</p>

                            <p>Le client choisit un produit qu'il met dans son panier, produit qu'il pourra
                                supprimer ou modifier avant de valider sa commande et d'accepter les présentes
                                conditions générales de vente. Il rentrera ensuite ses coordonnées postales. Après
                                validation des informations, il accédera à un portail de paiement sécurisé. Une fois
                                le paiement finalisé, la commande sera considérée comme définitive.</p>

                            <p>Les offres de produits sont valables tant qu'elles sont visibles sur le site, dans la
                                limite des stocks disponibles.</p>

                            <p>La vente ne sera considérée comme valide qu’après paiement intégral du prix. Il
                                appartient au client de vérifier l'exactitude de la commande et de signaler
                                immédiatement toute erreur.</p>

                            <p>Toute commande passée sur le site https://BDENice.fr/ constitue la formation d'un
                                contrat conclu à distance entre le client et le vendeur.</p>

                            <p>Le vendeur se réserve le droit d'annuler ou de refuser toute commande d'un client
                                avec lequel il existerait un litige relatif au paiement d'une commande antérieure.
                            </p>

                            <p>Le client pourra suivre l'évolution de sa commande sur le site.</p>


                            <h2>ARTICLE 4 - Conditions de paiement</h2>

                            <p>Le prix est payé par voie de paiement sécurisé, selon les modalités suivantes :</p>

                            <p>paiement par carte bancaire</p>
                            <p>Le prix est payable comptant par le client, en totalité au jour de la pasation de la
                                commande.</p>

                            <p>Les données de paiement sont échangées en mode crypté grâce au protocole défini par
                                le prestataire de paiement agréé intervenant pour les transactions bancaires
                                réalisée sur le site https://BDENice.fr/ .</p>

                            <p>Les paiements effectués par le client ne seront considérés comme définitifs qu'après
                                encaissement effectif par le vendeur des sommes dues.</p>

                            <p>Le vendeur ne sera pas tenu de procéder à la délivrance des Produits commandés par le
                                client si celui-ci ne lui en paye pas le prix en totalité dans les conditions
                                ci-dessus indiquées.</p>


                            <h2>ARTICLE 5 - Livraisons</h2>

                            <p>Les Produits commandés par le client seront livrés en France métropolitaine ou dans
                                la plupart des autres pays du monde.</p>

                            <p>Pour les livraisons en France métropolitaine, les livraisons interviennent dans un
                                délai de 3 à 7 jours ouvrés à l'adresse indiquée par le client lors de sa commande
                                sur le site.</p>

                            <p>La livraison est constituée par le transfert au client de la possession physique ou
                                du contrôle du Produit. Sauf cas particulier ou indisponibilité d'un ou plusieurs
                                Produits, les Produits commandés seront livrés en une seule fois.</p>

                            <p>Le vendeur s'engage à faire ses meilleurs efforts pour livrer les produits commandés
                                par le client dans les délais ci-dessus précisés. Toutefois, ces délais sont
                                communiqués à titre indicatif.</p>

                            <p>Si les Produits commandés n'ont pas été livrés dans un délai de 14 jours ouvrés après
                                la date indicative de livraison, pour toute autre cause que la force majeure ou le
                                fait du client, la vente pourra être résolue à la demande écrite du client dans les
                                conditions prévues auh3 articles L 216-2, L 216-3 et L241-4 du Code de la
                                consommation. Les sommes versées par le client lui seront alors restituées au plus
                                tard dans les quatorze jours qui suivent la date de dénonciation du contrat, à
                                l'exclusion de toute indemnisation ou retenue.</p>

                            <p>En cas de demande particulière du client concernant les conditions d'emballage ou de
                                transport des produits commandés, dûment acceptées par écrit par le vendeur, les
                                coûts y liés feront l'objet d'une facturation spécifique complémentaire, sur devis
                                préalablement accepté par écrit par le client.</p>

                            <p>Le client est tenu de vérifier l'état des produits livrés. Il dispose d'un délai de
                                30 jours à compter de la livraison pour formuler des réclamations par mail ,
                                accompagnées de tous les justificatifs y afférents (photos notamment). Passé ce
                                délai et à défaut d'avoir respecté ces formalités, les Produits seront réputés
                                conformes et exempts de tout vice apparent et aucune réclamation ne pourra être
                                valablement acceptée par le vendeur.</p>

                            <p>Le vendeur remboursera ou remplacera dans les plus brefs délais et à ses frais, les
                                Produits livrés dont les défauts de conformité ou les vices apparents ou cachés
                                auront été dûment prouvés par le client, dans les conditions prévues a&nbsp;
                                l'article L 217-4 et suivants du Code de la consommation et celles prévues aux
                                présentes CGV.</p>

                            <p>Le transfert des risques de perte et de détérioration s'y rapportant, ne sera réalisé
                                qu'au moment où le client prendra physiquement possession des Produits. Les Produits
                                voyagent donc aux risques et périls du vendeur sauf lorsque le client aura lui-même
                                choisi le transporteur. A ce titre, les risques sont transférés au moment de la
                                remise du bien au transporteur.</p>


                            <h2>ARTICLE 6 - Transfert de propriété</h2>

                            <p>Le transfert de propriété des Produits du vendeur au client ne sera réalisé qu'après
                                complet paiement du prix par ce dernier, et ce quelle que soit la date de livraison
                                desdits Produits.</p>


                            <h2>ARTICLE 7 - Droit de rétractation</h2>

                            <p>Selon les modalités de l’article L221-18 du Code de la Consommation «Le consommateur
                                dispose d'un délai de quatorze jours pour exercer son droit de rétractation d'un
                                contrat conclu à distance, à la suite d'un démarchage téléphonique ou hors
                                établissement, sans avoir à motiver sa décision ni à supporter d'autres coûts que
                                ceux prévus auh3 articles L. 221-23 à L. 221-25.</p>

                            <p>Le délai mentionné au premier alinéa court à compter du jour :</p>
                            <p>1° De la conclusion du contrat, pour les contrats de prestation de services et ceux
                                mentionnés à l'article L. 221-4 ;</p>

                            <p>2° De la réception du bien par le consommateur ou un tiers, autre que le
                                transporteur, désigné par lui, pour les contrats de vente de biens. Pour les
                                contrats conclus hors établissement, le consommateur peut exercer son droit de
                                rétractation à compter de la conclusion du contrat.</p>

                            <p>Dans le cas d'une commande portant sur plusieurs biens livrés séparément ou dans le
                                cas d'une commande d'un bien composé de lots ou de pièces multiples dont la
                                livraison est échelonnée sur une période définie, le délai court à compter de la
                                réception du dernier bien ou lot ou de la dernière pièce.</p>

                            <p>Pour les contrats prévoyant la livraison régulière de biens pendant une période
                                définie, le délai court à compter de la réception du premier bien. »</p>

                            <p>Le droit de rétractation peut être exercé en ligne, à l'aide du formulaire de
                                rétractation ci-joint et également disponible sur le site ou de toute autre
                                déclaration, dénuée d'ambiguïté, exprimant la volonté de se rétracter et notamment
                                par courrier postal adressé au vendeur aux coordonnées postales ou mail indiquées à
                                l’ARTICLE 1 des CGV.</p>

                            <p>Les retours sont à effectuer dans leur état d'origine et complets (emballage,
                                accessoires, notice...) permettant leur recommercialisation à l'état neuf,
                                accompagnés de la facture d'achat.</p>
                            <p>Les Produits endommagés, salis ou incomplets ne sont pas repris.</p>

                            <p>Les frais de retour restant à la charge du client.</p>

                            <p>L'échange (sous réserve de disponibilité) ou le remboursement sera effectué dans un
                                délai de 14 jours à compter de la réception, par le vendeur, des Produits retournés
                                par le client dans les conditions prévues au présenh3 article.</p>


                            <h2>ARTICLE 8 - Responsabilité du vendeur - Garanties</h2>

                            <h3>Les Produits fournis par le vendeur bénéficient :</h3>

                            <p>de la garantie légale de conformité, pour les Produits défectueux, abîmés ou
                                endommagés ou ne correspondant pas à la commande,</p>
                            <p>de la garantie légale contre les vices cachés provenant d'un défaut de matière, de
                                conception ou de fabrication affectant les produits livrés et les rendant impropres
                                à l'utilisation,</p>
                            <p>Dispositions relatives aux garanties légales</p>

                            <h3>Article L217-4 du Code de la consommation</h3>

                            <p>« Le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de
                                conformité existant lors de la délivrance. Il répond également des défauts de
                                conformité résultant de l'emballage, des instructions de montage ou de
                                l'installation lorsque celle-ci a été mise à sa charge par le contrat ou a été
                                réalisée sous sa responsabilité. »</p>

                            <h3>Article L217-5 du Code de la consommation</h3>

                            <p>« Le bien est conforme au contrat :</p>

                            <p>1° S'il est propre à l'usage habituellement attendu d'un bien semblable et, le cas
                                échéant :</p>

                            <p>- s'il correspond à la description donnée par le vendeur et possède les qualités que
                                celui-ci a présentées à l'acheteur sous forme d'échantillon ou de modèle ;</p>

                            <p>- s'il présente les qualités qu'un acheteur peut légitimement attendre eu égard aux
                                déclarations publiques faites par le vendeur, par le producteur ou par son
                                représentant, notamment dans la publicité ou l'étiquetage ;</p>

                            <p>2° Ou s'il présente les caractéristiques définies d'un commun accord par les parties
                                ou est propre à tout usage spécial recherché par l'acheteur, porté à la connaissance
                                du vendeur et que ce dernier a accepté. »</p>

                            <h3>Article L217-12 du Code de la consommation</h3>

                            <p>« L'action résultant du défaut de conformité se prescrit par deux ans à compter de la
                                délivrance du bien. »</p>

                            <h3>Article 1641 du Code civil.</h3>

                            <p>« Le vendeur est tenu de la garantie à raison des défauts cachés de la chose vendue
                                qui la rendent impropre à l'usage auquel on la destine, ou qui diminuent tellement
                                cet usage, que l'acheteur ne l'aurait pas acquise, ou n'en aurait donné qu'un
                                moindre prix, s'il les avait connus. »</p>

                            <h3>Article 1648 alinéa 1er du Code civil</h3>

                            <p>« L'action résultant des vices rédhibitoires doit être intentée par l'acquéreur dans
                                un délai de deux ans à compter de la découverte du vice. »</p>

                            <h3>Article L217-16 du Code de la consommation.</h3>

                            <p>« Lorsque l'acheteur demande au vendeur, pendant le cours de la garantie commerciale
                                qui lui a été consentie lors de l'acquisition ou de la réparation d'un bien meuble,
                                une remise en état couverte par la garantie, toute période d'immobilisation d'au
                                moins sept jours vient s'ajouter à la durée de la garantie qui restait à courir.
                                Cette période court à compter de la demande d'intervention de l'acheteur ou de la
                                mise à disposition pour réparation du bien en cause, si cette mise à disposition est
                                postérieure à la demande d'intervention. »</p>

                            <p>Afin de faire valoir ses droits, le client devra informer le vendeur, par écrit (mail
                                ou courrier), de la non-conformité des Produits ou de l'existence des vices cachés à
                                compter de leur découverte.</p>

                            <p>Le vendeur remboursera, remplacera ou fera réparer les Produits ou pièces sous
                                garantie jugés non conformes ou défectueux.</p>

                            <p>Les frais d'envoi seront remboursés sur la base du tarif facturé et les frais de
                                retour seront remboursés sur présentation des justificatifs.</p>

                            <p>Les remboursements, remplacements ou réparations des Produits jugés non conformes ou
                                défectueux seront effectués dans les meilleurs délais et au plus tard dans les 10
                                jours jours suivant la constatation par le vendeur du défaut de conformité ou du
                                vice caché. Ce remboursement pourra être fait par virement ou chèque bancaire.
                                <br>La responsabilité du vendeur ne saurait être engagée dans les cas suivants :</p>

                            <p>non respect de la législation du pays dans lequel les produits sont livrés, qu'il
                                appartient au client de vérifier,</p>

                            <p>en cas de mauvaise utilisation, d'utilisation à des fins professionnelles, négligence
                                ou défaut d'entretien de la part du client, comme en cas d'usure normale du Produit,
                                d'accident ou de force majeure.</p>

                            <p>Les photographies et graphismes présentés sur le site ne sont pas contractuels et ne
                                sauraient engager la responsabilité du vendeur.</p>

                            <p>La garantie du vendeur est, en tout état de cause, limitée au remplacement ou au
                                remboursement des Produits non conformes ou affectés d'un vice.</p>


                            <h2>ARTICLE 9 - Données personnelles</h2>

                            <p>Le client est informé que la collecte de ses données à caractère personnel est
                                nécessaire à la vente des Produits par le vendeur ainsi qu'à leur transmission à des
                                tiers à des fins de livraison des Produits. Ces données à caractère personnel sont
                                récoltées uniquement pour l’exécution du contrat de vente.</p>

                            <h4>9.1 Collecte des données à caractère personnel</h4>

                            <p>Les données à caractère personnel qui sont collectées sur le site https://BDENice.fr/
                                sont les suivantes : <br>Commande de Produits :</p>

                            <p>Lors de la commande de Produits par le client :</p>

                            <p>Nom, prénom, adresse postale, adresse e-mail, téléphone si renseigné . <br>Paiement
                            </p>

                            <p>Dans le cadre du paiement des Produits proposés sur le site https://BDENice.fr/ ,
                                celui-ci enregistre des données financières relatives au compte bancaire ou à la
                                carte de crédit du client / utilisateur.</p>

                            <h4>9.2 Destinataires des données à caractère personnel</h4>

                            <p>Les données à caractère personnel sont réservées à l’usage unique du vendeur et de
                                ses salariés.</p>

                            <h4>9.3 Responsable de traitement</h4>

                            <p>Le responsable de traitement des données est le vendeur, au sens de la loi
                                Informatique et libertés et à compter du 25 mai 2018 du Règlement 2016/679 sur la
                                protection des données à caractère personnel.</p>

                            <h4>9.4 limitation du traitement</h4>

                            <p>Sauf si le client exprime son accord exprès, ses données à caractère personnelles ne
                                sont pas utilisées à des fins publicitaires ou marketing.</p>

                            <h4>9.5 Durée de conservation des données</h4>

                            <p>Le vendeur conservera les données ainsi recueillies pendant un délai de 5 ans,
                                couvrant le temps de la prescription de la responsabilité civile contractuelle
                                applicable.</p>

                            <h4>9.6 Sécurité et confidentialité</h4>

                            <p>Le vendeur met en œuvre des mesures organisationnelles, techniques, logicielles et
                                physiques en matière de sécurité du numérique pour protéger les données personnelles
                                contre les altérations, destructions et accès non autorisés. Toutefois il est à
                                signaler qu’Internet n’est pas un environnement complètement sécurisé et le vendeur
                                ne peut garantir la sécurité de la transmission ou du stockage des informations sur
                                Internet.</p>

                            <h4>9.7 Mise en œuvre des droits des clients et utilisateurs</h4>

                            <p>En application de la règlementation applicable aux données à caractère personnel, les
                                clients et utilisateurs du site https://BDENice.fr/ disposent des droits suivants :
                            </p>

                            <p>Ils peuvent mettre à jour ou supprimer les données qui les concernent de la manière
                                suivante :</p>

                            <p>Envoi d'un mail à <a href="BDENiceboutique@gmail.com">BDENiceboutique@gmail.com</a> .
                            </p>

                            <p>Ils peuvent supprimer leur compte en écrivant à l’adresse électronique indiqué à
                                l’article 9.3 « Responsable de traitement »</p>

                            <p>Ils peuvent exercer leur droit d’accès pour connaître les données personnelles les
                                concernant en écrivant à l’adresse indiqué à l’article 9.3 « Responsable de
                                traitement »</p>

                            <p>Si les données à caractère personnel détenues par le vendeur sont inexactes, ils
                                peuvent demander la mise à jour des informations des informations en écrivant à
                                l’adresse indiqué à l’article 9.3 « Responsable de traitement »</p>

                            <p>Ils peuvent demander la suppression de leurs données à caractère personnel,
                                conformément aux lois applicables en matière de protection des données en écrivant à
                                l’adresse indiqué à l’article 9.3 « Responsable de traitement »</p>

                            <p>Ils peuvent également solliciter la portabilité des données détenues par le vendeur
                                vers un autre prestataire</p>

                            <p>Enfin, ils peuvent s’opposer au traitement de leurs données par le vendeur</p>

                            <p>Ces droits, dès lors qu’ils ne s’opposent pas à la finalité du traitement, peuvent
                                être exercé en adressant une demande par courrier ou par E-mail au Responsable de
                                traitement dont les coordonnées sont indiquées ci-dessus.</p>

                            <p>Le responsable de traitement doit apporter une réponse dans un délai maximum d’un
                                mois.</p>

                            <p>En cas de refus de faire droit à la demande du client, celui-ci doit être motivé.</p>

                            <p>Le client est informé qu’en cas de refus, il peut introduire une réclamation auprès
                                de la CNIL (3 place de Fontenoy, 75007 PARIS) ou saisir une autorité judiciaire.</p>

                            <p>Le client peut être invité à cocher une case au titre de laquelle il accepte de
                                recevoir des mails à caractère informatifs et publicitaires de la part du vendeur.
                                Il aura toujours la possibilité de retirer son accord à tout moment en contactant le
                                vendeur (coordonnées ci-dessus) ou en suivant le lien de désabonnement.</p>


                            <h2>ARTICLE 10 - Propriété intellectuelle</h2>

                            <p>Le contenu du site https://BDENice.fr/ est la propriété du vendeur et de ses
                                partenaires et est protégé par les lois françaises et internationales relatives à la
                                propriété intellectuelle. <br>Toute reproduction totale ou partielle de ce contenu
                                est strictement interdite et est susceptible de constituer un délit de contrefaçon.
                            </p>


                            <h2>ARTICLE 11 - Droit applicable - Langue</h2>

                            <p>Les présentes CGV et les opérations qui en découlent sont régies et soumises au droit
                                français.</p>

                            <p>Les présentes CGV sont rédigées en langue française. Dans le cas où elles seraient
                                traduites en une ou plusieurs langues étrangères, seul le texte français ferait foi
                                en cas de litige.</p>


                            <h2>ARTICLE 12 - Litiges</h2>

                            <p>Pour toute réclamation merci de contacter le service clientèle à l’adresse postale ou
                                mail du vendeur indiquée à L’ARTICLE 1 des présentes CGV.</p>

                            <p>Le client est informé qu'il peut en tout état de cause recourir à une médiation
                                conventionnelle, auprès des instances de médiation sectorielles existantes ou à tout
                                mode alternatif de règlement des différends (conciliation, par exemple) en cas de
                                contestation.</p>

                            <p>Le client est également informé qu’il peut, également recourir à la plateforme de
                                Règlement en Ligne des Litige (RLL)
                                :https://webgate.ec.europa.eu/odr/main/index.cfm?event=main.home.show</p>

                            <p>Tous les litiges auxquels les opérations d'achat et de vente conclues en application
                                des présentes CGV et qui n’auraient pas fait l’objet d’un règlement amiable entre le
                                vendeur ou par médiation, seront soumis aux tribunaux compétents dans les conditions
                                de droit commun.</p><br>

                            <h4>ANNEXE I <br>Formulaire de rétractation</h4>

                            <p>Date ______________________</p>

                            <p>Le présent formulaire doit être complété et renvoyé uniquement si le client souhaite
                                se rétracter de la commande passée sur https://BDENice.fr/ sauf exclusions ou
                                limites à l'exercice du droit de rétractation suivant les Conditions Générales de
                                Vente applicables. <br>
                                A l'attention de BDE CESI Nice <br>
                                Buropolis 1, 1240 Route des Dolines, 06560 Sophia Antipolis <br>
                                Je notifie par la présente la rétractation du contrat portant sur le bien ci-dessous
                                :</p>

                            <p>- Commande du (indiquer la date)</p>
                            <p>- Numéro de la commande : ...........................................................
                            </p>
                            <p>- Nom du client :
                                ...........................................................................</p>
                            <p>- Adresse du client :
                                .......................................................................</p>
                            <p>Signature du client (uniquement en cas de notification du présent formulaire sur
                                papier)</p>
                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer </button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        </div>
        <div class="row mt-5">
            <div class="col copyright">
                <p id="aligned-copyright"><small class="text-white-50">Copyrighted © 2019 BDE CESI Nice</small></p>
            </div>
        </div>
        </div>
        </div>

    </footer>
    <!--- Footer end--->

    <div class="alert alert-dismissible text-center cookiealert" role="alert">
        <div class="cookiealert-container">
            <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website.
            <a href="http://cookiesandyou.com/" target="_blank">Learn more</a>

            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                I agree
            </button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
    @show



</body>

</html>