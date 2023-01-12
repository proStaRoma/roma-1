<?php
  // $dbh = new PDO('mysql:host=176.126.165.65; port=3306; dbname=user105050_planirovka_a;', 'user105050_root', 'eAdiIwYV70ON');
  // $array = [];
  // foreach($dbh->query('SELECT * from planirovka_c') as $row) {
  //   if ($query = $dbh->query("SELECT * FROM `planirovka_c`")){
  //       $array = $query->fetchAll(PDO::FETCH_ASSOC);
  //   } else{
  //       print_r ($db->errorInfo);
  //   };
  // }
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- gsap/////////////////////////////////// -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
  <!-- gsap/////////////////////////////////// -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/planirovka/Planirovka_С.css">
  <link rel="stylesheet" href="./css/hover.css">
  <link rel="stylesheet" href="./css/media.css">
  <link rel="stylesheet" href="./css/planirovka/Planirovca_ABS.css">
  <title>Блок В</title>
  <link rel="icon" href="./images/logo-title.png" type="image/png"> <!-- font////////////////////////////////// -->
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
  </style>
</head>

<body>
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
          <li class="btn-lang" data-lang-btn="1">kg</li>
        </div>
      </div>
      <div class="lang" data-kg data-lang="1">
        <div class="nav__center">
          <li class="nav__link"><a href="./index.html" class="nav_link__a">Башкы </a></li>
          <li class="nav__link"><a href="./about.html" class="nav_link__a">Биз жөнүндө</a></li>
          <li class="nav__link"><a href="#contact" class="nav_link__a">Байланыштар</a></li>
          <li class="nav__link"><a href="tel:+996 776 905 905" class="nav_link__a nav_link__icon"><i class="fa-solid fa-phone"></i> </a></li>
          <li class="btn-lang" data-lang-btn="2">ru</li>
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
  <section class="galavnoe1">
    <div class="lang" data-ru data-lang="0">
      <div class="roma__nav">
        <a href="./index.html" class="roma__nav_a">Главное</a>
        <a href="./about.html" class="roma__nav_a">о нас</a>
        <a href="#main_3" class="roma__nav_a">контакты</a>
        <li class="btn-lang" data-lang-btn="1">kg</li>
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
          </span><b class="glavnoe_block_h3__b">"В"</b>
        </h3>
  </section>
  <!-- <div class="wrapper">
        <div class="content">
            <div class="left">
                <section class="Etaj">
                  <div class="etadj__header">
                    <p>Выберите этаж</p>
                  </div>
                    <div class="indicator_etaj">
                      <h5><span data-etaj-indicator></span><br> Этаж</h5>
                    </div>
                    <div class="Etaj_item">
                        <img class="Etaj_item__img" src="./images/Planirovca_1/planirovca__etaj_C.png" alt="">         
                        <svg class="etaj_item_svg" width="596" height="415" viewBox="0 0 596 415" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path data-etaj="8" data-filter="et_9" class="etaj_item_path filter__btn" d="M460.025 2.02561H595.01V78.9384H0.455994V0.739442L138.771 0.224976V8.71368H203.155L209.593 0.739442H306.835V9.22814H331.257V8.19921L339.916 0.482209H389.869V8.97091H449.813L460.025 2.02561Z" fill="#DADADA" fill-opacity="0.01"/>
                          <path data-etaj="7" data-filter="et_8" class="etaj_item_path filter__btn" d="M0.456421 78.9384H595.774V120.206H0.456421V78.9384Z" fill="#DADADA" fill-opacity="0.01"/>
                          <path data-etaj="6" data-filter="et_7" class="etaj_item_path filter__btn" d="M0.456421 120.97H595.774V163.001H0.456421V120.97Z" fill="#DADADA" fill-opacity="0.01"/>
                          <path data-etaj="5" data-filter="et_6" class="etaj_item_path filter__btn" d="M0.456421 162.237H595.774V204.269H0.456421V162.237Z" fill="#DADADA" fill-opacity="0.01"/>
                          <path data-etaj="4" data-filter="et_5" class="etaj_item_path filter__btn" d="M0.456421 205.033H595.774V246.3H0.456421V205.033Z" fill="#DADADA" fill-opacity="0.01"/>
                          <path data-etaj="3" data-filter="et_4" class="etaj_item_path filter__btn" d="M0.456421 246.3H595.774V288.331H0.456421V246.3Z" fill="#DADADA" fill-opacity="0.01"/>
                          <path data-etaj="2" data-filter="et_3" class="etaj_item_path filter__btn" d="M0.456421 288.331H595.774V330.363H0.456421V288.331Z" fill="#DADADA" fill-opacity="0.01"/>
                          <path data-etaj="1" data-filter="et_2" class="etaj_item_path filter__btn" d="M0.456421 330.363H595.774V372.394H0.456421V330.363Z" fill="#DADADA" fill-opacity="0.01"/>
                          <path data-etaj="0" data-filter="et_1" class="etaj_item_path filter__btn" d="M0.456421 372.394H595.774V414.426H0.456421V372.394Z" fill="#DADADA" fill-opacity="0.01"/>
                          </svg>
                                                                               
                    </div>
                </section>
                <div class="Planirovca-">
                  <div class="etadj__header">
                    <p>Выберите квартиру</p>
                  </div>
                    <section class="Planirovca block et_1 anime">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="0" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="1" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="2" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="3" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="4" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="5" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="6" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="7" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="8" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="9" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="10" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>
                    <section class="Planirovca block et_2">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="11" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="12" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="13" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="14" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="15" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="16" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="17" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="18" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="19" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="20" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="21" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>
                    <section class="Planirovca block et_3 anime">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="22" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="23" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="24" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="25" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="26" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="27" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="28" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="29" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="30" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="31" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="32" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>
                    <section class="Planirovca block et_4 anime">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="33" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="34" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="35" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="36" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="37" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="38" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="39" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="40" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="41" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="42" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="43" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>
                    <section class="Planirovca block et_5 anime">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="44" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="45" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="46" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="47" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="48" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="49" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="50" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="51" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="52" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="53" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="54" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>
                    <section class="Planirovca block et_6 anime">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="55" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="56" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="57" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="58" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="59" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="60" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="61" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="62" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="63" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="64" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="65" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>
                    <section class="Planirovca block et_7 anime">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="66" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="67" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="68" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="69" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="70" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="71" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="72" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="73" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="74" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="75" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="76" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>
                    <section class="Planirovca block et_8 anime">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="77" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="78" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="79" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="80" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="81" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="82" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="83" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="84" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="85" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="86" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="87" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>
                    <section class="Planirovca block et_9 anime">
                        <img src="./images/Planirovca_1/Planirovca_color_B.png" alt="">
                        <svg class="planirovca_item_svg" width="672" height="264" viewBox="0 0 672 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-room="88" class="planirovca_item_path" d="M20.6794 187.487H0.512695V134.885H51.4229V157.872H79.6281V156.179H57.4871V134.885H90.6281V157.872H92.3204V134.885H113.474V146.308H132.513V175.5H159.449V192.564H134.205V185.372H132.513V196.936H128.987V198.769H159.449V263.359H117V247H117.846V239.667H117V180.859H117.705V173.667H110.513V180.859H114.884V223.167H111.218V239.667H110.372V247H115.026V263.359H67.0768V180.154H91.8973V178.461H65.2435V245.026H55.5127V247.141H65.2435V263.359H25.3332V246.859H28.0127V239.949H27.4486V223.167H25.3332V180.577H28.0127V180.154H52.8332V174.231H28.0127V173.667H20.9614V180.577H21.8076V187.487H20.6794Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="89" class="planirovca_item_path" d="M71.3076 3.02563H25.3332L25.4742 19.3846H28.2947V26.7179H27.7306V43.0769H25.4742V48.7179H26.1794V85.2436H28.2947V86.0897H53.1152V96.3846H50.8588V91.8718H28.2947V92.859H20.6794V85.2436H21.5255V78.7564H0.512695V131.5H51.1409V108.231H75.8204V110.346H53.3973V131.5H113.333V113.167H116.859V114.013H130.397H138.154V87.5H117.987V92.859H110.372V87.5H85.1281V85.2436H91.8973V80.5897H112.346V42.9359H111.359V26.5769H110.795V19.2436H112.346V3.02563H73.4229V88.0641H71.3076V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="90" class="planirovca_item_path" d="M159.73 3.02568H115.73V19.2436H117.846V26.577H117.141V43.218H115.871V84.0439H141.961V114.295H160.859V110.346H200.628V92.78H198.513V85.6667H175.874V100.528H174.115V83.9744H177.077V79.3205H200.346V26.577H198.654V19.2436H200.628V0.346191H164.948V17.8334H171.295V23.1923H161.705V85.9488H159.73V3.02568Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="91" class="planirovca_item_path" d="M204.013 0.346191H240.115V17.9744H233.346V23.0513H243.077V99.4872H244.91V2.88465H290.038V97.6539H262.82V120.641H264.654V103.859H290.038V131.359H204.013V97.0898H222.346V92.5769L228.974 92.718V100.333H230.667V90.7436H222.346V86.2308H205.846V85.1026H204.013V0.346191Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="92" class="planirovca_item_path" d="M290.038 135.026V162.526H264.795V145.885H262.961V168.59H290.038V263.5H279.32H244.91V167.038H243.218V243.474H205.846V239.667H204.013V180.577H205.705V180.013H222.346V175.5H230.808V166.192H229.115V173.808H222.346V169.295H204.013V156.321H230.808V154.628H204.013V135.026H290.038Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="93" class="planirovca_item_path" d="M427.256 263.218H382.974V185.231L409.204 184.949V162.103H407.653V183.256H382.974V151.949H461.666V174.09H449.397V178.885H445.307V161.821H443.474V178.885H441.499V180.577H448.833V185.231H467.871V243.192H428.807V178.885H427.256V263.218Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="94" class="planirovca_item_path" d="M343.488 0.487183H379.591V85.2436H377.757V90.8846H361.257V95.1154H355.475V97.2308H361.257H379.591V135.167V154.769V169.436H361.257L352.373 169.295V171.269H373.527V175.641H377.899V180.718H379.591V239.808H377.757V243.615H340.386V169.621H338.693V263.641H304.283H293.565V168.731H320.642V147.859H318.809V162.667H293.565V104H318.95V124.308H320.783V97.7949H293.565V3.02564H338.693L338.552 23.1923H341.796V99.6282H343.488V23.1923H350.257V18.1154H343.488V0.487183Z" fill="#DDDDDD" fill-opacity="0.05"/>
                            <path data-room="95" class="planirovca_item_path" d="M427.116 3.02563H382.834V81.0128L409.065 81.2949V104.141H407.513V82.9872H382.834V114.295H461.526V92.1538H449.257V87.359H445.167V104.423H443.334V87.359H441.36V85.6667H448.693V79.3205H467.731V23.0513H428.667V87.359H427.116V3.02563Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="96" class="planirovca_item_path" d="M471.114 26.5771H473.089V22.9104H509.896V85.8078H511.73V2.88477H555.871V19.1027H553.755V26.7181H554.742V43.2181H555.73V83.8335H529.64V114.295H471.114V92.7181H473.23V86.0899H495.935V104.705H497.627V83.9745H494.666V79.4617H471.114V26.5771Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="97" class="planirovca_item_path" d="M598.602 2.88477H559.256L559.538 81.154H580.974V85.3848H585.91V87.3591H559.538H533.166V114.154H558.41V131.359H620.461H671.371V78.6155H651.628V77.4873H649.794V85.3848H650.781V92.8591H643.448V92.013H618.769V86.2309H643.448V85.3848H646.551V2.88477H600.435V88.0642H598.602V2.88477Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                            <path data-room="98" class="planirovca_item_path" d="M558.27 146.167V134.885H670.95V187.769H650.783V174.372H618.77V180.154H643.309V181H646.552V263.218H556.437V247.141H561.373V239.667H560.527V223.026H556.437V181H561.373V173.385H553.898V181H554.604V239.667H553.898V247.141H554.745V263.218H512.296V197.5H542.757V195.243H539.373V184.667H537.681V195.243H516.527V175.359H539.373V146.167H558.27Z" fill="#DDDDDD" fill-opacity="0.05" stroke="black" stroke-width="0.282051"/>
                        </svg>                                                                                       
                    </section>

                      <div class="Planirovca_indicator"> 
                      <div class="Planirovca_indicator_top"> 
                        <div class="Planirovca_indicator_red"></div> 
                        <p>Куплено</p> 
                      </div> 
                      <div class="Planirovca_indicator_top"> 
                        <div class="Planirovca_indicator_yellow"></div> 
                        <p>Забронировано</p> 
                      </div> 
                      <div class="Planirovca_indicator_top"> 
                        <div class="Planirovca_indicator_blue"></div> 
                        <p>Свободно</p> 
                      </div> 
                    </div>
                      <button class="user_bron">Забронировать</button>
                </div>
            </div>
            <div class="right">
              <div class="Cvartira_1">
                <section class="Cvartira cvartira_2">
                  <div class="Cvartira-3d">
                          <div class="etadj__header">
                            <p>3д планировка квартиры</p>
                          </div>
                            <div class="Cvartira_3d__img">
                                <img src="./images/Planirovca_1/Cvartira_C/cvartira_3d/cvartira_3d-1.png">
                            </div>
                        </div>
                        <div class="cvartira_img">
                          <div class="etadj__header">
                            <p>2д планировка квартиры</p>
                          </div>
                            <img data-3d-room src="./images/Planirovca_1/Cvartira_C/cvartira_1.png" alt="">
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
                                <p class="cvartira_info_item_p">Площадь, м<p class="cvartira_info_item_m2">2</p></p>
                                <span class="cvartira_info_item_span">90.6</span>
                            </div>
                            <div class="cvartira_info_item cvartira_info_item-5">
                              <div class="lang" data-ru data-lang="0">
                                <p class="cvartira_info_item_p">Цена</p>
                                <input class="cvartira_info_item_span cvartira_info_item_input disableInp" type="text" name="" id="cvartira_info_item_input" value="550000"><span class="cvartira_info_item-5__span">сом</span>
                              </div>
                              <div class="lang" data-kg data-lang="1">
                                <p class="cvartira_info_item_p">Баасы</p>
                                <input class="cvartira_info_item_span cvartira_info_item_input disableInp" type="text" name="" id="cvartira_info_item_input" value="550000"><span class="cvartira_info_item-5__span">сом</span>
                              </div>
                            </div>
                          </div>
                    </section>
                </div>
            </div>
        </div>
    </div> -->

  <div class="gg">
    <h1>Ждите скоро....</h1>
  </div>






  <!-- kalculyator  -->

  <!-- <div class="lang" data-ru data-lang="0">
 <section class="Calculator">
  <div class="calculator__headr">
    <p>ОНЛАЙН <span> КАЛЬКУЛЯТОР</span></p>
  </div>
  <div class="calculator__content">
    <div class="calculator__content_logo">
    </div>
    <div class="calculator__vibor_block calculator__vibor">
      <div class="calculator__vibor_item">
        <p class="calculator__content__p">На сколько месяцев вы хотите рассрочку ?</p>
        <select class="calculator__vibor_item__select month-ru "  name="" id="">
          <option value="12">12-месяца</option>
          <option value="24">24-месяца</option>
        </select>
      </div>
      <div class="calculator__vibor_item">
        <p class="calculator__content__p">Ваш первоначальный взнос ?</p>
        <select class="calculator__vibor_item__select total-ru"  name="" id="">
          <option value="30">30%</option>
          <option value="50">50%</option>
          <option value="70">70%</option>
        </select>
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
    <div class="calculator__content_button">
      <button data-raschet-btn-ru class="btns_anim">Расчет</button>
    </div>

  </div>
