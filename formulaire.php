<?php require 'partials/head.php'; ?>
<?php require 'partials/menu.php'; ?>
<?php include('contact.php'); ?>
<div class="container">
    

  <div class="row">

    <div class="col-xl-8 offset-xl-2 py-5">

      <form id="contact-form" method="post" action="contact.php" role="form" enctype="multipart/form-data">
        <legend>Contact us</legend>

          <div class="messages"></div>

          <div class="controls">

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="firstname">Firstname *</label>
                          <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Please enter Firstname *" required="required" data-error="Firstname is required.">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="lastname">Lastname *</label>
                          <input id="lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your Lastname *" required="required" data-error="Lastname is required.">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="email">Email *</label>
                          <input id="email" type="email" name="email" class="form-control" placeholder="Please enter a valid Email adress *" required="required" data-error="Fill in the box.">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <label for="phonenumber">Phone number *</label>
                    <input id="phonenumber" type="phonenumber" name="phonenumber" class="form-control" placeholder="Please enter a valid Phone number *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="need">Please select your Country *</label>
                          <select id="need" name="need" class="form-control" required="required">
                            <option value="AF">Afghanistan
                            <option value="ZA">Afrique du sud
                            <option value="AX">Åland, îles
                            <option value="AL">Albanie
                            <option value="DZ">Algérie
                            <option value="DE">Allemagne
                            <option value="AD">Andorre
                            <option value="AO">Angola
                            <option value="AI">Anguilla
                            <option value="AQ">Antarctique
                            <option value="AG">Antigua et barbuda
                            <option value="SA">Arabie saoudite
                            <option value="AR">Argentine
                            <option value="AM">Arménie
                            <option value="AW">Aruba
                            <option value="AU">Australie
                            <option value="AT">Autriche
                            <option value="AZ">Azerbaïdjan
                            <option value="BS">Bahamas
                            <option value="BH">Bahreïn
                            <option value="BD">Bangladesh
                            <option value="BB">Barbade
                            <option value="BY">Bélarus
                            <option value="BE">Belgique
                            <option value="BZ">Belize
                            <option value="BJ">Bénin
                            <option value="BM">Bermudes
                            <option value="BT">Bhoutan
                            <option value="BO">Bolivie, l'état plurinational de
                            <option value="BQ">Bonaire, saint eustache et saba
                            <option value="BA">Bosnie herzégovine
                            <option value="BW">Botswana
                            <option value="BV">Bouvet, île
                            <option value="BR">Brésil
                            <option value="BN">Brunei darussalam
                            <option value="BG">Bulgarie
                            <option value="BF">Burkina faso
                            <option value="BI">Burundi
                            <option value="KY">Caïmans, îles
                            <option value="KH">Cambodge
                            <option value="CM">Cameroun
                            <option value="CA">Canada
                            <option value="CV">Cap vert
                            <option value="CF">Centrafricaine, république
                            <option value="CL">Chili
                            <option value="CN">Chine
                            <option value="CX">Christmas, île
                            <option value="CY">Chypre
                            <option value="CC">Cocos (keeling), îles
                            <option value="CO">Colombie
                            <option value="KM">Comores
                            <option value="CG">Congo
                            <option value="CD">Congo, la république démocratique du
                            <option value="CK">Cook, îles
                            <option value="KR">Corée, république de
                            <option value="KP">Corée, république populaire démocratique de
                            <option value="CR">Costa rica
                            <option value="CI">Côte d'ivoire
                            <option value="HR">Croatie
                            <option value="CU">Cuba
                            <option value="CW">Curaçao
                            <option value="DK">Danemark
                            <option value="DJ">Djibouti
                            <option value="DO">Dominicaine, république
                            <option value="DM">Dominique
                            <option value="EG">Égypte
                            <option value="SV">El salvador
                            <option value="AE">Émirats arabes unis
                            <option value="EC">Équateur
                            <option value="ER">Érythrée
                            <option value="ES">Espagne
                            <option value="EE">Estonie
                            <option value="US">États unis
                            <option value="ET">Éthiopie
                            <option value="FK">Falkland, îles (malvinas)
                            <option value="FO">Féroé, îles
                            <option value="FJ">Fidji
                            <option value="FI">Finlande
                            <option value="FR">France
                            <option value="GA">Gabon
                            <option value="GM">Gambie
                            <option value="GE">Géorgie
                            <option value="GS">Géorgie du sud et les îles sandwich du sud
                            <option value="GH">Ghana
                            <option value="GI">Gibraltar
                            <option value="GR">Grèce
                            <option value="GD">Grenade
                            <option value="GL">Groenland
                            <option value="GP">Guadeloupe
                            <option value="GU">Guam
                            <option value="GT">Guatemala
                            <option value="GG">Guernesey
                            <option value="GN">Guinée
                            <option value="GW">Guinée bissau
                            <option value="GQ">Guinée équatoriale
                            <option value="GY">Guyana
                            <option value="GF">Guyane française
                            <option value="HT">Haïti
                            <option value="HM">Heard et îles macdonald, île
                            <option value="HN">Honduras
                            <option value="HK">Hong kong
                            <option value="HU">Hongrie
                            <option value="IM">Île de man
                            <option value="UM">Îles mineures éloignées des états unis
                            <option value="VG">Îles vierges britanniques
                            <option value="VI">Îles vierges des états unis
                            <option value="IN">Inde
                            <option value="ID">Indonésie
                            <option value="IR">Iran, république islamique d'
                            <option value="IQ">Iraq
                            <option value="IE">Irlande
                            <option value="IS">Islande
                            <option value="IL">Israël
                            <option value="IT">Italie
                            <option value="JM">Jamaïque
                            <option value="JP">Japon
                            <option value="JE">Jersey
                            <option value="JO">Jordanie
                            <option value="KZ">Kazakhstan
                            <option value="KE">Kenya
                            <option value="KG">Kirghizistan
                            <option value="KI">Kiribati
                            <option value="KW">Koweït
                            <option value="LA">Lao, république démocratique populaire
                            <option value="LS">Lesotho
                            <option value="LV">Lettonie
                            <option value="LB">Liban
                            <option value="LR">Libéria
                            <option value="LY">Libye
                            <option value="LI">Liechtenstein
                            <option value="LT">Lituanie
                            <option value="LU">Luxembourg
                            <option value="MO">Macao
                            <option value="MK">Macédoine, l'ex république yougoslave de
                            <option value="MG">Madagascar
                            <option value="MY">Malaisie
                            <option value="MW">Malawi
                            <option value="MV">Maldives
                            <option value="ML">Mali
                            <option value="MT">Malte
                            <option value="MP">Mariannes du nord, îles
                            <option value="MA">Maroc
                            <option value="MH">Marshall, îles
                            <option value="MQ">Martinique
                            <option value="MU">Maurice
                            <option value="MR">Mauritanie
                            <option value="YT">Mayotte
                            <option value="MX">Mexique
                            <option value="FM">Micronésie, états fédérés de
                            <option value="MD">Moldova, république de
                            <option value="MC">Monaco
                            <option value="MN">Mongolie
                            <option value="ME">Monténégro
                            <option value="MS">Montserrat
                            <option value="MZ">Mozambique
                            <option value="MM">Myanmar
                            <option value="NA">Namibie
                            <option value="NR">Nauru
                            <option value="NP">Népal
                            <option value="NI">Nicaragua
                            <option value="NE">Niger
                            <option value="NG">Nigéria
                            <option value="NU">Niué
                            <option value="NF">Norfolk, île
                            <option value="NO">Norvège
                            <option value="NC">Nouvelle calédonie
                            <option value="NZ">Nouvelle zélande
                            <option value="IO">Océan indien, territoire britannique de l'
                            <option value="OM">Oman
                            <option value="UG">Ouganda
                            <option value="UZ">Ouzbékistan
                            <option value="PK">Pakistan
                            <option value="PW">Palaos
                            <option value="PS">Palestinien occupé, territoire
                            <option value="PA">Panama
                            <option value="PG">Papouasie nouvelle guinée
                            <option value="PY">Paraguay
                            <option value="NL">Pays bas
                            <option value="PE">Pérou
                            <option value="PH">Philippines
                            <option value="PN">Pitcairn
                            <option value="PL">Pologne
                            <option value="PF">Polynésie française
                            <option value="PR">Porto rico
                            <option value="PT">Portugal
                            <option value="QA">Qatar
                            <option value="RE">Réunion
                            <option value="RO">Roumanie
                            <option value="GB">Royaume uni
                            <option value="RU">Russie, fédération de
                            <option value="RW">Rwanda
                            <option value="EH">Sahara occidental
                            <option value="BL">Saint barthélemy
                            <option value="SH">Sainte hélène, ascension et tristan da cunha
                            <option value="LC">Sainte lucie
                            <option value="KN">Saint kitts et nevis
                            <option value="SM">Saint marin
                            <option value="MF">Saint martin(partie française)
                            <option value="SX">Saint martin (partie néerlandaise)
                            <option value="PM">Saint pierre et miquelon
                            <option value="VA">Saint siège (état de la cité du vatican)
                            <option value="VC">Saint vincent et les grenadines
                            <option value="SB">Salomon, îles
                            <option value="WS">Samoa
                            <option value="AS">Samoa américaines
                            <option value="ST">Sao tomé et principe
                            <option value="SN">Sénégal
                            <option value="RS">Serbie
                            <option value="SC">Seychelles
                            <option value="SL">Sierra leone
                            <option value="SG">Singapour
                            <option value="SK">Slovaquie
                            <option value="SI">Slovénie
                            <option value="SO">Somalie
                            <option value="SD">Soudan
                            <option value="SS">Soudan du sud
                            <option value="LK">Sri lanka
                            <option value="SE">Suède
                            <option value="CH">Suisse
                            <option value="SR">Suriname
                            <option value="SJ">Svalbard et île jan mayen
                            <option value="SZ">Swaziland
                            <option value="SY">Syrienne, république arabe
                            <option value="TJ">Tadjikistan
                            <option value="TW">Taïwan, province de chine
                            <option value="TZ">Tanzanie, république unie de
                            <option value="TD">Tchad
                            <option value="CZ">Tchèque, république
                            <option value="TF">Terres australes françaises
                            <option value="TH">Thaïlande
                            <option value="TL">Timor leste
                            <option value="TG">Togo
                            <option value="TK">Tokelau
                            <option value="TO">Tonga
                            <option value="TT">Trinité et tobago
                            <option value="TN">Tunisie
                            <option value="TM">Turkménistan
                            <option value="TC">Turks et caïcos, îles
                            <option value="TR">Turquie
                            <option value="TV">Tuvalu
                            <option value="UA">Ukraine
                            <option value="UY">Uruguay
                            <option value="VU">Vanuatu
                            <option value="VE">Venezuela, république bolivarienne du
                            <option value="VN">Viet nam
                            <option value="WF">Wallis et futuna
                            <option value="YE">Yémen
                            <option value="ZM">Zambie
                            <option value="ZW">Zimbabwe​​​​​
                          </select>
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="subect">Subject *</label>
                          <input id="subject" type="subject" name="subject" class="form-control" placeholder="Please write your subject *" required="required" data-error="Fill in the box.">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="message">Message *</label>
                          <textarea id="message" name="message" class="form-control" placeholder="Write your message here *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <p>Pictures</p>
                        <input type="file" name="imagesend" accept=".png, .jpeg" />
                        <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <p>Desired response format *</p>
                      <input id="format1" type="radio" name="format" value="HTML">HTML
                      <input id="format2" type="radio" name="format" value="Texte">Texte
                      <div class="help-block with-errors"></div>
                  </div>
                  <div class="col-md-12" style="padding-top: 10px">
                      <input type="submit" class="btn btn-success btn-send" value="Send message">
                  </div>
        </form>
      </div>
    </div>
    <!-- /.8 -->
  </div>
</div>
<!-- /.row-->

<!-- /.container-->
<?php require 'partials/adress.php'; ?>
<?php require 'partials/footer.php'; ?>

<?php require 'partials/script.php'; ?>
