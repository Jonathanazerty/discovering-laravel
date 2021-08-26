@extends ('layout')


@section ('main')
    <main>
        <h1><b>What the 😈🔥⬅🏃 makes you think you know about huntin' 🧛🏻🧛🏼🧛🏽🧛🏾🧛🏿🧛‍♂️🧛‍♀️ ! </b></h1><br>

        <form action="" method="post">
            @csrf
            <label for="vampire_name"><h2>Your vampire name: </h2></label>
            <input type="text" name="vampire_name" id="vampire_name" placeholder="put your teeth in here" /><br><br>
            <label for="vampire_powers"><h2>Vampire's powers: </h2></label>
            <input type="text" name="vampire_powers" id="vampire_powers" placeholder="put your powers in here" /><br><br>
            <label for="vampire_kryptonite"><h2>Vampire's kryptonite: </h2></label>
            <input type="text" name="vampire_kryptonite" id="vampire_kryptonite" placeholder="put your kryptonite in here" /><br><br><br>
            <input type="submit" value="Sign up for blood..." class="btn btn-primary"/>
        </form>
    </main>
@endsection
