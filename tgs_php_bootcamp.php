<?php
// Fungsi untuk menghitung luas lingkaran
function LuasLingkaran(int $jariJari)
{
    // untuk format number
    return number_format(M_PI * pow($jariJari, 2), 2, '.', '');
}

// Fungsi untuk menghitung luas lingkaran
function KelilingLingkaran(int $jariJari)
{
    return number_format((2 * (M_PI * $jariJari)), 2, '.', '');
}

function LuasPersegiPanjang(int $panjang, int $lebar)
{
    return number_format(($panjang * $lebar),2,',','');
}

// Loop angka 1 - 100
for ($i = 1; $i <= 100; $i++) {

    // Cek keliptan 3 & 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        $panjang = $i / 3;
        $lebar = $i / 5;
        $LuasPersegiPanjang = LuasPersegiPanjang($panjang,$lebar);
        echo "$LuasPersegiPanjang<br> ";
    }
    // Cek kelipatan 3
    else if ($i % 3 == 0) {
        $jariJari = $i / 3;
        $luasLingkaran = LuasLingkaran($jariJari);
        echo "$luasLingkaran<br>";
    }

    // Cek kelipatan 5
    else if ($i % 5 == 0) {
        $jariJari = $i / 5;
        $kelilingLingkaran = KelilingLingkaran($jariJari);
        echo "$kelilingLingkaran<br>";
    }

     else {
        echo "$i.00<br>";
    }
}
