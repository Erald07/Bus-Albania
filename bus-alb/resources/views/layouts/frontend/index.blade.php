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
    <div class="items">
        <div class="item active">
            <img src="https://cdn.britannica.com/35/195935-050-456D7CBC/Skanderbeg-Square-Tirana-Albania.jpg">
        </div>
        <div class=" item next">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/06/Tirana_from_South.jpg">
        </div>
        <div class="item">
            <img src="https://www.opengovpartnership.org/wp-content/uploads/2021/04/tirana.jpg">
        </div>
        <div class="item">
            <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/12/24/16/tirana-overview.jpg?quality=75&width=1200&auto=webp">
        </div>
        <div class="item prev">
            <img src="https://albaniatourguide.com/wp-content/uploads/2022/01/Tirana-12-shutterstock-large-1.jpg">
        </div>
        <div class="button-container">
            <div class="button"><i class="fas fa-angle-left"></i></div>
            <div class="button"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
</div>
<div class="mt-80 bg-gray-100 pb-14">
    <div class="container  text-center">
        <div class="flex-col">
            <div class="flex-col py-6">
                <h1 class="text-2xl font-medium text-gray-900">Price List</h1>
                <p class="text-md font-light py-2"><span>Take a walking tour: Walking  tour are a great way to explore Barcelona's historic</span><br><span>neightborhoods and landmarks. There are many tour companies.</span> </p>
            </div>
            <div class="flex flex-wrap gap-4 justify-center">
                <div class="w-1/5 bg-white rounded-3xl">
                    <div class="flex-col text-center">
                        <div class="title text-white py-1 bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary rounded-t-3xl">
                            <h3 class="uppercase text-md font-medium pt-1">Openbus albania</h3>
                            <p class="font-light text-xs pb-1">24 hours</p>
                        </div>
                        <div class="flex-col">
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>  
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>  
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>  
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>   
                            </div>
                        </div>
                        <div class="buy py-6">
                            <button class="bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary rounded-full">
                                <span class="px-6 text-white uppercase">buy now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white rounded-3xl">
                    <div class="flex-col text-center">
                        <div class="title text-white py-1 bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary rounded-t-3xl">
                            <h3 class="uppercase text-md font-medium pt-1">Openbus albania</h3>
                            <p class="font-light text-xs pb-1">24 hours</p>
                        </div>
                        <div class="flex-col">
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                        </div>
                        <div class="buy py-6">
                            <button class="bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary rounded-full">
                                <span class="px-6 text-white uppercase">buy now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white rounded-3xl">
                    <div class="flex-col text-center">
                        <div class="title text-white py-1 bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary rounded-t-3xl">
                            <h3 class="uppercase text-md font-medium pt-1">Openbus albania</h3>
                            <p class="font-light text-xs pb-1">24 hours</p>
                        </div>
                        <div class="flex-col">
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                        </div>
                        <div class="buy py-6">
                            <button class="bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary rounded-full">
                                <span class="px-6 text-white uppercase">buy now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white rounded-3xl">
                    <div class="flex-col text-center">
                        <div class="title text-white py-1 bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary rounded-t-3xl">
                            <h3 class="uppercase text-md font-medium pt-1">Openbus albania</h3>
                            <p class="font-light text-xs pb-1">24 hours</p>
                        </div>
                        <div class="flex-col">
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                            <div class="border-b border-gray-200 py-1">
                                <h1>Adult 13 to 64 years</h1>
                                <p><span class="font-medium">$26.50 </span><span class="text-gray-500 line-through">$20.50</span></p>                            
                            </div>
                        </div>
                        <div class="buy py-6">
                            <button class="bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary rounded-full">
                                <span class="px-6 text-white uppercase">buy now</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="flex flex-wrap justify-center">
        <div class="flex-col px-20 pt-24 pb-12">
            <div class="flex py-4">
                <div class="w-1/2 px-12">
                    <h1 class="text-2xl font-medium mb-2">Useful Information</h1>
                    <p class="font-light text-base">Take a walking tour: Walking  tour are a great way to explore Barcelona's historic neightborhoods and landmarks. There are many tour companies.</p>
                </div>
                <div class="w-1/2 px-12">
                    <h1 class="text-md font-medium mb-2">Albania Bus Turistic</h1>
                    <p class="font-light text-base">Take a walking tour: Walking  tour are a great way to explore Barcelona's historic neightborhoods and landmarks. There are many tour companies.</p>
                </div>
            </div>
            <div class="flex py-4">
                <div class="w-1/2 px-12">
                    <h1 class="text-md font-medium mb-2">Other routes</h1>
                    <p class="font-light text-base">Take a walking tour: Walking  tour are a great way to explore Barcelona's historic neightborhoods and landmarks. There are many tour companies.</p>
                </div>
                <div class="w-1/2 px-12">
                    <h1 class="text-md font-medium mb-2">Other routes</h1>
                    <p class="font-light text-base">Take a walking tour: Walking  tour are a great way to explore Barcelona's historic neightborhoods and landmarks. There are many tour companies.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-[url('https://res.cloudinary.com/https-www-isango-com/image/upload/f_auto/t_m_Prod/v1573736346/europe/spain/barcelona/4037.jpg')] h-56 bg-cover bg-norepeat bg-bottom">
    <div class="bg-clip-content bg-transparent bg-gradient-to-r from-primary to-secondary h-56 opacity-80">
        <div class="flex flex-wrap px-32 py-12">
            <div class="w-1/3 px-12">
                <div class="flex-col text-center text-white">
                    <div>
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <h1 class="text-4xl font-medium">19</h1>
                    <p class="text-base font-light">Years experience, giving te best service since 1987</p>
                </div>
            </div>
            <div class="w-1/3 px-12">
                <div class="flex-col text-center text-white">
                    <div>
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <h1 class="text-4xl font-medium">19</h1>
                    <p class="text-base font-light">Years experience, giving te best service since 1987</p>
                </div>
            </div>
            <div class="w-1/3 px-12">
                <div class="flex-col text-center text-white">
                    <div>
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <h1 class="text-4xl font-medium">19</h1>
                    <p class="text-base font-light">Years experience, giving te best service since 1987</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

