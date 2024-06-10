<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
        @media only screen and (max-width: 600px) {
            /* Styles spécifiques aux écrans dont la largeur est inférieure à 600px */
            /* Vous pouvez ajouter vos styles ici */
        }
</style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        nav {
            text-align: center;
            margin-left: 20px;
            padding-top: 5px;
        }
        .nav-button {
            color: white !important;
            background-color: #4d6886;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 5px;
            text-decoration: none; /* This removes the underline */
            transition: background-color 0.3s ease, text-decoration 0.3s ease;
        }
        .nav-button:hover {
            background-color: #f46e27;
            color: white;
            text-decoration: none; /* Ensure no underline on hover */
        }
    </style>
     
</head>
<body style="background-image: url('{{ asset('images/fond.gif') }}');">
<div id="container" >
    <div id="header">
        <div class="content">
                                        

        <!-- Navbar for Authentication and Home -->
    <nav style="text-align:center; margin-left:20px; padding-top:5px; background-color: #343a40;">
        <a href="{{ route('home') }}" style="color:white; margin-right: 10px;">Accueil</a>
        @if(Auth::check())
            <a style="color:white; margin-right: 10px;" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <a style="color:white; margin-right: 10px;" href="{{ route('register') }}">S'enregistrer</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a style="color:white; margin-right: 10px;" href="{{ route('login') }}">Connexion</a>
        @endif
    </nav>

    <!-- Logo Image Section -->
    <div id="DeltaSiteLogo" style="text-align:center; padding: 20px;">
        <img style="border-radius: 20px; width: 500px; height: 100px;" src="{{ asset('images/logoaccueil.jpg') }}" alt="الصفحة الرئيسية" />
    </div>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">الوزارة</a>
                        <div class="dropdown-menu dropdown-menu-dark menu-content" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">هيكلة القطاع</a>
                            <a class="dropdown-item" href="BG-ChakibBenmoussa.html">السيد الوزير</a>
                            <a class="dropdown-item" href="organiramme.html">هيكلة الإدارة المركزية</a>
                            <a class="dropdown-item" href="intro_attribution.html">الاختصاصات</a>
                            <a class="dropdown-item" href="organisation.html">اختصاصات المصالح المركزية</a>
                            <a class="dropdown-item" href="aref_loi0700.html">اختصاصات المصالح الخارجية</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">التوجهات الاستراتيجية الكبرى</a>
                        <div class="dropdown-menu dropdown-menu-dark menu-content" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="orientations.html">توجهات</a>
                            <a class="dropdown-item" href="orientationsroyales.html">خطب ملكية سامية</a>
                            <a class="dropdown-item" href="charteEF.html">الميثاق الوطني للتربية والتكوين</a>
                            <a class="dropdown-item" href="Prog-gouv2126.html">البرنامج الحكومي</a>
                            <a class="dropdown-item" href="prog-sect.html">البرنامج القطاعي</a>
                            <a class="dropdown-item" href="Vision_strateg_CSEF16004.pdf">الرؤية الاستراتيجية للمجلس الأعلى</a>
                            <a class="dropdown-item" href="FRoute20222026ar.pdf">خارطة طريق 2022-2026</a>
                            <a class="dropdown-item" href="loicadre1751.html">القانون الإطار رقم 51.17</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false">التربية الوطنية</a>
                        <div class="dropdown-menu dropdown-menu-dark menu-content" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="EnsPresco.aspx">التعليم الأولي</a>
                            <a class="dropdown-item" href="ens-preprim.html">التعليم الابتدائي</a>
                            <a class="dropdown-item" href="Projet-Curriculum-LagueAmazighe2021.html">مشروع المنهاج الجديد للغة الأمازيغية بالابتدائي-2021</a>
                            <a class="dropdown-item" href="prog-repartition_secollege.html">التعليم الثانوي الإعدادي</a>
                            <a class="dropdown-item" href="prog-ensqualif.html">التعليم الثانوي التأهيلي</a>
                            <a class="dropdown-item" href="bacpro_parpro.html">الباكلوريا المهنية والمسار المهني</a>
                            <a class="dropdown-item" href="ensorig_PG.html">الحقيبة التربوية للتعليم الأصيل</a>
                            <a class="dropdown-item" href="crclm-eduislam-enspubpriv.html">المنهاج المراجع للتربية الإسلامية</a>
                            <a class="dropdown-item" href="bts.html">شهادة التقني العالي</a>
                            <a class="dropdown-item" href="CPGE.html">الأقسام التحضيرية للمدارس العليا</a>
                            <a class="dropdown-item" href="Ensco-prive.html">التعليم المدرسي الخصوصي</a>
                            <a class="dropdown-item" href="ENF.html">التربية غير النظامية</a>
                            <a class="dropdown-item" href="http://www.taalimtice.ma/">برنامج جيني</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false">الرياضة</a>
                        <div class="dropdown-menu dropdown-menu-dark menu-content" aria-labelledby="navbarDropdownMenuLink4">
                            <a class="dropdown-item" href="#/Fr/Pages/sportsco.aspx" target="_blank">الرياضة المدرسية</a>
                            <a class="dropdown-item" href="https://www.frmss-dpss.com/الاستقبال/">الجامعة الملكية المغربية للرياضة المدرسية</a>
                            <a class="dropdown-item" href="Prog-gouv-sport2126.html">الرياضة في البرنامج الحكومي 2021-2026</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    var menuLinks = document.querySelectorAll('.nav-item.dropdown .nav-link');

    menuLinks.forEach(function (menuLink) {
        menuLink.addEventListener('click', function (event) {
            event.preventDefault();
            var menuContent = this.nextElementSibling;
            toggleMenu(menuContent); // Basculer l'affichage de la div de contenu associée
        });
    });

    function toggleMenu(menuContent) {
        var isShowing = menuContent.classList.contains('show');
        closeAllMenus(); // Fermer toutes les autres divs de contenu
        if (!isShowing) {
            menuContent.classList.add('show'); // Ouvrir la div de contenu si elle n'est pas déjà affichée
        }
    }

    function closeAllMenus() {
        var allMenuContents = document.querySelectorAll('.menu-content');
        allMenuContents.forEach(function (menuContent) {
            menuContent.classList.remove('show');
        });
    }

    document.addEventListener('click', function (event) {
        if (!event.target.matches('.nav-item.dropdown .nav-link')) {
            closeAllMenus(); // Fermer toutes les divs de contenu si le clic n'est pas sur un lien
        }
    });
});
</script>





        
                                            


     </div>
