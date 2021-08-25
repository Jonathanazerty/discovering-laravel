@extends ('layout')

@section ('main')
    <main>
        <h4><b>What the 😈🔥⬅🏃 makes you think you know about huntin' 🧛🏻🧛🏼🧛🏽🧛🏾🧛🏿🧛‍♂️🧛‍♀️ ! </b></h4>

        <form action="" method="post">
            @csrf
            <label for="vampire_name">Your vampire name</label>
            <input type="text" name="vampire_name" id="vampire_name" placeholder="put your teeth in here" />
            <input type="submit" value="Signup" />
        </form>
    </main>
@endsection
