@extends('layouts.dash')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 
 
<div class="origin ">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                @can('user')
        <p> Dados do usuário</p>
    @elsecan('admin')
     <p>  Somente o administrador pode isso</p> 
    @endcan
                </div>
            </div>
        </div>
    </div>
    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-red border-b border-lime-700">
                   
                @can('user')
        <p> Dados do usuário</p>
    @elsecan('admin')
     <p>  Somente o administrador pode isso</p> 
    @endcan
                </div>
            </div>
        </div>
    </div>
  </div>
</x-app-layout>
