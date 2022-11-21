@extends('front.layouts.main')


@section('seo_title', 'Main')

@section('seo_description', 'test')




@section('content')
  @include('front.components.services', ['products'=>$data['products']])
  @include('front.components.work', ['galleries'=> $data['gallery']])
  @include('front.components.benefits')
@endsection