@extends ('layout')


@section ('main')
    <main>
        <h2><b>What the 😈🔥⬅🏃 makes you think you know about huntin' 🧛🏻🧛🏼🧛🏽🧛🏾🧛🏿🧛‍♂️🧛‍♀️ ! </b></h2><br>

        <form action="" method="post">
            @csrf
            <label for="vampire_name"><h4>Your vampire name: </h4></label>
            <input type="text" name="vampire_name" id="vampire_name" placeholder="put your teeth in here" /><br>
            <label for="vampire_name"><h4>Vampire's powers: </h4></label>
            <input type="text" name="vampire_powers" id="vampire_powers" placeholder="put your powers in here" /><br>
            <label for="vampire_name"><h4>Vampire's kryptonite: </h4></label>
            <input type="text" name="vampire_kryptonite" id="vampire_kryptonite" placeholder="put your kryptonite in here" /><br><br>
            <input type="submit" value="Sign up for blood..." class="btn btn-primary"/>
        </form>
    </main>
@endsection
