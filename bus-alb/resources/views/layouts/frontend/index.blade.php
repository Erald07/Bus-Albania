@extends('layouts.front')

@section('title')
    Welcome to E-Shop
@endsection

@section('content')

<div class="bg-gray-100 pb-20">
    <div class="container">
        <div class="flex-wrap flex justify-center space-x-6 -translate-y-8">
            <div class="bg-white px-12 py-5 shadow-2xl">
                <span class="text-xl font-medium text-secondary">Tirane</span>
            </div>
            <div class="bg-white px-12 py-5 shadow-2xl">
                <span class="text-xl font-medium text-secondary">Durres</span>
            </div>
        </div>
    </div>
    <div class="mt-16">
        <div class="justify-between flex items-center">
            <div class="flex">
                <img src="https://www.fragrancetour.com/wp-content/uploads/2020/04/tour-roma-open-bus.jpg" alt="">
            </div>
            <div class="flex">
                <div class="flex-col py-4 pl-14 pr-24 bg-white ml-8">
                    <h1 class="text-gray-800 text-2xl font-medium">The best way of getting to know Barcelona</h1>
                    <p class="my-3 text-gray-700 text-md font-light">Barcelona is a vibrant and deserve city with a rich histroy and culture, so there are many ways to get to know it. Here are some suggestions.</p>
                    <p class="my-3 text-gray-700 text-md font-light">Barcelona is a vibrant and deserve city with a rich histroy and culture, so there are many ways to get to know it. Here are some suggestions.</p>
                    <div class="bg-clip-content bg-transparent bg-gradient-to-r from-secondary to-primary rounded-full mt-4 w-[150px] text-center">
                        <button class="text-white text-lg font-medium py-1 px-6">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-8">
    <div class="flex-col">
        <div class="text-center ">
            <h1 class="text-gray-800 text-3xl font-bold uppercase">openbus albania</h1>
            <div class="flex-col py-6">
                <p class="py-4 text-md font-light text-gray-700"><span>Take a walking tour: Walking tour are a great way to explore Barcelona's historic neightborhoods</span><br><span>and landmarks.
                    There are many tour companies that offer guided walks around the city, suck as</span><br> the Gorthic Quarter , El Raval and
                    Barceloneta.
                </p>
                <p class="py-4 text-md font-light text-gray-700"><span>Visit museums and galleries: Barcelona is home to many world-class museums and galleries, such as the</span><br> Picasso Museum,
                    the Joan Miro Fundation, and the National Art Museum of Catalonia.
                </p>
            </div>
        </div>
    </div>
</div>
{{-- <div class="carousel">
    <ul class="carousel__list">
        <li class="carousel__item" data-pos="-2">1</li>
        <li class="carousel__item" data-pos="-1">2</li>
        <li class="carousel__item" data-pos="0">3</li>
        <li class="carousel__item" data-pos="1">4</li>
        <li class="carousel__item" data-pos="2">5</li>
    </ul>
</div> --}}
<div class="items">
    <div class="item active">
        <img src="http://via.placeholder.com/500x500">
    </div>
    <div class=" item next">
        <img src="http://via.placeholder.com/500x500">
    </div>
    <div class="item">
        <img src="http://via.placeholder.com/500x500">
    </div>
    <div class="item">
        <img src="http://via.placeholder.com/500x500">
    </div>
    <div class="item prev">
        <img src="http://via.placeholder.com/500x500">
    </div>
    <div class="button-container">
        <div class="button"><i class="fas fa-angle-left"></i></div>
        <div class="button"><i class="fas fa-angle-right"></i></div>
    </div>
</div>


@endsection

