document.addEventListener("DOMContentLoaded", function () {
    const blogContainer = document.getElementById("blogContainer");
    const blogData = [
        {
            title: "Impact Measurement: Mengukur Dampak dan Membangun Kepercayaan di Era Transformasi",
            content:
                "Istilah Impact measurement sedang tren. Organisasi berlomba memamerkan inisiatif berdampak tinggi. Namun, tak jarang yang terjebak pada pencitraan belaka. Impact measurement yang sejati harus lebih dari sekedar kata kunci. Ini tentang strategi terukur untuk memastikan program kita membawa perubahan nyata.",
            link: "blogarticle",
            image: "images/g1.png",
        },
        {
            title: "Dampak Luar Biasa yang Jarang Diketahui: Impact Measurement Maxy Academy dan TBN Indonesia Membangun Masa Depan yang Lebih Baik",
            content:
                "Di tengah hiruk pikuk kehidupan modern, seringkali kita lupa untuk menengok sekeliling dan melihat dampak positif yang ditimbulkan oleh berbagai organisasi dan institusi. Maxy Academy dan TBN Indonesia adalah dua contoh organisasi yang patut diapresiasi karena kontribusi luar biasa mereka dalam membangun masa depan yang lebih baik bagi masyarakat.",
            link: "#",
            image: "images/g2.png",
        },
        {
            title: "Impact Movement: Bergerak untuk Dunia yang Lebih Baik",
            content:
                "Impact Movement merupakan sebuah gerakan yang bertujuan untuk menciptakan perubahan positif di dunia melalui tindakan dan inisiatif yang berkelanjutan. Gerakan ini melibatkan berbagai individu, organisasi, dan komunitas yang bekerjasama untuk mengatasi berbagai masalah sosial dan lingkungan. Contohnya, gerakan perubahan iklim, gerakan keadilan sosial, gerakan kewirausahaan sosial, dan gerakan pendidikan.",
            link: "#",
            image: "images/g3.png",
        },
        {
            title: "SOCIOPRENEURSHIP: Trend Karir Masa Depan Anak Muda yang Berdampak Nyata",
            content:
                "Sociopreneurship merupakan konsep kewirausahaan yang berfokus pada solusi inovatif untuk mengatasi masalah lingkungan dan sosial. Sociopreneur bukan hanya ingin meraih keuntungan, tetapi juga membawa perubahan positif bagi masyarakat dan dunia.",
            link: "#",
            image: "images/g4.png",
        },
        {
            title: "IMM Membuka Peluang Bisnis Berdampak Untuk Membangun Indonesia Maju",
            content:
                "Di sinilah peran IMM (Sociopreneurship Bootcamp) hadir. Program yang merupakan hasil kolaborasi antara Maxy Academy dan TBN Indonesia, dirancang khusus untuk membantu para sociopreneur Indonesia dalam mewujudkan impian mereka. IMM bukan hanya sekadar pelatihan, tetapi juga sebuah ekosistem pendukung yang komprehensif.",
            link: "#",
            image: "images/g5.png",
        },
        {
            title: "Metrik Tepat Sasaran : Panduan Memilih Metrik untuk Mengukur Dampak Proyek",
            content:
                "Metrik merupakan alat ukur yang penting untuk mengevaluasi keberhasilan suatu proyek. Namun, memilih metrik yang tepat dapat menjadi sebuah tantangan tersendiri. Oleh karena itu, blog ini akan membantu kamu melalui proses pemilihan metrik yang efektif, mulai dari menentukan goals yang relevan hingga memilih indikator SDGs yang sesuai.",
            link: "#",
            image: "images/g6.png",
        },
        {
            title: "Apa sih dampak positif dari SDGs",
            content:
                "SDGs atau Sustainable Development Goals merupakan program yang ditetapkan oleh PBB atau Perserikatan Bangsa-Bangsa yang memiliki tujuan untuk mencapai kehidupan berkelanjutan yang lebih baik bagi seluruh dunia.",
            link: "#",
            image: "images/g7.png",
        },
        {
            title: "Membangun Masa Depan Pekerjaan Layak dan Pertumbuhan Ekonomi Berkelanjutan di Indonesia Bersama IMM",
            content:
                "Pernahkah kamu membayangkan bagaimana masa depan Indonesia? Tenang, IMM punya misi keren untuk mewujudkan masa depan Indonesia yang lebih gemilang, terutama dalam menciptakan pekerjaan layak dan pertumbuhan ekonomi yang berkelanjutan.",
            link: "#",
            image: "images/g8.png",
        },
        {
            title: "Peran Impact Ambassador dalam Kolaborasi Maxy Academy dengan TBN Indonesia untuk Mencapai Tujuan Pembangunan Berkelanjutan (SDGs)",
            content:
                "Maxy Academy, sebuah platform pendidikan online, telah berkolaborasi dengan TBN Indonesia, sebuah yayasan yang berkomitmen untuk meningkatkan akses pendidikan dan kesejahteraan masyarakat.",
            link: "#",
            image: "images/g9.png",
        },
    ];

    blogData.forEach((blog) => {
        const blogCard = document.createElement("div");
        blogCard.className = "blog-card";
        blogCard.innerHTML = `
            <a href="${blog.link}">
                <div class="blog-image" style="background-image: url(${blog.image});"></div>
                <h3>${blog.title}</h3>
                <p>${blog.content}</p>
            </a>
        `;
        blogContainer.appendChild(blogCard);
    });
});

function searchBlog() {
    const input = document.getElementById("searchInput").value.toLowerCase();
    const blogCards = document.querySelectorAll(".blog-card");

    blogCards.forEach((card) => {
        const title = card.querySelector("h3").textContent.toLowerCase();
        const content = card.querySelector("p").textContent.toLowerCase();
        if (title.includes(input) || content.includes(input)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var loading = document.getElementById("loading");
        loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
    }, 1000); // 3000 milidetik = 3 detik
});
