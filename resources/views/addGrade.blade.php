<form method="POST" action="/add-user-grade">
    {{csrf_field()}}
    @if($errors->any())
        <p>Greska: {{$errors->first()}}</p>
    @endif
    <input  required type="text" name="predmet" id="predmet" placeholder="Dodaj predmet">
    <input required  type="number" name="ocena" id="predmet" placeholder="Dodaj ocenu">
    <input  required type="text" name="profesor" id="predmet" placeholder="Ime profesora">
    <button>Dodaj ocenu</button>
</form>
