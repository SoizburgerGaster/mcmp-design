@include('layouts/header')

<section>

    <div class="container" >
        <div class="row " >
            <div class="col-6 milaniSection">
        <div class="card card0" id="milanCrni" onclick="divChange('milanCrni')">
            <div class="border">

                <div class="icons">
                    <a href="https://www.facebook.com/milan.ristic.543" class="fa fa-facebook" target="_blank"></a>
                    <a href="https://www.instagram.com/milan_ristic_/" class="fa fa-instagram" target="_blank"></a>
                </div>
            </div>

        </div>
                <div class="card infoCard" style="display: none" id="milanCrniHidden">
                    <div class="card-header">
                        <h3>Milan M. Ristic</h3>
                    </div>
                    <div class="card-body">
                        <h2>Graficki Dizajner</h2>
                        <hr>
                        <p>Adobe PhotoShop</p>
                        <p>Adobe Ilustrator</p>
                        <p>Izrada logo-a i vizuala</p>
                        <p>milan.c@mcmp-design.com</p>
                        <a href="https://www.facebook.com/milan.ristic.543" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://www.instagram.com/milan_ristic_/" class="fa fa-instagram" target="_blank"></a>
                    </div>
                </div>
            </div>
            <div class="col-6 milaniSection">
                <div class="card card0" id="milanPlavi" onclick="divChange('milanPlavi')">
                    <div class="border">
                        <div class="icons">
                            <a href="https://www.facebook.com/BeliMilan/" class="fa fa-facebook" target="_blank"></a>
                            <a href="https://www.instagram.com/milan_ris/" class="fa fa-instagram" target="_blank"></a>
                        </div>

                    </div>
                </div>
                <div class="card infoCard" style="display: none" id="milanPlaviHidden">
                    <div class="card-header">
                        <h3>Milan G. Ristic</h3>
                    </div>
                    <div class="card-body">
                        <h2>Web Designer</h2>
                        <hr>
                        <p>HTML, CSS, JavaScript</p>
                        <p>WordPress, Joomla</p>
                        <p>SEO optimizacija</p>
                        <p>milan.p@mcmp-design.com</p>
                        <a href="https://www.facebook.com/BeliMilan/" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://www.instagram.com/milan_ris/" class="fa fa-instagram" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
    <div class="col-12">
        <div class="card card0" id="mcmpCard" onclick="divChange('mcmpCard')">
            <div class="border">
                <div class="icons">
                    <a href="https://www.facebook.com/mcmpdesign" class="fa fa-facebook" target="_blank"></a>
                    <a href="https://www.instagram.com/mcmp_design/" class="fa fa-instagram" target="_blank"></a>
                </div>

            </div>
        </div>
        <div class="container" id="mcmpCardHidden" style="display:none">
            <div class="row">

                <div class="aboutText">
                    <p><span style="color:#2C3333; font-weight: bold">MCMP-Design </span> je design start-up kreiran od strane dva Milana Risti??a. <br>
                    Ne, nismo bra??a, ali se poznajemo 20 godina.
                    Znamo da smo ??armantni i zabavni, me??utim, poslu sa svakim klijentom pristupamo odgovorno, ozbiljno i posve??eno.
                    Nisi siguran kako mo??emo da ti pomognemo? How about slede??a check-lista:</p>
                    <ul>
                        <li>Potreban ti je logo? <span style="font-weight: bold;">Mo??e!</span></li>
                        <li>Potreban ti je vizuelni identitet za firmu, event, projekat? <span style="font-weight: bold;">Mo??e!</span></li>
                        <li>Potrebna ti je SEO optimizacija postoje??eg website-a? <span style="font-weight: bold;">Mo??e!</span></li>
                        <li>Potreban ti je WordPress/Joomla blog? <span style="font-weight: bold;">Mo??e!</span></li>
                        <li>Potreban ti je WordPress/Joomla e-commerce website? <span style="font-weight: bold;">Mo??e i to!</span></li>
                        <li>Potrebno ti je sve navedeno? <span style="font-weight: bold;">Top pri??a, mo??e!</span></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
    </div>
    </div>
</section>




<!-- Site footer -->
@include ('layouts/footer')
