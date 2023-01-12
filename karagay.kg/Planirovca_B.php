 <?php
 $dbh = new PDO('mysql:host=176.126.165.65; port=3306; dbname=user105050_planirovka_a;', 'user105050_root', 'nJ9xZ9rK2u');
 $array = [];
 foreach($dbh->query('SELECT * from planirovka_b') as $row) {
     if ($query = $dbh->query("SELECT * FROM `planirovka_b`")){
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
  <!-- fontawesome//////////////////////////////////////////// -->
  <script src="https://kit.fontawesome.com/58a9a0347e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- fontawesome//////////////////////////////////////////// -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- gsap/////////////////////////////////// -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
  <!-- gsap/////////////////////////////////// -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/planirovka/Planirovka_B.css">
  <link rel="stylesheet" href="./css/hover.css">
  <link rel="stylesheet" href="./css/media.css">
  <link rel="stylesheet" href="./css/planirovka/Planirovca_ABS.css">
  <title>Блок Б</title>
  <link rel="icon" href="./images/logo-title.png" type="image/png"> <!-- font////////////////////////////////// -->
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
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

    .cvartira_info_item-5::after {
      position: absolute;
      content: '';
      z-index: 31;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
    }

    .cvartira_info_item_btn {
      display: none;
    }

    .admin_btn {
      display: none;
    }
    .follow-cursor h1{
        font-size: 1.2em;
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
    
<div class="follow-cursor" >
    <h1>
      Этаж
      <span data-abc-indicator_span="">9</span>
    </h1>
  </div>
  <div class="follow-cursor_1">
    <h1 data-indicator_span_room></h1>
    <h1><span data-indicator_span_square></span></h1>
  </div>
  <script>
    (function (w, d, u) {
      var s = d.createElement('script');
      s.async = true;
      s.src = u + '?' + (Date.now() / 60000 | 0);
      var h = d.getElementsByTagName('script')[0];
      h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn-ru.bitrix24.ru/b22501006/crm/site_button/loader_2_ovng6g.js');
  </script>
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
          <li class="nav__link"><a href="tel:+996 776 905 905" class="nav_link__a nav_link__icon"><i
                class="fa-solid fa-phone"></i> </a></li>
          <li class="btn-lang" data-lang-btn="2">kg</li>
        </div>
      </div>
      <div class="lang" data-kg data-lang="1">
        <div class="nav__center">
          <li class="nav__link"><a href="./index.html" class="nav_link__a">Башкы </a></li>
          <li class="nav__link"><a href="./about.html" class="nav_link__a">Биз жөнүндө</a></li>
          <li class="nav__link"><a href="#contact" class="nav_link__a">Байланыштар</a></li>
          <li class="nav__link"><a href="tel:+996 776 905 905" class="nav_link__a nav_link__icon"><i
                class="fa-solid fa-phone"></i> </a></li>
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
            <a href="tel:+996 776 905 905"><button class=""><i class="fa-solid fa-phone"></i> &nbsp; Связяться
                снами</button></a>
          </div>
        </div>
      </div>

      <div class="lang" data-kg data-lang="1">
        <div class="nav__contacts">
          <div class="nav__contacts_button">
            <a href="tel:+996 776 905 905"><button class=""><i class="fa-solid fa-phone"></i> &nbsp; Биз менен
                байланышуу</button></a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <section class="galavnoe1">
    <div class="lang" data-ru data-lang="0">
      <div class="roma__nav">
        <a href="./index.html" class="roma__nav_a">Главное</a>
        <a href="./about.html" class="roma__nav_a">о нас</a>
        <a href="#main_3" class="roma__nav_a">контакты</a>
        <li class="btn-lang" data-lang-btn="1">rg</li>
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
        <a href="./index.html" class="roma__nav_a">Башкы </a>
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
          </span><b id="glavnoe_block_h3__b_bbbbbb" class="glavnoe_block_h3__b">"Б"</b>
        </h3>
  </section>

  <div class="wrapper">
    <div class="content">
      <div class="left">
        <section class="Etaj">
          <div class="lang" data-kg data-lang="1">
            <div class="etadj__header">
              <p>Этажды тандаңыз</p>
            </div>
          </div>
          <div class="lang" data-ru data-lang="0">
            <div class="etadj__header">
              <p>Выберите этаж</p>
            </div>
          </div>
          <!-- <div class="indicator_etaj">
            <h5><span data-etaj-indicator></span><br>
              Этаж</h5>
          </div> -->
          <div class="Etaj_item">
            <img class="Etaj_item__img" src="./images/Planirovca_1/planirovca__etaj_B.png" alt="">
            <svg class="etaj_item_svg" width="697" height="447" viewBox="0 0 697 447" fill="none"xmlns="http://www.w3.org/2000/svg">
              <path data-abc-indicator="9" data-etaj="8" data-filter="et_9" class="etaj_item_path filter__btn"d="M42.701 19.2324H0.650391V87.7627H42.701L57.5559 81.3236H638.952L657.234 87.7627H697V17.6226H657.006V0.60498H515.999V7.73398H442.411V2.21475H341.626V8.65385H308.26V2.21475H255.468V8.65385H183.251V1.52485H42.701V19.2324Z"fill="#E5E5E5" fill-opacity="0.1" />
              <path data-abc-indicator="8" data-etaj="7" data-filter="et_8" class="etaj_item_path filter__btn"d="M43.0885 87.9909H0.650391V130.201H43.0885L57.919 125.638H638.362L656.159 129.745H696.772V87.9909H656.159L638.362 81.6024H57.919L43.0885 87.9909Z" fill="#E5E5E5" fill-opacity="0.1" />
              <path data-abc-indicator="7" data-etaj="6" data-filter="et_7" class="etaj_item_path filter__btn"  d="M43.0885 131.114H0.650391V173.323H43.0885L57.919 170.585H638.362L656.159 172.183H696.772V130.429H656.159L638.362 126.55H57.919L43.0885 131.114Z" fill="#E5E5E5" fill-opacity="0.1" />
              <path data-abc-indicator="6" data-etaj="5" data-filter="et_6" class="etaj_item_path filter__btn" d="M43.0885 174.008H0.650391V216.218H43.0885L57.919 215.305H638.362L656.159 214.62H696.772V172.867H656.159L638.362 171.27H57.919L43.0885 174.008Z" fill="#E5E5E5" fill-opacity="0.1" />
              <path data-abc-indicator="5" data-etaj="4" data-filter="et_5" class="etaj_item_path filter__btn"  d="M43.1024 217.073H0.650391V260.481H43.1024L57.9377 258.428H638.571L656.374 260.481H697V215.533H656.374L638.571 215.973H57.9377L43.1024 217.073Z"  fill="#E5E5E5" fill-opacity="0.1" />
              <path data-abc-indicator="4" data-etaj="3" data-filter="et_4" class="etaj_item_path filter__btn"d="M43.0885 261.394H0.650391V303.832H43.1024L57.9377 301.778H638.571L656.374 303.832H697V261.394L656.387 261.394L638.571 259.324H57.9377L43.0885 261.394Z" fill="#E5E5E5" fill-opacity="0.1" />
              <path data-abc-indicator="3" data-etaj="2" data-filter="et_3" class="etaj_item_path filter__btn" d="M43.0885 304.761H0.650391V347.199H43.1024L57.9377 345.145H638.571L656.374 347.199H697V304.761L656.387 304.761L638.571 302.691H57.9377L43.0885 304.761Z" fill="#E5E5E5" fill-opacity="0.1" />
              <path data-abc-indicator="2" data-etaj="1" data-filter="et_2" class="etaj_item_path filter__btn" d="M43.0885 348.112H0.650391V390.55H43.1024L57.9377 388.496H638.571L656.374 390.55H697V348.112L656.387 348.112L638.571 346.042H57.9377L43.0885 348.112Z" fill="#E5E5E5" fill-opacity="0.1" />
              <path data-abc-indicator="1" data-etaj="0" data-filter="et_1" class="etaj_item_path filter__btn" d="M43.0885 391.462H0.650391V446.661H57.9377H638.571H697V391.462L656.387 391.462L638.571 389.392H57.9377L43.0885 391.462Z" fill="#E5E5E5" fill-opacity="0.1" />
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
            <section class="Planirovca block et_1 anime">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="0" class="planirovca_item_path"d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="1" class="planirovca_item_path"d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="2" class="planirovca_item_path"d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="3" class="planirovca_item_path"d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z"fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="4" class="planirovca_item_path"d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z"fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="5" class="planirovca_item_path"d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="6" class="planirovca_item_path"d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z"fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="7" class="planirovca_item_path"d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="8" class="planirovca_item_path"d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="9" class="planirovca_item_path"d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="10" class="planirovca_item_path"d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
              </svg>
            </section>
            <section class="Planirovca block et_2">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="11" class="planirovca_item_path"d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="12" class="planirovca_item_path"d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="13" class="planirovca_item_path"d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="14" class="planirovca_item_path"d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z"fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="15" class="planirovca_item_path"d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z"fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="16" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="17" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="18" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="19" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="20" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="21" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
              </svg>
            </section>
            <section class="Planirovca block et_3 anime">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="22" class="planirovca_item_path"d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="23" class="planirovca_item_path"d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="24" class="planirovca_item_path"d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="25" class="planirovca_item_path"d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z"fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="26" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="27" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="28" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="29" class="planirovca_item_path"  d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z"  fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="30" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="31" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="32" class="planirovca_item_path"  d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z"  fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
              </svg>
            </section>
            <section class="Planirovca block et_4 anime">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="33" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="34" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="35" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="36" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="37" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="38" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="39" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="40" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="41" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="42" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="43" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
              </svg>
            </section>
            <section class="Planirovca block et_5 anime">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="44" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="45" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="46" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="47" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="48" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="49" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="50" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="51" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="52" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="53" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="54" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
              </svg>
            </section>
            <section class="Planirovca block et_6 anime">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="55" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="56" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="57" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="58" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="59" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="60" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="61" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="62" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="63" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="64" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="65" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
              </svg>
            </section>
            <section class="Planirovca block et_7 anime">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="66" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="67" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="68" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="69" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="70" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="71" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="72" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="73" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="74" class="planirovca_item_path"d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="75" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="76" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
              </svg>
            </section>
            <section class="Planirovca block et_8 anime">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="77" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="78" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="79" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="80" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="81" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="82" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="83" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="84" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="85" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="86" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="87" class="planirovca_item_path"d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z"fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
              </svg>
            </section>
            <section class="Planirovca block et_9 anime">
              <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
              <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path data-room="88" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="89" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="90" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="91" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="92" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="93" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="94" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05" />
                <path data-room="95" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="96" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="97" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
                <path data-room="98" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051" />
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
                <img src="./images/Planirovca_1/Cvartira_B/cvartira_3d/cvartira_3d-1.png" alt="">
                </a>
              </div>
            </div>
            <div class="cvartira_img">
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
                    <a href="#image_focus_1" id="button_a">
                      <img data-3d-room src="./images/Planirovca_1/Cvartira_B/cvartira_1.png" alt="">
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
                <span class="cvartira_info_item_span">1</span>
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
              <a target="_blank" href="https://www.facebook.com/profile.php?id=100081629928519"><i
                  class="fa-brands fa-facebook-f"></i></a>
              <a target="_blank" href="https://api.whatsapp.com/message/QDVP4TLWLY23J1?autoload=1&app_absent=0"><i
                  class="fa-brands fa-whatsapp"></i></a>
              <a target="_blank" href="https://www.instagram.com/karagay_kurulush/"><i
                  class="fa-brands fa-instagram"></i></a>
              <a target="_blank" href="https://youtube.com/channel/UCuzRSphmwd7dfu_j8pzsRDg"><i
                  class="fa-brands fa-youtube"></i></a>
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
            <iframe class="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966.0443267532014!2d72.80695382925364!3d40.556026017641244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45f6ab6d6896cec7!2zNDDCsDMzJzIxLjciTiA3MsKwNDgnMjcuMCJF!5e1!3m2!1sru!2skg!4v1660016822643!5m2!1sru!2skg"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
              <a target="_blank" href="https://www.facebook.com/profile.php?id=100081629928519"><i
                  class="fa-brands fa-facebook-f"></i></a>
              <a target="_blank" href="https://api.whatsapp.com/message/QDVP4TLWLY23J1?autoload=1&app_absent=0"><i
                  class="fa-brands fa-whatsapp"></i></a>
              <a target="_blank" href="https://www.instagram.com/karagay_kurulush/"><i
                  class="fa-brands fa-instagram"></i></a>
              <a target="_blank" href="https://youtube.com/channel/UCuzRSphmwd7dfu_j8pzsRDg"><i
                  class="fa-brands fa-youtube"></i></a>
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
            <iframe class="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966.0443267532014!2d72.80695382925364!3d40.556026017641244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45f6ab6d6896cec7!2zNDDCsDMzJzIxLjciTiA3MsKwNDgnMjcuMCJF!5e1!3m2!1sru!2skg!4v1660016822643!5m2!1sru!2skg"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="logo_ssb">
        <h3>Компания тарабынан <br> иштелип чыккан сайт:</h3>
        <img width="130px" src="images/logo_ssb.png" alt="">
      </div>
    </footer>
  </div>


  <script>
<!--var CV = [{"id":"1","room":"3","etaj":"1","bron":"0","sold":"0","square":"90.6","price":"4160000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"2","room":"2","etaj":"1","bron":"0","sold":"1","square":"72","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"3","room":"1","etaj":"1","bron":"0","sold":"0","square":"42.92","price":"2090000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"4","room":"1","etaj":"1","bron":"0","sold":"0","square":"42.92","price":"2090000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"5","room":"2","etaj":"1","bron":"0","sold":"1","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"6","room":"2","etaj":"1","bron":"0","sold":"1","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"7","room":"1","etaj":"1","bron":"0","sold":"0","square":"46.3","price":"2250000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"8","room":"3","etaj":"2","bron":"0","sold":"1","square":"90.6","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"9","room":"2","etaj":"2","bron":"1","sold":"0","square":"72","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"10","room":"1","etaj":"2","bron":"0","sold":"0","square":"42.92","price":"2150000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"11","room":"1","etaj":"2","bron":"0","sold":"0","square":"42.92","price":"2150000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"12","room":"2","etaj":"2","bron":"0","sold":"1","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"13","room":"2","etaj":"2","bron":"0","sold":"1","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"14","room":"1","etaj":"2","bron":"0","sold":"0","square":"46.3","price":"2300000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"15","room":"3","etaj":"3","bron":"0","sold":"1","square":"90.6","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"16","room":"2","etaj":"3","bron":"0","sold":"0","square":"72","price":"3500000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"17","room":"1","etaj":"3","bron":"1","sold":"0","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"18","room":"1","etaj":"3","bron":"1","sold":"0","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"19","room":"2","etaj":"3","bron":"1","sold":"0","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"20","room":"2","etaj":"3","bron":"1","sold":"0","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"21","room":"1","etaj":"3","bron":"0","sold":"1","square":"46.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"22","room":"3","etaj":"4","bron":"0","sold":"0","square":"90.6","price":"4300000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"23","room":"1","etaj":"4","bron":"0","sold":"0","square":"72","price":"3500000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"24","room":"1","etaj":"4","bron":"0","sold":"1","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"25","room":"1","etaj":"4","bron":"0","sold":"1","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png'","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"26","room":"2","etaj":"4","bron":"0","sold":"1","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"27","room":"2","etaj":"4","bron":"0","sold":"1","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"28","room":"1","etaj":"4","bron":"0","sold":"0","square":"46.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"29","room":"3","etaj":"5","bron":"0","sold":"1","square":"90.6","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"30","room":"2","etaj":"5","bron":"0","sold":"0","square":"72","price":"3500000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"31","room":"1","etaj":"5","bron":"0","sold":"0","square":"42.92","price":"2150000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"32","room":"1","etaj":"5","bron":"0","sold":"1","square":"42.92","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"33","room":"2","etaj":"5","bron":"1","sold":"0","square":"69","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"34","room":"2","etaj":"5","bron":"0","sold":"1","square":"65.3","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"35","room":"1","etaj":"5","bron":"0","sold":"0","square":"46.3","price":"2250000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"36","room":"3","etaj":"6","bron":"1","sold":"0","square":"90.6","price":"0","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"37","room":"2","etaj":"6","bron":"0","sold":"0","square":"72","price":"3400000","image":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":".\/images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"38","room":"1","etaj":"6","bron":"0","sold":"1","square":"42.92","price":"0","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"39","room":"1","etaj":"6","bron":"0","sold":"0","square":"42.92","price":"2100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"40","room":"2","etaj":"6","bron":"0","sold":"0","square":"69","price":"3250000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"41","room":"2","etaj":"6","bron":"1","sold":"0","square":"65.3","price":"0","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"42","room":"1","etaj":"6","bron":"1","sold":"0","square":"46.3","price":"0","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"43","room":"3","etaj":"7","bron":"0","sold":"0","square":"90.6","price":"4150000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"44","room":"2","etaj":"7","bron":"0","sold":"0","square":"72","price":"3400000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"45","room":"1","etaj":"7","bron":"0","sold":"0","square":"42.92","price":"2100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"46","room":"2","etaj":"7","bron":"0","sold":"0","square":"42.92","price":"2100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"47","room":"2","etaj":"7","bron":"0","sold":"0","square":"69","price":"3250000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"48","room":"2","etaj":"7","bron":"0","sold":"0","square":"65.3","price":"3500000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"49","room":"1","etaj":"7","bron":"1","sold":"0","square":"46.3","price":"0","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"50","room":"3","etaj":"8","bron":"0","sold":"0","square":"90.6","price":"3990000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"51","room":"2","etaj":"8","bron":"0","sold":"0","square":"72","price":"3250000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"52","room":"1","etaj":"8","bron":"0","sold":"0","square":"42.92","price":"2000000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"53","room":"1","etaj":"8","bron":"0","sold":"0","square":"42.92","price":"2000000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"54","room":"2","etaj":"8","bron":"0","sold":"0","square":"69","price":"3100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"55","room":"2","etaj":"8","bron":"0","sold":"0","square":"65.3","price":"2950000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"56","room":"1","etaj":"8","bron":"0","sold":"0","square":"46.3","price":"2200000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"},{"id":"57","room":"3","etaj":"9","bron":"0","sold":"0","square":"90.6","price":"3990000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_1.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-1.png"},{"id":"58","room":"2","etaj":"9","bron":"0","sold":"0","square":"72","price":"3250000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_2.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-2.png"},{"id":"59","room":"1","etaj":"9","bron":"0","sold":"0","square":"42.92","price":"1990000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_3.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-3.png"},{"id":"60","room":"1","etaj":"9","bron":"0","sold":"0","square":"42.92","price":"1990000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_4.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-4.png"},{"id":"61","room":"2","etaj":"9","bron":"0","sold":"0","square":"69","price":"3100000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_5.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-5.png"},{"id":"62","room":"2","etaj":"9","bron":"0","sold":"0","square":"65.3","price":"2950000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_6.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-6.png"},{"id":"63","room":"1","etaj":"9","bron":"0","sold":"0","square":"46.3","price":"2200000","image":"images\/Planirovca_1\/Cvartira_A\/cvartira_7.png","image3D":"images\/Planirovca_1\/Cvartira_A\/cvartira_3d\/cvartira_3d-7.png"}];-->

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

    // if (parseInt(valLower) < 16) {
    //   $('.easy-basket-lower4').val('12');
    //   data_input_2 =12
    // } 
    // else if (parseInt(valLower) < 19 ) {
    //   $('.easy-basket-lower4').val('15');
    //   data_input_2 =15
    // } 
    // else if (parseInt(valLower) < 21 ) {
    //   $('.easy-basket-lower4').val('20');
    //   data_input_2 =20
    // } 
    // else if (parseInt(valLower) < 24 ) {
    //   $('.easy-basket-lower4').val('24');
    //   data_input_2 =24
    // } 
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


document.addEventListener('DOMContentLoaded', () => {

const followCursor = () => { // объявляем функцию followCursor
  const el = document.querySelector('.follow-cursor') // ищем элемент, который будет следовать за курсором

  window.addEventListener('mousemove', e => { // при движении курсора
    const target = e.target // определяем, где находится курсор
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

})

  </script>
  <script src="./js/app.js"></script>
</body>

</html>

<!-- animate__animated -->