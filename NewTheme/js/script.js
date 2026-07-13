function ScaleAndUnscaleImageAfter2Seconds() {
    document.addEventListener('DOMContentLoaded', () => {
        let gallery = document.querySelectorAll(".wp-block-gallery .wp-block-image");
        let h2s = document.querySelectorAll(".post h2");
        gallery.forEach(image => {
            image.addEventListener("mouseover", async () => {
                image.classList.remove("image-unscaled");
                image.classList.add("image-scaled");
                await wait();
                image.classList.remove("image-scaled");
                image.classList.add("image-unscaled");
            });
        });
        h2s.forEach(h2 => {
            h2.addEventListener("mouseover", async () => {
                h2.classList.remove("image-unscaled");
                h2.classList.add("image-scaled");
                await wait();
                h2.classList.remove("image-scaled");
                h2.classList.add("image-unscaled");
            });
        })
    });
}

function wait() {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("resolved");
        }, 2000);
    });
}

ScaleAndUnscaleImageAfter2Seconds();




