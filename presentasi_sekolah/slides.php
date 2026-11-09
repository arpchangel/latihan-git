<?php
/**
 * Definisi slide presentasi.
 * type    : 'cover' | 'content'
 * content : HTML bebas (list, tabel, kartu, dll)
 */
return [

  /* ---------- 1. COVER ---------- */
  [
    'type'     => 'cover',
    'title'    => 'Pengaruh Media Sosial terhadap Prestasi Belajar Siswa',
    'subtitle' => 'Tugas Kelompok Mata Pelajaran Sosiologi',
    'meta'     => 'Disusun oleh: Kelompok 3 — Andi, Budi, Citra, Dewi<br>
                   Kelas XI IPA 2 · SMA Negeri 1 · 2026',
  ],

  /* ---------- 2. LATAR BELAKANG ---------- */
  [
    'title'   => 'Latar Belakang',
    'content' => '
      <ul>
        <li>60% remaja Indonesia memakai media sosial <strong>&gt; 3 jam/hari</strong>.</li>
        <li>Prestasi belajar dipengaruhi waktu belajar dan konsentrasi.</li>
        <li>Belum diketahui apakah keduanya saling berhubungan.</li>
      </ul>',
  ],

  /* ---------- 3. RUMUSAN MASALAH ---------- */
  [
    'title'   => 'Rumusan Masalah',
    'content' => '
      <ul>
        <li>Berapa lama siswa kelas XI menggunakan media sosial per hari?</li>
        <li>Bagaimana dampaknya terhadap waktu belajar?</li>
        <li>Apakah terdapat hubungan dengan nilai rata-rata?</li>
      </ul>',
  ],

  /* ---------- 4. TUJUAN ---------- */
  [
    'title'   => 'Tujuan Penelitian',
    'content' => '
      <ul>
        <li>Mengukur durasi penggunaan media sosial siswa.</li>
        <li>Menganalisis pengaruhnya terhadap waktu belajar.</li>
        <li>Mengetahui hubungannya dengan prestasi akademik.</li>
      </ul>',
  ],

  /* ---------- 5. DASAR TEORI ---------- */
  [
    'title'   => 'Media Sosial & Remaja',
    'content' => '
      <div class="card"><strong>Definisi</strong> — platform digital untuk berinteraksi dan berbagi konten.</div>
      <div class="card"><strong>Platform populer</strong> — Instagram, TikTok, WhatsApp, YouTube.</div>
      <div class="card"><strong>Fungsi</strong> — hiburan, informasi, komunikasi, eksistensi diri.</div>',
  ],

  /* ---------- 6. DAMPAK (2 KOLOM) ---------- */
  [
    'title'   => 'Dampak Positif & Negatif',
    'content' => '
      <div class="grid-2">
        <div class="card">
          <h3>✅ Positif</h3>
          <ul>
            <li>Sumber belajar & tutorial</li>
            <li>Memperluas jaringan</li>
            <li>Media kreativitas</li>
          </ul>
        </div>
        <div class="card">
          <h3>❌ Negatif</h3>
          <ul>
            <li>Menunda waktu belajar</li>
            <li>Menurunkan fokus</li>
            <li>Kecanduan & kurang tidur</li>
          </ul>
        </div>
      </div>',
  ],

  /* ---------- 7. METODE ---------- */
  [
    'title'   => 'Metode Penelitian',
    'content' => '
      <ul>
        <li><strong>Pendekatan:</strong> kuantitatif deskriptif.</li>
        <li><strong>Sampel:</strong> 30 siswa kelas XI (random sampling).</li>
        <li><strong>Instrumen:</strong> kuesioner online + wawancara 5 siswa.</li>
        <li><strong>Analisis:</strong> statistik deskriptif & korelasi sederhana.</li>
      </ul>',
  ],

  /* ---------- 8. HASIL ---------- */
  [
    'title'   => 'Hasil Penelitian',
    'content' => '
      <table>
        <tr><th>Durasi Media Sosial</th><th>Rata-rata Nilai</th><th>Jumlah Siswa</th></tr>
        <tr><td>&lt; 2 jam/hari</td><td>86</td><td>8</td></tr>
        <tr><td>2–4 jam/hari</td><td>81</td><td>13</td></tr>
        <tr><td>&gt; 4 jam/hari</td><td>74</td><td>9</td></tr>
      </table>
      <p style="margin-top:18px">Semakin tinggi durasi penggunaan, semakin rendah rata-rata nilai.</p>',
  ],

  /* ---------- 9. KESIMPULAN ---------- */
  [
    'title'   => 'Kesimpulan',
    'content' => '
      <ul>
        <li>Rata-rata siswa memakai media sosial <strong>3,4 jam/hari</strong>.</li>
        <li>Penggunaan berlebihan menurunkan waktu belajar.</li>
        <li>Terdapat hubungan negatif dengan prestasi akademik.</li>
      </ul>',
  ],

  /* ---------- 10. SARAN ---------- */
  [
    'title'   => 'Saran',
    'content' => '
      <ul>
        <li>Siswa membuat jadwal belajar dan batas waktu bermedia sosial.</li>
        <li>Guru & orang tua memberi pendampingan penggunaan gawai.</li>
        <li>Penelitian lanjutan dengan sampel lebih luas.</li>
      </ul>',
  ],

  /* ---------- 11. DAFTAR PUSTAKA + PENUTUP ---------- */
  [
    'title'   => 'Daftar Pustaka & Terima Kasih',
    'content' => '
      <ul>
        <li>APJII. (2025). <em>Laporan Survei Pengguna Internet Indonesia</em>.</li>
        <li>Sugiyono. (2022). <em>Metode Penelitian Kuantitatif</em>. Bandung: Alfabeta.</li>
        <li>Kementerian Pendidikan. (2024). <em>Statistik Pendidikan Nasional</em>.</li>
      </ul>
      <p style="margin-top:28px;font-size:1.2em;color:#38bdf8">
        🙏 Terima kasih — silakan bertanya.
      </p>',
  ],
];