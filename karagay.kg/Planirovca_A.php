   <?php
  $dbh = new PDO('mysql:host=176.126.165.65; port=3306; dbname=user105050_planirovka_a;', 'user105050_root', 'nJ9xZ9rK2u');
  $array = [];

  foreach($dbh->query('SELECT * from planirovka_a') as $row) {
      if ($query = $dbh->query("SELECT * FROM `planirovka_a`")){
          $array = $query->fetchAll(PDO::FETCH_ASSOC);
      } else{
          print_r ($db->errorInfo);
      };
  }
?>   


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Турак жай комплекси Гапар Айтиев Сиз ойлогондон да жакшы">
    <meta name="keywords" content="квартира  ош  квартира  ктргизия  квартира  кыргызыстан квартира  цены квартира  стоимость квартира  прайс квартира  расчет квартира  сколько стоит квартира  калькулятор квартира  500 000 сом квартира  от 500 000  квартира  расрочка от 12 месяца квартира  расрочка до 24 месяца квартира  Karagay квартира  karagay kg  квартира  карагай курулуш квартира  карагай квартира  карагай кг квартира  квартира  квартира  квартира  квартира  квартира  квартира  квартира  купить квартира  заказать квартира  заказ квартира  установка квартира  рассрочка квартира  кредит квартира  производство квартира  изготовление квартира  ош квартира  Киргизия ипотека  ош  ипотека  ктргизия  ипотека  кыргызыстан ипотека  цены ипотека  стоимость ипотека  прайс ипотека  расчет ипотека  сколько стоит ипотека  калькулятор ипотека  500 000 сом ипотека  от 500 000  ипотека  расрочка от 12 месяца ипотека  расрочка до 24 месяца ипотека  Karagay ипотека  karagay kg  ипотека  карагай курулуш ипотека  карагай ипотека  карагай кг ипотека  ипотека  ипотека  ипотека  ипотека  ипотека  ипотека  ипотека  купить ипотека  заказать ипотека  заказ ипотека  установка ипотека  рассрочка ипотека  кредит ипотека  производство ипотека  изготовление ипотека  ош ипотека  Киргизия Жилой комплекс ош  Жилой комплекс ктргизия  Жилой комплекс кыргызыстан Жилой комплекс цены Жилой комплекс стоимость Жилой комплекс прайс Жилой комплекс расчет Жилой комплекс сколько стоит Жилой комплекс калькулятор Жилой комплекс 500 000 сом Жилой комплекс от 500 000  Жилой комплекс расрочка от 12 месяца Жилой комплекс расрочка до 24 месяца Жилой комплекс Karagay Жилой комплекс karagay kg  Жилой комплекс карагай курулуш Жилой комплекс карагай Жилой комплекс карагай кг Жилой комплекс Жилой комплекс Жилой комплекс Жилой комплекс Жилой комплекс Жилой комплекс Жилой комплекс Жилой комплекс купить Жилой комплекс заказать Жилой комплекс заказ Жилой комплекс установка Жилой комплекс рассрочка Жилой комплекс кредит Жилой комплекс производство Жилой комплекс изготовление Жилой комплекс ош Жилой комплекс Киргизия строительное компания ош  ош  строительное компания ош  ктргизия  строительное компания ош  кыргызыстан строительное компания ош  цены строительное компания ош  стоимость строительное компания ош  прайс строительное компания ош  расчет строительное компания ош  сколько стоит строительное компания ош  калькулятор строительное компания ош  500 000 сом строительное компания ош  от 500 000  строительное компания ош  расрочка от 12 месяца строительное компания ош  расрочка до 24 месяца строительное компания ош  Karagay строительное компания ош  karagay kg  строительное компания ош  карагай курулуш строительное компания ош  карагай строительное компания ош  карагай кг строительное компания ош  строительное компания ош  строительное компания ош  строительное компания ош  строительное компания ош  строительное компания ош  строительное компания ош  строительное компания ош  купить строительное компания ош  заказать строительное компания ош  заказ строительное компания ош  установка строительное компания ош  рассрочка строительное компания ош  кредит строительное компания ош  производство строительное компания ош  изготовление строительное компания ош  ош строительное компания ош  Киргизия Karagay ош  Karagay ктргизия  Karagay кыргызыстан Karagay цены Karagay стоимость Karagay прайс Karagay расчет Karagay сколько стоит Karagay калькулятор Karagay 500 000 сом Karagay от 500 000  Karagay расрочка от 12 месяца Karagay расрочка до 24 месяца Karagay Karagay Karagay karagay kg  Karagay карагай курулуш Karagay карагай Karagay карагай кг Karagay Karagay Karagay Karagay Karagay Karagay Karagay Karagay купить Karagay заказать Karagay заказ Karagay установка Karagay рассрочка Karagay кредит Karagay производство Karagay изготовление Karagay ош Karagay Киргизия ">
  <!-- fontawesome//////////////////////////////////////////// -->
  <script src="https://kit.fontawesome.com/58a9a0347e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- fontawesome//////////////////////////////////////////// -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- gsap/////////////////////////////////// -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
  <!-- gsap/////////////////////////////////// -->
  <link rel="stylesheet" href="./css/hover.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/media.css">
  <link rel="stylesheet" href="./css/planirovka/Planirovka_A.css">
  <link rel="stylesheet" href="./css/planirovka/Planirovca_ABS.css">
  <title>Блок А</title>
  <link rel="icon" href="./images/logo-title.png" type="image/png">

  <!-- font////////////////////////////////// -->
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- font////////////////////////////////// -->

  <style>
    .cvartira_info_item-5 input {
      outline: none;
      background: none;
      border: none;
    }

    .cvartira_info_item-5 {
      position: relative;
      z-index: 1;
    }

    .cvartira_info_item_btn {
      display: none;
    }

    .admin_btn {
      display: none;
    }
  </style>
</head>

