// API Configuration
const API_BASE_URL = 'http://localhost:8000/api';
const STORAGE_URL = 'http://localhost:8000/storage';

async function fetchData(endpoint) {
    try {
        const response = await fetch(`${API_BASE_URL}/${endpoint}`);
        const result = await response.json();
        if (result.status === 'success') {
            return result.data;
        } else {
            console.error('API Error:', result.message);
            return null;
        }
    } catch (error) {
        console.error('Fetch Error:', error);
        return null;
    }
}
// Help functionality for URL checks
function isPage(name) {
    const path = window.location.pathname.toLowerCase().replace(/\/$/, ""); // Remove trailing slash
    return path.includes(name.toLowerCase() + '.html') || path.endsWith('/' + name.toLowerCase()) || (name === 'index' && (path === '/' || path === '' || path.endsWith('/index')));
}

// Portfolio Loading
async function loadPortfolios() {
    // Optimization: Only fetch data for index page (dynamic loading).
    // The main Portfolio page uses server-side rendering.
    if (!isPage('index')) return;

    // Check if content is already loaded (Server Side Rendering)
    const galleryInner = document.querySelector('#projectGallery .carousel-inner');
    if (galleryInner && galleryInner.children.length > 0) return;

    const portfolios = await fetchData('portofolio');
    if (!portfolios) return;

    // Handle index carousel (Latest projects)
    const projectGalleryInner = document.querySelector('#projectGallery .carousel-inner');
    if (projectGalleryInner) {
        projectGalleryInner.innerHTML = '';
        for (let i = 0; i < portfolios.length; i += 3) {
            const chunk = portfolios.slice(i, i + 3);
            const item = document.createElement('div');
            item.className = `carousel-item ${i === 0 ? 'active' : ''}`;
            let rowContent = '<div class="row g-4 px-5">';
            chunk.forEach(p => {
                rowContent += `
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="project-image-container">
                                <img src="${p.image_url}" alt="${p.title}">
                                <div class="project-image-overlay">
                                    <div class="btn-zoom" data-bs-toggle="modal"
                                        data-bs-target="#imagePreviewModal" data-bs-image="${p.image_url}">
                                        <i class='bx bxs-fullscreen'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3>${p.title}</h3>
                                <p>${p.category}</p>
                                <a href="detail-proyek?id=${p.id}" class="btn btn-details">Details <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                `;
            });
            rowContent += '</div>';
            item.innerHTML = rowContent;
            projectGalleryInner.appendChild(item);
        }
    }
}

// Client Loading
async function loadClients() {
    if (!isPage('index')) return;

    // Check if content is already loaded (Server Side Rendering)
    const clientInner = document.querySelector('#buttonCarousel2 .carousel-inner');
    if (clientInner && clientInner.children.length > 0) return;

    const clients = await fetchData('klien');
    if (!clients) return;

    // Handle index.html clients carousel
    const buttonCarouselInner = document.querySelector('#buttonCarousel2 .carousel-inner');
    if (buttonCarouselInner) {
        buttonCarouselInner.innerHTML = '';

        // Define categories exactly as they map to the 4 carousel slides/buttons
        // Order: 0: Pemerintah, 1: Fasilitas Kesehatan, 2: Pendidikan, 3: Swasta
        const categories = ['Pemerintah', 'Fasilitas Kesehatan', 'Pendidikan', 'Swasta'];

        categories.forEach((category, index) => {
            const filteredClients = clients.filter(c => {
                if (!c.kategori) return false;
                const clientCat = c.kategori.toLowerCase().trim();
                const targetCat = category.toLowerCase().trim();

                // Allow fuzzy match for Pemerintah to catch 'Pemerintahan'
                if (targetCat === 'pemerintah' && clientCat.includes('pemerintah')) return true;

                return clientCat === targetCat;
            });

            const item = document.createElement('div');
            item.className = `carousel-item ${index === 0 ? 'active' : ''}`;

            let htmlContent = '<div class="row justify-content-center">';

            if (filteredClients.length > 0) {
                filteredClients.forEach(client => {
                    htmlContent += `
                        <div class="col-lg-2 col-md-4 col-6 mb-4">
                            <div class="client-logo-card shadow-sm mb-3">
                                <div class="logo-wrapper">
                                    <img src="${client.logo_url}" alt="${client.nama}">
                                </div>
                                <p class="logo-title">${client.nama}</p>
                            </div>
                        </div>
                    `;
                });
            } else {
                htmlContent += `<div class="col-12 text-center text-muted py-5"><p>Belum ada data klien untuk kategori ${category}</p></div>`;
            }

            htmlContent += '</div>';
            item.innerHTML = htmlContent;
            buttonCarouselInner.appendChild(item);
        });
    }
}

