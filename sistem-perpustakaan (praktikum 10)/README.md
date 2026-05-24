# Tugas Pertemuan 9 - Pengenalan Framework Laravel MVC

**Nama:** Ramonaa Aprilia Yuniar  
**NIM:** 60324039  
**Prodi:** Informatika  
**Semester:** 4 
**Mata Kuliah:** Pemrogramman Web II  
**Repository:** [Link GitHub](https://github.com/ramonaapriliayuniar55/Tugas-Pertemuan-9-PENGENALAN-FRAMEWORK-LARAVEL-MVC)

---

##  Tugas 1 - Routing dan View Anggota 

### Route yang dibuat:
| Method | URL | Keterangan |
|--------|-----|------------|
| GET | `/anggota` | Daftar semua anggota |
| GET | `/anggota/{id}` | Detail anggota |

### Screenshot :

#### 1. Tampilan Daftar Anggota (`/anggota`)
![Tampilan Anggota](screenshots/tampilananggota.png)

#### 2.  Detail Anggota (`/anggota/1`)
![Detail Anggota](screenshots/detailanggota.png)

---

## Tugas 2 - Controller Kategori

### Controller: `KategoriController`
- `index()` - Menampilkan daftar kategori
- `show($id)` - Menampilkan detail kategori + daftar buku
- `search($keyword)` - Mencari kategori berdasarkan keyword

### Route yang dibuat:
| Method | URL | Controller | Keterangan |
|--------|-----|------------|------------|
| GET | `/kategori` | `KategoriController@index` | Daftar kategori |
| GET | `/kategori/{id}` | `KategoriController@show` | Detail kategori |
| GET | `/kategori/search/{keyword}` | `KategoriController@search` | Cari kategori |

### Screenshot :

#### 1. Tampilan Daftar Kategori (`/kategori`)
![Kategori](screenshots/kategori.png)

#### 2. Detail Kategori (`/kategori/1`)
![Detail Kategori](screenshots/detailkategori.png)

#### 3. Hasil Search (`/kategori/search/programming`)
![Hasil Search](screenshots/hasilsearchprogramming.png)

---


