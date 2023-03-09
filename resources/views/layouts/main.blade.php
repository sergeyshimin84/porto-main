<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Портфолио')</title>

    @section('styles')
        @vite(['resources/sass/app.scss'])
    @show

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            @section('navigation')
                <x-menu></x-menu>
            @show
        </div>
    </header>

    <main class="main container">
        <section class="avatar">
            <img src="http://dummyimage.com/200x200" alt="avatar">
        </section>
        <section class="greetings">
            @section('greetings')
                greetings
            @show
        </section>
        <section class="competencies">
            @section('competencies')
                competencies
            @show
        </section>
        <section class="portfolio">
            @section('portfolio')
                portfolio
            @show
        </section>
        <section class="certificates">
            @section('certificates')
                certificates
            @show
        </section>

        <section class="calculator">
            @section('calculator')
                calculator
            @show
        </section>
        <section class="feedback">
            @section('feedback')
                feedback
            @show
        </section>
        {{-- <div>
          <section class="references">references</section>
        <section class="projects">projects</section>
        </div> --}}
    </main>
    <footer>
        <div class="container">
            @section('footer')
                footer
            @show
        </div>
    </footer>
</body>
</html>