async function loadProjectDetail() {
    const urlParams = new URLSearchParams(window.location.search);
    const projectId = urlParams.get('id');
    if (!projectId) return;

    const portfolios = await fetchData('portofolio');
    const project = portfolios.find(p => p.id == projectId || p.title.toLowerCase().replace(/\s+/g, '-') === projectId);

    if (project) {
        document.title = `${project.title} - Optima Multi Sinergi`;
        const setText = (id, text) => {
            const el = document.getElementById(id);
            if (el) el.innerText = text;
        };

        setText('project-title', project.title);

        const imgEl = document.getElementById('project-image');
        if (imgEl) imgEl.src = project.image_url;

        setText('detail-name', project.title);
        setText('detail-category', project.category);
        setText('detail-tools', project.tools_pengembangan || '-');

        const descEl = document.getElementById('project-description');
        if (descEl) descEl.innerHTML = project.deskripsi_panjang || project.deskripsi || '';

        setText('project-title-display', project.title);

        const featuresContainer = document.getElementById('project-features');
        if (featuresContainer && project.advantages) {
            featuresContainer.innerHTML = '';
            let advantages = project.advantages;
            if (typeof advantages === 'string') {
                try { advantages = JSON.parse(advantages); } catch (e) { advantages = []; }
            }
            if (Array.isArray(advantages)) {
                advantages.forEach((feature, index) => {
                    const div = document.createElement('div');
                    div.className = 'col-md-6 mb-4';
                    div.innerHTML = `
                        <div class="d-flex align-items-start h-100">
                            <div class="flex-shrink-0 me-3">
                                <i class="bi bi-check-circle-fill fs-3" style="color: #FDBF11;"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Keunggulan ${index + 1}</h5>
                                <p class="text-muted small mb-0 text-justify">${feature}</p>
                            </div>
                        </div>
                    `;
                    featuresContainer.appendChild(div);
                });
            }
        }
    }
}

// Initialize Bootstrap components (optional if using data-bs attributes only, but good practice)
document.addEventListener('DOMContentLoaded', function () {
    // Load dynamic content from CMS
    // loadCareers(); // TODO: Implement this function if needed
    loadPortfolios();
    loadClients();

    if (isPage('detail-proyek')) {
        loadProjectDetail();
    }

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-sm');
        } else {
            navbar.classList.remove('shadow-sm');
        }
    });

    // Close mobile menu when a link is clicked
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                bsCollapse.toggle();
            }
        });
    });

    // Optional: Add active class to nav links on scroll
    const sections = document.querySelectorAll('section');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current) && current !== '') {
                link.classList.add('active');
            }
        });
    });
    // Sync Carousel Slide Event -> Active Button State
    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
        carousel.addEventListener('slid.bs.carousel', function (event) {
            const index = event.to;
            const targetId = this.id;

            // Specific fix for Client Category Buttons
            // We search for buttons that target this carousel AND have the identification class
            const clientBtns = document.querySelectorAll(`.client-category-btn[data-bs-target="#${targetId}"]`);

            if (clientBtns.length > 0) {
                clientBtns.forEach(btn => {
                    // Check strict slide index
                    const slideTo = parseInt(btn.getAttribute('data-bs-slide-to'));
                    if (slideTo === index) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });
            } else {
                // Fallback for other carousels (like portfolio)
                const buttons = document.querySelectorAll(`button[data-bs-target="#${targetId}"][data-bs-slide-to]`);
                buttons.forEach(btn => {
                    if (btn.getAttribute('data-bs-slide-to') == index) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });
            }
        });
    });

    // Vision & Mission Tabs
    const vmTabButtons = document.querySelectorAll('.vm-tab-btn');
    const vmTabPanes = document.querySelectorAll('.vm-tab-pane');

    vmTabButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all buttons and panes
            vmTabButtons.forEach(btn => btn.classList.remove('active'));
            vmTabPanes.forEach(pane => pane.classList.remove('active'));

            // Add active class to clicked button and corresponding pane
            this.classList.add('active');
            document.getElementById(targetTab + '-content').classList.add('active');
        });
    });

    // Direct click handler for client category buttons
    // We attach directly to each button to bypass Bootstrap's stopPropagation
    const clientCategoryBtns = document.querySelectorAll('.client-category-btn');
    clientCategoryBtns.forEach(btn => {
        btn.addEventListener('click', function (e) {
            // Remove active class from ALL client category buttons
            clientCategoryBtns.forEach(b => b.classList.remove('active'));
            // Add active to the clicked one
            this.classList.add('active');
        });
    });
});

