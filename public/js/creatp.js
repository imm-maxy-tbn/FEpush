document.addEventListener("DOMContentLoaded", function () {
    const blogContainer = document.getElementById("blogContainer");
    const blogData = [
        {
            title: "Lorem ipsum dolor sit amet consectetur adipiscing",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "creatp1",
        },
        {
            title: "ullamcorper montes ultrices odio blandit habitant dignissim duis, augue ante eros consequat",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "#",
        },
        {
            title: "pellentesque dictum mattis inceptos posuere himenaeos nisl suscipit",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "#",
        },
        {
            title: "Lorem ipsum dolor sit amet consectetur adipiscing",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "#",
        },
        {
            title: "ullamcorper montes ultrices odio blandit habitant dignissim duis, augue ante eros consequat",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "#",
        },
        {
            title: "pellentesque dictum mattis inceptos posuere himenaeos nisl suscipit",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "#",
        },
        {
            title: "Lorem ipsum dolor sit amet consectetur adipiscing",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "#",
        },
        {
            title: "ullamcorper montes ultrices odio blandit habitant dignissim duis, augue ante eros consequat",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "#",
        },
        {
            title: "pellentesque dictum mattis inceptos posuere himenaeos nisl suscipit",
            content:
                "Vulputate dis quisque penatibus conubia montes duis laoreet mollis primis massa nostra mus, lacus ornare leo ultrices pretium posuere phasellus habitant",
            link: "#",
        },
    ];

    blogData.forEach((blog) => {
        const blogCard = document.createElement("div");
        blogCard.className = "blog-card";
        blogCard.innerHTML = `
            <a href="${blog.link}">
                <div class="blog-image"></div>
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
