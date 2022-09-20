<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 ">
                <h3>Prijavi se na naš Newsletter</h3>
                <p>Trudićemo se (verovatno nećemo) da preko Newsletter-a delimo nova saznanja i razvoj industrije.</p>

                <div>
                    <form method="post" action="{{ route('subscribe') }}" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 newsletterForm">
                                <input id="emailBox" name="mail" type="email" placeholder="Upiši svoju E-mail adresu">
                            </div>
                            <div class="col-md-6 newsletterForm" >
                                <button class="btn btn-secondary submitButton" type="submit">Prijavi se</button>
                            </div>
                        </div>
                    </form>
                    <div class="socialMediaButtons">
                        <a href="https://www.facebook.com/mcmpdesign" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://www.instagram.com/mcmp_design/" class="fa fa-instagram" target="_blank"></a>
                        <a href="#" class="fa fa-dribbble"></a>
                    </div>
                </div>





            </div>

            <div class="col-xs-6 col-md-3">
                <h3>Zašto MCMP-Design?</h3>
                <p></p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h3>MCMP - MCMP-Design</h3>
                <ul class="footer-links">
                    <li><a class="afooter" href="/blog">Blog</a></li>
                    <li><a class="afooter" href="/portfolio">Portfolio</a></li>
                    <li><a class="afooter" href="/o-nama">O nama</a></li>
                    <li><a class="afooter" href="/kontakt" target="_blank">Kontakt</a></li>
                    <li><a class="afooter" href="/faq" target="_blank">FAQ</a></li>

                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div>
            <div>
                <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by <span style="font-weight: bold"> MCMP-Design</span>.
                </p>
            </div>


        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="app.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WRZTVN2GKJ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-WRZTVN2GKJ');
</script>
</body>
</html>
