@extends('layouts.app')
@section('title', 'ORNS')
@section('navbar')
@include('includes.header')
@endsection
@section('content')
<div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
aria-hidden="true">
<div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
</div>
</div>
<div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
aria-hidden="true">
<div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
</div>
</div>
<div class="mx-auto max-w-7xl px-6 lg:px-8 -my-14">
<div class="mx-auto max-w-2xl lg:mx-0">
    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Portafolio Personal</h2>
    <p class="mt-5 text-lg leading-8 text-gray-300">
        Hola, bienvenido a mi portafolio personal. Próximamente aquí encontrarás algunos
        de mis proyectos personales utilizando tecnología de nueva generación. Son pequeñas
        tareas que representan situaciones novedosas a proyectos reales.
    </p>
</div>
<div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
    <div class="text-white mb-10">
        <h3>Recursos Favoritos : </h3>
    </div>
    <div
        class="mt-2 grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-yellow-500 sm:grid-cols-2 md:flex lg:gap-x-10">
        <a href="https://www.flaticon.es">Flaticon<span aria-hidden="true">&rarr;</span></a>
        <a href="https://tailwindcss.com">Tailwaind CSS<span aria-hidden="true">&rarr;</span></a>
        <a href="https://getbootstrap.com">Bootstrap <span aria-hidden="true">&rarr;</span></a>
        <a href="https://demos.krajee.com">Krajee Yii Extensions - Kartik <span aria-hidden="true">&rarr;</span></a>
    </div>
    <dl class="mt-10 grid grid-cols-1 gap-8 sm:mt-12 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col-reverse">
            <dt class="text-base leading-7 text-gray-300">Proyectos Empresariales</dt>
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">10</dd>
        </div>
        <div class="flex flex-col-reverse">
            <dt class="text-base leading-7 text-gray-300">Proyectos Personales</dt>
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">0</dd>
        </div>
        <div class="flex flex-col-reverse">
            <dt class="text-base leading-7 text-gray-300">Certificaciones Udemy</dt>
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">5</dd>
        </div>
        <div class="flex flex-col-reverse">
            <dt class="text-base leading-7 text-gray-300">Certificaciones Cisco Networking</dt>
            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">2</dd>
        </div>
    </dl>
</div>
</div>
@endsection
@section('footer')
@include('includes.footer')
@endsection
