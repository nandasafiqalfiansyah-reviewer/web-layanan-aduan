// Ambil elemen berdasarkan ID
const openModalLink = document.getElementById("openModalLink");
const modal = document.getElementById("modal");
const modalContent = document.getElementById("modalContent");
const closeModalButton = document.getElementById("closeModalButton");

// Fungsi untuk membuka modal
openModalLink.addEventListener("click", function () {
  modal.style.display = "block";
});

// Fungsi untuk menutup modal
function closeModal() {
  modal.style.display = "none";
}

// Menutup modal saat tombol "Tutup" di dalam modal diklik
closeModalButton.addEventListener("click", closeModal);

// Menutup modal saat area latar belakang di sekitarnya diklik
modal.addEventListener("click", function (event) {
  if (event.target === modal) {
    closeModal();
  }
});

// Mencegah penutupan modal saat bagian dalam modal di-klik
modalContent.addEventListener("click", function (event) {
  event.stopPropagation();
});
