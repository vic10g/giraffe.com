@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    
    @component('admin.components.breadcrumb')
    
        @slot('title') Создание категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    
    @endcomponent
    
    <hr />
    
    <form class="form-horizontal" action="{{route('admin.category.store')}}" method="POST" >
        {{csrf_field()}}
        
        {{-- form include --}}
        
        @include('admin.categories.partials.form')
        
        
    </form>
    
</div>

@endsection