// Stats Counter Animation
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute('data-target');
                let count = 0;
                const duration = 2000; // 2 seconds animation
                const increment = target / (duration / 16); // ~60 FPS

                const updateCount = () => {
                    count += increment;
                    if (count < target) {
                        counter.innerText = Math.ceil(count);
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
                observer.unobserve(counter);
            }
        });
    }, observerOptions);

    const counters = document.querySelectorAll('.count');
    counters.forEach(counter => {
        observer.observe(counter);
    });
});

// Image Preview Modal Logic
document.addEventListener('DOMContentLoaded', function () {
    const imagePreviewModal = document.getElementById('imagePreviewModal');
    if (imagePreviewModal) {
        imagePreviewModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const imageUrl = button.getAttribute('data-bs-image');
            const modalImage = imagePreviewModal.querySelector('#modalPreviewImage');
            modalImage.src = imageUrl;
        });
    }
});

// Contact Form Submission Handler
document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.querySelector('form');

    if (contactForm && isPage('kontak')) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault(); // Mencegah form reload halaman

            // Ambil nilai dari form
            const nama = document.getElementById('Nama').value.trim();
            const email = document.getElementById('Email').value.trim();
            const noTelp = document.getElementById('NoTelp').value.trim();
            const kota = document.getElementById('Kota').value.trim();
            const komentar = document.getElementById('Komentar').value.trim();
            const agreement = document.getElementById('exampleCheck1').checked;

            // Validasi form
            if (!nama || !email || !noTelp || !kota || !komentar) {
                showNotification('Mohon lengkapi semua field!', 'danger');
                return;
            }

            if (!agreement) {
                showNotification('Anda harus menyetujui kebijakan penyimpanan data!', 'warning');
                return;
            }

            // Validasi email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showNotification('Format email tidak valid!', 'danger');
                return;
            }

            // Buat object data form
            const formData = {
                nama: nama,
                email: email,
                noTelp: noTelp,
                kota: kota,
                komentar: komentar
            };

            // Kirim ke API CMS
            fetch(`${API_BASE_URL}/kontak`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            })
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success' || result.message === 'Pesan berhasil dikirim') {
                        showNotification('Data berhasil dikirim! Terima kasih telah menghubungi kami.', 'success');
                        contactForm.reset();
                    } else {
                        showNotification('Gagal mengirim data: ' + (result.message || 'Unknown error'), 'danger');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showNotification('Terjadi kesalahan koneksi ke server.', 'danger');
                });
        });
    }
});

// Fungsi untuk menampilkan notifikasi
function showNotification(message, type = 'success') {
    // Buat element notifikasi
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3`;
    notification.style.zIndex = '9999';
    notification.style.minWidth = '300px';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;

    // Tambahkan ke body
    document.body.appendChild(notification);

    // Hapus notifikasi setelah 5 detik
    setTimeout(() => {
        notification.remove();
    }, 5000);
}

// Fungsi untuk melihat semua data yang tersimpan (opsional - untuk admin)
function viewAllContactData() {
    const data = JSON.parse(localStorage.getItem('contactFormData')) || [];
    console.table(data);
    return data;
}

// Fungsi untuk menghapus semua data (opsional - untuk admin)
function clearAllContactData() {
    localStorage.removeItem('contactFormData');
    console.log('Semua data kontak telah dihapus');
}

// Scroll Reveal Animation
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2 // Trigger when 20% visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show-animate');
                observer.unobserve(entry.target); // Animate once
            }
        });
    }, observerOptions);

    const animatedElements = document.querySelectorAll('.animate-from-left, .animate-from-right');
    animatedElements.forEach(el => observer.observe(el));
});