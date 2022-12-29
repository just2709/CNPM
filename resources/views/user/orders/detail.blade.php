@extends('layouts.app')
 @section('content')
<div>
  <livewire:user.orders.detail :order_id="$id">
</div>
@endsection
