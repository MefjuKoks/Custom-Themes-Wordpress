function ScaleAndUnscaleImageAfter2Seconds() {
    document.addEventListener('DOMContentLoaded', () => {
        let gallery = document.querySelectorAll(".wp-block-gallery .wp-block-image");
        let h2s = document.querySelectorAll(".post h2");
        gallery.forEach(image => {
            image.addEventListener("mouseover", async () => {
                image.style.cursor = "Pointer";
                image.classList.remove("image-unscaled");
                image.classList.add("image-scaled");
                await wait(2000);
                image.classList.remove("image-scaled");
                image.classList.add("image-unscaled");
            });
        });
    });
}

function wait(ms) {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("resolved");
        }, ms);
    });
}

ScaleAndUnscaleImageAfter2Seconds();


//FAQ
function ShowFaqAndDelete(){
    let FAQ_questions = document.querySelectorAll('.faq-ul li');
    let index = 0;
    FAQ_questions.forEach(FQ => {
        index += 1;
        if(index % 2 == 0){
            //
        }
        else{
            FQ.addEventListener("click" , async () => {
                let FQSibling = FQ.nextElementSibling;
                FQSibling.style.display = "block";
                await wait(5000);
                FQSibling.style.display = "none";
            })
        }
    });
}
ShowFaqAndDelete();




//FORM CONTACT






