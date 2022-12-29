@extends('layouts.admin') @section('content')

<div>
  <livewire:admin.orders.detail :order_id="$id" />
</div>
@endsection
