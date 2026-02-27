REFLEKSI
1️. Apa kesulitan yang Anda temui saat menghubungkan Laravel dengan database?
Jawab:
Kesulitan yang saya temui adalah beberapa typo pada code yang kemudian membuat errror saat dijalankan, emudian sempat bingung pada awalnya karena pertama kali penggunaak CRUD di laravel, ketelitian, serta jika salah sedikit, aplikasi tidak bisa dijalankan. Selain itu, saya juga perlu memahami cara kerja migrasi agar tabel sesuai dengan struktur yang diinginkan.

2️. Bagaimana perbedaan proses CRUD di Laravel dibandingkan dengan PHP murni?
Jawab:
Perbedaan utamanya adalah Laravel lebih mudah dan terstruktur, bagi saya lebih mudah dipahami. Menurut saya, Laravel lebih praktis dibandingkan PHP murni. Di PHP murni, semua proses seperti koneksi database dan penulisan query dilakukan secara manual. Sedangkan di Laravel, sudah ada fitur bawaan sehingga cukup menggunakan perintah seperti create(), update(), dan delete(). Laravel juga kodenya lebih rapi.

3️. Bagaimana Anda memastikan keamanan saat melakukan operasi CRUD?
Jawab:
Saya memastikan keamanan dengan menggunakan validasi input agar data sesuai aturan, menambahkan @csrf pada form, dan menggunakan $fillable pada model agar tidak semua data bisa dimasukkan sembarangan. Dengan cara ini, aplikasi menjadi lebih aman