</div>











                                <div class="mainbloc popoverWrap" id="mainbloc">
                                   

                                    <style>
                                        .btn-primary {
                                          background-color: #4d6886; /* Couleur bleu foncé pour le fond des boutons sélectionnés */
                                          color: #ffffff; /* Couleur blanche pour le texte des boutons sélectionnés */
                                        }
                                        .btn-primary:hover {
                                          background-color: #ffffff; /* Couleur bleu foncé pour le fond des boutons sélectionnés */
                                          color: #4d6886; /* Couleur blanche pour le texte des boutons sélectionnés */
                                        }
                                      </style>




                                    
                                    <div class="row">
                                        <div class="col-md-4" style="margin-top:5px;"> <!-- 5/12 corresponds approximately to 40% -->
                                            
                                            <div class="container mt-3">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner" style="background-color: white;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                                        <div  class="carousel-item active">
                                                          <img style="width: 100%;border-top-left-radius: 15px;border-top-right-radius: 15px;" src="{{ asset('images/imag_college.jpg') }}"  alt="First slide">
                                                          <p style="margin-top: 10px;margin-left: 20px;font-size: smaller;"> <strong> Ecole primaire autonome <br>مدرسة ابتدائية مستقلة</strong> </p>
                                                        </div>
                                                        <div class="carousel-item">
                                                          <img style="width: 100%;border-top-left-radius: 15px;border-top-right-radius: 15px;" src="{{ asset('images/imag_preprim.jpg') }}" alt="Second slide">
                                                          <p style="margin-top: 10px;margin-left: 20px;font-size: smaller;"><strong>Délégation Provinciale  du MEN <br> النيابة الإقليمية لوزارة التربية الوطنية</strong>   </p>
                                                        </div>
                                                        <div class="carousel-item">
                                                          <img style="width: 100%;border-top-left-radius: 15px;border-top-right-radius: 15px;" src="{{ asset('images/imag_secqualif.jpg') }}" alt="Third slide">
                                                          <p style="margin-top: 10px;margin-left: 20px;font-size: smaller;"> <strong>Lycée collègial enseignement général <br> الثانوية الإعدادية للتعليم العام</strong>  </p>
                                                        </div>
                                                        <div class="carousel-item">
                                                          <img style="width: 100%;border-top-left-radius: 15px;border-top-right-radius: 15px;" src="{{ asset('images/imag_secqualif.jpg') }}" alt="fourth slide">
                                                          <p style="margin-top: 10px;margin-left: 20px;font-size: smaller;"><strong>Lycée qualifiant enseignement général <br> الثانوية الثأهيلية للتعليم العام</strong>  </p>
                                                        </div>
                                                        <div class="carousel-item">
                                                          <img style="width: 100%;border-top-left-radius: 15px;border-top-right-radius: 15px;" src="{{ asset('images/imag_secqualif.jpg') }}" alt="fifth slide">
                                                          <p style="margin-top: 10px;margin-left: 20px;font-size: smaller;"> <strong>Académie Régionale de l'Education <br> الأكاديمية الجهوية للتربية والتكوين</strong>  </p>
                                                        </div>
                                                        <div class="carousel-item">
                                                          <img style="width: 100%;border-top-left-radius: 15px;border-top-right-radius: 15px;" src="{{ asset('images/imag_secqualif.jpg') }}" alt="sixth slide">
                                                          <p style="margin-top: 10px;margin-left: 20px;font-size: smaller;"> <strong>Lycée qualifiant de référence <br> الثانوية الثأهيلية المرجعية</strong>  </p>
                                                        </div>
                                                        <div class="carousel-item">
                                                          <img style="width: 100%;border-top-left-radius: 15px;border-top-right-radius: 15px;" src="{{ asset('images/imag_secqualif.jpg') }}" alt="seventh slide">
                                                          <p style="margin-top: 10px;margin-left: 20px; font-size: smaller;"><strong>Centre Régional des Métiers de l'Education <br>المركز الجهوي لمهن التربية والتكوين</strong>   </p>
                                                        </div>
                                                      </div>
                                                     <div class="card text-center mb-3" style="border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
                                                                <div class="card-body">
                                                                  <h5 class="card-title" style="font-size: medium;"><strong>Localisation</strong> </h5><hr>
                                                                  <a target="_blank" href="https://www.google.com/maps/place/D%C3%A9l%C3%A9gation+du+Minist%C3%A8re+de+L'%C3%A9ducation+Nationale/@23.6996508,-15.9307916,17z/data=!4m6!3m5!1s0xc224831d96aaaab:0xe57fc6f0394ca6ab!8m2!3d23.6996508!4d-15.9307916!16s%2Fg%2F11kj8_zs5c?entry=ttu" class="card-text"><img src="{{ asset('images/icone-geolocal.png') }}"  alt="" style="width: 50px;"></a><hr>
                                                                  <a target="_blank" href="https://www.google.com/maps/place/D%C3%A9l%C3%A9gation+du+Minist%C3%A8re+de+L'%C3%A9ducation+Nationale/@23.6996508,-15.9307916,17z/data=!4m6!3m5!1s0xc224831d96aaaab:0xe57fc6f0394ca6ab!8m2!3d23.6996508!4d-15.9307916!16s%2Fg%2F11kj8_zs5c?entry=ttu" class="btn btn-primary" style="font-size: smaller;border-radius: 20px;">Go somewhere</a>
                                                                </div>
                                                                <div class="card-body">
                                                                  <h5 class="card-title" style="font-size: medium;"><strong>établissement</strong></h5><hr>
                                                                  <a href="{{ route('academies') }}"  class="card-text"><img src="{{ asset('images/edifice-icone.gif') }}"  alt="" style="width: 50px;"></a><hr>
                                                                  <a href="{{ route('academies') }}" class="btn btn-primary" style="font-size: smaller;border-radius: 20px;">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                  </div>
                                                  <!-- Script pour activer le carrousel -->
                                                  <script>
                                                    $(document).ready(function(){
                                                      $('.carousel').carousel({
                                                        interval: 3000 // Change l'intervalle de défilement à 3 secondes (3000 ms)
                                                      });
                                                    });
                                                  </script>
                                                
                                                <div class="card text-center mb-3" style="width: 100%;border-radius: 20px;">
                                                <div class="card-body">
                                                  <!-- <nav>
        <a href="{{ route('home') }}">Laravel</a>
        @if(Auth::check())
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endif
    </nav>
                                                  -->
    <a href="{{ route('publications') }}">
    <h1 style="color:#f46e27;">منشورات</h1>
    <!-- <div class="card text-center mb-3" style="width: 100%;border-radius: 20px;">
        <div class="card-body">
            <a href="{{ route('publications') }}" class="card-title" style="direction: rtl; text-align: right; list-style-position: inside;">Publications</a><hr>
            <div class="overflow-scroll">
                <div>
                    @foreach($posts as $post)
                        <p style="direction: rtl; text-align: right; list-style-position: inside;">
                        @if($post->image)
                                <img src="{{ asset('storage/'.$post->image) }}" alt="Image de la publication" width="100%">
                            @endif
                            
                        <strong>{{ $post->title }} :</strong> <br> {{ $post->content }}
                                                  </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div> -->
    <div class="card text-center mb-3" style="width: 100%;border-radius: 20px;">
        <div class="card-body">
            <a href="{{ route('publications') }}" class="card-title" style="color:#4d6886;direction: rtl; text-align: right; list-style-position: inside;">الأخبار</a><hr>
            <div class="overflow-scroll">
                <div>
                  <ul>
                    @foreach($posts as $post)
                    <li style="direction:rtl">
                    <a style="color:#4d6886;" href="{{ route('publications') }}">
                        <p style="direction: rtl; text-align: center; list-style-position: inside;">
                       <strong>{{ $post->title }}</strong>  <br>
                        </p>
                    </a>
                    </li>
                    
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </a>
                                                </div>
                                              </div>
                                            </div>
                            
                                        </div>
                            
                            

                                        <div class="col-md-8" style="margin-top:20px;border-radius: 20px;"> <!-- 7/12 corresponds approximately to 60% -->
                                            
                                            <div class="card mb-3" >
                                                <img style="padding-top: 30px;padding-left: 20px;padding-right: 20px;" src="{{ asset('images/logoaccueil.jpg') }}"  class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <a href="{{ route('publications') }}">
                                                            <p style="color: #f46e27;direction: rtl; text-align: center; list-style-position: inside;"><strong>Les Nouvelles mises à jours au seins de la Direction provinciale MENPS de Oued Ed-Dahab</strong> </p>                        
                                                </a>  
                                                </div>
                                        </div>
                            
                            
                            
                                              
                            
                                    <style>
                                        .nav-pills .nav-link {
                                          color: #4d6886; /* Couleur bleu foncé pour le texte des boutons non sélectionnés */
                                        }
                                        .nav-pills .nav-link.active {
                                          background-color: #4d6886; /* Couleur bleu foncé pour le fond des boutons sélectionnés */
                                          color: #ffffff; /* Couleur blanche pour le texte des boutons sélectionnés */
                                        }
                                        .nav-pills .nav-link:not(.active):hover {
                                          color: #4d6886; /* Couleur bleu foncé pour le texte des boutons non sélectionnés au survol */
                                        }
                                      </style>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                    <div class="container" style="background-color: white;border-radius: 15px;">
                                        <ul class="nav nav-pills" role="tablist">
                                          <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#service1" style="font-size: smaller;"><strong>service 1</strong></a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#service2" style="font-size: smaller;"><strong>service 2</strong></a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#service3" style="font-size: smaller;"><strong>service 3</strong></a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#service4" style="font-size: smaller;"><strong>service 4</strong></a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#service5" style="font-size: smaller;"><strong>service 5</strong></a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#service6" style="font-size: smaller;"><strong>service 6</strong></a>
                                          </li>
                                        </ul>
                                      
                                        <!-- Tab panes -->
                                        <div class="tab-content" style="padding-bottom: 10px;">
                                          <div id="service1" class="container tab-pane active" style=""><br>
                                            <h5 style="color: #f46e27;direction: rtl; text-align: right; list-style-position: inside;">مصلحة تدبير الموارد البشرية والشؤون الإدارية والمالية:</h5><hr>
                                            <ul style="font-size: medium; font-weight: bold;">
                                                       
                                                <a href="{{ route('service1bureau1') }}" style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب تدبير الوضعيات الإدارية والمسار المهني للموظفين</li></a>
                                                <a href="{{ route('service1bureau2') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الحركات الانتقالية وتدبير الخصاص</li></a>
                                                <a href="{{ route('service1bureau3') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الرخص وتدبير وتحيين المعطيات وتتبع نظام مسير</li></a> 
                                                <a href="{{ route('service1bureau4') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب التكوين المستمر والتعويضات العائلية وتحويل الأجرة</li></a>
                                                <a href="{{ route('service1bureau5') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب البرمجة والصفقات العمومية</li></a>                              
                                                <a href="{{ route('service1bureau6') }}l"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب البرمجة والصفقات العمومية</li></a>
                                                <a href="{{ route('service1bureau7') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب البرمجة والصفقات العمومية</li></a>
                                                <a href="{{ route('service1bureau8') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الصيانة والتسيير</li></a>
                                                <a href="{{ route('service1bureau9') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الاقتصاد والدعم الاجتماعي</li></a>
                                                <a href="{{ route('service1bureau10') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب المحاسبة</li></a>
                                                <a href="{{ route('service1bureau11') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب التجهيز والبناءات</li></a>
                                                <a href="{{ route('service1bureau12') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الممتلكات والسكنيات</li></a>
                                                <a href="{{ route('service1bureau13') }}"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب التوثيق وتدبير الأرشيف والمستندات</li></a>
                                            </ul>    
                                            </div>
                                          <div id="service2" class="container tab-pane fade"><br>
                                            <h5 style="color: #f46e27;direction: rtl; text-align: right; list-style-position: inside;">مصلحة الشؤون التربوية والتخطيط والخريطة المدرسية:</h5><hr>
                                            <ul style="font-size: medium; font-weight: bold;color: #4d6886;">
                                                       
                                                <a href="service2bureau1.html" style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>كتابة المصلحة</li></a>
                                                <a href="service2bureau2.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب العمل التربوي</li></a>
                                                <a href="service2bureau3.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الارتقاء بالحياة المدرسية</li></a> 
                                                <a href="service2bureau4.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الارتقاء بالرياضة المدرسية</li></a>
                                                <a href="service2bureau5.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الخريطة المدرسية</li></a>                              
                                                <a href="service2bureau6.html"style="color: #4d6886; padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الإحصاء والدراسات</li></a>
                                                <a href="service2bureau7.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الارتقاء بالتعليم الأولي والتعليم الخصوصي</li></a>
                                                <a href="service2bureau8.html"style="color: #4d6886; padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب التربية الدامجة</li></a>
                                                <a href="service2bureau9.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الصحة المدرسية</li></a>
                                            </ul>    
                                            </div>
                                          <div id="service3" class="container tab-pane fade"><br>
                                            <h5 style="color: #f46e27;direction: rtl; text-align: right; list-style-position: inside;">مصلحة تأطير المؤسسات التعليمية والتوجيه:</h5><hr>
                                            <ul style="font-size: medium; font-weight: bold;">
                                                       
                                                <a href="service3bureau1.html" style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>كتابة المصلحة</li></a>
                                                <a href="service3bureau2.html"style="color: #4d6886; padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب التوجيه المدرسي   والمهني والجامعي</li></a>
                                                <a href="service3bureau3.html"style="color: #4d6886; padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب تأطير المؤسسات التعليمية</li></a> 
                                                <a href="service3bureau4.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الارتقاء بالتربية غير النظامية</li></a>
                                            </ul>    
                                            </div>
                                          <div id="service4" class="container tab-pane fade"><br>
                                            <h5 style="color: #f46e27;direction: rtl; text-align: right; list-style-position: inside;">تتكون مصلحة تأطير المؤسسات التعليمية والتوجيه من المكاتب التالية:</h5><hr>
                                            <ul style="font-size: medium; font-weight: bold;">
                                                       
                                                <a href="service4bureau1.html" style="color: #4d6886; padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الشؤون القانونية</li></a>
                                                <a href="service4bureau2.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب التواصل والاستقبال</li></a>
                                                <a href="service4bureau3.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الحوادث المدرسية والتأمين المدرسي</li></a> 
                                                <a href="service4bureau4.html"style="color: #4d6886; padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الشراكة والتعاون </li></a>
                                            </ul>    
                                            </div>
                                          <div id="service5" class="container tab-pane fade"><br>
                                            <h5 style="color: #f46e27;direction: rtl; text-align: right; list-style-position: inside;">المركز الإقليمي للامتحانات:</h5><hr>
                                            <ul style="font-size: medium; font-weight: bold;">
                                                       
                                                <a href="service5bureau1.html" style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الأرشيف والرقمنة</li></a>
                                                <a href="service5bureau2.html"style="color: #4d6886; padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>مكتب الامتحانات المهنية والمدرسية</li></a>
                                            </ul>    
                                            </div>
                                          <div id="service6" class="container tab-pane fade"><br>
                                            <h5 style="color: #f46e27;direction: rtl; text-align: right; list-style-position: inside;">المركز الإقليمي لمنظومة الاعلام:</h5><hr>
                                            <ul style="font-size: medium; font-weight: bold;">
                                                       
                                                <a href="service6bureau1.html" style="color: #4d6886; padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>المكتب الإقليمي لمنظومة الاعلام</li></a>
                                                <a href="service6bureau2.html"style=" color: #4d6886;padding-top: 10px;direction: rtl; text-align: right; list-style-position: inside;"><li>المنسقة الإقليمية لبرنامج جيني</li></a>
                                            </ul>    
                                            </div>
                                        </div>
                                      </div>
                                    
                                    
                                    
                                    
                                           
                                        </div>
                            
                            
                            
                            
                                    
                                    </div>
                             </div>




                             

                            



                             
                             <div style="background:#f6a228;color:#fff;text-align:center;line-height:30px;font-size:13px;margin-top:8px">
    <table style="background-color: orange; margin: auto;">
        <tr>
            <td colspan="3">
                <strong>ⴰⵎⵔⵏⵓ ⵏ ⵜⵎⴰⵡⴰⵙⵜ - ⵉⵎⵉⵏⵔⵡⴰⵃ - ⵔⴱⴰⴹ ⵜⴱⴰⴹ ⵜⵉⵍⵉⴼⵓⵏ</strong> 0537687219 - المقر المركزي - باب الرواح - الهاتف : 0537687219 - الفاكس : 0537771874
            </td>
        </tr>
    </table>
