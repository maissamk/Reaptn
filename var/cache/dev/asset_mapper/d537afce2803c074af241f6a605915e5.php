O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:70:"C:\Users\DELL\Downloads\projet\Reaptn\assets\frontoffice\css\style.css";s:10:"publicPath";s:66:"/assets/frontoffice/css/style-56edf8083b69670455ac004035bd238c.css";s:23:"publicPathWithoutDigest";s:33:"/assets/frontoffice/css/style.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:10896:"
/*** Spinner Start ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .8s ease-out, visibility 0s linear .5s;
    z-index: 99999;
 }

 #spinner.show {
     transition: opacity .8s ease-out, visibility 0s linear .0s;
     visibility: visible;
     opacity: 1;
 }

 .back-to-top {
    position: fixed;
    right: 30px;
    bottom: 30px;
    display: flex;
    width: 45px;
    height: 45px;
    align-items: center;
    justify-content: center;
    transition: 0.5s;
    z-index: 99;
}
/*** Spinner End ***/


/*** Button Start ***/
.btn {
    font-weight: 600;
    transition: .5s;
}

.btn-square {
    width: 32px;
    height: 32px;
}

.btn-sm-square {
    width: 34px;
    height: 34px;
}

.btn-md-square {
    width: 44px;
    height: 44px;
}

.btn-lg-square {
    width: 56px;
    height: 56px;
}

.btn-square,
.btn-sm-square,
.btn-md-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
}

.btn.border-secondary {
    transition: 0.5s;
}

.btn.border-secondary:hover {
    background: var(--bs-secondary) !important;
    color: var(--bs-white) !important;
}

/*** Topbar Start ***/
.fixed-top {
    transition: 0.5s;
    background: var(--bs-white);
    border: 0;
}

.topbar {
    padding: 20px;
    border-radius: 230px 100px;
}

.topbar .top-info {
    font-size: 15px;
    line-height: 0;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
}

.topbar .top-link {
    font-size: 15px;
    line-height: 0;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
}

.topbar .top-link a {
    letter-spacing: 1px;
}

.topbar .top-link a small:hover {
    color: var(--bs-secondary) !important;
    transition: 0.5s;
}

.topbar .top-link a small:hover i {
    color: var(--bs-primary) !important;
}
/*** Topbar End ***/

/*** Navbar Start ***/
.navbar .navbar-nav .nav-link {
    padding: 10px 15px;
    font-size: 16px;
    transition: .5s;
}

.navbar {
    height: 100px;
    border-bottom: 1px solid rgba(255, 255, 255, .1);
}

.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active,
.fixed-top.bg-white .navbar .navbar-nav .nav-link:hover,
.fixed-top.bg-white .navbar .navbar-nav .nav-link.active {
    color: var(--bs-primary);
}

.navbar .dropdown-toggle::after {
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 700;
    vertical-align: middle;
    margin-left: 8px;
}

@media (min-width: 1200px) {
    .navbar .nav-item .dropdown-menu {
        display: block;
        visibility: hidden;
        top: 100%;
        transform: rotateX(-75deg);
        transform-origin: 0% 0%;
        border: 0;
        transition: .5s;
        opacity: 0;
    }
}

.dropdown .dropdown-menu a:hover {
    background: var(--bs-secondary);
    color: var(--bs-primary);
}

.navbar .nav-item:hover .dropdown-menu {
    transform: rotateX(0deg);
    visibility: visible;
    background: var(--bs-light) !important;
    border-radius: 10px !important;
    transition: .5s;
    opacity: 1;
}

#searchModal .modal-content {
    background: rgba(255, 255, 255, .8);
}
/*** Navbar End ***/

