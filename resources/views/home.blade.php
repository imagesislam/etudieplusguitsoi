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
<body style="background-image: url('{{ asset('images/fond.gif') }}'); margin-left: 30px;">
<div id="container" >
    <div id="header">
        <div class="content">
                                        

        <nav  style="text-align:center;margin-left:20px;padding-top:5px;" >
        <a  href="{{ route('home') }}" style="color:white;">Accueil</a>
        @if(Auth::check())
            <a style="color:white;" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <a style="color:white;" href="{{ route('register') }}">s'enregistrer</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a style="color:white;" href="{{ route('login') }}">connexion</a>
            
        @endif
    </nav>


            <div>
                <h1 class="logo">
                    <div id="DeltaSiteLogo" style="text-align:center;">
                            <img style="border-radius: 20px;width: 500px;height: 100px; " class=" " name="onetidHeadbnnr0" src="{{ asset('images/logoaccueil.jpg') }}" alt="الصفحة الرئيسية" />
                    
                            
                    </div>

                </h1>

            </div>
            <div>
                <ul id="nav" class="radius menu megamenu" style="margin-top: 80px;margin-bottom: 50px;">
                    <li><a href="{{ route('home') }}" title="" class="home current active">&nbsp;</a></li>
            
                <li id='menuIDARMINISTEREPAGESDEFAULTASPX' class="mm-item" style="float: right;">
                    <a href="#" class="mm-item-link">الوزارة</a>
                    
                    <div class="bradius" tabindex="-1">
                        <div class="leftSub"><div class="itemMenus"><ul><li class="first">​​​​​​​​​​​​​​​ 
                                <a href="#">هيكلة القطاع</a>​</li><li>
                                <a href="BG-ChakibBenmoussa.html">السيد الوزير</a>​</li><li>
                                <a href="organiramme.html">هيكلة الإدارة المركزية</a>​</li></ul> ​​​​ </div><div class="itemMenus"><ul><li class="first"> 
                                <a href="#">الاختصاصات​</a>​</li><li> 
                                <a href="intro_attribution.html">الاختصاصات​</a>​</li><li> 
                                <a href="organisation.html">اختصاصات المصالح المركزية​</a>​</li><li> 
                                <a href="aref_loi0700.html">اختصاصات المصالح الخارجية​</a>​</li></ul>​</div></div><div class="rightSub"> 
                    <img src="{{ asset('images/home2.png') }}" alt="" />
                    <a href="organisation.html">اختصاصات و تنظيم وزارة التربية الوطنية </a>
                    <p>اختصاصات و تنظيم وزارة التربية الوطنية </p></div>​ ​​​
                        <span class="closebradius">إغلاق</span>
                    </div>

                </li>
            
                <li id='menuIDARREFORMEDUPAGESDEFAULTASPX' >
                    <a href="#" class="mm-item-link mm-item-link-hover">التوجهات الاستراتيجية الكبرى</a>
                    
        <div class="bradius" tabindex="-1">
            <div class="leftSub"><div class="itemMenus"><ul><li class="first">​​​​​​​ 
                    <a href="#">توجهات</a>​</li><li>
                    <a href="orientations.html">توجهات</a>​</li><li>
                    <a href="orientationsroyales.html">خطب ملكية سامية</a>​</li><li>
                    <a href="charteEF.html">الميثاق الوطني للتربية والتكوين</a>​</li><li>
                    <a href="Prog-gouv2126.html">البرنامج الحكومي</a>​</li><li>
                    <a href="prog-sect.html">البرنامج القطاعي</a>​</li></ul><ul></ul></div><div class="itemMenus"><ul><li class="first"> 
                    <a href="#">المشاريع الاستراتيجية​</a>​</li><li> 
                    <a href="Vision_strateg_CSEF16004.pdf">الرؤية الاستراتيجية للمجلس الأعلى​</a></li><li> 
                    <a href="FRoute20222026ar.pdf">خارطة طريق 2022-2026 من أجل مدرسة عمومية ذات جودة ​</a></li></ul></div><div class="itemMenus"><ul><li class="first"> 
                    <a href="#">القانون الإطار​</a>​</li><li> 
                    <a href="loicadre1751.html">القانون الإطار رقم 51.17</a></li></ul></div></div><div class="rightSub"> 
        <img src="{{ asset('images/Marketing-Analysis_Op.jpg') }}" alt="" style="width&#58;159px;height&#58;145px;" />
        <a href="rapt-nat-inter.html">تقارير وطنية و دولية </a>
        <p>تقارير وطنية و دولية </p></div>​ ​ ​
            <span class="closebradius">إغلاق</span>
        </div>

                </li>
            
                <li id='menuIDARREFORMEEDUCATIVEPAGESDEFAULTASPX' >
                    <a href="#" class="mm-item-link mm-item-link-hover">التربية الوطنية</a>
                    
        <div class="bradius" tabindex="-1">
            <div class="leftSub"><div class="itemMenus"><ul><li class="first"> 
                    <a href="#">النظام التربوي</a></li><li>
                    <a href="EnsPresco.aspx">التعليم الأولي</a></li><li>
                    <a href="ens-preprim.html">التعليم الابتدائي</a></li><li>
                    <a href="Projet-Curriculum-LagueAmazighe2021.html">مشروع المنهاج الجديد للغة الأمازيغية بالابتدائي-2021</a></li><li>
                    <a href="prog-repartition_secollege.html">التعليم الثانوي الإعدادي</a></li><li>
                    <a href="prog-ensqualif.html">التعليم الثانوي التأهيلي</a></li><li>
                    <a href="bacpro_parpro.html">الباكلوريا المهنية والمسار المهني</a></li><li>
                    <a href="ensorig_PG.html">الحقيبة التربوية للتعليم الأصيل</a></li><li>
                    <a href="crclm-eduislam-enspubpriv.html">المنهاج المراجع للتربية الإسلامية</a></li><li>
                    <a href="bts.html">شهادة التقني العالي</a></li><li>
                    <a href="CPGE.html">الأقسام التحضيرية للمدارس العليا</a></li><li>
                    <a href="Ensco-prive.html">التعليم المدرسي الخصوصي</a></li><li>
                    <a href="ENF.html">التربية غير النظامية</a></li><li> 
                    <a href="http://www.taalimtice.ma/">برنامج جيني</a></li></ul><ul></ul></div><div class="itemMenus"><ul><li class="first"> 
                    <a href="#">مهن التربية والتكوين</a></li><li>
                    <a href="formationdebase.html">التكوين الأساس</a></li><li>
                    <a href="http://collab.men.gov.ma/">التكوين عن بعد</a></li><li class="first"> 
                    <a href="#">الارتقاء بالرياضة المدرسية</a></li><li>
                    <a href="activites-sportsco.html">الأنشطة الرياضية المدرسية</a></li> 
                <br> 
                <li class="first"> 
                    <a href="#">التربية الدامجة</a></li><li>
                    <a href="EBS.html">البرنامج الوطني للتربية الدامجة لفائدة الاطفال في وضعية إعاقة</a></li><li class="first"> 
                    <a href="#">التميز</a></li><li> 
                    <a href="C-excel.html">مباريات التميز</a></li> 
                <br> 
                <li class="first"> 
                    <a href="#">برنامج تيسير</a></li><li>
                    <a href="Tayssir2021.html">التحويلات المالية المشروطة</a></li> 
                <br>
            </ul></div><div class="itemMenus"><ul><li class="first"> 
                    <a href="#">نصوص قانونية</a></li><li> 
                    <a href="textesjur.html">اللامركزية و اللاتمركز</a></li><li> 
                    <a href="Textes-thematiques.aspx">الحوادث المدرسية و حوادث المصلحة</a></li><li> 
                    <a href="homolog-dip.html">معادلة الشهادات</a></li><li> 
                    <a href="boursescolaire.html">منح الاستحقاق</a></li>
                <br>
                <li class="first">
                    <a href="#">تنظيم السنة الدراسية</a></li><li> 
                    <a href="Publication8762.html?IDPublication=7008">تنظيم السنة الدراسية 2023-2024</a></li><li> 
                    <a href="Publication557c.html?IDPublication=7151">تكييف تنظيم السنة الدراسية 2023-2024</a></li> 
                <br>
                <li class="first"> 
                    <a href="#">الصحة المدرسية</a></li><li> 
                    <a href="act-sante.html">أنشطة الصحة المدرسية</a></li><li> 
                    <a href="visites-medicales.html">الأنشطة الطبية والوقائية</a></li> 
                <br>
            </ul></div><div class="itemMenus"><ul><li class="first"> 
                    <a href="#">مؤشرات المنظومة التربوية</a></li><li> 
                    <a href="Accueil.html/chafafiya/Pages/indices-syspedag.aspx">مؤشرات المنظومة التربوية</a> </li><li> 
                    <a href="Accueil.html/chafafiya/Pages/statistiques.aspx">إحصائيات</a> </li><li> 
                    <a href="dssp-etudes.html">دراسات</a> </li><li> 
                    <a href="rapt-nat-inter.html">تقارير وطنية ودولية</a> </li>
                <br>
                <ul><li class="first"> 
                    <a href="#">التعاون الدولي والشراكات</a></li><li> 
                    <a href="pagesm.html">مشروع دعم تدبير المؤسسات التعليمية(PAGESM)</a></li><li> 
                    <a href="partenariat-bailleurs-fonds.html">الشركاء التقنيين والماليين الدوليين</a></li><li> 
                    <a href="guide-orientation-SCivile.pdf">الدليل الإرشادي للاحتفاء باليوم الوطني للمجتمع المدني</a></li></ul></ul></div></div><div class="rightSub"> 
        <img src="{{ asset('images/calend2_schoolyear2015.png') }}" alt="" />
        <a href="Publication8762.html?IDPublication=7008">تنظيم السنة الدراسية 2023-2024</a>
        <p>تنظيم السنة الدراسية 2023-2024</p></div>
            <span class="closebradius">إغلاق</span>
        </div>

                </li>
            
                <li id='menuIDARSPORTSPAGESDEFAULTASPX' >
                    <a href="#" class="mm-item-link mm-item-link-hover">الرياضة</a>
                    
        <div class="bradius" tabindex="-1">
            <div class="leftSub"><div class="itemMenus"><ul><li class="first">
                    <a href="#">الارتقاء بالرياضة المدرسية</a></li><li> 
                    <a href="#/Fr/Pages/sportsco.aspx" target="_blank">الرياضة المدرسية</a></li><li> 
                    <a href="https://www.frmss-dpss.com/الاستقبال/">الجامعة الملكية المغربية للرياضة المدرسية</a></li><li>
                    <a href="Prog-gouv-sport2126.html">الرياضة في البرنامج الحكومي 2021-2026 </a> </li></ul></div></div><div class="rightSub">
                        <a href="https://www.frmss-dpss.com/الاستقبال/" title="الجامعة الملكية المغربية للرياضة المدرسية" target="_blank"> 
                        <img src="{{ asset('images/logo.frmss.png') }}" alt="" style="width&#58;160px;height&#58;192px;" /></a> 
                        <a href="Publicationee85.html?IDPublication=6810" target="_blank"> 
                        <center style="text-align&#58;center;"> 
                            <b>برنامج 2022-2023 </b></center> </a></div>​ ​​​ 
                        <span class="closebradius">إغلاق</span>
                    </div>
                    
                            </li>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                        var menuLinks = document.querySelectorAll('.mm-item-link');
                        
                        // Parcourir tous les liens du menu
                        menuLinks.forEach(function(menuLink) {
                        // Ajouter un écouteur d'événement pour chaque lien
                        menuLink.addEventListener('click', function(event) {
                            // Empêcher le comportement par défaut du lien (redirection)
                            event.preventDefault();
                        
                            // Trouver le contenu du menu associé
                            var menuContent = this.parentElement.querySelector('.bradius');
                        
                            // Fermer tous les autres menus ouverts
                            closeAllMenus();
                        
                            // Afficher le contenu du menu
                            menuContent.style.display = 'block';
                        });
                        
                        // Trouver le bouton "Fermer" associé à ce lien de menu
                        var closeButton = menuLink.parentElement.querySelector('.closebradius');
                        
                        // Ajouter un gestionnaire d'événements pour le clic sur le bouton "Fermer"
                        closeButton.addEventListener('click', function() {
                            // Trouver le contenu du menu associé au bouton "Fermer"
                            var menuContent = this.parentElement;
                        
                            // Masquer le contenu de la boîte
                            menuContent.style.display = 'none';
                        });
                        });
                        
                        // Fonction pour fermer tous les menus ouverts
                        function closeAllMenus() {
                        var allMenuContents = document.querySelectorAll('.bradius');
                        allMenuContents.forEach(function(menuContent) {
                            menuContent.style.display = 'none';
                        });
                        }
                        });
                        
                        
                        
                        </script>







                        <div class="selcsize">
                            <div title="" style="color:white;">
                                <a href="javascript:decreaseFontSize()" id="ctl00_ctl23_icoMinus" class="icon moins" title="تصغير حجم الخط"></a>
                                <a href="javascript:increaseFontSize()" id="ctl00_ctl23_icoPlus" class="icon plus" title="تكبير حجم الخط"></a>
                                
                            </div>
                        </div>


                        <script src="zoom.min.js">
                        </script>
                        <script>
                            function ZoomMoins() {
                                zoomout();
                            }
                            function ZoomPlus() {
                                zoomin();
                            }



                        </script>


            </div>

        
                                            


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




                             


