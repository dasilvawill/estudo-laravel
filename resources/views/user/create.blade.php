@extends('user.base')

@section('Graduation', 'Create User')

@section('container')
    <form action="/user/add" method="post">
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="submit" value="Submit">
    </form>
    @endsection