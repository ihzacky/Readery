<x-Universal.headMetaData></x-Universal.headMetaData>
<body>
    <div class="container-fluid px-0 py-0 mx-0 my-0" style="background-image: url('{{ asset('images/mainThumbnail.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;"> 
        
        <!-- Navbar -->
        @if ($routeCond)
            <x-Universal.navbarLogged></x-Universal.navbarLogged>
        @else
            <x-Universal.navbar></x-Universal.navbar>
        @endif

        <!-- Content -->
        <x-MainPage.mainPageContent></x-MainPage.mainPageContent>

        <!--Main Page Upper Footer -->
        <x-MainPage.footerUpper></x-MainPage.footerUpper>

        <!-- Footer -->
        <x-Universal.footer></x-Universal.footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>