</section>
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
        <select class="calculator__vibor_item__select month-kg "  name="" id="">
          <option value="12">12-ай</option>
          <option value="24">24-ай</option>
        </select>
      </div>
      <div class="calculator__vibor_item">
        <p class="calculator__content__p">Сиздин баштапкы төлөм ?</p>
        <select class="calculator__vibor_item__select total-kg"  name="" id="">
          <option value="30">30%</option>
          <option value="50">50%</option>
          <option value="70">70%</option>
        </select>
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
    <div class="calculator__content_button">
      <button data-raschet-btn-kg class="btns_anim">Эсептөө</button>
    </div>

  </div>
</section>
 </div> -->

  <!-- <section class="do-footer">
        <div class="do-footer__conten">
          <div class="do-footer__block">
            <script data-b24-form="inline/4/sgo86j" data-skip-moving="true">
              (function(w,d,u){
               var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
               var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
              })(window,document,'https://cdn-ru.bitrix24.ru/b22501006/crm/form/loader_4.js');
             </script>
          </div>
        </div>
      </section> -->
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
              <div class="etadj__header">
                <p>3д планировка квартиры</p>
              </div>
              <div class="Cvartira_3d__img">
                <img src="${CV[data_1].image3D}" alt="">
              </div>
            </div>

            <div class="cvartira_img">
              <div class="etadj__header">
                <p>2д планировка квартиры</p>
              </div>
              <img data-3d-room src="${CV[data_1].image}" alt="">
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
                <p class="cvartira_info_item_m2">${CV[data_1].square}</p>
                </p>
                <span class="cvartira_info_item_span">90.6</span>
              </div>
              <div class="cvartira_info_item cvartira_info_item-5">
                <p class="cvartira_info_item_p">Цена</p>
                <input class="cvartira_info_item_span cvartira_info_item_input disableInp" type="text" name="" id="cvartira_info_item_input" value="${CV[data_1].price}"><span class="cvartira_info_item-5__span">сом</span>
              </div>
            </div>
          </section>
         `
         document.querySelector('.cvartira_2').remove()
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
           month = Number(document.querySelector('.month-ru').value);
           total = Number(document.querySelector('.total-ru').value);
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
           month = Number(document.querySelector('.month-kg').value);
           total = Number(document.querySelector('.total-kg').value);
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



    //  let indicator_etaj = document.querySelector('.indicator_etaj');
    //  window.addEventListener('mousemove', function (event) {
    //    const data_1 = Number(event.target.getAttribute('data-etaj'))
    //    let data_etaj = document.querySelector('[data-etaj-indicator]')
    //    event = event || window.event;
    //    let x = event.offsetX;
    //    let y = event.offsetY;
    //    if (event.target.hasAttribute('data-etaj')) {
    //      indicator_etaj.classList.add('indicator_etaj-active')
    //      indicator_etaj.style.left = 20 + x + "px"
    //      indicator_etaj.style.top = 80 + y + "px"
    //      data_etaj.innerHTML = data_1 + 1
    //    } else {
    //      indicator_etaj.classList.remove('indicator_etaj-active')
    //    }
    //  })
  </script>
  <script src="./js/app.js"></script>
</body>

</html>

<!-- animate__animated -->