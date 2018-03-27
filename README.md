# Tugas_Proweb4
Febri Wulandari
Informatika B
5150411081

A. ALGORITMA LOGIN
  1.	Mulai.
  2.	Masukkan Username dan Pasword yang sesuai.
  3.	Klik tombol Sign In.
  4.	Apabila username dan password benar, maka akan masuk ke halaman selanjutnya.
  5.	Jika Username/password salah maka akan ada peringatan bahwa username/password salah. Peringatan tersebut akan muncul diatas username        dengan jeda/selang waktu yang telah ditentukan.
  6.	Apabila sudah memasukkan dan gagal 3 kali maka akan masuk ke halaman yang berisikan bahwa di blokir.
  7.	Selesai.  
  
B. PSEUDECODE
    SESSION[‘GAGAL’], $user, $pass =0
    JIKA < $user == $dbuser && $pass == $dbpass> == TRUE
	    Maka berhasil login dan masuk ke halaman selanjutnya. 
    JIKA FALSE
	    Maka melakukan proses increment pada SESSION [‘GAGAL’] +1
	      JIKA SESSION[‘GAGAL’] >=3 ==TRUE
		      Maka melakukan prses blokir dan muncul pesan bahwa sudah diblokir
	      JIka FALSE
		      Kembali ke awal. 
         
![ss](https://github.com/Febri081/Tugas_Proweb4/blob/master/flowchart.jpg)
![ss](https://github.com/Febri081/Tugas_Proweb4/blob/master/Capture%201.PNG)
![ss](https://github.com/Febri081/Tugas_Proweb4/blob/master/Capture%202.PNG)
![ss](https://github.com/Febri081/Tugas_Proweb4/blob/master/Capture%203.PNG)
![ss](https://github.com/Febri081/Tugas_Proweb4/blob/master/Capture%204.PNG)