<div class="ms-dialogHidden content foot" id="contentFooter">
    <p> 
   <span style="line-height&#58;1.6;">
      <span>
         <font face="Tifinaghe-Ircam Unicode" style="font-family&#58;ebrima;">​​​​​​​​​​<strong>ⴰⵎⵔⵏⵓ ⵏ ⵜⵎⴰⵡⴰⵙⵜ - ⵉⵎⵉⵏⵔⵡⴰⵃ - ⵔⴱⴰⴹ ⵜⴱⴰⴹ ⵜⵉⵍⵉⴼⵓⵏ</strong></font><strong>​​​</strong></span></span><span style="line-height&#58;1.6;">​&#160;&#160;</span><span style="line-height&#58;1.6;">0537687219</span><span style="line-height&#58;1.6;">&#160; </span>
   <span style="line-height&#58;1.6;"> -&#160;<span class="ms-rteThemeFontFace-1 ms-rteFontSize-1" style="line-height&#58;115%;"><font face="Tifinaghe-Ircam Unicode" style="font-family&#58;ebrima;">​<strong>ⵙⴽⴰⴼ</strong> - ​​</font></span><span style="line-height&#58;1.6;"></span>المقر المركزي - باب الرواح - </span> 
   <span style="line-height&#58;1.6;">&#160;الهاتف &#58; </span>
   <span style="line-height&#58;1.6;">-<span><span><span style="line-height&#58;1.6;">​&#160;&#160;<span></span></span><span style="line-height&#58;1.6;">0537687219</span><span style="line-height&#58;1.6;">&#160; </span>
   <span style="line-height&#58;1.6;"> </span></span></span>​</span><span style="line-height&#58;1.6;"> الفاكس &#58; </span>
   <span style="line-height&#58;1.6;"> - 0537771874- ​</span><br></p>
