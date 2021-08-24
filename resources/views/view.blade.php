@extends ('layout')

@section ('header')
    <header>
        header
    <header>
@endsection

@section ('content')
    <main>
        Hello, {!! $name !!}
    </main>

@endsection

@section ('footer')
    <footer>
        footer
    </footer>
@endsection