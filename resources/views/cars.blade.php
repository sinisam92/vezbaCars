@extends('layouts.app')

      @foreach($cars as $car)
        <h1>{{ $car->title }}</h1>
      @endforeach
