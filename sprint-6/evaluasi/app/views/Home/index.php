<?php foreach($data['artikel'] as $Artikel) : ?>
<div class="box shadow-lg">
<br>
    <div class="container"><strong><?= $Artikel['Judul']?></strong></div>
    <br>
    <div class="mt-1 container"><?= substr($Artikel['Artikel'],0,500).'...';?></div>
    <form action="<?= BASEURL; ?>/Artikel/Ubah/<?= $Artikel['id'] ?>" method="post">
        <div class="container">
            <button type="submit" class="btn btn-primary float-right ml-1">Ubah</button>
        </div>
    </form>
    <br>
    <br>
        <form action="<?= BASEURL; ?>/Artikel/Hapus" method="post">
            <input type="hidden" name="id" value="<?= $Artikel['id']?>">
                <div class="container">
                    <button type="submit" class="btn btn-dark float-right ml-1">Hapus</button>
            </div>
        </form>
    <div class="container">
        <a href="<?= BASEURL;?>/Artikel/Baca_Lagi/<?= $Artikel['id']?>">
            <button type="button" class="btn btn-warning"><strong>Baca Selengkapnya</strong></button>
        </a>
    </div>
</div>
<?php endforeach; ?>
<br>