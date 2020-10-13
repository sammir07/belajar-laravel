<html>
  <head>
    <title>Sekolah Koding</title>
    <meta charset="UTF-8">
  </head>

  <body>


<!--bagian awal, isinya contoh pembuatan (label) Nama-->
<form action="welcome1.html">
  <div>
        <h1> Buat Account Baru! </h1>
        <h3> Sign Up Form </h3>

    <fieldset>
      <legend> Your Name </legend>
        <label for="nama1"> Firs Name : </label> <br>
        <input type="text" placeholder="Nama Depan" id="nama1"> <br>
        <br>
        <label for="nama2"> Last Name : </label> <br>
        <input type="text" placeholder="Nama Belakang" id="nama2"> <br>
    </fieldset>
  </div>


<!--Bagian dua, isinya contoh pembuatan (Radio button) Jenis Kelamin-->
<div>
  <fieldset>
    <legend> Your Gender </legend>
    <label> Gender </label> <br><br>
    <input type="radio" name="gender" value="0"> Male <br>
    <input type="radio" name="gender" value="1"> Female <br>
  </fieldset>
</div>


<!--Bagian Ketiga, isinya contoh pembuatan Negara Asal-->
<div>
  <fieldset>
    <legend> Your Country </legend>
  <label> Nationality </label> <br>
  <select>
        <option value="in"> Indonesia </option>
        <option value="am"> Amerika </option>
        <option value="tr"> Turki </option>
        <option value="id"> India </option>
        <option value="rs"> Rusia </option>
    </select>
  </fieldset>
</div>


<!--Bagian keempat, isinya contoh pembuatan (checkbox) Bahasa Anda -->
<div>
  <fieldset>
    <legend> Your Language </legend>
    <label> Language Spoken </label> <br>
    <input type="checkbox" name="bahasa" value="0"> Indonesia <br>
    <input type="checkbox" name="bahasa" value="1"> English <br>
    <input type="checkbox" name="bahasa" value="2"> Arabian <br>
    <input type="checkbox" name="bahasa" value="3"> Other <br>
  </fieldset>
</div>


<!--Bagian Kelima, isinya contoh Pembuatan (textarea) pesan anda -->
  <div>
    <fieldset>
      <legend> Your Message  </legend>
      <label for="pesan"> Pesan : </label> <br>
      <textarea cols="100" rows"50" id="pesan"></textarea>
      <br>
      <br>
   <a style="background-color: lightgrey;
    padding: 4px;
    text-decoration:none;
    border-radius: 7px;
    color: black;" href="{{ url('selamat') }}">Submit</a>
    </fieldset>
  </div>
</form>


  </body>
</html>