</div>
<div style="clear:both"></div>
<div id="footer">
    <div class="content">
        <ul id="keys"><li><h4>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​<a>فضاءات</a></h4>​ 
      <ul><li> 
            <a href="https://waliye.men.gov.ma/Ar/EspacePrive/Pages/Accueil.aspx">فضاء الآباء و الأمهات​</a></li><li> 
            <a href="https://moutamadris.men.gov.ma/Ar/EspacePrive/Pages/Accueil.aspx">فضاء  التلميذات والتلاميذ</a> </li><li> 
            <a href="PROEF.aspx">فضاء الموارد البشرية</a></li><li> 
            <a href="espresse.aspx">فضاء الصحافة</a></li><li> 
            <a href="Espace.aspx">فضاء الشركاء</a></li><li> 
            <a href="academies-2.html">مواقع الأكاديميات</a></li><li> 
            <a href="http://www.cpge.ac.ma/" target="_blank">الأقسام التحضيرية للمدارس العليا</a></li><li> 
            <a href="bts-2.html">شهادة التقني العالي</a>​</li></ul></li><li><h4> 
         <a>تقاسم​</a></h4><ul><li> 
            <a href="ListeActualites-2.html">كل المستجدات</a></li><li> 
            <a href="ToutesPublications.html">إعلانات ومذكرات</a></li><li> 
            <a href="statistiques.html">إحصائيات</a></li><li> 
            <a href="Accueil-2.html">الانخراط في الرسالة الإلكترونية</a></li><li> 
            <a href="https://www.facebook.com/pages/وزارة-التربية-الوطنية/217195898394205#%21/pages/%D9%88%D8%B2%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%8A%D8%A9-%D8%A7%D9%84%D9%88%D8%B7%D9%86%D9%8A%D8%A9/217195898394205"> الصفحة الرسمية على Facebook</a></li><li> 
            <a href="https://www.youtube.com/user/EducationMa" target="_blank">الصفحة الرسمية على Youtube</a></li><li> 
            <a href="https://twitter.com/MarocEducation" target="_blank">الصفحة الرسمية على X</a></li><li> 
            <a href="Accueil-2.html">استطلاعات للرأي</a></li><li> 
            <a href="forum-2.html">منتديات</a></li></ul>​</li><li><h4>
         <a>خدمات</a></h4><ul><li> 
            <a href="#">طلبات العروض</a></li><li> 
            <a href="Accueil.aspx">صندوق الاقتراحات</a></li><li>
            <a href="Téléphonique.aspx">دليل الإدارة المركزية</a></li><li>
            <a href="annuaire-2.html">دليل المؤسسات</a></li><li class="last">
            <a href="services.html">خدمات القطاع</a>&#160; &#160; &#160; &#160;&#160;</li></ul></li><li><h4> 
         <a>روابط مفيدة​</a></h4><ul><li> 
            <a href="https://www.sahara.ma/ar/" target="_blank">بوابة الصحراء المغربية</a></li>
         
         <li> 
            <a href="http://www.cg.gov.ma/" target="_blank">رئيس الحكومة</a></li><li> 
            <a href="http://www.mmsp.gov.ma/" target="_blank">الوظيفة العمومية</a></li><li> 
            <a href="http://www.sgg.gov.ma/arabe/Accueil.aspx" target="_blank">الأمانة العامة للحكومة</a></li><li> 
            <a href="http://www.service-public.ma/web/guest/home" target="_blank">الإدارة العمومية</a></li><li> 
            <a href="http://www.emploi-public.ma/ar/index.asp" target="_blank">موقع التشغيل العمومي</a></li><li> 
            <a href="https://www.marchespublics.gov.ma/pmmp/?lang=ar" target="_blank">الصفقات العمومية</a></li><li>
            <a href="http://www.service-public.ma/web/guest/home" target="_blank">البوابة الوطنية</a></li><li>
            <a href="http://www.egov.ma/Pages/Default.aspx" target="_blank">الحكومة الإلكترونية</a></li></ul>​</li><li><h4> 
         <a>اتصال و بحث</a></h4><ul><li> 
            <a href="pedagintegration.html">اتصال</a></li><li> 
            <a href="boite_a_idees.html">علبة الأفكار</a></li><li>
            <a href="Accueil-2.html">محرك البحث</a></li></ul>​</li></ul> ​​ ​​ ​ ​​ ​​ ​ 

       <div class="copyright"> <span class="ms-rteFontSize-1 ms-rteThemeForeColor-5-4">​​​</span><span class="ms-rteThemeForeColor-5-4"><span><span><font class="ms-rteFontSize-1 ms-rteThemeForeColor-5-4" face="Tifinaghe-Ircam Unicode"><span style="line-height&#58;115%;font-family&#58;ebrima;">ⵜⴰⴳⵍⴷⵉⵜ ⵏ ⵍⵎⵖⵔⵉⴱ - ⵜⴰⵎⴰⵡⴰⵙⵜ ⵏ ⵓⵙⴳⵎⵉ ⴰⵏⴰⵎⵓⵔ ⴷ ⵓⵙⵙⵍⵎⴷ ⴰⵎⵣⵡⴰⵔⵓ ⴷ ⵜⵓⵏⵏⵓⵏⵜ<span aria-hidden="true"></span></span></font><span class="ms-rteThemeForeColor-5-4"> ©&#160; المملكة المغربية - وزارة التربية الوطنية و التعليم الأولي&#160;و الرياضة</span>  </span></span></span> 2024 </div>

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
