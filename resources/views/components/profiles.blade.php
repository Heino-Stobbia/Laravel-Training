<form method="post" action="/profile">
    @csrf
    <input type="number" name="Invoice" placeholder="Invoice"></input>
    <input type="number" name="transaksie" placeholder="Transaksie"></input>
    <input type="number" name="prys" placeholder="Prys"></input>

    <button id="btnSave">Save</button>
</form>