/*** Hero Header ***/
.hero-header {
    background: linear-gradient(rgba(248, 223, 173, 0.1), rgba(248, 223, 173, 0.1)), url("../img/hero-img-bd9ab201f79ae6930c20bc044eb5e451.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.carousel-item {
    position: relative;
}

.carousel-item a {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 25px;
    background: linear-gradient(rgba(255, 181, 36, 0.7), rgba(255, 181, 36, 0.7));
}

.carousel-control-next,
.carousel-control-prev {
    width: 48px;
    height: 48px;
    border-radius: 48px;
    border: 1px solid var(--bs-white);
    background: var(--bs-primary);
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.carousel-control-next {
    margin-right: 20px;
}

.carousel-control-prev {
    margin-left: 20px;
}

.page-header {
    position: relative;
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../img/cart-page-header-img-5aea8fbd662c513c40bd2b596de4e150.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

@media (min-width: 992px) {
    .hero-header,
    .page-header {
        margin-top: 152px !important;
    }
}

@media (max-width: 992px) {
    .hero-header,
    .page-header {
        margin-top: 97px !important;
    }
}
/*** Hero Header end ***/


/*** featurs Start ***/
.featurs .featurs-item .featurs-icon {
    position: relative;
    width: 120px;
    height: 120px;
}

.featurs .featurs-item .featurs-icon::after {
    content: "";
    width: 35px;
    height: 35px;
    background: var(--bs-secondary);
    position: absolute;
    bottom: -10px;
    transform: translate(-50%);
    transform: rotate(45deg);
    background: var(--bs-secondary);
    
}
/*** featurs End ***/


/*** service Start ***/
.service .service-item .service-content {
    position: relative;
    width: 250px; 
    height: 130px; 
    top: -50%; 
    left: 50%; 
    transform: translate(-50%, -50%);
}

/*** service End ***/


/*** Fruits Start ***/
.fruite .tab-class .nav-item a.active {
    background: var(--bs-secondary) !important;
}

.fruite .tab-class .nav-item a.active span {
    color: var(--bs-white) !important; 
}

.fruite .fruite-categorie .fruite-name {
    line-height: 40px;
}

.fruite .fruite-categorie .fruite-name a {
    transition: 0.5s;
}

.fruite .fruite-categorie .fruite-name a:hover {
    color: var(--bs-secondary);
}

.fruite .fruite-item {
    height: 100%;
    transition: 0.5s;
}
.fruite .fruite-item:hover {
    box-shadow: 0 0 55px rgba(0, 0, 0, 0.4);
}

.fruite .fruite-item .fruite-img {
    overflow: hidden;
    transition: 0.5s;
    border-radius: 10px 10px 0 0;
}

.fruite .fruite-item .fruite-img img {
    transition: 0.5s;
}

.fruite .fruite-item .fruite-img img:hover {
    transform: scale(1.3);
}
/*** Fruits End ***/


/*** vesitable Start ***/
.vesitable .vesitable-item {
    height: 100%;
    transition: 0.5s;
}

.vesitable .vesitable-item:hover {
    box-shadow: 0 0 55px rgba(0, 0, 0, 0.4);
}

.vesitable .vesitable-item .vesitable-img {
    overflow: hidden;
    transition: 0.5s;
    border-radius: 10px 10px 0 0;
}

.vesitable .vesitable-item .vesitable-img img {
    transition: 0.5s;
}

.vesitable .vesitable-item .vesitable-img img:hover {
    transform: scale(1.2);
}

.vesitable .owl-stage {
    margin: 50px 0;
    position: relative;
}

.vesitable .owl-nav .owl-prev {
    position: absolute;
    top: -8px;
    right: 0;
    color: var(--bs-primary);
    padding: 5px 25px;
    border: 1px solid var(--bs-secondary);
    border-radius: 20px;
    transition: 0.5s;

}

.vesitable .owl-nav .owl-prev:hover {
    background: var(--bs-secondary);
    color: var(--bs-white);
}

.vesitable .owl-nav .owl-next {
    position: absolute;
    top: -8px;
    right: 88px;
    color: var(--bs-primary);
    padding: 5px 25px;
    border: 1px solid var(--bs-secondary);
    border-radius: 20px;
    transition: 0.5s;
}

.vesitable .owl-nav .owl-next:hover {
    background: var(--bs-secondary);
    color: var(--bs-white);
}
/*** vesitable End ***/


/*** Banner Section Start ***/
.banner .banner-btn:hover {
    background: var(--bs-primary);
}
/*** Banner Section End ***/


/*** Facts Start ***/
.counter {
    height: 100%;
    text-align: center;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
}

.counter i {
    font-size: 60px;
    margin-bottom: 25px;
}

.counter h4 {
    color: var(--bs-primary);
    letter-spacing: 1px;
    text-transform: uppercase;
}

.counter h1 {
    margin-bottom: 0;
}
/*** Facts End ***/


/*** testimonial Start ***/
.testimonial .owl-nav .owl-prev {
    position: absolute;
    top: -58px;
    right: 0;
    color: var(--bs-primary);
    padding: 5px 25px;
    border: 1px solid var(--bs-secondary);
    border-radius: 20px;
    transition: 0.5s;
}

.testimonial .owl-nav .owl-prev:hover {
    background: var(--bs-secondary);
    color: var(--bs-white);
}

.testimonial .owl-nav .owl-next {
    position: absolute;
    top: -58px;
    right: 88px;
    color: var(--bs-primary);
    padding: 5px 25px;
    border: 1px solid var(--bs-secondary);
    border-radius: 20px;
    transition: 0.5s;
}

.testimonial .owl-nav .owl-next:hover {
    background: var(--bs-secondary);
    color: var(--bs-white);
}
/*** testimonial End ***/


/*** Single Page Start ***/
.pagination {
    display: inline-block;
}
  
.pagination a {
    color: var(--bs-dark);
    padding: 10px 16px;
    text-decoration: none;
    transition: 0.5s;
    border: 1px solid var(--bs-secondary);
    margin: 0 4px;
}
  
.pagination a.active {
    background-color: var(--bs-primary);
    color: var(--bs-light);
    border: 1px solid var(--bs-secondary);
}
  
.pagination a:hover:not(.active) {background-color: var(--bs-primary)}

.nav.nav-tabs .nav-link.active {
    border-bottom: 2px solid var(--bs-secondary) !important;
}
/*** Single Page End ***/


/*** Footer Start ***/
.footer .footer-item .btn-link {
    line-height: 35px;
    color: rgba(255, 255, 255, .5);
    transition: 0.5s;
}

.footer .footer-item .btn-link:hover {
    color: var(--bs-secondary) !important;
}

.footer .footer-item p.mb-4 {
    line-height: 35px;
}
.card-img-fixed {
    width: 100%;
    height: 200px; /* Hauteur uniforme */
    object-fit: cover; /* Remplit le conteneur sans déformation */
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
.description {
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Nombre de lignes visibles avant "..." */
    -webkit-box-orient: vertical;
    overflow: hidden;
    position: relative;
}

.see-more {
    display: inline;
    color: green;
    cursor: pointer;
    font-weight: bold;
}
.card-img-fixed {
    width: 100%;
    height: 350px; /* Hauteur uniforme */
    object-fit: cover; /* Remplit le conteneur sans déformation */
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    transition: transform 0.3s ease-in-out; /* Animation fluide */
}

.card-img-fixed:hover {
    transform: scale(1.1); /* Zoom léger à 110% */
}

  

/*** Footer End ***/

";s:6:"digest";s:32:"56edf8083b69670455ac004035bd238c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:2:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:73:"C:\Users\DELL\Downloads\projet\Reaptn\assets\frontoffice\img\hero-img.jpg";s:10:"publicPath";s:69:"/assets/frontoffice/img/hero-img-bd9ab201f79ae6930c20bc044eb5e451.jpg";s:23:"publicPathWithoutDigest";s:36:"/assets/frontoffice/img/hero-img.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"bd9ab201f79ae6930c20bc044eb5e451";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:28:"frontoffice/img/hero-img.jpg";}i:1;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:85:"C:\Users\DELL\Downloads\projet\Reaptn\assets\frontoffice\img\cart-page-header-img.jpg";s:10:"publicPath";s:81:"/assets/frontoffice/img/cart-page-header-img-5aea8fbd662c513c40bd2b596de4e150.jpg";s:23:"publicPathWithoutDigest";s:48:"/assets/frontoffice/img/cart-page-header-img.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"5aea8fbd662c513c40bd2b596de4e150";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:40:"frontoffice/img/cart-page-header-img.jpg";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:25:"frontoffice/css/style.css";}