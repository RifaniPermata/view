let siswa = document.getElementsByTagName("ol");
siswa[0].addEventListener("click", tampilkan);

function tampilkan(event){
	alert("Cek data siswa"+event.target.innerHTML);
	
}