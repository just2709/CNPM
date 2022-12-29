@extends('layouts.app')
 @section('content')
@livewire('user.detail-page', ['product_id'=>$product_id])
@endsection