<body>
  <div id="image_focus">
    <div class="none_js">
      <a class="close" href="#ll" id="button_a"><div class="image_focus_bg"></div></a>
      <img src="./images/Planirovca_1/Cvartira_A/cvartira_3d/cvartira_3d-1.png" alt="">
    </div>
  </div>

  <div id="image_focus_1">
    <div class="none_js_1">
      <a class="close" href="#ll" id="button_a"><div class="image_focus_bg"></div></a>
      <img src="./images/Planirovca_1/Cvartira_A/cvartira_1.png" alt="">
    </div>
  </div>
  
	<!-- <div id="image_focus">
		<p><strong>Howdy. </strong>I'm a dialog box</p>
		<div class="overlay"></div>
	</div> -->
	<!-- <div class="dark"></div > -->


  <div class="follow-cursor">
    <h1>
      Этаж
      <span data-abc-indicator_span></span>
    </h1>
  </div>

  <div class="follow-cursor_1">
    <h1 data-indicator_span_room></h1>
    <h1><span data-indicator_span_square></span></h1>
  </div>
  <script>
    (function(w, d, u) {
      var s = d.createElement('script');
      s.async = true;
      s.src = u + '?' + (Date.now() / 60000 | 0);
      var h = d.getElementsByTagName('script')[0];
      h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn-ru.bitrix24.ru/b22501006/crm/site_button/loader_2_ovng6g.js');
  </script>
    <div class="nav-">
      <div class="nav-">
        <nav class="nav">
          <div class="nav__logo">
            <a href="./index.html"><img src="./images/logo.png" alt=""></a>
          </div>
          <div class="lang" data-ru data-lang="0">
            <div class="nav__center">
              <li class="nav__link"><a href="./index.html" class="nav_link__a">Главное</a></li>
              <li class="nav__link"><a href="./about.html" class="nav_link__a">О нас</a></li>
              <li class="nav__link"><a href="#contact" class="nav_link__a">Контакты</a></li>
              <li class="nav__link"><a href="tel:+996 776 905 905" class="nav_link__a nav_link__icon"><i class="fa-solid fa-phone"></i> </a></li>
              <li class="btn-lang" data-lang-btn="2">kg</li>
            </div>
          </div>
          <div class="lang" data-kg data-lang="1">
            <div class="nav__center">
              <li class="nav__link"><a href="./index.html" class="nav_link__a">Башкы </a></li>
              <li class="nav__link"><a href="./about.html" class="nav_link__a">Биз жөнүндө</a></li>
              <li class="nav__link"><a href="#contact" class="nav_link__a">Байланыштар</a></li>
              <li class="nav__link"><a href="tel:+996 776 905 905" class="nav_link__a nav_link__icon"><i class="fa-solid fa-phone"></i> </a></li>
              <li class="btn-lang" data-lang-btn="1">ru</li>
            </div>
          </div>
          <div class="nav_2">
            <div class="menu">
              <button id="btn"><span></span><span></span><span></span></button>
            </div>
          </div>
          <div class="lang" data-ru data-lang="0">
            <div class="nav__contacts">
              <div class="nav__contacts_button">
                <a href="tel:+996 776 905 905"><button class=""><i class="fa-solid fa-phone"></i> &nbsp; Связяться снами</button></a>
              </div>
            </div>
          </div>

          <div class="lang" data-kg data-lang="1">
            <div class="nav__contacts">
              <div class="nav__contacts_button">
                <a href="tel:+996 776 905 905"><button class=""><i class="fa-solid fa-phone"></i> &nbsp; Биз менен байланышуу</button></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>


    <section class="galavnoe1">
      <div class="lang" data-ru data-lang="0">
        <div class="roma__nav">
          <a href="./index.html" class="roma__nav_a">Главное</a>
          <a href="./about.html" class="roma__nav_a">о нас</a>
          <a href="#main_3" class="roma__nav_a">контакты</a>
          <li class="btn-lang" data-lang-btn="1">Kg</li>
          <div class="roma__nav__icons">
            <div class="roma__nav__icon">
              <i class="fa-brands fa-facebook-f"></i>
            </div>
            <div class="roma__nav__icon">
              <i class="fa-brands fa-whatsapp"></i>
            </div>
            <div class="roma__nav__icon">
              <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="roma__nav__icon">
              <i class="fa-brands fa-youtube"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="lang" data-kg data-lang="1">
        <div class="roma__nav">
          <a href="./index.html" class="roma__nav_a">башкы </a>
          <a href="./about.html" class="roma__nav_a">Биз жөнүндө</a>
          <a href="#main_3" class="roma__nav_a">байланыштар</a>
          <li class="btn-lang" data-lang-btn="2">ru</li>
          <div class="roma__nav__icons">
            <div class="roma__nav__icon">
              <i class="fa-brands fa-facebook-f"></i>
            </div>
            <div class="roma__nav__icon">
              <i class="fa-brands fa-whatsapp"></i>
            </div>
            <div class="roma__nav__icon">
              <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="roma__nav__icon">
              <i class="fa-brands fa-youtube"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="glavnoe_content">
        <div class="glavnoe_block">
          <h3 class="glavnoe_block_h3">
            <span class="glavnoe_block_h3__span">Блок
            </span><b class="glavnoe_block_h3__b">"А"</b>
          </h3>
        </div>
      </div>
    </section>
  <div class="wrapper">
    <div class="content">
      <div class="left">
        <section class="Etaj">
          <div class="lang" data-kg data-lang="1">
            <div class="etadj__header etadj__header_gg">
              <p>Этажды тандаңыз</p>
            </div>
          </div>
          <div class="lang" data-ru data-lang="0">
            <div class="etadj__header etadj__header_gg">
              <p>Выберите этаж</p>
            </div>
          </div>

          <div class="Etaj_item">
            <img class="Etaj_item__img" src="./images/Planirovca_1/planirovca__etaj_A.png" alt="">
            <svg class="etaj_item_svg" width="411" height="483" viewBox="0 0 411 483" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path data-etaj="8" data-abc-indicator="9" data-filter="et_9" class="etaj_item_path filter__btn" d="M401.076 0.114868L410.471 8.54582V88.1439H0.79718V4.33034H15.6315V0.114868H74.7214L87.5778 7.058H113.29V0.114868H168.919L179.798 7.058H248.035V0.114868H401.076Z" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
              <rect data-etaj="7" data-abc-indicator="8" data-filter="et_8" class="etaj_item_path filter__btn" width="408.827" height="46.5538" transform="matrix(-1 0 0 1 410.471 88.1438)" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
              <rect data-etaj="6" data-abc-indicator="7" data-filter="et_7" class="etaj_item_path filter__btn" width="408.827" height="47.4002" transform="matrix(-1 0 0 1 410.471 134.698)" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
              <rect data-etaj="5" data-abc-indicator="6" data-filter="et_6" class="etaj_item_path filter__btn" width="408.827" height="46.5538" transform="matrix(-1 0 0 1 410.471 182.098)" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
              <rect data-etaj="4" data-abc-indicator="5" data-filter="et_5" class="etaj_item_path filter__btn" width="408.827" height="46.5538" transform="matrix(-1 0 0 1 410.471 228.652)" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
              <rect data-etaj="3" data-abc-indicator="4" data-filter="et_4" class="etaj_item_path filter__btn" width="408.827" height="49.0931" transform="matrix(-1 0 0 1 410.471 275.206)" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
              <rect data-etaj="2" data-abc-indicator="3" data-filter="et_3" class="etaj_item_path filter__btn" width="408.827" height="49.9395" transform="matrix(-1 0 0 1 410.471 324.299)" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
              <rect data-etaj="1" data-abc-indicator="2" data-filter="et_2" class="etaj_item_path filter__btn" width="408.827" height="49.0931" transform="matrix(-1 0 0 1 410.471 374.238)" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
              <rect data-etaj="0" data-abc-indicator="1" data-filter="et_1" class="etaj_item_path filter__btn" width="408.827" height="59.2503" transform="matrix(-1 0 0 1 410.471 423.331)" fill="#dddddd" opacity="0.11" fill-opacity="0.44" />
            </svg>


          </div>
        </section>


      </div>
      <div class="right">
        <div class="Cvartira_1">
          <div class="Planirovca-">
            <div class="lang" data-kg data-lang="1">
              <div class="etadj__header etadj__header_img">
                <p>Квартираны тандаңыз</p>
              </div>
            </div>
              <div class="lang" data-ru data-lang="0">
                <div class="etadj__header etadj__header_img">
                  <p>Выберите квартиру</p>
                </div>
              </div>
   
            <section class="Planirovca brends_block et_1 anime">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-room="0" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="1" class="planirovca_item_path sold" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="2" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="3" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="4" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="5" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="6" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
            <section class="Planirovca brends_block et_2">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-room="7" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="8" class="planirovca_item_path" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="9" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="10" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="11" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="12" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-room="13" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
            <section class="Planirovca brends_block et_3 anime">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-indicator_room="3" data-square="90.6"   data-room="14" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="72"     data-room="15" class="planirovca_item_path" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="16" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="17" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="69"     data-room="18" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="65.3"   data-room="19" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="46.3"   data-room="20" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
            <section class="Planirovca brends_block et_4 anime">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-indicator_room="3" data-square="90.6"   data-room="21" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="72"     data-room="22" class="planirovca_item_path" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="23" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="24" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="69"     data-room="25" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="65.3"   data-room="26" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="46.3"   data-room="27" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
            <section class="Planirovca brends_block et_5 anime">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-indicator_room="3" data-square="90.6"   data-room="28" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="72"     data-room="29" class="planirovca_item_path" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="30" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="31" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="69"     data-room="32" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="65.3"   data-room="33" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="46.3"   data-room="34" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
            <section class="Planirovca brends_block et_6 anime">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-indicator_room="3" data-square="90.6"   data-room="35" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="72"     data-room="36" class="planirovca_item_path" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="37" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="38" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="69"     data-room="39" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="65.3"   data-room="40" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="46.3"   data-room="41" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
            <section class="Planirovca brends_block et_7 anime">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-indicator_room="3" data-square="90.6"   data-room="42" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="72"     data-room="43" class="planirovca_item_path" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="44" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="45" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="69"     data-room="46" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="65.3"   data-room="47" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="46.3"   data-room="48" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
            <section class="Planirovca brends_block et_8 anime">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-indicator_room="3" data-square="90.6"   data-room="49" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="72"     data-room="50" class="planirovca_item_path" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="51" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="52" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="69"     data-room="53" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="65.3"   data-room="54" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="46.3"   data-room="55" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
            <section class="Planirovca brends_block et_9 anime">
              <img src="./images/Planirovca_1/Planirovca_color_A.png" alt="">
              <svg class="planirovca_item_svg" width="660" height="439" viewBox="0 0 660 439" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path data-indicator_room="3" data-square="90.6"   data-room="56" class="planirovca_item_path" opacity="0.1" d="M0.418213 237.448V223.591H82.6857V261.203H121.706V257.951H86.0665V223.591H139.456V260.916H149.458V223.591H183.548V241.266H214.821V289.624H251.447V321.862H217.638V313.378H214.398V321.862H209.468V324.973H258.208V432.718H189.605V406.277H190.732V394.541H189.605V298.532H190.873V286.372H179.181V295.138H138.329V298.532H146.781V305.46H186.506V354.242H180.308V394.541H179.181V406.277H181.435V437.384H123.679V408.539H134.244V400.055H118.466V294.148H115.367V432.718H92.9691H39.7206V406.277H45.4963V394.399H33.5224V400.338H0.277344V298.249H45.2145V297.118H85.6439V287.786H45.2145V286.654H33.6633V295.421H0.277344V271.242L0.418213 237.448Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="72"     data-room="57" class="planirovca_item_path" d="M44.932 35.4083H39.5621V9.21051H115.305V10.4781V146.538V147.523H118.838V146.538V41.6056H134.241V33.4364H123.501V4.28082H182.005V35.5491L179.32 35.69V47.0987H180.592V87.2404H182.146V135.833H146.959V142.735H138.763V145.974H179.461V154.566H190.766V145.974H225.105V189.637H212.245V195.13L190.201 195.271V188.229H183.842V217.384H149.503V180.059H139.611V217.384H86.3364V183.158H122.088V180.059H82.2384V217.384H0.277344V145.974H33.2031V154.848H45.0733V153.58H82.2384V160.2H85.3472V144.284H45.0733V142.735H0.277344V41.6056H33.2031V46.9578H44.932V35.4083Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="58" class="planirovca_item_path" opacity="0.1" d="M187.861 8.94667V35.5279H190.826V47.2632H189.555V87.7006H188.003V140.58H230.497V190.349H238.685V196.005H260.85V190.349H325.792V155.285H322.686V143.974H285.415V161.223H285.698V174.514H282.592V140.863H287.533V133.369H325.792V87.4178H324.098V46.9804H322.969V35.8107H325.792V4.28082H267.627V33.5484H277.933V41.3249H262.403V143.804H259.439V8.80528L187.861 8.94667Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="42.92"  data-room="59" class="planirovca_item_path" opacity="0.1" d="M469.241 8.76399V35.3913H466.276V47.1469H467.547V87.6544H469.1V140.626V143.175H467.547V140.626H426.605V190.481L407.123 190.056V196.005H384.676V190.481H331.31V155.356H334.416V144.025H371.687V161.304H371.405V174.618H374.511V140.909H369.569V133.402H331.31V87.3711H333.004V46.8637H334.134V35.6745H331.31V4.09005H389.476V33.4084H379.17V41.1983H394.699V143.855H397.664V8.62236L418.417 8.66342V0.832458H452.017V8.66342H469.241V8.76399Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="69"     data-room="60" class="planirovca_item_path" opacity="0.1" d="M475.03 8.72757V35.5146H478.125V47.0753H476.437V87.1148H475.03V142.944H476.437V135.895H510.197V142.944H518.356V145.764V146.046H510.057V145.623H478.125V154.787H466.028V146.328H432.689V189.751H445.49V195.25H467.434V187.777H473.483V217.384H507.384V190.879H489.097V187.777H507.384V179.882H517.653V217.384H570.966V183.125H534.955V179.882H574.764V217.384H656.491V124.053H659.586V73.1573H655.647V71.6065H624.419V129.692H622.168V142.944H623.294V154.787H611.759V153.518H571.669V144.213H611.759V142.944H613.166V116.158H616.401V46.7933H611.618V35.5146H616.401V8.72757H597.411V0.832458H563.791V8.72757H541.425V147.174H538.753V145.764V38.6162H522.576V35.5146H538.753V8.72757H525.952V0.832458H492.473V8.72757H475.03Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="2" data-square="65.3"   data-room="61" class="planirovca_item_path" opacity="0.1" d="M507.065 223.591H467.314H467.173V245.884H473.093V286.379H477.745V294.14H499.594V296.962H484.511V323.911H515.523V294.14H518.201V326.31H516.369V327.157H475.772V326.451H474.503V353.965H476.476V394.178H477.745V406.03H474.785V432.557H538.218V293.999H541.46V432.557H597.14H616.17V406.03H611.377V394.178H616.17V325.04H612.787V298.232H611.659V297.103H571.344V287.79H611.659V286.662H623.218V298.232V298.514H622.091V311.777H624.205V371.038H655.922V368.216H659.587V314.881H656.344V223.591H573.881V260.982H528.069V258.16H563.591V223.591H510.166V260.982H507.065V223.591Z" fill="#D9D9D9" fill-opacity="0.05" />
                <path data-indicator_room="1" data-square="46.3"   data-room="62" class="planirovca_item_path" opacity="0.1" d="M397.557 432.701H469.242V406.123H465.997V394.248H467.408V354.097H468.96V305.182H426.626V267.011H429.59V295.003H465.997V286.379H467.408V251.177H331.234V286.379H334.197V295.145H359.598V264.325H362.138V295.286H374.414V298.113H369.617V305.182H331.375V353.956H332.927V394.389H334.338V400.185V406.123H328.553V438.074H389.514V408.244H379.071V400.185H394.735V295.145H397.557V432.701Z" fill="#D9D9D9" fill-opacity="0.05" />
              </svg>
            </section>
          </div>
          <section class="Cvartira cvartira_2">

            <div class="Cvartira-3d">
              <div class="lang" data-kg data-lang="1">
                <div class="etadj__header etadj__header_img">
                  <p>Квартиранын 3Д планировкасы</p>
                </div>
                </div>
                <div class="lang" data-ru data-lang="0">
                  <div class="etadj__header etadj__header_img">
                    <p>3Д планировка квартиры</p>
                  </div>
                  </div>
              <div class="Cvartira_3d__img">

                <a href="#image_focus" id="button_a">
                  <img src="./images/Planirovca_1/Cvartira_A/cvartira_3d/cvartira_3d-1.png" alt="">
                </a>

              </div>
            </div>

            <div class="cvartira_img">
              <div class="lang" data-kg data-lang="1">
              <div class="etadj__header etadj__header_img">
                <p>Квартиранын 2Д планировкасы</p>
              </div>
              </div>
              <div class="lang" data-ru data-lang="0">
                <div class="etadj__header etadj__header_img">
                  <p>2Д планировка квартиры</p>
                </div>
                </div>
              <div class="Cvartira_3d__img">
                <a href="#image_focus_1" id="button_a">
              <img data-3d-room src="./images/Planirovca_1/Cvartira_A/cvartira_1.png" alt="">
            </a>
              </div>
            </div>
            <div class="cvartira_info">
              <div class="cvartira_info_item cvartira_info_item-1">
                <p class="cvartira_info_item_p">Комнаты</p>
                <span class="cvartira_info_item_span">3</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-2">
                <p class="cvartira_info_item_p">Этаж</p>
                <span class="cvartira_info_item_span">2</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-3">
                <p class="cvartira_info_item_p">Номер</p>
                <span class="cvartira_info_item_span">8</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-4">
                <p class="cvartira_info_item_p">Площадь, м
                <p class="cvartira_info_item_m2">&#178;</p>
                </p>
                <span class="cvartira_info_item_span">90.6</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-5">
                <p class="cvartira_info_item_p">Цена</p>
                <span class="cvartira_info_item_span cvartira_info_item_input disableInp">0</span>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>





<!-- kalculyator  -->
<div class="lang" data-ru data-lang="0">
  <section class="Calculator">
    <div class="calculator__headr">
      <p>ОНЛАЙН <span> КАЛЬКУЛЯТОР</span></p>
    </div>
    <div class="calculator__content calculator__content__ru">
      <div class="calculator__vibor_block calculator__vibor">
        <div class="calculator__vibor_item">
          <p class="calculator__content__p">На сколько месяцев вы хотите рассрочку ?</p>



          <div class="easy-basket-filter">
            <div class="easy-basket-filter-info">
              <p class="iLower"><input type="text" class="easy-basket-lower1 " value="12" min="12" max="24"></p>
            </div>
            <div class="easy-basket-filter-range">
              <input type="range" class="lower1 range" step="any" min="12" max="24" value="12"/>
              <div class="fill"></div>
            </div>
          </div>
        


        </div>
        <div class="calculator__vibor_item">
          <p class="calculator__content__p">Ваш первоначальный взнос ?</p>

          <div class="easy-basket-filter">
            <div class="easy-basket-filter-info">
              <p class="iLower"><input type="text" class="easy-basket-lower" value="30" min="30" max="100"></p>
            </div>
            <div class="easy-basket-filter-range">
              <input type="range" class="lower range" step="any" min="30" max="100" value="30"/>
              <div class="fill"></div>
            </div>
          </div>

        </div>
      </div>
      <hr>
      <div class="calculator__block calculator__otvet">
        <div class="calculator__otvet_item">
          <p class="calculator__content__p ">Стоимость квартиры, сом</p>
          <input class="summ-ru" disabled type="text" name="" id="">
        </div>
        <div class="calculator__otvet_item ">
          <p class="calculator__content__p">Первоначальный взнос, сом</p>
          <input class="sum-total-ru" disabled type="text" name="" id="">
        </div>
        <div class="calculator__otvet_item">
          <p class="calculator__content__p ">Ежемесячный платеж, сом</p>
          <input class="sum-month-ru" disabled type="text" name="" id="">
        </div>
      </div>
    </div>
  </section>
  <div class="calculator__content_button">
    <button data-raschet-btn-ru class="">Расчет</button>
  </div>
</div>
<div class="lang" data-kg data-lang="1">
  <section class="Calculator">
    <div class="calculator__headr">
      <p>ОНЛАЙН <span> КАЛЬКУЛЯТОР</span></p>
    </div>
    <div class="calculator__content">
      <div class="calculator__content_logo">
      </div>
      <div class="calculator__vibor_block calculator__vibor">
        <div class="calculator__vibor_item">
          <p class="calculator__content__p">Канча ай төлөгүңүз келет ?</p>

          <div class="easy-basket-filter">
            <div class="easy-basket-filter-info">
              <p class="iLower"><input type="text" class="easy-basket-lower4 " value="12" min="12" max="24"></p>
            </div>
            <div class="easy-basket-filter-range">
              <input type="range" class="lower4 range" step="any" min="12" max="24" value="12"/>
              <div class="fill"></div>
            </div>
          </div>

        </div>
        <div class="calculator__vibor_item">
          <p class="calculator__content__p">Сиздин баштапкы төлөм ?</p>

          <div class="easy-basket-filter">
            <div class="easy-basket-filter-info">
              <p class="iLower"><input type="text" class="easy-basket-lower3" value="30" min="30" max="100"></p>
            </div>
            <div class="easy-basket-filter-range">
              <input type="range" class="lower3 range" step="any" min="30" max="100" value="30"/>
              <div class="fill"></div>
            </div>
          </div>

        </div>
      </div>
      <hr>
      <div class="calculator__block calculator__otvet">
        <div class="calculator__otvet_item">
          <p class="calculator__content__p ">Квартира баасы, сом</p>
          <input class="summ-kg" disabled type="text" name="" id="">
        </div>
        <div class="calculator__otvet_item ">
          <p class="calculator__content__p">Баштапкы төлөм, сом</p>
          <input class="sum-total-kg" disabled type="text" name="" id="">
        </div>
        <div class="calculator__otvet_item">
          <p class="calculator__content__p ">Ай сайын төлөм, сом</p>
          <input class="sum-month-kg" disabled type="text" name="" id="">
        </div>
      </div>
    </div>
  </section>
  <div class="calculator__content_button">
    <button data-raschet-btn-kg class="">Эсептөө</button>
  </div>
</div>

  <section class="do-footer">
    <div class="do-footer__conten">
      <div class="do-footer__block">
        <div class="lang" data-ru data-lang="0">
          <script data-b24-form="inline/4/sgo86j" data-skip-moving="true">
            (function(w,d,u){
             var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
             var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn-ru.bitrix24.ru/b22501006/crm/form/loader_4.js');
           </script>
          </div>
          <div class="lang" data-kg data-lang="1">
           <script data-b24-form="inline/14/hnfupd" data-skip-moving="true">
            (function(w,d,u){
            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn-ru.bitrix24.ru/b22501006/crm/form/loader_14.js');
            </script>
          </div>
      </div>
    </div>
  </section>
  <!-- footer///////////////////////// -->
  <div class="lang" data-ru data-lang="0">
    <footer>
      <div class="footer_wrap">
        <div class="footer__content">
          <div class="ft_block">
            <h3>Меню</h3>
            <a href="./index.html">Главная</a>
            <a href="./about.html">О нас</a>
            <a href="#contact">Контакты</a>
          </div>
          <div class="ft_block">
            <h3>СОЦ СЕТИ</h3>
            <p>
              <a target="_blank" href="https://www.facebook.com/profile.php?id=100081629928519"><i class="fa-brands fa-facebook-f"></i></a>
              <a target="_blank" href="https://api.whatsapp.com/message/QDVP4TLWLY23J1?autoload=1&app_absent=0"><i class="fa-brands fa-whatsapp"></i></a>
              <a target="_blank" href="https://www.instagram.com/karagay_kurulush/"><i class="fa-brands fa-instagram"></i></a>
              <a target="_blank" href="https://youtube.com/channel/UCuzRSphmwd7dfu_j8pzsRDg"><i class="fa-brands fa-youtube"></i></a>
            </p>
          </div>
          <div class="ft_block">
            <h3>АДРЕС</h3>
            <p>Ош, ул. Авиценна, 10</p>
          </div>
          <div class="ft_block">
            <h3>КОНТАКТЫ</h3>
            <a href="tel:+996 776 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 776 905 905</a>
            <a href="tel:+996 556 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 556 905 905</a>
            <a href="tel:+996 706 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 706 905 905</a>
            <h3>EMAIL</h3>
            <a href=""><i class="fa-solid fa-envelope ft_i"></i> karagaykurulush@gmail.com</a>
          </div>
        </div>
        <a name="contact"></a>
        <div class="footer__content__down">
          <div class="footer__phone">
            <a href="https://www.instagram.com/karagay_kurulush/">
              <div id="footer__phone">
                <div>
                  <img class="footer__phone__fon" src="./images/phonefon.png" alt="">
                </div>
              </div>
              <img class="footer__phone__phone" src="./images/footer__phone.png" alt="">
            </a>
          </div>
          <div class="map__wrapper">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966.0443267532014!2d72.80695382925364!3d40.556026017641244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45f6ab6d6896cec7!2zNDDCsDMzJzIxLjciTiA3MsKwNDgnMjcuMCJF!5e1!3m2!1sru!2skg!4v1660016822643!5m2!1sru!2skg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="logo_ssb">
        <h3>Сайт разработан компанией:</h3>
        <img width="130px" src="images/logo_ssb.png" alt="">
      </div>
    </footer>
  </div>
  <div class="lang" data-kg data-lang="1">
    <footer>
      <div class="footer_wrap">
        <div class="footer__content">
          <div class="ft_block">
            <h3>Меню</h3>
            <a href="./index.html">Башкы</a>
            <a href="./about.html">Биз жөнүндө</a>
            <a href="#contact">Байланыштар</a>
          </div>
          <div class="ft_block">
            <h3>социалдык тармак</h3>
            <p>
              <a target="_blank" href="https://www.facebook.com/profile.php?id=100081629928519"><i class="fa-brands fa-facebook-f"></i></a>
              <a target="_blank" href="https://api.whatsapp.com/message/QDVP4TLWLY23J1?autoload=1&app_absent=0"><i class="fa-brands fa-whatsapp"></i></a>
              <a target="_blank" href="https://www.instagram.com/karagay_kurulush/"><i class="fa-brands fa-instagram"></i></a>
              <a target="_blank" href="https://youtube.com/channel/UCuzRSphmwd7dfu_j8pzsRDg"><i class="fa-brands fa-youtube"></i></a>
            </p>
          </div>
          <div class="ft_block">
            <h3>АДРЕС</h3>
            <p>Ош, ул. Авиценна, 10</p>
          </div>
          <div class="ft_block">
            <h3>Байланыштар</h3>
            <a href="tel:+996 776 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 776 905 905</a>
            <a href="tel:+996 556 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 556 905 905</a>
            <a href="tel:+996 706 905 905"><i class="fa-solid fa-phone  ft_i"></i>+996 706 905 905</a>
            <h3>EMAIL</h3>
            <a href=""><i class="fa-solid fa-envelope ft_i"></i> karagaykurulush@gmail.com</a>
          </div>
        </div>
        <a name="contact"></a>
        <div class="footer__content__down">
          <div class="footer__phone">
            <a href="https://www.instagram.com/karagay_kurulush/">
              <div id="footer__phone">
                <div>
                  <img class="footer__phone__fon" src="./images/phonefon.png" alt="">
                </div>
              </div>
              <img class="footer__phone__phone" src="./images/footer__phone.png" alt="">
            </a>
          </div>
          <div class="map__wrapper">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966.0443267532014!2d72.80695382925364!3d40.556026017641244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45f6ab6d6896cec7!2zNDDCsDMzJzIxLjciTiA3MsKwNDgnMjcuMCJF!5e1!3m2!1sru!2skg!4v1660016822643!5m2!1sru!2skg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="logo_ssb">
        <h3>Компания тарабынан <br> иштелип чыккан сайт:</h3>
        <img width="130px" src="images/logo_ssb.png" alt="">
      </div>
    </footer>
  </div>
  </div>



  <script>
    

     var CV = <?= json_encode($array); ?>;

     CV.forEach(CVs => {
       if (CVs.bron == true) {
         lll = CVs.id - 1
         ll = document.querySelector('[data-room="' + lll + '"]')
         ll.classList.add('bron')
       } else if (CVs.bron == false) {
         lll = CVs.id - 1
         ll = document.querySelector('[data-room="' + lll + '"]')
         ll.classList.remove('bron')
       }
       if (CVs.sold == true) {
         lll = CVs.id - 1
         ll = document.querySelector('[data-room="' + lll + '"]')
         ll.classList.add('sold')
       } else if (CVs.sold == false) {
         lll = CVs.id - 1
         ll = document.querySelector('[data-room="' + lll + '"]')
         ll.classList.remove('sold')
       }
     })
     let data_1 = 0
     window.addEventListener('click', function (event) {
       if (event.target.hasAttribute('data-room')) {
         data_1 = event.target.getAttribute('data-room')
          const infoCart = `
         <section class="Cvartira cvartira_2">
            <div class="Cvartira-3d">
              <div class="lang" data-kg data-lang="1">
                <div class="etadj__header etadj__header_img">
                  <p>Квартиранын 3Д планировкасы</p>
                </div>
                </div>
                <div class="lang" data-ru data-lang="0">
                  <div class="etadj__header etadj__header_img">
                    <p>3Д планировка квартиры</p>
                  </div>
                  </div>
              <div class="Cvartira_3d__img">
                <a href="#image_focus" id="button_a">
                  <img src="${CV[data_1].image3D}" alt="">
                </a>
              </div>
            </div>

            <div class="cvartira_img">
              <div class="lang" data-kg data-lang="1">
              <div class="etadj__header etadj__header_img">
                <p>Квартиранын 2Д планировкасы</p>
              </div>
              </div>
              <div class="lang" data-ru data-lang="0">
                <div class="etadj__header etadj__header_img">
                  <p>2Д планировка квартиры</p>
                </div>
                </div>
              <div class="Cvartira_3d__img">
                <a href="#image_focus_1" id="button_a">
                  <img data-3d-room src="${CV[data_1].image}" alt="">
                </a>
              </div>
            </div>
            <div class="cvartira_info">
              <div class="cvartira_info_item cvartira_info_item-1">
                <p class="cvartira_info_item_p">Комнаты</p>
                <span class="cvartira_info_item_span">${CV[data_1].room}</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-2">
                <p class="cvartira_info_item_p">Этаж</p>
                <span class="cvartira_info_item_span">${CV[data_1].etaj}</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-3">
                <p class="cvartira_info_item_p">Номер</p>
                <span class="cvartira_info_item_span">${CV[data_1].id}</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-4">
                <p class="cvartira_info_item_p">Площадь, м
                <p class="cvartira_info_item_m2">&#178;</p>
                </p>
                <span class="cvartira_info_item_span">${CV[data_1].square}</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-5">
                <p class="cvartira_info_item_p">Цена</p>
                <span class="cvartira_info_item_span cvartira_info_item_input disableInp">${CV[data_1].price}сом</span>
              </div>
            </div>
          </section>
         `
          const infoCart_1 = `    
            <div class="none_js">
              <a class="close" href="#ll" id="button_a"><div class="image_focus_bg"></div></a>
              <img src="${CV[data_1].image3D}" alt="">
            </div>
          `;
          const infoCart_2 = `
            <div class="none_js_1">
              <a class="close" href="#ll" id="button_a"><div class="image_focus_bg"></div></a>
              <img src="${CV[data_1].image}" alt="">
            </div>
          `;

         document.querySelector('.none_js').remove()
         document.querySelector('.none_js_1').remove()
         document.querySelector('.cvartira_2').remove()
         document.querySelector('#image_focus').insertAdjacentHTML("beforeend", infoCart_1);
         document.querySelector('#image_focus_1').insertAdjacentHTML("beforeend", infoCart_2);
         document.querySelector('.Cvartira_1').insertAdjacentHTML("beforeend", infoCart);
       }
       if (event.target.hasAttribute('data-bron')) {
         const data_2 = event.target.getAttribute('data-bron')
         const data_3 = document.querySelector('[data-room="' + data_2 + '"')
         CV[data_1].bron = true
         CV[data_1].sold = false
         data_3.classList.add('bron')
         data_3.classList.remove('sold')
       }
       if (event.target.hasAttribute('data-re_bron')) {
         const data_2 = event.target.getAttribute('data-re_bron')
         const data_3 = document.querySelector('[data-room="' + data_2 + '"')
         CV[data_1].bron = false
         data_3.classList.remove('bron')
       }
       if (event.target.hasAttribute('data-sold')) {
         const data_2 = event.target.getAttribute('data-sold')
         const data_3 = document.querySelector('[data-room="' + data_2 + '"');
         CV[data_1].bron = false
         CV[data_1].sold = true
         data_3.classList.remove('bron')
         data_3.classList.add('sold')
       }
       if (event.target.hasAttribute('data-re_sold')) {
         const data_2 = event.target.getAttribute('data-re_sold')
         const data_3 = document.querySelector('[data-room="' + data_2 + '"')
         CV[data_1].sold = false
         data_3.classList.remove('sold')
       }
       let sena_inputs = document.querySelectorAll('.cvartira_info_item_input')
       sena_inputs.forEach(sena_input => {
         sena_input = sena_input.value
         $('.cvartira_info_item_btn').on('click', function () {
           CV[data_1].price = sena_input
           console.log(CV[data_1].price)
         })
       });
       if (event.target.hasAttribute('data-raschet-btn-ru')) {
         function calculyator() {
           room = CV[data_1].room
           month = data_input_2;
           total = data_input_1;
           m = 0
           let p = CV[data_1].price / 100 * total;

           if (total == 30) {
             m = CV[data_1].price / 100 * 70 / month
           } else if (total == 50) {
             m = CV[data_1].price / 100 * 50 / month
           } else if (total == 70) {
             m = CV[data_1].price / 100 * 30 / month
           }


           document.querySelector('.summ-ru').value = CV[data_1].price
           document.querySelector('.sum-total-ru').value = p
           document.querySelector('.sum-month-ru').value = Math.floor(m)
         }
         calculyator()
       }

       if (event.target.hasAttribute('data-raschet-btn-kg')) {
         function calculyatorKg() {
           room = CV[data_1].room
           month = data_input_2;
           total = data_input_1;
           m = 0
           let p = CV[data_1].price / 100 * total;

           if (total == 30) {
             m = CV[data_1].price / 100 * 70 / month
           } else if (total == 50) {
             m = CV[data_1].price / 100 * 50 / month
           } else if (total == 70) {
             m = CV[data_1].price / 100 * 30 / month
           }


           document.querySelector('.summ-kg').value = CV[data_1].price
           document.querySelector('.sum-total-kg').value = p
           document.querySelector('.sum-month-kg').value = Math.floor(m)
         }
         calculyatorKg()
       }

     });

     function appp() {
       const buttons = document.querySelectorAll('.filter__btn');
       const brends = document.querySelectorAll('.Planirovca');

       function filter(category, items) {
         items.forEach((item) => {
           const isItemFiltred = !item.classList.contains(category);
           const isShowAll = category.toLowerCase() === 'all'
           if (isItemFiltred && !isShowAll) {
             item.classList.add('anime')
           } else {
             item.classList.remove('brends_block-head')
             item.classList.remove('anime')
           }

         })
       }
       buttons.forEach((button) => {
         button.addEventListener('click', () => {
           const carrentCategory = button.dataset.filter;
           filter(carrentCategory, brends)

         })
       });
       brends.forEach((brend) => {
         brend.ontransitionend = function () {
           if (brend.classList.contains('anime')) {
             brend.classList.add('brends_block-head')
           }
         }
       })


     }


     appp()

var data_input_1=30, data_input_2=12;

jQuery(document).ready(function() {
  $('.upper').on('input', setFill);
  $('.lower3').on('input', setFill);

  var max = $('.upper').attr('max');
  var min = $('.lower3').attr('min');

  function setFill(evt) {
    var valUpper = $('.upper').val();
    var valLower = $('.lower3').val();
    if (parseFloat(valLower) > parseFloat(valUpper)) {
      var trade = valLower;
      valLower = valUpper;
      valUpper = trade;
    }
    
    var width = valUpper * 100 / max;
    var left = valLower * 100 / max;
    $('.fill').css('left', 'calc(' + left + '%)');
    $('.fill').css('width', width - left + '%');
    

    if (parseInt(valLower) < 47) {
      $('.easy-basket-lower3').val('30%');
      data_input_1 = 30
    } 
    else if (parseInt(valLower) < 65 ) {
      $('.easy-basket-lower3').val('50%');
      data_input_1 = 50
    } 
    
    else if (parseInt(valLower) < 82 ) {
      $('.easy-basket-lower3').val('70%');
      data_input_1 = 70
    } 
    
    else if (parseInt(valLower) < 100 ) {
      $('.easy-basket-lower3').val('100%');
      data_input_1 = 100
    } 
  }
});

jQuery(document).ready(function() {
  $('.upper').on('input', setFill);
  $('.lower4').on('input', setFill);

  var max = $('.upper').attr('max');
  var min = $('.lower4').attr('min');

  function setFill(evt) {
    var valUpper = $('.upper').val();
    var valLower = $('.lower4').val();
    if (parseFloat(valLower) > parseFloat(valUpper)) {
      var trade = valLower;
      valLower = valUpper;
      valUpper = trade;
    }
    
    var width = valUpper * 100 / max;
    var left = valLower * 100 / max;
    $('.fill').css('left', 'calc(' + left + '%)');
    $('.fill').css('width', width - left + '%');
    

    $('.easy-basket-lower4').val(parseInt(valLower));
    data_input_2 =parseInt(valLower)
  }
});
jQuery(document).ready(function() {
$('.upper').on('input', setFill);
$('.lower').on('input', setFill);

var max = $('.upper').attr('max');
var min = $('.lower').attr('min');

function setFill(evt) {
var valUpper = $('.upper').val();
var valLower = $('.lower').val();
if (parseFloat(valLower) > parseFloat(valUpper)) {
 var trade = valLower;
 valLower = valUpper;
 valUpper = trade;
}

var width = valUpper * 100 / max;
var left = valLower * 100 / max;
$('.fill').css('left', 'calc(' + left + '%)');
$('.fill').css('width', width - left + '%');


if (parseInt(valLower) < 47) {
 $('.easy-basket-lower').val('30%');
 data_input_1 = 30
} 
else if (parseInt(valLower) < 65 ) {
 $('.easy-basket-lower').val('50%');
 data_input_1 = 50
} 

else if (parseInt(valLower) < 82 ) {
 $('.easy-basket-lower').val('70%');
 data_input_1 = 70
} 

else if (parseInt(valLower) < 100 ) {
 $('.easy-basket-lower').val('100%');
 data_input_1 = 100
} 
}
});

jQuery(document).ready(function() {
$('.upper').on('input', setFill);
$('.lower1').on('input', setFill);

var max = $('.upper').attr('max');
var min = $('.lower1').attr('min');

function setFill(evt) {
var valUpper = $('.upper').val();
var valLower = $('.lower1').val();
if (parseFloat(valLower) > parseFloat(valUpper)) {
 var trade = valLower;
 valLower = valUpper;
 valUpper = trade;
}
var width = valUpper * 100 / max;
var left = valLower * 100 / max;
$('.fill').css('left', 'calc(' + left + '%)');
$('.fill').css('width', width - left + '%');

$('.easy-basket-lower1').val(parseInt(valLower));
data_input_2 =parseInt(valLower)}
});

const followCursor = () => { 
  const el = document.querySelector('.follow-cursor') 
  window.addEventListener('mousemove', e => {
    const target = e.target
    if (!target) return


    if(e.target.hasAttribute('data-abc-indicator')){
      let data_4=e.target.getAttribute('data-abc-indicator')
      let data_5 = document.querySelector('[data-abc-indicator_span]')
      data_5.innerHTML=data_4
      el.classList.add('follow-cursor_active') 
    }
     else {
      el.classList.remove('follow-cursor_active')
    }
    el.style.left = e.pageX + 'px' 
    el.style.top = e.pageY + 'px' 
  })

  const el1 = document.querySelector('.follow-cursor_1') 
  window.addEventListener('mousemove', e => {
    const target = e.target
    if (!target) return
    var data_10 = e.target.getAttribute('data-room')

    if(e.target.hasAttribute('data-room')){
      let data_4_room = CV[data_10].room;
      let data_4_square=CV[data_10].square;
      let data_5 = document.querySelector('[data-indicator_span_room]')
      let data_6 = document.querySelector('[data-indicator_span_square]')
      data_5.innerHTML=data_4_room
      data_6.innerHTML=data_4_square+'&#178;'
      el1.classList.add('follow-cursor_active') 
    }
     else {
      el1.classList.remove('follow-cursor_active')
    }
    el1.style.left = e.pageX + 'px' 
    el1.style.top = e.pageY + 'px' 
  })
}

followCursor() // вызываем функцию followCursor


  </script>
  <script src="./js/app.js"></script>
</body>

</html>
