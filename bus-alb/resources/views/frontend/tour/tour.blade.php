@extends('layouts.front')

@section('content')

<div class="text-5xl font-extrabold text-center py-6 bg-gray-50">
    <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
        Open Bus Albania
    </span>
</div>
<div class="bg-gray-100">
    <div class="container">
        <div class="py-8">
            <div class="flex-wrap flex px-2">
                <div class="bg-white shadow-xl w-1/2">
                    <div class="p-6">
                        <div class="">
                            <img src="{{ asset('/assets/images/busTour.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-2xl ml-4 w-2/5 p-6">
                    <div class="flex-col">
                        <div class="flex-col">
                            <h1 class="text-primary text-xl font-medium">Date</h1>
                            <div class="py-3">
                                <input type="date" name="date" class="border border-gray-600 p-2 bg-gray-100 rounded-md">  
                            </div>
                        </div>
                        <div class="flex-col">
                            <h1 class="text-primary text-xl font-medium">Clock</h1>
                            <div class="py-3 flex items-center space-x-4">
                                <div class="flex items-center">
                                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-6 h-6 ">
                                    <label for="default-radio-1" class="ml-2 text-lg font-medium text-gray-700">08:30</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-6 h-6 text-secondary bg-gray-100 border-gray-300">
                                    <label for="default-radio-2" class="ml-2 text-lg font-medium text-gray-700">14:30</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex-col">
                            <h1 class="text-primary text-xl font-medium">Fares</h1>
                            <div class="flex-col py-3">
                                <div class="border border-gray-200 py-2 px-5 w-full my-2">
                                    <div class="flex justify-between">
                                        <span class="font-medium">adults</span>
                                        <div class="flex flex-col">
                                            <span class="text-secondary line-through text-base font-normal">€33.00</span>
                                            <span class="font-medium text-lg text-gray-600">€29.70</span>
                                        </div>
                                        <div class="flex items-center">
                                            <button class="border border-primary px-4 pb-2 text-4xl rounded-lg text-primary">-</button>
                                            <input type="text" name="number" value="0" class="focus:outline-none w-8 text-center text-xl">
                                            <button class="border border-primary px-3 pb-2 py-1 text-3xl rounded-lg text-primary">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-200 py-2 px-5 w-full my-2">
                                    <div class="flex justify-between">
                                        <span class="font-medium">children</span>
                                        <div class="flex flex-col">
                                            <span class="text-secondary line-through text-base font-normal">€23.00</span>
                                            <span class="font-medium text-lg text-gray-600">€20.70</span>
                                        </div>
                                        <div class="flex items-center">
                                            <button class="border border-primary px-4 pb-2 text-4xl rounded-lg text-primary">-</button>
                                            <input type="text" name="number" value="0" class="focus:outline-none w-8 text-center text-xl">
                                            <button class="border border-primary px-3 pb-2 py-1 text-3xl rounded-lg text-primary">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-200 py-2 px-5 w-full my-2">
                                    <div class="flex justify-between">
                                        <span class="font-medium">adults</span>
                                        <div class="flex flex-col">
                                            <span class="text-secondary line-through text-base font-normal">€39.00</span>
                                            <span class="font-medium text-lg text-gray-600">€35.10</span>
                                        </div>
                                        <div class="flex items-center">
                                            <button class="border border-primary px-4 pb-2 text-4xl rounded-lg text-primary">-</button>
                                            <input type="text" name="number" value="0" class="focus:outline-none w-8 text-center text-xl">
                                            <button class="border border-primary px-3 pb-2 py-1 text-3xl rounded-lg text-primary">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-200 py-2 px-5 w-full my-2">
                                    <div class="flex justify-between">
                                        <span class="font-medium">adults</span>
                                        <div class="flex flex-col">
                                            <span class="text-secondary line-through text-base font-normal">€0.00</span>
                                            <span class="font-medium text-lg text-gray-600">€0.00</span>
                                        </div>
                                        <div class="flex items-center">
                                            <button class="border border-primary px-4 pb-2 text-4xl rounded-lg text-primary">-</button>
                                            <input type="text" name="number" value="0" class="focus:outline-none w-8 text-center text-xl">
                                            <button class="border border-primary px-3 pb-2 py-1 text-3xl rounded-lg text-primary">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-100 pt-8 pb-6 px-6">
                                <div class="flex justify-between px-4">
                                    <div class="text-primary">
                                        <span class="text-2xl font-bold">Total</span>
                                    </div>
                                    <div class="flex space-between items-center space-x-5">
                                        <span class="text-secondary line-through text-xl font-normal">€0.00</span>
                                        <span class="text-4xl font-bold">€0.00</span>
                                    </div>
                                </div>
                                <div class="mt-6 text-white bg-gray-400 w-full py-3 text-center font-medium rounded-full">
                                    <button>Buy now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
