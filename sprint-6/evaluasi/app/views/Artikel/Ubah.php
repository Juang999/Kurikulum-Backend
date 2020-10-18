<div class="box shadow -lg">
<div class="container">
<form action="<?= BASEURL; ?>/Artikel/GetUbah" method="post">
<input type="hidden" name="id" value="<?= $data['Artikel']['id']?>">
<label for="Judul" class="mt-5">Judul</label><br>
<div class="column">
<input class="form-control mr-sm-1" type="text" name="judul" id="Judul" value="<?= $data['Artikel']['Judul']?>">
</div><br>
<label for="Artikel" class="mt-2">Artikel</label><br>
<textarea name="artikel" id="Artikel" cols="96" rows="6"><?= $data['Artikel']['Artikel']?>
</textarea><br><br>
<button type="submit" class="btn btn-primary float-right ml-1">Unggah</button>
<a href="<?= BASEURL; ?>/Home/index"><button type="button" class="btn btn-dark float-left ml-1">Kembali</button></a>
</form>
</div>
</div>