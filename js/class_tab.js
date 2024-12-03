document.querySelectorAll('.tab').forEach(tab => {
    tab.addEventListener('click', () => {
        // Hapus kelas aktif dari semua tab dan konten
        document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.content').forEach(content => {
            content.style.opacity = 0;
            content.style.display = 'none';
        });

        // Tambahkan kelas aktif ke tab yang diklik
        tab.classList.add('active');
        const target = document.getElementById(tab.getAttribute('data-target'));
        target.style.display = 'block';

        // Berikan waktu sejenak sebelum opacity ditingkatkan
        setTimeout(() => {
            target.style.opacity = 1;
        }, 10);
    });
});