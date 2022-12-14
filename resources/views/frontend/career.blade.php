  @include('layout.header')
<title>GeoHomes | Our Career</title>

<!-- Google tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203737296-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203737296-1');
</script>
<!-- end of google analytics code -->

</head>

<body>


    <!-- Header -->
      @include('layout.navbar')
    </header>
<!-- Global Banner -->
    <section class="global-banner">
        <img src="/assets/img/materials/careers-banner.jpg" alt="Geohomes image">
        <h2 class="container">Careers At Geohomes</h2>
    </section>
    <!-- Global Banner End -->

    <!-- Careers -->
    <section class="careers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title">FEATURED PATHS</h2>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>INVESTMENT ADVISORY</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>MARKETING</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>CLIENT RELATIONS</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>BUSINESS DEVELOPMENT</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>ADMIN</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>FINANCE</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>ARCHITECTURE</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>ENGINEERING</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>QUANTITY SURVEYOR</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>PROMOTIONAL INVESTMENT EXECUTIVE</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>NYSC</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <h4>IT</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Careers End -->
    
        @include('layout.footer')
</body>
</html>