</div>
<div style="clear:both"></div>
<div  style="text-align: center;">
    <div class="content" style="display: inline-block; text-align: right;firection:rtl;">
        <table style="margin: auto;">
            <tr>
            <td style="padding-right: 10px; vertical-align: top;">
                    <h4>فضاءات</h4>
                    <a href="https://waliye.men.gov.ma/Ar/EspacePrive/Pages/Accueil.aspx">فضاء الآباء و الأمهات</a><br>
                    <a href="https://moutamadris.men.gov.ma/Ar/EspacePrive/Pages/Accueil.aspx">فضاء  التلميذات والتلاميذ</a><br>
                    <a href="PROEF.aspx">فضاء الموارد البشرية</a><br>
                    <a href="espresse.aspx">فضاء الصحافة</a><br>
                    <a href="Espace.aspx">فضاء الشركاء</a><br>
                    <a href="academies-2.html">مواقع الأكاديميات</a><br>
                    <a href="http://www.cpge.ac.ma/" target="_blank">الأقسام التحضيرية للمدارس العليا</a><br>
                    <a href="bts-2.html">شهادة التقني العالي</a>
                </td>
                <td style="padding-right: 10px; vertical-align: top;">
                    <h4>تقاسم</h4>
                    <a href="ListeActualites-2.html">كل المستجدات</a><br>
                    <a href="ToutesPublications.html">إعلانات ومذكرات</a><br>
                    <a href="statistiques.html">إحصائيات</a><br>
                    <a href="Accueil-2.html">الانخراط في الرسالة الإلكترونية</a><br>
                    <a href="https://www.facebook.com/pages/وزارة-التربية-الوطنية/217195898394205#%21/pages/%D9%88%D8%B2%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%8A%D8%A9-%D8%A7%D9%84%D9%88%D8%B7%D9%86%D9%8A%D8%A9/217195898394205"> الصفحة الرسمية على Facebook</a><br>
                    <a href="https://www.youtube.com/user/EducationMa" target="_blank">الصفحة الرسمية على Youtube</a><br>
                    <a href="https://twitter.com/MarocEducation" target="_blank">الصفحة الرسمية على X</a><br>
                    <a href="Accueil-2.html">استطلاعات للرأي</a><br>
                    <a href="forum-2.html">منتديات</a>
                </td>
                <td style="padding-right: 10px; vertical-align: top;">
                    <h4>خدمات</h4>
                    <a href="#">طلبات العروض</a><br>
                    <a href="Accueil.aspx">صندوق الاقتراحات</a><br>
                    <a href="Téléphonique.aspx">دليل الإدارة المركزية</a><br>
                    <a href="annuaire-2.html">دليل المؤسسات</a><br>
                    <a href="services.html">خدمات القطاع</a>
                </td>
                <td style="padding-right: 10px; vertical-align: top;">
                    <h4>روابط مفيدة​</h4>
                    <a href="https://www.sahara.ma/ar/" target="_blank">بوابة الصحراء المغربية</a><br>
                    <a href="http://www.cg.gov.ma/" target="_blank">رئيس الحكومة</a><br>
                    <a href="http://www.mmsp.gov.ma/" target="_blank">الوظيفة العمومية</a><br>
                    <a href="http://www.sgg.gov.ma/arabe/Accueil.aspx" target="_blank">الأمانة العامة للحكومة</a><br>
                    <a href="http://www.service-public.ma/web/guest/home" target="_blank">الإدارة العمومية</a><br>
                    <a href="http://www.emploi-public.ma/ar/index.asp" target="_blank">موقع التشغيل العمومي</a><br>
                    <a href="https://www.marchespublics.gov.ma/pmmp/?lang=ar" target="_blank">الصفقات العمومية</a><br>
                    <a href="http://www.service-public.ma/web/guest/home" target="_blank">البوابة الوطنية</a><br>
                    <a href="http://www.egov.ma/Pages/Default.aspx" target="_blank">الحكومة الإلكترونية</a>
                </td>
                <td style="padding-right: 10px; vertical-align: top;">
                    <h4>اتصال و بحث</h4>
                    <a href="pedagintegration.html">اتصال</a><br>
                    <a href="boite_a_idees.html">علبة الأفكار</a><br>
                    <a href="Accueil-2.html">محرك البحث</a>
                </td>

                    </tr>
                    </table>
                    <div class="copyright">
                    ⵜⴰⴳⵍⴷⵉⵜ ⵏ ⵍⵎⵖⵔⵉⴱ - ⵜⴰⵎⴰⵡⴰⵙⵜ ⵏ ⵓⵙⴳⵎⵉ ⴰⵏⴰⵎⵓⵔ ⴷ ⵓⵙⵙⵍⵎⴷ ⴰⵎⵣⵡⴰⵔⵓ ⴷ ⵜⵓⵏⵏⵓⵏⵜ © المملكة المغربية - وزارة التربية الوطنية و التعليم الأولي و الرياضة 2024
                    </div>
                    </div>

</div>




    <!-- content -->
</div>
<!-- footer -->

                            </div>
                            


                        </div>
                    </div>
                </div>
            </div>
            

    </body>
</html>
