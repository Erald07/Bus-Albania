@extends('layouts.front')

{{-- @include('layouts.inc.frontnavbar') --}}

@section('content')
    <nav class="h-[300px] w-full bg-[url('https://w0.peakpx.com/wallpaper/604/448/HD-wallpaper-durres-albania-beach-beauty-sea.jpg')] bg-center bg-cover bg-no-repeat">
        {{-- <nav class="h-[550px] w-full bg-[url('https://www.barcelonabusturistic.cat/themes/custom/tmb/assets/img/layout/bbt-a01-bg-overlay-tablet.jpg')] bg-center bg-cover bg-no-repeat opacity-60"> --}}
            <div class="flex container">
                <div class="justify-between pt-8 absolute">
                    <div class="logo">
                        <h1 class="text-center uppercase bg-clip-text text-transparent bg-white font-extrabold"><span class="text-3xl font-bold">open</span><br><span class="text-5xl font-bold">bus</span><br><span class="text-md text-right font-medium">albania</span></h1>
                    </div>
                </div>
                <div class="justify-center text-center mx-auto pt-20">
                    <div class=" text-white">
                        <h1 class="uppercase text-5xl font-bold">Welcome to Durres</h1>
                    </div>
                    <div class="buy bg-clip-content bg-transparent bg-gradient-to-r from-secondary to-primary rounded-full mt-20 w-[180px] mx-auto text-center">
                        <a href="{{ url('durres-tour') }}">
                            <button class="text-white py-2 px-6  text-xl font-medium">Book Now   <i class="fa-solid fa-ticket fa-beat"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </nav>

<div class="container flex flex-wrap items-center">
    <div class="w-1/2 px-8">
        <p class="mt-10 font-light text-lg text-gray-500"><span class="text-xl font-medium text-gray-700">Durresi</span> gjithashtu është i njohur për plazhin e tij të gjatë, me rërë të bardhë dhe ujë të pastër dhe
            të kaltër. Plazhi është i popullarizuar nga turistët dhe banorët vendorë gjatë verës dhe ofron shumë aktivitete,
            si sporte uji, shëtitje me anije dhe relaksim në diell. Në afërsi të plazhit, turistët gjithashtu
            mund të vizitojnë dyqanet, baret dhe restorantet që ofrojnë ushqime tradicionale dhe ndërkombëtare.
            Për ata që duan të shijojnë natyrën, Durresi ka edhe parkun e tij të bukur që ndodhet në krah të lumit të Erzenit.
             Parku ofron një sërë shëtitjesh dhe piknikime dhe është i popullarizuar nga banorët vendorë dhe turistët.
        </p>
    </div>
    <div class="w-1/2 pt-8 pl-16">
        <img src="{{asset('assets/images/redbus1.png')}}" alt="">
    </div>
</div>


    <div class="container">
        <div class="border-t-2 mt-16 w-32 border-secondary mx-auto"></div>
        <div class="flex justify-center mt-8 mb-8">
          <p class="text-center font-light"> <span class="font-bold text-3xl">Stacions of buss  </span><br><br>
            From Modernista Barcelona to gastronomic Barcelona via Olympic Barcelona. The bus takes you there - you just have to enjoy!</p>
        </div>
        <div class="flex justify-center">
            <img class="" src="{{asset('assets/images/road.png')}}">
        </div>
    </div>
<div class="carouseli">
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" checked/>
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
  <main id="carousel">
    <div class="item"><img  class="rounded-md" src="{{asset('assets/images/durrsi1.jpg')}}"></div>
    <div class="item"><img  class="rounded-md" src="{{asset('assets/images/durrsi1.jpg')}}"></div>
    <div class="item"><img  class="rounded-md" src="{{asset('assets/images/durrsi1.jpg')}}"></div>
    <div class="item"><img  class="rounded-md" src="{{asset('assets/images/durrsi1.jpg')}}"></div>
    <div class="item"><img  class="rounded-md" src="{{asset('assets/images/durrsi1.jpg')}}" width="550" height="650"></div>
    <div class="item"><img  class="rounded-md" src="{{asset('assets/images/durrsi1.jpg')}}" width="550" height="650"></div>
    <div class="item"><img  class="rounded-md" src="{{asset('assets/images/durrsi1.jpg')}}" width="550" height="650"></div>
    <div class="item"><img  class="rounded-md" src="{{asset('assets/images/durrsi1.jpg')}}" width="550" height="650"></div>
  </main>
</div>
@endsection


