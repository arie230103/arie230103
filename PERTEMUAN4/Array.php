<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>

    <h1>Berlatih Array</h1>

    <h3>Membalikkan Kalimat</h3>
    <form action="#" id="balikString">
        <input type="text" id="word" placeholder="masukkan kalimat">
        <input type="submit" value="Balik Kalimat">
    </form>
    <div id="jawaban1" style="margin-top: 10px"></div>

    <h3>Looping Array</h3>
    <div id="jawaban2"></div>


    <script>
        /* 
                    SOAL NO. 1 Balik Kalimat 
                    Tipe data String dapat dilihat sebagai tipe data array. Kita dapat mengakses 
                    karakter-karakter pada sebuah string seperti mengakses elemen pada array.
                    Buatlah sebuah fungsi dengan nama balikString(). Fungsi ini akan menerima argumen 
                    sebuah string dan mengembalikan kebalikannya.
                    
                    Catatan: TIDAK Boleh menggunakan reverse, wajib dengan looping!

                    Contoh: 
                    balikString("abduh coding") 
                    akan memberikan output: "gnidoc hudba"

                    Hint: Gunakan properti length dari string untuk mencari tahu panjang string
                */
        // Code Kamu di sini

        function balikString(kalimat) {
            let kalimatBalik = ""; //Buat variabel kosong untuk nanti menaruh kata per kata nya nanti
            for (let i = kalimat.length - 1; i >= 0; i--) {  //Buat variabel i sebagai index array, lalu masukkan panjang string kalimat sebagai nilai i, lalu dikurangi 1, karena index array dimulai dari 0. Sip... PAHAM AKHIRNYA!
                kalimatBalik += kalimat [i]; //Masukkan nilai pada kalimatBalik yang diambil dari index array kata sesuai dengan nilai i.
            }
            return kalimatBalik; //Selesai~
        }

        // Driver Code, jangan diganggu!
        var formBalikString = document.getElementById("balikString")
        formBalikString.addEventListener("submit", function(e) {
            e.preventDefault()
            var word = document.getElementById("word").value
            var reverseWord = balikString(word)

            document.getElementById("jawaban1").innerHTML = reverseWord
        })



        /* 
            SOAL NO. 2 LOOPING PADA ARRAY
            Buatlah sebuah fungsi dengan nama dataHandling() dengan sebuah parameter untuk menerima argumen. Argumen yang akan diterima adalah sebuah 
            array yang berisi beberapa array sejumlah n. Contoh input dapat dilihat dibawah:

            var input = [
                ["0001", "Roman Alamsyah", "Bandar Lampung", "21/05/1989", "Membaca"],
                ["0002", "Dika Sembiring", "Medan", "10/10/1992", "Bermain Gitar"],
                ["0003", "Winona", "Ambon", "25/12/1965", "Memasak"],
                ["0004", "Bintang Senjaya", "Martapura", "6/4/1970", "Berkebun"]
            ]

            Tugas kamu adalah mengimplementasikan fungsi dataHandling agar dapat menampilkan data-data pada dari argumen seperti di bawah ini:

            Nomor ID:  0001
            Nama Lengkap:  Roman Alamsyah
            TTL:  Bandar Lampung 21/05/1989
            Hobi:  Membaca

            Nomor ID:  0002
            Nama Lengkap:  Dika Sembiring
            TTL:  Medan 10/10/1992
            Hobi:  Bermain Gitar

            Nomor ID:  0003
            Nama Lengkap:  Winona
            TTL:  Ambon 25/12/1965
            Hobi:  Memasak

            Nomor ID:  0004
            Nama Lengkap:  Bintang Senjaya
            TTL:  Martapura 6/4/1970
            Hobi:  Berkebun

        */

        var input = [
            ["0001", "Roman Alamsyah", "Bandar Lampung", "21/05/1989", "Membaca"],
            ["0002", "Dika Sembiring", "Medan", "10/10/1992", "Bermain Gitar"],
            ["0003", "Winona", "Ambon", "25/12/1965", "Memasak"],
            ["0004", "Bintang Senjaya", "Martapura", "6/4/1970", "Berkebun"]
        ]
        // Code kamu di sini, lakukan looping terhadap input di atas
        function dataHandling(biodata) {
            let hasil = "";
            biodata.forEach(function bio(data) {
                hasil +=
                "Nomor ID: " + data[0] + "<br>" +
                "Nama Lengkap: " + data[1] + "<br>" +
                "TTL: " + data[2] + " " + data[3] + "<br>" +
                "Hobi: " + data[4] + "<br>" + "<br>"
                ; 
            });
            return hasil;
        }

        var jawaban2 = dataHandling(input); // =  Isikan outputnya di sini

        document.getElementById("jawaban2").innerHTML = jawaban2;
    </script>

</body>

</html>
