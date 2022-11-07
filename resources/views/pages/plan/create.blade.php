@extends('layout.main')

@section('content')
<x-form-card :route="route('plan.store')">
    <input 
        type="hidden" 
        name="user_id" 
        value="{{ auth()->user()->id }}">
    <x-input
        label="{{ __('table.column.plan.code') }}"
        name="code"/>
    <x-input
        label="{{ __('table.column.plan.plan') }}"
        name="plan"/>
    <x-input
        label="{{ __('table.column.plan.price') }}"
        name="price"/>
    <x-input
        label="{{ __('table.column.plan.description') }}"
        name="description"/>
</x-form-card>
@endsection